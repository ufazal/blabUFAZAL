<?php
	/* Shortcode */
	add_shortcode('separator', 'bf_separator');
	add_shortcode('clear', 'bf_clearfloat');
	
	/* -----------------------------------------------------------------
		Separator
	----------------------------------------------------------------- */
	function bf_separator($atts, $content = null) {
		extract(shortcode_atts(array(
					"line" => ''
		), $atts));
		$content =bf_remove_autop($content);
		if($line==""){
		$output = '<div class="separator"></div>';
		}else{
		$output = '<div class="separator line"></div>';
		}
		
		return do_shortcode($output);
		
	}
	
	/* -----------------------------------------------------------------
		Clear
	----------------------------------------------------------------- */
	function bf_clearfloat($atts, $content = null) {
		$content =bf_remove_autop($content);
		$output = '<div class="clear">&nbsp;</div>';
		return do_shortcode($output);
		
	}

?>