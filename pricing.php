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

<section class="atschool-course-comparison" lang="en">
							<?php echo $translations['compare_title']; ?>

  <div style="margin: 0 0 1.5rem 0;">
    <p style="margin-bottom: 0.75rem;"><strong>Choose the option that fits your goals.</strong></p>
    <p style="margin-bottom: 0.75rem;">Start with a monthly subscription for ongoing support, or purchase Mission 1 to try the experience first.</p>
    <p>
      <a href="subscribe.php?lang=<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-dark" style="margin-right: 0.5rem;">Subscribe</a>
      <a href="onecoin.php?lang=<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-outline-dark">Purchase Mission 1</a>
    </p>
  </div>

  <table class="atschool-table">
    <thead>
      <tr>
        <?php echo $translations['compare_tabletitle1']; ?>
        <?php echo $translations['compare_tabletitle2']; ?>
        <?php echo $translations['compare_tabletitle3']; ?>
        <?php echo $translations['compare_tabletitle4']; ?>
      </tr>
    </thead>
    <tbody style="text-align:center;">
        <?php echo $translations['compare_table1']; ?>
        <?php echo $translations['compare_table2']; ?>
        <?php echo $translations['compare_table3']; ?>
        <?php echo $translations['compare_table4']; ?>
        <?php echo $translations['compare_table5']; ?>
        <?php echo $translations['compare_table6']; ?>
        <?php echo $translations['compare_table7']; ?>
        <?php echo $translations['compare_table8']; ?>
        <?php echo $translations['compare_table9']; ?>
        <?php echo $translations['compare_table10']; ?>
        <?php echo $translations['compare_table11']; ?>
        <?php echo $translations['compare_table12']; ?>
        <?php echo $translations['compare_table13']; ?>
        <?php echo $translations['compare_table14']; ?>
    </tbody>
  </table>

  <div class="atschool-course-blurbs">
    <?php echo $translations['compare_courseblurb_main']; ?>
    <?php echo $translations['compare_courseblurb_title1']; ?>
    <?php echo $translations['compare_courseblurb_p1']; ?>
    <?php echo $translations['compare_courseblurb_title2']; ?>
    <?php echo $translations['compare_courseblurb_p2']; ?>
    <?php echo $translations['compare_courseblurb_title3']; ?>
    <?php echo $translations['compare_courseblurb_p3']; ?>   
  </div>
</section>

						</div>
					</div>

<?php
include('contact_footer.php');
?>
	</body>
</html>