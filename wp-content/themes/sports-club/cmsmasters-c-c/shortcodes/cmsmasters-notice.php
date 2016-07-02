<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version 	1.0.0
 * 
 * Content Composer Notice Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$unique_id = uniqid();
	
	
	$out = '';
	
	
	if ($type == 'cmsmasters_notice_custom') {
		$out .= '<style type="text/css"> ' . "\n" . 
			'#cmsmasters_notice_' . $unique_id . ' { ' . 
				"\n\t" . cmsmasters_color_css('background-color', $bg_color) . 
				"\n\t" . cmsmasters_color_css('border-color', $bd_color) . 
				"\n\t" . cmsmasters_color_css('color', $color) . 
			"\n" . '} ' . "\n" . 
			'.cmsmasters_notice:before {' . "\n" . 
				"\n\t" . cmsmasters_color_css('color', $bd_color) . 
			"\n" . '}' . "\n" . 
		'</style>';
	}
	
	
    $out .= '<div id="cmsmasters_notice_' . $unique_id . '" class="cmsmasters_notice ' . $type . 
	(($icon != '') ? ' ' . $icon : '') . 
	(($classes != '') ? ' ' . $classes : '') . 
	'"' . 
	(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
	(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
	'>' . "\n" . 
		(($close != '') ? '<a href="#" class="notice_close"></a>' : '') . 
		'<div class="notice_icon"></div>' . "\n" . 
		cmsmasters_divpdel('<div class="notice_content">' . "\n" . 
			do_shortcode(wpautop($content)) . 
		'</div>' . "\n") . 
	'</div>' . "\n";