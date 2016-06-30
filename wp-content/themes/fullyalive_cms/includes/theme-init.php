<?php

add_action( 'after_setup_theme', 'bf_setup' );

if ( ! function_exists( 'bf_setup' ) ):

function bf_setup() {

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// This theme uses post thumbnails
	if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'blog-post-thumbnail', 125, 125, true ); // Blog Thumbnail
		add_image_size( 'blog-post-thumbnail2', 150, 150, true ); // Blog Thumbnail2
		add_image_size( 'blog-post-tinythumb', 50, 50, true ); // thumb sidebar page
		add_image_size( 'page-header-image', 940, 150, true ); // Blog Thumbnail2
		add_image_size( 'slider-home', 940, 370, true ); // Slider Homepage
	add_image_size( 'logo-thumb', 999, 70 ); //logo thumbnail 
	}

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'mainmenu' => __( 'Main Menu', 'bluelinerfoundation' ),
		'copyrightmenu' => __( 'Copyright Menu', 'bluelinerfoundation' )
	) );
	
	
}
endif;


?>
