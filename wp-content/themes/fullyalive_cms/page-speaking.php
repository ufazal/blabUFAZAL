<?php
/**
 * Template Name: Speaking
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
		            <?php if ( function_exists('yoast_breadcrumb') && !is_front_page() ) {
				yoast_breadcrumb('<div id="breadcrumbs">','</div>');
				} ?>
			<div id="maincontent">

				
				
				
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php the_content( __( 'Read More', 'bluelinerfoundation' ) ); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'bluelinerfoundation' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'bluelinerfoundation' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post -->
	

				<?php endwhile; ?>
				<div class="clear"></div><!-- clear float -->
                
<a href="<?php echo home_url( '/contact' ); ?>" title="contact" ><img src="<?php echo get_stylesheet_directory_uri() . "/images/contact_b.png" ?>" alt="contact jack" /></a>

<a href="<?php echo home_url( '/speaker-calendar/' ); ?>" title="contact" ><img src="<?php echo get_stylesheet_directory_uri() . "/images/schedule_b.png" ?>" alt="jacks schedule" /></a>

                 <?php if ( ! dynamic_sidebar( 'schedule-widget' ) ) : ?>
  <?php endif; // end general widget area ?>
                
                
                
			</div><!-- end #maincontent -->
			
			<div id="side">
				<?php get_sidebar('page');?>
			</div><!-- end #side -->
			
		  <div class="clear"></div><!-- clear float -->
		  
		</div><!-- end #main -->
	</div><!-- end #content -->
<?php get_footer(); ?>
