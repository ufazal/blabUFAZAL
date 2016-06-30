<?php
	/* Highlight Shortcode */
	add_shortcode( 'highlight', 'bf_highlight' );
	
	/* -----------------------------------------------------------------
		Highlight
	----------------------------------------------------------------- */
	function bf_highlight($atts, $content = null) {
		extract(shortcode_atts(array(
					"color" => ''
		), $atts));
		$content =bf_remove_autop($content);
		if($color=="" || $color=="grey"){
			$output = '<span class="highlight1">'.$content.'</span>';
		}
		if($color=="black"){
			$output = '<span class="highlight2">'.$content.'</span>';
		}	
		return do_shortcode($output);
	}
?>