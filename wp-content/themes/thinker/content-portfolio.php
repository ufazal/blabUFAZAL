<?php
/**
 * The template used for displaying projects on index view
 *
 * @package Thinker
 */
?>
    <div class="threecolumn clearfix">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if ( '' != get_the_post_thumbnail() ) : ?>
            <div class="portfolio-thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
            </div><!-- .portfolio-thumbnail -->
        <?php endif; ?>
    </article><!-- #post-## -->
    </div>