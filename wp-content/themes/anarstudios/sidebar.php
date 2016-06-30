

<?php	 	
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<?php	 	
                                // A second sidebar for widgets, just because.
                                if (is_active_sidebar('secondary-widget-area')) : ?>

                                    <div id="secondary" class="widget-area" role="complementary">
                                        <ul class="xoxo">
        <?php	 	 dynamic_sidebar('secondary-widget-area'); ?>
                                </ul>
                            </div><!-- #secondary .widget-area -->

<?php	 	 endif; ?>

<div id="primary" class="widget-area" role="complementary">
    <ul class="xoxo">
     
        <?php	 	 $category_id = get_cat_ID('events'); ?>

        <div class="sidebar-posts">
            <div class="postheader"><h2>Events</h2></div>
            <div>
                <ul style="margin-left:0px;">
                    <?php	 	
                    $postslist = get_posts('numberposts=3&order=DESC&cat=' . $category_id);
                    foreach ($postslist as $post) : setup_postdata($post);
                        $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), thumbnail);
                    ?>
                        <li style="float:left; margin-top:10px">
                            <div style="float:left; padding-right:5px; padding-top:5px" id="postthumb">
                                <img src="<?php	 	 echo $thumbnail[0]; ?>" width="50" height="50" />
                            </div>
                            <div  style="float:left; width: 160px; padding-right: 5px;" id="postexcerpt" >
                            <?php	 	
                            $permalink = get_permalink($post->ID);
                            echo limit_words(get_the_excerpt(), '10', $permalink, 'more &raquo;');
                            ?>
                        </div>


                    </li>
                    <?php	 	 endforeach; ?>
                        </ul>
                    </div>
            
                </div>
        
            
              



        </ul>
    </div><!-- #primary .widget-area -->