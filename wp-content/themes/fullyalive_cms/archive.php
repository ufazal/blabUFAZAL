<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
				<h1 class="pagetitle">
				<?php if ( is_day() ) : ?>
					<?php printf( __( 'Daily Archives <span>%s</span>', 'bluelinerfoundation' ), get_the_date() ); ?>
				<?php elseif ( is_month() ) : ?>
					<?php printf( __( 'Monthly Archives <span>%s</span>', 'bluelinerfoundation' ), get_the_date('F Y') ); ?>
				<?php elseif ( is_year() ) : ?>
					<?php printf( __( 'Yearly Archives <span>%s</span>', 'bluelinerfoundation' ), get_the_date('Y') ); ?>
				<?php else : ?>
					<?php printf( __( '%s', 'bluelinerfoundation' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
				<?php endif; ?>
				</h1>
				
				<?php
					/* Since we called the_post() above, we need to
					 * rewind the loop back to the beginning that way
					 * we can run the loop properly, in full.
					 */
					rewind_posts();
				
					/* Run the loop for the archives page to output the posts.
					 * If you want to overload this in a child theme then include a file
					 * called loop-archives.php and that will be used instead.
					 */
					 get_template_part( 'loop', 'archive' );
				?>
				<div class="clear"></div><!-- clear float -->
			</div><!-- end #maincontent -->
			
			
			
			<div id="side">
				<?php get_sidebar();?>
			</div><!-- end #side -->
			
		  <div class="clear"></div><!-- clear float -->
		  
		</div><!-- end #main -->
	</div><!-- end #content -->
<?php get_footer(); ?>
