<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage blueliner-responsive
 * @since blueliner 1.0
 */

if( isset($post->post_type) && $post->post_type == 'post') {
    get_header('blog');
}
else {
    get_header();
}
?>

        <?php
        // Start the loop.
        while ( have_posts() ) : the_post(); ?>
        <div class="heading wow fadeInUp">
            <?php the_title( '<h3>', '</h3>' ); ?>
            <span>by <?php the_author(); ?>, <?php echo get_human_time_ago($post); ?></span>
            <div class="heading-border"></div>
        </div>
        
        <div class="row">
            <div class="col-md-12 blog-single-left">                
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

                <?php echo the_content(); ?>
            </div>
            <!-- <div class="col-md-8"></div> -->
        </div>
        
        <div class="blog-bottom wow fadeInUp">
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
