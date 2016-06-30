<?php
$includes_path = TEMPLATEPATH . '/includes/';


//Theme init
require_once $includes_path . 'theme-init.php';

//Widget and Sidebar
require_once $includes_path . 'sidebar-init.php';

require_once $includes_path . 'register-widgets.php';

//Additional function
require_once $includes_path . 'theme-function.php';

//Additional function
require_once $includes_path . 'theme-shortcode.php';

//Loading jQuery
require_once $includes_path . 'theme-scripts.php';

function logo_attachment($key) {
	global $post;
	$custom_field = get_post_meta($post->ID, $key, true);

	if($custom_field) { //if the user set a custom field
		echo '<img src="'.$custom_field.'" alt="" />';
	}
	else { //else, return
		return;
	}
}
?>
