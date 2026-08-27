<?php
// Shared first-touch campaign attribution helper (UTM params, LINE ad click ids, etc.).
// Landing pages capture params from the URL; the value is kept in the session so it
// survives navigation between pages until the user actually checks out with Stripe.

const CAMPAIGN_TRACKING_FIELDS = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term', 'line_click_id'];

function capture_campaign_tracking_params(): array {
	if (session_status() !== PHP_SESSION_ACTIVE) {
		session_start();
	}

	$incoming = [];
	foreach (CAMPAIGN_TRACKING_FIELDS as $field) {
		$value = trim((string) ($_GET[$field] ?? ''));
		if ($value !== '') {
			$incoming[$field] = substr(preg_replace('/[^\w\-.]/', '', $value), 0, 100);
		}
	}

	// First-touch attribution: only store a fresh campaign hit once per session,
	// so a later organic visit doesn't overwrite the ad click that brought the user in.
	if ($incoming !== [] && empty($_SESSION['campaign_tracking'])) {
		$_SESSION['campaign_tracking'] = $incoming;
	}

	$stored = (array) ($_SESSION['campaign_tracking'] ?? []);

	$result = [];
	foreach (CAMPAIGN_TRACKING_FIELDS as $field) {
		$result[$field] = (string) ($stored[$field] ?? '');
	}

	return $result;
}
