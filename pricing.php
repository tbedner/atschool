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

  <p style="margin: 0 0 1rem 0;"><strong>Choose the option that fits your goals.</strong></p>

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
        <tr>
          <th scope="row">Get started</th>
          <td><a href="onecoin.php?lang=<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-outline-dark">Purchase Mission 1</a></td>
          <td><a href="subscribe.php?lang=<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-dark">Subscribe</a></td>
          <td></td>
        </tr>
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