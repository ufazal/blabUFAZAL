<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage blueliner-responsive
 * @since blueliner 1.0
 */
?>

<!-- FOOTER -->
        <section id="footer">
            
            <div class="container">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a class="wow slideInUp" id="btn-location" href="#explore-location" aria-controls="explore-location" role="tab" data-toggle="tab">Explore our location</a>
                    </li>
                    <li role="presentation" class="pull-right">
                        <a class="wow slideInUp" id="btn-website" href="#explore-website" aria-controls="explore-website" role="tab" data-toggle="tab">Explore website</a>
                    </li>
                </ul>
            </div>            
            
            <div class="tab-content">
                
                <!-- Explore Location -->
                <div role="tabpanel" class="tab-pane active" id="explore-location">
                    <div class="explore-location-container">
                        <div class="container">
                            <div class="explore-location">
                                <div class="row">
                                    <div class="col-md-3">
                                        <address>
                                            <?php
                                            $headquarter_address = blr_get_option( 'headquarter_address' );  ?>
                                            <strong class="text-uppercase">Headquarters</strong><br>
                                            <?php echo $headquarter_address; ?>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Explore Location - End -->

                <!-- Explore Website -->
                <div role="tabpanel" class="tab-pane" id="explore-website">
                    <div class="explore-website-container">
                        <div class="container">
                            <div class="explore-website">
                                <div class="row">
                                    <div class="col-max-415 col-xs-4 col-sm-3 col-md-3">
                                        <h4 class="text-uppercase">Agency</h4>
                                        <?php 
                                        wp_nav_menu( array(
                                            'menu_class'     => 'animated slideInUp',
                                            'theme_location' => 'footer1',
                                        ) ); ?>
                                    </div>
                                    <div class="col-max-415 col-xs-4 col-sm-3 col-md-3">
                                        <h4 class="text-uppercase">Practice Areas</h4>
                                        <?php 
                                        wp_nav_menu( array(
                                            'menu_class'     => 'animated slideInUp',
                                            'theme_location' => 'footer2',
                                        ) ); ?>
                                    </div>
                                    <div class="col-max-415 col-xs-4 col-sm-3 col-md-3">
                                        <h4 class="text-uppercase">Portfolio</h4>
                                        <?php 
                                        wp_nav_menu( array(
                                            'menu_class'     => 'animated slideInUp',
                                            'theme_location' => 'footer3',
                                        ) ); ?>
                                
                                    </div>
                                    <div class="col-max-415 col-xs-4 col-sm-3 col-md-3">
                                        <h4 class="text-uppercase">B-Labs</h4>
                                        <?php 
                                        wp_nav_menu( array(
                                            'menu_class'     => 'animated slideInUp',
                                            'theme_location' => 'footer4',
                                        ) ); ?>
                                  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Explore Website - End -->
                                
            </div>
            
            <!-- Footer Menu -->
            <div class="navbar-container">
                <div class="container">
                    <div class="row">
                        <!-- Navbar -->
                        <div class="col-xs-12 col-md-9">                        
                            <?php if ( has_nav_menu( 'footer' ) ) : ?>
                            <nav class="navbar navbar-inverse">
                                <div class="container">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#footer-menu">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png" alt="blueliner" width="47" height="63" /></a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="footer-menu">                        
                                        <?php
                                            wp_nav_menu( array(
                                                'menu_class'     => 'nav navbar-nav navbar-left',
                                                'theme_location' => 'footer',
                                            ) );
                                        ?>
                                    </div><!-- /.navbar-collapse -->
                                </div><!-- /.container -->
                            </nav><?php 
                            endif; ?>                        
                        </div>
                        <!-- Navbar - End -->

                        <!-- Copyright -->
                        <div class="col-xs-12 col-md-3">
                            <?php
                            $copyright = blr_get_option( 'copyright' ); ?>
                            <p><?php echo $copyright; ?></p>
                        </div>
                        <!-- Copyright - End -->

                    </div>
                </div>
            </div>    
            <!-- Footer Menu - End -->
            
        </section>
        <!-- FOOTER - End -->
        
        <!-- JAVASCRIPTS -->
        <?php wp_footer(); ?>
    </body>
</html>
