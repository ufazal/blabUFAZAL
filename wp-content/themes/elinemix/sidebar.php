<?php
/**
 * @author madars.bitenieks
 * @copyright 2011
 */
?>
<?php

$sidebar_key="madza_sidebar_type"; 
$sidebar=get_post_meta($post->ID, $sidebar_key, true); 

$widget_key="madza_widget_1"; 
$widget_1=get_post_meta($post->ID, $widget_key, true); 

$widget_key="madza_widget_2"; 
$widget_2=get_post_meta($post->ID, $widget_key, true); 

$widget_key="madza_widget_3"; 
$widget_3=get_post_meta($post->ID, $widget_key, true); 

$category_key="madza_categories";
$category=get_post_meta($post->ID, $category_key, true);

$subpage_key="madza_subpage";
$subpage=get_post_meta($post->ID, $subpage_key, true);

$flickr_key="madza_flickr"; 
$flickr=get_post_meta($post->ID, $flickr_key, true); 

$twitter_key="madza_twitter"; 
$twitter=get_post_meta($post->ID, $twitter_key, true); 

$subpage_key="madza_subpages"; 
$subpage=get_post_meta($post->ID, $subpage_key, true); 

$parentpage_key="madza_parentpages"; 
$parentpage=get_post_meta($post->ID, $parentpage_key, true); 

$banners_key="madza_banner"; 
$banners=get_post_meta($post->ID, $banners_key, true); 

$banner_assigned_key="madza_banner_assigned"; 
$banner_assigned=get_post_meta($post->ID, $banner_assigned_key, true); 
 
$checkbox = "on"; 

?>
<!-- **************************************** RIGHT OR LEFT SIDEBAR **************************************** -->

<div class="<?php 

    if($sidebar=="Right"){ echo "right-sidebar"; } else if($sidebar=="Left") { echo "left-sidebar"; } 
    
    else { 
    
        if(is_page()){ echo of_page_layout(); echo "-sidebar"; }   
        
        else if (is_single()){ echo of_single_layout(); echo "-sidebar";  }    
        
        else { echo of_blog_layout(); echo "-sidebar";  }
        
        } ?>">
  <!-- SUBPAGE AREA -->
  <?php

    if($subpage==$checkbox) {
        
        if ($post->ID){
            
        $children2 = wp_list_pages("depth=1&title_li=&child_of=".$post->ID."&echo=0");
        
        $titlenamer2 = get_the_title($post->ID);
        
        }
        
        if ($children2) { ?>
  <div class="menu_categories">
    <h1><?php echo $titlenamer2; ?></h1>
    <ul><h2><?php echo $children2; ?></h2></ul>
  </div>
  <?php } } ?>
  <!-- END SUBPAGE AREA -->
  <!-- PARRENTPAGE AREA -->
  <?php

if($parentpage==$checkbox) {
    
    if($post->post_parent){
        
        $children = wp_list_pages("depth=1&title_li=&child_of=".$post->post_parent."&echo=0");
        
        $titlenamer = get_the_title($post->post_parent);
        
        }
        
        if ($titlenamer) { ?>
  <div class="menu_categories">
    <h1><?php echo $titlenamer; ?></h1>
    <ul><h2><?php echo $children; ?></h2></ul>
  </div>
  <?php } } ?>
  <!-- END PARRENTPAGE AREA -->
  <!-- CATEGORIE AREA -->
  <?php    
if (is_page()){
    if ($category==$checkbox) {?>
  <div class="menu_categories">
    <h1>Categories</h1>
    <ul><h2><?php wp_list_categories('title_li=&use_desc_for_title=0&orderby=name'); ?></h2></ul>
  </div>
  <?php  } }

else if (is_single()){

        if(get_option('of_single_categories')=="true") {?>
  <div class="menu_categories">
  <?php 
	$children = wp_list_pages("child_of=2&echo=0&title_li=");
        
    $titlenamer = get_the_title(2);
	?>
	<h1><?php echo $titlenamer; ?></h1>
    <ul><h2><?php echo $children; ?></h2></ul>
	
    <!--h1>Categories</h1>
    <ul><h2><?php //wp_list_categories('title_li=&use_desc_for_title=0&orderby=name'); ?></h2></ul-->
  </div>
  <?php  } }

else {

        if(get_option('of_blog_categories')=="true") {?>
  <div class="menu_categories">
    <h1>Categories</h1>
    <ul><h2><?php wp_list_categories('title_li=&use_desc_for_title=0&orderby=name'); ?></h2></ul>
  </div>
  <?php  } }




 ?>
  <!-- END CATEGORIE AREA -->
  <!-- WIDGET AREAS -->
  <?php     
if (is_page()){        
  if ($widget_1==$checkbox) {

    if ( is_active_sidebar( 'sidebar-widget-area-1' ) ) : dynamic_sidebar( 'sidebar-widget-area-1' ); 
    
    endif; 

  } 
  
}

else if (is_single()) { 
    
  if (get_option('of_single_widget')=="true") {
    
    if ( is_active_sidebar( 'sidebar-widget-area-1' ) ) : dynamic_sidebar( 'sidebar-widget-area-1' ); 
    
    endif; 
    
  } 

}

else { 
    
  if (get_option('of_blog_widget')=="true") {
    
    if ( is_active_sidebar( 'sidebar-widget-area-2' ) ) : dynamic_sidebar( 'sidebar-widget-area-2' ); 
    
    endif; 
    
  } 

} 
 
if (is_page()){        
  if ($widget_2==$checkbox) {

    if ( is_active_sidebar( 'sidebar-widget-area-2' ) ) : dynamic_sidebar( 'sidebar-widget-area-2' ); 
    
    endif; 

  } 
  
}

if (is_page()){        
  if ($widget_3==$checkbox) {

    if ( is_active_sidebar( 'sidebar-widget-area-3' ) ) : dynamic_sidebar( 'sidebar-widget-area-3' ); 
    
    endif; 

  } 
  
}

?>
  <!-- END WIDGET AREAS  -->
    <!-- BANNER AREA -->
	<?php
      if($banners==$checkbox) 
	{
        if ($post->ID)
		{
			$pictures = array("banner_contact.png", "banner_seminar.png", "banner_aerospace.png");
			$links = array("http://www.coss-systems.com/company/contact-us/", "http://www.coss-systems.com/company/events", "http://www.coss-systems.com/brochure/");
			echo '<div class="menu_categories" style="padding-top: 0">';
			if(!empty($banner_assigned))
				{
					$index = array_keys($pictures, $banner_assigned);
					echo '<a href="' . $links[$index] . '">';
					echo '<img src="' . get_bloginfo('url') . '/wp-content/uploads/2011/11/' . $banner_assigned . '" width="255" height="325">';
					echo '</a>';
				}
			else
				{
					$index_array = array('0', '1', '2');
					$index = array_rand($index_array);
					echo '<a href="' . $links[$index] . '">';
					echo '<img src="' . get_bloginfo('url') . '/wp-content/uploads/2011/11/' . $pictures[$index] . '" width="255" height="325">';
					echo '</a>';
				}
			echo '</div>';
        
        } 
	}
	?>
  <!-- END OF BANNER AREA -->
</div>
<!--END RIGHT OR LEFT SIDEBAR -->
