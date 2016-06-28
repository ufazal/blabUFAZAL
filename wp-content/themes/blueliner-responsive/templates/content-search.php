<?php
/**
 * The template part for displaying results in search pages
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage blueliner-responsive
 * @since blueliner 1.0
 */
?>

<section id="default-page" <?php post_class(); ?>>
    <div class="container">
        <div class="heading wow fadeInUp">
            <?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
            <div class="heading-border"></div>
        </div>
        
        <div class="row">
            <div class="col-md-12 wow slideInRight">
           		<?php the_excerpt(); ?>               
            </div>
        </div>
		<?php edit_post_link( __( 'Edit', 'blueliner-responsive' ), '<div class="entry-edit"><span class="edit-link">', '</span></div>' ); ?>
    </div>
</section>
