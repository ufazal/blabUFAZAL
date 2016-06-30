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
    <?php if ( function_exists('yoast_breadcrumb') && !is_front_page() ) {
			yoast_breadcrumb('<div id="breadcrumbs">','</div>');
			} ?>
		<div id="main">
			<div id="maincontent">
			
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				
				<span class="entry-utility">
					<span class="date"><?php  the_time('M d, Y') ?>  |  <?php _e('Post by','bluelinerfoundation');?>: <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"> <?php the_author();?></a> </span><span class="comment"><?php comments_popup_link(__('No Comments', 'bluelinerfoundation'), __('1 Comments', 'bluelinerfoundation'), __('% Comments', 'bluelinerfoundation')); ?></span> <?php edit_post_link( __( 'Edit', 'bluelinerfoundation' ), '<span class="edit-link">&nbsp;-&nbsp;', '</span>' ); ?> 
				</span>
				
				<h2 class="posttitle"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'bluelinerfoundation' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						
						
				<div class="entry-content">
					<?php the_content( __( 'Read More', 'bluelinerfoundation' ) ); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'bluelinerfoundation' ), 'after' => '</div>' ) ); ?>
					<div class="clear"></div><!-- end clear float -->
				</div>
			</div><!-- end post -->
            
            <p><i><small>Copyright <?php echo date("Y"); ?> by Jack Altschuler and Fully Alive Leadership. All rights reserved. Reproduction and sharing are encouraged, providing proper attribution is given.</small></i></p>
            
            
			<?php 
if ( in_category('1') ) {
	if(function_exists('wp_email')) { email_link(); }
}
comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
				<div class="clear"></div><!-- clear float -->
			</div><!-- end #maincontent -->
			
			<div id="side">
				<?php get_sidebar();?>
			</div><!-- end #side -->
			
		  <div class="clear"></div><!-- clear float -->
		  
		</div><!-- end #main -->
	</div><!-- end #content -->
<?php get_footer(); ?>