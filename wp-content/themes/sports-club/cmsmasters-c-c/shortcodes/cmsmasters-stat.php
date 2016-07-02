<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version 	1.0.0
 * 
 * Content Composer Single Progress Bar Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$unique_id = uniqid();
	
	
global $style_stats, 
	$stats_mode, 
	$stats_type, 
	$stats_count;


if ($stats_mode == 'bars') {
	$style_stats .= "\n" . '.cmsmasters_stats.shortcode_animated #cmsmasters_stat_' . $unique_id . '.cmsmasters_stat { ' . 
		"\n\t" . (($stats_type == 'horizontal') ? 'width' : 'height') . ':' . $progress . '%; ' . 
	"\n" . '} ' . "\n\n" . 
	'#cmsmasters_stat_' . $unique_id . ' .cmsmasters_stat_inner { ' . 
		(($color != '') ? "\n\t" . cmsmasters_color_css('background-color', $color) : '') . 
	"\n" . '} ' . "\n";
}


$out = '<div class="cmsmasters_stat_wrap' . (($stats_mode == 'circles' || ($stats_mode == 'bars' && $stats_type == 'vertical')) ? $stats_count : '') . '">' . "\n" . 
	(($stats_mode == 'bars' && $stats_type == 'vertical') ? '<div class="cmsmasters_stat_container">' . "\n" : '') . 
		'<div id="cmsmasters_stat_' . $unique_id . '" class="cmsmasters_stat' . 
		(($classes != '') ? ' ' . $classes : '') . 
		(($content == '' && $icon == '') ? ' stat_only_number' : '') . 
		(($content != '' && $icon != '') ? ' stat_has_titleicon' : '') . '"' . 
		' data-percent="' . $progress . '"' . 
		(($stats_mode == 'circles' && $color != '') ? ' data-bar-color="' . $color . '"' : '') . 
		'>' . "\n" . 
			'<div class="cmsmasters_stat_inner' . 
			(($icon != '') ? ' ' . $icon : '') . 
			'">' . "\n" . 
				(($content != '' && $stats_mode == 'bars' && $stats_type == 'horizontal') ? '<span class="cmsmasters_stat_title">' . $content . '</span>' . "\n" : '') . 
				'<span class="cmsmasters_stat_counter_wrap">' . "\n" . 
					'<span class="cmsmasters_stat_counter">' . (($stats_mode == 'bars') ? $progress : '0') . '</span>' . 
					(($stats_mode == 'circles') ? '<span class="cmsmasters_stat_units_text">PERCENT</span>' : '<span class="cmsmasters_stat_units">%</span>') . "\n" . 
				'</span>' . "\n" . 
			'</div>' . "\n" . 
		'</div>' . "\n" . 
	(($stats_mode == 'bars' && $stats_type == 'vertical') ? '</div>' . "\n" : '') . 
	(($content != '' && $stats_mode == 'bars' && $stats_type == 'vertical') ? '<span class="cmsmasters_stat_title">' . $content . '</span>' . "\n" : '') . 
	(($content != '' && $stats_mode == 'circles') ? '<span class="cmsmasters_stat_title">' . $content . '</span>' . "\n" : '') . 
	(($subtitle != '') ? '<span class="cmsmasters_stat_subtitle">' . $subtitle . '</span>' . "\n" : '') . 
'</div>';