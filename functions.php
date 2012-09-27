<?php
// Ensure any images/files in templates use the constants below i.e. don't hard-code full paths to images, use the "TEMPPATH" below
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/images");


// Register support for Wordpress navigation (Appearance > Menus)
add_theme_support('nav-menus');
if ( function_exists('register_nav_menus')) {
	register_nav_menus(
		array(
			'main' => 'Main Nav'
		)
	);
}
?>