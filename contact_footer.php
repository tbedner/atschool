<!-- Footer -->
                <footer id="footer">
						<div class="inner">
							<section>
								<h2><?php echo $translations['contact_title']; ?></h2>
								<form method="post" action="email.php">
									<?php $currentUrl = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
									<input type="hidden" name="pathway" id="pathway"  value="<?php echo $currentUrl; ?>">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="<?php echo $translations['contact_name']; ?>" />
										</div>

										<div class="field half">
											<input type="text" name="email" id="email" placeholder="<?php echo $translations['contact_email']; ?>" />
										</div>

										<div class="field">
											<input type="text" name="subject" id="subject" placeholder="<?php echo $translations['contact_subject']; ?>" />
										</div>

										<div class="field">
											<textarea name="message" id="message" rows="3" placeholder="<?php echo $translations['contact_message']; ?>"></textarea>
										</div>

										<div class="field text-right">
											<label>&nbsp;</label>

											<ul class="actions">
												<li><input type="submit" value="<?php echo $translations['contact_send']; ?>" class="primary" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section>
								<h2><?php echo $translations['contact_info']; ?></h2>

								<ul class="alt">
									<li><span class="fa fa-envelope-o"></span> <a href="mailto:support@at-school-portal.com" target="_blank">support@at-school-portal.com</a></li>
									<!-- <li><span class="fa fa-phone"></span> +1  </li>
									<li><span class="fa fa-map-pin"></span> 212 Barrington Court New York, ABC 10001 United States of America</li> -->
								</ul>

								
							</section>

							<ul class="copyright">
								<li><?php echo $translations['contact_copyright']; ?> © <?php echo date("Y"); ?> AtSchool </li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>
