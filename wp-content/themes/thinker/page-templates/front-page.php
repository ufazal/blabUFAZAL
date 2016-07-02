<?php
/**
 * Template Name: Front Page
 *
 * @package Thinker
 */
get_header(); ?>
    <div class="page hfeed site">
        <div id="slider" class="site-main">
			<?php get_sidebar( 'front-content-one' ); ?>
        </div><!-- #main -->
    </div><!-- .page -->
    <div class="page hfeed site frontone">
        <div class="main site-main">
             <div class="intro">
			 <?php while ( have_posts() ) : the_post(); ?>
             <div class="page hfeed site welcome">
				<?php get_template_part( 'content', 'front' ); ?>
                    <?php
                                // If comments are open or we have at least one comment, load up the comment template
                                if ( comments_open() || '0' != get_comments_number() )
                                    comments_template();
                    ?>
             </div>
             <?php endwhile; // end of the loop. ?>
             </div>
             <?php thinker_featured_pages(); ?>
       </div><!-- #main -->
  </div><!-- .page -->
<?php get_footer(); ?>