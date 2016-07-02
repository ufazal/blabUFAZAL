<?php
/**
 * Template Name: WooCommerce Shop Page
 *
 * @package Thinker
 */
?>
<?php get_header( 'custom' ); ?>
    <div class="page hfeed site center">
        <div class="main site-main">
            <div class="c-pass">
            <div class="f-center">
                <span class="pass-small red"></span>
                <span class="pass-small purple"></span>
                <span class="pass-small blue"></span>
                <span class="pass-small green"></span>
                <span class="pass-small yellow"></span>
            </div>
            </div>
            <h1 class="page-title">
                <?php the_title(); ?>
            </h1>
        </div><!-- #main -->
    </div><!-- .page -->
    <div id="pagewoocommerce" class="page hfeed site defaulttemplate">
        <div class="main site-main">
          <div id="content-wrap">
            <?php woocommerce_content(); ?>
          </div><!-- #content-wrap -->
        </div><!-- #main -->
    </div><!-- #pagewoocommerce -->
<?php get_footer(); ?>