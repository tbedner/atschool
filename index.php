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
<?php
include('carousel.php');
?>
						<br>
						<br>

						<div class="inner">
							<!-- About Us -->
							<header id="inner">
								<h1><?php echo $translations['home_title']; ?></h1>
								<h2 class="h2"><?php echo $translations['home_p1']; ?></h2>
								<br>
								<p><?php echo $translations['home_p2']; ?></p>
								
							</header>

							<?php if (($lang ?? '') === 'ja'): ?>
							<section style="margin: 1.5rem 0 2rem; padding: 1.5rem 1.5rem 1.75rem; border: 1px solid #e6e6e6; border-radius: 18px; background: #f8f9fb; box-shadow: 0 6px 18px rgba(0,0,0,0.04);">
								<p style="margin: 0 0 0.4rem; font-size: 0.9rem; font-weight: 700; letter-spacing: 0.08em; color: #5a6b7a; text-transform: uppercase;">Zero Judgement / Zero Pressure</p>
								<h2 style="margin: 0 0 0.75rem; font-size: 1.45rem; line-height: 1.35;"><?php echo htmlspecialchars($translations['home_jp_hero_title'], ENT_QUOTES, 'UTF-8'); ?></h2>
								<p style="margin: 0 0 1rem; line-height: 1.7;"><?php echo htmlspecialchars($translations['home_jp_hero_subhead'], ENT_QUOTES, 'UTF-8'); ?></p>
								<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 0.8rem; margin: 1rem 0 1.1rem;">
									<div style="padding: 0.9rem 1rem; border-radius: 12px; background: #fff; border: 1px solid #e2e6eb;">
										<strong><?php echo htmlspecialchars($translations['home_jp_step_1_title'], ENT_QUOTES, 'UTF-8'); ?></strong>
										<p style="margin: 0.35rem 0 0; font-size: 0.95rem; line-height: 1.55;"><?php echo htmlspecialchars($translations['home_jp_step_1_text'], ENT_QUOTES, 'UTF-8'); ?></p>
									</div>
									<div style="padding: 0.9rem 1rem; border-radius: 12px; background: #fff; border: 1px solid #e2e6eb;">
										<strong><?php echo htmlspecialchars($translations['home_jp_step_2_title'], ENT_QUOTES, 'UTF-8'); ?></strong>
										<p style="margin: 0.35rem 0 0; font-size: 0.95rem; line-height: 1.55;"><?php echo htmlspecialchars($translations['home_jp_step_2_text'], ENT_QUOTES, 'UTF-8'); ?></p>
									</div>
									<div style="padding: 0.9rem 1rem; border-radius: 12px; background: #fff; border: 1px solid #e2e6eb;">
										<strong><?php echo htmlspecialchars($translations['home_jp_step_3_title'], ENT_QUOTES, 'UTF-8'); ?></strong>
										<p style="margin: 0.35rem 0 0; font-size: 0.95rem; line-height: 1.55;"><?php echo htmlspecialchars($translations['home_jp_step_3_text'], ENT_QUOTES, 'UTF-8'); ?></p>
									</div>
								</div>
								<p style="margin: 0 0 0.5rem; font-weight: 600;"><?php echo htmlspecialchars($translations['home_jp_hero_timeline'], ENT_QUOTES, 'UTF-8'); ?></p>
								<p style="margin: 0 0 0.5rem;"><?php echo htmlspecialchars($translations['home_jp_hero_instructor'], ENT_QUOTES, 'UTF-8'); ?></p>
								<p style="margin: 0 0 1rem;"><?php echo htmlspecialchars($translations['home_jp_hero_risk'], ENT_QUOTES, 'UTF-8'); ?></p>
								<div style="display: flex; flex-wrap: wrap; gap: 0.75rem; justify-content: center;">
									<a href="join.php?lang=<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" style="color:#fff;"><button type="button" class="btn btn-dark">Mission 1を体験する</button></a>
									<a href="subscribe.php?lang=<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" style="color:#111;"><button type="button" class="btn btn-outline-dark" style="padding: 0.75rem 1.25rem; font-weight: 700; border-width: 2px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);"><?php echo htmlspecialchars($translations['home_jp_subscribe_button'], ENT_QUOTES, 'UTF-8'); ?></button></a>
								</div>
							</section>
							<?php endif; ?>

							<br>

							<h2 class="h2"><?php echo $translations['home_title2']; ?></h2>
							<br>
							<div class="row">
								

								<div class="col-sm-4 text-center">
									<a href="join.php"><img src="images/blog-1-720x480.jpg" class="img-fluid" alt="" />

									<h2 class="m-n"><?php echo $translations['home_join']; ?></h2></a>

								</div>

								<div class="col-sm-4 text-center">
									<a href="about.php"><img src="images/blog-2-720x480.jpg" class="img-fluid" alt="" />

									<h2 class="m-n"><?php echo $translations['home_about']; ?></h2></a>

								</div>

								<div class="col-sm-4 text-center">
									<a href="faq.php"><img src="images/blog-4-720x480.jpg" class="img-fluid" alt="" />

									<h2 class="m-n"><?php echo $translations['home_faq']; ?></h2></a>

								</div>

								<!-- <div class="col-sm-4 text-center">
									<img src="images/blog-5-720x480.jpg" class="img-fluid" alt="" />

									<h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

									<p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
								</div>

								<div class="col-sm-4 text-center">
									<img src="images/blog-6-720x480.jpg" class="img-fluid" alt="" />

									<h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

									<p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
								</div>

								<div class="col-sm-4 text-center">
									<img src="images/blog-3-720x480.jpg" class="img-fluid" alt="" />

									<h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

									<p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
								</div> -->
							</div>

							<br><br>

							<p class="text-center"><a href="moodle/?lang=<?php echo $lang; ?>" style="color:#fff;"><button type="button" class="btn btn-dark"><?php echo $translations['home_portal']; ?></button></a></p>

						</div>
					</div>

<?php
include('contact_footer.php');
?>
	</body>
</html>