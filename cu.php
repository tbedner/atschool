<?php
require_once __DIR__ . '/stripe/init.php';
require_once __DIR__ . '/secrets.php';
include('lang.php');
require 'PHPMailer.php';
require 'SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use Stripe\Checkout\Session;
use Stripe\Stripe;

function moodle_rest_request(string $domainName, array $params): array {
    $ch = curl_init($domainName . '/webservice/rest/server.php');

    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($params, '', '&', PHP_QUERY_RFC3986),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CONNECTTIMEOUT => 10,
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

function format_moodle_error(array $decoded, string $context): string {
    if (!is_array($decoded)) {
        return $context . ' failed.';
    }

    $parts = [];
    if (!empty($decoded['exception'])) {
        $parts[] = 'exception=' . $decoded['exception'];
    }
    if (!empty($decoded['errorcode'])) {
        $parts[] = 'errorcode=' . $decoded['errorcode'];
    }
    if (!empty($decoded['message'])) {
        $parts[] = 'message=' . $decoded['message'];
    }
    if (!empty($decoded['debuginfo'])) {
        $parts[] = 'debuginfo=' . $decoded['debuginfo'];
    }

    if (!empty($parts)) {
        return $context . ' failed: ' . implode(' | ', $parts);
    }

    return $context . ' failed.';
}

function fail_with_request_error(array $result, string $prefix, string $context = 'Moodle request'): void {
    echo $prefix;

    if (!empty($result['curl_error'])) {
        echo ' Error1: ' . htmlspecialchars($result['curl_error']);
        return;
    }

    if (is_array($result['decoded']) && (isset($result['decoded']['message']) || isset($result['decoded']['exception']) || isset($result['decoded']['errorcode']))) {
        echo ' Error2: ' . htmlspecialchars(format_moodle_error($result['decoded'], $context));
        return;
    }

    if (is_string($result['raw']) && trim($result['raw']) !== '') {
        echo ' Error2: ' . htmlspecialchars(trim($result['raw']));
        return;
    }

    echo ' Error2: Unknown Moodle response.';
}

function generateMoodlePassword($length = 12) {
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

function getMoodleUsernameFromEmail(string $email): string {
    // 1. Extract portion before '@'
    $username = strstr($email, '@', true) ?: $email;
    
    // 2. Convert to lowercase (Moodle standard)
    $username = mb_strtolower($username, 'UTF-8');
    
    // 3. Remove non-alphanumeric characters (keeps a-z and 0-9)
    $username = preg_replace('/[^a-z0-9]/', '', $username);

    return $username;
}

function splitName(string $fullName): array {
    $trimmed = trim($fullName);
    if ($trimmed === '') {
        return ['Student', ''];
    }

    $parts = preg_split('/\s+/', $trimmed);
    $first = $parts[0] ?? 'Student';
    $last = count($parts) > 1 ? implode(' ', array_slice($parts, 1)) : '';

    return [$first, $last];
}

function resolveMoodleUserLocaleSettings($metadata, string $languageCode): array {
    $languageCode = strtolower(trim($languageCode));
    $country = '';
    $timezone = '';

    $requestValue = static function (string $name): string {
        $value = $_GET[$name] ?? ($_POST[$name] ?? '');
        if (is_scalar($value)) {
            return trim((string) $value);
        }

        return '';
    };

    $metadataValue = function ($name) use ($metadata): string {
        if (is_object($metadata) && isset($metadata->{$name})) {
            return trim((string) $metadata->{$name});
        }

        if (is_array($metadata) && isset($metadata[$name])) {
            return trim((string) $metadata[$name]);
        }

        return '';
    };

    $country = $requestValue('moodle_user_country');
    if ($country === '') {
        $country = $metadataValue('moodle_user_country');
    }

    $timezone = $requestValue('moodle_user_timezone');
    if ($timezone === '') {
        $timezone = $metadataValue('moodle_user_timezone');
    }

    $metadataLanguageCode = $requestValue('moodle_user_lang');
    if ($metadataLanguageCode === '') {
        $metadataLanguageCode = $metadataValue('moodle_user_lang');
    }

    if ($metadataLanguageCode !== '') {
        $languageCode = strtolower(trim($metadataLanguageCode));
    }

    if ($country === '' || $timezone === '') {
        $languageCodeFromMetadata = $requestValue('moodle_user_lang');
        if ($languageCodeFromMetadata === '') {
            $languageCodeFromMetadata = $metadataValue('moodle_user_lang');
        }
        if ($languageCodeFromMetadata !== '') {
            $languageCode = strtolower(trim($languageCodeFromMetadata));
        }
    }

    if ($country === '' || $timezone === '') {
        $languageMap = [
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

        $mappedValues = $languageMap[$languageCode] ?? null;
        if (is_array($mappedValues)) {
            if ($country === '') {
                $country = (string) ($mappedValues['country'] ?? '');
            }
            if ($timezone === '') {
                $timezone = (string) ($mappedValues['timezone'] ?? '');
            }
        }
    }

    return [
        'lang' => $languageCode !== '' ? $languageCode : 'ja',
        'country' => $country !== '' ? $country : 'JP',
        'timezone' => $timezone !== '' ? $timezone : 'Asia/Tokyo',
    ];
}

function resolveMoodleCheckoutMode($metadata, string $defaultMode): string {
    $candidateModes = [];

    if (is_object($metadata) && isset($metadata->checkout_mode)) {
        $candidateModes[] = (string) $metadata->checkout_mode;
    } elseif (is_array($metadata) && isset($metadata['checkout_mode'])) {
        $candidateModes[] = (string) $metadata['checkout_mode'];
    }

    if (is_object($metadata) && isset($metadata->mode)) {
        $candidateModes[] = (string) $metadata->mode;
    } elseif (is_array($metadata) && isset($metadata['mode'])) {
        $candidateModes[] = (string) $metadata['mode'];
    }

    foreach ($candidateModes as $candidateMode) {
        $normalizedMode = strtolower(trim((string) $candidateMode));
        if (in_array($normalizedMode, ['payment', 'subscription'], true)) {
            return $normalizedMode;
        }
    }

    $normalizedDefault = strtolower(trim($defaultMode));
    return in_array($normalizedDefault, ['payment', 'subscription'], true)
        ? $normalizedDefault
        : 'payment';
}

function resolveMoodleCourseIds($metadata, string $checkoutMode, int $defaultCourseId, array $subscriptionCourseIds): array {
    $courseIds = [];

    $metadataValue = '';
    if (is_object($metadata) && isset($metadata->moodle_course_ids)) {
        $metadataValue = (string) $metadata->moodle_course_ids;
    } elseif (is_array($metadata) && isset($metadata['moodle_course_ids'])) {
        $metadataValue = (string) $metadata['moodle_course_ids'];
    }

    if ($metadataValue !== '') {
        $parsedIds = preg_split('/[\s,]+/', $metadataValue) ?: [];
        foreach ($parsedIds as $candidate) {
            $courseId = (int) trim((string) $candidate);
            if ($courseId > 0) {
                $courseIds[] = $courseId;
            }
        }
    }

    if ($courseIds === []) {
        $singleCourseId = 0;
        if (is_object($metadata) && isset($metadata->moodle_course_id)) {
            $singleCourseId = (int) $metadata->moodle_course_id;
        } elseif (is_array($metadata) && isset($metadata['moodle_course_id'])) {
            $singleCourseId = (int) $metadata['moodle_course_id'];
        }

        if ($singleCourseId > 0) {
            $courseIds[] = $singleCourseId;
        }
    }

    if ($courseIds === []) {
        $fallbackCourseIds = ($checkoutMode === 'subscription')
            ? array_values(array_unique(array_map('intval', $subscriptionCourseIds)))
            : [$defaultCourseId];
        $courseIds = array_values(array_filter($fallbackCourseIds, static function ($courseId): bool {
            return (int) $courseId > 0;
        }));
    }

    return array_values(array_unique(array_filter($courseIds, static function ($courseId): bool {
        return (int) $courseId > 0;
    })));
}

function extractMoodleUserId(array $decodedResponse): ?int {
    if (!is_array($decodedResponse)) {
        return null;
    }

    if (isset($decodedResponse[0]['id']) && is_numeric($decodedResponse[0]['id'])) {
        return (int) $decodedResponse[0]['id'];
    }

    if (isset($decodedResponse['id']) && is_numeric($decodedResponse['id'])) {
        return (int) $decodedResponse['id'];
    }

    if (isset($decodedResponse['users']) && is_array($decodedResponse['users'])) {
        foreach ($decodedResponse['users'] as $user) {
            if (is_array($user) && isset($user['id']) && is_numeric($user['id'])) {
                return (int) $user['id'];
            }
        }
    }

    return null;
}

function extractMoodleUserIds(array $decodedResponse): array {
    $ids = [];
    if (!is_array($decodedResponse)) {
        return $ids;
    }

    if (isset($decodedResponse[0]['id']) && is_numeric($decodedResponse[0]['id'])) {
        $ids[] = (int) $decodedResponse[0]['id'];
        return $ids;
    }

    foreach ($decodedResponse as $item) {
        if (is_array($item) && isset($item['id']) && is_numeric($item['id'])) {
            $ids[] = (int) $item['id'];
        }
    }

    return $ids;
}

function resolveMoodleLoginRedirectUrl(string $loginUrl, string $moodleBaseUrl): string {
    $loginUrl = trim($loginUrl);
    if ($loginUrl === '') {
        return $loginUrl;
    }

    $parsedBaseUrl = parse_url($moodleBaseUrl);
    $basePath = '';
    if (is_array($parsedBaseUrl) && isset($parsedBaseUrl['path']) && is_string($parsedBaseUrl['path'])) {
        $basePath = '/' . trim($parsedBaseUrl['path'], '/');
    }

    if ($basePath === '' || $basePath === '/') {
        $basePath = '/moodle';
    }

    $dashboardUrl = rtrim($moodleBaseUrl, '/') . '/my/';
    if (strpos($dashboardUrl, '://') === false) {
        $dashboardUrl = rtrim($basePath, '/') . '/my/';
    }

    if (strpos($loginUrl, 'auth/userkey/login.php') !== false || strpos($loginUrl, 'login/index.php') !== false) {
        if (strpos($loginUrl, 'wantsurl=') !== false) {
            return preg_replace('/([?&])wantsurl=[^&#]*/', '$1wantsurl=' . rawurlencode($dashboardUrl), $loginUrl, 1) ?? $loginUrl;
        }

        $separator = strpos($loginUrl, '?') === false ? '?' : '&';
        return $loginUrl . $separator . 'wantsurl=' . rawurlencode($dashboardUrl);
    }

    return $loginUrl;
}

// Configuration.
// $env = parse_ini_file('.env');
// $token = $env['TOKEN'];
$token = $moodleWebserviceToken;
$domainName = $moodleDomainName;
$restFormat = $moodleRestFormat;
$newPassword = generateMoodlePassword(12);

$sessionId = trim((string) ($_GET['session_id'] ?? ''));
if ($sessionId === '') {
    echo 'Error: Missing Stripe Checkout session_id.';
    exit;
}

Stripe::setApiKey($stripeSecretKey);

try {
    $checkoutSession = Session::retrieve($sessionId);
} catch (\Throwable $e) {
    echo 'Error3: Unable to load Stripe Checkout session.';
    exit;
}

$newEmail = $checkoutSession->customer_details->email
    ?? $checkoutSession->customer_email
    ?? null;
$fullName = (string) ($checkoutSession->customer_details->name ?? '');

if ((!is_string($newEmail) || trim($newEmail) === '') && !empty($checkoutSession->customer)) {
    try {
        $customer = \Stripe\Customer::retrieve((string) $checkoutSession->customer, []);
        if (!is_string($newEmail) || trim($newEmail) === '') {
            $newEmail = $customer->email ?? null;
        }
        if ($fullName === '') {
            $fullName = (string) ($customer->name ?? '');
        }
    } catch (\Throwable $e) {
        error_log('Stripe customer lookup failed for session ' . (string) $checkoutSession->id . ': ' . $e->getMessage());
    }
}

if (!is_string($newEmail) || trim($newEmail) === '') {
    echo 'Error4: Stripe checkout did not provide an email.';
    exit;
}

$newEmail = trim($newEmail);
[$newFirstname, $newLastname] = splitName($fullName);

$metadata = $checkoutSession->metadata ?? null;
$checkoutMode = resolveMoodleCheckoutMode($metadata, strtolower((string) ($checkoutSession->mode ?? 'payment')));
$courseIds = resolveMoodleCourseIds($metadata, $checkoutMode, (int) $moodleCourseId, (array) $moodleSubscriptionCourseIds);
$moodleUserLocaleSettings = resolveMoodleUserLocaleSettings($metadata, $lang ?? 'en');

$checkoutDebugPayload = [
    'source' => 'cu.php',
    'mode' => $checkoutMode,
    'resolved_course_ids' => $courseIds,
    'subscription_config_ids' => array_values(array_unique(array_map('intval', (array) $moodleSubscriptionCourseIds))),
    'session_id' => $sessionId,
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

$newUsername = getMoodleUsernameFromEmail($newEmail);

// auth_userkey plugin settings.
$userKeyMappingField = 'email';
$userKeyIpRestriction = false;



// User to create in Moodle.
$user1 = [
    'username' => $newUsername,
    'password' => $newPassword,
    'firstname' => $newFirstname,
    'lastname' => $newLastname,
    'email' => $newEmail,
    'auth' => 'manual',
    'country' => $moodleUserLocaleSettings['country'],
    'timezone' => $moodleUserLocaleSettings['timezone'],
    'lang' => $moodleUserLocaleSettings['lang'],
];

$createUserParams = ['users' => [$user1]];
$createUserResult = moodle_rest_request($domainName, [
    'wstoken' => $token,
    'wsfunction' => 'core_user_create_users',
    'moodlewsrestformat' => $restFormat,
] + $createUserParams);

$userId = null;

if (!empty($createUserResult['curl_error'])) {
    fail_with_request_error($createUserResult, 'Error5:', 'User creation');
    exit;
}

if (is_array($createUserResult['decoded']) && isset($createUserResult['decoded']['exception'])) {
    $lookupResult = moodle_rest_request($domainName, [
        'wstoken' => $token,
        'wsfunction' => 'core_user_get_users_by_field',
        'moodlewsrestformat' => $restFormat,
        'field' => 'email',
        'values[0]' => $newEmail,
    ]);

    if (empty($lookupResult['curl_error'])) {
        $userId = extractMoodleUserId($lookupResult['decoded'] ?? []);
    }
} else {
    $userId = extractMoodleUserId($createUserResult['decoded'] ?? []);
}

if ($userId === null && $newUsername !== '') {
    $usernameLookupResult = moodle_rest_request($domainName, [
        'wstoken' => $token,
        'wsfunction' => 'core_user_get_users_by_field',
        'moodlewsrestformat' => $restFormat,
        'field' => 'username',
        'values[0]' => $newUsername,
    ]);

    if (empty($usernameLookupResult['curl_error'])) {
        $userId = extractMoodleUserId($usernameLookupResult['decoded'] ?? []);
    }
}

if ($userId !== null) {
    $updateUserResult = moodle_rest_request($domainName, [
        'wstoken' => $token,
        'wsfunction' => 'core_user_update_users',
        'moodlewsrestformat' => $restFormat,
    ] + ['users' => [[
        'id' => $userId,
        'firstname' => $newFirstname,
        'lastname' => $newLastname,
        'email' => $newEmail,
        'country' => $moodleUserLocaleSettings['country'],
        'timezone' => $moodleUserLocaleSettings['timezone'],
        'lang' => $moodleUserLocaleSettings['lang'],
    ]]]);

    if (!empty($updateUserResult['curl_error'])) {
        error_log('Moodle user update failed for user ' . $userId . ': ' . $updateUserResult['curl_error']);
    } elseif (is_array($updateUserResult['decoded']) && isset($updateUserResult['decoded']['exception'])) {
        error_log('Moodle user update failed for user ' . $userId . ': ' . format_moodle_error($updateUserResult['decoded'], 'User update'));
    }

    foreach ($courseIds as $courseId) {
        $enrolResult = moodle_rest_request($domainName, [
            'wstoken' => $token,
            'wsfunction' => 'enrol_manual_enrol_users',
            'moodlewsrestformat' => $restFormat,
        ] + [
            'enrolments[0][roleid]' => (int) $moodleStudentRoleId,
            'enrolments[0][userid]' => $userId,
            'enrolments[0][courseid]' => (int) $courseId,
        ]);

        if (!empty($enrolResult['curl_error'])) {
            fail_with_request_error($enrolResult, 'Error8:', 'Enrollment');
            exit;
        }

        if (is_array($enrolResult['decoded']) && isset($enrolResult['decoded']['exception'])) {
            fail_with_request_error($enrolResult, 'Error9:', 'Enrollment');
            exit;
        }
    }
}

$requestUser = [];
if ($userId !== null && $userKeyMappingField === 'id') {
    $requestUser['id'] = $userId;
}
if ($newUsername !== '') {
    $requestUser['username'] = $newUsername;
}
if ($newEmail !== '') {
    $requestUser['email'] = $newEmail;
}

if ($userKeyIpRestriction && !empty($_SERVER['REMOTE_ADDR'])) {
    $requestUser['ip'] = $_SERVER['REMOTE_ADDR'];
}

$loginResult = moodle_rest_request($domainName, [
    'wstoken' => $token,
    'wsfunction' => 'auth_userkey_request_login_url',
    'moodlewsrestformat' => $restFormat,
    'user' => $requestUser,
]);

if (!empty($loginResult['curl_error'])) {
    fail_with_request_error($loginResult, 'Failed to generate auto-login URL.', 'Auto-login URL');
    exit;
}

if (is_array($loginResult['decoded']) && isset($loginResult['decoded']['loginurl'])) {
    $mail = new PHPMailer(true);
    $mail->CharSet = "UTF-8";
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = $emailHost;                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $emailUser;                     //SMTP username
    $mail->Password   = $emailPassword;                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($emailFromAddress, $emailFromName);
    $mail->addAddress($newEmail, $newFirstname.' '.$newLastname);     //Add a recipient

    //Attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $message = strtr($translations['welcome_email_message'] ?? "Hello {first_name},\n\nYour account has been created successfully.\n\nHere are your login details:\nUsername: {username}\nPassword: {password}\n\nYou can log in using the following link:\n{login_url}\n\nPlease change your password after logging in for the first time.\n\nBest regards,\n@School Team", [
        '{first_name}' => $newFirstname,
        '{username}' => $newUsername,
        '{password}' => $newPassword,
        '{login_url}' => 'https://www.at-school-portal.com/moodle/?lang=' . $moodleUserLocaleSettings['lang'],
    ]);
    
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $translations['welcome_email_subject'] ?? 'Welcome to the @School Portal';
    $mail->Body    = $message;
    $mail->AltBody = strip_tags($message);

    $mail->send();
    
    $loginUrl = $loginResult['decoded']['loginurl'];
    if (is_string($loginUrl) && $loginUrl !== '') {
        $loginUrl = resolveMoodleLoginRedirectUrl($loginUrl, $domainName);
    }

    header('Location: ' . $loginUrl);
    exit;
}

fail_with_request_error($loginResult, 'Failed to generate auto-login URL.', 'Auto-login URL');

