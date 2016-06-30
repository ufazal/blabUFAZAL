<?php
function bf_widgets_init() {
	register_sidebar( array(
		'name' 					=> __( 'Post Sidebar', 'bluelinerfoundation' ),
		'id' 						=> 'post-sidebar',
		'description' 		=> __( 'Located at the right side of archives, single and search.', 'bluelinerfoundation' ),
		'before_widget' 	=> '<ul><li id="%1$s" class="widget-container %2$s">',
		'after_widget' 		=> '</li></ul>',
		'before_title' 		=> '<h2 class="widget-title">',
		'after_title' 			=> '</h2>',
	));
	
	register_sidebar(array(
		'name'          		=> __('Page Sidebar', 'bluelinerfoundation' ),
		'id'         				=> 'page-sidebar',
		'description'   		=> __( 'Located at the right side of page templates.', 'bluelinerfoundation' ),
		'before_widget' 	=> '<ul><li id="%1$s" class="widget-container %2$s">',
		'after_widget' 		=> '</li></ul>',
		'before_title' 		=> '<h2 class="widget-title">',
		'after_title' 			=> '</h2>',
	));
				
	register_sidebar(array(
		'name'          		=> __('Footer1 Sidebar', 'bluelinerfoundation' ),
		'id'         				=> 'footer1',
		'description'  		=> __( 'Located at the footer column 1.', 'bluelinerfoundation' ),
		'before_widget' 	=> '<ul><li id="%1$s" class="widget-container %2$s">',
		'after_widget' 		=> '</li></ul>',
		'before_title' 		=> '<h2 class="widget-title">',
		'after_title' 			=> '</h2>',
	));
	
	register_sidebar(array(
		'name'          		=> __('Footer2 Sidebar', 'bluelinerfoundation' ),
		'id'         				=> 'footer2',
		'description'   		=> __( 'Located at the footer column 2.', 'bluelinerfoundation' ),
		'before_widget' 	=> '<ul><li id="%1$s" class="widget-container %2$s">',
		'after_widget' 		=> '</li></ul>',
		'before_title' 		=> '<h2 class="widget-title">',
		'after_title' 			=> '</h2>',
	));
	
	register_sidebar(array(
		'name'          		=> __('Footer3 Sidebar', 'bluelinerfoundation' ),
		'id'         				=> 'footer3',
		'description'   		=> __( 'Located at the footer column 3.', 'bluelinerfoundation' ),
		'before_widget' 	=> '<ul><li id="%1$s" class="widget-container %2$s">',
		'after_widget' 		=> '</li></ul>',
		'before_title' 		=> '<h2 class="widget-title">',
		'after_title' 			=> '</h2>',
	));
	
	register_sidebar(array(
		'name'          		=> __('Footer4 Sidebar', 'bluelinerfoundation' ),
		'id'         				=> 'footer4',
		'description'   		=> __( 'Located at the footer column 4.', 'bluelinerfoundation' ),
		'before_widget' 	=> '<ul><li id="%1$s" class="widget-container %2$s">',
		'after_widget' 		=> '</li></ul>',
		'before_title' 		=> '<h2 class="widget-title">',
		'after_title' 			=> '</h2>',
	));
	register_sidebar(array(
		'name'          		=> __('Schedule Widget', 'bluelinerfoundation' ),
		'id'         				=> 'schedule-widget',
		'description'   		=> __( 'sidebar schedule list', 'bluelinerfoundation' ),
		'before_widget' 	=> '<div>',
		'after_widget' 		=> '</div>',
		'before_title' 		=> '<h2 class="schedule-title">',
		'after_title' 			=> '</h2>',
	));
	register_sidebar(array(
		'name'          		=> __('Program Description PDF link Widget', 'bluelinerfoundation' ),
		'id'         				=> 'programpdf-widget',
		'description'   		=> __( 'program description pdf link on header', 'bluelinerfoundation' ),
		'before_widget' 	=> '',
		'after_widget' 		=> '',
		'before_title' 		=> '',
		'after_title' 			=> '',
	));
}
/** Register sidebars by running creativedesign_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'bf_widgets_init' );
?>