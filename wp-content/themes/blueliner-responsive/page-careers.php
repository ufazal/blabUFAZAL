<?php
/**
 * Template Name: Career page
 */

get_header(); ?>
    <section id="careers">    
        <div class="container">
            <?php
            // Start the loop.
            while ( have_posts() ) : the_post(); 
            $post_id = get_the_ID();
            $allpage_title = get_post_meta( $post_id, '_allpage_title', true );
            $allpage_sub_title = get_post_meta( $post_id, '_allpage_sub_title', true );
            ?>

            <div class="heading wow fadeInUp">
                <?php the_title( '<h3>', '</h3>' ); ?>
                <div class="heading-border"></div>
            </div>

            <?php 
            if($allpage_title): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="careers-heading wow fadeInUp">
                        <h4><?php echo $allpage_title; ?></h4>
                        <!--<p>(def. "Blue Line = the Belt of Blue Ninja, the highest form of Marketing Expert")</p>-->
                        <p><?php echo $allpage_sub_title; ?></p>
                    </div>
                </div>
            </div><?php
            endif; ?>


            <div class="row">
                <div class="col-md-12 wow slideInRight">
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
            </div>
            
            <?php
            endwhile;
            ?>
        </div>
    </section>
    <?php do_action( 'wds_page_builder_load_parts' ); ?>
    
<?php get_footer(); ?>        
        