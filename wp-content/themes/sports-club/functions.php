<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.0
 * 
 * Main Theme Functions File
 * Created by CMSMasters
 * 
 */


// Current Theme Constants
if (!defined('CMSMASTERS_SHORTNAME')) {
	define('CMSMASTERS_SHORTNAME', 'sports-club');
}

if (!defined('CMSMASTERS_FULLNAME')) {
	define('CMSMASTERS_FULLNAME', 'Sports Club');
}



/*** START EDIT THEME PARAMETERS HERE ***/

// Theme Settings System Fonts List
if (!function_exists('cmsmasters_system_fonts_list')) {
	function cmsmasters_system_fonts_list() {
		$fonts = array( 
			"Arial, Helvetica, 'Nimbus Sans L', sans-serif" => 'Arial', 
			"Calibri, 'AppleGothic', 'MgOpen Modata', sans-serif" => 'Calibri', 
			"'Trebuchet MS', Helvetica, Garuda, sans-serif" => 'Trebuchet MS', 
			"'Comic Sans MS', Monaco, 'TSCu_Comic', cursive" => 'Comic Sans MS', 
			"Georgia, Times, 'Century Schoolbook L', serif" => 'Georgia', 
			"Verdana, Geneva, 'DejaVu Sans', sans-serif" => 'Verdana', 
			"Tahoma, Geneva, Kalimati, sans-serif" => 'Tahoma', 
			"'Lucida Sans Unicode', 'Lucida Grande', Garuda, sans-serif" => 'Lucida Sans', 
			"'Times New Roman', Times, 'Nimbus Roman No9 L', serif" => 'Times New Roman', 
			"'Courier New', Courier, 'Nimbus Mono L', monospace" => 'Courier New', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Google Fonts List
if (!function_exists('cmsmasters_google_fonts_list')) {
	function cmsmasters_google_fonts_list() {
		$fonts = array( 
			'' => esc_html__('None', 'sports-club'), 
			'Roboto:300,300italic,400,400italic,500,500italic,700,700italic' => 'Roboto', 
			'Roboto+Condensed:400,400italic,700,700italic' => 'Roboto Condensed', 
			'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' => 'Open Sans', 
			'Open+Sans+Condensed:300,300italic,700' => 'Open Sans Condensed', 		
			'Droid+Sans:400,700' => 'Droid Sans', 
			'Droid+Serif:400,400italic,700,700italic' => 'Droid Serif', 
			'PT+Sans:400,400italic,700,700italic' => 'PT Sans', 
			'PT+Sans+Caption:400,700' => 'PT Sans Caption', 
			'PT+Sans+Narrow:400,700' => 'PT Sans Narrow', 
			'PT+Serif:400,400italic,700,700italic' => 'PT Serif', 
			'Ubuntu:400,400italic,700,700italic' => 'Ubuntu', 
			'Ubuntu+Condensed' => 'Ubuntu Condensed', 
			'Headland+One' => 'Headland One', 
			'Source+Sans+Pro:300,300italic,400,400italic,700,700italic' => 'Source Sans Pro', 
			'Lato:400,400italic,700,700italic' => 'Lato', 
			'Cuprum:400,400italic,700,700italic' => 'Cuprum', 
			'Oswald:300,400,700' => 'Oswald', 
			'Yanone+Kaffeesatz:300,400,700' => 'Yanone Kaffeesatz', 
			'Lobster' => 'Lobster', 
			'Lobster+Two:400,400italic,700,700italic' => 'Lobster Two', 
			'Questrial' => 'Questrial', 
			'Raleway:300,400,500,600,700' => 'Raleway', 
			'Dosis:300,400,500,700' => 'Dosis', 
			'Cutive+Mono' => 'Cutive Mono', 
			'Quicksand:300,400,700' => 'Quicksand', 
			'Titillium+Web:300,300italic,400,400italic,600,600italic,700,700italic' => 'Titillium Web', 
			'Montserrat:400,700' => 'Montserrat', 
			'Cookie' => 'Cookie', 
			'Rubik One' => 'Rubik One'
		);
		
		
		return $fonts;
	}
}



// Theme Settings Font Weights List
if (!function_exists('cmsmasters_font_weight_list')) {
	function cmsmasters_font_weight_list() {
		$list = array( 
			'normal' => 	'normal', 
			'100' => 		'100', 
			'200' => 		'200', 
			'300' => 		'300', 
			'400' => 		'400', 
			'500' => 		'500', 
			'600' => 		'600', 
			'700' => 		'700', 
			'800' => 		'800', 
			'900' => 		'900', 
			'bold' => 		'bold', 
			'bolder' => 	'bolder', 
			'lighter' => 	'lighter', 
		);
		
		
		return $list;
	}
}



// Theme Settings Font Styles List
if (!function_exists('cmsmasters_font_style_list')) {
	function cmsmasters_font_style_list() {
		$list = array( 
			'normal' => 	'normal', 
			'italic' => 	'italic', 
			'oblique' => 	'oblique', 
			'inherit' => 	'inherit', 
		);
		
		
		return $list;
	}
}



// Theme Settings Text Transforms List
if (!function_exists('cmsmasters_text_transform_list')) {
	function cmsmasters_text_transform_list() {
		$list = array( 
			'none' => 'none', 
			'uppercase' => 'uppercase', 
			'lowercase' => 'lowercase', 
			'capitalize' => 'capitalize', 
		);
		
		
		return $list;
	}
}



// Theme Settings Text Decorations List
if (!function_exists('cmsmasters_text_decoration_list')) {
	function cmsmasters_text_decoration_list() {
		$list = array( 
			'none' => 'none', 
			'underline' => 'underline', 
			'overline' => 'overline', 
			'line-through' => 'line-through', 
		);
		
		
		return $list;
	}
}



// Theme Settings Custom Color Schemes
if (!function_exists('cmsmasters_custom_color_schemes_list')) {
	function cmsmasters_custom_color_schemes_list() {
		$list = array( 
			'first' => esc_html__('Custom 1', 'sports-club'), 
			'second' => esc_html__('Custom 2', 'sports-club'), 
			'third' => esc_html__('Custom 3', 'sports-club') 
		);
		
		
		return $list;
	}
}



// WP Color Picker Palettes
if (!function_exists('cmsmasters_color_picker_palettes')) {
	function cmsmasters_color_picker_palettes() {
		$palettes = array( 
			'#ffcd02', 
			'#2b2b2b', 
			'#828282', 
			'#dcdcdc', 
			'#f4f4f4', 
			'#fcfcfc', 
			'#000000', 
			'#ffffff' 
		);
		
		
		return $palettes;
	}
}

/*** STOP EDIT THEME PARAMETERS HERE ***/



// Theme Plugin Support Constants
if (!defined('CMSMASTERS_WOOCOMMERCE') && class_exists('woocommerce')) {
	define('CMSMASTERS_WOOCOMMERCE', true);
} elseif (!defined('CMSMASTERS_WOOCOMMERCE')) {
	define('CMSMASTERS_WOOCOMMERCE', false);
}

if (!defined('CMSMASTERS_EVENTS_CALENDAR') && class_exists('Tribe__Events__Main')) {
	define('CMSMASTERS_EVENTS_CALENDAR', true);
} elseif (!defined('CMSMASTERS_EVENTS_CALENDAR')) {
	define('CMSMASTERS_EVENTS_CALENDAR', false);
}

if (!defined('CMSMASTERS_PAYPALDONATIONS') && class_exists('PayPalDonations')) {
	define('CMSMASTERS_PAYPALDONATIONS', true);
} elseif (!defined('CMSMASTERS_PAYPALDONATIONS')) {
	define('CMSMASTERS_PAYPALDONATIONS', false);
}

if (!defined('CMSMASTERS_DONATIONS') && class_exists('Cmsmasters_Donations')) {
	define('CMSMASTERS_DONATIONS', false);
} elseif (!defined('CMSMASTERS_DONATIONS')) {
	define('CMSMASTERS_DONATIONS', false);
}

if (!defined('CMSMASTERS_TIMETABLE') && function_exists('timetable_events_init')) {
	define('CMSMASTERS_TIMETABLE', false);
} elseif (!defined('CMSMASTERS_TIMETABLE')) {
	define('CMSMASTERS_TIMETABLE', false);
}

if (!defined('CMSMASTERS_TC_EVENTS') && class_exists('TC')) {
	define('CMSMASTERS_TC_EVENTS', true);
} elseif (!defined('CMSMASTERS_TC_EVENTS')) {
	define('CMSMASTERS_TC_EVENTS', false);
}


// Theme Projects Compatible
if (!defined('CMSMASTERS_PROJECT_COMPATIBLE')) {
	define('CMSMASTERS_PROJECT_COMPATIBLE', true);
}

// Theme Profiles Compatible
if (!defined('CMSMASTERS_PROFILE_COMPATIBLE')) {
	define('CMSMASTERS_PROFILE_COMPATIBLE', true);
}


// Theme Image Thumbnails Size
if (!function_exists('cmsmasters_image_thumbnail_list')) {
	function cmsmasters_image_thumbnail_list() {
		$list = array( 
			'small-thumb' => array( 
				'width' => 		55, 
				'height' => 	55, 
				'crop' => 		true 
			), 
			'square-thumb' => array( 
				'width' => 		300, 
				'height' => 	300, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Square', 'sports-club') 
			), 
			'blog-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	325, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Masonry Blog', 'sports-club') 
			), 
			'project-thumb' => array( 
				'width' => 		580, 
				'height' => 	360, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Project', 'sports-club') 
			), 
			'project-thumb-m' => array( 
				'width' => 		580, 
				'height' => 	580, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Project', 'sports-club') 
			), 
			'project-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry Project', 'sports-club') 
			), 
			'post-thumbnail' => array( 
				'width' => 		860, 
				'height' => 	406, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Featured', 'sports-club') 
			), 
			'masonry-thumb' => array( 
				'width' => 		860, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry', 'sports-club') 
			), 
			'full-thumb' => array( 
				'width' => 		1160, 
				'height' => 	535, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Full', 'sports-club') 
			), 
			'project-full-thumb' => array( 
				'width' => 		800, 
				'height' => 	470, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Project Full', 'sports-club') 
			), 
			'full-masonry-thumb' => array( 
				'width' => 		1160, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry Full', 'sports-club') 
			) 
		);
		
		
		if (CMSMASTERS_EVENTS_CALENDAR) {			
			$list['event-thumb'] = array( 
				'width' => 		580, 
				'height' => 	420, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Event', 'sports-club') 
			);
			
			$list['event-thumb-small'] = array( 
				'width' => 		580, 
				'height' => 	282, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Event', 'sports-club') 
			);
		}
		
		
		return $list;
	}
}



// Theme Settings All Color Schemes List
if (!function_exists('cmsmasters_all_color_schemes_list')) {
	function cmsmasters_all_color_schemes_list() {
		$list = array( 
			'default' => 		esc_html__('Default', 'sports-club'), 
			'header' => 		esc_html__('Header', 'sports-club'), 
			'header_top' => 	esc_html__('Header Top', 'sports-club'), 
			'header_bottom' => 	esc_html__('Header Bottom', 'sports-club'), 
			'footer' => 		esc_html__('Footer', 'sports-club') 
		);
		
		
		$out = array_merge($list, cmsmasters_custom_color_schemes_list());
		
		
		return $out;
	}
}



// Theme Settings Color Schemes List
if (!function_exists('cmsmasters_color_schemes_list')) {
	function cmsmasters_color_schemes_list() {
		$list = cmsmasters_all_color_schemes_list();
		
		
		unset($list['header']);
		
		unset($list['header_top']);
		
		unset($list['header_bottom']);
		
		
		$out = array_merge($list, cmsmasters_custom_color_schemes_list());
		
		
		return $out;
	}
}



// Theme Settings Color Schemes Default Colors
if (!function_exists('cmsmasters_color_schemes_defaults')) {
	function cmsmasters_color_schemes_defaults() {
		$list = array( 
			'default' => array( // content default color scheme
				'color' => 		'#828282', 
				'link' => 		'#2b2b2b', 
				'hover' => 		'#ffcd02', 
				'heading' => 	'#2b2b2b', 
				'bg' => 		'#f4f4f4', 
				'alternate' => 	'#ffffff', 
				'border' => 	'#c9c6c6', 
				'custom' => 	'#fcfcfc' 
			), 
			'header' => array( // Header color scheme
				'color' => 				'#2b2b2b', 
				'link' => 				'#2b2b2b', 
				'hover' => 				'#2b2b2b', 
				'subtitle' => 			'#2b2b2b', 
				'bg' => 				'#fafafa', 
				'bg_scroll' => 			'#ffffff', 
				'hover_bg' => 			'#fafafa', 
				'border' => 			'#c9c6c6', 
				'dropdown_link' => 		'#ffffff', 
				'dropdown_hover' => 	'#2b2b2b', 
				'dropdown_subtitle' => 	'#ffffff', 
				'dropdown_bg' => 		'#2b2b2b', 
				'dropdown_hover_bg' => 	'#ffcd02', 
				'dropdown_border' => 	'#c9c6c6' 
			), 
			'header_top' => array( // Header Top color scheme
				'color' => 				'#2b2b2b', 
				'link' => 				'#2b2b2b', 
				'hover' => 				'#2b2b2b', 
				'bg' => 				'#ffcd02', 
				'border' => 			'#ffffff', 
				'dropdown_link' => 		'#ffffff', 
				'dropdown_hover' => 	'#2b2b2b', 
				'dropdown_bg' => 		'#2b2b2b', 
				'dropdown_border' => 	'#2b2b2b' 
			), 
			'header_bottom' => array( // Header Bottom color scheme
				'color' => 				'#2b2b2b', 
				'link' => 				'#ffcd02', 
				'hover' => 				'#2b2b2b', 
				'subtitle' => 			'#ffcd02', 
				'bg' => 				'#2b2b2b', 
				'bg_scroll' => 			'#ffcd02', 
				'hover_bg' => 			'#ffcd02', 
				'border' => 			'#c9c6c6', 
				'dropdown_link' => 		'#ffffff', 
				'dropdown_hover' => 	'#2b2b2b', 
				'dropdown_subtitle' => 	'#ffffff', 
				'dropdown_bg' => 		'#2b2b2b', 
				'dropdown_hover_bg' => 	'#ffcd02', 
				'dropdown_border' => 	'#c9c6c6' 
			), 
			'footer' => array( // Footer color scheme
				'color' => 		'#343434', 
				'link' => 		'#767572', 
				'hover' => 		'#ffffff', 
				'heading' => 	'#767572', 
				'bg' => 		'#1b1b1b', 
				'alternate' => 	'#151515', 
				'border' => 	'#c9c6c6', 
				'custom' => 	'#c9c6c6' 
			), 
			'first' => array( // custom color scheme 1
				'color' => 		'#828282', 
				'link' => 		'#2b2b2b', 
				'hover' => 		'#ffcd02', 
				'heading' => 	'#2b2b2b', 
				'bg' => 		'#f4f4f4', 
				'alternate' => 	'#ffffff', 
				'border' => 	'#c9c6c6', 
				'custom' => 	'#fcfcfc' 
			), 
			'second' => array( // custom color scheme 2
				'color' => 		'#828282', 
				'link' => 		'#2b2b2b', 
				'hover' => 		'#ffcd02', 
				'heading' => 	'#2b2b2b', 
				'bg' => 		'#f4f4f4', 
				'alternate' => 	'#ffffff', 
				'border' => 	'#c9c6c6', 
				'custom' => 	'#fcfcfc' 
			), 
			'third' => array( // custom color scheme 3
				'color' => 		'#828282', 
				'link' => 		'#2b2b2b', 
				'hover' => 		'#ffcd02', 
				'heading' => 	'#2b2b2b', 
				'bg' => 		'#f4f4f4', 
				'alternate' => 	'#ffffff', 
				'border' => 	'#c9c6c6', 
				'custom' => 	'#fcfcfc' 
			) 
		);
		
		
		return $list;
	}
}



// CMSMasters Framework Directories Constants
if (!defined('CMSMASTERS_FRAMEWORK')) {
	define('CMSMASTERS_FRAMEWORK', get_template_directory() . '/framework');
}

if (!defined('CMSMASTERS_ADMIN')) {
	define('CMSMASTERS_ADMIN', CMSMASTERS_FRAMEWORK . '/admin');
}

if (!defined('CMSMASTERS_SETTINGS')) {
	define('CMSMASTERS_SETTINGS', CMSMASTERS_ADMIN . '/settings');
}

if (!defined('CMSMASTERS_OPTIONS')) {
	define('CMSMASTERS_OPTIONS', CMSMASTERS_ADMIN . '/options');
}

if (!defined('CMSMASTERS_ADMIN_INC')) {
	define('CMSMASTERS_ADMIN_INC', CMSMASTERS_ADMIN . '/inc');
}

if (!defined('CMSMASTERS_CLASS')) {
	define('CMSMASTERS_CLASS', CMSMASTERS_FRAMEWORK . '/class');
}

if (!defined('CMSMASTERS_FUNCTION')) {
	define('CMSMASTERS_FUNCTION', CMSMASTERS_FRAMEWORK . '/function');
}


if (!defined('CMSMASTERS_COMPOSER')) {
	define('CMSMASTERS_COMPOSER', get_template_directory() . '/cmsmasters-c-c');
}



// Load Framework Parts
require_once(CMSMASTERS_SETTINGS . '/cmsmasters-theme-settings.php');

require_once(CMSMASTERS_OPTIONS . '/cmsmasters-theme-options.php');

require_once(CMSMASTERS_ADMIN_INC . '/admin-scripts.php');

require_once(CMSMASTERS_ADMIN_INC . '/plugin-activator.php');

require_once(CMSMASTERS_CLASS . '/likes-posttype.php');

require_once(CMSMASTERS_CLASS . '/twitteroauth.php');

require_once(CMSMASTERS_CLASS . '/widgets.php');

require_once(CMSMASTERS_FUNCTION . '/breadcrumbs.php');

require_once(CMSMASTERS_FUNCTION . '/likes.php');

require_once(CMSMASTERS_FUNCTION . '/pagination.php');

require_once(CMSMASTERS_FUNCTION . '/single-comment.php');

require_once(CMSMASTERS_FUNCTION . '/theme-functions.php');

require_once(CMSMASTERS_FUNCTION . '/theme-fonts.php');

require_once(CMSMASTERS_FUNCTION . '/theme-colors-primary.php');

require_once(CMSMASTERS_FUNCTION . '/theme-colors-secondary.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-post.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-project.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-profile.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-shortcodes.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-widgets.php');


if (class_exists('Cmsmasters_Content_Composer')) {
	require_once(CMSMASTERS_COMPOSER . '/filters/cmsmasters-c-c-atts-filters.php');
	
	require_once(CMSMASTERS_COMPOSER . '/shortcodes/theme-shortcodes.php');
}


// Woocommerce functions
if (CMSMASTERS_WOOCOMMERCE) {
	require_once(get_template_directory() . '/woocommerce/cmsmasters-woo-functions.php');
}

// Events functions
if (CMSMASTERS_EVENTS_CALENDAR) {
	require_once(get_template_directory() . '/tribe-events/cmsmasters-events-functions.php');
}

// TC Events functions
if (CMSMASTERS_TC_EVENTS) {
	require_once(get_template_directory() . '/cmsmasters-tc-events/cmsmasters-tc-events-functions.php');
}



// Load Theme Local File
if (!function_exists('cmsmasters_load_theme_textdomain')) {
	function cmsmasters_load_theme_textdomain() {
		load_theme_textdomain('sports-club', CMSMASTERS_FRAMEWORK . '/languages');
	}
}

// Load Theme Local File Action
if (!has_action('after_setup_theme', 'cmsmasters_load_theme_textdomain')) {
	add_action('after_setup_theme', 'cmsmasters_load_theme_textdomain');
}



// Framework Activation & Data Import
if (!function_exists('cmsmasters_theme_activation')) {
	function cmsmasters_theme_activation() {
		if (get_option('cmsmasters_active_theme') != CMSMASTERS_SHORTNAME) {
			add_option('cmsmasters_active_theme', CMSMASTERS_SHORTNAME, '', 'yes');
			
			
			cmsmasters_add_global_options();
			
			
			cmsmasters_regenerate_styles();
			
			
			cmsmasters_add_global_icons();


			wp_redirect(esc_url(admin_url('admin.php?page=cmsmasters-settings&upgraded=true')));
		}
	}
}

add_action('after_switch_theme', 'cmsmasters_theme_activation');

// Framework Deactivation
if (!function_exists('cmsmasters_theme_deactivation')) {
	function cmsmasters_theme_deactivation() {
		delete_option('cmsmasters_active_theme');
	}
}

// Framework Deactivation Action
if (!has_action('switch_theme', 'cmsmasters_theme_deactivation')) {
	add_action('switch_theme', 'cmsmasters_theme_deactivation');
}

// Theme Settings Single Posts Default Values
if (!function_exists('cmsmasters_theme_settings_single_defaults')) {

function cmsmasters_theme_settings_single_defaults() {
	$settings = array( 
		'post' => array( 
			CMSMASTERS_SHORTNAME . '_blog_post_layout' => 		'r_sidebar', 
			CMSMASTERS_SHORTNAME . '_blog_post_title' => 		1, 
			CMSMASTERS_SHORTNAME . '_blog_post_date' => 			1, 
			CMSMASTERS_SHORTNAME . '_blog_post_cat' => 			1, 
			CMSMASTERS_SHORTNAME . '_blog_post_author' => 		1, 
			CMSMASTERS_SHORTNAME . '_blog_post_comment' => 		1, 
			CMSMASTERS_SHORTNAME . '_blog_post_tag' => 			1, 
			CMSMASTERS_SHORTNAME . '_blog_post_like' => 			1, 
			CMSMASTERS_SHORTNAME . '_blog_post_nav_box' => 		1, 
			CMSMASTERS_SHORTNAME . '_blog_post_share_box' => 	1, 
			CMSMASTERS_SHORTNAME . '_blog_post_author_box' => 	1, 
			CMSMASTERS_SHORTNAME . '_blog_more_posts_box' => 	'related', 
			CMSMASTERS_SHORTNAME . '_blog_more_posts_count' => 	'3', 
			CMSMASTERS_SHORTNAME . '_blog_more_posts_pause' => 	'0' 
		), 
		'project' => array( 
			CMSMASTERS_SHORTNAME . '_portfolio_project_title' => 			1, 
			CMSMASTERS_SHORTNAME . '_portfolio_project_details_title' => 	esc_html__('Project details', 'sports-club'), 
			CMSMASTERS_SHORTNAME . '_portfolio_project_date' => 				1, 
			CMSMASTERS_SHORTNAME . '_portfolio_project_cat' => 				1, 
			CMSMASTERS_SHORTNAME . '_portfolio_project_author' => 			1, 
			CMSMASTERS_SHORTNAME . '_portfolio_project_comment' => 			0, 
			CMSMASTERS_SHORTNAME . '_portfolio_project_tag' => 				0, 
			CMSMASTERS_SHORTNAME . '_portfolio_project_like' => 				1, 
			CMSMASTERS_SHORTNAME . '_portfolio_project_link' => 				0, 
			CMSMASTERS_SHORTNAME . '_portfolio_project_share_box' => 		1, 
			CMSMASTERS_SHORTNAME . '_portfolio_project_nav_box' => 			1, 
			CMSMASTERS_SHORTNAME . '_portfolio_project_author_box' => 		1, 
			CMSMASTERS_SHORTNAME . '_portfolio_more_projects_box' => 		'related', 
			CMSMASTERS_SHORTNAME . '_portfolio_more_projects_count' => 		'3', 
			CMSMASTERS_SHORTNAME . '_portfolio_more_projects_pause' => 		'0', 
			CMSMASTERS_SHORTNAME . '_portfolio_project_slug' => 				'project' 
		), 
		'profile' => array( 
			CMSMASTERS_SHORTNAME . '_profile_post_title' => 			1, 
			CMSMASTERS_SHORTNAME . '_profile_post_details_title' => 	esc_html__('Profile details', 'sports-club'), 
			CMSMASTERS_SHORTNAME . '_profile_post_cat' => 			1, 
			CMSMASTERS_SHORTNAME . '_profile_post_comment' => 		1, 
			CMSMASTERS_SHORTNAME . '_profile_post_like' => 			1, 
			CMSMASTERS_SHORTNAME . '_profile_post_nav_box' => 		1, 
			CMSMASTERS_SHORTNAME . '_profile_post_share_box' => 		1, 
			CMSMASTERS_SHORTNAME . '_profile_post_slug' => 			'profile' 
		) 
	);
	
	
	return $settings;
}

}

// start added by adam
function wpcodex_add_author_support_for_profiles() {
	add_post_type_support( 'profile', 'author' );
}
add_action( 'init', 'wpcodex_add_author_support_for_profiles' );
// end added by adam 