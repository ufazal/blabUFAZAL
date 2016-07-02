<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version 	1.0.0
 * 
 * Content Composer Attributes Filters
 * Created by CMSMasters
 * 
 */

/* // Sc Name Shortcode Attributes Filter
add_filter('sc_name_atts_filter', 'sc_name_atts');

function sc_name_atts() { // copy default atts from shortcodes.php in plugin folder, paste here and add custom atts
	return array( 
		'attr_name_1' => 				'attr_std_val_1', 
		'attr_name_2' => 				'attr_std_val_2', 
		'attr_name_3' => 				'attr_std_val_3', 
		...
		'custom_attr_name_1' => 		'custom_attr_val_1', 
		'custom_attr_name_2' => 		'custom_attr_val_2', 
		'custom_attr_name_3' => 		'custom_attr_val_3' 
	);
} */


/* Register Admin Panel JS Scripts */
function register_admin_js_scripts() {
	global $pagenow;


	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('composer-shortcodes-extend', get_template_directory_uri() . '/cmsmasters-c-c/js/cmsmasters-c-c-shortcodes-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('composer-shortcodes-extend', 'composer_shortcodes_extend', array( 
			'blog_field_layout_mode_puzzle' => 				esc_attr__('Puzzle', 'sports-club'), 
			'quotes_field_slider_type_title' => 			esc_attr__('Slider Type', 'sports-club'), 
			'quotes_field_slider_type_descr' => 			esc_attr__('Choose your quotes slider style type', 'sports-club'), 
			'quotes_field_type_choice_box' => 				esc_attr__('Boxed', 'sports-club'), 
			'quotes_field_type_choice_center' => 			esc_attr__('Centered', 'sports-club'), 
			'roll_titles_title' => 							esc_attr__('Roll Titles', 'sports-club'), 
			'roll_titles_field_sc_info_title' => 			esc_attr__('Roll Titles Text', 'sports-club'), 
			'roll_titles_field_sc_info_descr' => 			esc_attr__('Displays text from the left side shortcode', 'sports-club'), 
			'roll_titles_field_navigation_title' => 			esc_attr__('Navigation', 'sports-club'), 
			'roll_titles_field_navigation_descr' => 			esc_attr__('Display navigation buttons or not', 'sports-club'), 
			'roll_titles_field_orderby_descr' => 			esc_attr__('Order posts by one of the given parameters', 'sports-club'),  
			'roll_titles_field_postscateg_title' => 		esc_attr__('Posts Categories', 'sports-club'), 
			'roll_titles_field_postscateg_descr' => 		esc_attr__('Show blog posts associated with certain categories.', 'sports-club'), 
			'roll_titles_field_postscateg_descr_note' => 	esc_attr__("If you don't choose any post categories, all your posts will be shown", 'sports-club'), 
			'roll_titles_field_postsnumber_title' => 		esc_attr__("Posts Number per Page", 'sports-club'), 
			'roll_titles_field_postsnumber_descr_note' => 	esc_attr__("number, if empty - show all posts", 'sports-club'), 
			'roll_titles_field_pausetime_descr' => 			esc_attr__("Enter your posts slider pause time", 'sports-club'), 
			
			/* Start TC Events Translations */
				'tc_event_tickets_title' => 					esc_attr('Event Tickets', 'sports-club'), 
				'tc_event_tickets_field_event_title' => 		esc_attr('Event', 'sports-club'), 
				'tc_event_tickets_field_link_title' => 			esc_attr('Link Title', 'sports-club'), 
				'tc_event_tickets_field_link_def' => 			esc_attr('Add to Cart', 'sports-club'), 
				'tc_event_tickets_field_type_title' => 			esc_attr('Ticket Type Column Title', 'sports-club'), 
				'tc_event_tickets_field_type_def' => 			esc_attr('Ticket Type', 'sports-club'), 
				'tc_event_tickets_field_price_title' => 		esc_attr('Price Column Title', 'sports-club'), 
				'tc_event_tickets_field_price_def' => 			esc_attr('Price', 'sports-club'), 
				'tc_event_tickets_field_cart_title' => 			esc_attr('Cart Column Title', 'sports-club'), 
				'tc_event_tickets_field_cart_def' => 			esc_attr('Cart', 'sports-club'), 
				'tc_event_tickets_field_quantity_title' => 		esc_attr('Quantity Column Title', 'sports-club'), 
				'tc_event_tickets_field_quantity_def' => 		esc_attr('Qty.', 'sports-club'), 
				'tc_event_tickets_field_soldout_title' => 		esc_attr('Soldout Message', 'sports-club'), 
				'tc_event_tickets_field_soldout_def' => 		esc_attr('Tickets are sold out.', 'sports-club'), 
				'tc_event_tickets_field_show_quantity_title' => esc_attr('Show Quantity Selector', 'sports-club'), 
				'tc_event_tickets_field_show_quantity_no' => 	esc_attr('No', 'sports-club'), 
				'tc_event_tickets_field_show_quantity_yes' => 	esc_attr('Yes', 'sports-club'), 
				'tc_event_tickets_field_link_type_title' => 	esc_attr('Link Type', 'sports-club'), 
				'tc_event_tickets_field_link_type_descr' => 	esc_attr('If Buy Now is selected, after clicking on the link, user will be redirected automatically to the cart page.', 'sports-club'), 
				'tc_event_tickets_field_link_type_cart' => 		esc_attr('Cart', 'sports-club'), 
				'tc_event_tickets_field_link_type_buynow' => 	esc_attr('Buy Now', 'sports-club') 
			/* Finish TC Events Translations */
		));
	}
}

add_action('admin_enqueue_scripts', 'register_admin_js_scripts');



function cmsmasters_composer_theme_shortcodes_init() {
	global $pagenow;
	
	if ( 
		is_admin() && 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		cmsmasters_composer_tc();
		
		if (CMSMASTERS_TC_EVENTS) {
			cmsmasters_composer_tc_events();
		}
	}
}

add_action('admin_footer', 'cmsmasters_composer_theme_shortcodes_init');


function cmsmasters_composer_tc() {
	$out = "\n" . '<script type="text/javascript"> ' . "\n" . 
	'/* <![CDATA[ */' . "\n\t" . 
		'function cmsmasters_composer_tc() { ' . "\n\t\t";
	
	
	if (CMSMASTERS_TC_EVENTS) {
		$out .= "return 'true'; \n";
	} else {
		$out .= "return 'false'; \n";
	}
	
	
	$out .= '} ' . "\n" . 
		'cmsmasters_composer_tc();' . "\n" . 
	'/* ]]> */' . "\n" . 
	'</script>' . "\n\n";
	
	
	echo $out;
}


function cmsmasters_composer_tc_events() {
	$cmsmasters_events_search = new TC_Events_Search('', '', -1);
	
	$cmsmasters_events = $cmsmasters_events_search->get_results();
	
	
	$out = "\n" . '<script type="text/javascript"> ' . "\n" . 
	'/* <![CDATA[ */' . "\n\t" . 
		'function cmsmasters_composer_tc_events() { ' . "\n\t\t" . 
			'return { ' . "\n";
	
	
	if (!empty($cmsmasters_events)) {
		foreach ($cmsmasters_events as $event) {
			$event = new TC_Event($event->ID);
			
			$out .= "\t\t\t\"" . esc_attr($event->details->ID) . "\" : \"" . esc_html($event->details->post_title) . "\", \n";
		}
		
		
		$out = substr($out, 0, -3);
	}
	
	
	$out .= "\n\t\t" . '}; ' . "\n\t" . 
		'} ' . "\n" . 
	'/* ]]> */' . "\n" . 
	'</script>' . "\n\n";
	
	
	echo $out;
}

