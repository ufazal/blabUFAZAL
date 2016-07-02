<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version 	1.0.0
 * 
 * Website TC Events Functions
 * Created by CMSMasters
 * 
 */


/* Get TC Events Heading Function */
function cmsmasters_tc_event_heading($cmsmasters_id, $tag = 'h1', $link = true, $show = true) { 
	$out = '<header class="cmsmasters_tc_event_header entry-header">' . 
		'<' . esc_html($tag) . ' class="cmsmasters_tc_event_title entry-title">' . 
			($link ? '<a href="' . esc_url(get_permalink()) . '">' : '') . 
				cmsmasters_title($cmsmasters_id, false) . 
			($link ? '</a>' : '') . 
		'</' . esc_html($tag) . '>' . 
	'</header>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get TC Events Category Function */
function cmsmasters_tc_event_category($cmsmasters_id, $taxonomy, $show = true) {
	if (get_the_terms($cmsmasters_id, $taxonomy)) {
		$out = '<div class="cmsmasters_tc_event_category">' . 
			get_the_term_list($cmsmasters_id, $taxonomy, '', '', '') . 
		'</div>';
		
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}



/* Get TC Events Date Function */
function cmsmasters_tc_event_date($show = true) {
	$tc_general_settings = get_option('tc_general_setting', false);
	
	$out = '';
	
	
	$tc_attach_event_date_to_title = isset($tc_general_settings['tc_attach_event_date_to_title']) && !empty($tc_general_settings['tc_attach_event_date_to_title']) ? $tc_general_settings[ 'tc_attach_event_date_to_title'] : 'yes';
	
	if ($tc_attach_event_date_to_title == 'yes') {
		$out .= '<span class="cmsmasters_tc_event_date cmsmasters_theme_icon_tc_time">' . do_shortcode('[tc_event_date]') . '</span>';
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get TC Events Location Function */
function cmsmasters_tc_event_location($show = true) {
	$tc_general_settings = get_option('tc_general_setting', false);
	
	$out = '';
	
	
	$tc_attach_event_location_to_title = isset($tc_general_settings['tc_attach_event_location_to_title']) && !empty($tc_general_settings['tc_attach_event_location_to_title']) ? $tc_general_settings['tc_attach_event_location_to_title'] : 'yes';
	
	$event_location = do_shortcode('[tc_event_location]');
	
	if ($tc_attach_event_location_to_title == 'yes' && !empty($event_location)) {
		$out .= '<span class="cmsmasters_tc_event_location cmsmasters_theme_icon_tc_location">' . $event_location . '</span>';
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get TC Events Tickets Function */
function cmsmasters_tc_event_ticket($cmsmasters_id, $template_type = 'page', $show = true) {
	$show_tickets_automatically = get_post_meta($cmsmasters_id, 'show_tickets_automatically', true);
	
	$out = '';
	
	
	if (!isset($show_tickets_automatically)) {
		$show_tickets_automatically = false;
	}

	if ($template_type == 'page' && $show_tickets_automatically) {
		$out .= '<div class="cmsmasters_tc_event_ticket">' . 
			do_shortcode(apply_filters('tc_event_shortcode', '[tc_event quantity="true"]', $cmsmasters_id)) . 
		'</div>';
	} else {
		$out .= '<div class="cmsmasters_tc_event_ticket">' . 
			do_shortcode(apply_filters('tc_event_shortcode', '[tc_event quantity="true"]', $cmsmasters_id)) . 
		'</div>';
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get TC Events Content/Excerpt Function */
function cmsmasters_tc_event_content($template_type = 'page', $show = true) {
	$out = '';
	
	if ($template_type == 'page') {
		$out .= '<div class="cmsmasters_tc_event_content entry-content">' . 
			'<p>' . wp_trim_words(get_the_content(), 55, '...') . '</p>' . 
		'</div>';
	} else {
		$out .= '<div class="cmsmasters_tc_event_content entry-content">' . 
			wpautop(get_the_content()) . 
		'</div>';
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}

