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
$moodleCourseId = 24;
$moodleSubscriptionCourseIds = [26, 27];
$moodleStudentRoleId = 5;

// Checkout configuration.
$courseDisplayName = 'Course Enrollment';
$courseAmountOne = 500;
$courseAmountTwo = 10000;
$courseCurrency = 'jpy';
$checkoutModeOne = 'payment';
$checkoutModeTwo = 'subscription';
// Approximate manual exchange-rate table for localized subscription pricing.
// These values are intentionally simple and rounded, and should be reviewed periodically as rates change.
$subscriptionReferenceAmount = 100;
$subscriptionExchangeRates = [
	'aed' => 0.6,
	'aud' => 1.3,
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
	$displayAmount = (int) round(($referenceAmount * $rate) / 10) * 10;
	if ($displayAmount < 10) {
		$displayAmount = 10;
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