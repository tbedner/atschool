<?php
require_once __DIR__ . '/stripe/init.php';
require_once __DIR__ . '/secrets.php';

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

$successUrl = rtrim($siteBaseUrl, '/') . '/cu.php?session_id={CHECKOUT_SESSION_ID}';
$cancelUrl = rtrim($siteBaseUrl, '/') . '/index.php?canceled=1';

try {
	$session = Session::create([
		'mode' => 'payment',
		'managed_payments' => [
			'enabled' => false,
		],
		'success_url' => $successUrl,
		'cancel_url' => $cancelUrl,
		'customer_creation' => 'always',
		'line_items' => [[
			'price_data' => [
				'currency' => strtolower((string) $courseCurrency),
				'product_data' => [
					'name' => $courseDisplayName,
				],
				'unit_amount' => (int) $courseAmountCents,
			],
			'quantity' => 1,
		]],
		'metadata' => [
			'moodle_course_id' => (string) $moodleCourseId,
		],
	]);
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
