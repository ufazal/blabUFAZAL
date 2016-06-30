<?php
/**
 * Theme Short-code Functions
 */
 $shortcode_path = TEMPLATEPATH . '/includes/shortcodes/';
 
 /****************Class Shortcode Generator******************/
 //require_once($shortcode_path. "class.shortcode_generator.php" );

 /****************Standards Shortcodes***********************/ 
require_once($shortcode_path. "columns.php" );
require_once($shortcode_path. "dropcap.php" );
require_once($shortcode_path. "highlight.php" );
require_once($shortcode_path. "quote.php" );
require_once($shortcode_path. "separator.php" );
require_once($shortcode_path. "styledbox.php" );
require_once($shortcode_path. "tabs.php" );
require_once($shortcode_path. "toggles.php" );
require_once($shortcode_path. "listbullets.php" );
require_once($shortcode_path. "button.php" );


 /****************Custom Shortcodes***********************/ 
require_once($shortcode_path. "recentposts.php" );
require_once($shortcode_path. "minislider.php" );
?>