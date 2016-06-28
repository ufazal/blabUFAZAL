<?php
/**
 * Template Name: Practice Areas
 */
    get_header('practiceareas'); 
    // Start the loop.
    while ( have_posts() ) : the_post(); 
    $post_id = get_the_ID();
    $allpage_title = get_post_meta( $post_id, '_allpage_title', true );
    $allpage_sub_title = get_post_meta( $post_id, '_allpage_sub_title', true ); ?>

    <!-- Intro -->
    <section id="practice-areas-intro">            
        <div class="container">
            <h3><?php echo $allpage_sub_title; ?></h3>
            <?php 
            echo get_the_post_thumbnail( $post->ID, 'medium', array( 
              'class' => "img-responsive", 
              'alt' => trim(strip_tags( $post->post_title )),
              'title' => trim(strip_tags( $post->post_title ))
              )); ?>
            <?php the_content(); ?>
            <?php
                wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'blueliner-responsive' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'blueliner-responsive' ) . ' </span>%',
                    'separator'   => '<span class="screen-reader-text">, </span>',
                ) );
            ?>                    
            <?php edit_post_link( __( 'Edit', 'blueliner-responsive' ), '<div class="entry-edit"><span class="edit-link">', '</span></div>' ); ?>
        </div>            
    </section><?php
    endwhile; ?>

    <!-- Intro - End -->
    <?php do_action( 'wds_page_builder_load_parts' ); ?>
    
<?php get_footer(); ?>        
        