<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage CMB2_Example_Theme
 * @since blueliner 1.0
 */
?>
<div class="col-md-3">
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
<?php endif; ?>

</div><!-- .secondary -->