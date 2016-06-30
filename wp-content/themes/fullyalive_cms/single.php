<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Foundation
 * @since foundation 1.0
 */

get_header(); ?>

<?php
if ( in_category('clients') ) {
	include 'single-clients.php';
} else if ( in_category('videos') ) {
	// Continue with normal Loop
	include 'single-videos.php';
	// ...
} else {
	// Continue with normal Loop
	include 'single-default.php';
	// ...
}


?>


