<style type="text/css">
<?php
    $of_nivo_height = get_option("of_nivo_slider_height");
    $of_orbit_height = get_option("of_orbit_slider_height");

    
    $of_top_footer_custom_style = get_option('of_top_footer_custom_style');
    $of_top_footer_background_options = get_option('of_top_footer_background_options');
    $of_top_footer_background_image = get_option('of_top_footer_background_image');
    $of_top_footer_text_style = get_option('of_top_footer_text_style');
    $of_top_footer_heading_color = get_option('of_top_footer_heading_color');
    $of_top_widget_h2_size = get_option('of_top_widget_h2_size');
    $of_top_footer_link_style = get_option('of_top_footer_link_style');
    $of_top_footer_linkhover_style = get_option('of_top_footer_linkhover_style');
    
    $of_midle_footer_custom_style = get_option('of_midle_footer_custom_style');
    $of_midle_footer_background_options = get_option('of_midle_footer_background_options');
    $of_midle_footer_background_image = get_option('of_midle_footer_background_image');
    $of_midle_footer_text_style = get_option('of_midle_footer_text_style');
    $of_midle_footer_heading_color = get_option('of_midle_footer_heading_color');
    $of_midle_widget_h2_size = get_option('of_midle_widget_h2_size');
    $of_midle_footer_link_style = get_option('of_midle_footer_link_style');
    $of_midle_footer_linkhover_style = get_option('of_midle_footer_linkhover_style');    
    
    $of_bottom_footer_custom_style = get_option('of_bottom_footer_custom_style');
    $of_bottom_footer_background_options = get_option('of_bottom_footer_background_options');
    $of_bottom_footer_background_image = get_option('of_bottom_footer_background_image');
    $of_bottom_footer_text_style = get_option('of_bottom_footer_text_style');
    $of_bottom_footer_link_style = get_option('of_bottom_footer_link_style');
    $of_bottom_footer_linkhover_style = get_option('of_bottom_footer_linkhover_style');
    
    $of_header_custom_style = get_option('of_header_custom_style');
    $of_header_background_options = get_option('of_header_background_options');
    $of_header_background_image = get_option('of_header_background_image');
    
    $of_menu_custom_style = get_option('of_menu_custom_style');
    $of_menu_fonts = get_option('of_menu_fonts');
    $of_menu_button_description = get_option('of_menu_button_description');
    $of_menu_active_background = get_option('of_menu_active_background');
    $of_menu_active_color = get_option('of_menu_active_color');
    $of_menu_active_button_description = get_option('of_menu_active_button_description');
    
    $of_enable_page_style = get_option('of_enable_page_style');
    $of_page_background_options = get_option('of_page_background_options');
    $of_page_background_image = get_option('of_page_background_image');
    $of_page_border_top = get_option('of_page_border_top');
    $of_page_border_bottom = get_option('of_page_border_bottom');
    $of_page_title_style = get_option('of_page_title_style');
    $of_page_title_size = get_option('of_page_title_size');
    $of_page_sub_title_style = get_option('of_page_sub_title_style');
    $of_page_sub_title_size = get_option('of_page_sub_title_size');
    
    $of_enable_page_typography = get_option('of_enable_page_typography');
    $of_p_style = get_option('of_p_style');
    $of_link_style = get_option('of_link_style');
    $of_link_hover_style = get_option('of_link_hover_style');
    $of_page_heading_color = get_option('of_page_heading_color');
    $of_h1_size = get_option('of_h1_size');
    $of_h2_size = get_option('of_h2_size');
    $of_h3_size = get_option('of_h3_size');
    $of_h4_size = get_option('of_h4_size');
    $of_h5_size = get_option('of_h5_size');
    $of_h6_size = get_option('of_h6_size');

if (get_option("of_buttom_footer_background_options")){ 
    
    ?> body{background:<?php echo $of_bottom_footer_background_options["color"] ?>!important;} <?php } 

if($of_enable_page_typography == "true"){ ?>
/*------------------------GENERAL--------------------------*/
     <?php if($of_p_style){ ?>  p{ <?php 
                
            if($of_p_style["color"]) {  echo "color:"; echo $of_p_style["color"]; echo"!important; "; } 
            
            if($of_p_style["size"]) {  echo "font-size:"; echo $of_p_style["size"]; echo "px "; echo"!important; "; }
            
            if($of_p_style["style"]) {  echo "font:"; echo $of_p_style["style"]; echo"!important; "; }
            
            if($of_p_style["face"]) {  echo stripslashes($of_p_style["face"]); echo"!important; "; }
        
    ?> }  <?php } ?>
    
    
    
     <?php if($of_link_style){ ?>  a{ <?php 
                
            if($of_link_style["color"]) {  echo "color:"; echo $of_link_style["color"]; echo"!important; "; } 
            
            if($of_link_style["size"]) {  echo "font-size:"; echo $of_link_style["size"], $of_link_style["unit"]; echo"!important; "; }
            
            if($of_link_style["style"]) {  echo "font:"; echo $of_link_style["style"]; echo"!important; "; }
            
            if($of_link_style["face"]) {  echo stripslashes($of_link_style["face"]); echo"!important; "; }
        
    ?> } <?php } ?>
    
    
    
     <?php if($of_link_hover_style){ ?> a:hover{ <?php 
                
            if($of_link_hover_style["color"]) {  echo "color:"; echo $of_link_hover_style["color"]; echo"!important; "; } 
            
            if($of_link_hover_style["size"]) {  echo "font-size:"; echo $of_link_hover_style["size"], $of_link_hover_style["unit"]; echo"!important; "; }
            
            if($of_link_hover_style["style"]) {  echo "font:"; echo $of_link_hover_style["style"]; echo"!important; "; }
            
            if($of_link_hover_style["face"]) {  echo stripslashes($of_link_hover_style["face"]); echo"!important; "; }
        
    ?> } <?php } ?>
    
    
    
    <?php if($of_page_heading_color){ ?>  h1,h2,h3,h4,h5,h6{ <?php 
                
            if($of_page_heading_color["color"]) {  echo "color:"; echo $of_page_heading_color["color"]; echo"!important; "; } 
           
    ?> } <?php } ?>
    
    
    
    <?php if($of_h1_size){ ?>  h1{ <?php 
                
            if($of_h1_size) {  echo "font-size:"; echo $of_h1_size; echo "px "; echo"!important; "; } 
           
    ?> } <?php } ?>
    
    
    
    <?php if($of_h2_size){ ?>  h2{ <?php 
                
            if($of_h2_size) {  echo "font-size:"; echo $of_h2_size; echo "px "; echo"!important; "; } 
           
    ?> } <?php } ?>
    
    
    
    <?php if($of_h3_size){ ?>  h3{ <?php 
                
            if($of_h3_size) {  echo "font-size:"; echo $of_h3_size; echo "px "; echo"!important; "; } 
           
    ?> } <?php } ?>
    
    
    
    <?php if($of_h4_size){ ?>  h4{ <?php 
                
            if($of_h4_size) {  echo "font-size:"; echo $of_h4_size; echo "px "; echo"!important; "; } 
           
    ?> } <?php } ?>
    
    
    
    <?php if($of_h5_size){ ?>  h5{ <?php 
                
            if($of_h5_size) {  echo "font-size:"; echo $of_h5_size; echo "px "; echo"!important; "; } 
           
    ?> } <?php } ?>
    
    
    
    <?php if($of_h6_size){ ?>  h6{ <?php 
                
            if($of_h6_size) {  echo "font-size:"; echo $of_h6_size; echo "px "; echo"!important; "; } 
           
    ?> } <?php }

} ?>

<?php if($of_header_custom_style == "true"){ ?>
/*------------------------BACKGROUND--------------------------*/
<?php if($of_header_background_options["color"])    { echo "#background { background-color:"; echo $of_header_background_options["color"]; echo"!important;}"; } ?>
<?php if($of_header_background_image)               { echo "#background { background-image:"; echo "url("; echo $of_header_background_image; echo ")"; echo"!important;}"; } ?>
<?php if($of_header_background_image)               { echo "#background { background-repeat:"; echo $of_header_background_options["repeate"]; echo ")"; echo"!important;}"; } ?>
<?php if($of_header_background_image)               { echo "#background { background-position:"; echo $of_header_background_options["position"]; echo"!important;}"; } ?>
<?php } ?>

<?php if($of_menu_custom_style == "true"){ ?>
/*------------------------MENU--------------------------*/
    <?php if($of_menu_fonts){ ?>  .nav .menu-item a strong{ <?php 
                
            if($of_menu_fonts["color"]) {  echo "color:"; echo $of_menu_fonts["color"]; echo"!important; "; } 
           
    ?> }
    <?php } ?>
    
    <?php if($of_menu_button_description){ ?>  .nav .menu-item a span{ <?php 
                
            if($of_menu_button_description["color"]) {  echo "color:"; echo $of_menu_button_description["color"]; echo"!important; "; } 
            
            if($of_menu_button_description["size"]) {  echo "font-size:"; echo $of_menu_button_description["size"], $of_menu_button_description["unit"]; echo"!important; "; }
            
            if($of_menu_button_description["style"]) {  echo "font:"; echo $of_menu_button_description["style"]; echo"!important; "; }
            
            if($of_menu_button_description["face"]) {  echo stripslashes($of_menu_button_description["face"]); echo"!important; "; }
        
    ?> }
    <?php } ?>
     
    <?php if($of_menu_active_background){ ?>
            .header_menu ul .current-menu-item, .header_menu ul .current-menu-parent, .header_menu ul .current-menu-ancestor,.header_menu ul .current_page_parent{ <?php 
            
          echo "background-color:"; echo $of_menu_active_background; echo"!important; "; 
           
        ?> }
    <?php } ?>
    <?php if($of_menu_active_color){ ?> .menu-item.current-menu-item a strong, .menu-item.current-menu-parent a strong, .menu-item.current-menu-ancestor a strong, .menu-item.current_page_parent a strong{ <?php 
            
          echo "color:"; echo $of_menu_active_color; echo"!important; "; 
           
        ?> }
    <?php } ?>
    <?php if($of_menu_active_button_description){ ?> .menu-item.current-menu-item a span, .menu-item.current-menu-parent a span, .menu-item.current-menu-ancestor a span, .menu-item.current_page_parent a span{ <?php 
                
            if($of_menu_active_button_description["color"]) {  echo "color:"; echo $of_menu_active_button_description["color"]; echo"!important; "; } 
            
            if($of_menu_active_button_description["size"]) {  echo "font-size:"; echo $of_menu_active_button_description["size"], $of_menu_active_button_description["unit"]; echo"!important; "; }
            
            if($of_menu_active_button_description["style"]) {  echo "font:"; echo $of_menu_active_button_description["style"]; echo"!important; "; }
            
            if($of_menu_active_button_description["face"]) {  echo stripslashes($of_menu_active_button_description["face"]); echo"!important; "; }
        
    ?> }
    <?php } ?>
<?php } ?>
<?php if($of_enable_page_style == "true"){ ?>
/*------------------------PAGE--------------------------*/
    <?php if($of_page_background_options  || $of_page_background_image || $of_page_border_top || $of_page_border_bottom) { ?> #content_full { background: <?php echo $of_page_background_options["color"];  if ($of_page_background_image){?> url(<?php echo $of_page_background_image; ?>) <?php echo $of_page_background_options["repeate"] ?> <?php echo $of_page_background_options["position"]; ?> <?php echo $of_header_background_options["position2"]; } ?>!important;
        <?php 
            
            if($of_page_border_top["color"] || $of_page_border_top["width"]){ echo "border-top:"; echo $of_page_border_top["width"]; echo "px ";  echo $of_page_border_top["style"]; echo " ";  echo $of_page_border_top["color"]; echo"!important; ";}  
            
            if($of_page_border_bottom["color"] || $of_page_border_bottom["width"]){ echo "border-bottom:"; echo $of_page_border_bottom["width"]; echo "px "; echo $of_page_border_bottom["style"]; echo " "; echo $of_page_border_bottom["color"]; echo"!important; ";}  
         ?>} <?php    
     } ?>   
    <?php if($of_page_title_style  || $of_page_title_size) { ?> #header_title h1 {<?php 
                
            if($of_page_title_style["color"]) {  echo "color:"; echo $of_page_title_style["color"]; echo"!important; "; } 
            if($of_page_title_size) {  echo "font-size:"; echo $of_page_title_size; echo "px "; echo"!important; "; } 
           
    ?> }
    <?php } ?>
    <?php if($of_page_sub_title_style  || $of_page_sub_title_size) { ?>  #header_subtitle {<?php 
                
            if($of_page_sub_title_style["color"]) {  echo "color:"; echo $of_page_sub_title_style["color"]; echo"!important; "; } 
            if($of_page_sub_title_size) {  echo "font-size:"; echo $of_page_sub_title_size; echo "px "; echo"!important; "; } 
           
    ?> }
    <?php } ?>
<?php } ?>
<?php if($of_top_footer_custom_style == "true"){ ?>
/*------------------------FOOTER--------------------------*/

    <?php if($of_top_footer_background  || $of_top_footer_background_image || $of_top_footer_background_options["color"]){ ?>  #footer_columns { background: <?php echo $of_top_footer_background_options["color"] ?> url(<?php echo $of_top_footer_background_image ?>) <?php echo $of_top_footer_background_options["repeate"] ?> <?php echo $of_top_footer_background_options["position"] ?>!important; } 
    <?php } ?>
    
    <?php if($of_top_footer_text_style){ ?>  .footer_widget p, .footer_widget div p, .footer_widget div div p, .footer_widget div div p span, .footer_widget, 
    .footer_widget div, .footer_widget div div, .footer_widget ul li, .footer_widget div ul li, .footer_widget div div ul li,
    .footer_widget table, .footer_widget th, .footer_widget td, .footer_widget caption, .footer_widget div caption
        { <?php 
                
            if($of_top_footer_text_style["color"]) {  echo "color:"; echo $of_top_footer_text_style["color"]; echo"!important; "; } 
            
            if($of_top_footer_text_style["size"]) {  echo "font-size:"; echo $of_top_footer_text_style["size"], $of_top_footer_text_style["unit"]; echo"!important; "; }
            
            if($of_top_footer_text_style["style"]) {  echo "font:"; echo $of_top_footer_text_style["style"]; echo"!important; "; }
            
            if($of_top_footer_text_style["face"]) {  echo stripslashes($of_top_footer_text_style["face"]); echo"!important; "; }
        
    ?> }
    <?php } ?>
    <?php if($of_top_footer_heading_color){ ?> .footer_widget h1, .footer_widget h2, .footer_widget h3, .footer_widget h4, .footer_widget h5, .footer_widget h6,
    .footer_widget div h1, .footer_widget div h2, .footer_widget div h3, 
    .footer_widget div h4, .footer_widget div h5, .footer_widget div h6{ <?php 
                
            if($of_top_footer_heading_color["color"]) {  echo "color:"; echo $of_top_footer_heading_color["color"]; echo"!important; "; } 
           
    ?> }
    <?php } ?>
    <?php if($of_top_widget_h2_size){ ?> .footer_widget h2, .footer_widget div h2, .footer_widget div div h2{ <?php 
                
            if($of_top_widget_h2_size) {  echo "font-size:"; echo $of_top_widget_h2_size; echo"!important; "; } 
           
    ?> }
    <?php } ?>
    <?php if($of_top_footer_link_style){ ?> .footer_widget a, .footer_widget div a, .footer_widget div div a{ <?php 
                
            if($of_top_footer_link_style["color"]) {  echo "color:"; echo $of_top_footer_link_style["color"]; echo"!important; "; } 
            
            if($of_top_footer_link_style["size"]) {  echo "font-size:"; echo $of_top_footer_link_style["size"], $of_top_footer_link_style["unit"]; echo"!important; "; }
            
            if($of_top_footer_link_style["style"]) {  echo "font:"; echo $of_top_footer_link_style["style"]; echo"!important; "; }
            
            if($of_top_footer_link_style["face"]) {  echo stripslashes($of_top_footer_link_style["face"]); echo"!important; "; }
        
    ?> }
    <?php } ?>
    <?php if($of_top_footer_linkhover_style){ ?> .footer_widget a:hover, .footer_widget div a:hover, .footer_widget div div a:hover{ <?php 
                
            if($of_top_footer_linkhover_style["color"]) {  echo "color:"; echo $of_top_footer_linkhover_style["color"]; echo"!important; "; } 
            
            if($of_top_footer_linkhover_style["size"]) {  echo "font-size:"; echo $of_top_footer_linkhover_style["size"], $of_top_footer_linkhover_style["unit"]; echo"!important; "; }
            
            if($of_top_footer_linkhover_style["style"]) {  echo "font:"; echo $of_top_footer_linkhover_style["style"]; echo"!important; "; }
            
            if($of_top_footer_linkhover_style["face"]) {  echo stripslashes($of_top_footer_linkhover_style["face"]); echo"!important; "; }
        
    ?> } <?php } ?>
<?php } ?>
<?php if($of_midle_footer_custom_style == "true"){ ?>
/*------------------------MIDLE FOOTER--------------------------*/

    <?php if($of_midle_footer_background  || $of_midle_footer_background_image || $of_midle_footer_background_options["color"]){ ?>  #footer_columns_midle { background: <?php echo $of_midle_footer_background_options["color"] ?> url(<?php echo $of_midle_footer_background_image ?>) <?php echo $of_midle_footer_background_options["repeate"] ?> <?php echo $of_midle_footer_background_options["position"] ?>!important; } 
    <?php } ?>
    <?php if($of_midle_footer_text_style){ ?>  .footer_widget_midle p, .footer_widget_midle div p, .footer_widget_midle div div p, .footer_widget_midle div div p span, .footer_widget_midle, 
    .footer_widget_midle div, .footer_widget_midle div div, .footer_widget_midle ul li, .footer_widget_midle div ul li, .footer_widget_midle div div ul li,
    .footer_widget_midle table, .footer_widget_midle th, .footer_widget_midle td, .footer_widget_midle caption, .footer_widget_midle div caption
        { <?php 
                
            if($of_midle_footer_text_style["color"]) {  echo "color:"; echo $of_midle_footer_text_style["color"]; echo"!important; "; } 
            
            if($of_midle_footer_text_style["size"]) {  echo "font-size:"; echo $of_midle_footer_text_style["size"], $of_midle_footer_text_style["unit"]; echo"!important; "; }
            
            if($of_midle_footer_text_style["style"]) {  echo "font:"; echo $of_midle_footer_text_style["style"]; echo"!important; "; }
            
            if($of_midle_footer_text_style["face"]) {  echo stripslashes($of_midle_footer_text_style["face"]); echo"!important; "; }
        
    ?> }
    <?php } ?>
    <?php if($of_midle_footer_heading_color){ ?> .footer_widget_midle h1, .footer_widget_midle h2, .footer_widget_midle h3, .footer_widget_midle h4, .footer_widget_midle h5, .footer_widget_midle h6,
    .footer_widget_midle div h1, .footer_widget_midle div h2, .footer_widget_midle div h3, 
    .footer_widget_midle div h4, .footer_widget_midle div h5, .footer_widget_midle div h6{ <?php 
                
            if($of_midle_footer_heading_color["color"]) {  echo "color:"; echo $of_midle_footer_heading_color["color"]; echo"!important; "; } 
           
    ?> }
    <?php } ?>
    
    <?php if($of_midle_widget_h2_size){ ?> .footer_widget_midle h2, .footer_widget_midle div h2, .footer_widget_midle div div h2{ <?php 
                
            if($of_midle_widget_h2_size) {  echo "font-size:"; echo $of_midle_widget_h2_size; echo"!important; "; } 
           
    ?> }
    <?php } ?>
    
    <?php if($of_midle_footer_link_style){ ?> .footer_widget_midle a, .footer_widget_midle div a, .footer_widget_midle div div a{ <?php 
                
            if($of_midle_footer_link_style["color"]) {  echo "color:"; echo $of_midle_footer_link_style["color"]; echo"!important; "; } 
            
            if($of_midle_footer_link_style["size"]) {  echo "font-size:"; echo $of_midle_footer_link_style["size"], $of_midle_footer_link_style["unit"]; echo"!important; "; }
            
            if($of_midle_footer_link_style["style"]) {  echo "font:"; echo $of_midle_footer_link_style["style"]; echo"!important; "; }
            
            if($of_midle_footer_link_style["face"]) {  echo stripslashes($of_midle_footer_link_style["face"]); echo"!important; "; }
        
    ?> }
    <?php } ?>
    
    <?php if($of_midle_footer_linkhover_style){ ?> .footer_widget_midle a:hover, .footer_widget_midle div a:hover, .footer_widget_midle div div a:hover{ <?php 
                
            if($of_midle_footer_linkhover_style["color"]) {  echo "color:"; echo $of_midle_footer_linkhover_style["color"]; echo"!important; "; } 
            
            if($of_midle_footer_linkhover_style["size"]) {  echo "font-size:"; echo $of_midle_footer_linkhover_style["size"], $of_midle_footer_linkhover_style["unit"]; echo"!important; "; }
            
            if($of_midle_footer_linkhover_style["style"]) {  echo "font:"; echo $of_midle_footer_linkhover_style["style"]; echo"!important; "; }
            
            if($of_midle_footer_linkhover_style["face"]) {  echo stripslashes($of_midle_footer_linkhover_style["face"]); echo"!important; "; }
        
    ?> }
    
    <?php } ?>

<?php } ?>
<?php if($of_bottom_footer_custom_style == "true"){ ?>
/*------------------------SUB FOOTER--------------------------*/

   <?php if($of_buttom_footer_background  || $of_buttom_footer_background_image || $of_bottom_footer_background_options["color"]){ ?> #sub_footer { background: <?php echo $of_bottom_footer_background_options["color"] ?> url(<?php echo $of_buttom_footer_background_image ?>) <?php echo $of_buttom_footer_background_options["repeate"] ?> <?php echo $of_buttom_footer_background_options["position"] ?>!important; } 
    <?php } ?>
    
    <?php if($of_bottom_footer_text_style){ ?> #sub_footer div div, #footer_twitter ul li span{ <?php 
                
            if($of_bottom_footer_text_style["color"]) {  echo "color:"; echo $of_bottom_footer_text_style["color"]; echo"!important; "; } 
            
            if($of_bottom_footer_text_style["size"]) {  echo "font-size:"; echo $of_bottom_footer_text_style["size"], $of_bottom_footer_text_style["unit"]; echo"!important; "; }
            
            if($of_bottom_footer_text_style["style"]) {  echo "font:"; echo $of_bottom_footer_text_style["style"]; echo"!important; "; }
            
            if($of_bottom_footer_text_style["face"]) {  echo stripslashes($of_bottom_footer_text_style["face"]); echo"!important; "; }
        
    ?> }
    
    <?php } ?>
    
    <?php if($of_bottom_footer_link_style){ ?> #footer_menu ul li a, #footer_twitter ul li a{ <?php 
                
            if($of_bottom_footer_link_style["color"]) {  echo "color:"; echo $of_bottom_footer_link_style["color"]; echo"!important; "; } 
            
            if($of_bottom_footer_link_style["size"]) {  echo "font-size:"; echo $of_bottom_footer_link_style["size"], $of_bottom_footer_link_style["unit"]; echo"!important; "; }
            
            if($of_bottom_footer_link_style["style"]) {  echo "font:"; echo $of_bottom_footer_link_style["style"]; echo"!important; "; }
            
            if($of_bottom_footer_link_style["face"]) {  echo stripslashes($of_bottom_footer_link_style["face"]); echo"!important; "; }
        
    ?> }
    
    <?php } ?>
    
    <?php if($of_bottom_footer_linkhover_style){ ?> #footer_menu ul li a:hover, #footer_twitter ul li a:hover{ <?php 
                
            if($of_bottom_footer_linkhover_style["color"]) {  echo "color:"; echo $of_bottom_footer_linkhover_style["color"]; echo"!important; "; } 
            
            if($of_bottom_footer_linkhover_style["size"]) {  echo "font-size:"; echo $of_bottom_footer_linkhover_style["size"], $of_bottom_footer_linkhover_style["unit"]; echo"!important; "; }
            
            if($of_bottom_footer_linkhover_style["style"]) {  echo "font:"; echo $of_bottom_footer_linkhover_style["style"]; echo"!important; "; }
            
            if($of_bottom_footer_linkhover_style["face"]) {  echo stripslashes($of_bottom_footer_linkhover_style["face"]); echo"!important; "; }
        
    ?> }
    
    <?php } ?>

<?php } ?>
#slider_image{<?php if($of_nivo_height){ echo $of_nivo_height; echo "px"; } else  {?> height: 350px <?php } ?>!important;}
#orbit-slider{<?php if($of_orbit_height){ echo $of_orbit_height; echo"px"; } else {?> height: 350px <?php } ?>!important;}
<?php 

$of_bx_slider_style = get_option("of_bx_slider_style");
$of_bx_slider_background_color = get_option("of_bx_slider_background_color");
$of_bx_slider_title_size = get_option("of_bx_slider_title_size");
$of_bx_slider_title_color = get_option("of_bx_slider_title_color");
$of_bx_slider_text_color = get_option("of_bx_slider_text_color");
$of_bx_slider_button_size = get_option("of_bx_slider_button_size");
$of_bx_slider_button_background = get_option("of_bx_slider_button_background");
$of_bx_slider_button_background_hover = get_option("of_bx_slider_button_background_hover");
$of_bx_slider_button_text = get_option("of_bx_slider_button_text");
$of_bx_slider_button_text_hover = get_option("of_bx_slider_button_text_hover");


if($of_bx_slider_style == "true"){ ?>

/*------------------------BX SLIDER--------------------------*/

<?php if($of_bx_slider_background_color)            { echo "#bx-slider-frame { background:"; echo $of_bx_slider_background_color; echo"!important;}"; } ?>
<?php if($of_bx_slider_title_color)                 { echo "#slider-bx-ul li div h2 { color:"; echo $of_bx_slider_title_color; echo"!important;}"; } ?>
<?php if($of_bx_slider_title_size)                  { echo "#slider-bx-ul li div h2 { font-size:"; echo $of_bx_slider_title_size; echo"px!important;}"; } ?>
<?php if($of_bx_slider_text_color)                  { echo "#slider-bx-ul li div, #slider-bx-ul li div p, #slider-bx-ul li div p strong { color:"; echo $of_bx_slider_text_color; echo"!important;}"; } ?>
<?php if($of_bx_slider_button_background)           { echo ".bx_button { background:"; echo $of_bx_slider_button_size; echo"!important;}"; } ?>
<?php if($of_bx_slider_button_background_hover)     { echo ".bx_button:hover { background:"; echo $of_bx_slider_button_background_hover; echo"!important;}"; } ?>
<?php if($of_bx_slider_button_text)                 { echo ".bx_button span { color:"; echo $of_bx_slider_button_text; echo"!important;}"; } ?>
<?php if($of_bx_slider_button_text_hover)           { echo ".bx_button span:hover { color:"; echo $of_bx_slider_button_text_hover; echo"!important;}"; } ?>
<?php if($of_bx_slider_button_size)                 { echo ".bx_button span { font-size:"; echo $of_bx_slider_button_size; echo"px!important;}"; } ?>

<?php } ?>
</style>