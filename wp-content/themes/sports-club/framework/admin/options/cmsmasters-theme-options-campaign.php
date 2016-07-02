<?php 
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version 	1.0.0
 * 
 * Donations Campaign Options Functions
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = cmsmasters_get_global_options();


$cmsmasters_global_donations_campaign_layout = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_donations_campaign_layout']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_donations_campaign_layout'] !== '') ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_donations_campaign_layout'] : 'r_sidebar';

$cmsmasters_global_bottom_sidebar = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar'] !== '') ? (($cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar'] == 1) ? 'true' : 'false') : 'true';

$cmsmasters_global_bottom_sidebar_layout = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar_layout'])) ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_sidebar_layout'] : '14141414';

$cmsmasters_global_donations_campaign_title = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_donations_campaign_title']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_donations_campaign_title'] !== '') ? (($cmsmasters_option[CMSMASTERS_SHORTNAME . '_donations_campaign_title'] == 1) ? 'true' : 'false') : 'true';

$cmsmasters_global_donations_campaign_share_box = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_donations_campaign_share_box']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_donations_campaign_share_box'] !== '') ? (($cmsmasters_option[CMSMASTERS_SHORTNAME . '_donations_campaign_share_box'] == 1) ? 'true' : 'false') : 'true';

$cmsmasters_global_donations_campaign_author_box = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_donations_campaign_author_box']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_donations_campaign_author_box'] !== '') ? (($cmsmasters_option[CMSMASTERS_SHORTNAME . '_donations_campaign_author_box'] == 1) ? 'true' : 'false') : 'true';

$cmsmasters_global_bg = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_theme_layout']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_theme_layout'] === 'boxed') ? true : false;


if (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_donations_more_campaigns_box']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_donations_more_campaigns_box'] !== '') {
	$cmsmasters_global_donations_more_campaigns_box = array();
	
	
	foreach($cmsmasters_option[CMSMASTERS_SHORTNAME . '_donations_more_campaigns_box'] as $key => $val) {
		if ($val == 'true') {
			$cmsmasters_global_donations_more_campaigns_box[] = $key;
		}
	}
} else {
	$cmsmasters_global_donations_more_campaigns_box = array( 
		'related', 
		'popular', 
		'recent' 
	);
}


$cmsmasters_option_name = 'cmsmasters_campaign_';


$tabs_array = array();


$tabs_array['cmsmasters_campaign'] = array( 
	'label' => esc_html__('Campaign', 'sports-club'), 
	'value'	=> 'cmsmasters_campaign' 
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


$custom_campaign_meta_fields = array( 
	array( 
		'id'	=> $cmsmasters_option_name . 'tabs', 
		'type'	=> 'tabs', 
		'std'	=> 'cmsmasters_campaign', 
		'options' => $tabs_array 
	), 
	array( 
		'id'	=> 'cmsmasters_campaign', 
		'type'	=> 'tab_start', 
		'std'	=> 'true' 
	), 
	array( 
		'label'	=> esc_html__('Campaign Target', 'sports-club'), 
		'desc'	=> esc_html__('do not add currency symbol', 'sports-club'), 
		'id'	=> $cmsmasters_option_name . 'target', 
		'type'	=> 'number', 
		'hide'	=> '', 
		'std'	=> '0', 
		'min' 	=> '0', 
		'max' 	=> '', 
		'step' 	=> '10', 
		'size' 	=> '10' 
	), 
	array( 
		'label'	=> esc_html__('Campaign Funds', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'funds', 
		'type'	=> 'funds', 
		'hide'	=> '', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Campaign Title', 'sports-club'), 
		'desc'	=> esc_html__('Show', 'sports-club'), 
		'id'	=> $cmsmasters_option_name . 'title', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsmasters_global_donations_campaign_title 
	), 
	array( 
		'label'	=> esc_html__('Sharing Box', 'sports-club'), 
		'desc'	=> esc_html__('Show', 'sports-club'), 
		'id'	=> $cmsmasters_option_name . 'sharing_box', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsmasters_global_donations_campaign_share_box 
	), 
	array( 
		'label'	=> esc_html__('About Author Box', 'sports-club'), 
		'desc'	=> esc_html__('Show', 'sports-club'), 
		'id'	=> $cmsmasters_option_name . 'author_box', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsmasters_global_donations_campaign_author_box 
	), 
	array( 
		'label'	=> esc_html__('More Campaigns Box', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> $cmsmasters_option_name . 'more_posts', 
		'type'	=> 'select', 
		'hide'	=> '', 
		'std'	=> ((isset($_GET['post']) && get_post_meta($_GET['post'], 'cmsmasters_heading', true)) ? '' : $cmsmasters_global_donations_more_campaigns_box), 
		'options' => array( 
			'related' => array( 
				'label' => esc_html__('Show Related Tab', 'sports-club'),
				'value'	=> 'related' 
			), 
			'popular' => array( 
				'label' => esc_html__('Show Popular Tab', 'sports-club'),
				'value'	=> 'popular' 
			), 
			'recent' => array( 
				'label' => esc_html__('Show Recent Tab', 'sports-club'),
				'value'	=> 'recent' 
			) 
		) 
	), 
	array( 
		'label'	=> esc_html__("'Read More' Buttons Text", 'sports-club'), 
		'desc'	=> esc_html__("Enter the 'Read More' button text that should be used in you campaigns shortcode", 'sports-club'), 
		'id'	=> $cmsmasters_option_name . 'read_more', 
		'type'	=> 'text', 
		'hide'	=> '', 
		'std'	=> esc_attr__('Read More', 'sports-club') 
	), 
	array( 
		'id'	=> 'cmsmasters_campaign', 
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
		'label'	=> esc_html__('Page Layout', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_layout', 
		'type'	=> 'radio_img', 
		'hide'	=> '', 
		'std'	=> $cmsmasters_global_donations_campaign_layout, 
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

