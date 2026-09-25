<!DOCTYPE HTML>
<html>
<?php
include('head.php');
?>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

<?php
include('header.php');
include('menu.php');
?>
				<!-- Main -->
					<div id="main">
						<div class="inner">

<?php
require_once __DIR__ . '/secrets.php';
require_once __DIR__ . '/campaign-tracking.php';

$campaignTracking = capture_campaign_tracking_params();

// Every incoming query param (lang, key, name, utm_*, etc.) is forwarded as-is
// to level-check.php, exactly like the onecoin/subscribe checkout forms do.
$passthroughParams = $_GET;
unset($passthroughParams['email']);

$pageTitle = $translations['level_check_title'] ?? 'Find Your English Level';
$pageSubhead = $translations['level_check_subhead'] ?? 'Enter your email to start your free Level Check and jump straight into your dashboard.';
$emailLabel = $translations['level_check_email_label'] ?? 'Email Address';
$submitLabel = $translations['level_check_cta'] ?? 'Start My Level Check';
?>
<main class="page">
	<section class="card subscribe-card">
		<div class="subscribe-hero">
			<h1><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></h1>
			<p class="lead"><?php echo htmlspecialchars($pageSubhead, ENT_QUOTES, 'UTF-8'); ?></p>
		</div>

		<form class="subscribe-form" method="get" action="level-check.php">
			<div class="level-select-row">
				<label for="level-check-email"><?php echo htmlspecialchars($emailLabel, ENT_QUOTES, 'UTF-8'); ?></label>
				<input type="email" id="level-check-email" name="email" required>
			</div>
<?php foreach ($passthroughParams as $paramName => $paramValue): ?>
<?php if (is_scalar($paramValue)): ?>
			<input type="hidden" name="<?php echo htmlspecialchars((string) $paramName, ENT_QUOTES, 'UTF-8'); ?>" value="<?php echo htmlspecialchars((string) $paramValue, ENT_QUOTES, 'UTF-8'); ?>">
<?php endif; ?>
<?php endforeach; ?>
<?php foreach ($campaignTracking as $campaignField => $campaignValue): ?>
<?php if (!isset($passthroughParams[$campaignField]) && $campaignValue !== ''): ?>
			<input type="hidden" name="<?php echo htmlspecialchars($campaignField, ENT_QUOTES, 'UTF-8'); ?>" value="<?php echo htmlspecialchars($campaignValue, ENT_QUOTES, 'UTF-8'); ?>">
<?php endif; ?>
<?php endforeach; ?>
			<button type="submit"><?php echo htmlspecialchars($submitLabel, ENT_QUOTES, 'UTF-8'); ?></button>
		</form>
	</section>
</main>


						</div>
					</div>

<?php
include('contact_footer.php');
?>
	</body>
</html>
