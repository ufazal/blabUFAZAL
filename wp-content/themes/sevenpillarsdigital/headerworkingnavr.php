<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package SevenPillarsDigital
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>






<div class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container" style="margin-bottom:0px">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.html"> <img src="land/images/top-logo.jpg" width="205" height="70" alt="home"> </a>
    </div>
    <div class="navbar-collapse collapse">
    
          			
          
      <ul class="nav navbar-nav navbar-right">
       	<!-- The WordPress Menu goes here -->
			<?php wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container_class' => 'collapse navbar-collapse navbar-responsive-collapse',
					'menu_class' => 'nav navbar-nav',
					'fallback_cb' => '',
					'menu_id' => 'main-menu',
					'walker' => new wp_bootstrap_navwalker()
				)
			); ?>
      </ul>
    </div>
    <!--/.nav-collapse -->
  </div>
</div>




