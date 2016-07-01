<?php /**
 * @author madars.bitenieks
 * @copyright 2011
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="author" content="madars bitenieks" />
    <meta name="language" content="english" />                     
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="google-site-verification" content="n-2wmXiHg4-w4aWIGCQMpnOzJj-FVI43y5sxSsmHfE4" />

    <title>
        <?php 
            global $page, $paged; wp_title( '', true, 'right' ); bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' );
            if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";
        ?>
    </title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--TOP BACKGROUND --> 
<div id="background">

<!--TOP LAYOUT --> 
<div id="top-layout">
    
    <!--TOP AREA --> 
    <div id="top-area">
        
         <!--TOP HEADER --> 
         <div id="header">
           
            <?php if (get_option('of_enable_logo_image')=="true" && get_option("of_logo_image")){?>
            
            <div id="logo" <?php if ( get_option('of_logo_image') ) { ?> style="background:  no-repeat center left url(<?php { echo get_option('of_logo_image'); } }?>);">
                
                 <a href="<?php bloginfo('url');?>"></a>
            
            </div><!--END LOGO IMG -->
            
            <?php } else {?>
            
            <div id="logo">
                
                <h1><a href="<?php bloginfo('url');?>"><?php echo bloginfo( 'name' ); ?></a></h1>
            
            </div><!--END LOGO TEXT -->
            
            <?php } ?>
            
            <div class="header_menu"> 
            
				<?php wp_nav_menu( array('menu' => 'main' , 'container' =>false, 'menu_class' => 'nav', 'echo' => true,'before' => '','after' => '','link_before' => '','link_after' => '', 'depth' => 0)); ?>
                <?php /*?><?php wp_nav_menu( array('menu' => 'primaryp' )); ?><?php */?>                
                            
            </div><!--END MENU -->
  
            <div class="clear"></div>  
        
        </div><!--END HEADER -->    
       
   </div><!-- END TOP AREA --> 

<?php 

$title_key="madza_title_type"; 
$title=get_post_meta($post->ID, $title_key, true); 

$custom_key="madza_custom_text";
$custom_text=get_post_meta($post->ID, $custom_key, true);
$title_type_simple="Title only";
$title_type_custom="SubTitle only";

$title_type_simple_custom="Title & SubTitle text";
$key="madza_header_type"; 

$header=get_post_meta($post->ID, $key, true); 
$url="madza_header_url";

$img_url=get_post_meta($post->ID, $url, true);
$image_slider="Nivo Slider";
$image_url="Image from URL";
$bx_slider="BX Slider";
$orbit_slider="Orbit Slider";

if(get_option('slides')) {
	$slides = get_option('slides');
} else {
	$slides = false;	
}

?>

<?php

if ($header==$image_slider) { ?>
        
        <!--If Slider Images --> 
        
        <div id="header_image_silder">
            
            <div id="slider_frame">
            
                <?php include (TEMPLATEPATH . '/includes/sliders/nivo-slider.php');  ?>     
            
            </div>
            
        </div>       
        
<?php } else if($header==$image_url) { ?>

        <!--If URL Image --> 

        <div id="header_image_url">
        
            <div id="header_image_url_in">
            
                <?php if ($img_url=""){ } else {  ?><img src="<?php echo get_post_meta($post->ID, $url, true);?>" alt="" /> <?php } ?>
            
            </div>
        
        </div>              
        
<?php } else if($header==$bx_slider) { ?>

        <!--If URL Image --> 

        <div id="header-image-bx-silder">
        
            <div id="bx-slider-frame">
            
                <?php include (TEMPLATEPATH . '/includes/sliders/bx-slider.php');  ?>
            
            </div>
        
        </div>              
        
<?php } else if($header==$orbit_slider) { ?>

        <!--If URL Image --> 

        <div id="header-image-orbit-silder">
        
            <div id="orbit-slider-frame">
            
                <?php include (TEMPLATEPATH . '/includes/sliders/orbit-slider.php');  ?>
            
            </div>
        
        </div>              
        
<?php } else {?>
        
         <!--If Not Header Image -->
        
        <div id="not_header_image">
        
        <?php if ($img_url=""){ ?><img src="<?php echo get_post_meta($post->ID, $url, true);?>" alt="" /> <?php } else { } ?>
        
        </div>
        
<?php } ?>

<!-- TITLE -->
<div class="title_frame_top">

    <?php
    
        if ($title==$title_type_simple) { 
    
    ?>
    
        <div id="header-title">
        <div style="float:right; padding:2px"><a href="<?php bloginfo('url');?>/company/presidents-blog/"><img src="<?php echo bloginfo( 'template_url' ); ?>/images/rss-icon.png" border="0"></a> <a href="http://www.youtube.com/user/COSSERP"><img src="<?php echo bloginfo( 'template_url' ); ?>/images/youtube-icon.png" border="0"></a></div>
         <div>   <h1><?php the_title(); ?></h1></div> 
            
        <div class="clear"></div>
        
        </div>        
    
    <?php 
        
        } else if ($title==$title_type_custom) { 
    
    ?>          
    
        <div id="header-title">
        
            <div id="header-subtitle"><?php echo get_post_meta($post->ID, $custom_key, true);?></div>
            
        <div class="clear"></div>
        
        </div>  
    
    <?php 
        
        } else if ($title==$title_type_simple_custom) { 
    
    ?> 
    
        <div id="header-title">
        
            <h1><?php the_title(); ?></h1>
            
            <div id="header-subtitle" ><?php echo get_post_meta($post->ID, $custom_key, true);?></div>
            
        <div class="clear"></div>
        
        </div>  
    
     <?php }  else  if (is_single()){
     
    
    ?> 
    
        <div id="header-title">
        
            <h1><?php the_title(); ?></h1>
            
            <div id="header-subtitle" ><?php the_time('jS F Y') ?> | <?php the_category(', ') ?></div>
            
            
        <div class="clear"></div>
        
        </div>  
    
     <?php }        
     
    if ( is_front_page() ) {} else { ?>
            
        <div id="title_frame_bottom_objects"> 
          
                <div id="title_left">
                
                        <?php if ( is_front_page() ) { ?>
                        			
                            <?php } else { edit_post_link( __( 'Edit This Page', 'Gooseo' ), '<div id="edit-link"><span class="edit-link">', '</span></div>' );  ?>
                           
                            <?php if ( get_option('of_breadcrumb')=="true"){
                                
                                    if ( function_exists('breadcrumbs_plus')){?>
                                
                                        <div id="breadcrumb">
                                            
                                        <h2 class="breadcrumph2">    <?php breadcrumbs_plus( $args ); ?> </h2>
                                        
                                            <div class="clear"></div>
                                        
                                        </div><!--END BREADCRUMB -->
                           
                            <?php  } } ?><!--END breadcrumb_on -->
                                   
                        <?php } ?>
                        
                </div>
                
                <?php if (get_option("of_search")=="true" ) { ?>
                
                <!--SEARCH FORM -->
                <div id="title_right">
                
                    <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
                    
                        <div id="search_icon"></div>
                        
                        <input type="text" value="<?php the_search_query(); ?>" name="s" id="s3" class="search_input3" />
                        
                        <div id="searchsubmit_div_3"><input type="submit" id="searchsubmit3" value="" class="search_submit3"/></div>
                       
                      
                    </form>
                    
                  <div class="clear"></div>  
                  
                </div><!--END SEARCH FORM -->
                
                <?php } ?>
                
            <div class="clear"></div>  
            
        </div>
        
    <?php }  ?>    
   
</div> <div class="title_frame_bottom"></div><!--END TITLE -->

</div> <!--END TOP LAYOUT -->

</div><!--END TOP BACKGROUND --> 

<!-- ******************** CONTENT START ******************** -->
<div id="content-full">         

<div id="content">