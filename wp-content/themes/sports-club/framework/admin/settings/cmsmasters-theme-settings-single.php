<?php 
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.1
 * 
 * Admin Panel Post, Project, Profile & Donations Campaign Settings
 * Created by CMSMasters
 * 
 */


function cmsmasters_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'sports-club');
	
	if (CMSMASTERS_PROJECT_COMPATIBLE && class_exists('Cmsmasters_Projects')) {
		$tabs['project'] = esc_attr__('Project', 'sports-club');
	}
	
	if (CMSMASTERS_PROFILE_COMPATIBLE && class_exists('Cmsmasters_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'sports-club');
	}
	
	if (CMSMASTERS_DONATIONS) {
		$tabs['campaign'] = esc_attr__('Campaign', 'sports-club');
	}
	
	
	return $tabs;
}


function cmsmasters_options_single_sections() {
	$tab = cmsmasters_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'sports-club');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Portfolio Project Options', 'sports-club');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'sports-club');
		
		
		break;
	case 'campaign':
		$sections = array();
		
		$sections['campaign_section'] = esc_attr__('Donations Campaign Options', 'sports-club');
		
		
		break;
	}
	
	
	return $sections;
} 


function cmsmasters_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsmasters_get_the_tab();
	}
	
	
	$options = array();
	
	$defaults = cmsmasters_theme_settings_single_defaults();
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_layout', 
			'title' => esc_html__('Layout Type', 'sports-club'), 
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
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_title', 
			'title' => esc_html__('Post Title', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_date', 
			'title' => esc_html__('Post Date', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_cat', 
			'title' => esc_html__('Post Categories', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_author', 
			'title' => esc_html__('Post Author', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_comment', 
			'title' => esc_html__('Post Comments', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_tag', 
			'title' => esc_html__('Post Tags', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_like', 
			'title' => esc_html__('Post Likes', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_nav_box', 
			'title' => esc_html__('Posts Navigation Box', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_share_box', 
			'title' => esc_html__('Sharing Box', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_author_box', 
			'title' => esc_html__('About Author Box', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_more_posts_box', 
			'title' => esc_html__('More Posts Box', 'sports-club'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'hide', 
			'choices' => array( 
				esc_attr__('Show Related Posts', 'sports-club') . '|related', 
				esc_attr__('Show Popular Posts', 'sports-club') . '|popular', 
				esc_attr__('Show Recent Posts', 'sports-club') . '|recent', 
				esc_attr__('Hide More Posts Box', 'sports-club') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_more_posts_count', 
			'title' => esc_html__('More Posts Box Items Number', 'sports-club'), 
			'desc' => esc_html__('posts', 'sports-club'), 
			'type' => 'number', 
			'std' => $defaults[$tab][CMSMASTERS_SHORTNAME . '_blog_more_posts_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_more_posts_pause', 
			'title' => esc_html__('More Posts Slider Pause Time', 'sports-club'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'sports-club'), 
			'type' => 'number', 
			'std' => $defaults[$tab][CMSMASTERS_SHORTNAME . '_blog_more_posts_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_title', 
			'title' => esc_html__('Project Title', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_details_title', 
			'title' => esc_html__('Project Details Title', 'sports-club'), 
			'desc' => esc_html__('Enter a project details block title', 'sports-club'), 
			'type' => 'text', 
			'std' => 'Project details', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_date', 
			'title' => esc_html__('Project Date', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_cat', 
			'title' => esc_html__('Project Categories', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_author', 
			'title' => esc_html__('Project Author', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_comment', 
			'title' => esc_html__('Project Comments', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_tag', 
			'title' => esc_html__('Project Tags', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_like', 
			'title' => esc_html__('Project Likes', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_link', 
			'title' => esc_html__('Project Link', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_share_box', 
			'title' => esc_html__('Sharing Box', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_nav_box', 
			'title' => esc_html__('Projects Navigation Box', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_author_box', 
			'title' => esc_html__('About Author Box', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_more_projects_box', 
			'title' => esc_html__('More Projects Box', 'sports-club'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'popular', 
			'choices' => array( 
				esc_attr__('Show Related Tab', 'sports-club') . '|related', 
				esc_attr__('Show Popular Tab', 'sports-club') . '|popular', 
				esc_attr__('Show Recent Tab', 'sports-club') . '|recent' 
			) 
		);

		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_more_projects_count', 
			'title' => esc_html__('More Projects Box Items Number', 'sports-club'), 
			'desc' => esc_html__('projects', 'sports-club'), 
			'type' => 'number', 
			'std' => '4', 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_more_projects_pause', 
			'title' => esc_html__('More Projects Slider Pause Time', 'sports-club'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'sports-club'), 
			'type' => 'number', 
			'std' => '1', 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_slug', 
			'title' => esc_html__('Project Slug', 'sports-club'), 
			'desc' => esc_html__('Enter a page slug that should be used for your projects single item', 'sports-club'), 
			'type' => 'text', 
			'std' => 'project', 
			'class' => '' 
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_title', 
			'title' => esc_html__('Profile Title', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_details_title', 
			'title' => esc_html__('Profile Details Title', 'sports-club'), 
			'desc' => esc_html__('Enter a profile details block title', 'sports-club'), 
			'type' => 'text', 
			'std' => 'Profile details', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_cat', 
			'title' => esc_html__('Profile Categories', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_comment', 
			'title' => esc_html__('Profile Comments', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_like', 
			'title' => esc_html__('Profile Likes', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_nav_box', 
			'title' => esc_html__('Profiles Navigation Box', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_share_box', 
			'title' => esc_html__('Sharing Box', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_slug', 
			'title' => esc_html__('Profile Slug', 'sports-club'), 
			'desc' => esc_html__('Enter a page slug that should be used for your profiles single item', 'sports-club'), 
			'type' => 'text', 
			'std' => 'profile', 
			'class' => '' 
		);
		
		
		break;
	case 'campaign':
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_layout', 
			'title' => esc_html__('Layout Type', 'sports-club'), 
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
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_title', 
			'title' => esc_html__('Campaign Title', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_date', 
			'title' => esc_html__('Campaign Date', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_cat', 
			'title' => esc_html__('Campaign Categories', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_author', 
			'title' => esc_html__('Campaign Author', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_comment', 
			'title' => esc_html__('Campaign Comments', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_tag', 
			'title' => esc_html__('Campaign Tags', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_like', 
			'title' => esc_html__('Campaign Likes', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_nav_box', 
			'title' => esc_html__('Campaign Navigation Box', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_share_box', 
			'title' => esc_html__('Sharing Box', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_author_box', 
			'title' => esc_html__('About Author Box', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_more_campaigns_box', 
			'title' => esc_html__('More Campaigns Box', 'sports-club'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => array( 
				'related' => 'true', 
				'popular' => 'true', 
				'recent' => 'true' 
			), 
			'choices' => array( 
				esc_attr__('Show Related Tab', 'sports-club') . '|related', 
				esc_attr__('Show Popular Tab', 'sports-club') . '|popular', 
				esc_attr__('Show Recent Tab', 'sports-club') . '|recent' 
			) 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_slug', 
			'title' => esc_html__('Campaign Slug', 'sports-club'), 
			'desc' => esc_html__('Enter a page slug that should be used for your donations campaign single item', 'sports-club'), 
			'type' => 'text', 
			'std' => 'campaign', 
			'class' => '' 
		);
		
		
		break;
	}
	
	
	return $options;
}

