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

							<p><b><?php echo $translations['join_p4']; ?></b> <?php echo $translations['join_p5']; ?></p>
						</div>
					</div>

<?php
include('contact_footer.php');
?>
	</body>
</html>