

<?php	 	

/*

  Template Name: Category Main

 */

?>

<?php	 	 get_header(); ?>

<div class="container_24">

    <div class="grid_24">

        <h1> <?php	 	 wp_reset_query();// the_title(); ?> </h1>

        <?php	 	

            wp_reset_query();

            global $post;

            $the_id = $post->ID;

            $the_title = get_the_title($the_id);

            $post_type = ($the_title == 'Buzz') ? 'post' : 'page';

            rewind_posts();

            /*if ($the_title == 'Buzz') {

                $category_id = get_cat_ID($the_title);

                //query_posts('cat=' . $category_id . '&order=ASC');

                  query_posts('category_name=portfolio&posts_per_page=20&order=ASC');

            } else {

              query_posts('post_parent=' . $the_id . '&post_type=' . $post_type . '&order=ASC');

            }*/

            //query_posts('category_name=portfolio&posts_per_page=20&order=ASC');

        ?>

       

       <?php	 	

           if (have_posts ()) :

              $i=0;

               while (have_posts ()) : the_post();

                $category = get_the_category();

                $permalink = get_permalink($post->ID);

              // echo $i++;

        ?>

                <div class="grid_6 alpha omega" style="height:420px; overflow:hidden">

                    <div class="grid_5">

                        <div style="overflow:hidden; height:120px; margin-bottom:10px">

                            <a href="<?php	 	 echo $permalink;?> "> <?php	 	 the_post_thumbnail('post_thumb'); ?></a>

                        </div>

                    </div>

                    <div class="grid_5 buzzdetail">

                        <h2> <a href="<?php	 	 echo $permalink;?> "><?php	 	 the_title(); ?></a></h2>

                        <?php	 	

                           

                            echo limit_words(get_the_excerpt(), '1200', $permalink, '');

                        ?>

                    </div>

                </div>

                <?php	 	 endwhile; ?>

                <?php	 	 endif; ?>

                <div class="navigation">

                    <?php	 	 posts_nav_link(' · ', 'previous page', 'next page'); ?>

		</div>



    </div>

</div>

<?php	 	 get_footer(); ?>