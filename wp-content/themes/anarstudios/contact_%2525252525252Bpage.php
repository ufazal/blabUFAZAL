

<?php	 	
/**
 * Template Name: contact page
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
get_header();
wp_reset_query();
$list_pages = '';
?>
<div id="container">
    <div id="content" role="main">
        <?php	 	 if (have_posts ())
            while (have_posts ()) : the_post(); ?>

                <div id="post-<?php	 	 the_ID(); ?>" <?php	 	 post_class(); ?>>

                    <div class="entry-content">
                <?php	 	 //$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), thumbnail); ?>

                <?php	 	 //if (count($thumbnail) > 0): ?>
               
                <?php	 	 //endif; ?>

                <?php	 	 the_content(); ?>
                <?php	 	 // wp_link_pages(array('before' => '<div class="page-link">' . __('Pages:', 'twentyten'), 'after' => '</div>')); ?>
                <?php	 	 edit_post_link(__('Edit', 'twentyten'), '<span class="edit-link">', '</span>'); ?>
            </div><!-- .entry-content -->
        </div><!-- #post-## -->

        <?php	 	 //comments_template( '', true );   ?>

        <?php	 	 endwhile; ?>

        </div><!-- #content -->
    </div><!-- #container -->

<?php	 	 //get_sidebar();  ?>
<?php	 	 include(TEMPLATEPATH . '/contact_ sidebar.php'); ?>

<?php	 	 get_footer(); ?>