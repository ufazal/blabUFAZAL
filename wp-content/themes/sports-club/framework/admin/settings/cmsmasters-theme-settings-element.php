<?php 
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version 	1.0.0
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function cmsmasters_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'sports-club');
	$tabs['icon'] = esc_attr__('Social Icons', 'sports-club');
	$tabs['lightbox'] = esc_attr__('Lightbox', 'sports-club');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'sports-club');
	$tabs['error'] = esc_attr__('404', 'sports-club');
	$tabs['code'] = esc_attr__('Custom Codes', 'sports-club');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'sports-club');
	}
	
	return $tabs;
}


function cmsmasters_options_element_sections() {
	$tab = cmsmasters_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'sports-club');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'sports-club');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'sports-club');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'sports-club');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'sports-club');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'sports-club');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'sports-club');
		
		break;
	}
	
	return $sections;	
} 


function cmsmasters_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsmasters_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => CMSMASTERS_SHORTNAME . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'sports-club'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => '' 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => CMSMASTERS_SHORTNAME . '_social_icons', 
			'title' => esc_html__('Social Icons', 'sports-club'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => array( 
				'cmsmasters-icon-facebook|#|' . esc_attr__('Facebook', 'sports-club') . '|true', 
				'cmsmasters-icon-gplus|#|' . esc_attr__('Google+', 'sports-club') . '|true', 		
				'cmsmasters-icon-wordpress|#|' . esc_attr__('Wordpress', 'sports-club') . '|true', 
				'cmsmasters-icon-youtube|#|' . esc_attr__('Youtube', 'sports-club') . '|true', 
				'cmsmasters-icon-rss|#|' . esc_attr__('RSS', 'sports-club') . '|true', 
			) 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'sports-club'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'dark', 
			'choices' => array( 
				esc_attr__('Dark', 'sports-club') . '|dark', 
				esc_attr__('Light', 'sports-club') . '|light', 
				esc_attr__('Mac', 'sports-club') . '|mac', 
				esc_attr__('Metro Black', 'sports-club') . '|metro-black', 
				esc_attr__('Metro White', 'sports-club') . '|metro-white', 
				esc_attr__('Parade', 'sports-club') . '|parade', 
				esc_attr__('Smooth', 'sports-club') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_path', 
			'title' => esc_html__('Path', 'sports-club'), 
			'desc' => esc_html__('Sets path for switching windows', 'sports-club'), 
			'type' => 'radio', 
			'std' => 'vertical', 
			'choices' => array( 
				esc_attr__('Vertical', 'sports-club') . '|vertical', 
				esc_attr__('Horizontal', 'sports-club') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'sports-club'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'sports-club'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'sports-club'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'sports-club'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'sports-club'), 
			'type' => 'number', 
			'std' => 1, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'sports-club'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'sports-club'), 
			'type' => 'number', 
			'std' => 0.2, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'sports-club'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'sports-club'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'sports-club'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'sports-club'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'sports-club'), 
			'type' => 'select', 
			'std' => 'center', 
			'choices' => array( 
				esc_attr__('Center', 'sports-club') . '|center', 
				esc_attr__('Fit', 'sports-club') . '|fit', 
				esc_attr__('Fill', 'sports-club') . '|fill', 
				esc_attr__('Stretch', 'sports-club') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'sports-club'), 
			'desc' => esc_html__('Sets buttons be available or not', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'sports-club'), 
			'desc' => esc_html__('Enable the arrow buttons', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'sports-club'), 
			'desc' => esc_html__('Sets the fullscreen button', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'sports-club'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'sports-club'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'sports-club'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'sports-club'), 
			'desc' => esc_html__('Sets the swipe navigation', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMASTERS_SHORTNAME . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'sports-club'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMASTERS_SHORTNAME . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMASTERS_SHORTNAME . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMASTERS_SHORTNAME . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMASTERS_SHORTNAME . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMASTERS_SHORTNAME . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMASTERS_SHORTNAME . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMASTERS_SHORTNAME . '_error_color', 
			'title' => esc_html__('Text Color', 'sports-club'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMASTERS_SHORTNAME . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'sports-club'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#828282' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMASTERS_SHORTNAME . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMASTERS_SHORTNAME . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'sports-club'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'sports-club'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMASTERS_SHORTNAME . '_error_bg_rep', 
			'title' => esc_html__('Background Repeat', 'sports-club'), 
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
			'section' => 'error_section', 
			'id' => CMSMASTERS_SHORTNAME . '_error_bg_pos', 
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
			'section' => 'error_section', 
			'id' => CMSMASTERS_SHORTNAME . '_error_bg_att', 
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
			'section' => 'error_section', 
			'id' => CMSMASTERS_SHORTNAME . '_error_bg_size', 
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
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMASTERS_SHORTNAME . '_error_search', 
			'title' => esc_html__('Search Line', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMASTERS_SHORTNAME . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'sports-club'), 
			'desc' => esc_html__('show', 'sports-club'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMASTERS_SHORTNAME . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'sports-club'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMASTERS_SHORTNAME . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'sports-club'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMASTERS_SHORTNAME . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'sports-club'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMASTERS_SHORTNAME . '_api_key', 
			'title' => esc_html__('Twitter API key', 'sports-club'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMASTERS_SHORTNAME . '_api_secret', 
			'title' => esc_html__('Twitter API secret', 'sports-club'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMASTERS_SHORTNAME . '_access_token', 
			'title' => esc_html__('Twitter Access token', 'sports-club'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMASTERS_SHORTNAME . '_access_token_secret', 
			'title' => esc_html__('Twitter Access token secret', 'sports-club'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => CMSMASTERS_SHORTNAME . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'sports-club'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => CMSMASTERS_SHORTNAME . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'sports-club'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	}
	
	return $options;	
}

