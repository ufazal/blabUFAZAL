<?php
/**
 * Featured Clients
 */

$args = array(
    'post_type'     => 'client',
    'posts_per_page'  => -1,
    'orderby'       => 'menu_order',
    'order'       => 'ASC'
);

$clients = get_posts($args);

?>

<section id="featured-client">
    <div class="container">
        <div class="heading wow fadeInUp">
            <h3><?php _e( 'Featured Clients', 'blueliner-responsive' ); ?></h3>
            <span>view our latest projects</span>
            <div class="heading-border"></div>
        </div>
    </div>
    
    <div class="container">
        <div class="logo-container">   
            <?php
            if( !empty($clients) ):
                foreach ($clients as $key => $post): 

                ?>  

                <div class="logo-item">
                    <a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>">              
                        <?php 
                        echo get_the_post_thumbnail( $post->ID, 'full', array( 
                          'class' => "img-responsive", 
                          'alt' => trim(strip_tags( $post->post_title )),
                          'title' => trim(strip_tags( $post->post_title ))
                          )); 
                        ?>
                    </a>
                </div>
                <?php
                endforeach; 
            endif; ?>
                           
        </div>                
    </div>
</section>