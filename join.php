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

							<p><?php echo $translations['join_p1']; ?></p>

							<p><?php echo $translations['join_p2']; ?></p>
							
							<p><?php echo $translations['join_p3']; ?></p>

							<p><?php echo $translations['join_p4']; ?></p>

							<p class="text-center"><a href="moodle/login/signup.php?lang=<?php echo $lang; ?>" style="color:#fff;"><button type="button" class="btn btn-dark"><?php echo $translations['join_button']; ?></button></a></p>
							
							<p class="text-center"><a href="assets/docs/guide_<?php $supported_languages = ['ja', 'en', 'es']; $lang = in_array($lang, $supported_languages) ? $lang : 'en'; echo $lang; ?>.pdf" style="color:#fff;border-bottom:none !important;" target="_blank"><button type="button" class="btn" style="color:#585858 !important;"><?php echo $translations['join_docs']; ?></button></a></p>
						</div>
					</div>

<?php
include('contact_footer.php');
?>
	</body>
</html>