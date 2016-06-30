

<?php	 	

/*

Template Name: clients

*/

?>

<?php	 	

    /*

        Template Name: Projects

    */

?>

<?php	 	 get_header(); ?>

<div class="container_24">

    <div class="grid_17">



        <h1 style="color:#333333">

            <?php	 	 wp_reset_query();

            the_title(); ?>

        </h1><br />
<br />


        <?php	 	

			wp_reset_query();

			global $post;

                        $the_id = $post->ID;

                       // $the_title 	=  get_the_title($the_id);

                         $the_title 	= 'portfolio';

                        $post_type 	= 'post';

			rewind_posts();

			$category_id 	= get_cat_ID($the_title);

                         // In this example, the parent category ID is 3

                         $subcategories = get_categories('child_of='.$category_id);

                               ?>

        <?php	 	

            //if (have_posts ()) :

                $i = 0;

                $subcat_array = array();

                foreach ($subcategories as $subcat)

                    {

                    //$subcat_array[] = '-' . $subcat->cat_ID;

                    //$category = get_the_category();

                   // echo $category = get_the_category();



        ?>

        

        <div class="grid_17 buzzdetail">

             <?php	 	 //$permalink = get_permalink($post->ID);?>

             <h2><a href="<?php	 	 echo get_category_link( $subcat->term_id ) ; ?>"><?php	 	 echo $subcat->name; ?></a></h2>

           

        </div>

        <div class="clear"> </div>

        <?php	 	 } //endwhile;?>

        <?php	 	 //endif; ?>

   </div>

</div >

<?php	 	 get_sidebar(); ?>

<?php	 	 get_footer(); ?>