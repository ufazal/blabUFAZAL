

﻿<?php	 	

/*

  Template Name: Buzz

 */

?>

<?php	 	 get_header(); ?>

<div class="container_24">
    <div class="grid_17">

        <h1><?php	 	 wp_reset_query();the_title(); ?></h1>

        <?php	 	

        global $post;

        $the_id = $post->ID;

        $the_title = get_the_title($the_id);

        rewind_posts();

        $category_id = get_cat_ID($the_title);

        query_posts('cat=' . $category_id . '&order=ASC');

        ?>

        <?php	 	

        if (have_posts ()) :

            $i = 0;

            while (have_posts ()) : the_post();

                $category = get_the_category();

        ?>



        <?php	 	

                $id = get_the_id();

                $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($id), thumbnail);

        ?>

                <div class="grid_2">

                	<div style="width:60px; height:60px; overflow:hidden"><img src="<?php	 	  echo $thumbnail[0]; ?>" width="50" height="50" /></div>

                </div>







                <div class="grid_14 buzzdetail">

                    <h2><?php	 	 the_title(); ?></h2>







            <?php	 	

                $permalink = get_permalink($post->ID);

                echo limit_words(get_the_excerpt(), '600', $permalink, '');

            ?>





            </div>

            <div class="clear"> </div>



<?php	 	 endwhile;

            endif; ?>

            <div class="grid_6">&nbsp; </div>

<?php	 	 //echo  get_category_link( $cat->cat_ID );  ?>

            <!-- Print a link to this category -->

            <div class="grid_13">

            <?php	 	

            // Get the URL of this category

            $category_link = get_category_link($category_id);

            ?>

            <a href="<?php	 	 echo $category_link; ?>" title="Category Name">More..</a>

        </div>

        


 <div class="clear"> </div>




    <div class="grid_17">

        <h1><?php	 	 wp_reset_query(); ?> Upcoming Events</h1>

        <?php	 	

            global $post;

            $the_id = $post->ID;

            $the_title = get_the_title($the_id);

            rewind_posts();

            $category_id = get_cat_ID('Events');



            query_posts('cat=' . $category_id . '&order=ASC');

        ?>

        <?php	 	

            if (have_posts ()) :

                $i = 0;

                while (have_posts ()) : the_post();

                    $category = get_the_category();

                    $i++;

                    if ($i > 2

                        )break;

        ?>



        <?php	 	

                    $id = get_the_id();

                    $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($id), thumbnail);

        ?>

                    <div class="grid_2">

                     	<div style="width:60px; height:60px; overflow:hidden"><img src="<?php	 	  echo $thumbnail[0]; ?>" width="50" height="50" /></div>

                    </div>







                    <div class="grid_14 eventdetail" >

                        <h2><?php	 	 the_title(); ?></h2>



            <?php	 	

                    $permalink = get_permalink($post->ID);

                    echo limit_words(get_the_excerpt(), '600', $permalink, '');

            ?>









                </div>

                <div class="clear"> </div>



<?php	 	 endwhile;

                endif; ?>

                <div class="grid_6">&nbsp; </div>

                <div class="grid_12">



                    <a href="<?php	 	 echo get_category_link($category_id); ?>"><?php	 	 echo "More .."; ?></a>

                </div>

                <div class="clear"> </div>

</div></div>
    <?php	 	 include(TEMPLATEPATH . '/contact_ sidebar.php'); ?>

            





        </div >





<?php	 	 get_footer(); ?>