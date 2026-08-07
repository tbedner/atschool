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

$currency = strtolower((string) $courseCurrency);
if ($currency === 'jpy') {
	$amountDisplay = '¥' . number_format((int) $courseAmountTwo);
} else {
	$amountDisplay = strtoupper($currency) . ' ' . number_format(((int) $courseAmountTwo) / 100, 2);
}
?>
<main class="page">
	<section class="card checkout-card">
		<h1><?php echo htmlspecialchars($courseDisplayName, ENT_QUOTES, 'UTF-8'); ?></h1>
		<p><?php echo htmlspecialchars($translations['checkout_secure_payment'] ?? 'Secure payment powered by Stripe Checkout', ENT_QUOTES, 'UTF-8'); ?></p>
		<div class="price"><?php echo $amountDisplay; ?></div>

		<form method="post" action="create-checkout-session.php">
			<input type="hidden" name="mode" value="<?php echo htmlspecialchars($checkoutModeTwo, ENT_QUOTES, 'UTF-8'); ?>">
			<input type="hidden" name="price" value="<?php echo (int) $courseAmountTwo; ?>">
			<button type="submit"><?php echo htmlspecialchars($translations['checkout_subscribe_button'] ?? 'Subscribe and Enroll', ENT_QUOTES, 'UTF-8'); ?></button>
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