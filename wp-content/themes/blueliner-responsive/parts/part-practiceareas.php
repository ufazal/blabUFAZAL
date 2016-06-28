<?php
/**
 * Practice Areas page
 */

$args = array(
    'post_type'     => 'blpracticearea',
    'posts_per_page'  => -1,
    'orderby'       => 'menu_order',
    'order'       => 'ASC'
);

$areas = get_posts($args);

?>

<!-- Thumbs -->
<section id="practice-areas-items">            
    <div class="container-fluid">
        <?php
        if( !empty($areas) ):
        foreach ($areas as $key => $post): ?>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="view view-first">
                <?php 
                $thumb = get_post_thumbnail_id($post->ID);
                if(!empty($thumb)):
                echo get_the_post_thumbnail( $post->ID, 'crop_image_636_462', array( 
                  'class' => "img-responsive", 
                  'alt' => trim(strip_tags( $post->post_title )),
                  'title' => trim(strip_tags( $post->post_title ))
                  )); 
                else: ?>
                <img width="636" height="462" src="http://placehold.it/636x462" class="img-responsive" alt="area" title="area">
                <?php
                endif; ?>
                <div class="mask">
                    <h2><a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" title=""><?php echo $post->post_title; ?></a></h2>
                    <div class="view-btn">
                        <a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" title="">Visit <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div><?php
        endforeach; 
        endif; ?>


    </div>            
</section>
<!-- Thumbs - End -->
            