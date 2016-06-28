<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage blueliner-responsive
 * @since blueliner 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Blueliner, a Digital Marketing company. Our philosophy and expertise are best represented by our work.">
        <meta name="keywords" content="Blueliner,Digital Marketing">
        <meta name="author" content="Blueliner">  
    <?php wp_head(); ?>        
    </head>

    <body <?php body_class(); ?>>        
        
        <!-- HEADER -->
        <section id="header"><?php
        // Start the loop.
        while ( have_posts() ) : the_post(); 
            $post_id = get_the_ID();
            $allpage_title = get_post_meta( $post_id, '_services_l_manager_title', true );
            $hero_image = get_post_meta( $post->ID, '_services_l_manager_banner_img', true );

            if(empty($hero_image)) {
                $hero_image = get_template_directory_uri() . '/assets/images/practice-preas-banner.jpg'; 
            } ?>
            <section id="practice-areas-banner">            
                <div class="container-fluid">
                    <div class="pa-banner-container" style="background-image: url('<?php echo $hero_image; ?>');">                        
                        <div class="pa-banner">
                        <?php 
                            if($allpage_title): ?>
                            <h2><?php echo $allpage_title; ?></h2>
                            <?php
                            else: ?>
                            <?php the_title( '<h2>', '</h2>' ); ?>
                            <?php
                            endif; ?>
                        </div>
                    </div>
                </div>            
            </section>
            <!-- Banner - End -->

            <?php
            endwhile; ?>
            <!-- Top Banner - End -->

            <!-- Header Menu -->
            <?php 
            if ( has_nav_menu( 'primary' ) ) : ?>
            <nav class="navbar navbar-inverse">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button><?php
                        $logo = blr_get_option( 'logo' );
                        if( ! empty( $logo ) ) : ?>  
                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $logo; ?>" alt="blueliner" width="199" height="57" /></a>
                        <?php endif; ?>  
                    </div>
                    <div class="collapse navbar-collapse" id="header-menu">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <?php
                        wp_nav_menu( array(
                            'menu'              => 'primary',
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                            'container'         => false,
                            'menu_class'        => 'nav navbar-nav navbar-right',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                        ); ?>
                        <form class="navbar-form" method="get" action="<?php echo home_url( '/' ); ?>" role="search">
                            <div class="search-container">
                                <div class="search-form pull-left">
                                    <input id="search" name="s" value="" type="text" class="form-control off" style="" placeholder="Search">
                                </div>
                                <div class="search-btn pull-right">
                                    <span class="glyphicon glyphicon-search"></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.container -->
            </nav><?php 
            endif; ?>
            <!-- Header Menu - End -->
            
        </section>
        <!-- HEADER - End -->
