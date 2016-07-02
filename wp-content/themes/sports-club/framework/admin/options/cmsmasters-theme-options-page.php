<?php 
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version 	1.0.0
 * 
 * Page Options Functions
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = cmsmasters_get_global_options();


$cmsmasters_global_layout = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_layout']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_layout'] !== '') ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_layout'] : 'r_sidebar';

$cmsmasters_global_bottom_sidebar = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar'] !== '') ? (($cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar'] == 1) ? 'true' : 'false') : 'true';

$cmsmasters_global_bottom_sidebar_layout = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar_layout'])) ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar_layout'] : '14141414';

$cmsmasters_global_bg = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_theme_layout']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_theme_layout'] === 'boxed') ? true : false;


$cmsmasters_option_name = 'cmsmasters_page_';


$tabs_array = array();


$tabs_array['cmsmasters_layout'] = array( 
	'label' => esc_html__('Layout', 'sports-club'), 
	'value'	=> 'cmsmasters_layout' 
);


if ($cmsmasters_global_bg) {
	$tabs_array['cmsmasters_bg'] = array( 
		'label' => esc_html__('Background', 'sports-club'), 
		'value'	=> 'cmsmasters_bg' 
	);
}


$tabs_array['cmsmasters_heading'] = array( 
	'label' => esc_html__('Heading', 'sports-club'), 
	'value'	=> 'cmsmasters_heading' 
);


$custom_page_meta_fields = array( 
	array( 
		'id'	=> $cmsmasters_option_name . 'tabs', 
		'type'	=> 'tabs', 
		'std'	=> 'cmsmasters_layout', 
		'options' => $tabs_array 
	), 
	array( 
		'id'	=> 'cmsmasters_layout', 
		'type'	=> 'tab_start', 
		'std'	=> 'true' 
	), 
	array( 
		'label'	=> esc_html__('Page Color Scheme', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_page_scheme', 
		'type'	=> 'select_scheme', 
		'hide'	=> 'false', 
		'std'	=> 'default' 
	), 
	array( 
		'label'	=> esc_html__('Page Layout', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_layout', 
		'type'	=> 'radio_img', 
		'hide'	=> '', 
		'std'	=> $cmsmasters_global_layout, 
		'options' => array( 
			'r_sidebar' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg', 
				'label' => esc_html__('Right Sidebar', 'sports-club'), 
				'value'	=> 'r_sidebar' 
			), 
			'l_sidebar' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg', 
				'label' => esc_html__('Left Sidebar', 'sports-club'), 
				'value'	=> 'l_sidebar' 
			), 
			'fullwidth' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg', 
				'label' => esc_html__('Full Width', 'sports-club'), 
				'value'	=> 'fullwidth' 
			) 
		) 
	), 
	array( 
		'label'	=> esc_html__('Slider Under Header', 'sports-club'), 
		'desc'	=> esc_html__('Enable (you must add slider at the top of your page content)', 'sports-club'), 
		'id'	=> 'cmsmasters_content_under_header', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> 'false' 
	), 
	array( 
		'label'	=> esc_html__('Choose Right\Left Sidebar', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_sidebar_id', 
		'type'	=> 'select_sidebar', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Bottom Sidebar', 'sports-club'), 
		'desc'	=> esc_html__('Show', 'sports-club'), 
		'id'	=> 'cmsmasters_bottom_sidebar', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsmasters_global_bottom_sidebar 
	), 
	array( 
		'label'	=> esc_html__('Choose Bottom Sidebar', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_bottom_sidebar_id', 
		'type'	=> 'select_sidebar', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Choose Bottom Sidebar Layout', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_bottom_sidebar_layout', 
		'type'	=> 'select', 
		'hide'	=> 'true', 
		'std'	=> $cmsmasters_global_bottom_sidebar_layout, 
		'options' => array( 
			'11' => array( 
				'label' => '1/1',
				'value'	=> '11' 
			), 
			'1212' => array( 
				'label' => '1/2 + 1/2',
				'value'	=> '1212' 
			), 
			'1323' => array( 
				'label' => '1/3 + 2/3',
				'value'	=> '1323' 
			), 
			'2313' => array( 
				'label' => '2/3 + 1/3',
				'value'	=> '2313' 
			), 
			'1434' => array( 
				'label' => '1/4 + 3/4',
				'value'	=> '1434' 
			), 
			'3414' => array( 
				'label' => '3/4 + 1/4',
				'value'	=> '3414' 
			), 
			'131313' => array( 
				'label' => '1/3 + 1/3 + 1/3',
				'value'	=> '131313' 
			), 
			'121414' => array( 
				'label' => '1/2 + 1/4 + 1/4',
				'value'	=> '121414' 
			), 
			'141214' => array( 
				'label' => '1/4 + 1/2 + 1/4',
				'value'	=> '141214' 
			), 
			'141412' => array( 
				'label' => '1/4 + 1/4 + 1/2',
				'value'	=> '141412' 
			), 
			'14141414' => array( 
				'label' => '1/4 + 1/4 + 1/4 + 1/4',
				'value'	=> '14141414' 
			) 
		) 
	), 
	array( 
		'id'	=> 'cmsmasters_layout', 
		'type'	=> 'tab_finish' 
	) 
);

