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
<section id="default-page" class="single-client">    
    <div class="container">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post(); 
        global $post;
        $web_url = get_post_meta( $post->ID, '_client_url', true );
        ?>
        <div class="heading wow fadeInUp">
            <?php the_title( '<h3>', '</h3>' ); ?>
            <div class="heading-border"></div>
        </div>
        
        <div class="row">
            <div class="col-md-12 blog-single-left">
                <a target="_blank" href="<?php echo $web_url; ?>">                
                <?php
                $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
                if ( $post_thumbnail_id ) {                                
                    echo get_the_post_thumbnail( $post->ID, 'crop_image_525_350', array( 
                        'class' => "img-responsive wow slideInLeft", 
                        'alt' => trim(strip_tags( $post->post_title )),
                        'title' => trim(strip_tags( $post->post_title ))
                    ));
                }
                ?>
                </a>

                <?php echo the_content(); ?>
                <p><a class="read-more hvr-shutter-out-vertical" target="_blank" href="<?php echo $web_url; ?>">Website</a></p> 
                
            </div>
            <!-- <div class="col-md-8"></div> -->
        </div>
        
        <div class="client-bottom wow fadeInUp">
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

    </div>            
</section>

<?php get_footer(); ?>
