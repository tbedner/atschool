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
							<!-- <h1><?php echo $translations['join_title']; ?></h1> -->

							<div class="image main">
								<img src="images/blog-fullscreen-1-1920x700.jpg" class="img-fluid" alt="" />
							</div>
                            
<?php
require_once __DIR__ . '/secrets.php';

$currency = strtolower((string) $courseCurrency);
if ($currency === 'jpy') {
	$amountDisplay = '¥' . number_format((int) $courseAmountOne);
} else {
	$amountDisplay = strtoupper($currency) . ' ' . number_format(((int) $courseAmountOne) / 100, 2);
}
?>
<main class="page">
	<section class="card checkout-card">
		<h1><?php echo htmlspecialchars($translations['checkout_course_title'] ?? $courseDisplayName, ENT_QUOTES, 'UTF-8'); ?></h1>
		<p><?php echo htmlspecialchars($translations['checkout_secure_payment'] ?? 'Secure payment powered by Stripe Checkout', ENT_QUOTES, 'UTF-8'); ?></p>
		<div class="price"><?php echo $amountDisplay; ?></div>

		<form method="post" action="create-checkout-session.php">
			<input type="hidden" name="mode" value="<?php echo htmlspecialchars($checkoutModeOne, ENT_QUOTES, 'UTF-8'); ?>">
			<input type="hidden" name="price" value="<?php echo (int) $courseAmountOne; ?>">
			<button type="submit"><?php echo htmlspecialchars($translations['checkout_buy_button'] ?? 'Buy and Enroll', ENT_QUOTES, 'UTF-8'); ?></button>
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