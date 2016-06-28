<?php	 	
/**

 * The main template file.

 *

 * This is the most generic template file in a WordPress theme

 * and one of the two required files for a theme (the other being style.css).

 * It is used to display a page when nothing more specific matches a query. 

 * E.g., it puts together the home page when no home.php file exists.

 * Learn more: http://codex.wordpress.org/Template_Hierarchy

 *

 * @package WordPress

 * @subpackage Twenty_Ten

 * @since Twenty Ten 1.0

 */
get_header();
?>

<div class="container_24">

    <div class="grid_6">

        <?php	 	 $category_id = get_cat_ID('Buzz'); ?>

        <div class="recent-posts">

            <div  class="grid_5 postheader"> <h2>Services </h2> </div><br />

            <ul id="services_home">
                <li><a href="<?php	 	 echo wt_get_permalink_by_name('photo-gallery'); ?>">Photography</a></li>


                <li><a href="<?php	 	 echo wt_get_permalink_by_name('videos'); ?>">Web Video Production</a></li>


                <li><a href="<?php	 	 echo wt_get_permalink_by_name('equipment-rental'); ?>">Equipment Rental</a></li>


                <li><a href="<?php	 	 echo wt_get_permalink_by_name('space-rental'); ?>">Space Rental</a></li>


                <li><a href="<?php	 	 echo wt_get_permalink_by_name('production-crew'); ?>">Production Crew</a></li>
            </ul>
        </div>

    </div>
<div class="grid_9 alpha omega">

       

                            <div class="grid_8 news-posts">

                                <div class="grid_8 postheader"><h2>the Studio </h2></div>

                                <div class="grid_8">

                                    anar studios is a .....

                        </div>

                    </div><!-- End Recent Posts -->



                </div>
    <div class="grid_9">

        <?php	 	 $category_id = get_cat_ID('Events'); ?>

        <div class="grid_8 news-posts alpha omega">

            <div  class="grid_8 postheader"><h2>Events</h2></div>

            <div  class="grid_8 ">

                <ul>

                    <?php	 	
                    $postslist = get_posts('numberposts=3&order=DESC&cat=' . $category_id);
                    foreach ($postslist as $post) : setup_postdata($post);

                        $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), thumbnail);
                    ?>

                        <li>

                            <div id="postthumb" class="grid_1 buzzthmb">

                                                                            <!--<a href="<?php	 	 the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php	 	 the_title(); ?>"><img src="<?php	 	 echo bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php	 	 echo $thumbnail[0]; ?>&h=150&w=150&zc=1" alt="<?php	 	 the_title(); ?>" width="150" height="150" /></a> -->

                                <img src="<?php	 	 echo $thumbnail[0]; ?>" width="40" height="40" />

                            </div>

                            <div id="postexcerpt" class="grid_6">

                            <?php	 	
                            //the_excerpt();//the_content('Read the rest of this entry &raquo;');

                            $permalink = get_permalink($post->ID);

                            echo limit_words(get_the_excerpt(), '10', $permalink, 'read more &raquo;');
                            ?>

                        </div>

                                                <!--<a title="Post: <?php	 	 the_title(); ?>" href="<?php	 	 the_permalink(); ?>"><?php	 	 the_title(); ?> &raquo;</a>-->

                        <div class="clear"> </div>

                    </li>

                    <?php	 	 endforeach; ?>

                        </ul>

                    </div>

                </div><!-- End Recent Posts -->

            </div>

            

            </div>







<?php	 	 get_footer(); ?>