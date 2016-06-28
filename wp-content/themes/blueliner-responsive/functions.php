<?php
/**
 * Silence is golden; exit if accessed directly
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Bootstrap CMB2
 */
require_once 'inc/cmb2/init.php';

/**
 * Loaded page builder library
 */
require_once 'inc/WDS-Simple-Page-Builder/wds-simple-page-builder.php';

/**
 * Load the CMB2 powered theme options page
 */
require_once 'inc/admin/theme-options.php';
require_once 'inc/admin/add_extra_taxonomy_fields.php';
/**
 * Loaded nav walker lib
 */
require_once 'inc/navwalker/wp_bootstrap_navwalker.php';

// Flush your rewrite rules
function blueliner_flush_rewrite_rules() {
  flush_rewrite_rules();
}

require_once( 'inc/custom-post-type/blab-post-type.php' );
require_once( 'inc/custom-post-type/practicearea-post-type.php' );
require_once( 'inc/custom-post-type/blpracticearea-post-type.php' );
require_once( 'inc/custom-post-type/serviceslanding-post-type.php' );
require_once( 'inc/custom-post-type/client-post-type.php' );
require_once( 'inc/custom-post-type/portfolio-post-type.php' );
require_once( 'inc/custom-post-type/team-post-type.php' );
require_once( 'inc/custom-post-type/quote-post-type.php' );
require_once( 'inc/custom-post-type/casestudy-post-type.php' );
require_once( 'inc/custom-post-type/career-post-type.php' );
require_once( 'inc/custom-post-type/matrix-post-type.php' );


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since 1.0
 */
function blueliner_responsive_setup() {
	global $content_width;

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// post thumbnail support
    add_theme_support('post-thumbnails');

    add_image_size( 'crop_image_550_590', 550, 590, array('center', 'center') );
    add_image_size( 'crop_image_635_420', 635, 420, array('center', 'center') );
    add_image_size( 'crop_image_530_490', 530, 490, array('center', 'center') );
    add_image_size( 'crop_image_380_330', 380, 330, array('center', 'center') );
    add_image_size( 'crop_image_350_235', 350, 235, array('center', 'center') );
    add_image_size( 'crop_image_525_350', 525, 350, array('center', 'center') );
    add_image_size( 'crop_image_636_462', 636, 462, array('center', 'center') );

	/**
	 * Register our primary menu
	 */
	register_nav_menus( array(
	    'primary'   => __('Primary Menu', 'blueliner-responsive'),
	    'portfolio_nav'   => __('Portfolio Menu', 'blueliner-responsive'),
	    'footer'    => __('Footer Menu', 'blueliner-responsive'),
	    'footer1'    => __('Footer 1', 'blueliner-responsive'),
	    'footer2'    => __('Footer 2', 'blueliner-responsive'),
	    'footer3'    => __('Footer 3', 'blueliner-responsive'),
	    'footer4'    => __('Footer 4', 'blueliner-responsive')
    ));

	/**
	 * Register sidebar widget area
	 */
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'blueliner-responsive' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'blueliner-responsive' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar News', 'blueliner-responsive' ),
		'id'            => 'sidebar-news',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'blueliner-responsive' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Middle Region', 'blueliner-responsive' ),
		'id'            => 'middle_region',
		'description'   => __( 'Add widgets here to appear in your middle.', 'blueliner-responsive' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        
        register_sidebar( array(
		'name'          => __( 'Blog Region', 'blueliner-responsive' ),
		'id'            => 'blog_region',
		'description'   => __( 'Add widgets here to appear in your middle.', 'blueliner-responsive' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        
        register_sidebar( array(
		'name'          => __( 'Twitter Region', 'blueliner-responsive' ),
		'id'            => 'twitter_region',
		'description'   => __( 'Add widgets here to appear in your middle.', 'blueliner-responsive' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        
        register_sidebar( array(
		'name'          => __( 'Google Plus Region', 'blueliner-responsive' ),
		'id'            => 'gplus_region',
		'description'   => __( 'Add widgets here to appear in your middle.', 'blueliner-responsive' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        
        register_sidebar( array(
		'name'          => __( 'Instagram Region', 'blueliner-responsive' ),
		'id'            => 'instragram_region',
		'description'   => __( 'Add widgets here to appear in your middle.', 'blueliner-responsive' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer', 'blueliner-responsive' ),
		'id'            => 'footer',
		'description'   => __( 'Add widgets here to appear in your footer.', 'blueliner-responsive' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        
        register_sidebar( array(
		'name'          => __( 'Cart page', 'blueliner-responsive' ),
		'id'            => 'cart_page',
		'description'   => __( 'Add widgets here to appear in Cart.', 'blueliner-responsive' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	/**
	 * Set the content width to our options content width
	 */
	if ( ! isset( $content_width ) ) {
		$site_width = 0 < absint( blr_get_option( 'width' ) ) ? absint( blr_get_option( 'width' ) ) : 960;
		$content_width = absint( blr_get_option( 'width' ) / 1.62 );
	}
}
add_action( 'after_setup_theme', 'blueliner_responsive_setup' );


function add_search_to_wp_menu ( $items, $args ) {
	if( 'primary' === $args->theme_location ) {
		$items .= '<li class="menu-item menu-item-search">';
		$items .= '<div class="nav-search" id="nav-search"><form class="navbar-form" method="get" action="' . home_url( '/' ) . '" role="search">';
		$items .= '<div class="form-group">';
		$items .= '<input type="text" id="search" class="form-control" name="s" value="" placeholder="Search" />';
		$items .= '<button type="submit" class="btn btn-primary">Go</button>';
		$items .= '</form></div>';
		$items .= '</li>';
		$items .= '<li>';
        $items .= '<a class="collapsed" id="search-btn" data-toggle="collapse" href="#nav-search" aria-expanded="false" aria-controls="nav-search"><i class="fa fa-search"></i></a>';
        $items .= '</li>';
	}
	return $items;
}

//add_filter( 'wp_nav_menu_items', 'add_search_to_wp_menu', 10, 2 );

/**
 * Filter previous_post_link and next_post_link
 */
function bl_portfolio_nav() {
	// get_posts in same custom taxonomy
	$postlist_args = array(
	   'posts_per_page' => -1,
    	'post_type'      =>  'portfolio'
	); 
	$postlist = get_posts( $postlist_args );


	// get ids of posts retrieved from get_posts
	$ids = array();
	foreach ($postlist as $thepost) {
	   $ids[] = $thepost->ID;
	}

	global $post;
	// get and echo previous and next post in the same taxonomy        
	$thisindex = @array_search($post->ID, $ids);
	$previd = @$ids[$thisindex-1];
	$nextid = @$ids[$thisindex+1];
	if ( !empty($previd) ) {
	   $thumbid = get_post_thumbnail_id( $previd );
	   $previmg = '';
	   if ($thumbid)
	   	$previmg = current(wp_get_attachment_image_src( get_post_thumbnail_id( $previd ), 'single-post-thumbnail' ) ); 
	   
	   echo '<a class="read-more prev" rel="prev" href="' . get_permalink($previd). '" style="background-image: url('. $previmg .');background-size: 315px 100px;">prev client</a>';
	}
	if ( !empty($nextid) ) {
	    $thumbid = get_post_thumbnail_id( $nextid );
	    $nextimg = '';
	    if ($thumbid)
			$nextimg = current(wp_get_attachment_image_src( get_post_thumbnail_id( $nextid ), 'single-post-thumbnail' )); 
	   
	   echo '<a class="read-more next" rel="next" href="' . get_permalink($nextid). '" style="background-image: url('. $nextimg .');background-size: 315px 100px;">next client</a>';
	}
}

function bl_post_single_nav($postTYpe = '') {
	// get_posts in same custom taxonomy
	$postlist_args = array(
	   'posts_per_page' => -1,
    	'post_type'      =>  $postTYpe,
	); 
	$postlist = get_posts( $postlist_args );

	global $post;

	// get ids of posts retrieved from get_posts
	$ids = array();
	foreach ($postlist as $thepost) {
	   $ids[] = $thepost->ID;
	}

	// get and echo previous and next post in the same taxonomy        
	$thisindex = array_search($post->ID, $ids);
	$previd = @$ids[$thisindex-1];
	$nextid = @$ids[$thisindex+1];
	if ( !empty($previd) ) { 
		echo '<a class="read-more prev" href="' . get_permalink($previd). '"><i class="fa fa-arrow-circle-left"></i> '. get_the_title( $previd ) .'</a>';
	}
	if ( !empty($nextid) ) { 
	   echo '<a class="read-more next" href="' . get_permalink($nextid). '">'. get_the_title( $nextid ) .' <i class="fa fa-arrow-circle-right"></i></a>';
	}
}

/*
* Hero Image in Header
*/
function bl_hero_image() {
	
	global $post;
	$hero_image = '';
	if( isset($post->post_type) && $post->post_type == 'page') {
		$hero_image = get_post_meta( $post->ID, '_allpage_hero_image', true ); 
	}
	elseif(isset($post->post_type) && $post->post_type == 'post') {
		$hero_image = get_post_meta( 376, '_allpage_hero_image', true ); 
	}

	if (!empty($hero_image)) {
		echo "background-image: url('{$hero_image}')";
	}
	else {
		echo "background-image: url('". get_template_directory_uri() ."/assets/images/header-bg-sm.jpg')";	
	}
}

function bl_blog_pagination( $query=null ) {

	global $wp_query;
	$query = $query ? $query : $wp_query;
	$big = 999999999;

	$paginate = paginate_links( 
		array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'type' => 'array',
			'total' => $query->max_num_pages,
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'prev_text' => __('&laquo;'),
			'next_text' => __('&raquo;'),
		)
	);

	if ($query->max_num_pages > 1) {

		$pag_nav = '<ul class="pagination">';
		foreach ( $paginate as $page ) {
			$pag_nav .= '<li>' . $page . '</li>';
		}
		$pag_nav .= '</ul>';

		print $pag_nav;

	}
}

/******
* Set excerpt words
*******/
function bl_custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'bl_custom_excerpt_length', 999 );

/******
* Custom Archive title
*******/
add_filter('tc_category_archive_title' , 'bl_cat_title');
function bl_cat_title($title) {
	return '';
}


/*******
* WooCommerce
***********/

add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_product_excerpt', 35, 1);

if (!function_exists('woocommerce_product_excerpt')) {

	function woocommerce_product_excerpt() {
		echo '<span class="excerpt">';
			the_excerpt();
		echo '</span>';

	}
}

add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +
 
function woo_custom_cart_button_text() {
 	global $product;
 	$price = wc_price($product->price);
	//$buynow =  $price .'   Buy now';
	echo '<div class="price-btn">'. $price .'</div>';
    
    return __( 'Buy now', 'woocommerce' );
 
}


/**
 * custom_woocommerce_template_loop_add_to_cart
*/

add_filter( 'woocommerce_product_add_to_cart_text' , 'custom_woocommerce_product_add_to_cart_text' );

function custom_woocommerce_product_add_to_cart_text() {
	global $product;
	
	$product_type = $product->product_type;
	
	switch ( $product_type ) {
		case 'external':
			return __( 'Buy product', 'woocommerce' );
		break;
		case 'grouped':
			return __( 'View products', 'woocommerce' );
		break;
		case 'simple':
			$pckIds = array(12923, 12924, 12925, 12926, 12927, 12928);
			//$buynow = 'Buy now';
		
			if( in_array($product->id, $pckIds) ) {
				//$price = strip_tags(wc_price($product->price));
				$price = wc_price($product->price);
				//$buynow =  $price .'   Buy now';
				echo '<div class="price-btn">'. $price .'</div>';
			}
			return __( 'Buy now', 'woocommerce' );

		break;
		case 'variable':
			return __( 'Select options', 'woocommerce' );
		break;
		default:
			return __( 'Read more', 'woocommerce' );
	}
	
}



/*
* get human times
*/
function get_human_time_ago($post) {         
	$date = $post->post_date;
	$time = get_post_time('G', true, $post);
	$time_diff = time() - $time; 
	if ( $time_diff > 0 && $time_diff < 30*24*60*60 ) { 
		return sprintf( __('%s ago'), human_time_diff( $time ) ); 
	} 
	else {
		return the_time('F j, Y');
	} 
}

/*
* Adding class in Next, Prev
*/
function posts_link_next_prev_class($format) {
     $format = str_replace('href=', 'class="box" href=', $format);
     return $format;
}
add_filter('previous_post_link', 'posts_link_next_prev_class');
add_filter('next_post_link', 'posts_link_next_prev_class');

/*
* Get Featured or First or Default image [News & Events]
*/
function bl_catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];

    if(empty($first_img)) {
        $first_img = "http://placehold.it/50x50";
    }
    return $first_img;
}

/*
* Get Featured or First or Default image [Blog]
*/
function bl_blog_catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    var_dump($matches);
    $first_img = $matches[1][0];

    ob_end_clean();
    if(empty($first_img)) {
        $first_img = "https://placehold.it/450x305";
    }
    return $first_img;
}

function bl_news_catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    var_dump($matches);
    $first_img = $matches[1][0];

    ob_end_clean();
    if(empty($first_img)) {
        //$first_img = "http://placehold.it/350x235";
        $first_img = "https://placehold.it/758x350";
    }
    return $first_img;
}

/**
 * Enqueue scripts and styles.
 *
 * @since 1.0
 */
function blueliner_responsive_scripts() {
	global $content_width, $post;
	//Loaded script
	if( !empty($post->ID) && $post->ID == 12921) {
    	wp_enqueue_script('blr-main-script', get_template_directory_uri() . '/assets/javascripts/custom-main.js','','',true); 
	} 
	else {
		wp_enqueue_script('blr-main-script', get_template_directory_uri() . '/assets/javascripts/main.min.js','','',true); 
	}
    

    if( !empty($post->ID) && $post->ID == 4) {
		wp_enqueue_script('blr-map-api-script', 'https://maps.google.com/maps/api/js?sensor=false','','',true); 
		wp_enqueue_script('blr-map-utility-script', 'https://google-maps-utility-library-v3.googlecode.com/svn/tags/markerwithlabel/1.0.1/src/markerwithlabel_packed.js','','',true); 
		wp_enqueue_script('blr-contact-script', get_template_directory_uri() . '/assets/javascripts/contact-page.js','','',true); 
    }
    else if( !empty($post->post_type) && $post->post_type == 'blpracticearea' ) {
    	wp_enqueue_script('blr-contact-script', get_template_directory_uri() . '/assets/javascripts/contact-page.js','','',true); 
    }
 
	//Loaded styles
	wp_enqueue_style( 'blueliner-responsive', get_stylesheet_uri() );
    
    wp_register_style( 'blr-main-style', get_template_directory_uri() . '/assets/stylesheets/style.min.css', false, '1.0'); 
/*    wp_register_style( 'blr-select-style', get_template_directory_uri() . '/assets/stylesheets/bootstrap-select.min.css', false, '1.0'); */
   	wp_register_style('blr-googleFonts', 'https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900');

    wp_enqueue_style( 'blr-main-style' );
/*    wp_enqueue_style( 'blr-select-style' );*/
    wp_enqueue_style( 'blr-googleFonts');

	/**
	 * Add theme custom CSS from theme options
	 */
	$site_width = 0 < absint( blr_get_option( 'width' ) ) ? absint( blr_get_option( 'width' ) ) : 960;
	$content_width = $content_width;
	$content_float = 'left';
	$sidebar_float = 'right';
	$bg_color = '#ffffff';
	$content_bg_color = '#ffffff';

	//$bg_color = !@empty( blr_get_option( 'bg_color' ) ) ? blr_get_option( 'bg_color' ) : '#404040';
	//$content_bg_color = !@empty( blr_get_option( 'content_bg_color' ) ) ? blr_get_option( 'content_bg_color' ) : '#ffffff';

	ob_start();
	?>
body {
	background: <?php echo $bg_color; ?>;
}

#page {
	width: <?php echo $site_width; ?>px;
	background: <?php echo $content_bg_color; ?>;
}

#primary {
	width: <?php echo $content_width; ?>px;
	float: <?php echo $content_float; ?>;
}

#secondary {
	width: <?php echo $site_width - $content_width; ?>px;
	float: <?php echo $sidebar_float; ?>;
}
	<?php
	wp_add_inline_style( 'blueliner-responsive', ob_get_clean() );
}

add_action( 'wp_enqueue_scripts', 'blueliner_responsive_scripts' );


/**************************************** 
* Added CMB2 Meta Boxes
*****************************************/
add_action( 'cmb2_init', 'cmb_allpage_metaboxes' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_init' hook.
 */
function cmb_allpage_metaboxes() {


  // Start with an underscore to hide fields from custom fields list
    $prefix = '_allpage_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'allpage_metabox',
        'title'         => __( 'Page header Information', 'cmb2' ),
        'object_types'  => array( 'page' ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
        //'show_on'      => array( 'id' => array( 6, ) ), // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    $cmb->add_field( array(
		'name' => __( 'Alter Title', 'blueliner-responsive' ),
		'desc' => __( 'Enter Alter Page Title', 'blueliner-responsive' ),
		'id'   => $prefix . 'title',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Sub Title', 'blueliner-responsive' ),
		'desc' => __( 'Enter Sub Title', 'blueliner-responsive' ),
		'id'   => $prefix . 'sub_title',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Hero image', 'cmb2' ),
		'desc' => __( 'Upload hero image', 'cmb2' ),
		'id'   => $prefix . 'hero_image',
		'type' => 'file',
	) );
}

add_action( 'cmb2_init', 'cmb_homepage_metaboxes' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_init' hook.
 */
function cmb_homepage_metaboxes() {


  // Start with an underscore to hide fields from custom fields list
    $prefix = '_homepage_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'homepage_metabox',
        'title'         => __( 'Home Additional Information', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
        'show_on'      => array( 'id' => array( 6, ) ), // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

   /* $cmb->add_field( array(
		'name' => __( 'Opening Paragraph Title', 'blueliner-responsive' ),
		'desc' => __( 'Enter Opening Paragraph Title', 'blueliner-responsive' ),
		'id'   => $prefix . 'open_paragraph_title',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Opening Paragraph Sub Title', 'blueliner-responsive' ),
		'desc' => __( 'Enter Opening Paragraph Sub Title', 'blueliner-responsive' ),
		'id'   => $prefix . 'open_paragraph_sub_title',
		'type' => 'text',
	) ); */

    $cmb->add_field( array(
		'name' => __( 'Opening Paragraph Content', 'blueliner-responsive' ),
		'desc' => __( 'Enter Opening Paragraph Content in one line', 'blueliner-responsive' ),
		'id'   => $prefix . 'open_paragraph_text',
		'type'    => 'wysiwyg',
		'options' => array( 'textarea_rows' => 7, ),
	) ); 

    $cmb->add_field( array(
		'name' => __( 'Agency Right Content', 'blueliner-responsive' ),
		'desc' => __( 'Enter Agency Right Content', 'blueliner-responsive' ),
		'id'   => $prefix . 'agency_right_text',
		'type'    => 'wysiwyg',
		'options' => array( 'textarea_rows' => 7, ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Custom Agency URL', 'blueliner-responsive' ),
		'desc' => __( 'Enter Custom Agency URL', 'blueliner-responsive' ),
		'id'   => $prefix . 'agency_url',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Custom Agency Text of URL', 'blueliner-responsive' ),
		'desc' => __( 'Enter Custom Agency Text of URL', 'blueliner-responsive' ),
		'id'   => $prefix . 'agency_url_text',
		'type' => 'text',
	) );
}



add_action( 'cmb2_init', 'cmb_self_assessment_metaboxes' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_init' hook.
 */
function cmb_self_assessment_metaboxes() {


  // Start with an underscore to hide fields from custom fields list
    $prefix = '_selfassessment_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'self_assessment_metabox',
        'title'         => __( 'Self Assessment Meta Information', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        'show_on'      => array( 'id' => array( 10441, ) ),
    ) );


    $cmb->add_field( array(
        'name' => __( 'Website URL', 'cmb2' ),
        'desc' => __( 'Enter Website URL', 'cmb2' ),
        'id'   => $prefix . 'url',
        'type' => 'text_url',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Facebook URL', 'cmb2' ),
        'desc' => __( 'Enter Facebook URL', 'cmb2' ),
        'id'   => $prefix . 'fb_url',
        'type' => 'text_url',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Twitter URL', 'cmb2' ),
        'desc' => __( 'Enter Twitter URL', 'cmb2' ),
        'id'   => $prefix . 'twitter_url',
        'type' => 'text_url',
    ) );

}
