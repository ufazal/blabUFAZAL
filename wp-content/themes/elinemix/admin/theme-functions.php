<?php

/* These are functions specific to the included option settings and this theme */

/*-----------------------------------------------------------------------------------*/
/* Theme Header Output - wp_head() */
/*-----------------------------------------------------------------------------------*/


//Post excerpt length
function excerpt_length( $length ) {
    $shortname =  get_option('of_shortname');
    $excerpt = get_option($shortname . '_excerpt'); 
	return $excerpt;
}
add_filter( 'excerpt_length', 'excerpt_length' );



function cufon_fonts() { 
    
    
	 $shortname =  get_option('of_shortname');
    
     $menu_font = get_option($shortname . '_menu_fonts'); 
     $footer_font = get_option($shortname . '_top_footer_heading_color');  
     $general_font = get_option($shortname . '_page_heading_color'); 
     $title_font = get_option($shortname . '_page_title_style'); 
     $subtitle_font = get_option($shortname . '_page_sub_title_style'); 
     
     $f1 ="ColaborateLight";            $js1="ColaborateLight_400.font.js";
     $f2 ="Colaborate-Regular";         $js2="Colaborate-Regular_400.font.js";
     $f3 ="Diavlo Book";                $js3="Diavlo_Book_400.font.js";   
     $f4 ="Aller Light";                $js4="Aller_Light_400.font.js"; 
     $f5 ="Marketing Script";           $js5="Marketing_Script_400.font.js"; 
     $f6 ="NeoRetroDraw";               $js6="NeoRetroDraw_400.font.js"; 
     $f7 ="NeoRetroFill";               $js7="NeoRetroFill_400.font.js"; 
     $f8 ="Ubuntu-Title";               $js8="Ubuntu-Title_400.font.js"; 
     $f9 ="UglyQua";                    $js9="UglyQua_500.font.js"; 
     $f10 ="Universal fruitcake";       $js10="Universal_fruitcake_400.font.js"; 
     $f11 ="Yanone Kaffeesatz Light";   $js11="Yanone_Kaffeesatz_300.font.js"; 
     $f12 ="Yanone Kaffeesatz Regular"; $js12="Yanone_Kaffeesatz_300.font.js"; 
    
     
      echo '<script src="'. OF_DIRECTORY .'/includes/cufon-yui.js" type="text/javascript"></script>';
      
      if ($subtitle_font["fonttype"]==$f1 || $title_font["fonttype"]==$f1 || $general_font["fonttype"]==$f1 || $footer_font["fonttype"]==$f1 || $menu_font["fonttype"]==$f1 ){
        
        echo '<script src="'. OF_DIRECTORY .'/includes/fonts/'.$js1.'" type="text/javascript"></script>';  
        
      }
      
      if ($subtitle_font["fonttype"]==$f2 || $title_font["fonttype"]==$f2 || $general_font["fonttype"]==$f2 || $footer_font["fonttype"]==$f2 || $menu_font["fonttype"]==$f2 ){
        
        echo '<script src="'. OF_DIRECTORY .'/includes/fonts/'.$js2.'" type="text/javascript"></script>';  
        
      }
      
      if ($subtitle_font["fonttype"]==$f3 || $title_font["fonttype"]==$f3 || $general_font["fonttype"]==$f3 || $footer_font["fonttype"]==$f3 || $menu_font["fonttype"]==$f3 ){
        
        echo '<script src="'. OF_DIRECTORY .'/includes/fonts/'.$js3.'" type="text/javascript"></script>';  
        
      }
      
      if ($subtitle_font["fonttype"]==$f4 || $title_font["fonttype"]==$f4 || $general_font["fonttype"]==$f4 || $footer_font["fonttype"]==$f4 || $menu_font["fonttype"]==$f4 ){
        
        echo '<script src="'. OF_DIRECTORY .'/includes/fonts/'.$js4.'" type="text/javascript"></script>';  
        
      }
     
     if ($subtitle_font["fonttype"]==$f5 || $title_font["fonttype"]==$f5 || $general_font["fonttype"]==$f5 || $footer_font["fonttype"]==$f5 || $menu_font["fonttype"]==$f5 ){
        
        echo '<script src="'. OF_DIRECTORY .'/includes/fonts/'.$js5.'" type="text/javascript"></script>';  
        
      }
      
      if ($subtitle_font["fonttype"]==$f6 || $title_font["fonttype"]==$f6 || $general_font["fonttype"]==$f6 || $footer_font["fonttype"]==$f6 || $menu_font["fonttype"]==$f6 ){
        
        echo '<script src="'. OF_DIRECTORY .'/includes/fonts/'.$js6.'" type="text/javascript"></script>';  
        
      }
      
      if ($subtitle_font["fonttype"]==$f7 || $title_font["fonttype"]==$f7 || $general_font["fonttype"]==$f7 || $footer_font["fonttype"]==$f7 || $menu_font["fonttype"]==$f7 ){
        
        echo '<script src="'. OF_DIRECTORY .'/includes/fonts/'.$js7.'" type="text/javascript"></script>';  
        
      }
      
      if ($subtitle_font["fonttype"]==$f8 || $title_font["fonttype"]==$f8 || $general_font["fonttype"]==$f8 || $footer_font["fonttype"]==$f8 || $menu_font["fonttype"]==$f8 ){
        
        echo '<script src="'. OF_DIRECTORY .'/includes/fonts/'.$js8.'" type="text/javascript"></script>';  
        
      }
      
      if ($subtitle_font["fonttype"]==$f9 || $title_font["fonttype"]==$f9 || $general_font["fonttype"]==$f9 || $footer_font["fonttype"]==$f9 || $menu_font["fonttype"]==$f9 ){
        
        echo '<script src="'. OF_DIRECTORY .'/includes/fonts/'.$js9.'" type="text/javascript"></script>';  
        
      }
      
      if ($subtitle_font["fonttype"]==$f10 || $title_font["fonttype"]==$f10 || $general_font["fonttype"]==$f10 || $footer_font["fonttype"]==$f10 || $menu_font["fonttype"]==$f10 ){
        
        echo '<script src="'. OF_DIRECTORY .'/includes/fonts/'.$js10.'" type="text/javascript"></script>';  
        
      }
      
      if ($subtitle_font["fonttype"]==$f11 || $title_font["fonttype"]==$f11 || $general_font["fonttype"]==$f11 || $footer_font["fonttype"]==$f11 || $menu_font["fonttype"]==$f11 ){
        
        echo '<script src="'. OF_DIRECTORY .'/includes/fonts/'.$js11.'" type="text/javascript"></script>';  
        
      }
      
      if ($subtitle_font["fonttype"]==$f12 || $title_font["fonttype"]==$f12 || $general_font["fonttype"]==$f12 || $footer_font["fonttype"]==$f12 || $menu_font["fonttype"]==$f12 ){
        
        echo '<script src="'. OF_DIRECTORY .'/includes/fonts/'.$js12.'" type="text/javascript"></script>';  
        
      }
      
      
    	 echo'<script type="text/javascript">
                Cufon.replace("h1,h3,h4,h5,h6", { hover: true, fontFamily: "'; 
                if ($general_font["fonttype"]){ echo $general_font["fonttype"];} else { echo "ColaborateLight"; } 
                echo '" });
                Cufon.replace(".nav li a", { hover: { color:"white"}, fontSize: "20px", fontWeight: "bold", fontFamily: "'; 
                if ($menu_font["fonttype"]){ echo $menu_font["fonttype"];} else { echo "ColaborateLight"; } 
                echo '" });
                Cufon.replace(".footer_widget h1,.footer_widget h2,.footer_widget h3.footer_widget ,.footer_widget h4,.footer_widget h5,.footer_widget h6", { hover: true, fontFamily: "'; 
                if ($footer_font["fonttype"]){ echo $footer_font["fonttype"];} else { echo "ColaborateLight"; } 
                echo '" });
                Cufon.replace("#header-title h1", { hover: true, fontFamily: "'; 
                if ($title_font["fonttype"]){ echo $title_font["fonttype"];} else { echo "ColaborateLight"; } 
                echo '" });
                Cufon.replace("#header-subtitle, #header-title .float-right a", { hover: true, fontFamily: "'; 
                if ($subtitle_font["fonttype"]){ echo $subtitle_font["fonttype"];} else { echo "ColaborateLight"; } 
                echo '" });';
            echo '</script>';

}

add_action('wp_head', 'cufon_fonts');


/*-----------------------------------------------------------------------------------*/
/* Output CSS from standarized options */
/*-----------------------------------------------------------------------------------*/

function of_head_css() {

		$shortname =  get_option('of_shortname'); 
		$output = '';
		
		$custom_css = get_option('_custom_style');
		
		if ($custom_css <> '') {
			$output .= $custom_css . "\n";
		}
		
		// Output styles
		if ($output <> '') {
			$output = "<!-- Custom Styling -->\n<style type=\"text/css\">\n" . $output . "</style>\n";
			echo $output;
		}
	
}
add_action('wp_head', 'of_head_css');
/*-----------------------------------------------------------------------------------*/
/* Add Body Classes for Layout
/*-----------------------------------------------------------------------------------*/

// This used to be done through an additional stylesheet call, but it seemed like
// a lot of extra files for something so simple. Adds a body class to indicate sidebar position.

function of_blog_layout() {
	$shortname =  get_option('of_shortname');
	$layout = get_option($shortname .'_blog_layout');
	if ($layout == 'left') {
		echo "left";
	}
    if ($layout == "right") {
        echo "right";
    }
	
}

function of_page_layout() {
	$shortname =  get_option('of_shortname');
	$layout = get_option($shortname .'_page_layout');
	if ($layout == 'left') {
		echo "left";
	}
    if ($layout == "right") {
        echo "right";
    }
	
}

function of_single_layout() {
	$shortname =  get_option('of_shortname');
	$layout = get_option($shortname .'_single_layout');
	if ($layout == 'left') {
		echo "left";
	}
    if ($layout == "right") {
        echo "right";
    }
	
}
/*-----------------------------------------------------------------------------------*/
/* Add Favicon
/*-----------------------------------------------------------------------------------*/

function childtheme_favicon() {
		echo "bloginfo"; 
}


/*-----------------------------------------------------------------------------------*/
/* Show analytics code in footer */
/*-----------------------------------------------------------------------------------*/

function childtheme_analytics(){
	$shortname =  get_option('of_shortname');
	$output = get_option($shortname . '_google_analytics');
	if ( $output <> "" ) 
		echo stripslashes($output) . "\n";
}

function _custom_code(){
	$shortname =  get_option('of_shortname');
	$output = get_option($shortname . '_custom_code');
	if ( $output <> "" ) 
		echo stripslashes($output) . "\n";
}

/*-----------------------------------------------------------------------------------*/
/* Show analytics code in footer */
/*-----------------------------------------------------------------------------------*/