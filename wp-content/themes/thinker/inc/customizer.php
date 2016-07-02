<?php
/**
 * Thinker Theme Customizer
 *
 * @package Thinker
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function thinker_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_section( 'thinker_theme_options', array(
		'title'    => __( 'Theme Options', 'thinker' ),
		'priority' => 130,
	) );

	/* Front Page: Featured Page One */
	$wp_customize->add_setting( 'thinker_featured_page_one_front_page', array(
		'default'           => '',
		'sanitize_callback' => 'thinker_sanitize_dropdown_pages',
	) );
	$wp_customize->add_control( 'thinker_featured_page_one_front_page', array(
		'label'             => __( 'Front Page: Featured Page One', 'thinker' ),
		'section'           => 'thinker_theme_options',
		'priority'          => 8,
		'type'              => 'dropdown-pages',
	) );

	/* Front Page: Featured Page Two */
	$wp_customize->add_setting( 'thinker_featured_page_two_front_page', array(
		'default'           => '',
		'sanitize_callback' => 'thinker_sanitize_dropdown_pages',
	) );
	$wp_customize->add_control( 'thinker_featured_page_two_front_page', array(
		'label'             => __( 'Front Page: Featured Page Two', 'thinker' ),
		'section'           => 'thinker_theme_options',
		'priority'          => 9,
		'type'              => 'dropdown-pages',
	) );

	/* Front Page: Featured Page Three */
	$wp_customize->add_setting( 'thinker_featured_page_three_front_page', array(
		'default'           => '',
		'sanitize_callback' => 'thinker_sanitize_dropdown_pages',
	) );
	$wp_customize->add_control( 'thinker_featured_page_three_front_page', array(
		'label'             => __( 'Front Page: Featured Page Three', 'thinker' ),
		'section'           => 'thinker_theme_options',
		'priority'          => 10,
		'type'              => 'dropdown-pages',
	) );
/**
 * Adds the individual sections for custom logo
 */
   $wp_customize->add_section( 'thinker_logo_section' , array(
    'title'       => __( 'Logo', 'thinker' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
) );
$wp_customize->add_setting( 'thinker_logo', array(
	'sanitize_callback' => 'esc_url_raw',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'thinker_logo', array(
    'label'    => __( 'Logo', 'thinker' ),
    'section'  => 'thinker_logo_section',
    'settings' => 'thinker_logo',
) ) );
/*-----------------------------------------------------------------------------------*/
/*	Adds the individual sections, settings, and controls to the theme customizer
/*-----------------------------------------------------------------------------------*/
    $wp_customize->add_section(
        'thinker_section_one',
        array(
            'title' => 'Copyright Settings',
            'description' => 'This is a settings section.',
            'priority' => 31,
        )
    );
	$wp_customize->add_setting(
    'copyright_textbox',
    array(
        'default' => 'The Thinker by Anariel Design. All rights reserved.',
		'sanitize_callback' => 'thinker_sanitize_text',
    )
);
$wp_customize->add_control(
    'copyright_textbox',
    array(
        'label' => 'Copyright text',
        'section' => 'thinker_section_one',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'hide_copyright',
	array(
	'sanitize_callback' => 'thinker_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'hide_copyright',
    array(
        'type' => 'checkbox',
        'label' => 'Hide copyright text',
        'section' => 'thinker_section_one',
    )
);
/**
 * Adds the individual sections for custom favicon
 */
   $wp_customize->add_section( 'thinker_favicon_section' , array(
    'title'       => __( 'Favicon', 'thinker' ),
    'priority'    => 32,
    'description' => 'Upload a favicon',
) );
$wp_customize->add_setting(
	'thinker_favicon',
	array(
	'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'thinker_favicon', array(
    'label'    => __( 'Favicon', 'thinker' ),
    'section'  => 'thinker_favicon_section',
    'settings' => 'thinker_favicon',
) ) );
/**
 * Adds the individual sections for custom colors
 */
	$wp_customize->add_setting('thinker_link_color', array(
        'default'           => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'thinker_link_color', array(
        'label'    => __('Change color of the white background elements like footer,header background etc.', 'thinker'),
        'section'  => 'colors',
		'priority' => 25,
        'settings' => 'thinker_link_color',
    )));
	$wp_customize->add_setting('thinker_linkone_color', array(
        'default'           => '#e0e0e0',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'thinker_linkone_color', array(
        'label'    => __('Change color of the light gray background and border elements like buttons and borders etc.', 'thinker'),
        'section'  => 'colors',
		'priority' => 26,
        'settings' => 'thinker_linkone_color',
    )));
}
add_action( 'customize_register', 'thinker_customize_register' );
/**
 * Sanitization
 */
//Checkboxes
function thinker_sanitize_checkbox( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}
//Integers
function thinker_sanitize_int( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}
//Text
function thinker_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}
//No sanitize - empty function for options that do not require sanitization -> to bypass the Theme Check plugin
function thinker_no_sanitize( $input ) {
}
/**
 * Sanitize the dropdown pages.
 *
 * @param interger $input.
 * @return interger.
 */
function thinker_sanitize_dropdown_pages( $input ) {
	if ( is_numeric( $input ) ) {
		return intval( $input );
	}
}
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function thinker_customize_preview_js() {
	wp_enqueue_script( 'thinker-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130529', true );
}
add_action( 'customize_preview_init', 'thinker_customize_preview_js' );
/**
 * Colors Changer
 */
function thinker_customizer_css() {
    ?>
    <style type="text/css">
	.site-footer, .navigation-main ul ul, .main-small-navigation div, .widget_calendar #wp-calendar tbody a { background-color: <?php echo get_theme_mod( 'thinker_link_color' ); ?>; }
	div#main, #headertop, .menu-toggle, .sidebar-widget-area .widget, .footer, .frontpageone article, .sticky .entry-meta { background: <?php echo get_theme_mod( 'thinker_link_color' ); ?>; }
    .navigation-main ul ul a:hover, .navigation-main li li.current_page_item > a, .navigation-main li li.current-menu-item > a { background-color: <?php echo get_theme_mod( 'thinker_linkone_color' ); ?>; }
	.purple, #infinite-footer .container { background: <?php echo get_theme_mod( 'thinker_linkone_color' ); ?>; }
	button, input[type="button"], input[type="reset"], input[type="submit"], input[type="text"], input[type="email"], input[type="password"], input[type="search"], textarea, input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus, input[type="search"]:focus, textarea:focus, div#main, .entry-content table, .comment-body table, .entry-content th, .comment-body th, .entry-content td, .comment-body td, .sticky .entry-meta, .site-content [class*="navigation"] a, #content [class*="navigation"] a, .authorbox, .widget_calendar #wp-calendar, .widget_calendar #wp-calendar thead th, .widget_calendar #wp-calendar tbody td, .sidebar-widget-area .widget, .frontpageone article, .single-jetpack-portfolio .tags-links a, .woocommerce .woocommerce-ordering select, .woocommerce-page .woocommerce-ordering select, .sticky { border-color: <?php echo get_theme_mod( 'thinker_linkone_color' ); ?>; }
	hr, .pullquote, abbr, acronym, .entry-header .entry-meta, .comments-area article, .comment-list li.trackback, .comment-list li.pingback, .widget_text a, .column { border-bottom-color: <?php echo get_theme_mod( 'thinker_linkone_color' ); ?>; }
	.pullquote, .entry-header .entry-meta, .sidebar-widget-area .widget { border-top-color: <?php echo get_theme_mod( 'thinker_linkone_color' ); ?>!important; }
	.widget_calendar #wp-calendar tfoot td#next { border-right-color: <?php echo get_theme_mod( 'thinker_linkone_color' ); ?>!important; }
	.frontpageone article .entry-title { border-left-color: <?php echo get_theme_mod( 'thinker_linkone_color' ); ?>!important; }
	#infinite-handle span { border-color: <?php echo get_theme_mod( 'thinker_linkone_color' ); ?>!important; }
	.woocommerce .woocommerce-message, .woocommerce-page .woocommerce-message { border-top-color: <?php echo get_theme_mod( 'thinker_linkone_color' ); ?>!important; }
	.woocommerce .woocommerce-message:before, .woocommerce-page .woocommerce-message:before { background-color: <?php echo get_theme_mod( 'thinker_linkone_color' ); ?>!important; }
	.gridlist-toggle { background: <?php echo get_theme_mod( 'thinker_linkone_color' ); ?>!important; }
    </style>
    <?php
}
add_action( 'wp_head', 'thinker_customizer_css' );