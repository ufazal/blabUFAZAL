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
				<h1 class="pagetitle">Jack’s Now-And-Then Blog</h1>
				<?php if ( $paged < 2 ) : ?>
<h2>Published just once or twice a month.<br />
All postings are mercifully 39 seconds reading time or less!<br />
Collect the entire set!</h2>

<?php else : ?>

<?php endif; ?><hr class="separator line"></hr>
				<?php

				
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
