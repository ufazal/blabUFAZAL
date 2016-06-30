<?php
/**
 * Template Name: Calendar
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Foundation
 * @since foundation 1.0
 */

get_header(); ?>
	<div id="content">
		<div id="main">
			
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
					<?php the_content( __( 'Read More', 'bluelinerfoundation' ) ); ?>
					
					<div class="clear"></div>
					<?php edit_post_link( __( 'Edit', 'bluelinerfoundation' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .entry-content -->
			</div><!-- #post -->

			

			<?php endwhile; ?>
		  <div class="clear"></div><!-- clear float -->
		</div><!-- end #main -->
	</div><!-- end #content -->
<?php get_footer(); ?>
