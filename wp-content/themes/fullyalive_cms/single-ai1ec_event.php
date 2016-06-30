<?php
/**
 * The Template for displaying all single posts.
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
			
				
				
				
				<h2 class="posttitle"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'bluelinerfoundation' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						
						
				<div class="entry-content">
					<?php the_content( __( 'Read More', 'bluelinerfoundation' ) ); ?>
					
					<div class="clear"></div><!-- end clear float -->
				</div>
			</div><!-- end post -->
            
            
            
            
		
			<?php endwhile; // end of the loop. ?>
				<div class="clear"></div><!-- clear float -->
			
			
			
			
		  <div class="clear"></div><!-- clear float -->
		  
		</div><!-- end #main -->
	</div><!-- end #content -->
<?php get_footer(); ?>
