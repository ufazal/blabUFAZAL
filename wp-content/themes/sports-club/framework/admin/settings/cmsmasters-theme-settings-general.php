<?php 
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version 	1.0.0
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function cmsmasters_options_general_tabs() {
	$cmsmasters_option = cmsmasters_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'sports-club');	
	
	if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'sports-club');
	}
	
	$tabs['header'] = esc_attr__('Header', 'sports-club');
	$tabs['content'] = esc_attr__('Content', 'sports-club');
	$tabs['footer'] = esc_attr__('Footer', 'sports-club');
	
	return $tabs;
}


function cmsmasters_options_general_sections() {
	$tab = cmsmasters_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'sports-club');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'sports-club');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'sports-club');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'sports-club');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'sports-club');
		
		break;
	}
	
	return $sections;
} 


function cmsmasters_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsmasters_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMASTERS_SHORTNAME . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'sports-club'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'liquid', 
			'choices' => array( 
				esc_attr__('Liquid', 'sports-club') . '|liquid', 
				esc_attr__('Boxed', 'sports-club') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMASTERS_SHORTNAME . '_logo_type', 
			'title' => esc_html__('Logo Type', 'sports-club'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'image', 
			'choices' => array( 
				esc_attr__('Image', 'sports-club') . '|image', 
				esc_attr__('Text', 'sports-club') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMASTERS_SHORTNAME . '_logo_url', 
			'title' => esc_html__('Logo Image', 'sports-club'), 
			'desc' => esc_html__('Choose your website logo image.', 'sports-club'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMASTERS_SHORTNAME . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'sports-club'), 
			'desc' => esc_html__('Choose logo image for retina displays.', 'sports-club'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMASTERS_SHORTNAME . '_logo_mini_url', 
			'title' => esc_html__('Logo Mini Image', 'sports-club'), 
			'desc' => esc_html__('Choose your website mini logo image.', 'sports-club'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_mini.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMASTERS_SHORTNAME . '_logo_mini_url_retina', 
			'title' => esc_html__('Retina Logo Mini Image', 'sports-club'), 
			'desc' => esc_html__('Choose logo Mini image for retina displays.', 'sports-club'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_mini_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMASTERS_SHORTNAME . '_logo_title', 
			'title' => esc_html__('Logo Title', 'sports-club'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => ((get_bloginfo('name')) ? get_bloginfo('name') : CMSMASTERS_FULLNAME), 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMASTERS_SHORTNAME . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'sports-club'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMASTERS_SHORTNAME . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'sports-club'), 
			'desc' => esc_html__('enable', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMASTERS_SHORTNAME . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'sports-club'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMASTERS_SHORTNAME . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'sports-club'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMASTERS_SHORTNAME . '_bg_col', 
			'title' => esc_html__('Background Color', 'sports-club'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMASTERS_SHORTNAME . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMASTERS_SHORTNAME . '_bg_img', 
			'title' => esc_html__('Background Image', 'sports-club'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'sports-club'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMASTERS_SHORTNAME . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'sports-club'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'repeat', 
			'choices' => array( 
				esc_attr__('No Repeat', 'sports-club') . '|no-repeat', 
				esc_attr__('Repeat Horizontally', 'sports-club') . '|repeat-x', 
				esc_attr__('Repeat Vertically', 'sports-club') . '|repeat-y', 
				esc_attr__('Repeat', 'sports-club') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMASTERS_SHORTNAME . '_bg_pos', 
			'title' => esc_html__('Background Position', 'sports-club'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'top center', 
			'choices' => array( 
				esc_attr__('Top Left', 'sports-club') . '|top left', 
				esc_attr__('Top Center', 'sports-club') . '|top center', 
				esc_attr__('Top Right', 'sports-club') . '|top right', 
				esc_attr__('Center Left', 'sports-club') . '|center left', 
				esc_attr__('Center Center', 'sports-club') . '|center center', 
				esc_attr__('Center Right', 'sports-club') . '|center right', 
				esc_attr__('Bottom Left', 'sports-club') . '|bottom left', 
				esc_attr__('Bottom Center', 'sports-club') . '|bottom center', 
				esc_attr__('Bottom Right', 'sports-club') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMASTERS_SHORTNAME . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'sports-club'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				esc_attr__('Scroll', 'sports-club') . '|scroll', 
				esc_attr__('Fixed', 'sports-club') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMASTERS_SHORTNAME . '_bg_size', 
			'title' => esc_html__('Background Size', 'sports-club'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cover', 
			'choices' => array( 
				esc_attr__('Auto', 'sports-club') . '|auto', 
				esc_attr__('Cover', 'sports-club') . '|cover', 
				esc_attr__('Contain', 'sports-club') . '|contain' 
			) 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'sports-club'), 
			'desc' => esc_html__('enable', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content', 'sports-club'), 
			'desc' => esc_html__('enable', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_top_line', 
			'title' => esc_html__('Top Line', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_top_height', 
			'title' => esc_html__('Top Height', 'sports-club'), 
			'desc' => esc_html__('pixels', 'sports-club'), 
			'type' => 'number', 
			'std' => '32', 
			'min' => '30' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'sports-club'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'sports-club') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
	if (CMSMASTERS_DONATIONS) {
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_top_line_donations_but', 
			'title' => esc_html__('Top Donations Button', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_top_line_donations_but_text', 
			'title' => esc_html__('Top Donations Button Text', 'sports-club'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => esc_attr__('Donate Now!', 'sports-club'), 
			'class' => 'nohtml' 
		);
	}
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'sports-club'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'social', 
			'choices' => array( 
				esc_attr__('None', 'sports-club') . '|none', 
				esc_attr__('Top Line Social Icons', 'sports-club') . '|social', 
				esc_attr__('Top Line Navigation', 'sports-club') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_styles', 
			'title' => esc_html__('Header Styles', 'sports-club'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'default', 
			'choices' => array( 
				esc_attr__('Default Style', 'sports-club') . '|default', 
				esc_attr__('Compact Style Left Navigation', 'sports-club') . '|l_nav', 
				esc_attr__('Compact Style Right Navigation', 'sports-club') . '|r_nav', 
				esc_attr__('Compact Style Center Navigation', 'sports-club') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'sports-club'), 
			'desc' => esc_html__('pixels', 'sports-club'), 
			'type' => 'number', 
			'std' => '169', 
			'min' => '80' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'sports-club'), 
			'desc' => esc_html__('pixels', 'sports-club'), 
			'type' => 'number', 
			'std' => '60', 
			'min' => '50' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_search', 
			'title' => esc_html__('Header Search', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
	if (CMSMASTERS_DONATIONS) {
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_donations_but', 
			'title' => esc_html__('Header Donations Button', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_donations_but_text', 
			'title' => esc_html__('Header Donations Button Text', 'sports-club'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => esc_attr__('Donate Now!', 'sports-club'), 
			'class' => 'nohtml' 
		);
	}
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'sports-club'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cust_html', 
			'choices' => array( 
				esc_attr__('None', 'sports-club') . '|none', 
				esc_attr__('Header Social Icons', 'sports-club') . '|social', 
				esc_attr__('Header Custom HTML', 'sports-club') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMASTERS_SHORTNAME . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'sports-club'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'sports-club') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'sports-club'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_attr__('Right Sidebar', 'sports-club') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_attr__('Left Sidebar', 'sports-club') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_attr__('Full Width', 'sports-club') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_archives_layout', 
			'title' => esc_html__('Archives Layout Type', 'sports-club'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_attr__('Right Sidebar', 'sports-club') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_attr__('Left Sidebar', 'sports-club') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_attr__('Full Width', 'sports-club') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'sports-club'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_attr__('Right Sidebar', 'sports-club') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_attr__('Left Sidebar', 'sports-club') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_attr__('Full Width', 'sports-club') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
	if (CMSMASTERS_EVENTS_CALENDAR) {
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_events_layout', 
			'title' => esc_html__('Events Calendar Layout Type', 'sports-club'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'fullwidth', 
			'choices' => array( 
				esc_attr__('Right Sidebar', 'sports-club') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_attr__('Left Sidebar', 'sports-club') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_attr__('Full Width', 'sports-club') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
	}
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'sports-club'), 
			'desc' => 'Layout for pages of non-listed types', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_attr__('Right Sidebar', 'sports-club') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_attr__('Left Sidebar', 'sports-club') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_attr__('Full Width', 'sports-club') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'sports-club'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'left', 
			'choices' => array( 
				esc_attr__('Left', 'sports-club') . '|left', 
				esc_attr__('Right', 'sports-club') . '|right', 
				esc_attr__('Center', 'sports-club') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_heading_scheme', 
			'title' => esc_html__('Heading Custom Color Scheme by Default', 'sports-club'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'default', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'sports-club'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'sports-club'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'sports-club'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'no-repeat', 
			'choices' => array( 
				esc_attr__('No Repeat', 'sports-club') . '|no-repeat', 
				esc_attr__('Repeat Horizontally', 'sports-club') . '|repeat-x', 
				esc_attr__('Repeat Vertically', 'sports-club') . '|repeat-y', 
				esc_attr__('Repeat', 'sports-club') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'sports-club'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				esc_attr__('Scroll', 'sports-club') . '|scroll', 
				esc_attr__('Fixed', 'sports-club') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'sports-club'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cover', 
			'choices' => array( 
				esc_attr__('Auto', 'sports-club') . '|auto', 
				esc_attr__('Cover', 'sports-club') . '|cover', 
				esc_attr__('Contain', 'sports-club') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'sports-club'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'sports-club'), 
			'desc' => esc_html__('pixels', 'sports-club'), 
			'type' => 'number', 
			'std' => '70', 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_bottom_scheme', 
			'title' => esc_html__('Bottom Custom Color Scheme', 'sports-club'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'footer', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMASTERS_SHORTNAME . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'sports-club'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => '131313', 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_footer_scheme', 
			'title' => esc_html__('Footer Custom Color Scheme', 'sports-club'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'footer', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_footer_type', 
			'title' => esc_html__('Footer Type', 'sports-club'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'default', 
			'choices' => array( 
				esc_attr__('Default', 'sports-club') . '|default', 
				esc_attr__('Small', 'sports-club') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'sports-club'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'nav', 
			'choices' => array( 
				esc_attr__('None', 'sports-club') . '|none', 
				esc_attr__('Footer Navigation', 'sports-club') . '|nav', 
				esc_attr__('Social Icons', 'sports-club') . '|social', 
				esc_attr__('Custom HTML', 'sports-club') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_fixed_footer', 
			'title' => esc_html__('Fixed Footer', 'sports-club'), 
			'desc' => esc_html__('enable', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_footer_height', 
			'title' => esc_html__('Footer Height', 'sports-club'), 
			'desc' => esc_html__('pixels', 'sports-club'), 
			'type' => 'number', 
			'std' => '180', 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'sports-club'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'sports-club'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'sports-club'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'sports-club'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_footer_social', 
			'title' => esc_html__('Footer Social Icons', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'sports-club'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'sports-club') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMASTERS_SHORTNAME . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'sports-club'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => CMSMASTERS_FULLNAME . ' &copy; 2016 | ' . esc_html__('All Rights Reserved', 'sports-club'), 
			'class' => '' 
		);
		
		break;
	}
	
	return $options;	
}

