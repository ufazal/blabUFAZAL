<?php
function my_script() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', get_template_directory_uri().'/js/jquery-1.7.2.min.js', false, '1.5.1');
		wp_enqueue_script('jquery');
		wp_enqueue_script('cufon-yui', get_template_directory_uri().'/js/cufon-yui.js', array('jquery'));
		wp_enqueue_script('Century Gothic', get_template_directory_uri().'/js/steelfish.cufonfonts.js', array('jquery'));
		wp_enqueue_script('Khmer UI', get_template_directory_uri().'/js/steelfish.cufonfonts.js', array('jquery'));
		wp_enqueue_script('lavalamp', get_template_directory_uri().'/js/jquery.lavalamp.js', array('jquery'));
		wp_enqueue_script('lavalamp-config', get_template_directory_uri().'/js/lavalamp-config.js', array('jquery'));
		wp_enqueue_script('easing', get_template_directory_uri().'/js/jquery.easing.1.1.js', array('jquery'));
		wp_enqueue_script('fancy', get_template_directory_uri().'/js/jqFancyTransitions.1.8.min.js', array('jquery'));
		wp_enqueue_script('cycle', get_template_directory_uri().'/js/jquery.cycle.all.min.js', array('jquery'));
		wp_enqueue_script('equalize', get_template_directory_uri().'/js/jquery.equalheights.js', array('jquery'));
			wp_enqueue_script('carousel', get_template_directory_uri().'/js/jquery.carouFredSel-5.6.4-packed.js', array('jquery'));
			wp_enqueue_script('logoslideshow', get_template_directory_uri().'/js/image-slideshow.js', array('jquery'));
		
	}
}
add_action('init', 'my_script');
?>