<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.0
 * 
 * Content Composer Theme Shortcodes
 * Created by CMSMasters
 * 
 */


$cmsmasters_add = 'add_';

$cmsmasters_add_shcd = $cmsmasters_add . 'shortcode';

/**
 * Roll Titles
 */
function cmsmasters_roll_titles($atts, $content = null) { 
    $new_atts = apply_filters('cmsmasters_roll_titles_atts_filter', array( 
		'rollscinfo' => 			'', 
		'navigation' => 			'', 
		'orderby' => 				'', 
		'order' => 					'', 
		'post_categories' => 		'', 
		'count' => 					'', 
		'pause' => 					'', 
		'speed' => 					'', 
		'animation' => 				'', 
		'animation_delay' => 		'', 
		'classes' => 				'' 
    ) );
	
	
	$shortcode_name = 'roll-titles';
	
	$shortcode_path = CMSMASTERS_CONTENT_COMPOSER_TEMPLATE_DIR . '/cmsmasters-' . $shortcode_name . '.php';
	
	
	if (locate_template($shortcode_path)) {
		$template_out = cmsmasters_composer_load_template($shortcode_path, array( 
			'atts' => 		$atts, 
			'new_atts' => 	$new_atts, 
			'content' => 	$content 
		) );
		
		
		return $template_out;
	}
	
	
	extract(shortcode_atts($new_atts, $atts));
	
	
	$unique_id = uniqid();	
	
    $args = array( 
		'rollscinfo' => 			$rollscinfo, 
		'navigation' => 			$navigation, 
		'orderby' => 				$orderby, 
		'order' => 					$order, 
		'posts_per_page' => 		$count, 
		'ignore_sticky_posts' => 	true, 
		'category_name' => 			$post_categories 
	);

	
	$query = new WP_Query($args);
	
	
	$amount_count = 0;
	
	$amount = 1;
	
	$pause = ($pause == '' ? 0 : $pause);
	
	
	$out = "";
	
	
	if ($query->have_posts()) : 
		$out .= "<div class='cmsmasters_roll_titles_wrap clear'>" . "\n";
			if ($rollscinfo != '') {
				$out .= "<div class='cmsmasters_roll_titles_info'>" . "\n" . 
					"<h4 class='cmsmasters_roll_titles_info_title'>". $rollscinfo ."</h4>" . "\n" . 
				"</div>" . "\n";
			}
			
			$out .= "<div class=\"cmsmasters_roll_titles_slider_wrap\">" . "\n" . 
				"<div class=\"cmsmasters_roll_titles_slider" . 
					(($classes != '') ? ' ' . $classes : '') . 
				"\" " . 
					(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
					(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
				">
					<script type=\"text/javascript\">
						jQuery(document).ready(function () { 					
							jQuery('.cmsmasters_slider_{$unique_id}').owlCarousel( {
								singleItem : true,  
								items : 1, 
								itemsDesktop : 1, 
								autoPlay: true, 
								rewindNav: true,  
								touchDrag : false, 
								mouseDrag : false, 
								transitionStyle : false, 
								slideSpeed : 1000, 
								paginationSpeed : 800, 
								rewindSpeed : 1000, 
								stopOnHover : false, 
								autoHeight : true, 
								addClassActive : true, 
								pagination : false, " . 
								(($navigation == '1') ? 'navigation : true, ' : 'navigation : false, ') . 
								"navigationText : [ " . 
									'"<span class=\"cmsmasters_prev_arrow\"><span></span></span>", ' . 
									'"<span class=\"cmsmasters_next_arrow\"><span></span></span>" ' . 
								"] 
							} );
						} );
					</script>
					<div id=\"cmsmasters_owl_carousel_{$unique_id}\" class=\"" . 
						'cmsmasters_owl_slider ' . 
						'cmsmasters_slider_' . $unique_id . '">';
						
						
					$out .= '<div>';
							
							while ($query->have_posts()) : $query->the_post();
								
								if ($amount_count == $amount) {
									$out .= '</div><div>';
									
									$amount_count = 0;
								}
								
								$out .= load_template_part('framework/postType/roll-titles/standard');
								
								
								$amount_count ++;
								
							endwhile;
					
						$out .= '</div>';				
						
					$out .= '</div>' . 
				'</div>' . 
			'</div>' .
		'</div>';
	
	endif;
	
	
	wp_reset_postdata();
	
	
	return $out;
}

$cmsmasters_add_shcd('cmsmasters_roll_titles', 'cmsmasters_roll_titles');



/**
 * TC Event Tickets
 */
function cmsmasters_tc_event_tickets($atts, $content = null) { 
    $new_atts = apply_filters('cmsmasters_tc_event_tickets_atts_filter', array( 
		'event' => 				'', 
		'link' => 				'', 
		'type' => 				'', 
		'price' => 				'', 
		'cart' => 				'', 
		'quantity' => 			'', 
		'soldout' => 			'', 
		'show_quantity' => 		'', 
		'link_type' => 			'', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
    ) );
	
	
	$shortcode_name = 'tc-event-tickets';
	
	$shortcode_path = CMSMASTERS_CONTENT_COMPOSER_TEMPLATE_DIR . '/cmsmasters-' . $shortcode_name . '.php';
	
	
	if (locate_template($shortcode_path)) {
		$template_out = cmsmasters_composer_load_template($shortcode_path, array( 
			'atts' => 		$atts, 
			'new_atts' => 	$new_atts, 
			'content' => 	$content 
		) );
		
		
		return $template_out;
	}
	
	
	extract(shortcode_atts($new_atts, $atts));
	
	
	$unique_id = uniqid();
	
	
	$out = '<div id="cmsmasters_tc_event_tickets_' . $unique_id . '" class="cmsmasters_tc_event_tickets' . 
		(($classes != '') ? ' ' . $classes : '') . 
		'"' . 
		(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
		(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
	'>' . "\n";
	
	
	$out .= do_shortcode(
		'[tc_event' . 
			' id="' . $event . '"' . 
			' title="' . $link . '"' . 
			' ticket_type_title="' . $type . '"' . 
			' price_title="' . $price . '"' . 
			' cart_title="' . $cart . '"' . 
			($show_quantity == 'true' ? ' quantity_title="' . $quantity . '"' : '') . 
			' soldout_message="' . $soldout . '"' . 
			($show_quantity == 'true' ? ' quantity="' . $show_quantity . '"' : '') . 
			' type="' . $link_type . '"' . 
		']'
	);
	
	
	$out .= '</div>';
	
	
	return $out;
}

$cmsmasters_add_shcd('cmsmasters_tc_event_tickets', 'cmsmasters_tc_event_tickets');

