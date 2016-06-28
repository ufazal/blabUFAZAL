<?php
/**
 * Template Name: B-Labs page
 */

get_header(); ?>

<section id="b-labs">
            
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h3><?php _e( 'B.labs', 'blueliner-responsive' ); ?></h3>
                    <span>Our Innovation Engine</span>
                    <div class="heading-border"></div>
                </div>
            </div>
        </div>

        <?php
        // Start the loop.
        while ( have_posts() ) : the_post(); ?>
                
        <div class="row">
            <div class="col-md-12"><?php the_content(); ?></div>
        </div><?php
        endwhile; ?>
        
        <?php do_action( 'wds_page_builder_load_parts' ); ?>
        
    </div>
    
    <div class="container-fluid bottom wow fadeInUp"></div>
    
</section>
 
<?php get_footer(); ?>        
        