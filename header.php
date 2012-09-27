<!DOCTYPE html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"  />
	<meta name="robots" content="index follow">
	
	<title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie.css">
	<![endif]-->

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="<?php bloginfo('template_directory'); ?>/scripts/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<script src="<?php bloginfo('template_directory'); ?>/scripts/css3-mediaqueries.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/scripts/respond.min.js"></script>	
	<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.js"></script>
	
	<?php wp_head(); ?>