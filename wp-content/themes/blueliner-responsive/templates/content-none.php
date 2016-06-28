<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage blueliner-responsive
 * @since blueliner 1.0
 */
?>

<section class="no-results not-found">
	<div class="heading wow fadeInUp">
		<h3><?php _e( 'Nothing Found', 'blueliner-responsive' ); ?></h3>
	    <div class="heading-border"></div>
	</div>

	<div class="row">
    	<div class="col-md-12 wow slideInRight">
			<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
				<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'blueliner-responsive' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
			<?php elseif ( is_search() ) : ?>
				<p><?php _e( 'Sorry, but nothing matched your search terms 2. Please try again with some different keywords.', 'blueliner-responsive' ); ?></p>
				<?php get_search_form(); ?>
			<?php else : ?>
				<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'blueliner-responsive' ); ?></p>
				<?php get_search_form(); ?>
			<?php endif; ?>
		</div>
	</div><!-- .page-content -->
</section><!-- .no-results -->
