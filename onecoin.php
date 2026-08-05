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
                            <!-- <p><?php echo $translations['join_p1']; ?></p>

							<p><?php echo $translations['join_p2']; ?></p>
							
							<p><?php echo $translations['join_p3']; ?></p>

							<p><?php echo $translations['join_p4']; ?></p>

							<p class="text-center"><a href="moodle/login/signup.php?lang=<?php echo $lang; ?>" style="color:#fff;"><button type="button" class="btn btn-dark"><?php echo $translations['join_button']; ?></button></a></p>
							
							<p class="text-center"><a href="assets/docs/guide_<?php echo $lang; ?>.pdf" style="color:#fff;border-bottom:none !important;" target="_blank"><button type="button" class="btn" style="color:#585858 !important;"><?php echo $translations['join_docs']; ?></button></a></p> -->
							
							
							<?php
require_once __DIR__ . '/secrets.php';

$currency = strtolower((string) $courseCurrency);
if ($currency === 'jpy') {
	$amountDisplay = 'JPY ' . number_format((int) $courseAmountCents);
} else {
	$amountDisplay = strtoupper($currency) . ' ' . number_format(((int) $courseAmountCents) / 100, 2);
}
?>
<style>
		body {
			margin: 0;
			background: #f5f7fb;
			color: #111827;
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
		}

		.page {
			min-height: 100vh;
			display: grid;
			place-items: center;
			padding: 24px;
		}

		.card {
			width: 100%;
			max-width: 500px;
			background: #fff;
			border-radius: 12px;
			box-shadow: 0 12px 30px rgba(15, 23, 42, 0.08);
			padding: 28px;
			text-align: center;
		}

		h1 {
			margin: 0 0 8px;
			font-size: 28px;
		}

		p {
			margin: 0;
			color: #4b5563;
		}

		.price {
			margin: 16px 0 24px;
			font-size: 26px;
			font-weight: 700;
		}

		button {
			width: 100%;
			height: 48px;
			border: 0;
			border-radius: 10px;
			background: #0f172a;
			color: #fff;
			font-size: 16px;
			font-weight: 600;
			cursor: pointer;
		}

		button:hover {
			background: #1e293b;
		}
	</style>
<main class="page">
	<section class="card">
		<h1><?php echo htmlspecialchars($courseDisplayName, ENT_QUOTES, 'UTF-8'); ?></h1>
		<p>Secure payment powered by Stripe Checkout</p>
		<div class="price"><?php echo $amountDisplay; ?></div>

		<form method="post" action="create-checkout-session.php">
			<button type="submit">Pay and Enroll</button>
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