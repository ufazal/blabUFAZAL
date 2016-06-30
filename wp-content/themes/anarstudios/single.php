

<?php	 	
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
get_header();
?>
<?php	 	 wp_reset_query(); ?>
<?php	 	
$category = get_the_category();


$currentcat = $category[0]->cat_ID;
$cat_name = $category[0]->cat_name;
?>

<div class="container_24">
    <div class="grid_17">



<?php	 	
/*if ($cat_name == 'Portfolio') :
    include(TEMPLATEPATH . '/video_details.php');

else :*/
?>

<?php	 	 if (have_posts ())
        while (have_posts ()) : the_post(); ?>

            <!-- <div id="nav-above" class="navigation">
                 <div class="nav-previous"><?php	 	 previous_post_link('%link', '<span class="meta-nav">' . _x('&larr;', 'Previous post link', 'twentyten') . '</span> %title'); ?></div>
                 <div class="nav-next"><?php	 	 next_post_link('%link', '%title <span class="meta-nav">' . _x('&rarr;', 'Next post link', 'twentyten') . '</span>'); ?></div>
             </div> !-->
            <!-- #nav-above -->


            <div id="post-<?php	 	 the_ID(); ?>" <?php	 	 post_class(); ?>>
                <h1 class="entry-title"><?php	 	 the_title(); ?></h1>

                <!--<div class="entry-meta">
<?php	 	 //twentyten_posted_on();  ?>
        </div>--><!-- .entry-meta -->

                <div class="entry-content">

                    <div class="grid_17">
                      <div style=" background:#f8f8f8; border:2px solid #ddd; margin-bottom:20px"><div style="text-align:center; padding:20px; overflow:hidden; width:620px"> <?php	 	 the_post_thumbnail('slider'); ?></div></div>
                    </div><br />

                    <div>
                        <?php	 	 the_content(); ?>
                    </div>
                <?php	 	 //wp_link_pages(array('before' => '<div class="page-link">' . __('Pages:', 'twentyten'), 'after' => '</div>')); ?>
            </div><!-- .entry-content -->



            <div class="entry-utility">
<?php	 	 //twentyten_posted_in(); ?>
                <?php	 	 edit_post_link(__('Edit', 'twentyten'), '<span class="edit-link">', '</span>'); ?>
            </div><!-- .entry-utility -->
        </div><!-- #post-## -->


        <!--<div id="share">
             <div class="addthis_toolbox addthis_default_style" addthis:url="<?php	 	 the_permalink(); ?>" style="float:right; width:305px; padding-right:4px">
                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                    <a class="addthis_button_tweet"></a>
                    <a class="addthis_counter addthis_pill_style"></a>
                </div>
                <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4d13257e6eb43ac6"></script>

        </div>-->

        <!--<div id="nav-below" class="navigation">
            <div class="nav-previous"><?php	 	 previous_post_link('%link', '<span class="meta-nav">' . _x('&larr;', 'Previous post link', 'twentyten') . '</span> %title'); ?></div>
            <div class="nav-next"><?php	 	 next_post_link('%link', '%title <span class="meta-nav">' . _x('&rarr;', 'Next post link', 'twentyten') . '</span>'); ?></div>
        </div> --><!-- #nav-below -->

<?php	 	 //comments_template( '', false );  ?>

<?php	 	 endwhile; // end of the loop.   ?>
        <?php	 	 //endif; ?>

        </div><!-- #content -->
    </div><!-- #container -->

<?php	 	 get_sidebar(); ?>
<?php	 	 get_footer(); ?>