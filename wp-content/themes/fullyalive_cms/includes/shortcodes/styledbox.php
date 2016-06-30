<?php
	/* Styled Box Shortcode */
	add_shortcode('styled_box', 'bf_styled_box');
	
	/* -----------------------------------------------------------------
		Styled Box
	----------------------------------------------------------------- */
	function bf_styled_box($atts, $content = null) {
	
		extract(shortcode_atts(array(
			'title' => '',
			'color' => '',
			'icon' => ''
			
		), $atts));
		
		$content = bf_remove_autop($content);
		
		$output = '<div class="styled-box '.$icon . ' ' . $color.'"><strong>' . $title . ': </strong>' . $content . '</div>';
		
		return do_shortcode($output);
		
	}
	
?>