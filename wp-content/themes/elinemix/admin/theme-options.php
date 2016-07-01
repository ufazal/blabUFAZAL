<?php

add_action('init','of_options');

if (!function_exists('of_options')) {
function of_options(){
	
// VARIABLES
$themename = get_theme_data(STYLESHEETPATH . '/style.css');
$themename = $themename['Name'];
$shortname = "of";
$shortname_slider ="slider";

// Populate OptionsFramework option in array for use in theme
global $of_options;
$of_options = get_option('of_options');

$GLOBALS['template_path'] = OF_DIRECTORY;

//Access the WordPress Categories via an Array
$of_categories = array();  
$of_categories_obj = get_categories('hide_empty=0');
foreach ($of_categories_obj as $of_cat) {
    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
$categories_tmp = array_unshift($of_categories, "Select a category:");    
       
//Access the WordPress Pages via an Array
$of_pages = array();
$of_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($of_pages_obj as $of_page) {
    $of_pages[$of_page->ID] = $of_page->post_name; }
      

// Image Alignment radio box
$options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 

// Image Links to Options
$options_image_link_to = array("image" => "The Image","post" => "The Post"); 

//Testing 
$options_select = array("","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53","54","55","56"); 
$options_radio = array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five"); 

//Stylesheets Reader
$alt_stylesheet_path = OF_FILEPATH . '/styles/';
$alt_stylesheets = array();

if ( is_dir($alt_stylesheet_path) ) {
    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) { 
        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {
            if(stristr($alt_stylesheet_file, ".css") !== false) {
                $alt_stylesheets[] = $alt_stylesheet_file;
            }
        }    
    }
}

//More Options
$uploads_arr = wp_upload_dir();
$all_uploads_path = $uploads_arr['path'];
$all_uploads = get_option('of_uploads');
$other_entries = array("Select a size:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36");
$body_repeat = array("no-repeat","repeat-x","repeat-y","repeat");
$body_pos = array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");
$options_sub_right = array("menu" => "Menu" ,"menu_built_in" => "Built-in Menu", "twitter" => "Twitter");
// Set the Options Array
$options = array();

//------------------ GENERAL ------------------------------------------------------------------------------------//

$options[] = array( "name" => "General Settings",
                    "icon" => "http://cdn3.iconfinder.com/data/icons/musthave/16/Settings.png",
                    "type" => "heading");
                                        
$options[] = array( "name" => "Logo Options",
					"type" => "line"); 

$options[] = array( "name" => "Enable Logo Image",
					"desc" => "If this option is on, you should fill the text field below. Or you should define Site Title in <a target='blank' href='".get_bloginfo('url') ."/wp-admin/options-general.php'>Settings->General</a> instead of a logo image.",
					"id" => $shortname."_enable_logo_image",
					"std" => "true",
					"type" => "checkbox");  





                                        
$options[] = array( "name" => "Logo Image",
					"desc" => "Paste the full URL (include http://) of your custom logo here or you can insert the image through the button.",
					"id" => $shortname."_logo_image",
					"std" => "",
					"type" => "upload");  

//$options[] = array( "name" => "Navigation Menu",
//					"type" => "line"); 
                    
//$options[] = array( "name" => "Wordpress Built-in Menu",
//					"desc" => "If this option is on, you can control over you sites menu with WordPress's Navigation Menu feature. See here: <a target='blank' href='".get_bloginfo('url') ."/wp-admin/nav-menus.php'>Settings->Menu</a> ",
//					"id" => $shortname."_menu_built",
//					"std" => "true",
//					"type" => "checkbox");  
                    
//$options[] = array( "name" => "Menu Button Description",
//					"desc" => "If this option is on, you can control over you sites menu description WordPress's Navigation Menu feature. See here: <a target='blank' href='".get_bloginfo('url') ."/wp-admin/nav-menus.php'>Settings->Menu</a>  ",
//					"id" => $shortname."_menu_button_description",
//					"std" => "true",
//					"type" => "checkbox"); 

$options[] = array( "name" => "Page General",
					"type" => "line"); 

$options[] = array( "name" => "Custom Favicon",
					"desc" => "Upload a 16px x 16px Png/Gif image that will represent your website's favicon.",
					"id" => $shortname."_custom_favicon",
					"std" => "",
					"type" => "upload"); 
                                                            
$options[] = array( "name" => "Enable Search",
					"desc" => "If this option is on, you'll globally disable your website's search input.",
					"id" => $shortname."_search",
					"std" => "true",
					"type" => "checkbox");                    
 
$options[] = array( "name" => "Enable Breadcrumb",
					"desc" => "If this option is on, you'll globally disable your website's breadcrumb navigation.",
					"id" => $shortname."_breadcrumb",
					"std" => "true",
					"type" => "checkbox"); 
                    
$url =  OF_DIRECTORY . '/admin/images/';
$options[] = array( "name" => "Page Layout",
					"desc" => "Select Page content and sidebar alignment.",
					"id" => $shortname."_page_layout",
					"std" => "right",
					"type" => "images",
					"options" => array( 'right' => $url . '2cr.png', 'left' => $url . '2cl.png') );                    


$options[] = array( "name" => "Custom Codes",
					"type" => "line"); 
                                        
$options[] = array( "name" => "Google Analystics Code",
					"desc" => "Paste your Google Analytics code here. This will be added into the footer template of your theme.",
					"id" => $shortname."_google_analytics",
					"std" => "",
					"type" => "textarea");
                                                                                       
$options[] = array( "name" => "Tracking Code",
					"desc" => "Paste your tracking code here. This will be added into the footer template of your theme.",
					"id" => $shortname."_custom_code",
					"std" => "",
					"type" => "textarea");                                                    
                    
$options[] = array( "name" => "Custom CSS",
					"desc" => "Paste your custom CSS code here.",
					"id" => $shortname."_custom_style",
					"std" => "",
					"type" => "textarea");
                                           
 

//------------------ STYLE GENERAL ------------------------------------------------------------------------------------//
                    
$options[] = array( "name" => "Styling Options",
                    "icon" => "http://cdn3.iconfinder.com/data/icons/UltimateGnome/16x16/apps/gnome-settings-theme.png",
					"type" => "heading");
                    
$options[] = array( "name" => "Header Background Style",
					"type" => "line"); 
                                        
$options[] = array( "name" => "Background Custom Style",
					"desc" => "If you want display Header custom style, turn on the button.",
					"id" => $shortname."_header_custom_style",
					"std" => "false",
					"type" => "checkbox");  
                    
$options[] = array( "name" => "Background Options",
					"desc" => "Enter background options",
					"id" => $shortname."_header_background_options",
					"std" => array('color' => '', 'repeate' => '','position' => '','position2' => ''),
					"type" => "background"); 
                                        
$options[] = array( "name" => "Header Background Image",
					"desc" => "Paste the full URL (include http://) of your custom header background here or you can insert the image through the button.",
					"id" => $shortname."_header_background_image",
					"std" => "",
					"type" => "upload");  

$options[] = array( "name" => "Navigation Menu Style",
					"type" => "line"); 
                    
$options[] = array( "name" => "Menu Custom Style",
					"desc" => "If you want display Menu custom style, turn on the button.",
					"id" => $shortname."_menu_custom_style",
					"std" => "false",
					"type" => "checkbox"); 
                    
$options[] = array( "name" => "Menu Button Fonts",
					"desc" => "Enter menu button font style here.",
					"id" => $shortname."_menu_fonts",
					"std" => array('color' => '', 'fonttype' => ''),
					"type" => "headings");  

$options[] = array( "name" => "Menu Button Description Style",
					"desc" => "Enter menu button description font style here.",
					"id" => $shortname."_menu_button_description",
					"std" => array('size' => '11','face' => 'verdana','style' => 'normal','color' => ''),
					"type" => "typography_description");
                                                            
$options[] = array( "name" => "Menu Active Button Background Color",
					"desc" => "Enter menu active button background color here.",
					"id" => $shortname."_menu_active_background",
					"std" => "",
					"type" => "color");  
                                        
$options[] = array( "name" => "Menu Active Button Color",
					"desc" => "Enter menu  active button font color here.",
					"id" => $shortname."_menu_active_color",
					"std" => "",
					"type" => "color");                     
                    
$options[] = array( "name" => "Menu Active Button Description Style",
					"desc" => "Enter menu active button font style here.",
					"id" => $shortname."_menu_active_button_description",
					"std" => array('size' => '11','face' => 'verdana','style' => 'normal','color' => ''),
					"type" => "typography_description");   


$options[] = array( "name" => "Page Style",
					"type" => "line"); 
                    
$options[] = array( "name" => "Enable Page Style",
					"desc" => "If you want display Page custom style, turn on the button.",
					"id" => $shortname."_enable_page_style",
					"std" => "false",
					"type" => "checkbox"); 
                    
$options[] = array( "name" => "Page Background Options",
					"desc" => "Enter page background style here",
					"id" => $shortname."_page_background_options",
					"std" => array('color' => '', 'repeate' => '','position' => '' ,'position2' => ''),
					"type" => "background"); 
                                        
$options[] = array( "name" => "Page Header Background Image",
					"desc" => "Paste the full URL (include http://) of your custom page background here or you can insert the image through the button.",
					"id" => $shortname."_page_background_image",
					"std" => "",
					"type" => "upload");  

//$options[] = array( "name" => "Page Border Top",
//					"desc" => "Enter page border top size and color here.",
//					"id" => $shortname."_page_border_top",
//					"std" => array('width' => '40','style' => 'slide','color' => '#f0f0f0'),
//					"type" => "border");      

//$options[] = array( "name" => "Page Border Bottom",
//					"desc" => "Enter page border bottom size and color here.",
//					"id" => $shortname."_page_border_bottom",
//					"std" => array('width' => '5','style' => 'slide','color' => '#f0f0f0'),
//					"type" => "border"); 

$options[] = array( "name" => "Page Title Style",
					"desc" => "Enter page title style here.",
					"id" => $shortname."_page_title_style",
					"std" => array('color' => '', 'fonttype' => ''),
					"type" => "headings"); 

$options[] = array( "name" => "Page Title Size",
					"desc" => "Slide your page title size here.",
					"id" => $shortname."_page_title_size",
                    "sliderid" =>  $shortname_slider."_page_title_size",
					"value" => "26",
                    "object" => "px",
                    "min" => "10",
                    "max" => "72",
                    "range" => "min",
                    "step" => "1",
					"type" => "slider");   
                                        
$options[] = array( "name" => "Page Sub Title Style",
					"desc" => "Enter page sub title style here.",
					"id" => $shortname."_page_sub_title_style",
					"std" => array('color' => '', 'fonttype' => ''),
					"type" => "headings"); 

                     
$options[] = array( "name" => "Page Sub Title Size",
					"desc" => "Slide your page subtitle size here.",
					"id" => $shortname."_page_sub_title_style",
                    "sliderid" =>  $shortname_slider."_page_sub_title_style",
					"value" => "16",
                    "object" => "px",
                    "min" => "10",
                    "max" => "72",
                    "range" => "min",
                    "step" => "1",
					"type" => "slider");                      
                                        
                    
                    

$options[] = array( "name" => "General Typography Style",
					"type" => "line"); 

$options[] = array( "name" => "Enable Page Typography Style",
					"desc" => "If you want display Page Typography custom style, turn on the button.",
					"id" => $shortname."_enable_page_typography",
					"std" => "false",
					"type" => "checkbox"); 
                                                                                                                        
$options[] = array( "name" => "p Style",
					"desc" => "Enter paragraph style here.",
					"id" => $shortname."_p_style",
					"std" => array('size' => '','unit' => 'em','face' => 'verdana','style' => 'bold italic','color' => ''),
					"type" => "typography");                      

$options[] = array( "name" => "Link Style",
					"desc" => "Enter link style here.",
					"id" => $shortname."_link_style",
					"std" => array('size' => '','unit' => 'em','face' => 'verdana','style' => 'bold italic','color' => ''),
					"type" => "typography");                       

$options[] = array( "name" => "Link Hover Style",
					"desc" => "Enter link hover style here.",
					"id" => $shortname."_link_hover_style",
					"std" => array('size' => '','unit' => 'em','face' => 'verdana','style' => 'bold italic','color' => ''),
					"type" => "typography"); 

$options[] = array( "name" => "Page Heading Style",
					"desc" => "Enter heading style here.",
					"id" => $shortname."_page_heading_color",
					"std" => array('color' => '', 'fonttype' => ''),
					"type" => "headings"); 

$options[] = array( "name" => "H1 size",
					"desc" => "Slide your h1 size here.",
					"id" => $shortname."_h1_size",
                    "sliderid" =>  $shortname_slider."_h1_size",
					"value" => "26",
                    "object" => "px",
                    "min" => "10",
                    "max" => "72",
                    "range" => "min",
                    "step" => "1",
					"type" => "slider"); 
                                                                                                                                                                
$options[] = array( "name" => "H2 size",
					"desc" => "Slide your h2 size here.",
					"id" => $shortname."_h2_size",
                    "sliderid" =>  $shortname_slider."_h2_size",
					"value" => "21",
                    "object" => "px",
                    "min" => "10",
                    "max" => "72",
                    "range" => "min",
                    "step" => "1",
					"type" => "slider");   

$options[] = array( "name" => "H3 size",
					"desc" => "Slide your h3 size here.",
					"id" => $shortname."_h3_size",
                    "sliderid" =>  $shortname_slider."_h3_size",
					"value" => "18",
                    "object" => "px",
                    "min" => "10",
                    "max" => "72",
                    "range" => "min",
                    "step" => "1",
					"type" => "slider");    

$options[] = array( "name" => "H4 size",
					"desc" => "Slide your h4 size here.",
					"id" => $shortname."_h4_size",
                    "sliderid" =>  $shortname_slider."_h4_size",
					"value" => "16",
                    "object" => "px",
                    "min" => "10",
                    "max" => "72",
                    "range" => "min",
                    "step" => "1",
					"type" => "slider");   

$options[] = array( "name" => "H5 size",
					"desc" => "Slide your h5 size here.",
					"id" => $shortname."_h5_size",
                    "sliderid" =>  $shortname_slider."_h5_size",
					"value" => "16",
                    "object" => "px",
                    "min" => "10",
                    "max" => "72",
                    "range" => "min",
                    "step" => "1",
					"type" => "slider");  

$options[] = array( "name" => "H6 size",
					"desc" => "Slide your h6 size here.",
					"id" => $shortname."_h6_size",
                    "sliderid" =>  $shortname_slider."_h6_size",
					"value" => "14",
                    "object" => "px",
                    "min" => "10",
                    "max" => "72",
                    "range" => "min",
                    "step" => "1",
					"type" => "slider");  
 





                    
//------------------ BLOG ------------------------------------------------------------------------------------//
                    
$options[] = array( "name" => "Blog Options",
                    "icon" => "http://cdn2.iconfinder.com/data/icons/fugue/icon/blog_blue.png",
					"type" => "heading");                    

$options[] = array( "name" => "General Blog",
					"type" => "line"); 
                                         
//$options[] = array( "name" => "Blog Page",
//					"desc" => "The page you choose here will display the blog.",
//					"id" => $shortname."_blog_page",
//					"std" => "Select a category:",
//					"type" => "select",
//					"options" => $of_categories); 

$url =  OF_DIRECTORY . '/admin/images/';
$options[] = array( "name" => "Blog Page Layout",
					"desc" => "Select Blog Page content and sidebar alignment.",
					"id" => $shortname."_blog_layout",
					"std" => "right",
					"type" => "images",
					"options" => array( 'right' => $url . '2cr.png', 'left' => $url . '2cl.png') ); 

$options[] = array( "name" => "Show Sidebar Categories",
					"desc" => "Enable categories menu in sidebar.",
					"id" => $shortname."_blog_categories",
					"std" => "true",
					"type" => "checkbox");  

$options[] = array( "name" => "Show Sidebar Widget",
					"desc" => "Enable widget area in sidebar.",
					"id" => $shortname."_blog_widget",
					"std" => "true",
					"type" => "checkbox");  
                                        
//$options[] = array( "name" => "Featured Image Type",
//					"desc" => "Select Featured Image type here.",
//					"id" => $shortname."_blog_page",
//					"std" => "Full With",
//					"type" => "select",
//					"options" => $of_categories); 
                                        
//$options[] = array( "name" => "Posts in Page",
//					"desc" => "Enter how many posts show in Blog Page.",
//					"id" => $shortname."_posts_in_page",
//					"std" => "5",
//					"type" => "text");       

$options[] = array( "name" => "Character Limit In Excerpt",
					"desc" => "Slide how many character in excerpt.",
					"id" => $shortname."_excerpt",
                    "sliderid" =>  $shortname_slider."_excerpt",
					"value" => "100",
                    "object" => "px",
                    "min" => "10",
                    "max" => "1000",
                    "range" => "min",
                    "step" => "1",
					"type" => "slider");   
                    
                                        
                                        
$options[] = array( "name" => "Single Blog",
					"type" => "line"); 

$url =  OF_DIRECTORY . '/admin/images/';
$options[] = array( "name" => "Single Blog Layout",
					"desc" => "Select Singl Blog content and sidebar alignment.",
					"id" => $shortname."_single_layout",
					"std" => "right",
					"type" => "images",
					"options" => array( 'right' => $url . '2cr.png', 'left' => $url . '2cl.png') ); 

$options[] = array( "name" => "Show Sidebar Categories",
					"desc" => "Enable categories menu in sidebar.",
					"id" => $shortname."_single_categories",
					"std" => "true",
					"type" => "checkbox");  

$options[] = array( "name" => "Show Sidebar Widget",
					"desc" => "Enable widget area in sidebar.",
					"id" => $shortname."_single_widget",
					"std" => "true",
					"type" => "checkbox");  
                                                                                 
$options[] = array( "name" => "Featured Image",
					"desc" => "If this option is on, Featured Image will appear in Single Blog page.",
					"id" => $shortname."_single_featured_image",
					"std" => "true",
					"type" => "checkbox");  

$options[] = array( "name" => "About Author Box",
					"desc" => "If this option is on, about author box will appear in Single Blog page.",
					"id" => $shortname."_about_author",
					"std" => "true",
					"type" => "checkbox");

//$options[] = array( "name" => "Related & Popular Post Module",
//					"desc" => "If this option is on, related and popular post module will appear in Single Blog page.",
//					"id" => $shortname."_single_related",
//					"std" => "true",
//					"type" => "checkbox");

//$options[] = array( "name" => "Previous & Next Navigation",
//					"desc" => "If this option is on, previous a next Navigation will appear in Single Blog page.",
//					"id" => $shortname."single_next",
//					"std" => "true",
//					"type" => "checkbox");
                                                                  
                                                                                                          
//$options[] = array( "name" => "Meta Informations",
//					"type" => "line"); 
                                         
//$options[] = array( "name" => "Category",
//					"desc" => "If this option is on, you'll enable blog category meta.",
//					"id" => $shortname."_meta_category",
//					"std" => "true",
//					"type" => "checkbox");  

//$options[] = array( "name" => "Tags",
//					"desc" => "If this option is on, you'll enable blog tags meta.",
//					"id" => $shortname."_meta_tags",
//					"std" => "true",
//					"type" => "checkbox");  
                    
//$options[] = array( "name" => "Author",
//					"desc" => "If this option is on, you'll enable blog author meta.",
//					"id" => $shortname."_meta_author",
//					"std" => "true",
//					"type" => "checkbox");  

//$options[] = array( "name" => "Date",
//					"desc" => "If this option is on, you'll enable blog date meta.",
//					"id" => $shortname."_meta_date",
//					"std" => "true",
//					"type" => "checkbox");  

//$options[] = array( "name" => "Comment",
//					"desc" => "If this option is on, you'll enable blog comment meta.",
//					"id" => $shortname."_meta_comment",
//					"std" => "true",
//					"type" => "checkbox");  
                                             
//$options[] = array( "name" => "Featured Image Size",
//					"type" => "line");                                                                                                          
                           
//$options[] = array( "name" => "Full Width Featured Image Height",
//					"desc" => "Select full width featured image height size.",
//					"id" => $shortname."_featured_size_full",
//					"std" => "200",
//					"type" => "select",
//					"options" => $of_categories); 

//$options[] = array( "name" => "Left Float Featured Image Height",
//					"desc" => "Select left float featured image height size.",
//					"id" => $shortname."_featured_size_leftheight",
//					"std" => "200",
//					"type" => "select",
//					"options" => $of_categories); 

//$options[] = array( "name" => "Left Float Featured Image Width",
//					"desc" => "Select left float featured image width size.",
//					"id" => $shortname."_featured_size_leftwidth",
//					"std" => "200",
//					"type" => "select",
//					"options" => $of_categories); 
                    
                    
                                                           
//------------------ FOOTER ------------------------------------------------------------------------------------//

$options[] = array( "name" => "Footer Options",
                    "icon" => "http://cdn1.iconfinder.com/data/icons/fatcow/16x16/border_2_bottom.png",
					"type" => "heading");

$options[] = array( "name" => "Footer Options",
					"type" => "line"); 
                                         
$options[] = array( "name" => "Top Footer",
					"desc" => "If you don't want display Top Footer, turn off the button.",
					"id" => $shortname."_top_footer",
					"std" => "true",
					"type" => "checkbox");  
                                                         
$url =  get_bloginfo('stylesheet_directory') . '/admin/images/columns/';
$options[] = array( "name" => "Top Footer Column Type",
					"desc" => "Choose the layout of Footer columns you'd like the top footer widgets displayed in.",
					"id" => $shortname."_footer_column_layout",
					"std" => "",
					"type" => "images",
					"options" => array(
						'01' => $url . '1.png',
						'02' => $url . '2-2.png',
						'03' => $url . '3-3-3.png',
                        '04' => $url . '4-4-4-4.png',
                        '05' => $url . '5-5-5-5-5.png',
                        '06' => $url . '6-6-6-6-6-6.png',
                        '07' => $url . '2-4-4.png',
                        '08' => $url . '2-3-3-3.png',
                        '09' => $url . '4-4-2.png',
                        '010' => $url . '3-3-3-2.png'));

$options[] = array( "name" => "Top Footer Area HTML Custom Code",
					"desc" => "Enter top footer custom HTML code here.",
					"id" => $shortname."_top_footer_html",
					"std" => "",
					"type" => "textarea"); 
                    

$options[] = array( "name" => "Midle Footer Options",
					"type" => "line"); 
                                         
$options[] = array( "name" => "Midle Footer",
					"desc" => "If you don't want display Midle Footer, turn off the button.",
					"id" => $shortname."_midle_footer",
					"std" => "true",
					"type" => "checkbox");  
                                                         
$url =  get_bloginfo('stylesheet_directory') . '/admin/images/columns/';
$options[] = array( "name" => "Midle Footer Column Type",
					"desc" => "Choose the layout of Midle Footer columns you'd like the footer widgets displayed in.",
					"id" => $shortname."_footer_column_layout_midle",
					"std" => "",
					"type" => "images",
					"options" => array(
						'01' => $url . '1.png',
						'02' => $url . '2-2.png',
						'03' => $url . '3-3-3.png',
                        '04' => $url . '4-4-4-4.png',
                        '05' => $url . '5-5-5-5-5.png',
                        '06' => $url . '6-6-6-6-6-6.png',
                        '07' => $url . '2-4-4.png',
                        '08' => $url . '2-3-3-3.png',
                        '09' => $url . '4-4-2.png',
                        '010' => $url . '3-3-3-2.png'));

$options[] = array( "name" => "Midle Footer Area HTML Custom Code",
					"desc" => "Enter midle footer custom HTML code here.",
					"id" => $shortname."_midle_footer_html",
					"std" => "",
					"type" => "textarea"); 




$options[] = array( "name" => "Bottom Footer Options",
					"type" => "line"); 

$options[] = array( "name" => "Bottom Footer",
					"desc" => "If you don't want display Bottom Footer, turn off the button.",
					"id" => $shortname."_bottom_footer",
					"std" => "true",
					"type" => "checkbox");
                                        
$options[] = array( "name" => "Bottom Footer Copyright Text",
					"desc" => "Enter the copyright text that you'd like to display in the bottom footer.",
					"id" => $shortname."_bottom_footer_copyright",
					"std" => "",
					"type" => "textarea");                          

$options[] = array( "name" => "Bottom Footer Right Area Type",
					"desc" => "Select bottom footer right area type here.",
					"id" => $shortname."_bottom_footer_type",
					"std" => "Menu",
					"type" => "select2",
					"options" => $options_sub_right); 

$options[] = array( "name" => "Twitter Usernam For Bottom Footer Right Area",
					"desc" => "Input twitter username here.",
					"id" => $shortname."_footer_twitter",
					"std" => "",
					"type" => "text"); 
                                        
$options[] = array( "name" => "Bottom Footer Right Area HTML Custom Code",
					"desc" => "Enter bottom footer right area HTML custom code here.",
					"id" => $shortname."_bottom_footer_html",
					"std" => "",
					"type" => "textarea"); 
     


//------------------ STYLING FOOTER ------------------------------------------------------------------------------------//

$options[] = array( "name" => "Styling Footer",
                    "icon" => "http://cdn1.iconfinder.com/data/icons/fatcow/16x16/border_1d_bottom.png",
					"type" => "heading");     
                    
$options[] = array( "name" => "Top Footer Style",
					"type" => "line"); 
                    
$options[] = array( "name" => "Top Footer Custom Style",
					"desc" => "If you want display Top Footer custom style, turn on the button.",
					"id" => $shortname."_top_footer_custom_style",
					"std" => "false",
					"type" => "checkbox");  

$options[] = array( "name" => "Top Footer Background Options",
					"desc" => "Enter top footer background style here.",
					"id" => $shortname."_top_footer_background_options",
					"std" => array('color' => '', 'repeate' => '','position' => '','position2' => ''),
					"type" => "background"); 
                                        
$options[] = array( "name" => "Top Footer Background Image",
					"desc" => "Paste the full URL (include http://) of your custom top footer background image here or you can insert the image through the button.",
					"id" => $shortname."_top_footer_background_image",
					"std" => "",
					"type" => "upload");  

$options[] = array( "name" => "Top Footer Heading Color",
					"desc" => "Enter top footer heading color here.",
					"id" => $shortname."_top_footer_heading_color",
					"std" => array('color' => '', 'fonttype' => ''),
					"type" => "headings"); 

$options[] = array( "name" => "Widget h2 Size",
					"desc" => "Slide widget h2 size here.",
					"id" => $shortname."_top_widget_h2_size",
                    "sliderid" =>  $shortname_slider."_top_widget_h2_size",
					"value" => "21",
                    "object" => "px",
                    "min" => "10",
                    "max" => "72",
                    "range" => "min",
                    "step" => "1",
					"type" => "slider"); 
                    
                                                                                
$options[] = array( "name" => "Top Footer Text Style",
					"desc" => "Enter top footer text style here.",
					"id" => $shortname."_top_footer_text_style",
					"std" => array('size' => '12','unit' => 'em','face' => 'verdana','style' => 'normal','color' => ''),
					"type" => "typography");   

$options[] = array( "name" => "Top Footer Link Style",
					"desc" => "Enter top footer link style here.",
					"id" => $shortname."_top_footer_link_style",
					"std" => array('size' => '12','unit' => 'em','face' => 'verdana','style' => 'normal','color' => ''),
					"type" => "typography");                                         
                    
$options[] = array( "name" => "Top Footer Link Hover Style.",
					"desc" => "Enter top footer link hover style here.",
					"id" => $shortname."_top_footer_linkhover_style",
					"std" => array('size' => '12','unit' => 'em','face' => 'verdana','style' => 'normal','color' => ''),
					"type" => "typography");  



$options[] = array( "name" => "Midle Footer Style",
					"type" => "line"); 
                    
$options[] = array( "name" => "Midle Footer Custom Style",
					"desc" => "If you want display Midle Footer custom style, turn on the button.",
					"id" => $shortname."_midle_footer_custom_style",
					"std" => "false",
					"type" => "checkbox");  

$options[] = array( "name" => "Midle Footer Background Options",
					"desc" => "Enter midle footer background style here.",
					"id" => $shortname."_midle_footer_background_options",
					"std" => array('color' => '', 'repeate' => '','position' => '' ,'position2' => ''),
					"type" => "background"); 
                                        
$options[] = array( "name" => "Midle Footer Background Image",
					"desc" => "Paste the full URL (include http://) of your custom midle footer background image here or you can insert the image through the button.",
					"id" => $shortname."_midle_footer_background_image",
					"std" => "",
					"type" => "upload");  

$options[] = array( "name" => "Midle Footer Heading Color",
					"desc" => "Enter midle footer heading color here.",
					"id" => $shortname."_midle_footer_heading_color",
					"std" => array('color' => '', 'fonttype' => ''),
					"type" => "headings"); 

$options[] = array( "name" => "Widget h2 Size",
					"desc" => "Slide midle footer heading color here.",
					"id" => $shortname."_midle_widget_h2_size",
                    "sliderid" =>  $shortname_slider."_midle_widget_h2_size",
					"value" => "21",
                    "object" => "px",
                    "min" => "10",
                    "max" => "72",
                    "range" => "min",
                    "step" => "1",
					"type" => "slider"); 
                                                                                
$options[] = array( "name" => "Midle Footer Text Style",
					"desc" => "Enter midle footer text style here.",
					"id" => $shortname."_midle_footer_text_style",
					"std" => array('size' => '12','unit' => 'em','face' => 'verdana','style' => 'normal','color' => ''),
					"type" => "typography");   

$options[] = array( "name" => "Midle Footer Link Style",
					"desc" => "Enter midle footer link style here.",
					"id" => $shortname."_midle_footer_link_style",
					"std" => array('size' => '12','unit' => 'em','face' => 'verdana','style' => 'normal','color' => ''),
					"type" => "typography");                                         
                    
$options[] = array( "name" => "Midle Footer Link Hover Style.",
					"desc" => "Enter midle footer link hover style here.",
					"id" => $shortname."_midle_footer_linkhover_style",
					"std" => array('size' => '12','unit' => 'em','face' => 'verdana','style' => 'normal','color' => ''),
					"type" => "typography");  
                    
                    
                    
$options[] = array( "name" => "Bottom Footer Style",
					"type" => "line"); 
                    
$options[] = array( "name" => "Bottom Footer Custom Style",
					"desc" => "If you want display Bottom Footer custom style, turn on the button.",
					"id" => $shortname."_bottom_footer_custom_style",
					"std" => "false",
					"type" => "checkbox");  

$options[] = array( "name" => "Bottom Footer Background Options",
					"desc" => "Enter bottom footer background style.",
					"id" => $shortname."_bottom_footer_background_options",
					"std" => array('color' => '', 'repeate' => '','position' => '' ,'position2' => ''),
					"type" => "background"); 

$options[] = array( "name" => "Bottom Footer Background Image",
					"desc" => "Paste the full URL (include http://) of your custom bottom footer background image here or you can insert the image through the button.",
					"id" => $shortname."_bottom_footer_background_image",
					"std" => "",
					"type" => "upload");                     
                                        
$options[] = array( "name" => "Bottom Footer Text Style",
					"desc" => "Enter bottom footer text style here.",
					"id" => $shortname."_bottom_footer_text_style",
					"std" => array('size' => '12','unit' => 'em','face' => 'verdana','style' => 'normal','color' => ''),
					"type" => "typography");   

$options[] = array( "name" => "Bottom Footer Link Style",
					"desc" => "Enter bottom footer link style here.",
					"id" => $shortname."_bottom_footer_link_style",
					"std" => array('size' => '12','unit' => 'em','face' => 'verdana','style' => 'normal','color' => ''),
					"type" => "typography");                                         
                    
$options[] = array( "name" => "Bottom Footer Link Hover Style",
					"desc" => "Enter bottom footer link hover style here.",
					"id" => $shortname."_bottom_footer_linkhover_style",
					"std" => array('size' => '12','unit' => 'em','face' => 'verdana','style' => 'normal','color' => ''),
					"type" => "typography");                     
                    


//------------------ NIVO SLIDER ------------------------------------------------------------------------------------//
 
$options[] = array( "name" => "Nivo Slider",
                    "icon" => "http://cdn5.iconfinder.com/data/icons/fugue/icon/image-export.png",
					"type" => "heading");                   					    

$options[] = array( "name" => "Nivo Slider",
					"type" => "line"); 

$options[] = array( "name" => "Nivo Slider Height",
					"desc" => "Slide Nivo Slider height here.",
					"id" => $shortname."_nivo_slider_height",
                    "sliderid" =>  $shortname_slider."_nivo_slider_height",
					"value" => "350",
                    "object" => "px",
                    "min" => "50",
                    "max" => "600",
                    "range" => "min",
                    "step" => "10",
					"type" => "slider");  
                    
$options[] = array( "name" => "Effect",
					"desc" => "Select Nivo Slider effect here.",
					"id" => $shortname."_nivo_slider_effect",
					"std" => "random",
					"type" => "select",
					"options" => array(
						'random' => 'random',
                        'fade' => 'fade',
                        'fold' => 'fold',
                        'sliceUpDownLeft' => 'sliceUpDownLeft',
                        'sliceUpDown' => 'sliceUpDown',
                        'sliceUpLeft' => 'sliceUpLeft',
                        'sliceUp' => 'sliceUp',
                        'sliceDownLeft' => 'sliceDownLeft',
                        'sliceDown' => 'sliceDown',
						'slideInLeft' => 'slideInLeft',
						'slideInRight' => 'slideInRight'));                   
                                     

                    
$options[] = array( "name" => "Anim Speed",
					"desc" => "Slide Nivo Slider anim speed here.",
					"id" => $shortname."_nivo_slider_speed",
                    "sliderid" =>  $shortname_slider."_nivo_slider_speed",
					"value" => "600",
                    "object" => "ms",
                    "min" => "500",
                    "max" => "1200",
                    "range" => "min",
                    "step" => "100",
					"type" => "slider");  
                                       

$options[] = array( "name" => "Pause Time",
					"desc" => "Slide Nivo Slider pause time here.",
					"id" => $shortname."_nivo_slider_pause",
                    "sliderid" =>  $shortname_slider."_nivo_slider_pause",
					"value" => "4000",
                    "object" => "ms",
                    "min" => "3000",
                    "max" => "10000",
                    "range" => "min",
                    "step" => "500",
					"type" => "slider");  
                                                      
$options[] = array( "name" => "Start Slide",
					"desc" => "Slide Nivo Slider start slide here.",
					"id" => $shortname."_nivo_slider_start",
                    "sliderid" =>  $shortname_slider."_nivo_slider_start",
					"value" => "1",
                    "object" => "img",
                    "min" => "1",
                    "max" => "50",
                    "range" => "min",
                    "step" => "1",
					"type" => "slider");  
                                          
$options[] = array( "name" => "Slices",
					"desc" => "Slide Nivo Slider slices here.",
					"id" => $shortname."_nivo_slider_slices",
                    "sliderid" =>  $shortname_slider."_nivo_slider_slices",
					"value" => "25",
                    "object" => "img",
                    "min" => "1",
                    "max" => "40",
                    "range" => "min",
                    "step" => "1",
					"type" => "slider");                     
                    
$options[] = array( "name" => "Nivo Slider content opacity",
					"desc" => "Slide Nivo Slider content opacity here.",
					"id" => $shortname."_nivo_slider_opacity",
                    "sliderid" =>  $shortname_slider."_nivo_slider_opacity",
					"value" => "8",
                    "object" => "opc",
                    "min" => "0",
                    "max" => "9",
                    "range" => "min",
                    "step" => "1",
					"type" => "slider");  

$options[] = array( "name" => "Nivo Slider Hover Pause",
					"desc" => "Turn on/off nivo slide hover pause.",
					"id" => $shortname."_nivo_slider_hover",
					"std" => "true",
					"type" => "checkbox");  
                    
$options[] = array( "name" => "Nivo Slider Control Nav",
					"desc" => "Turn on/off nivo slide control nav.",
					"id" => $shortname."_nivo_slider_control",
					"std" => "true",
					"type" => "checkbox");  

$options[] = array( "name" => "Nivo Slider Direction Nav",
					"desc" => "Turn on/off nivo slide direction nav.",
					"id" => $shortname."_nivo_slider_nav",
					"std" => "true",
					"type" => "checkbox");  
                    
                                                            
//------------------ BX SLIDER ------------------------------------------------------------------------------------//
 
$options[] = array( "name" => "BX Slider",
                    "icon" => "http://cdn5.iconfinder.com/data/icons/fugue/icon/image-export.png",
					"type" => "heading");                   					    

$options[] = array( "name" => "BX Slider",
					"type" => "line");                     

$options[] = array( "name" => "BX Slider Height",
					"desc" => "Slide BX Slider height here.",
					"id" => $shortname."_bx_slider_height",
                    "sliderid" =>  $shortname_slider."_bx_slider_height",
					"value" => "350",
                    "object" => "px",
                    "min" => "50",
                    "max" => "600",
                    "range" => "min",
                    "step" => "10",
					"type" => "slider");  
                    
$options[] = array( "name" => "BX Slider Speed",
					"desc" => "Slide BX Slider anim speed here.",
					"id" => $shortname."_bx_slider_speed",
                    "sliderid" =>  $shortname_slider."_bx_slider_speed",
					"value" => "2000",
                    "object" => "ms",
                    "min" => "500",
                    "max" => "10000",
                    "range" => "min",
                    "step" => "500",
					"type" => "slider");  

$options[] = array( "name" => "BX Slider Pause",
					"desc" => "Slide BX Slider anim pause here.",
					"id" => $shortname."_bx_slider_pause",
                    "sliderid" =>  $shortname_slider."_bx_slider_pause",
					"value" => "3000",
                    "object" => "ms",
                    "min" => "500",
                    "max" => "10000",
                    "range" => "min",
                    "step" => "500",
					"type" => "slider");  

$options[] = array( "name" => "BX Slider Auto Start",
					"desc" => "Turn on/off bx slider auto start.",
					"id" => $shortname."_bx_slider_auto",
					"std" => "true",
					"type" => "checkbox");  

$options[] = array( "name" => "BX Slider Pager",
					"desc" => "Turn on/off bx slide pager.",
					"id" => $shortname."_bx_slider_pager",
					"std" => "true",
					"type" => "checkbox");  

$options[] = array( "name" => "BX Slider Control",
					"desc" => "Turn on/off bx slide control.",
					"id" => $shortname."_bx_slider_controls",
					"std" => "false",
					"type" => "checkbox");                

$options[] = array( "name" => "BX Slider Hover Pause",
					"desc" => "Turn on/off bx slide hover pause.",
					"id" => $shortname."_bx_slider_hover",
					"std" => "true",
					"type" => "checkbox");   




$options[] = array( "name" => "BX Slider Style",
					"type" => "line");  

$options[] = array( "name" => "Enable BX Slider Style",
					"desc" => "Turn on/off bx slider style.",
					"id" => $shortname."_bx_slider_style",
					"std" => "true",
					"type" => "checkbox"); 
                                        
$options[] = array( "name" => "BX Slider Background Color",
					"desc" => "Slide BX Slider background color here.",
					"id" => $shortname."_bx_slider_background_color",
					"std" => "",
					"type" => "color");                      
                                        
$options[] = array( "name" => "BX Slider Title Size",
					"desc" => "Slide BX Slider title size here.",
					"id" => $shortname."_bx_slider_title_size",
                    "sliderid" =>  $shortname_slider."_bx_slider_title_size",
					"value" => "26",
                    "object" => "px",
                    "min" => "12",
                    "max" => "72",
                    "range" => "min",
                    "step" => "1",
					"type" => "slider");                      
                    
$options[] = array( "name" => "BX Slider Title Color",
					"desc" => "Slide BX Slider title color here.",
					"id" => $shortname."_bx_slider_title_color",
					"std" => "",
					"type" => "color"); 
                                         
$options[] = array( "name" => "BX Slider Text Color",
					"desc" => "Slide BX Slider text color here.",
					"id" => $shortname."_bx_slider_text_color",
					"std" => "",
					"type" => "color");                     

$options[] = array( "name" => "BX Slider Button Size",
					"desc" => "Slide BX Slider button size here.",
					"id" => $shortname."_bx_slider_button_size",
                    "sliderid" =>  $shortname_slider."_bx_slider_button_size",
					"value" => "11",
                    "object" => "px",
                    "min" => "10",
                    "max" => "72",
                    "range" => "min",
                    "step" => "1",
					"type" => "slider");  

$options[] = array( "name" => "BX Slider Button Background",
					"desc" => "Slide BX Slider button color here.",
					"id" => $shortname."_bx_slider_button_background",
					"std" => "",
					"type" => "color"); 

$options[] = array( "name" => "BX Slider Hover Button Background",
					"desc" => "Slide BX Slider button hover color here.",
					"id" => $shortname."_bx_slider_button_background_hover",
					"std" => "",
					"type" => "color"); 
                    
$options[] = array( "name" => "BX Slider Button Text",
					"desc" => "Slide BX Slider title color here.",
					"id" => $shortname."_bx_slider_button_text",
					"std" => "",
					"type" => "color"); 
                    
 $options[] = array( "name" => "BX Slider Hover Button Text",
					"desc" => "Slide BX Slider hover button color here.",
					"id" => $shortname."_bx_slider_button_text_hover",
					"std" => "",
					"type" => "color");                   
                                        

                    
                                                                                                         
//------------------ BX SLIDER ------------------------------------------------------------------------------------//
 
$options[] = array( "name" => "Orbit Slider",
                    "icon" => "http://cdn5.iconfinder.com/data/icons/fugue/icon/image-export.png",
					"type" => "heading");                   					    

$options[] = array( "name" => "Orbit Slider",
					"type" => "line");   

$options[] = array( "name" => "Orbit Slider Height",
					"desc" => "Slide Orbit Slider height here.",
					"id" => $shortname."_orbit_slider_height",
                    "sliderid" =>  $shortname_slider."_orbit_slider_height",
					"value" => "350",
                    "object" => "px",
                    "min" => "50",
                    "max" => "600",
                    "range" => "min",
                    "step" => "10",
					"type" => "slider");  
                                        
$options[] = array( "name" => "Effect",
					"desc" => "Select Orbit Slider effect here.",
					"id" => $shortname."_orbit_slider_animation",
					"std" => "fade",
					"type" => "select",
					"options" => array(
						'horizontal-slide' => 'horizontal-slide',
                        'fade' => 'fade',
                        'horizontal-push' => 'horizontal-push',
                        'vertical-slide' => 'vertical-slide'));                                         

$options[] = array( "name" => "Orbit Slider Speed",
					"desc" => "Slide Orbit Slider anim speed here.",
					"id" => $shortname."_orbit_slider_speed",
                    "sliderid" =>  $shortname_slider."_orbit_slider_speed",
					"value" => "800",
                    "object" => "ms",
                    "min" => "500",
                    "max" => "10000",
                    "range" => "min",
                    "step" => "100",
					"type" => "slider");  

$options[] = array( "name" => "Orbit Slider Pause",
					"desc" => "Slide Orbit Slider anim pause here.",
					"id" => $shortname."_orbit_slider_pause",
                    "sliderid" =>  $shortname_slider."_orbit_slider_pause",
					"value" => "4000",
                    "object" => "ms",
                    "min" => "500",
                    "max" => "12000",
                    "range" => "min",
                    "step" => "500",
					"type" => "slider");  

$options[] = array( "name" => "Orbit Slider Timer",
					"desc" => "Turn on/off orbit slider timer.",
					"id" => $shortname."_orbit_slider_timer",
					"std" => "true",
					"type" => "checkbox");  

$options[] = array( "name" => "Orbit Slider Hover Pause",
					"desc" => "Turn on/off orbit slider hover pause.",
					"id" => $shortname."_orbit_slider_hover",
					"std" => "true",
					"type" => "checkbox");
                    
$options[] = array( "name" => "Orbit Slider Bullets",
					"desc" => "Turn on/off orbit slider bullets.",
					"id" => $shortname."_orbit_slider_bullets",
					"std" => "true",
					"type" => "checkbox");                    
/**
 * 
$options[] = array( "name" => "Example Options",
					"type" => "heading"); 	   

$options[] = array( "name" => "Typograpy",
					"desc" => "This is a typographic specific option.",
					"id" => $shortname."_typograpy",
					"std" => array('size' => '16','unit' => 'em','face' => 'verdana','style' => 'bold italic','color' => '#123456'),
					"type" => "typography");  
					
$options[] = array( "name" => "Border",
					"desc" => "This is a border specific option.",
					"id" => $shortname."_border",
					"std" => array('width' => '2','style' => 'dotted','color' => '#444444'),
					"type" => "border");      

$options[] = array( "name" => "Background",
					"desc" => "This is a border specific option.",
					"id" => $shortname."_border2",
					"std" => array('color' => '#ffffff', 'repeate' => '2','position' => 'dotted','image' => ''),
					"type" => "background");      
                    					
$options[] = array( "name" => "Colorpicker",
					"desc" => "No color selected.",
					"id" => $shortname."_example_colorpicker",
					"std" => "",
					"type" => "color"); 
					
$options[] = array( "name" => "Colorpicker (default #2098a8)",
					"desc" => "Color selected.",
					"id" => $shortname."_example_colorpicker_2",
					"std" => "#2098a8",
					"type" => "color");          
                    
$options[] = array( "name" => "Upload Basic",
					"desc" => "An image uploader without text input.",
					"id" => $shortname."_uploader",
					"std" => "",
					"type" => "upload_min");     
                                    
$options[] = array( "name" => "Input Text",
					"desc" => "A text input field.",
					"id" => $shortname."_test_text",
					"std" => "Default Value",
					"type" => "text"); 
                                        
$options[] = array( "name" => "Input Checkbox (false)",
					"desc" => "Example checkbox with false selected.",
					"id" => $shortname."_example_checkbox_false",
					"std" => "false",
					"type" => "checkbox");    
                                        
$options[] = array( "name" => "Input Checkbox (true)",
					"desc" => "Example checkbox with true selected.",
					"id" => $shortname."_example_checkbox_true",
					"std" => "true",
					"type" => "checkbox"); 
                                                                               
$options[] = array( "name" => "Input Select Small",
					"desc" => "Small Select Box.",
					"id" => $shortname."_example_select",
					"std" => "three",
					"type" => "select",
					"class" => "mini", //mini, tiny, small
					"options" => $options_select);                                                          

$options[] = array( "name" => "Input Select Wide",
					"desc" => "A wider select box.",
					"id" => $shortname."_example_select_wide",
					"std" => "two",
					"type" => "select2",
					"options" => $options_radio);    

$options[] = array( "name" => "Input Radio (one)",
					"desc" => "Radio select with default of 'one'.",
					"id" => $shortname."_example_radio",
					"std" => "one",
					"type" => "radio",
					"options" => $options_radio);
					
$url =  get_bloginfo('stylesheet_directory') . '/admin/images/';
$options[] = array( "name" => "Image Select",
					"desc" => "Use radio buttons as images.",
					"id" => $shortname."_images",
					"std" => "",
					"type" => "images",
					"options" => array(
						'warning.css' => $url . 'warning.png',
						'accept.css' => $url . 'accept.png',
						'wrench.css' => $url . 'wrench.png'));
                                        
$options[] = array( "name" => "Textarea",
					"desc" => "Textarea description.",
					"id" => $shortname."_example_textarea",
					"std" => "Default Text",
					"type" => "textarea"); 
                                        
$options[] = array( "name" => "Multicheck",
					"desc" => "Multicheck description.",
					"id" => $shortname."_example_multicheck",
					"std" => "two",
					"type" => "multicheck",
					"options" => $options_radio);
                                        
$options[] = array( "name" => "Select a Category",
					"desc" => "A list of all the categories being used on the site.",
					"id" => $shortname."_example_category",
					"std" => "Select a category:",
					"type" => "select",
					"options" => $of_pages);  */

update_option('of_template',$options); 					  
update_option('of_themename',$themename);   
update_option('of_shortname',$shortname);

}
}
?>
