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
        <section id="header">
            <!-- Top Banner -->
            <div class="container-fluid">
                <div class="top-banner-container" style="<?php bl_hero_image(); ?>">
                    <div class="top-banner">                        
                        <div class="wow fadeIn logo">
                            <h1>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-logo.png" alt="blueliner" width="64" height="86" />
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

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <?php
                    wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'header-menu',
                        'menu_class'        => 'nav navbar-nav navbar-right',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                    ); ?>
                </div><!-- /.container -->
            </nav><?php 
            endif; ?>
            <!-- Header Menu - End -->
            
        </section>
        <!-- HEADER - End -->
        <section id="blog-page">            
        <div class="container-fluid">
            <div class="container">
                
                <div class="blog-top wow fadeInUp">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 text-left">                                
                            <div class="dropdown" id="dd-category">
                                <?php
                                $bloCats = array();
                                $selected_cat = '';

                                $categories = get_categories(array('parent' => '1', 'hide_empty' => true));
                                foreach ($categories as $category) {
                                    if($category->slug != 'featured-post' ) {
                                        $bloCats[$category->slug] = $category->name;
                                    }
                                }
                             
                                if( isset($_GET['cat']) && !empty($_GET['cat']) ) {
                                  $selected_cat = $_GET['cat'];  
                                }
                                // generate list of categories
                                ?>
                                <a data-toggle="dropdown" class="box btn btn-default dropdown-toggle" href="javascript:void" title=""><?php echo !empty($selected_cat) ? $bloCats[$selected_cat] : 'Categories'; ?> <i class="fa fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                <?php
                                foreach ($bloCats as $key => $cat) {
                                    if($key != $selected_cat ) {
                                        echo '<li><a href="'. esc_url(home_url('/blog/')) . '?cat=' . $key .'">', $cat, "</a></li>";
                                    }
                                }
                                ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 text-right">
                            <div class="dropdown" id="dd-search">
                                <a data-toggle="dropdown" class="box btn btn-default dropdown-toggle" href="javascript:void" title="">Blog Search <i class="fa fa-search-plus"></i></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <form class="navbar-form" method="get" action="<?php echo home_url( '/blog/' ); ?>" role="search">
                                            <div class="form-group">
                                                <input type="text" id="search" class="form-control" name="s" value="<?php echo the_search_query(); ?>" placeholder="Search" />
                                                <button type="submit" class="btn btn-primary">Go</button>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
