<?php
/**
 * The Front Page Widget Area.
 *
 * @package Thniker
 */
if ( ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
?>
	<?php dynamic_sidebar( 'sidebar-3' ); ?>