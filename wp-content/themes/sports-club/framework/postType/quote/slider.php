<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.0
 * 
 * Quotes Boxed Slider Format Template
 * Created by CMSMasters
 * 
 */


global $quote_content,
	$quote_image,
	$quote_name,
	$quote_subtitle,
	$quote_link,
	$quote_website;

?>

<!--_________________________ Start Quotes Boxed Slider Article _________________________ -->

<article class="cmsmasters_quote_inner">
<?php
	echo cmsmasters_divpdel('<div class="quote_content">' . "\n" . 
		do_shortcode(wpautop($quote_content)) . 
	'</div>' . "\n");
	
	
	echo '<div class="quote_info_wrap">';
	
		if ($quote_image != '') {
			echo '<figure class="quote_image">' . "\n" . 
				wp_get_attachment_image($quote_image, 'thumbnail') . 
			'</figure>' . "\n";
		}
?>
		<div class="wrap_quote_title">
		<?php
			if ($quote_name != '') {
				echo '<h6 class="quote_title">' . esc_html($quote_name) . '</h6>' . "\n";
			}
			
			
			if ($quote_subtitle != '') {
				echo '<span class="quote_subtitle">' . esc_html($quote_subtitle) . '</span>' . "\n";
			}
			
			
			if ($quote_subtitle != '' && ($quote_link != '' || $quote_website != '')) {
				echo ' - ';
			}
			
			
			if ($quote_link != '' && $quote_website != '') {
				echo '<a class="quote_link" target="_blank" href="' . esc_url($quote_link) . '">' . esc_html($quote_website) . '</a>' . "\n";
			} elseif ($quote_link == '' && $quote_website != '') {
				echo '<span class="quote_site">' . esc_html($quote_website) . '</span>' . "\n";
			} elseif ($quote_link != '' && $quote_website == '') {
				echo '<a class="quote_link" target="_blank" href="' . esc_url($quote_link) . '">' . esc_html($quote_link) . '</a>' . "\n";
			}
		?>
		</div>
	</div>
</article>
<!--_________________________ Finish Quotes Boxed Slider Article _________________________ -->

