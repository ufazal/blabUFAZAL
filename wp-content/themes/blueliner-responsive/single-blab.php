<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage blueliner-responsive
 * @since blueliner 1.0
 */

get_header();

?>
<section id="default-page">    
    <div id="single-b-labs" class="container">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post(); 
        global $post; ?>
  
        <div class="row tab-content"><?php
            $post_content = $post->post_content;
            $web_url = get_post_meta( $post->ID, '_blab_url', true );
            $sub_title = get_post_meta( $post->ID, '_blab_sub_title', true );
            ?>
            <div class="animated slideInLeft col-md-6">
                <?php 
                echo get_the_post_thumbnail( $post->ID, 'crop_image_530_490', array( 
                  'class' => "img-responsive", 
                  'alt' => trim(strip_tags( $post->post_title )),
                  'title' => trim(strip_tags( $post->post_title ))
                )); ?>

            </div>
            <div class="animated slideInRight col-md-6">
                <h3><?php echo $post->post_title; ?></h3>
                <span><?php echo $sub_title; ?></span>
                <p><?php echo $post_content; ?></p>
                <a target="_blank" class="read-more" href="<?php echo $web_url; ?>">Website</a>   
            </div>
        </div>
        <!-- <div class="col-md-8"></div> -->
    </div>
    
    <div class="blab-bottom wow fadeInUp">
        <div class="row">
            <div class="col-md-12 text-center">
                <?php previous_post_link('%link', 'Previous', false ); ?> 
                <?php next_post_link( '%link', 'Next', false ); ?>
            </div>
        </div>
    </div>
    <?php
    // End the loop.
    endwhile; ?>         
</section>

<?php get_footer(); ?>
