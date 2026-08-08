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

$subscribePriceDisplay = $translations['subscribe_price_display'] ?? ($amountDisplay . ' / month');

$subscribeBadge = $translations['subscribe_badge'] ?? 'Monthly Subscription';
$subscribeHeadline = $translations['subscribe_page_title'] ?? 'Continuous Growth: The Monthly Mission Pass';
$subscribeSubhead = $translations['subscribe_page_subhead'] ?? 'Challenge a new mission every month! Practice with AI first, then step into real conversations with confidence.';
$subscribeIntro = $translations['subscribe_page_intro'] ?? 'Build a lasting speaking habit with unlimited AI voice coaching, 1 new practical mission every month, and 2 hours of 1-on-1 live instructor sessions.';
$subscribeIncludedTitle = $translations['subscribe_included_title'] ?? 'What’s Included Every Month?';
$subscribeReasonsTitle = $translations['subscribe_reasons_title'] ?? 'Why Join the Monthly Subscription?';
$subscribeCta = $translations['subscribe_cta_primary'] ?? 'Start Your Monthly Subscription (Cancel Anytime)';
$subscribeMicrocopy = $translations['subscribe_cta_microcopy'] ?? 'Instant access to the AI voice chatbot and this month’s featured mission upon registration.';
?>
<main class="page">
	<section class="card subscribe-card">
		<div class="subscribe-hero">
			<p class="eyebrow"><?php echo htmlspecialchars($subscribeBadge, ENT_QUOTES, 'UTF-8'); ?></p>
			<h1><?php echo htmlspecialchars($subscribeHeadline, ENT_QUOTES, 'UTF-8'); ?></h1>
			<p class="lead"><?php echo htmlspecialchars($subscribeSubhead, ENT_QUOTES, 'UTF-8'); ?></p>
			<p class="intro"><?php echo htmlspecialchars($subscribeIntro, ENT_QUOTES, 'UTF-8'); ?></p>
			<div class="subscribe-price"><?php echo htmlspecialchars($subscribePriceDisplay, ENT_QUOTES, 'UTF-8'); ?></div>
		</div>

		<div class="subscribe-grid">
			<div class="subscribe-panel">
				<h2><?php echo htmlspecialchars($subscribeIncludedTitle, ENT_QUOTES, 'UTF-8'); ?></h2>
				<ul class="subscribe-list">
					<li>
						<strong><?php echo htmlspecialchars($translations['subscribe_feature_1_title'] ?? '1 New Practical Mission', ENT_QUOTES, 'UTF-8'); ?></strong>
						<p><?php echo htmlspecialchars($translations['subscribe_feature_1_text'] ?? 'Unlock a new real-world scenario each month—from café interactions to navigating travel and handling unexpected situations. Build practical skills step-by-step at a comfortable pace.', ENT_QUOTES, 'UTF-8'); ?></p>
					</li>
					<li>
						<strong><?php echo htmlspecialchars($translations['subscribe_feature_2_title'] ?? 'Unlimited AI Voice Chatbot Access', ENT_QUOTES, 'UTF-8'); ?></strong>
						<p><?php echo htmlspecialchars($translations['subscribe_feature_2_text'] ?? 'Zero judgment and zero pressure. Practice speaking as much as you want, 24/7. Refine your pronunciation and phrasing in private until you feel 100% ready for the live session.', ENT_QUOTES, 'UTF-8'); ?></p>
					</li>
					<li>
						<strong><?php echo htmlspecialchars($translations['subscribe_feature_3_title'] ?? '2 Hours of Live Instructor Coaching (4 x 30-Min Sessions)', ENT_QUOTES, 'UTF-8'); ?></strong>
						<p><?php echo htmlspecialchars($translations['subscribe_feature_3_text'] ?? 'Get 4 individual 30-minute sessions per month (2 hours total) with native instructors. Put your AI practice into action, receive tailored feedback, and solidify your speaking confidence.', ENT_QUOTES, 'UTF-8'); ?></p>
					</li>
				</ul>
			</div>

			<div class="subscribe-panel">
				<h2><?php echo htmlspecialchars($subscribeReasonsTitle, ENT_QUOTES, 'UTF-8'); ?></h2>
				<ol class="subscribe-steps">
					<li>
						<strong><?php echo htmlspecialchars($translations['subscribe_reason_1_title'] ?? 'A Stress-Free “AI → Human” Learning Flow', ENT_QUOTES, 'UTF-8'); ?></strong>
						<p><?php echo htmlspecialchars($translations['subscribe_reason_1_text'] ?? 'No more freezing up in front of a teacher. By practicing privately with the AI chatbot first, your live sessions become a rewarding showcase of what you’ve learned rather than an intimidating test.', ENT_QUOTES, 'UTF-8'); ?></p>
					</li>
					<li>
						<strong><?php echo htmlspecialchars($translations['subscribe_reason_2_title'] ?? 'A Manageable Pace Built for Consistency', ENT_QUOTES, 'UTF-8'); ?></strong>
						<p><?php echo htmlspecialchars($translations['subscribe_reason_2_text'] ?? 'Focusing on 1 core mission and 30 minutes of live coaching per week fits effortlessly into a busy work or study schedule without causing burnout.', ENT_QUOTES, 'UTF-8'); ?></p>
					</li>
					<li>
						<strong><?php echo htmlspecialchars($translations['subscribe_reason_3_title'] ?? 'Total Flexibility (Cancel Anytime)', ENT_QUOTES, 'UTF-8'); ?></strong>
						<p><?php echo htmlspecialchars($translations['subscribe_reason_3_text'] ?? 'No long-term contracts or lock-ins. Pause or cancel your subscription whenever you need to match your personal schedule.', ENT_QUOTES, 'UTF-8'); ?></p>
					</li>
				</ol>

				<form class="subscribe-form" method="post" action="create-checkout-session.php">
					<input type="hidden" name="mode" value="<?php echo htmlspecialchars($checkoutModeTwo, ENT_QUOTES, 'UTF-8'); ?>">
					<input type="hidden" name="price" value="<?php echo (int) $courseAmountTwo; ?>">
					<button type="submit"><?php echo htmlspecialchars($translations['checkout_subscribe_button'] ?? 'Subscribe and Enroll', ENT_QUOTES, 'UTF-8'); ?></button>
				</form>
				<p class="microcopy"><?php echo htmlspecialchars($subscribeMicrocopy, ENT_QUOTES, 'UTF-8'); ?></p>
			</div>
		</div>
	</section>
</main>


						</div>
					</div>

<?php
include('contact_footer.php');
?>
	</body>
</html>