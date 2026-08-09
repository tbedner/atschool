<?php
require_once __DIR__ . '/stripe/init.php';
require_once __DIR__ . '/secrets.php';
include(__DIR__ . '/lang.php');

use Stripe\Checkout\Session;
use Stripe\Exception\ApiErrorException;
use Stripe\Stripe;

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
	http_response_code(405);
	echo 'Use POST to create a Stripe Checkout session.';
	exit;
}

Stripe::setApiKey($stripeSecretKey);

if (!is_string($stripeSecretKey) || trim($stripeSecretKey) === '') {
	http_response_code(500);
	echo 'Stripe secret key is not configured.';
	exit;
}

$checkoutMode = strtolower(trim((string) ($_POST['mode'] ?? 'payment')));
if (!in_array($checkoutMode, ['payment', 'subscription'], true)) {
	$checkoutMode = 'payment';
}

$requestedPrice = trim((string) ($_POST['price'] ?? ''));
if (is_numeric($requestedPrice) && (int) $requestedPrice >= 0) {
	$unitAmountCents = (int) $requestedPrice;
} else {
	$unitAmountCents = (int) $courseAmountCents;
}

$selectedCheckoutLanguage = isset($_POST['moodle_user_lang']) && is_string($_POST['moodle_user_lang']) && trim((string) $_POST['moodle_user_lang']) !== ''
	? strtolower(trim((string) $_POST['moodle_user_lang']))
	: (isset($lang) && is_string($lang) && $lang !== '' ? strtolower(trim((string) $lang)) : 'en');
$selectedCheckoutCountry = isset($_POST['moodle_user_country']) && is_string($_POST['moodle_user_country']) && trim((string) $_POST['moodle_user_country']) !== ''
	? trim((string) $_POST['moodle_user_country'])
	: '';
$selectedCheckoutTimezone = isset($_POST['moodle_user_timezone']) && is_string($_POST['moodle_user_timezone']) && trim((string) $_POST['moodle_user_timezone']) !== ''
	? trim((string) $_POST['moodle_user_timezone'])
	: '';

$checkoutLocaleMap = [
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
$checkoutStripeLocaleMap = [
	'ar' => 'auto',
	'bg' => 'en',
	'de' => 'de',
	'en' => 'en',
	'es' => 'es',
	'fr' => 'fr',
	'hi' => 'en',
	'ja' => 'ja',
	'ko' => 'ko',
	'pt' => 'pt',
	'ru' => 'ru',
	'zh_cn' => 'zh',
	'zh_tw' => 'zh',
];
$selectedStripeCheckoutLocale = $checkoutStripeLocaleMap[$selectedCheckoutLanguage] ?? 'en';

if ($selectedCheckoutCountry === '') {
	$mappedValues = $checkoutLocaleMap[$selectedCheckoutLanguage] ?? $checkoutLocaleMap['en'];
	$selectedCheckoutCountry = (string) ($mappedValues['country'] ?? '');
}

if ($selectedCheckoutTimezone === '') {
	$mappedValues = $checkoutLocaleMap[$selectedCheckoutLanguage] ?? $checkoutLocaleMap['en'];
	$selectedCheckoutTimezone = (string) ($mappedValues['timezone'] ?? '');
}

$successUrl = rtrim($siteBaseUrl, '/') . '/cu.php?session_id={CHECKOUT_SESSION_ID}&moodle_user_lang=' . rawurlencode($selectedCheckoutLanguage) . '&moodle_user_country=' . rawurlencode($selectedCheckoutCountry) . '&moodle_user_timezone=' . rawurlencode($selectedCheckoutTimezone);
$cancelUrl = rtrim($siteBaseUrl, '/') . '/index.php?canceled=1';

try {
	$lineItem = [
		'price_data' => [
			'currency' => strtolower((string) $courseCurrency),
			'product_data' => [
				'name' => $courseDisplayName,
			],
			'unit_amount' => $unitAmountCents,
		],
		'quantity' => 1,
	];

	if ($checkoutMode === 'subscription') {
		$lineItem['price_data']['recurring'] = [
			'interval' => 'month',
			'interval_count' => 1,
		];
	}

	$checkoutCourseIds = ($checkoutMode === 'subscription')
		? array_values(array_unique(array_map('intval', (array) $moodleSubscriptionCourseIds)))
		: [(int) $moodleCourseId];

	$checkoutCourseIds = array_values(array_filter($checkoutCourseIds, static function ($courseId): bool {
		return (int) $courseId > 0;
	}));

	if ($checkoutCourseIds === []) {
		$checkoutCourseIds = [(int) $moodleCourseId];
	}

	$checkoutDebugPayload = [
		'source' => 'create-checkout-session',
		'mode' => $checkoutMode,
		'selected_course_ids' => $checkoutCourseIds,
		'subscription_config_ids' => array_values(array_unique(array_map('intval', (array) $moodleSubscriptionCourseIds))),
	];
	error_log('[atschool-checkout] ' . json_encode($checkoutDebugPayload));
	@file_put_contents(
		__DIR__ . '/checkout-debug.log',
		json_encode($checkoutDebugPayload, JSON_UNESCAPED_SLASHES) . PHP_EOL,
		FILE_APPEND | LOCK_EX
	);

	$sessionParams = [
		'mode' => $checkoutMode,
		'locale' => $selectedStripeCheckoutLocale,
		'managed_payments' => [
			'enabled' => false,
		],
		'success_url' => $successUrl,
		'cancel_url' => $cancelUrl,
		'line_items' => [$lineItem],
		'metadata' => [
			'moodle_course_id' => (string) ($checkoutCourseIds[0] ?? (int) $moodleCourseId),
			'moodle_course_ids' => implode(',', $checkoutCourseIds),
			'checkout_mode' => $checkoutMode,
			'moodle_user_lang' => $selectedCheckoutLanguage,
			'moodle_user_country' => $selectedCheckoutCountry,
			'moodle_user_timezone' => $selectedCheckoutTimezone,
		],
	];

	if ($checkoutMode === 'payment') {
		$sessionParams['customer_creation'] = 'always';
	}

	$session = Session::create($sessionParams);
} catch (ApiErrorException $e) {
	$requestId = method_exists($e, 'getRequestId') ? (string) $e->getRequestId() : '';
	error_log('Stripe checkout creation failed: ' . $e->getMessage() . ($requestId !== '' ? ' | request_id=' . $requestId : ''));
	http_response_code(500);
	echo 'Stripe error: ' . $e->getMessage();
	if ($requestId !== '') {
		echo ' (request_id: ' . $requestId . ')';
	}
	exit;
} catch (\Throwable $e) {
	error_log('Checkout session creation failed: ' . $e->getMessage());
	http_response_code(500);
	echo 'Unable to start checkout. Please try again.';
	exit;
}

header('Location: ' . $session->url);
exit;
