<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage blueliner-responsive
 * @since blueliner 1.0
 */

get_header(); ?>
<section id="default-page">
    <div class="container">
        <?php
    	// Start the loop.
    	while ( have_posts() ) : the_post(); ?>
        <div class="heading wow fadeInUp">
            <?php the_title( '<h3 class="wow slideInRight">', '</h3>' ); ?>
            <div class="heading-border"></div>
        </div>
        
        <div class="row">
            
            <div class="col-md-5 wow slideInRight">
            <?php
                $_job_title = get_post_meta( $post->ID, '_job_title', true );
                $_job_last_date = get_post_meta( $post->ID, '_job_last_date', true );
                $cmb_open_job = get_post_meta( $post->ID, '_job_open_job', true );
                if($cmb_open_job == 'on'): ?>
                    <p class="job-title"><strong>Job Title:</strong> <?php echo $_job_title; ?></p>
                    <p class="open-status"><strong>Close Date:</strong> <?php echo date("F j, Y", $_job_last_date); ?></p>
                <?php
                endif; ?>    

                <?php echo do_shortcode('[contact-form-7 id="388" title="Apply Form"]'); ?>               
            </div>
            <div class="col-md-7 wow slideInRight">
                <?php the_content(); ?>                     
            </div>
        </div>

        <?php
		// End the loop.
        endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>
