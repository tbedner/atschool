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

function fail_with_request_error(array $result, string $prefix): void {
    echo $prefix;

    if (!empty($result['curl_error'])) {
        echo ' Error: ' . htmlspecialchars($result['curl_error']);
        return;
    }

    if (is_array($result['decoded']) && isset($result['decoded']['message'])) {
        echo ' Error: ' . htmlspecialchars($result['decoded']['message']);
    }
}

function generateMoodlePassword($length = 12) {
    // Ensure length is at least 8 to meet default Moodle requirements
    if ($length < 8) {
        $length = 8;
    }

    // Define character sets matching Moodle's policy categories
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $digits    = '0123456789';
    $specials  = '*-#@!$%^&+=?';

    // Guaranteed characters (1 of each required category)
    $password = [
        $lowercase[random_int(0, strlen($lowercase) - 1)],
        $uppercase[random_int(0, strlen($uppercase) - 1)],
        $digits[random_int(0, strlen($digits) - 1)],
        $specials[random_int(0, strlen($specials) - 1)],
    ];

    // Pool for remaining random characters
    $allCharacters = $lowercase . $uppercase . $digits . $specials;

    // Fill remaining length
    for ($i = count($password); $i < $length; $i++) {
        $password[] = $allCharacters[random_int(0, strlen($allCharacters) - 1)];
    }

    // Cryptographically secure shuffle of the character array
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
    echo 'Error: Unable to load Stripe Checkout session.';
    exit;
}

$newEmail = $checkoutSession->customer_details->email
    ?? $checkoutSession->customer_email
    ?? null;

if (!is_string($newEmail) || trim($newEmail) === '') {
    echo 'Error: Stripe checkout did not provide an email.';
    exit;
}

$newEmail = trim($newEmail);
$fullName = (string) ($checkoutSession->customer_details->name ?? '');
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
print_r($user1)."<br>";
print_r($createUserParams)."<br>";
if (!empty($createUserResult['curl_error'])) {
    fail_with_request_error($createUserResult, 'Error:');
    exit;
}

if (is_array($createUserResult['decoded']) && isset($createUserResult['decoded']['exception'])) {
    fail_with_request_error($createUserResult, 'Error:');
    exit;
}

$userId = $createUserResult['decoded'][0]['id'] ?? null;
if ($userId === null) {
    echo 'Error: Could not create Moodle user.';
    exit;
}

$enrolResult = moodle_rest_request($domainName, [
    'wstoken' => $token,
    'wsfunction' => 'enrol_manual_enrol_users',
    'moodlewsrestformat' => $restFormat,
    'enrolments[0][roleid]' => 5,
    'enrolments[0][userid]' => $userId,
    'enrolments[0][courseid]' => 24,
]);

if (!empty($enrolResult['curl_error'])) {
    fail_with_request_error($enrolResult, 'Error:');
    exit;
}

if (is_array($enrolResult['decoded']) && isset($enrolResult['decoded']['exception'])) {
    fail_with_request_error($enrolResult, 'Error:');
    exit;
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
    fail_with_request_error($loginResult, 'Failed to generate auto-login URL.');
    exit;
}

if (is_array($loginResult['decoded']) && isset($loginResult['decoded']['loginurl'])) {
    $subject = "Welcome to the @School Portal";
    $message = "Hello ".$newFirstname.",\n\n".
               "Your account has been created successfully.\n\n".
               "Here are your login details:\n".
               "Username: ".$newUsername."\n".
               "Password: ".$newPassword."\n\n".
               "You can log in using the following link:\n".
               "https://www.at-school-portal.com/moodle/?lang=".$lang."\n\n".
               "Please change your password after logging in for the first time.\n\n".
               "Best regards,\n".
               "@School Team";
    $message = $name." - ".$email." - ".$message;
    $to = $newEmail;
    $headers =  'From: support@at-school-portal.com'       . "\r\n" .
                'Reply-To: support@at-school-portal.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    header('Location: ' . $loginResult['decoded']['loginurl']);
    exit;
}

fail_with_request_error($loginResult, 'Failed to generate auto-login URL.');

