<?php
/**
 * Latest News
 */

?>
<section id="latest-news">
    <div class="container">
        <div class="heading wow fadeInUp">
            <h3><?php _e( 'Latest News', 'blueliner-responsive' ); ?></h3>
            <span>Integrated (IM) = Digital Marketing (DM) + Traditional (TM)</span>
            <div class="heading-border"></div>
        </div>
    </div>
    
    <div class="container-fluid">                
        <!-- Blog, Twitter & Google Plus -->
        <div class="row row1">
            
            <div class="col-md-6">
                <div class="posts-blog wow flipInX">
                <?php 
                    $lArgs = array(
                        'post_type'      => 'post',
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                        'post__not_in'   => get_option( 'sticky_posts' ),
                        'posts_per_page' => 1
                    );
                    $the_query = new WP_Query( $lArgs ); ?>

                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                    
                        <div class="col-md-4">
                            <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                            <?php 
                            if($feat_image): ?>
                                <img src="<?php echo $feat_image; ?>" alt="<?php the_title(); ?>" />
                            <?php
                            endif; ?>
                        </div>
                        <div class="col-md-8">
                            <p class="blog-heading">From the blog</p>
                            <p class="blog-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
                            <p class="blog-datetime"><?php the_time('M j, Y - G:i a') ?></p>
                            <p class="blog-excerpt"><?php the_excerpt(__('')); ?></p>
                        </div>
                    <?php 
                        endwhile;
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="posts-twitter wow flipInX">
                    <?php 
                    if ( is_active_sidebar( 'twitter_region' ) ) : ?>
                        <?php dynamic_sidebar( 'twitter_region' ); ?>
                    <?php 
                    endif; ?>
                    <div class="tt-logo"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="posts-googleplus wow flipInX">
                    <?php 
                    if ( is_active_sidebar( 'gplus_region' ) ) : ?>
                        <?php dynamic_sidebar( 'gplus_region' ); ?>
                    <?php 
                    endif; ?>
                    <div class="gp-logo"></div>
                </div>
            </div>
        </div>
    </div>
        
    <div class="container-fluid">            
        <!-- Instagram -->
        <div class="row">
            <div class="col-md-12" style="display:none">
                <?php
                if ( is_active_sidebar( 'instragram_region' ) ) : ?>
                    <?php dynamic_sidebar( 'instragram_region' ); ?>
                <?php 
                endif; ?>
            </div>
        </div> 
        <div class="row">
            <div class="col-md-5">       
                <p class="ins-button" style="display:none"></p>
                <p class="ins-content" style="display:none"></p>
            </div>
        </div>
        <div class="row instragram wow slideInUp">
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-8">
                        <div id="img1" class="img-item"></div>
                    </div>
                    <div class="col-md-4">
                        <div id="img2" class="img-item"></div>
                        <div id="img3" class="img-item"></div>
                    </div>
                </div>                    
            </div>
            <div class="col-md-2">
                <div id="img4" class="img-item"></div>
                <div id="insta-button"></div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-8">
                        <div id="img5" class="img-item"></div>
                    </div>
                    <div class="col-md-4">
                        <div id="img6" class="img-item"></div>
                        <div id="img7" class="img-item"></div>
                    </div>
                </div>                    
            </div>
        </div>
    </div>
    
    <!-- Quote -->
    <div class="quote-container">
        <div class="container">
            <div class="quotes">
            <?php
            $args = array(
                'posts_per_page' => -1,
                'post_type'      =>  'quote',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'quote_cat',
                        'field' => 'slug',
                        'terms' => 'homepage'
                    )
                )
            );

            $quotes = get_posts( $args );
            if(count($quotes)>0): ?>
                <?php 
                foreach ($quotes as $key => $value) {
                    $post_content = $value->post_content;
                    $post_id = $value->ID;
                    $fb_url = get_post_meta( $post_id, '_quote_fb_url', true );
                    $twitter_url = get_post_meta( $post_id, '_quote_twitter_url', true );
                    $google_url = get_post_meta( $post_id, '_quote_google_url', true );
                    $linkedin_url = get_post_meta( $post_id, '_quote_linkedin_url', true );
    
                } ?>
                    <p class="wow fadeInUp">"<?php echo $post_content;?>"</p>
                    <div class="wow fadeInDown quote-socials">
                        <ul>
                            <li>SHARE this marketing fact: </li>
                            <li><a target="_blank" href="<?php echo $fb_url;?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/quote-fb.png" alt="Facebook" /></a></li>
                            <li><a target="_blank" href="<?php echo $twitter_url;?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/quote-tt.png" alt="Twitter" /></a></li>
                            <li><a target="_blank" href="<?php echo $google_url;?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/quote-gp.png" alt="Google+" /></a></li>
                            <li><a target="_blank" href="<?php echo $linkedin_url;?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/quote-li.png" alt="Linkedin" /></a></li>
                        </ul>
                    </div>
            <?php 
            endif; ?>
            </div>
        </div>
    </div>
</section>