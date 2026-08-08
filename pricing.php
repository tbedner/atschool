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

  <p style="margin: 0 0 1rem 0;"><strong><?php echo isset($translations['compare_intro']) ? htmlspecialchars($translations['compare_intro'], ENT_QUOTES, 'UTF-8') : 'Choose the option that fits your goals.'; ?></strong></p>

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
          <th scope="row"><?php echo htmlspecialchars($translations['compare_get_started'], ENT_QUOTES, 'UTF-8'); ?></th>
          <td><a href="onecoin.php?lang=<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-outline-dark" style="padding: 0.75rem 1.25rem; font-weight: 700; border-width: 2px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);"><?php echo htmlspecialchars($translations['checkout_buy_button'], ENT_QUOTES, 'UTF-8'); ?></a></td>
          <td><a href="subscribe.php?lang=<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-outline-dark" style="padding: 0.75rem 1.25rem; font-weight: 700; border-width: 2px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);"><?php echo htmlspecialchars($translations['checkout_subscribe_button'], ENT_QUOTES, 'UTF-8'); ?></a></td>
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