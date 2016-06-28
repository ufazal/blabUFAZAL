<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage blueliner-responsive
 * @since blueliner 1.0
 */

get_header(); ?>

<section id="category-page" class="portfolio-category">    
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h3><?php echo bl_cat_title(single_cat_title( '', true )); ?></h3>
                    <?php
                    //the_archive_title( '<h3>', '</h3>' );
                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>
                    <div class="heading-border"></div>
                </div>
            </div>
        </div>
        <?php 
    	if ( have_posts() ) : 
        // Start the loop.
        while ( have_posts() ) : the_post(); ?>
        
            <div class="news-event-items">
                <div class="container">
                    <div class="row">                        
                        <?php 
                        $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
                        if ($post_thumbnail_id) {
                            ?>
                            <div class="col-xs-12 col-sm-6 col-md-5 wow slideInLeft">
                                <?php
                                echo get_the_post_thumbnail( $post->ID, 'crop_image_530_490', array( 
                                    'class' => "img-responsive", 
                                    'alt' => trim(strip_tags( $post->post_title )),
                                    'title' => trim(strip_tags( $post->post_title ))
                                ));
                                ?>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-7 wow slideInRight">
                                <div class="portfolio heading wow fadeInUp">
                                    <a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>"><?php the_title( '<h3>', '</h3>' ); ?></a>
                                </div>
                                <?php the_content(); ?>

                                <p><a class="read-more" href="<?php the_permalink(); ?>">Read more</a></p>
                            </div>
                            <?php
                        } 
                        else { ?>
                            <div class="col-xs-12 col-sm-12 col-md-12 wow slideInRight">
                                <?php the_content(); ?>
                                <p><a class="read-more" href="<?php the_permalink(); ?>">Read more</a></p>
                            </div>
                        <?php
                        } ?> 
                    </div>
                </div>
            </div>
        
        <?php
        // End the loop.
        endwhile;

        else :
			get_template_part( 'templates/content', 'none' );

		endif;
        ?>

        <div class="blog-bottom wow fadeInUp">
            <div class="row">
                <div class="col-md-12 text-center">
                    <?php 
                    if ( function_exists('bl_blog_pagination') ) {
                        bl_blog_pagination();
                    } ?>
                    <!-- <a class="box hvr-rectangle-out" href="#" title="Newer">Newer</a>
                    <a class="box hvr-rectangle-out" href="#" title="Older">Older</a> -->
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
