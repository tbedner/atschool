<?php
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
  require_once __DIR__ . '/vendor/autoload.php';
} else {
  require_once __DIR__ . '/stripe/init.php';
}
require_once __DIR__ . '/secrets.php';

$stripe = new \Stripe\StripeClient($stripeSecretKey);

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

    $userPayload = [
        'username' => $newUsername,
        'password' => $newPassword,
        'firstname' => $firstName,
        'lastname' => $lastName,
        'email' => $email,
        'auth' => 'manual',
        'country' => 'JP',
        'timezone' => 'Asia/Tokyo',
        'lang' => 'ja',
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

    $updateUserResult = moodle_rest_request($moodleDomainName, [
        'wstoken' => $moodleWebserviceToken,
        'wsfunction' => 'core_user_update_users',
        'moodlewsrestformat' => $moodleRestFormat,
    ] + ['users' => [[
        'id' => $userId,
        'firstname' => $firstName,
        'lastname' => $lastName,
        'email' => $email,
        'country' => 'JP',
        'timezone' => 'Asia/Tokyo',
        'lang' => 'ja',
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
    ]);

    if ($provisioningResult['success'] ?? false) {
        $capture['moodle_user_id'] = $provisioningResult['user_id'] ?? null;
        $capture['moodle_username'] = $provisioningResult['username'] ?? null;
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
    error_log('Stripe subscription event ' . (string) $event->type . ': status=' . (string) ($subscription->status ?? 'unknown') . ', customer=' . (string) ($subscription->customer ?? ''));
    break;
  case 'invoice.paid':
    $invoice = $event->data->object;
    error_log('Stripe invoice paid: invoice=' . (string) ($invoice->id ?? '') . ', subscription=' . (string) ($invoice->subscription ?? ''));
    break;
  default:
    error_log('Received event type: ' . (string) $event->type);
}

http_response_code(200);