<?php
/**
 * The Header for our theme.
 *
 *
 * @package WordPress
 * @subpackage Foundation
 * @since foundation 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'bluelinerfoundation' ), max( $paged, $page ) );

	?></title>
<?php $bodyclass = ""; ?>


<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/styles/color.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/s3slider.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/jqfancytransitions.css" />

<link rel="alternate" id="templateurl" href="<?php echo get_template_directory_uri(); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />


<?php

	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>




<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        			// -->
<!-- ////////////////////////////////// -->
<script type="text/javascript">
	 Cufon.replace('#side h1') ('#side h2') ('#side h3') ('h4') ('h5') ('h6') ('.navigation ') ('.schedule-title')('.pagenavi a', { hover:true, fontFamily: 'Steelfish-Bold' });
	 Cufon.replace('#topnav li a', { hover:true, fontFamily: 'Steelfish-Regular' });
</script>


<script type="text/javascript">
var $jts = jQuery.noConflict();

$jts(document).ready(function(){
	
	
$jts(".clientbox").equalHeights();
	
	//Widget cycle
	$jts('.boxslideshow').cycle({
		timeout: 6000,  // milliseconds between slide transitions (0 to disable auto advance)
		fx:      'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...            
		pause:   0,	  // true to enable "pause on hover"
		cleartypeNoBg:false, // set to true to disable extra cleartype fixing (leave false to force background color setting on slides)
		after:onAfter,
		pauseOnPagerHover: 0
	});
	
	$jts('.boxslideshow2').cycle({
		timeout: 6000,  // milliseconds between slide transitions (0 to disable auto advance)
		fx:      'scrollVert', // choose your transition type, ex: fade, scrollUp, shuffle, etc...            
		pause:   0,	  // true to enable "pause on hover"
		cleartypeNoBg:true, // set to true to disable extra cleartype fixing (leave false to force background color setting on slides)
		after:onAfter,
		pauseOnPagerHover: 0 // true to pause when hovering over pager link
	});
	
	function onAfter(curr, next, opts, fwd){
	    //get the height of the current slide
	    var $ht =  $jts(this).height();
		
	    //set the container's height to that of the current slide
	    $jts(this).parent().animate({height: $ht});
	}
	
	//jQuery tab
	$jts(".tab-content").hide(); //Hide all content
	$jts("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$jts(".tab-content:first").show(); //Show first tab content
	//On Click Event
	$jts("ul.tabs li").click(function() {
		$jts("ul.tabs li").removeClass("active"); //Remove any "active" class
		$jts(this).addClass("active"); //Add "active" class to selected tab
		$jts(".tab-content").hide(); //Hide all tab content
		var activeTab = $jts(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$jts(activeTab).fadeIn(200); //Fade in the active content
		return false;
	});
	
	//jQuery toggle
	$jts(".toggle_container").hide();
	$jts("h2.trigger").click(function(){
		$jts(this).toggleClass("active").next().slideToggle("slow");
	});

	
	// equalize boxes
	
	
	 	$jts("#foo1").carouFredSel({
	auto	: {
		items 			: 5,
		duration		: 7500,
		easing			: "linear",
		pauseDuration	: 0,
		pauseOnHover	: "immediate"
	}
});
	
});
</script>


</head>

<body <?php body_class($bodyclass); ?>>
				<div id="top-wrap">
                <div id="top">
					<div id="top-left">
						
							<div id="logo">
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'bluelinerfoundation' ) ); ?>" >
									<img src="<?php echo get_stylesheet_directory_uri() . "/images/logo.png" ?>" alt="" />
								</a>
							</div><!-- end #logo -->
					
					</div><!-- end #top-left -->
					<div id="top-right">
<a href="mailto:info@fullyaliveleadership.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/i-phoneemail.png" alt="linked in"    /></a>

					</div><!-- end #top-right -->
                    <div id="top-tagline"></div><!-- end #top-tagline -->
				</div><!-- end #top -->
                </div><!-- end #top-wrap -->
				<div class="clear"></div>
		<div id="frame"><div id="top-navigation">
					<?php wp_nav_menu( array(
						  'container'       => 'ul', 
						  'menu_class'      => 'lavaLamp',
						  'menu_id'         => 'topnav', 
						  'depth'           => 0,
						  'sort_column'    => 'menu_order',
						  'fallback_cb'     => 'nav_page_fallback',
						  'theme_location' => 'mainmenu' 
						  )); 
					?>
			  </div><!-- end #top-navigation -->
			<div id="container">
			<div class="pad_container">

				
			<div class="clear"></div><!-- clear float -->  
				



<?php
if ( is_front_page() ) {

	include(TEMPLATEPATH . '/slider.php');

} else if ( is_page_template('page-clients.php') ) {

	include(TEMPLATEPATH . '/napoleonheader.php');

} else if ( is_page_template('page-speaking.php') ) {

	include(TEMPLATEPATH . '/napoleonheader.php');

}else {
	// Continue with normal Loop
	
	// ...
}
?>


<?php
//if (is_front_page() ) {
//	include(TEMPLATEPATH . '/slider.php');
//}else if ( !is_home() && is_page() ) {
//	include(TEMPLATEPATH . '/pageheader_images.php');
//} elseif ( is_category() ) {
//	include(TEMPLATEPATH . '/header_images.php');
//} else {
//	// Continue with normal Loop
//	
//	// ...
//}
//?>














            
			<div id="header-bar"style="margin-bottom:20px;">
<div id="header-left">  <?php if ( ! dynamic_sidebar( 'programpdf-widget' ) ) : ?>
  <?php endif; // end general widget area ?></div>
  
<div id="header-right">
    <ul class="sn">
      <li><a href="https://twitter.com/#!/FullyAliveLead" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/i-twitter.png" alt="twitter"    /></a></li>
      <li><a href="https://www.facebook.com/FullyAliveLeadership" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/i-fb.png" alt="facebook"    /></a></li>
      <li><a href="http://www.youtube.com/user/FullyAliveLeadership?feature=plcp" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/i-ytube.png" alt="youtube"    /></a></li>
      <li><a href="http://www.linkedin.com/in/jackaltschuler" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/i-linked.png" alt="linked in"    /></a></li>
    </ul>
  </div>
  <!-- end #top-right --></div>