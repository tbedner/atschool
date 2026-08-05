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
							<h1><?php echo $translations['join_title']; ?></h1>

							<div class="image main">
								<img src="images/blog-fullscreen-1-1920x700.jpg" class="img-fluid" alt="" />
							</div>
                            <div id="paypal-container-MWPS8G4Q4ZA5Y"></div>
                            <script>
                              paypal.HostedButtons({
                                hostedButtonId: "MWPS8G4Q4ZA5Y",
                              }).render("#paypal-container-MWPS8G4Q4ZA5Y")
                            </script>
							<p><?php echo $translations['join_p1']; ?></p>

							<p><?php echo $translations['join_p2']; ?></p>
							
							<p><?php echo $translations['join_p3']; ?></p>

							<p><?php echo $translations['join_p4']; ?></p>

							<p class="text-center"><a href="moodle/login/signup.php?lang=<?php echo $lang; ?>" style="color:#fff;"><button type="button" class="btn btn-dark"><?php echo $translations['join_button']; ?></button></a></p>
							
							<p class="text-center"><a href="assets/docs/guide_<?php echo $lang; ?>.pdf" style="color:#fff;border-bottom:none !important;" target="_blank"><button type="button" class="btn" style="color:#585858 !important;"><?php echo $translations['join_docs']; ?></button></a></p>
						</div>
					</div>

<?php
include('contact_footer.php');
?>
	</body>
</html>