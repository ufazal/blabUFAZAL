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
 * @ since 1.0
 */

get_header(); ?>
    <section id="default-page">    
        <div class="container">
            <?php
            // Start the loop.
            while ( have_posts() ) : the_post();
                // Include the page content template.
                get_template_part( 'templates/content', 'page' );
            // End the loop.
            endwhile;
            ?>
        </div>
    </section>
    <?php do_action( 'wds_page_builder_load_parts' ); ?>
    
<?php get_footer(); ?>        
        