<?php
/**
 * @package Thinker
 */
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->
        <?php if ( '' != get_the_post_thumbnail() ) : ?>
            <div class="portfolio-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div><!-- .portfolio-thumbnail -->
        <?php endif; ?>
        <div class="entry-content">
            <?php the_content(); ?>
            <?php
                wp_link_pages( array(
                    'before'   => '<div class="page-links clear">',
                    'after'    => '</div>',
                    'pagelink' => '<span class="page-link">%</span>',
                ) );
            ?>
        </div><!-- .entry-content -->
        <footer class="entry-meta">
            <?php
                echo get_the_term_list( $post->ID, 'jetpack-portfolio-tag', '<span class="tags-links">', '', '</span>' );
            ?>

            <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
            <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'sketch' ), __( '1 Comment', 'thinker' ), __( '% Comments', 'thinker' ) ); ?></span>
            <?php endif; ?>
        </footer><!-- .entry-meta -->
    </article><!-- #post-## -->