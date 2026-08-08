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
if (($lang ?? '') === 'ja') {
	$amountDisplay = '¥' . number_format((int) $courseAmountOne);
} elseif ($currency === 'jpy') {
	$amountDisplay = 'A$' . number_format(((int) $courseAmountOne) / 100, 0);
} else {
	$amountDisplay = strtoupper($currency) . ' ' . number_format(((int) $courseAmountOne) / 100, 2);
}

$offerBadge = $translations['onecoin_badge'] ?? 'Try Mission 1 for Just A$5';
$offerHeadline = $translations['onecoin_title'] ?? 'Scared of Sudden English Conversation? Practice with AI First, Then Test Your Skills in a 15-Minute Live Session!';
$offerSubhead = $translations['onecoin_subhead'] ?? 'Master your first real-world English scenario with zero pressure. Get full access to our AI voice chatbot, Moodle interactive quizzes, and a 15-minute live "Boss Battle" call with a native instructor—all for one coin.';
$offerBenefitsTitle = $translations['onecoin_benefits_title'] ?? 'What You Get for A$5';
$offerStepsTitle = $translations['onecoin_steps_title'] ?? 'How It Works (The 3-Step Flow)';
$offerReasonsTitle = $translations['onecoin_reasons_title'] ?? 'Why Start with the One-Coin Offer?';
$offerCta = $translations['onecoin_cta_primary'] ?? 'Get Mission 1 for A$5 Now';
$offerMicrocopy = $translations['onecoin_cta_microcopy'] ?? 'One-time payment of A$5. Instant access upon checkout with no automatic recurring charges.';
?>
<main class="page">
	<section class="card subscribe-card">
		<div class="subscribe-hero">
			<p class="eyebrow"><?php echo htmlspecialchars($offerBadge, ENT_QUOTES, 'UTF-8'); ?></p>
			<h1><?php echo htmlspecialchars($offerHeadline, ENT_QUOTES, 'UTF-8'); ?></h1>
			<p class="lead"><?php echo htmlspecialchars($offerSubhead, ENT_QUOTES, 'UTF-8'); ?></p>
			<div class="subscribe-price"><?php echo htmlspecialchars($amountDisplay, ENT_QUOTES, 'UTF-8'); ?></div>
		</div>

		<div class="subscribe-grid">
			<div class="subscribe-panel">
				<h2><?php echo htmlspecialchars($offerBenefitsTitle, ENT_QUOTES, 'UTF-8'); ?></h2>
				<ul class="subscribe-list">
					<li>
						<strong><?php echo htmlspecialchars($translations['onecoin_feature_1_title'] ?? 'Unlimited AI Voice Warm-Up (Private Sandbox)', ENT_QUOTES, 'UTF-8'); ?></strong>
						<p><?php echo htmlspecialchars($translations['onecoin_feature_1_text'] ?? 'Practice your self-introduction and key phrases as many times as you want without feeling embarrassed. Build your confidence in private before speaking to a real person.', ENT_QUOTES, 'UTF-8'); ?></p>
					</li>
					<li>
						<strong><?php echo htmlspecialchars($translations['onecoin_feature_2_title'] ?? 'Interactive Mission Quizzes & Cards', ENT_QUOTES, 'UTF-8'); ?></strong>
						<p><?php echo htmlspecialchars($translations['onecoin_feature_2_text'] ?? 'Reinforce essential vocabulary and sentence structures through step-by-step interactive exercises to make sure you are fully prepared.', ENT_QUOTES, 'UTF-8'); ?></p>
					</li>
					<li>
						<strong><?php echo htmlspecialchars($translations['onecoin_feature_3_title'] ?? '15-Minute Live "Boss Battle" Session', ENT_QUOTES, 'UTF-8'); ?></strong>
						<p><?php echo htmlspecialchars($translations['onecoin_feature_3_text'] ?? 'Put your preparation into practice! Book a friendly 15-minute 1-on-1 video call with a native instructor to complete Mission 1 and receive personalized, positive feedback.', ENT_QUOTES, 'UTF-8'); ?></p>
					</li>
				</ul>
			</div>

			<div class="subscribe-panel">
				<h2><?php echo htmlspecialchars($offerStepsTitle, ENT_QUOTES, 'UTF-8'); ?></h2>
				<ol class="subscribe-steps">
					<li>
						<strong><?php echo htmlspecialchars($translations['onecoin_step_1_title'] ?? 'Step 1: Warm Up with AI', ENT_QUOTES, 'UTF-8'); ?></strong>
						<p><?php echo htmlspecialchars($translations['onecoin_step_1_text'] ?? 'Talk with our AI voice chatbot 24/7 to practice your pronunciation and build confidence.', ENT_QUOTES, 'UTF-8'); ?></p>
					</li>
					<li>
						<strong><?php echo htmlspecialchars($translations['onecoin_step_2_title'] ?? 'Step 2: Complete the Quizzes', ENT_QUOTES, 'UTF-8'); ?></strong>
						<p><?php echo htmlspecialchars($translations['onecoin_step_2_text'] ?? 'Check your understanding and earn your Mission 1 preparation badge.', ENT_QUOTES, 'UTF-8'); ?></p>
					</li>
					<li>
						<strong><?php echo htmlspecialchars($translations['onecoin_step_3_title'] ?? 'Step 3: Clear the Boss Battle', ENT_QUOTES, 'UTF-8'); ?></strong>
						<p><?php echo htmlspecialchars($translations['onecoin_step_3_text'] ?? 'Complete a 15-minute live conversation with a supportive native teacher.', ENT_QUOTES, 'UTF-8'); ?></p>
					</li>
				</ol>

				<h2><?php echo htmlspecialchars($offerReasonsTitle, ENT_QUOTES, 'UTF-8'); ?></h2>
				<ul class="subscribe-list">
					<li>
						<strong><?php echo htmlspecialchars($translations['onecoin_reason_1_title'] ?? 'Zero Risk, Zero Judgement', ENT_QUOTES, 'UTF-8'); ?></strong>
						<p><?php echo htmlspecialchars($translations['onecoin_reason_1_text'] ?? 'Designed specifically for beginners who feel nervous about speaking English.', ENT_QUOTES, 'UTF-8'); ?></p>
					</li>
					<li>
						<strong><?php echo htmlspecialchars($translations['onecoin_reason_2_title'] ?? 'Instant Mobile Checkout', ENT_QUOTES, 'UTF-8'); ?></strong>
						<p><?php echo htmlspecialchars($translations['onecoin_reason_2_text'] ?? 'Pay seamlessly in seconds via PayPay, Apple Pay, or Google Pay.', ENT_QUOTES, 'UTF-8'); ?></p>
					</li>
					<li>
						<strong><?php echo htmlspecialchars($translations['onecoin_reason_3_title'] ?? 'Special Bonus', ENT_QUOTES, 'UTF-8'); ?></strong>
						<p><?php echo htmlspecialchars($translations['onecoin_reason_3_text'] ?? 'Complete your 15-minute live session and apply your ¥500 payment as a full credit toward your first month of the full Monthly Subscription!', ENT_QUOTES, 'UTF-8'); ?></p>
					</li>
				</ul>

				<form class="subscribe-form" method="post" action="create-checkout-session.php">
					<input type="hidden" name="mode" value="<?php echo htmlspecialchars($checkoutModeOne, ENT_QUOTES, 'UTF-8'); ?>">
					<input type="hidden" name="price" value="<?php echo (int) $courseAmountOne; ?>">
					<button type="submit"><?php echo htmlspecialchars($offerCta, ENT_QUOTES, 'UTF-8'); ?></button>
				</form>
				<p class="microcopy"><?php echo htmlspecialchars($offerMicrocopy, ENT_QUOTES, 'UTF-8'); ?></p>
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