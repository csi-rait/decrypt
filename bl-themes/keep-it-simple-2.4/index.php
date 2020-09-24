<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<html>
<head>
  <?php include(THEME_DIR_PHP.'head.php'); ?>
</head>
<body>

  <!-- Load Bludit Plugins: Site Body Begin -->
	<?php Theme::plugins('siteBodyBegin'); ?>

	<!-- Navbar -->
	<?php include(THEME_DIR_PHP.'navbar.php'); ?>

  <div id="content-wrap">

    <div class="row">

      <div id="main" class="eight columns">

	<!-- Content -->
		<?php
		  // $WHERE_AM_I variable detect where the user is browsing
		  // If the user is watching a particular page the variable takes the value "page"
		  // If the user is watching the frontpage the variable takes the value "home"
		  
      if ($WHERE_AM_I == 'page') {
			  include(THEME_DIR_PHP.'page.php');
		    } else {
			  include(THEME_DIR_PHP.'home.php');
		  }
	    ?>

      </div> <!-- end main -->

      <!-- Right Sidebar -->

	<div id="sidebar" class="four columns">
	<?php Theme::plugins('siteSidebar') ?>
      </div> <!-- end sidebar -->

    </div> <!-- end row -->

  </div> <!-- end content-wrap -->

	<!-- Footer -->
	<?php include(THEME_DIR_PHP.'footer.php'); ?>

	<!-- Javascript -->
	<?php
	  echo Theme::jquery();
		echo Theme::js('js/main.js');
	?>

	<!-- Load Bludit Plugins: Site Body End -->
	<?php Theme::plugins('siteBodyEnd'); ?>

</body>
</html>
