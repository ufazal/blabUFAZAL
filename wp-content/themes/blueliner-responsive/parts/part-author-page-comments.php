<?php
/**
 * More From This Author
 *
 * This template part displays a list of posts by this author.
 */

$user_id = get_queried_object()->post_author;
?>

<aside class="part-author-more-grid widget">
    <div class="wrap">

        <h3 class="widget-title"><?php _e( 'More From This Author', 'wds-page-builder' ); ?></h3>

        <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            $posts = new WP_Query( array(
                'post_type'      => array( 'post', 'page', 'video' ),
                'posts_per_page' => 6,
                'post_status'    => 'publish',
                'author'         => $user_id,
                'paged'          => $paged
            ) );

            if ( $posts->have_posts() ) :
                while ( $posts->have_posts() ) : $posts->the_post();
                    get_template_part( 'content', 'latest-entries-grid' );
                endwhile;
                wds_load_more_button( $posts );
            else :
                echo esc_html__( 'Sorry. There are no recent entries.', 'wds-page-builder' );
            endif;

            wp_reset_postdata();
        ?>
    </div><!-- .wrap -->
</aside><!-- .part-author-more-grid .widget -->