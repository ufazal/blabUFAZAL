<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage blueliner-responsive
 * @ since blueliner 1.0
 */

get_header('blog'); ?>
        <?php 
        if( !isset($_GET['cat']) ): ?>
            <div class="blog-featured wow fadeInUp">
            <?php

            $f_args = array(
                'post_type'      => 'post',
                'category_name'    => 'blog',
                'orderby'        => 'date',
                'order'          => 'DESC',
                'post__not_in'   => get_option( 'sticky_posts' ),
                'posts_per_page' => 1
            );

            $f_posts = get_posts( $f_args );
            if($f_posts):
                foreach ($f_posts as $post):?>
                <div class="row">
                    <div class="col-md-6">                        
                        <?php
                        $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
                        if ( $post_thumbnail_id ) {
                            echo '<a href="'; the_permalink(); echo '" class="">';
                            echo get_the_post_thumbnail( $post->ID, 'crop_image_525_350', array( 
                                'class' => "img-responsive", 
                                'alt' => trim(strip_tags( $post->post_title )),
                                'title' => trim(strip_tags( $post->post_title )),
                                'width' => '',
                                'height' => ''
                            ));
                            echo '</a>';
                        } else {
                            echo '<a href="'; the_permalink(); echo '" class="">';
                            echo '<img width="" height="" src="';
                            echo bl_blog_catch_that_image();
                            echo '" alt="" />';
                            echo '</a>';
                        }
                        ?>
                    </div>
                    <div class="col-md-6">
                        <h3><a class="" href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>"><?php echo $post->post_title; ?></a></h3>
                        <span><?php echo get_human_time_ago($post); ?></span>
                        <?php the_excerpt(); ?>
                        <a class="box hvr-trim" href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>">Read more</a>
                    </div>
                </div><?php
                // End the loop.
                endforeach; 
            endif;  ?>
            </div><?php
        endif; ?>
            
            <div class="blog-others wow fadeInUp">
                <?php 
                if ( get_query_var('paged') ) {
                   $paged = get_query_var('paged');
                }
                else if ( get_query_var('page') ) {
                   $paged = get_query_var('page');
                } 
                else {
                   $paged = 1;
                }

                $f_post_id = '';
                if( isset($f_posts) ) {
                    $f_post = !empty($f_posts[0]) ? $f_posts[0] : $f_posts;
                    $f_post_id = $f_post->ID;
                }
                
                if( isset($_GET['cat']) && !empty($_GET['cat']) ) {
                    $post_args = array ( 
                        'post_type'   => 'post',
                        'category_name'    => 'blog',
                        'posts_per_page'   => 10,
                        'paged' => $paged,
                        'post__not_in' => array($f_post_id),
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
                    $post_args = array(
                      'post_type' => 'post',
                      'category_name'    => 'blog',
                      'posts_per_page' => 10,
                      'post__not_in' => array($f_post_id),
                      'paged' => $paged
                    );
                }

                $post_query = new WP_Query( $post_args );

                if ( $post_query->have_posts() ) :
                   while ( $post_query->have_posts() ) : $post_query->the_post(); 

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'templates/content', get_post_format() );
               
                    endwhile;
                else :
                    get_template_part( 'templates/content', 'none' );

                endif;

               
                wp_reset_query();
                
                ?>     
            </div>
                
            <div class="blog-bottom wow fadeInUp">
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
    </div>            
</section>
        
<?php get_footer(); ?>        
        
