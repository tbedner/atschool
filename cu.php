<?php
require_once __DIR__ . '/stripe/init.php';
require_once __DIR__ . '/secrets.php';
include('lang.php');

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
    'country' => 'JP',
    'timezone' => 'Asia/Tokyo',
    'lang' => 'ja',
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

if ($userId !== null) {
    $enrolResult = moodle_rest_request($domainName, [
        'wstoken' => $token,
        'wsfunction' => 'enrol_manual_enrol_users',
        'moodlewsrestformat' => $restFormat,
        'enrolments[0][roleid]' => (int) $moodleStudentRoleId,
        'enrolments[0][userid]' => $userId,
        'enrolments[0][courseid]' => (int) $moodleCourseId,
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

$requestUser = [];
switch ($userKeyMappingField) {
    case 'id':
        $requestUser['id'] = $userId;
        break;
    case 'username':
        $requestUser['username'] = $user1['username'];
        break;
    case 'email':
    default:
        $requestUser['email'] = $user1['email'];
        break;
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
    $subject = $translations['welcome_email_subject'] ?? 'Welcome to the @School Portal';
    $message = strtr($translations['welcome_email_message'] ?? "Hello {first_name},\n\nYour account has been created successfully.\n\nHere are your login details:\nUsername: {username}\nPassword: {password}\n\nYou can log in using the following link:\n{login_url}\n\nPlease change your password after logging in for the first time.\n\nBest regards,\n@School Team", [
        '{first_name}' => $newFirstname,
        '{username}' => $newUsername,
        '{password}' => $newPassword,
        '{login_url}' => 'https://www.at-school-portal.com/moodle/?lang=' . $lang,
    ]);
    $to = $newEmail;
    $headers =  'From: support@at-school-portal.com'       . "\r\n" .
                'Reply-To: support@at-school-portal.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    $loginUrl = $loginResult['decoded']['loginurl'];
    if (strpos($loginUrl, 'login/index.php') !== false) {
        $loginUrl = str_replace('login/index.php', 'my/', $loginUrl);
    }

    header('Location: ' . $loginUrl);
    exit;
}

fail_with_request_error($loginResult, 'Failed to generate auto-login URL.', 'Auto-login URL');

