<?php

$env = parse_ini_file('.env');

// Keep your Stripe API key protected by including it as an environment variable
// or in a private script that does not publicly expose the source code.

// This is your test secret API key.
// Don't put any keys in code. See https://docs.stripe.com/keys-best-practices.
$stripeSecretKey = $env['STRIPESECRETKEY'];

// Base URL where this integration is hosted (no trailing slash).
$siteBaseUrl = 'https://www.at-school-portal.com';

// Moodle REST configuration.
$moodleDomainName = 'https://www.at-school-portal.com/moodle';
$moodleWebserviceToken = $env['TOKEN'];
$moodleRestFormat = 'json';

// Enrollment target.
// CEFR levels supported for enrollment. The first entry is the default when none is requested.
$cefrLevels = ['A1', 'A2', 'B1', 'B2', 'C1', 'C2'];
$defaultCefrLevel = 'A1';

// One-time "payment" course per CEFR level.
$moodleCourseIdByLevel = [
	'A1' => 24,
	'A2' => 30, // TODO: replace with real Moodle course id
	'B1' => 33, // TODO: replace with real Moodle course id
	'B2' => 36, // TODO: replace with real Moodle course id
	'C1' => 37, // TODO: replace with real Moodle course id
	'C2' => 204, // TODO: replace with real Moodle course id
];

// 12-mission subscription course sequence per CEFR level.
$moodleSubscriptionMissionCourseIdsByLevel = [
	'A1' => [24, 25, 28, 103, 104, 105, 106, 107, 108, 109, 110, 111],
	// TODO: replace all of the below with real Moodle course ids
	'A2' => [30, 31, 212, 213, 214, 215, 216, 217, 218, 219, 220, 221],
	'B1' => [33, 36, 232, 233, 234, 235, 236, 237, 238, 239, 240, 241],
	'B2' => [36, 251, 252, 253, 254, 255, 256, 257, 258, 259, 260, 261],
	'C1' => [37, 271, 272, 273, 274, 275, 276, 277, 278, 279, 280, 281],
	'C2' => [290, 291, 292, 293, 294, 295, 296, 297, 298, 299, 300, 301],
];

// Backwards-compatible defaults (kept in sync with the A1 level above).
$moodleCourseId = $moodleCourseIdByLevel[$defaultCefrLevel];
$moodleSubscriptionMissionCourseIds = $moodleSubscriptionMissionCourseIdsByLevel[$defaultCefrLevel];

// Support course is shared across all levels for the duration of the subscription.
$moodleSubscriptionSupportCourseId = 27;
$moodleSubscriptionCourseIds = [$moodleSubscriptionMissionCourseIds[0], $moodleSubscriptionSupportCourseId];
$moodleStudentRoleId = 5;

// Level Check course (no-payment enrollment link).
$levelCheckCourseId = 5;
$levelCheckAccessKey = trim((string) ($env['LEVEL_CHECK_ACCESS_KEY'] ?? ''));

// Checkout configuration.
$courseDisplayName = 'Course Enrollment';
$courseAmountOne = 500;
$courseAmountTwo = 10000;
$courseCurrency = 'jpy';
$checkoutModeOne = 'payment';
$checkoutModeTwo = 'subscription';
// Approximate manual exchange-rate table for localized subscription pricing.
// These values are intentionally simple and rounded, and should be reviewed periodically as rates change.
$onecoinReferenceAmount = 5;
$subscriptionReferenceAmount = 100;
$subscriptionExchangeRates = [
	'aed' => 0.6,
	'aud' => 1.0,
	'bgn' => 0.6,
	'cny' => 6.5,
	'eur' => 0.6,
	'inr' => 70,
	'jpy' => 100,
	'krw' => 900,
	'rub' => 70,
	'twd' => 30,
	'usd' => 1.0,
];
$subscriptionZeroDecimalCurrencies = ['jpy', 'krw', 'cny', 'twd', 'huf', 'isk', 'clp', 'pyg', 'vnd'];
$endpointSecret = $env['ENDPOINTSECRET'];

function normalizeSubscriptionCurrencyCode(string $currency): string {
	$normalizedCurrency = strtolower(trim($currency));
	return $normalizedCurrency !== '' ? $normalizedCurrency : 'usd';
}

function getSubscriptionPriceForCurrency(string $currency, int $referenceAmount = 100): array {
	global $subscriptionExchangeRates, $subscriptionZeroDecimalCurrencies;

	$normalizedCurrency = normalizeSubscriptionCurrencyCode($currency);
	$rate = $subscriptionExchangeRates[$normalizedCurrency] ?? 1.0;
	$rawAmount = $referenceAmount * $rate;
	if ($referenceAmount < 10) {
		$displayAmount = max(1, (int) round($rawAmount));
	} else {
		$displayAmount = (int) round(($rawAmount / 10)) * 10;
		if ($displayAmount < 10) {
			$displayAmount = 10;
		}
	}

	$minorUnitAmount = in_array($normalizedCurrency, $subscriptionZeroDecimalCurrencies, true) ? $displayAmount : $displayAmount * 100;

	return [
		'currency' => $normalizedCurrency,
		'display_amount' => $displayAmount,
		'minor_unit_amount' => $minorUnitAmount,
	];
}

// Email configuration.
$emailFromAddress = 'support@at-school-portal.com';
$emailFromName = '@School Support';
$emailUser = $env['EMAILUSER'];
$emailPassword = $env['EMAILPASSWORD'];
$emailHost = 'mail.at-school-portal.com';