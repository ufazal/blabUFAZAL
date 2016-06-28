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
        <meta name="keywords" content="Blueliner,Digital Marketing">
        <meta name="author" content="Blueliner">
	<?php wp_head(); ?>        
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-291276-7', 'auto');
  ga('send', 'pageview');

</script>    
</head>

    <body <?php body_class(); ?>>        
        
        <!-- HEADER -->
        <section id="header">
            <!-- Top Banner -->
            <div class="container-fluid">
                <div class="top-banner-container" style="<?php bl_hero_image(); ?>">
                    <div class="top-banner">                        
                        <div class="wow fadeIn logo">
                            <h1>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-logo-large.png" alt="blueliner" width="140" height="172" />
                                <a href="<?php echo esc_url(home_url('/')); ?>" title="Blueliner">Blueliner</a>
                            </h1>
                        </div>                              
                        <h2 class="wow fadeInUp">Exploring outside the box</h2>
                        <p class="wow fadeInDown"><?php bloginfo( 'name' ); ?></p>                            
                    </div>                    
                </div>                
            </div>
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