<?php
/*
Plugin Name: Logo Slideshow

Description: This Plugin shows 7 Logos with Links in a nice DHTML slideshow.
Version: 1.0

*/
/* options page */
$options_page = get_option('siteurl') . '/wp-admin/admin.php?page=logo-slideshow/options.php';
function logoslider_options_page() {
	add_options_page('Logo Slideshow Options', 'Logo Slideshow', 10, 'logo-slideshow/options.php');
}
function logoslider_js() {
    $logoslider_path =  get_bloginfo('wpurl')."/wp-content/plugins/logo-slideshow/";
	$logosliderscript = "<link rel=\"stylesheet\" href=\"".$logoslider_path."css/image-slideshow.css\" type=\"text/css\" media=\"screen\" charset=\"utf-8\"/>
<script type=\"text/javascript\" src=\"".$logoslider_path."scripts/image-slideshow.js\"></script>
	\n";
	echo($logosliderscript);
}
add_action('wp_head', 'logoslider_js');
add_action('admin_menu', 'logoslider_options_page');
?>