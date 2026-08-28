<?php
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
  require_once __DIR__ . '/vendor/autoload.php';
} else {
  require_once __DIR__ . '/stripe/init.php';
}
require_once __DIR__ . '/secrets.php';
require_once __DIR__ . '/database.php';

$stripe = new \Stripe\StripeClient($stripeSecretKey);

function save_stripe_account(string $email, string $customerId, string $subscriptionId = '', string $status = '', ?int $periodEnd = null, ?int $moodleUserId = null, int $currentMission = 0): void {
    if ($email === '' || $customerId === '') {
        return;
    }

    try {
        $database = get_account_database();
        $statement = $database->prepare(
            'INSERT INTO stripe_accounts (email, stripe_customer_id, stripe_subscription_id, subscription_status, current_period_end, moodle_user_id, current_mission)
             VALUES (:email, :customer_id, :subscription_id, :status, :period_end, :moodle_user_id, :current_mission)
             ON DUPLICATE KEY UPDATE stripe_customer_id = VALUES(stripe_customer_id), stripe_subscription_id = COALESCE(VALUES(stripe_subscription_id), stripe_subscription_id), subscription_status = COALESCE(VALUES(subscription_status), subscription_status), current_period_end = COALESCE(VALUES(current_period_end), current_period_end), moodle_user_id = COALESCE(VALUES(moodle_user_id), moodle_user_id), current_mission = IF(VALUES(current_mission) > 0, VALUES(current_mission), current_mission)'
        );
        $statement->execute([
            'email' => strtolower(trim($email)),
            'customer_id' => $customerId,
            'subscription_id' => $subscriptionId !== '' ? $subscriptionId : null,
            'status' => $status !== '' ? $status : null,
            'period_end' => $periodEnd !== null ? gmdate('Y-m-d H:i:s', $periodEnd) : null,
            'moodle_user_id' => $moodleUserId,
            'current_mission' => $currentMission,
        ]);
    } catch (Throwable $exception) {
        error_log('Unable to save Stripe account: ' . $exception->getMessage());
    }
}

function enroll_moodle_course(string $domainName, string $token, string $restFormat, int $userId, int $courseId, int $timeEnd = 0): array {
    $result = moodle_rest_request($domainName, [
        'wstoken' => $token,
        'wsfunction' => 'enrol_manual_enrol_users',
        'moodlewsrestformat' => $restFormat,
    ] + [
        'enrolments[0][roleid]' => $GLOBALS['moodleStudentRoleId'],
        'enrolments[0][userid]' => $userId,
        'enrolments[0][courseid]' => $courseId,
        'enrolments[0][timestart]' => time(),
        'enrolments[0][timeend]' => $timeEnd,
        'enrolments[0][suspend]' => 0,
    ]);

    if (!empty($result['curl_error'])) {
        return ['success' => false, 'detail' => $result['curl_error']];
    }

    if (is_array($result['decoded']) && isset($result['decoded']['exception'])) {
        return ['success' => false, 'detail' => json_encode($result['decoded'])];
    }

    return ['success' => true];
}

function advance_subscription_mission($event, \Stripe\StripeClient $stripe): void {
    global $moodleDomainName, $moodleWebserviceToken, $moodleRestFormat, $moodleSubscriptionMissionCourseIds, $moodleSubscriptionSupportCourseId;

    $subscription = $event->data->object;
    $eventId = (string) ($event->id ?? '');
    $subscriptionId = (string) ($subscription->subscription ?? $subscription->id ?? '');
    if ($subscriptionId === '') {
        return;
    }

    try {
        $database = get_account_database();
        try {
            $subscriptionObject = $stripe->subscriptions->retrieve($subscriptionId, []);
            $periodEnd = isset($subscriptionObject->current_period_end) ? (int) $subscriptionObject->current_period_end : 0;
        } catch (Throwable $exception) {
            error_log('Unable to retrieve renewal subscription ' . $subscriptionId . ': ' . $exception->getMessage());
            return;
        }

        $statement = $database->prepare('SELECT id, moodle_user_id, current_mission FROM stripe_accounts WHERE stripe_subscription_id = :subscription_id LIMIT 1');
        $statement->execute(['subscription_id' => $subscriptionId]);
        $account = $statement->fetch();

        if (!$account || empty($account['moodle_user_id'])) {
            error_log('No tracked Moodle account found for subscription renewal ' . $subscriptionId);
            return;
        }

        $nextMission = (int) $account['current_mission'] + 1;
        $nextCourseId = (int) ($moodleSubscriptionMissionCourseIds[$nextMission - 1] ?? 0);
        if ($nextCourseId <= 0 && $moodleSubscriptionSupportCourseId <= 0) {
            error_log('No configured next mission or support course for subscription ' . $subscriptionId);
            return;
        }

        if ($eventId !== '') {
            $statement = $database->prepare('INSERT IGNORE INTO stripe_processed_events (event_id, event_type) VALUES (:event_id, :event_type)');
            $statement->execute(['event_id' => $eventId, 'event_type' => 'invoice.paid']);
            if ($statement->rowCount() !== 1) {
                return;
            }
        }

        if ($moodleSubscriptionSupportCourseId > 0 && $periodEnd > 0) {
            $supportEnrollmentResult = enroll_moodle_course(
                $moodleDomainName,
                $moodleWebserviceToken,
                $moodleRestFormat,
                (int) $account['moodle_user_id'],
                (int) $moodleSubscriptionSupportCourseId,
                $periodEnd
            );
            if (!($supportEnrollmentResult['success'] ?? false)) {
                if ($eventId !== '') {
                    $database->prepare('DELETE FROM stripe_processed_events WHERE event_id = :event_id')->execute(['event_id' => $eventId]);
                }
                error_log('Unable to extend support course for subscription ' . $subscriptionId . ': ' . ($supportEnrollmentResult['detail'] ?? 'unknown error'));
                return;
            }
        }

        if ($nextCourseId > 0) {
            $enrollmentResult = enroll_moodle_course(
                $moodleDomainName,
                $moodleWebserviceToken,
                $moodleRestFormat,
                (int) $account['moodle_user_id'],
                $nextCourseId,
                $periodEnd
            );
            if (!($enrollmentResult['success'] ?? false)) {
                if ($eventId !== '') {
                    $database->prepare('DELETE FROM stripe_processed_events WHERE event_id = :event_id')->execute(['event_id' => $eventId]);
                }
                error_log('Unable to enroll mission ' . $nextMission . ' for subscription ' . $subscriptionId . ': ' . ($enrollmentResult['detail'] ?? 'unknown error'));
                return;
            }
        }

        $statement = $database->prepare('UPDATE stripe_accounts SET current_mission = :current_mission, current_period_end = :period_end WHERE id = :id');
        $statement->execute([
            'current_mission' => $nextMission,
            'period_end' => $periodEnd > 0 ? gmdate('Y-m-d H:i:s', $periodEnd) : null,
            'id' => $account['id'],
        ]);
        error_log('Advanced subscription ' . $subscriptionId . ' to mission ' . $nextMission . ($nextCourseId > 0 ? ' course ' . $nextCourseId : ' with no further mission configured'));
    } catch (Throwable $exception) {
        if ($eventId !== '') {
            try {
                get_account_database()->prepare('DELETE FROM stripe_processed_events WHERE event_id = :event_id')->execute(['event_id' => $eventId]);
            } catch (Throwable $cleanupException) {
                error_log('Unable to release failed subscription event: ' . $cleanupException->getMessage());
            }
        }
        error_log('Subscription mission advancement failed: ' . $exception->getMessage());
    }
}

function moodle_rest_request(string $domainName, array $params): array {
    $ch = curl_init($domainName . '/webservice/rest/server.php');

    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($params),
        CURLOPT_RETURNTRANSFER => true,
    ]);

    $response = curl_exec($ch);
    $curlError = $response === false ? curl_error($ch) : '';
    curl_close($ch);

    return [
        'raw' => $response,
        'decoded' => $response === false ? null : json_decode($response, true),
        'curl_error' => $curlError,
    ];
}

function generate_moodle_password(int $length = 12): string {
    if ($length < 8) {
        $length = 8;
    }

    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $digits = '0123456789';
    $specials = '*-#@!$%^&+=?';

    $password = [
        $lowercase[random_int(0, strlen($lowercase) - 1)],
        $uppercase[random_int(0, strlen($uppercase) - 1)],
        $digits[random_int(0, strlen($digits) - 1)],
        $specials[random_int(0, strlen($specials) - 1)],
    ];

    $allCharacters = $lowercase . $uppercase . $digits . $specials;
    for ($i = count($password); $i < $length; $i++) {
        $password[] = $allCharacters[random_int(0, strlen($allCharacters) - 1)];
    }

    $keys = array_keys($password);
    for ($i = count($keys) - 1; $i > 0; $i--) {
        $j = random_int(0, $i);
        $temp = $password[$keys[$i]];
        $password[$keys[$i]] = $password[$keys[$j]];
        $password[$keys[$j]] = $temp;
    }

    return implode('', $password);
}

function get_moodle_username_from_email(string $email): string {
    $username = strstr($email, '@', true) ?: $email;
    $username = mb_strtolower($username, 'UTF-8');
    return preg_replace('/[^a-z0-9]/', '', $username);
}

function split_name_parts(string $fullName): array {
    $trimmed = trim($fullName);
    if ($trimmed === '') {
        return ['Student', ''];
    }

    $parts = preg_split('/\s+/', $trimmed);
    $first = $parts[0] ?? 'Student';
    $last = count($parts) > 1 ? implode(' ', array_slice($parts, 1)) : '';
    return [$first, $last];
}

function resolve_moodle_course_ids_from_session_data(array $sessionData, string $checkoutMode, int $defaultCourseId, array $subscriptionCourseIds): array {
    $courseIds = [];

    if (!empty($sessionData['course_ids']) && is_array($sessionData['course_ids'])) {
        foreach ($sessionData['course_ids'] as $courseId) {
            $courseId = (int) $courseId;
            if ($courseId > 0) {
                $courseIds[] = $courseId;
            }
        }
    } elseif (!empty($sessionData['course_ids_csv'])) {
        $parsedIds = preg_split('/[\s,]+/', (string) $sessionData['course_ids_csv']) ?: [];
        foreach ($parsedIds as $candidate) {
            $courseId = (int) trim((string) $candidate);
            if ($courseId > 0) {
                $courseIds[] = $courseId;
            }
        }
    }

    if ($courseIds === []) {
        $courseIds = ($checkoutMode === 'subscription')
            ? array_values(array_unique(array_map('intval', $subscriptionCourseIds)))
            : [$defaultCourseId];
    }

    return array_values(array_unique(array_filter($courseIds, static function ($courseId): bool {
        return (int) $courseId > 0;
    })));
}

function provision_moodle_user_from_session(array $sessionData): array {
    global $moodleDomainName, $moodleWebserviceToken, $moodleRestFormat, $moodleCourseId, $moodleStudentRoleId;

    $email = trim((string) ($sessionData['email'] ?? ''));
    if ($email === '') {
        return ['success' => false, 'reason' => 'missing-email'];
    }

    $fullName = (string) ($sessionData['full_name'] ?? '');
    [$firstName, $lastName] = split_name_parts($fullName);
    $newUsername = get_moodle_username_from_email($email);
    $newPassword = generate_moodle_password(12);

    $lang = strtolower(trim((string) ($sessionData['moodle_user_lang'] ?? 'en')));
    if ($lang === '') {
        $lang = 'en';
    }

    $country = trim((string) ($sessionData['moodle_user_country'] ?? ''));
    $timezone = trim((string) ($sessionData['moodle_user_timezone'] ?? ''));

    $localeMap = [
        'ar' => ['country' => 'AE', 'timezone' => 'Asia/Dubai'],
        'bg' => ['country' => 'BG', 'timezone' => 'Europe/Sofia'],
        'de' => ['country' => 'DE', 'timezone' => 'Europe/Berlin'],
        'en' => ['country' => 'US', 'timezone' => 'America/New_York'],
        'es' => ['country' => 'ES', 'timezone' => 'Europe/Madrid'],
        'fr' => ['country' => 'FR', 'timezone' => 'Europe/Paris'],
        'hi' => ['country' => 'IN', 'timezone' => 'Asia/Kolkata'],
        'ja' => ['country' => 'JP', 'timezone' => 'Asia/Tokyo'],
        'ko' => ['country' => 'KR', 'timezone' => 'Asia/Seoul'],
        'pt' => ['country' => 'PT', 'timezone' => 'Europe/Lisbon'],
        'ru' => ['country' => 'RU', 'timezone' => 'Europe/Moscow'],
        'zh_cn' => ['country' => 'CN', 'timezone' => 'Asia/Shanghai'],
        'zh_tw' => ['country' => 'TW', 'timezone' => 'Asia/Taipei'],
    ];

    if ($country === '') {
        $country = (string) ($localeMap[$lang]['country'] ?? 'US');
    }

    if ($timezone === '') {
        $timezone = (string) ($localeMap[$lang]['timezone'] ?? 'America/New_York');
    }

    $userPayload = [
        'username' => $newUsername,
        'password' => $newPassword,
        'firstname' => $firstName,
        'lastname' => $lastName,
        'email' => $email,
        'auth' => 'manual',
        'country' => $country,
        'timezone' => $timezone,
        'lang' => $lang,
    ];

    $createUserResult = moodle_rest_request($moodleDomainName, [
        'wstoken' => $moodleWebserviceToken,
        'wsfunction' => 'core_user_create_users',
        'moodlewsrestformat' => $moodleRestFormat,
    ] + ['users' => [$userPayload]]);

    if (!empty($createUserResult['curl_error'])) {
        return ['success' => false, 'reason' => 'curl-error', 'detail' => $createUserResult['curl_error']];
    }

    if (is_array($createUserResult['decoded']) && isset($createUserResult['decoded']['exception'])) {
        return ['success' => false, 'reason' => 'moodle-exception', 'detail' => $createUserResult['decoded']];
    }

    $userId = $createUserResult['decoded'][0]['id'] ?? null;
    if ($userId === null) {
        return ['success' => false, 'reason' => 'missing-user-id'];
    }

    $checkoutMode = strtolower((string) ($sessionData['checkout_mode'] ?? 'payment'));
    $courseIds = resolve_moodle_course_ids_from_session_data($sessionData, $checkoutMode, (int) $moodleCourseId, (array) $moodleSubscriptionCourseIds);
    $enrollmentEndTime = (int) ($sessionData['enrollment_end_time'] ?? 0);
    if ($enrollmentEndTime <= 0 && $checkoutMode === 'payment') {
        $enrollmentEndTime = time() + (14 * 24 * 60 * 60);
    }

    $updateUserResult = moodle_rest_request($moodleDomainName, [
        'wstoken' => $moodleWebserviceToken,
        'wsfunction' => 'core_user_update_users',
        'moodlewsrestformat' => $moodleRestFormat,
    ] + ['users' => [[
        'id' => $userId,
        'firstname' => $firstName,
        'lastname' => $lastName,
        'email' => $email,
        'country' => $country,
        'timezone' => $timezone,
        'lang' => $lang,
    ]] ]);

    if (!empty($updateUserResult['curl_error'])) {
        error_log('Moodle user update failed for user ' . $userId . ': ' . $updateUserResult['curl_error']);
    } elseif (is_array($updateUserResult['decoded']) && isset($updateUserResult['decoded']['exception'])) {
        error_log('Moodle user update failed for user ' . $userId . ': ' . json_encode($updateUserResult['decoded']));
    }

    foreach ($courseIds as $courseId) {
        $enrolResult = moodle_rest_request($moodleDomainName, [
            'wstoken' => $moodleWebserviceToken,
            'wsfunction' => 'enrol_manual_enrol_users',
            'moodlewsrestformat' => $moodleRestFormat,
        ] + [
            'enrolments[0][roleid]' => $moodleStudentRoleId,
            'enrolments[0][userid]' => $userId,
            'enrolments[0][courseid]' => $courseId,
            'enrolments[0][timestart]' => time(),
            'enrolments[0][timeend]' => $enrollmentEndTime,
        ]);

        if (!empty($enrolResult['curl_error'])) {
            return ['success' => false, 'reason' => 'enrol-curl-error', 'detail' => $enrolResult['curl_error']];
        }

        if (is_array($enrolResult['decoded']) && isset($enrolResult['decoded']['exception'])) {
            return ['success' => false, 'reason' => 'enrol-exception', 'detail' => $enrolResult['decoded']];
        }
    }

    return [
        'success' => true,
        'user_id' => $userId,
        'username' => $newUsername,
        'password' => $newPassword,
    ];
}

// To run this example, set an environment variable STRIPE_WEBHOOK_SECRET to
// your endpoint's unique secret.
//
// If you are testing with the CLI, find the secret by running 'stripe listen'.
// If you are using an endpoint defined with the API or dashboard, look in
// your webhook settings at https://dashboard.stripe.com/webhooks.
//
// Don't include webhook secrets in code.
$endpoint_secret = getenv('STRIPE_WEBHOOK_SECRET') ?: '';

$requestMethod = $_SERVER['REQUEST_METHOD'] ?? 'GET';
if ($requestMethod !== 'POST') {
    http_response_code(405);
    echo 'Stripe webhook endpoint: send a POST request from Stripe or Stripe CLI.';
    exit();
}

$payload = @file_get_contents('php://input');
if ($payload === false || $payload === '') {
    http_response_code(400);
    echo 'Webhook error: empty request body.';
    exit();
}

$event = null;

if ($endpoint_secret !== '') {
    $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE']
        ?? $_SERVER['REDIRECT_HTTP_STRIPE_SIGNATURE']
        ?? null;

    if ($sig_header === null && function_exists('getallheaders')) {
        $headers = getallheaders();
        $sig_header = $headers['Stripe-Signature'] ?? $headers['stripe-signature'] ?? null;
    }

    if ($sig_header === null || $sig_header === '') {
        http_response_code(400);
        echo 'Webhook error: missing Stripe-Signature header.';
        exit();
    }

    try {
        $event = \Stripe\Webhook::constructEvent($payload, $sig_header, $endpoint_secret);
    } catch (\UnexpectedValueException $e) {
        http_response_code(400);
        echo 'Webhook error: invalid payload.';
        exit();
    } catch (\Stripe\Exception\SignatureVerificationException $e) {
        http_response_code(400);
        echo 'Webhook error: invalid signature.';
        exit();
    }
} else {
    $decoded = json_decode($payload, true);
    if (!is_array($decoded)) {
        http_response_code(400);
        echo 'Webhook error: payload is not valid JSON object.';
        exit();
    }

    try {
        $event = \Stripe\Event::constructFrom($decoded);
    } catch (\Throwable $e) {
        http_response_code(400);
        echo 'Webhook error: failed to construct event object.';
        exit();
    }
}

// Handle the event
switch ($event->type) {
  case 'checkout.session.completed':
    $session = $event->data->object;

    $email = $session->customer_details->email
        ?? $session->customer_email
        ?? null;
    $fullName = $session->customer_details->name ?? null;

    // Fallback to the Customer object if Checkout details are missing.
    if (($email === null || $fullName === null) && !empty($session->customer)) {
        try {
            $customer = $stripe->customers->retrieve((string) $session->customer, []);
            if ($email === null && !empty($customer->email)) {
                $email = (string) $customer->email;
            }
            if ($fullName === null && !empty($customer->name)) {
                $fullName = (string) $customer->name;
            }
        } catch (\Throwable $e) {
            error_log('Stripe customer lookup failed for session ' . (string) $session->id);
        }
    }

    if ($email === null || trim($email) === '') {
        error_log('checkout.session.completed missing email for session ' . (string) $session->id);
        break;
    }

    [$firstName, $lastName] = split_name_parts((string) ($fullName ?? ''));

    $capture = [
        'event_id' => (string) $event->id,
        'session_id' => (string) $session->id,
        'email' => trim((string) $email),
        'full_name' => (string) ($fullName ?? ''),
        'first_name' => $firstName,
        'last_name' => $lastName,
        'amount_total' => (int) ($session->amount_total ?? 0),
        'currency' => (string) ($session->currency ?? ''),
        'mode' => (string) ($session->mode ?? ''),
        'subscription_id' => (string) ($session->subscription ?? ''),
        'created_at' => gmdate('c'),
    ];

    $metadata = $session->metadata ?? null;
    $checkoutMode = strtolower((string) ($metadata->checkout_mode ?? $session->mode ?? 'payment'));
    if (!in_array($checkoutMode, ['payment', 'subscription'], true)) {
        $checkoutMode = 'payment';
    }

    if ($checkoutMode === 'subscription' && !empty($session->customer)) {
        save_stripe_account(
            trim((string) $email),
            (string) $session->customer,
            (string) ($session->subscription ?? '')
        );
    }

    $subscriptionPeriodEnd = 0;
    if ($checkoutMode === 'subscription' && !empty($session->subscription)) {
        try {
            $subscription = $stripe->subscriptions->retrieve((string) $session->subscription, []);
            $subscriptionPeriodEnd = isset($subscription->current_period_end) ? (int) $subscription->current_period_end : 0;
        } catch (Throwable $exception) {
            error_log('Unable to retrieve initial subscription period: ' . $exception->getMessage());
        }
    }

    foreach (['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term', 'line_click_id'] as $campaignField) {
        $campaignValue = trim((string) ($metadata->{$campaignField} ?? ''));
        if ($campaignValue !== '') {
            $capture[$campaignField] = $campaignValue;
        }
    }

    $courseIds = [];
    if (!empty($metadata->moodle_course_ids)) {
        $courseIds = preg_split('/[\s,]+/', (string) $metadata->moodle_course_ids) ?: [];
    } elseif (!empty($metadata->moodle_course_id)) {
        $courseIds = [(string) $metadata->moodle_course_id];
    }

    $resolvedCourseIds = array_values(array_filter(array_map('intval', $courseIds)));
    $checkoutDebugPayload = [
        'source' => 'webhook.php',
        'mode' => $checkoutMode,
        'resolved_course_ids' => $resolvedCourseIds,
        'subscription_config_ids' => array_values(array_unique(array_map('intval', (array) $moodleSubscriptionCourseIds))),
        'session_id' => (string) $session->id,
        'metadata' => [
            'checkout_mode' => $metadata->checkout_mode ?? null,
            'moodle_course_id' => $metadata->moodle_course_id ?? null,
            'moodle_course_ids' => $metadata->moodle_course_ids ?? null,
        ],
    ];
    error_log('[atschool-checkout] ' . json_encode($checkoutDebugPayload));
    @file_put_contents(
        __DIR__ . '/checkout-debug.log',
        json_encode($checkoutDebugPayload, JSON_UNESCAPED_SLASHES) . PHP_EOL,
        FILE_APPEND | LOCK_EX
    );

    $provisioningResult = provision_moodle_user_from_session([
        'email' => trim((string) $email),
        'full_name' => (string) ($fullName ?? ''),
        'course_ids' => $resolvedCourseIds,
        'checkout_mode' => $checkoutMode,
        'moodle_user_lang' => (string) ($metadata->moodle_user_lang ?? ''),
        'moodle_user_country' => (string) ($metadata->moodle_user_country ?? ''),
        'moodle_user_timezone' => (string) ($metadata->moodle_user_timezone ?? ''),
        'enrollment_end_time' => $subscriptionPeriodEnd,
    ]);

    if ($provisioningResult['success'] ?? false) {
        $capture['moodle_user_id'] = $provisioningResult['user_id'] ?? null;
        $capture['moodle_username'] = $provisioningResult['username'] ?? null;
        if ($checkoutMode === 'subscription' && !empty($session->customer) && !empty($session->subscription)) {
            save_stripe_account(
                trim((string) $email),
                (string) $session->customer,
                (string) $session->subscription,
                'active',
                $subscriptionPeriodEnd > 0 ? $subscriptionPeriodEnd : null,
                (int) $provisioningResult['user_id'],
                1
            );
        }
    } else {
        $capture['provisioning_error'] = $provisioningResult['reason'] ?? 'unknown';
        $capture['provisioning_detail'] = $provisioningResult['detail'] ?? null;
    }

    @file_put_contents(
        __DIR__ . '/webhook-captures.log',
        json_encode($capture, JSON_UNESCAPED_SLASHES) . PHP_EOL,
        FILE_APPEND | LOCK_EX
    );
    break;
  case 'customer.subscription.created':
  case 'customer.subscription.updated':
  case 'customer.subscription.deleted':
    $subscription = $event->data->object;
    $subscriptionCustomer = (string) ($subscription->customer ?? '');
    if ($subscriptionCustomer !== '') {
        try {
            $customer = $stripe->customers->retrieve($subscriptionCustomer, []);
            save_stripe_account(
                (string) ($customer->email ?? ''),
                $subscriptionCustomer,
                (string) ($subscription->id ?? ''),
                (string) ($subscription->status ?? ''),
                isset($subscription->current_period_end) ? (int) $subscription->current_period_end : null
            );
        } catch (Throwable $exception) {
            error_log('Unable to update Stripe account subscription: ' . $exception->getMessage());
        }
    }
    error_log('Stripe subscription event ' . (string) $event->type . ': status=' . (string) ($subscription->status ?? 'unknown') . ', customer=' . (string) ($subscription->customer ?? ''));
    break;
  case 'invoice.paid':
    $invoice = $event->data->object;
        advance_subscription_mission($event, $stripe);
    error_log('Stripe invoice paid: invoice=' . (string) ($invoice->id ?? '') . ', subscription=' . (string) ($invoice->subscription ?? ''));
    break;
  default:
    error_log('Received event type: ' . (string) $event->type);
}

http_response_code(200);