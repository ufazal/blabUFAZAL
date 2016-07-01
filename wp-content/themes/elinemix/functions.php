<?php
/**
 * @author madars.bitenieks
 * @copyright 2011
 *
 */

 /** 
*****************************************************************************************************************
*** DIRECTORY  **************************************************************************************************
*****************************************************************************************************************
*/

if ( STYLESHEETPATH == TEMPLATEPATH ) {
	define('OF_FILEPATH', TEMPLATEPATH);
	define('OF_DIRECTORY', get_bloginfo('template_directory'));
} else {
	define('OF_FILEPATH', STYLESHEETPATH);
	define('OF_DIRECTORY', get_bloginfo('stylesheet_directory'));
}


 /** 
*****************************************************************************************************************
*** BASIC HOOKS  ************************************************************************************************
*****************************************************************************************************************
*/
function limit_words($string, $word_limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $word_limit));
 
}
function jquery_scripts() {
    if (!is_admin()) {
        
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js', false);
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('nivo_slider', get_bloginfo('template_url') . '/includes/nivo/jquery.nivo.slider.js', array('jquery'));

    wp_enqueue_script('png_fix', get_bloginfo('template_url') . '/includes/jquery.pngFix.js', array('jquery'));
    wp_enqueue_script('quicksand', get_bloginfo('template_url') . '/includes/jquery.quicksand.js', array('jquery'));
    wp_enqueue_script('effect_directory', get_bloginfo('template_url') . '/includes/effects.js', array('jquery'));
    wp_enqueue_script('easing', get_bloginfo('template_url') . '/includes/jquery.easing.1.3.js', array('jquery'));
    wp_enqueue_script('pretty_photo', get_bloginfo('template_url') . '/includes/prettyphoto/js/jquery.prettyPhoto.js', array('jquery'));
    wp_enqueue_script('bx_slider', get_bloginfo('template_url') . '/includes/sliders/bx-slider/jquery.bxSlider.min.js', array('jquery'));
    wp_enqueue_script('orbit_slider', get_bloginfo('template_url') . '/includes/sliders/orbit-slider/jquery.orbit.min.js', array('jquery'));
    
    wp_enqueue_style('orbit_slider_style', get_bloginfo('template_url').'/includes/sliders/orbit-slider/orbit.css');
    wp_enqueue_style('bx_slider_style', get_bloginfo('template_url').'/includes/sliders/bx-slider/bx_styles/bx_styles.css');
    wp_enqueue_style('shortcode_style', get_bloginfo('template_url').'/css/shortcodes.css');
    wp_enqueue_style('nivo_style', get_bloginfo('template_url').'/includes/nivo/nivo-slider.css');
    wp_enqueue_style('prettyphoto_style', get_bloginfo('template_url').'/includes/prettyphoto/css/prettyPhoto.css');
    wp_enqueue_style('shortcode_style', get_bloginfo('template_url').'/css/shortcodes.css');
    }
}    
add_action('init', 'jquery_scripts');


/** HEADER HOOKS **/
function jquery_plugins() {
    
if ( !is_admin() ) { // instruction to only load if it is not the admin area
       
       
/** PLUGIN HOOKS **/
?>
<link rel="icon" href="<?php echo get_option('of_custom_favicon'); ?>" type="image/x-icon" >
<link rel="shortcut icon" href="<?php echo get_option('of_custom_favicon'); ?>" type="image/x-icon" >
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" >
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" >
<link rel="profile" href="http://gmpg.org/xfn/11" >




<script type="text/javascript"> 
    $(document).ready(function(){ 
        $(document).pngFix(); 
    }); 
</script> 
<?php
        
      
        
/** CUSTOM HOOKS **/
require_once (OF_FILEPATH . '/css/style.php');          // Theme style settings

if(get_option("of_custom_style")){ ?> 
        
<style type="text/css"> <?php
    echo get_option('of_custom_style');
    ?>
</style> <?php
        }
        
    }
}
add_action('wp_head', 'jquery_plugins');


/** FOOTER HOOKS **/
function jquery_plugins_footer() {
    if ( !is_admin() ) { 
       ?>
            <script type="text/javascript" charset="utf-8">
                    
                    //PRETTY PHOTO JQUERY
            		$(document).ready(function(){
            			$("a[rel^='prettyPhoto']").prettyPhoto({show_title: false,opacity: 0.50,});
            		});
                    
                    //CONTACT FORM JQUERY
                    jQuery(document).ready(function() {
                        
                        $('#send_message').click(function(e){
                            e.preventDefault();
                            
                            var error = false;
                            var name = $('#name').val();
                            var email = $('#email').val();
                            var subject = $('#subject').val();
                            var message = $('#message').val();
                            
                            
                            if(name.length == 0){
                                var error = true;
                                $('#name_error').fadeIn(500);
                            }else{
                                $('#name_error').fadeOut(500);
                            }
                            if(email.length == 0 || email.indexOf('@') == '-1'){
                                var error = true;
                                $('#email_error').fadeIn(500);
                            }else{
                                $('#email_error').fadeOut(500);
                            }
                            
                            if(message.length == 0){
                                var error = true;
                                $('#message_error').fadeIn(500);
                            }else{
                                $('#message_error').fadeOut(500);
                            }
                            
                           
                            if(error == false){
                                
                                $('#send_message').attr({'disabled' : 'true', 'value' : 'Sending...' });
                                
                                $.post("<?php bloginfo('template_url'); ?>/includes/send_email.php", $("#contact_form").serialize(),function(result){
                                   
                                    if(result == 'sent'){
                                       
                                         $('#cf_submit_p').remove();
                                        
                                        $('#mail_success').fadeIn(500);
                                    }else{
                                       
                                        $('#mail_fail').fadeIn(500);
                                        
                                        $('#send_message').removeAttr('disabled').attr('value', 'Send Message');
                                    }
                                });
                            }
                        });    
                    });
                 
            </script>  
            
        <?php
        
        //ADMIN PANEL CUSTOM CODE
        echo get_option('of_custom_code');

        //ADMIN PANEL GOOGLE ANALYSTICS
        echo get_option('of_google_analytics');
    }
}
add_action('wp_footer', 'jquery_plugins_footer');
 /** 
*****************************************************************************************************************
*** GENERAL OPTIONS  ********************************************************************************************
*****************************************************************************************************************
*/

/**
 * CONTACT FORM FOOTER
 */
class FooterContactForm extends WP_Widget {

    function FooterContactForm() {
        parent::WP_Widget(false, $name = 'Footer Contact Form');	
    }
    function widget($args, $instance) {		
        extract( $args );
        $title = apply_filters('widget_title', $instance['title']);
        $email = apply_filters('widget_title', $instance['email']);
        ?>
              <?php echo $before_widget; ?>
              
              
                  <?php if ( $title ) {
                        echo $before_title . $title . $after_title; }
                        ?>
                  
                  
                <div id="contact_form_holder"> 
                <form action="<?php echo get_bloginfo("template_url"); ?>/includes/send_email.php" method="post" id="contact_form"> 
                
                
                <div><input type="text" name="name" id="name"><label>Name</label></div> 
                
                <div class="clear"></div> 
                <div><input type="text" name="email" id="email"><label>E-mail</label></div> 
                <input type="text" name="email_to" style="display: none;" value="<?php echo $email; ?>" id="email_to"> 
                <input type="text" name="subject" style="display: none;" value="Contact Form" id="subject"> 
                <div><textarea name="message" rows="5" id="message"></textarea></div> 
                
                
                
                <input type="submit"  id="send_message" value="Send Mesage"> 
                <div class="clear"></div> 
                <div id="mail_success" class="success"><img src="<?php echo get_bloginfo("template_url"); ?>/images/success.png"> Thank You!</div> 
                <div id="mail_fail" class="error"><img src="<?php echo get_bloginfo("template_url"); ?>/images/error.png"> Sorry! Try later.</div> 
                
                </form>  
            </div> 
                  
                  
                  
              <?php echo $after_widget; ?>
        <?php
    }
    function update($new_instance, $old_instance) {				
	$instance = $old_instance;
	$instance['title'] = strip_tags($new_instance['title']);
    $instance['email'] = strip_tags($new_instance['email']);
        return $instance;
    }
    function form($instance) {				
        $title = esc_attr($instance['title']);
        $email = esc_attr($instance['email']);
        ?>
            <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>
        
            <p><label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('Your e-mail:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo $email; ?>" /></label></p>
        <?php 
    }

} 

add_action('widgets_init', create_function('', 'return register_widget("FooterContactForm");'));


add_action( 'after_setup_theme', 'Gooseo_setup' );
if ( ! function_exists( 'Gooseo_setup' ) ):
function Gooseo_setup() {

add_editor_style();

remove_filter('the_content','shortcode_unautop');

function remove_wpautop($content) { 
    $content = do_shortcode( shortcode_unautop($content) ); 
    $content = preg_replace( '#^<\/p>|^<br \/>|<p>$#', '', $content );
    return $content;
}
function formatter($content) {
    $new_content = '';
    $pattern_full = '{(\[raw\].*?\[/raw\])}is';
    $pattern_contents = '{\[raw\](.*?)\[/raw\]}is';
    $pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);
    foreach ($pieces as $piece) {
        if (preg_match($pattern_contents, $piece, $matches)) {
            $new_content .= $matches[1];
        } else {
            $new_content .= wptexturize(wpautop($piece));
        }
    }
    return $new_content;
}
remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');
add_filter('the_content', 'formatter', 99);
add_filter( 'the_content', 'shortcode_unautop');
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');

add_theme_support( 'post-thumbnails' );

add_theme_support( 'automatic-feed-links' );

load_theme_textdomain( 'Gooseo', TEMPLATEPATH . '/languages' );

$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if ( is_readable( $locale_file ) )
	require_once( $locale_file );

register_nav_menus( array(
	'primary' => __( 'Primary Navigation', 'Gooseo' ),
	'main' => __( 'Main Navigation', 'Gooseo' ),
	'footer' => __( 'Footer Navigation', 'Gooseo' ),
) );


set_post_thumbnail_size( 630, 200, true );
}
endif;

function Gooseo_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'Gooseo_page_menu_args' );


//Continue Reading
function Gooseo_continue_reading_link() {
	return ' <div class="more-diva-2"><span class="more-link-2"><a href="'. get_permalink() . '">' . __( 'Read More ...' ) . '</a></span></div>';
}
add_action('Gooseo_continue_reading_link', 'Gooseo_continue_reading_link');
function Gooseo_auto_excerpt_more( $more ) {
	return ' &hellip;' . Gooseo_continue_reading_link();
}
add_filter( 'excerpt_more', 'Gooseo_auto_excerpt_more' );

function Gooseo_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= Gooseo_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'Gooseo_custom_excerpt_more' );


/** 
*****************************************************************************************************************
*** COMENT FUNCTION  ********************************************************************************************
*****************************************************************************************************************
*/
if ( ! function_exists( 'Gooseo_comment' ) ) :

function Gooseo_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	
		<div id="comment-<?php comment_ID(); ?>">
		<div class="comment_vcard">
            <div class="comment_photo">
    			<?php echo get_avatar( $comment, 60 ) ; ?>
            <div class="clear"></div>    
            <div class="reply_link"><?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></div>    
            </div>
            <div class="comment_text">
    			<div class="comment_name"><?php printf( __( '<h5>%s</h5>', 'Gooseo' ), sprintf( '%s', get_comment_author_link() ) ); ?></div>
                <div class="comment_date">
                
                    <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
        			<?php
        				/* translators: 1: date, 2: time */
        				printf( __( '%1$s at %2$s', 'Gooseo' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'Gooseo' ), ' ' );
        			?>
        	       	
                
                </div>
                <div class="comment_conent"><?php comment_text(); ?></div>
                
    		</div>
            
            
         <div class="clear"></div>
        </div>
        <div class="clear"></div>
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em><?php _e( 'Your comment is awaiting moderation.', 'Gooseo' ); ?></em>
			<br />
		<?php endif; ?>
</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'Gooseo' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)'), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;

function my_search_form( $form ) {

    $form = '<h2>Search</h2>
    
        <form method="get" id="searchform" action="'. home_url( '/' ) .'/">
        
            <div id="search_icon"></div>
            
            <input type="text" value="'. the_search_query() .'" name="s" id="s3" class="search_input3" />
            
            <div id="searchsubmit_div_3"><input type="submit" id="searchsubmit3" value="" class="search_submit3"/></div>
           
        </form>
    
   ';

    return $form;
}

add_filter( 'get_search_form', 'my_search_form' );

/** 
*****************************************************************************************************************
*** WIDGET AREAS  ***********************************************************************************************
*****************************************************************************************************************
*/

function event_widget() {
    register_sidebar( array(
		'name' => __( 'Event Calendar'),
		'id' => 'event_calendar',
		'description' => __( 'Event Calendar Widget Area' ),
		'before_widget' => '<div class="footer_widget_midle">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'event_widget' );

function sidebar_widget_1() {
	register_sidebar( array(
		'name' => __( 'Page Sidebar Widget Area'),
		'id' => 'sidebar-widget-area-1',
		'description' => __( 'The page sidebar widget area' ),
		'before_widget' => '<div class="menu_categories">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'sidebar_widget_1' );

function sidebar_widget_2() {
	register_sidebar( array(
		'name' => __( 'Blog Sidebar Widget Area'),
		'id' => 'sidebar-widget-area-2',
		'description' => __( 'The blog sidebar widget area' ),
		'before_widget' => '<div class="menu_categories">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'sidebar_widget_2' );

function sidebar_widget_3() {
	register_sidebar( array(
		'name' => __( 'Contact Page Sidebar Widget Area'),
		'id' => 'sidebar-widget-area-3',
		'description' => __( 'The Contact Page sidebar widget area' ),
		'before_widget' => '<div class="menu_categories">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'sidebar_widget_3' );

function footer_top_column_1() {
    register_sidebar( array(
		'name' => __( 'Footer Top Column 1'),
		'id' => 'footer-top-column-1',
		'description' => __( 'Footer Top Footer Column 1 Widget Area' ),
		'before_widget' => '<div class="footer_widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'footer_top_column_1' );

function footer_top_column_2() {
    register_sidebar( array(
		'name' => __( 'Footer Top Column 2'),
		'id' => 'footer-top-column-2',
		'description' => __( 'Footer Top Footer Column 2 Widget Area' ),
		'before_widget' => '<div class="footer_widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'footer_top_column_2' );

function footer_top_column_3() {
    register_sidebar( array(
		'name' => __( 'Footer Top Column 3'),
		'id' => 'footer-top-column-3',
		'description' => __( 'Footer Top Footer Column 3 Widget Area' ),
		'before_widget' => '<div class="footer_widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'footer_top_column_3' );

function footer_top_column_4() {
    register_sidebar( array(
		'name' => __( 'Footer Top Column 4'),
		'id' => 'footer-top-column-4',
		'description' => __( 'Footer Top Footer Column 4 Widget Area' ),
		'before_widget' => '<div class="footer_widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'footer_top_column_4' );

function footer_top_column_5() {
    register_sidebar( array(
		'name' => __( 'Footer Top Column 5'),
		'id' => 'footer-top-column-5',
		'description' => __( 'Footer Top Column 5 Widget Area' ),
		'before_widget' => '<div class="footer_widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'footer_top_column_5' );

function footer_top_column_6() {
    register_sidebar( array(
		'name' => __( 'Footer Top Column 6'),
		'id' => 'footer-top-column-6',
		'description' => __( 'Footer Top Column 6 Widget Area' ),
		'before_widget' => '<div class="footer_widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'footer_top_column_6' );

function footer_midle_column_1() {
    register_sidebar( array(
		'name' => __( 'Footer Midle Column 1'),
		'id' => 'footer-midle-column-1',
		'description' => __( 'Footer Midle Column 1 Widget Area' ),
		'before_widget' => '<div class="footer_widget_midle">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'footer_midle_column_1' );

function footer_midle_column_2() {
    register_sidebar( array(
		'name' => __( 'Footer Midle Column 2'),
		'id' => 'footer-midle-column-2',
		'description' => __( 'Footer Midle Column 2 Widget Area' ),
		'before_widget' => '<div class="footer_widget_midle">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'footer_midle_column_2' );

function footer_midle_column_3() {
    register_sidebar( array(
		'name' => __( 'Footer Midle Column 3'),
		'id' => 'footer-midle-column-3',
		'description' => __( 'Footer Midle Column 3 Widget Area' ),
		'before_widget' => '<div class="footer_widget_midle">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'footer_midle_column_3' );

function footer_midle_column_4() {
    register_sidebar( array(
		'name' => __( 'Footer Midle Column 4'),
		'id' => 'footer-midle-column-4',
		'description' => __( 'Footer Midle Column 4 Widget Area' ),
		'before_widget' => '<div class="footer_widget_midle">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'footer_midle_column_4' );

function footer_midle_column_5() {
    register_sidebar( array(
		'name' => __( 'Footer Midle Column 5'),
		'id' => 'footer-midle-column-5',
		'description' => __( 'Footer Midle Column 5 Widget Area' ),
		'before_widget' => '<div class="footer_widget_midle">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'footer_midle_column_5' );

function footer_midle_column_6() {
    register_sidebar( array(
		'name' => __( 'Footer Midle Column 6'),
		'id' => 'footer-midle-column-6',
		'description' => __( 'Footer Midle Column 6 Widget Area' ),
		'before_widget' => '<div class="footer_widget_midle">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'footer_midle_column_6' );

/** 
*****************************************************************************************************************
*** COMENT STYLE  ***********************************************************************************************
*****************************************************************************************************************
*/
function Gooseo_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_filter( 'Gooseo_remove_recent_comments_style', 'Gooseo_remove_recent_comments_style' );

if ( ! function_exists( 'Gooseo_posted_on' ) ) :

function Gooseo_posted_on() {
	printf( __( '<span class="date_links">%2$s</span>' ),
		'meta-prep meta-prep-author',
		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date()
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			get_author_posts_url( get_the_author_meta( 'ID' ) ),
			sprintf( esc_attr__( 'View all posts by %s', 'Gooseo' ), get_the_author() ),
			get_the_author()
		)
	);
}

endif;

//POST IN
if ( ! function_exists( 'Gooseo_posted_in' ) ) :

function Gooseo_posted_in() {
	// Retrieves tag list of current post, separated by commas.
	$tag_list = get_the_tag_list( '', ', ' );
	if ( $tag_list ) {
		$posted_in = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'Gooseo' );
	} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
		$posted_in = __( '%1$s.', 'Gooseo' );
	} else {
		$posted_in = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'Gooseo' );
	}
	// Prints the string, replacing the placeholders.
	printf(
		$posted_in,
		get_the_category_list( ', ' ),
		$tag_list,
		get_permalink(),
		the_title_attribute( 'echo=0' )
	);
}

endif;

if (get_option("of_nivo_slider_height")) { $nivo_h = get_option("of_nivo_slider_height");} else {$nivo_h = "350";}
if (get_option("of_bx_slider_height")) { $bx_h = get_option("of_bx_slider_height");} else {$bx_h = "350";}
if (get_option("of_orbit_slider_height")) { $orbit_h = get_option("of_orbit_slider_height");} else {$orbit_h = "350";}

/** 
*****************************************************************************************************************
*** THUMBNAILS SIZES  *******************************************************************************************
*****************************************************************************************************************
*/
if (function_exists('add_theme_support')) {
add_theme_support( 'post-thumbnails' );
add_image_size( 'thumbnail_1_column', 940, 250, true );
add_image_size( 'thumbnail_2_column', 459, 250, true);
add_image_size( 'thumbnail_3_column', 297, 200, true);
add_image_size( 'thumbnail_4_column', 215, 350, true); 
add_image_size( 'blog_thumnail_small', 250, 200, true); 
add_image_size( 'homepage-thumbnails', 155, 100, true); 
add_image_size( 'header_image', 978, 300, true); 
add_image_size( 'post_small_image', 220, 250, true);
add_image_size( 'nivo-slider-header', 978, $nivo_h, true );
add_image_size( 'bx-slider-header', 978, $bx_h, true );
add_image_size( 'bx-slider-header-half', 600, $bx_h, true );
add_image_size( 'orbit-slider-header', 978, $orbit_h, true );
}


/** 
*****************************************************************************************************************
*** START MENU  *************************************************************************************************
*****************************************************************************************************************
*/
class description_walker extends Walker_Nav_Menu
{
      function start_el(&$output, $item, $depth, $args)
      {
           global $wp_query;
           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $class_names = $value = '';

           $classes = empty( $item->classes ) ? array() : (array) $item->classes;

           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
           $class_names = ' class="'. esc_attr( $class_names ) . '"';

           $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

           $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
           $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
           $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
           $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

           $prepend = '<strong>';
           $append = '</strong>';
           $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

           if($depth != 0)
           {
                     $description = $append = $prepend = "";
           }

            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
            $item_output .= $description.$args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            }
           
            
}


/** 
*****************************************************************************************************************
*** START PORTFOLIO CUSTOM POST *********************************************************************************
*****************************************************************************************************************
*/
function my_custom_init() {
  $labels = array(
    'name' => _x('Portfolio', 'post type general name'),
    'singular_name' => _x('Item', 'post type singular name'),
    'add_new' => _x('Add Item', 'Event Item'),
    'add_new_item' => __('Add New Item'),
    'edit_item' => __('Edit Item'),
    'new_item' => __('New Item'),
    'view_item' => __('View Item Details'),
    'search_items' => __('Search Portfolio Items'),
    'not_found' =>  __('No portfolio items were found with that criteria'),
    'not_found_in_trash' => __('No portfolio items found in the Trash with that criteria'),
    'view' =>  __('View Item')
  );

  $args = array(
    'labels' => $labels,
    'description' => 'This is the holding location for all portfolio items',
    'public' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => true,
    'show_ui' => true,
    'rewrite' => true,
    'hierarchical' => true,
    'menu_position' => 27,
    'menu_icon' => 'http://cdn2.iconfinder.com/data/icons/fugue/icon/folder_open_image.png',
    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions')
  );

  register_post_type('portfolio',$args);
}
add_action('init', 'my_custom_init');

$labels = array(
  'name' => ('Categories'),
  'singular_name' => ('Categories'),
  'search_items' =>  __('Search'),
  'popular_items' => __('Popular things'),
  'all_items' => __( 'Everything' ),
  'parent_item' => __( 'Parent Categories' ),
  'parent_item_colon' => __( 'Parent Categories:' ),
  'edit_item' => __( 'Edit' ),
  'update_item' => __( 'Update' ),
  'add_new_item' => __( 'Add New' ),
  'new_item_name' => __( 'New Name' )
);

register_taxonomy('portfolio_taxonomy',array('portfolio'), array(
  'hierarchical' => true,
  'labels' => $labels,
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => array( 'slug' => 'portfolio_taxonomy' )
)); 



 /** 
*****************************************************************************************************************
*** THEME OPTION PANEL  *****************************************************************************************
*****************************************************************************************************************
*/

/* These files build out the options interface.  Likely won't need to edit these. */

require_once (OF_FILEPATH . '/admin/admin-functions.php');		// Custom functions and plugins
require_once (OF_FILEPATH . '/admin/admin-interface.php');		// Admin Interfaces (options,framework, seo)

/* These files build out the theme specific options and associated functions. */

require_once (OF_FILEPATH . '/admin/theme-options.php'); 		// Options panel settings and custom settings
require_once (OF_FILEPATH . '/admin/theme-functions.php'); 	// Theme actions based on options settings

/* Other */
require_once (OF_FILEPATH . '/admin/admin_metabox.php');   // Theme metabox settings
require_once (OF_FILEPATH . '/includes/shortcodes.php');  // Theme shortcode settings
require_once (OF_FILEPATH . '/includes/sliders/slider_functions.php');  // Slider Functions settings