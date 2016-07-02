<?php 
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version 	1.0.0
 * 
 * Profile Options Functions
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = cmsmasters_get_global_options();


$cmsmasters_global_bottom_sidebar = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar'] !== '') ? (($cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar'] == 1) ? 'true' : 'false') : 'true';

$cmsmasters_global_bottom_sidebar_layout = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar_layout'])) ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar_layout'] : '14141414';

$cmsmasters_global_profile_post_title = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_profile_post_title']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_profile_post_title'] !== '') ? (($cmsmasters_option[CMSMASTERS_SHORTNAME . '_profile_post_title'] == 1) ? 'true' : 'false') : 'true';

$cmsmasters_global_profile_post_details_title = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_profile_post_details_title']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_profile_post_details_title'] !== '') ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_profile_post_details_title'] : esc_html__('Profile details', 'sports-club');

$cmsmasters_global_profile_post_share_box = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_profile_post_share_box']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_profile_post_share_box'] !== '') ? (($cmsmasters_option[CMSMASTERS_SHORTNAME . '_profile_post_share_box'] == 1) ? 'true' : 'false') : 'true';

$cmsmasters_global_bg = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_theme_layout']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_theme_layout'] === 'boxed') ? true : false;


$cmsmasters_option_name = 'cmsmasters_profile_';


$tabs_array = array();


$tabs_array['cmsmasters_profile'] = array( 
	'label' => esc_html__('Profile', 'sports-club'), 
	'value'	=> 'cmsmasters_profile' 
);


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


$custom_profile_meta_fields = array( 
	array( 
		'id'	=> $cmsmasters_option_name . 'tabs', 
		'type'	=> 'tabs', 
		'std'	=> 'cmsmasters_profile', 
		'options' => $tabs_array 
	), 
	array( 
		'id'	=> 'cmsmasters_profile', 
		'type'	=> 'tab_start', 
		'std'	=> 'true' 
	), 
	array( 
		'label'	=> esc_html__('Profile Title', 'sports-club'), 
		'desc'	=> esc_html__('Show', 'sports-club'), 
		'id'	=> $cmsmasters_option_name . 'title', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsmasters_global_profile_post_title 
	), 
	array( 
		'label'	=> esc_html__('Subtitle', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'subtitle', 
		'type'	=> 'text', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Profile Details Title', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'details_title', 
		'type'	=> 'text_long', 
		'hide'	=> '', 
		'std'	=> $cmsmasters_global_profile_post_details_title 
	), 
	array( 
		'label'	=> esc_html__('Social Icons', 'sports-club'), 
		'desc'	=> esc_html__('Add social icons for this profile', 'sports-club'), 
		'id'	=> $cmsmasters_option_name . 'social', 
		'type'	=> 'social', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Profile Info', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'features', 
		'type'	=> 'repeatable_multiple', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Profile Features 1 Title', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'features_one_title', 
		'type'	=> 'text_long', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Profile Features 1', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'features_one', 
		'type'	=> 'repeatable_multiple', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Profile Features 2 Title', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'features_two_title', 
		'type'	=> 'text_long', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Profile Features 2', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'features_two', 
		'type'	=> 'repeatable_multiple', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Profile Features 3 Title', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'features_three_title', 
		'type'	=> 'text_long', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Profile Features 3', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'features_three', 
		'type'	=> 'repeatable_multiple', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Sharing Box', 'sports-club'), 
		'desc'	=> esc_html__('Show', 'sports-club'), 
		'id'	=> $cmsmasters_option_name . 'sharing_box', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsmasters_global_profile_post_share_box 
	), 
	array( 
		'label'	=> esc_html__("'Read More' Buttons Text", 'sports-club'), 
		'desc'	=> esc_html__("Enter the 'Read More' button text that should be used in you blog shortcode", 'sports-club'), 
		'id'	=> $cmsmasters_option_name . 'read_more', 
		'type'	=> 'text', 
		'hide'	=> '', 
		'std'	=> esc_attr__('Read More', 'sports-club') 
	), 
	array( 
		'id'	=> 'cmsmasters_profile', 
		'type'	=> 'tab_finish' 
	), 
	array( 
		'id'	=> 'cmsmasters_layout', 
		'type'	=> 'tab_start', 
		'std'	=> '' 
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

