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


<div class="row">
    <div class="col-md-12">                                
        <div class="dropdown" id="dd-category">
            <?php
            $bloCats = array();
            $selected_cat = '';

            $categories = get_categories(array('parent' => '248', 'hide_empty' => true));
            foreach ($categories as $category) {
                $bloCats[$category->slug] = $category->name;
            }
         
            if( isset($_GET['cat']) && !empty($_GET['cat']) ) {
              $selected_cat = $_GET['cat'];  
            }
            // generate list of categories
            ?>
            <a data-toggle="dropdown" class="box btn btn-default dropdown-toggle" href="javascript:void();" title=""><?php echo !empty($selected_cat) ? $bloCats[$selected_cat] : 'News All'; ?> <i class="fa fa-chevron-down"></i></a>
            <ul class="dropdown-menu">
            <?php
            foreach ($bloCats as $key => $cat) {
                if($key != $selected_cat ) {
                    echo '<li><a href="'. esc_url(home_url('/news-events/')) . '?cat=' . $key .'">'. $cat .'</a></li>';
                }
            }
            ?>
            </ul>
        </div>
        <div class="row">
        <?php
        $post_query = new WP_Query( $news_args );

        if ( $post_query->have_posts() ) :
        $featured = 1;
        while ( $post_query->have_posts() ) : $post_query->the_post();
            if($featured == 1): ?>
            <div class="col-md-12 featured-news">
                <div class="news-contents">
                    <?php
                    the_title( sprintf( '<h4><a href="%s">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
                    <div class="news-metainfo">
                        <span class="times"><?php echo get_human_time_ago($post); ?></span>
                    </div>
                    <a href="<?php echo esc_url(get_permalink()); ?>" title="">Read more -</a>
                </div>
                <div class="news-image">
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
                        echo '<img width="" height="" src="'. bl_news_catch_that_image() . '" alt="" />';
                        echo '</a>';
                    } ?>
                    <div class="news-caption"><?php the_excerpt(); ?></div>
                </div>
            </div>
            <?php 
            else: ?>
            <div class="col-md-4">
                <div class="news-image">
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
                        echo '<img width="350" height="235" src="'. bl_news_catch_that_image() . '" alt="" />';
                        echo '</a>';
                    }
                    the_title( sprintf( '<div class="news-caption"><a href="%s">', esc_url( get_permalink() ) ), '</a></div>' );
                    ?>
                </div>
                <div class="news-contents">
                    <?php the_excerpt(); ?>
                    <div class="news-metainfo">
                        <span class="times"><?php echo get_human_time_ago($post); ?></span>
                        <a href="<?php echo esc_url(get_permalink()); ?>" title="">Read more -</a>
                    </div>
                </div>
            </div>
            <?php
            endif; 
        $featured++;
        endwhile;
        endif;
        wp_reset_query(); ?>     
        </div>
    </div>
        
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
</div>


