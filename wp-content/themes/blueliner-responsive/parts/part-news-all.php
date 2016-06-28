<?php
/**
 * News All
 */

if ( get_query_var('paged') ) {
   $paged = get_query_var('paged');
}
else if ( get_query_var('page') ) {
   $paged = get_query_var('page');
} 
else {
   $paged = 1;
}

if( isset($_GET['cat']) && !empty($_GET['cat']) ) {
    $news_args = array ( 
        'post_type'   => 'post',
        'category_name'    => 'news',
        'posts_per_page'   => 10,
        'paged' => $paged,
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => array($_GET['cat'])
            )
        )
    );
}
else {
    $news_args = array(
      'post_type' => 'post',
      'category_name'    => 'news',
      'posts_per_page' => 10,
      'paged' => $paged
    );
}

?>

<?php
    $post_query = new WP_Query( $news_args );

    if ( $post_query->have_posts() ) :
    $featured = 1;
    while ( $post_query->have_posts() ) : $post_query->the_post();
        if($featured == 1): ?>
        <div class="news-featured-item wow fadeInUp">
            <div class="featured-item-info">
                <div class="col-md-4 featured-item-desc">
                    <?php the_title( sprintf( '<h3><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
                    <span><?php echo get_human_time_ago($post); ?></span>
                    <div><a class="read-more" href="<?php echo esc_url(get_permalink()); ?>">Read More</a></div>
                </div>
                <div class="col-md-8 featured-item-img">
                    <div class="news-icon"></div>
                    <?php
                    $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
                    if ( $post_thumbnail_id ) {
                        echo '<a href="'. esc_url( get_permalink( $post->ID ) ). '">';
                        echo get_the_post_thumbnail( $post->ID, 'crop_image_350_235', array( 
                            'class' => "img-responsive", 
                            'alt' => trim(strip_tags( $post->post_title )),
                            'title' => trim(strip_tags( $post->post_title )),
                            'width' => '',
                            'height' => ''
                        ));
                        echo '</a>';
                    } else {
                        echo '<a href="'. esc_url( get_permalink( $post->ID ) ) .'">';
                        echo '<img class="img-responsive" width="" height="" src="'. bl_news_catch_that_image() . '" alt="" />';
                        echo '</a>';
                    } ?>
                </div>
            </div>
        </div>
        <?php 
        else: ?>
        <div class="news-others thumbnails">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="img-container">
                        <?php
                        the_title( sprintf( '<h4><a href="%s">', esc_url( get_permalink() ) ), '</a></h4>' );
                        $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
                        if ( $post_thumbnail_id ) {
                            echo '<a href="'. esc_url( get_permalink( $post->ID ) ). '">';
                            echo get_the_post_thumbnail( $post->ID, 'crop_image_350_235', array( 
                                'class' => "img-responsive", 
                                'alt' => trim(strip_tags( $post->post_title )),
                                'title' => trim(strip_tags( $post->post_title )),
                                'width' => '',
                                'height' => ''
                            ));
                            echo '</a>';
                        } else {
                            echo '<a href="'. esc_url( get_permalink( $post->ID ) ) .'">';
                            echo '<img class="img-responsive" width="350" height="235" src="'. bl_news_catch_that_image() . '" alt="" />';
                            echo '</a>';
                        }
                        ?>
                    </div>                                        
                    <div class="caption">
                        <p><?php the_excerpt(); ?></p>
                        <div class="thumb-footer">
                            <div class="text-left"><?php echo get_human_time_ago($post); ?></div>
                            <div class="text-right"><a class="" href="<?php echo esc_url(get_permalink()); ?>">Read More -</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        endif; 
$featured++;
endwhile;
endif;
wp_reset_query(); ?>

<div class="blog-bottom">
    <div class="row">
        <div class="col-md-12 text-center">
            <?php 
            if ( function_exists('bl_blog_pagination') ) {
                bl_blog_pagination( $post_query );
            } ?>
            <!-- <a class="box hvr-rectangle-out" href="#" title="Newer">Newer</a>
            <a class="box hvr-rectangle-out" href="#" title="Older">Older</a> -->
        </div>
    </div>
</div>
