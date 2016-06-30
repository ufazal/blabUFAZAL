<?php
	/* Buttons */
	add_shortcode('button', 'bf_button');
	
	/* -----------------------------------------------------------------
		Button
	----------------------------------------------------------------- */
	function bf_button($atts, $content){
		
		extract(shortcode_atts(array(
			'color' => 'blue',
			'tooltip' => '',
			'size' => '',
			'link' => '#'
		), $atts));
		
		
		if($tooltip != ''){$tooltip = 'title="'.$tooltip.'"'; }
		
		$output = '<a class="but-color '.$size . ' ' . $color.'" '.$tooltip.' href="'.$link.'">'.$content.'</a>';
		
		return do_shortcode($output);
		
	}

?>