<?php
	/* Pullquote &amp; Blockquote */
	add_shortcode( 'pullquote', 'bf_pullquote' );
	add_shortcode( 'blockquote', 'ts_blockquote' );
	
	/* -----------------------------------------------------------------
		Pullquote
	----------------------------------------------------------------- */
	function bf_pullquote($atts, $content = null) {
		extract(shortcode_atts(array(
					"position" => 'left'
		), $atts));
		
		$content =bf_remove_autop($content);
		
			$output = '<span class="pullquote-'.$position.'">'.$content.'</span>';
			
		return do_shortcode($output);
	}
	
	
 	/* -----------------------------------------------------------------
		Blockquote
	----------------------------------------------------------------- */
	function ts_blockquote($atts, $content = null) {
		$content =bf_remove_autop($content);
		$output = '<blockquote>'.$content.'</blockquote>';
		return do_shortcode($output);
	}

?>