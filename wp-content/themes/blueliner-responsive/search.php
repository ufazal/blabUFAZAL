<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage blueliner-responsive
 * @since blueliner 1.0
 */

get_header(); ?>
<section id="default-page">    
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h3><?php printf( __( 'Search Results for: %s', 'blueliner-responsive' ), get_search_query() ); ?></h3>
                    <div class="heading-border"></div>
                </div>
            </div>
        </div>
        <?php 
        if ( have_posts() ) : 
	        // Start the loop.
	        while ( have_posts() ) : the_post(); 
	            // Include the page content template.
	            get_template_part( 'templates/content', 'search' );
	        // End the loop.
	        endwhile;
        // Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'blueliner-responsive' ),
				'next_text'          => __( 'Next page', 'blueliner-responsive' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'blueliner-responsive' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'templates/content', 'none' );

		endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>
