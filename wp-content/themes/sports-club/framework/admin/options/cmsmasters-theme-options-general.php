<?php 
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.0
 * 
 * Post, Page, Project & Profile General Options
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = cmsmasters_get_global_options();


$cmsmasters_global_bg_col = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_bg_col']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bg_col'] !== '') ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bg_col'] : '#fefefe';
$cmsmasters_global_bg_img_enable = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_bg_img_enable']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bg_img_enable'] !== '') ? (($cmsmasters_option[CMSMASTERS_SHORTNAME . '_bg_img_enable'] == 1) ? 'true' : 'false') : 'true';
$cmsmasters_global_bg_img = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_bg_img']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bg_img'] !== '') ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bg_img'] : '';
$cmsmasters_global_bg_rep = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_bg_rep']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bg_rep'] !== '') ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bg_rep'] : 'repeat';
$cmsmasters_global_bg_pos = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_bg_pos']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bg_pos'] !== '') ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bg_pos'] : 'top center';
$cmsmasters_global_bg_att = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_bg_att']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bg_att'] !== '') ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bg_att'] : 'scroll';
$cmsmasters_global_bg_size = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_bg_size']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bg_size'] !== '') ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bg_size'] : 'auto';


$cmsmasters_global_heading_alignment = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_alignment']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_alignment'] !== '') ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_alignment'] : 'left';
$cmsmasters_global_heading_scheme = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_scheme']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_scheme'] !== '') ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_scheme'] : 'first';
$cmsmasters_global_heading_bg_img_enable = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_image_enable']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_image_enable'] !== '') ? (($cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_image_enable'] == 1) ? 'true' : 'false') : 'true';
$cmsmasters_global_heading_bg_img = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_image']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_image'] !== '') ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_image'] : '';
$cmsmasters_global_heading_bg_rep = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_repeat']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_repeat'] !== '') ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_repeat'] : 'repeat';
$cmsmasters_global_heading_bg_att = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_attachment']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_attachment'] !== '') ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_attachment'] : 'scroll';
$cmsmasters_global_heading_bg_size = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_size']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_size'] !== '') ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_size'] : 'cover';
$cmsmasters_global_heading_bg_color = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_color']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_color'] !== '') ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_color'] : '';
$cmsmasters_global_heading_height = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_height']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_height'] !== '') ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_height'] : '';


$cmsmasters_global_breadcrumbs = (isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_breadcrumbs']) && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_breadcrumbs'] !== '') ? (($cmsmasters_option[CMSMASTERS_SHORTNAME . '_breadcrumbs'] == 1) ? 'true' : 'false') : 'true';


$custom_general_meta_fields = array( 
	array( 
		'id'	=> 'cmsmasters_bg', 
		'type'	=> 'tab_start', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Background', 'sports-club'), 
		'desc'	=> esc_html__('Use Default', 'sports-club'), 
		'id'	=> 'cmsmasters_bg_default', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> 'true' 
	), 
	array( 
		'label'	=> esc_html__('Background Color', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_bg_col', 
		'type'	=> 'color', 
		'hide'	=> 'true', 
		'std'	=> $cmsmasters_global_bg_col 
	), 
	array( 
		'label'	=> esc_html__('Background Image Visibility', 'sports-club'), 
		'desc'	=> esc_html__('Show', 'sports-club'), 
		'id'	=> 'cmsmasters_bg_img_enable', 
		'type'	=> 'checkbox', 
		'hide'	=> 'true', 
		'std'	=> $cmsmasters_global_bg_img_enable 
	), 
	array( 
		'label'	=> esc_html__('Background Image', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_bg_img', 
		'type'	=> 'image', 
		'hide'	=> 'true', 
		'cancel' => '', 
		'std'	=> $cmsmasters_global_bg_img, 
		'frame' => 'select', 
		'multiple' => false 
	), 
	array( 
		'label'	=> esc_html__('Background Repeat', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_bg_rep', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> $cmsmasters_global_bg_rep, 
		'options' => array( 
			'no-repeat' => array( 
				'label' => esc_html__('No Repeat', 'sports-club'), 
				'value'	=> 'no-repeat' 
			), 
			'repeat-x' => array( 
				'label' => esc_html__('Repeat Horizontally', 'sports-club'), 
				'value'	=> 'repeat-x' 
			), 
			'repeat-y' => array( 
				'label' => esc_html__('Repeat Vertically', 'sports-club'), 
				'value'	=> 'repeat-y' 
			), 
			'repeat' => array( 
				'label' => esc_html__('Repeat', 'sports-club'), 
				'value'	=> 'repeat' 
			) 
		) 
	), 
	array( 
		'label'	=> esc_html__('Background Position', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_bg_pos', 
		'type'	=> 'select', 
		'hide'	=> 'true', 
		'std'	=> $cmsmasters_global_bg_pos, 
		'options' => array( 
			'top left' => array( 
				'label' => esc_html__('Top Left', 'sports-club'), 
				'value'	=> 'top left' 
			), 
			'top center' => array( 
				'label' => esc_html__('Top Center', 'sports-club'), 
				'value'	=> 'top center' 
			), 
			'top right' => array( 
				'label' => esc_html__('Top Right', 'sports-club'), 
				'value'	=> 'top right' 
			), 
			'center left' => array( 
				'label' => esc_html__('Center Left', 'sports-club'), 
				'value'	=> 'center left' 
			), 
			'center center' => array( 
				'label' => esc_html__('Center Center', 'sports-club'), 
				'value'	=> 'center center' 
			), 
			'center right' => array( 
				'label' => esc_html__('Center Right', 'sports-club'), 
				'value'	=> 'center right' 
			), 
			'bottom left' => array( 
				'label' => esc_html__('Bottom Left', 'sports-club'), 
				'value'	=> 'bottom left' 
			), 
			'bottom center' => array( 
				'label' => esc_html__('Bottom Center', 'sports-club'), 
				'value'	=> 'bottom center' 
			), 
			'bottom right' => array( 
				'label' => esc_html__('Bottom Right', 'sports-club'), 
				'value'	=> 'bottom right' 
			) 
		) 
	), 
	array( 
		'label'	=> esc_html__('Background Attachment', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_bg_att', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> $cmsmasters_global_bg_att, 
		'options' => array( 
			'scroll' => array( 
				'label' => esc_html__('Scroll', 'sports-club'), 
				'value'	=> 'scroll' 
			), 
			'fixed' => array( 
				'label' => esc_html__('Fixed', 'sports-club'), 
				'value'	=> 'fixed' 
			) 
		) 
	), 
	array( 
		'label'	=> esc_html__('Background Size', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_bg_size', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> $cmsmasters_global_bg_size, 
		'options' => array( 
			'auto' => array( 
				'label' => esc_html__('Auto', 'sports-club'), 
				'value'	=> 'auto' 
			), 
			'cover' => array( 
				'label' => esc_html__('Cover', 'sports-club'), 
				'value'	=> 'cover' 
			), 
			'contain' => array( 
				'label' => esc_html__('Contain', 'sports-club'), 
				'value'	=> 'contain' 
			)
		) 
	), 
	array( 
		'id'	=> 'cmsmasters_bg', 
		'type'	=> 'tab_finish' 
	), 
	array( 
		'id'	=> 'cmsmasters_heading', 
		'type'	=> 'tab_start', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Heading Text', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_heading', 
		'type'	=> 'radio', 
		'hide'	=> '', 
		'std'	=> 'default', 
		'options' => array( 
			'default' => array( 
				'label' => esc_html__('Default', 'sports-club'), 
				'value'	=> 'default' 
			), 
			'custom' => array( 
				'label' => esc_html__('Custom', 'sports-club'), 
				'value'	=> 'custom' 
			), 
			'disabled' => array( 
				'label' => esc_html__('Disabled', 'sports-club'), 
				'value'	=> 'disabled' 
			) 
		) 
	), 
	array( 
		'label'	=> esc_html__('Heading Title', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_heading_title', 
		'type'	=> 'text_long', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Heading Subtitle', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_heading_subtitle', 
		'type'	=> 'textarea', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Heading Icon', 'sports-club'), 
		'desc'	=> esc_html__('Choose your custom icon for this heading', 'sports-club'), 
		'id'	=> 'cmsmasters_heading_icon', 
		'type'	=> 'icon', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Heading Alignment', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_heading_alignment', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> $cmsmasters_global_heading_alignment, 
		'options' => array( 
			'left' => array( 
				'label' => esc_html__('Left', 'sports-club'), 
				'value'	=> 'left' 
			), 
			'right' => array( 
				'label' => esc_html__('Right', 'sports-club'), 
				'value'	=> 'right' 
			), 
			'center' => array( 
				'label' => esc_html__('Center', 'sports-club'), 
				'value'	=> 'center' 
			) 
		) 
	), 
	array( 
		'label'	=> esc_html__('Heading Color Scheme', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_heading_scheme', 
		'type'	=> 'select_scheme', 
		'hide'	=> 'true', 
		'std'	=> $cmsmasters_global_heading_scheme 
	), 
	array( 
		'label'	=> esc_html__('Heading Background Image Visibility', 'sports-club'), 
		'desc'	=> esc_html__('Show', 'sports-club'), 
		'id'	=> 'cmsmasters_heading_bg_img_enable', 
		'type'	=> 'checkbox', 
		'hide'	=> 'true', 
		'std'	=> $cmsmasters_global_heading_bg_img_enable 
	), 
	array( 
		'label'	=> esc_html__('Heading Background Image', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_heading_bg_img', 
		'type'	=> 'image', 
		'hide'	=> 'true', 
		'cancel' => '', 
		'std'	=> $cmsmasters_global_heading_bg_img, 
		'frame' => 'select', 
		'multiple' => false 
	), 
	array( 
		'label'	=> esc_html__('Heading Background Repeat', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_heading_bg_rep', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> $cmsmasters_global_heading_bg_rep, 
		'options' => array( 
			'no-repeat' => array( 
				'label' => esc_html__('No Repeat', 'sports-club'), 
				'value'	=> 'no-repeat' 
			), 
			'repeat-x' => array( 
				'label' => esc_html__('Repeat Horizontally', 'sports-club'), 
				'value'	=> 'repeat-x' 
			), 
			'repeat-y' => array( 
				'label' => esc_html__('Repeat Vertically', 'sports-club'), 
				'value'	=> 'repeat-y' 
			), 
			'repeat' => array( 
				'label' => esc_html__('Repeat', 'sports-club'), 
				'value'	=> 'repeat' 
			) 
		) 
	), 
	array( 
		'label'	=> esc_html__('Heading Background Attachment', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_heading_bg_att', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> $cmsmasters_global_heading_bg_att, 
		'options' => array( 
			'scroll' => array( 
				'label' => esc_html__('Scroll', 'sports-club'), 
				'value'	=> 'scroll' 
			), 
			'fixed' => array( 
				'label' => esc_html__('Fixed', 'sports-club'), 
				'value'	=> 'fixed' 
			) 
		) 
	), 
	array( 
		'label'	=> esc_html__('Heading Background Size', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_heading_bg_size', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> $cmsmasters_global_heading_bg_size, 
		'options' => array( 
			'auto' => array( 
				'label' => esc_html__('Auto', 'sports-club'), 
				'value'	=> 'auto' 
			), 
			'cover' => array( 
				'label' => esc_html__('Cover', 'sports-club'), 
				'value'	=> 'cover' 
			), 
			'contain' => array( 
				'label' => esc_html__('Contain', 'sports-club'), 
				'value'	=> 'contain' 
			)
		) 
	),
	array( 
		'label'	=> esc_html__('Heading Background Color Overlay', 'sports-club'), 
		'desc'	=> '', 
		'id'	=> 'cmsmasters_heading_bg_color', 
		'type'	=> 'rgba', 
		'hide'	=> 'true', 
		'std'	=> $cmsmasters_global_heading_bg_color 
	), 
	array( 
		'label'	=> esc_html__('Heading Height', 'sports-club'), 
		'desc'	=> esc_html__('pixels', 'sports-club'), 
		'id'	=> 'cmsmasters_heading_height', 
		'type'	=> 'number', 
		'hide'	=> 'true', 
		'std'	=> $cmsmasters_global_heading_height, 
		'min' 	=> '0', 
		'max' 	=> '', 
		'step' 	=> '' 
	), 
	array( 
		'label'	=> esc_html__('Breadcrumbs', 'sports-club'), 
		'desc'	=> esc_html__('Show', 'sports-club'), 
		'id'	=> 'cmsmasters_breadcrumbs', 
		'type'	=> 'checkbox', 
		'hide'	=> 'true', 
		'std'	=> $cmsmasters_global_breadcrumbs 
	), 
	array( 
		'id'	=> 'cmsmasters_heading', 
		'type'	=> 'tab_finish' 
	) 
);


$custom_meta_fields = $custom_general_meta_fields;

