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

							<br>

							<h2 class="h2"><?php echo $translations['home_title2']; ?></h2>
							<br>
							<div class="row">
								

								<div class="col-sm-4 text-center">
									<img src="images/blog-1-720x480.jpg" class="img-fluid" alt="" />

									<h2 class="m-n"><a href="join.php"><?php echo $translations['home_join']; ?></a></h2>

								</div>

								<div class="col-sm-4 text-center">
									<img src="images/blog-2-720x480.jpg" class="img-fluid" alt="" />

									<h2 class="m-n"><a href="about.php"><?php echo $translations['home_about']; ?></a></h2>

								</div>

								<div class="col-sm-4 text-center">
									<img src="images/blog-4-720x480.jpg" class="img-fluid" alt="" />

									<h2 class="m-n"><a href="faq.php"><?php echo $translations['home_faq']; ?></a></h2>

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