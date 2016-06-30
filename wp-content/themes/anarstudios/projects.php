

<?php	 	
    /*
        Template Name: Projects
    */
?>
<?php	 	 get_header(); ?>
<div class="container_24">
    <div class="grid_17">

        <h1>
            <?php	 	 wp_reset_query();
            the_title(); ?>
        </h1>
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
        <div class="grid_2">
             <div style="width:60px; height:60px; overflow:hidden">
                <?php	 	 the_post_thumbnail('thumbnail'); ?>
            </div>
        </div>
        <div class="grid_14 buzzdetail">
            <h2><?php	 	 the_title(); ?></h2>
            <?php	 	
                $permalink = get_permalink($post->ID);
                 echo limit_words(get_the_excerpt(), '600', $permalink, '');
            ?>
        </div>
        <div class="clear"> </div>
        <?php	 	 endwhile;?>
        <?php	 	 endif; ?>
   </div>
</div >
<?php	 	 get_footer(); ?>