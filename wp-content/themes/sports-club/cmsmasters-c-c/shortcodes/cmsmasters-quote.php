<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version 	1.0.0
 * 
 * Content Composer Single Quote Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));

global $quote_mode,
	$quote_counter,
	$column_count,
	$quote_content,
	$quote_image,
	$quote_name,
	$quote_subtitle,
	$quote_link,
	$quote_website;


$quote_counter++;


if ($content == null || $content == "<br />\n") {
	$quote_content = esc_html__('Enter quote text here', 'sports-club');
} else {
	$quote_content = $content;
}

$quote_image = 		$image;
$quote_name = 		$name;
$quote_subtitle = 	$subtitle;
$quote_link = 		$link;
$quote_website = 	$website;


$quote_out = '<div class="cmsmasters_quote' . 
	(($classes != '') ? ' ' . $classes : '') . 
'">' . "\n" . 

	load_template_part('framework/postType/quote/' . $quote_mode) . 
	
'</div>' . "\n";


if ($quote_mode == 'grid' && (($quote_counter % $column_count) == 0)) {
	$quote_out .= '</div><div class="quotes_list">' . "\n";
}
	

$out = $quote_out;

return $out;