<?php
/**
 * Latest News
 */

$args = array(
    'post_type'   => 'post',
    'posts_per_page'   => 5,
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => array('latest-news')
        )
    )
);

$news = get_posts($args);

?>

<div class="news-event-items">
    <div class="container">
        <div class="heading wow fadeInUp">
            <h3><?php _e( 'Latest News', 'blueliner-responsive' ); ?></h3>
            <div class="heading-border"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <?php
                    if( !empty($news) ):
                        foreach ($news as $key => $post): ?>  
                            <li>
                                <?php
                                if ( get_the_post_thumbnail($post->ID) != '' ) {                                
                                    echo '<a href="'; the_permalink(); echo '" class="">';
                                    echo get_the_post_thumbnail( $post->ID, array(50,50), array( 
                                        'class' => "", 
                                        'alt' => trim(strip_tags( $post->post_title )),
                                        'title' => trim(strip_tags( $post->post_title ))
                                    ));
                                    echo '</a>';
                                } else {
                                    echo '<a href="'; the_permalink(); echo '" class="">';
                                    echo '<img width="50" height="50" src="';
                                    echo bl_catch_that_image();
                                    echo '" alt="" />';
                                    echo '</a>';
                                }
                                ?>
                                <a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>"><?php echo $post->post_title; ?></a>
                            </li>
                        <?php
                        endforeach; 
                    endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>