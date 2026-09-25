<?php
require_once __DIR__ . '/secrets.php';

// Stripe-free entry point: creates/reuses a Moodle account, enrolls the
// student in the Level Check course, and redirects straight to their dashboard.

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

    return $parts !== [] ? $context . ' failed: ' . implode(' | ', $parts) : $context . ' failed.';
}

function fail_with_error(array $result, string $context): void {
    $detail = !empty($result['curl_error'])
        ? $result['curl_error']
        : (is_array($result['decoded']) ? format_moodle_error($result['decoded'], $context) : 'Unknown Moodle response.');

    error_log('[level-check] ' . $context . ': ' . $detail);
    http_response_code(500);
    echo 'Error: ' . htmlspecialchars($detail, ENT_QUOTES, 'UTF-8');
}

function generate_level_check_password(int $length = 12): string {
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
        [$password[$keys[$i]], $password[$keys[$j]]] = [$password[$keys[$j]], $password[$keys[$i]]];
    }

    return implode('', $password);
}

function get_username_from_email(string $email): string {
    $username = strstr($email, '@', true) ?: $email;
    return preg_replace('/[^a-z0-9]/', '', mb_strtolower($username, 'UTF-8'));
}

function split_name(string $fullName): array {
    $trimmed = trim($fullName);
    if ($trimmed === '') {
        return ['Student', ''];
    }

    $parts = preg_split('/\s+/', $trimmed);
    $first = $parts[0] ?? 'Student';
    $last = count($parts) > 1 ? implode(' ', array_slice($parts, 1)) : '';

    return [$first, $last];
}

function extract_moodle_user_id(array $decoded): ?int {
    if (isset($decoded[0]['id']) && is_numeric($decoded[0]['id'])) {
        return (int) $decoded[0]['id'];
    }

    return null;
}

function find_moodle_user_id(string $domainName, string $token, string $restFormat, string $email, string $username): ?int {
    foreach ([['email', $email], ['username', $username]] as [$field, $value]) {
        if ($value === '') {
            continue;
        }

        $result = moodle_rest_request($domainName, [
            'wstoken' => $token,
            'wsfunction' => 'core_user_get_users_by_field',
            'moodlewsrestformat' => $restFormat,
            'field' => $field,
            'values[0]' => $value,
        ]);

        if (empty($result['curl_error']) && is_array($result['decoded']) && isset($result['decoded'][0]['id'])) {
            return (int) $result['decoded'][0]['id'];
        }
    }

    return null;
}

function resolve_login_redirect_url(string $loginUrl, string $moodleBaseUrl): string {
    $loginUrl = trim($loginUrl);
    if ($loginUrl === '') {
        return $loginUrl;
    }

    $dashboardUrl = rtrim($moodleBaseUrl, '/') . '/my/';

    if (strpos($loginUrl, 'wantsurl=') !== false) {
        return preg_replace('/([?&])wantsurl=[^&#]*/', '$1wantsurl=' . rawurlencode($dashboardUrl), $loginUrl, 1) ?? $loginUrl;
    }

    $separator = strpos($loginUrl, '?') === false ? '?' : '&';
    return $loginUrl . $separator . 'wantsurl=' . rawurlencode($dashboardUrl);
}

if (!in_array($_SERVER['REQUEST_METHOD'] ?? 'GET', ['GET', 'POST'], true)) {
    http_response_code(405);
    echo 'Use GET or POST.';
    exit;
}

if ($levelCheckAccessKey !== '' && trim((string) ($_REQUEST['key'] ?? '')) !== $levelCheckAccessKey) {
    http_response_code(403);
    echo 'Invalid or missing access key.';
    exit;
}

$email = trim((string) ($_REQUEST['email'] ?? ''));
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo 'A valid email address is required.';
    exit;
}

[$firstName, $lastName] = split_name((string) ($_REQUEST['name'] ?? ''));

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
$lang = strtolower(trim((string) ($_REQUEST['lang'] ?? 'en')));
$locale = $localeMap[$lang] ?? $localeMap['en'];
$country = trim((string) ($_REQUEST['country'] ?? $locale['country']));
$timezone = trim((string) ($_REQUEST['timezone'] ?? $locale['timezone']));

$domainName = $moodleDomainName;
$token = $moodleWebserviceToken;
$restFormat = $moodleRestFormat;
$username = get_username_from_email($email);

$userId = find_moodle_user_id($domainName, $token, $restFormat, $email, $username);

if ($userId === null) {
    $createResult = moodle_rest_request($domainName, [
        'wstoken' => $token,
        'wsfunction' => 'core_user_create_users',
        'moodlewsrestformat' => $restFormat,
    ] + ['users' => [[
        'username' => $username,
        'password' => generate_level_check_password(12),
        'firstname' => $firstName,
        'lastname' => $lastName,
        'email' => $email,
        'auth' => 'manual',
        'country' => $country,
        'timezone' => $timezone,
        'lang' => $lang,
    ]]]);

    if (!empty($createResult['curl_error'])) {
        fail_with_error($createResult, 'User creation');
        exit;
    }

    if (is_array($createResult['decoded']) && isset($createResult['decoded']['exception'])) {
        // Likely a duplicate created concurrently; look the user up again.
        $userId = find_moodle_user_id($domainName, $token, $restFormat, $email, $username);
        if ($userId === null) {
            fail_with_error($createResult, 'User creation');
            exit;
        }
    } else {
        $userId = extract_moodle_user_id($createResult['decoded'] ?? []);
    }
}

if ($userId === null) {
    http_response_code(500);
    echo 'Error: Unable to resolve the Moodle user for enrollment.';
    exit;
}

$enrolResult = moodle_rest_request($domainName, [
    'wstoken' => $token,
    'wsfunction' => 'enrol_manual_enrol_users',
    'moodlewsrestformat' => $restFormat,
] + [
    'enrolments[0][roleid]' => (int) $moodleStudentRoleId,
    'enrolments[0][userid]' => $userId,
    'enrolments[0][courseid]' => (int) $levelCheckCourseId,
    'enrolments[0][timestart]' => time(),
    'enrolments[0][timeend]' => 0,
    'enrolments[0][suspend]' => 0,
]);

if (!empty($enrolResult['curl_error']) || (is_array($enrolResult['decoded']) && isset($enrolResult['decoded']['exception']))) {
    fail_with_error($enrolResult, 'Level Check enrollment');
    exit;
}

$loginResult = moodle_rest_request($domainName, [
    'wstoken' => $token,
    'wsfunction' => 'auth_userkey_request_login_url',
    'moodlewsrestformat' => $restFormat,
    'user' => ['email' => $email],
]);

if (!empty($loginResult['curl_error'])) {
    fail_with_error($loginResult, 'Auto-login URL');
    exit;
}

// The user-key plugin flips auth on login-url generation; restore manual accounts.
moodle_rest_request($domainName, [
    'wstoken' => $token,
    'wsfunction' => 'core_user_update_users',
    'moodlewsrestformat' => $restFormat,
] + ['users' => [[
    'id' => $userId,
    'auth' => 'manual',
]]]);

if (!is_array($loginResult['decoded']) || !isset($loginResult['decoded']['loginurl'])) {
    fail_with_error($loginResult, 'Auto-login URL');
    exit;
}

header('Location: ' . resolve_login_redirect_url((string) $loginResult['decoded']['loginurl'], $domainName));
exit;
