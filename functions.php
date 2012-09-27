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






// Register support for Wordpress thumbnails (featured images etc)
add_theme_support( 'post-thumbnails' );

// Use the below to add custom image sizes. Any large image will be automatically converted to the sizes below on upload.
// add_image_size( 'small-feature', 500, 300 );
?>