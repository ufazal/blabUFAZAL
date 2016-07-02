<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version 	1.0.0
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


function cmsmasters_theme_fonts() {
	$cmsmasters_option = cmsmasters_get_global_options();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version 	1.0.0
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


/***************** Start Theme Font Styles ******************/

	/* Start Content Font */
	.cmsmasters_quotes_slider .quote_content p, 
	.widget .tweet_list .tweet_text a, 
	.widget .tweet_list .tweet_text, 
	.wpcf7-list-item-label, body .cmsmasters-form-builder .check_parent input[type=checkbox] + label, 
	body .cmsmasters-form-builder .check_parent input[type=radio] + label, 
	.wpcf7-list-item-label, body .cmsmasters-form-builder .check_parent input[type=checkbox] + label, 
	body .cmsmasters-form-builder .check_parent input[type=radio] + label,  
	.widget_custom_contact_info_entries > span, 
	.widget_custom_contact_info_entries > div, 
	.error p, 
	body, 
	#footer .copyright,
	blockquote footer,
	.cmsmasters_profile.horizontal .pl_img_with_caption .entry-content,
	.cmsmasters_posts_slider .post .cmsmasters_slider_post_footer .cmsmasters_slider_post_meta_info span, 
	.cmsmasters_posts_slider .project .slider_project_outer .slider_project_top_wrap .cmsmasters_slider_project_cont_info .cmsmasters_slider_project_category a, 
	.cmsmasters_posts_slider .project .slider_project_outer .slider_project_img_wrap .cmsmasters_slider_project_cont_info_top_wrap a, 
	.cmsmasters_posts_slider .project .slider_project_outer .slider_project_inner .cmsmasters_slider_project_content, 
	.portfolio .project .pj_top_wrap .cmsmasters_project_cont_info .cmsmasters_project_category, 
	.portfolio .project .project_outer .project_inner .cmsmasters_project_content,
	.cmsmasters_twitter .cmsmasters_twitter_item_content, 
	.cmsmasters_twitter .cmsmasters_twitter_item_content a, 
	.post .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_tags a, 
	.post .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside .cmsmasters_post_meta_info span, 
	.cmsmasters_archive .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside .cmsmasters_post_meta_info span, 
	.blog.timeline .post .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_footer_info .cmsmasters_post_meta_info > a, 
	.opened-article .post .cmsmasters_post_cont .cmsmasters_post_footer_info .cmsmasters_post_meta_info > a {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_style'] . ";
	}
	
	.cmsmasters_twitter .cmsmasters_twitter_item .cmsmasters_twitter_item_content, 
	.cmsmasters_twitter .cmsmasters_twitter_item_content a {
		font-style:normal;
	}
	.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_wrap .cmsmasters_tab_inner p,
	.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_wrap .cmsmasters_tab_inner p,
	#footer .copyright,
	.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap	.cmsmasters_stat_subtitle,
	.quote_grid .quotes_list .cmsmasters_quote .quote_content p,
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_subtitle,
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_subtitle,
	.cmsmasters_counters.counters_type_vertical .cmsmasters_counter_wrap .cmsmasters_counter_subtitle,
	.cmsmasters_featured_block,
	.cmsmasters_profile.horizontal .pl_img_with_caption .entry-content,
	.cmsmasters_posts_slider .project .slider_project_outer .slider_project_top_wrap .cmsmasters_slider_project_cont_info .cmsmasters_slider_project_category a, 
	.cmsmasters_posts_slider .project .slider_project_outer .slider_project_img_wrap .cmsmasters_slider_project_cont_info_top_wrap a, 
	.cmsmasters_posts_slider .project .slider_project_outer .slider_project_inner .cmsmasters_slider_project_content, 
	.portfolio .project .pj_top_wrap .cmsmasters_project_cont_info .cmsmasters_project_category, 
	.portfolio .project .project_outer .project_inner .cmsmasters_project_content, 
	.post .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside .cmsmasters_post_meta_info span, 
	.post .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside .cmsmasters_post_meta_info a:before, 
	.post .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_content, 
	.cmsmasters_archive .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_content, 
	.cmsmasters_archive .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside .cmsmasters_post_meta_info span, 
	.cmsmasters_archive .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside .cmsmasters_post_meta_info a:before, 
	.cmsmasters_archive .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_content, 
	.blog.timeline .post .cmsmasters_post_cont .cmsmasters_post_content, 
	.blog.timeline .post .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_footer_info .cmsmasters_post_meta_info a:before, 
	.blog.timeline .post .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_footer_info .cmsmasters_post_meta_info a span, 
	.opened-article .post .cmsmasters_post_cont .cmsmasters_post_footer_info .cmsmasters_post_meta_info > a:before, 
	.about_author .about_author_inner p, 
	.widget .tweet_list .tweet_text, 
	.widget .tweet_list .tweet_text a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] - 4) . "px;
	}
	
	.cmsmasters_quotes_slider .quote_content p {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] + 1) . "px;
		font-style:italic; /*static*/
	}

	.post .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_tags a, 
	.blog.timeline .post .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_footer_info .cmsmasters_post_meta_info > a:before, 
	.opened-article .post .cmsmasters_post_cont .cmsmasters_post_footer_info .cmsmasters_post_meta_info > a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] - 4) . "px;
	}
	
	.error p {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] + 12) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] + 8) . "px;
	}
	
	.blog.columns .post .cmsmasters_post_cont_info_leftside > .cmsmasters_post_meta_info a span, 
	.blog.columns .post .cmsmasters_post_cont_info_leftside > .cmsmasters_post_meta_info a:before, 
	.blog.columns .post .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_tags a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] - 4) . "px;
	}
	
	.cmsmasters_posts_slider .post .cmsmasters_slider_post_footer .cmsmasters_slider_post_meta_info span, 
	.cmsmasters_posts_slider .post .cmsmasters_slider_post_footer .cmsmasters_slider_post_meta_info a:before, 
	.blog.timeline .post .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_footer_info .cmsmasters_post_meta_info > a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] - 4) . "px;
	}
	
	#footer.cmsmasters_footer_default .footer_inner .copyright {
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] + 30) . "px;
	}
	
	.widget_pages ul li.page_item:before, 
	q, 
	.cmsmasters_post_comments:before, 
	.cmsmastersLike:before {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] . "px;
	}
	
	.cmsmasters_post_cont_info, 
	.widget_nav_menu ul ul li a, 
	.widget_nav_menu ul ul ul li a, 
	.widget_nav_menu ul ul ul ul li a, 
	.widget_nav_menu ul ul ul ul ul li a, 
	.cmsmasters_quotes_slider .cmsmasters_quote_inner .quote_info_wrap .quote_subtitle,
	.quote_grid .quote_image_content_wrap .quote_subtitle,
	.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap .cmsmasters_toggle_inner > p, 
	.cmsmasters_posts_slider .project .slider_project_outer .slider_project_img_wrap .cmsmasters_slider_project_cont_info_top_wrap a:before { 
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] - 1) . "px;
	}
	
	#wp-calendar th, 
	#wp-calendar td, 
	.widget_nav_menu ul ul ul li a, 
	.widget_nav_menu ul ul ul ul li a, 
	.widget_nav_menu ul ul ul ul ul li a, 
	.cmsmasters_posts_slider .post .cmsmasters_slider_post_content { 
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] - 2) . "px;
	}
	
	.cmsmasters_posts_slider .post .cmsmasters_slider_post_content {
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] - 8) . "px;
	}
	
	.cmsmasters_post_filter_but:before, 
	.cmsmasters_project_filter_but:before, 
	.cmsmasters_project_sort_but:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] + 2) . "px;
	}
	
	.cmsmasters_post_filter_but:before, 
	.cmsmasters_project_filter_but:before {
		width:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] + 2) . "px !important;
	}
	
	.cmsmasters_twitter abbr, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li li > a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li li > a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive li, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive li > a {
		font-weight:700; /* static */
	}
	
	.quote_grid .quote_content h1,
	.quote_grid .quote_content h2,
	.quote_grid .quote_content h3,
	.quote_grid .quote_content h4,
	.quote_grid .quote_content h5,
	.quote_grid .quote_content h6,
	.cmsmasters_tabs .current_tab span {
		font-weight:normal;
	}
	
	.cmsmasters_tabs span {
		font-weight:bold;
	}
	
	q, 
	.cmsmastersLike:before,
	.cmsmasters_post_comments:before, 
	.contact_widget_name.cmsmasters_theme_icon_person:before, 
	.contact_widget_email.cmsmasters_theme_icon_user_mail:before, 
	.contact_widget_phone.cmsmasters_theme_icon_user_phone:before, 
	.adress_wrap.cmsmasters_theme_icon_user_address:before, 
	.cmsmasters_post_filter_but:before, 
	.cmsmasters_project_filter_but:before, 
	.cmsmasters_project_sort_but:before {
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] - 4) . "px !important;
	}
	
	.wpcf7-list-item-label, body .cmsmasters-form-builder .check_parent input[type=checkbox] + label, 
	body .cmsmasters-form-builder .check_parent input[type=radio] + label, 
	.wpcf7-list-item-label, body .cmsmasters-form-builder .check_parent input[type=checkbox] + label, 
	body .cmsmasters-form-builder .check_parent input[type=radio] + label {
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] - 6) . "px;
	}
	
	.widget_pages ul li.page_item:before {
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] - 4) . "px;
	}
	
	.details_item_desc_like,
	.details_item_desc_comments, 
	.post .cmsmasters_post_meta_info, 
	.cmsmasters_archive .cmsmasters_post_meta_info {
		height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] . "px;
	}
	
	.cmsmasters_quotes_slider .cmsmasters_quote_inner .quote_content {
		font-style:italic;
	}
	
	.wpcf7-list-item-label, body .cmsmasters-form-builder .check_parent input[type=checkbox] + label, 
	body .cmsmasters-form-builder .check_parent input[type=radio] + label, 
	.wpcf7-list-item-label, body .cmsmasters-form-builder .check_parent input[type=checkbox] + label, 
	body .cmsmasters-form-builder .check_parent input[type=radio] + label {
		text-transform:none;
	}

	@media only screen and (max-width: 600px) {
		.error p {
			font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] + 6) . "px;
			line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] + 2) . "px;
		}
	}
	
	/* Finish Content Font */


	/* Start Link Font */
	a, 
	.cmsmasters_tabs.lpr .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a,
	.cmsmasters_img .cmsmasters_img_caption,
	.gallery .gallery-item .gallery-caption,
	.cmsmasters_gallery li.cmsmasters_caption figcaption,
	.cmsmasters_table tr.cmsmasters_table_row_header, 
	.cmsmasters_table tr.cmsmasters_table_row_header a,
	.cmsmasters_table tr.cmsmasters_table_row_header th,
	.cmsmasters_table tbody tr,
	.wp-caption .wp-caption-text {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_text_decoration'] . ";
	}
	
	blockquote:before,
	.cmsmasters_quotes_slider .cmsmasters_quote_inner:before {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_system_font'] . ";
		font-weight:bold;
		font-style:normal;
		
	}
	
	a, 
	.cmsmasters_table tbody tr {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_font_size'] + 1) . "px;
	}
	
	.cmsmasters_table tr.cmsmasters_table_row_header, 
	.cmsmasters_table tr.cmsmasters_table_row_header a,
	.cmsmasters_table tr.cmsmasters_table_row_header th {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_font_size'] + 5) . "px;
		font-weight:bold;
	}
	
	.cmsmasters_img .cmsmasters_img_caption,
	.gallery .gallery-item .gallery-caption,
	.cmsmasters_gallery li.cmsmasters_caption figcaption,
	.wp-caption .wp-caption-text {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_font_size'] + 1) . "px;
	}
	
	.header_mid_inner .search_wrap .search_bar_wrap form p.search_button button {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_system_font'] . ";
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_font_size'] - 1) . "px;
		font-weight:bold;
	}
	
	.cmsmasters_post_cont_info, 
	.cmsmasters_post_cont_info a, 
	.cmsmasters_project_cont_info, 
	.cmsmasters_project_cont_info a, 
	.pj_ddn .cmsmasters_project_category, 
	.pj_ddn .cmsmasters_project_category a, 
	.cmsmasters_tabs.lpr .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_font_size'] - 1) . "px;
	}
	
	.cmsmasters_tabs.lpr .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a {
		font-weight:800; /* static */
	}

	a:hover {
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_hover_decoration'] . ";
	}
	/* Finish Link Font */


	/* Start Navigation Title Font */
	#navigation > li > a,
	#footer_nav > li > a,
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner, 
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner a {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_text_transform'] . ";
	}

	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner, 
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] - 4) . "px;
		font-weight:normal;
	}

	.header_top_inner nav > div > ul > li a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] - 5) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_line_height'] + 2 ) . "px;
		font-weight:normal;
	}
	
	#navigation > li > a > span:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] + 3) . "px;
	}
	
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-icon > a > span > span.nav_subtitle {
		padding-left:" . ceil(((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] + 3) * 1.4) . "px;
	}
	
	body.rtl #navigation > li.menu-item-icon > a > span > span.nav_subtitle,
	body.rtl #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-icon > a > span > span.nav_subtitle {
		padding-right:" . ceil(((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] + 3) * 1.4) . "px;
		padding-left:0; /* static */
	}
	
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a[data-tag]:before {
		margin-top:" . round(((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_line_height'] - ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_line_height'] - 2)) / 2) . "px;
	}
	
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a,
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li:hover > a {
		font-weight:700; /* static */
	}
	
	@media only screen and (max-width: 1024px) {
		html #page #header nav #navigation li a {
			font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] - 1) . "px;
			font-weight:400; /* static */
			text-transform:none;
		}
		
		html #page #header nav #navigation > li > a {
			font-weight:500; /* static */
		}
		
		html #page #header nav #navigation li li li a {
			font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] - 3) . "px;
		}
		
		html #page #header nav #navigation > li.menu-item-hide-text > a > span,
		html #page #header nav #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-hide-text > a > span {
			font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] . "px;
			line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_line_height'] . "px;
		}
		
		html #page #header nav #navigation > li.menu-item-icon > a > span > span.nav_subtitle,
		html #page #header nav #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-icon > a > span > span.nav_subtitle {
			padding-left:" . ceil(((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] + 3) * 1.4) . "px;
		}
	}
	/* Finish Navigation Title Font */


	/* Start Navigation Dropdown Font */
	.header_top_inner nav > div > ul > li > ul a,
	#navigation ul li a,
	.header_top_inner nav > ul li a {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_text_transform'] . ";
	}
	
	.header_top_inner nav > div > ul > li > ul a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_line_height'] - 16) . "px;
	}
	
	#navigation ul li a {
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_line_height'] - 8) . "px;
	}
	
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_line_height'] + 1) . "px;
		text-transform:uppercase;
		font-weight:800; /* static */
	}
	
	#navigation > li > a > span > span.nav_subtitle,
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a > span > span.nav_subtitle {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_system_font'] . ";
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_line_height'] - 1) . "px;
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_text_transform'] . ";
		font-weight:400; /* static */
	}
	
	#navigation > li > a > span > span.nav_subtitle {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] - 7) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_line_height'] - 2) . "px;
		font-weight:400; /* static */
	}
	
	#navigation ul li a span:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_size'] + 3) . "px;
	}
	
	#navigation li > a[data-tag]:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_size'] - 4) . "px;
		font-weight:400;
	}
	
	#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a > span:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_size'] + 4) . "px;
	}
	
	@media only screen and (max-width: 1024px) {
	
		#navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a {
			line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_size'] + 2) . "px;
		}
	
		html #page #header nav #navigation > li.menu-item-hide-text > a > span > span.nav_subtitle,
		html #page #header nav #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-hide-text > a > span > span.nav_subtitle {
			font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_size'] - 2) . "px;
			line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_line_height'] - 2) . "px;
		}
	}
	/* Finish Navigation Dropdown Font */


	/* Start H1 Font */
	h1,
	h1 a,
	#header .logo .title,
	.headline .headline_text .entry-title,
	.cmsmasters_search_post .cmsmasters_search_post_title, 
	.cmsmasters_search_post .cmsmasters_search_post_title a, 
	.about_author .about_author_inner .author {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_decoration'] . ";
	}
	
	.headline .headline_text .entry-title {
		text-transform:none;
	}
	
	.cmsmasters_dropcap {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_icon_list_items.cmsmasters_icon_list_icon_type_number .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	.cmsmasters_icon_box.box_icon_type_number:before,
	.cmsmasters_icon_box.cmsmasters_icon_heading_left.box_icon_type_number .icon_box_heading:before {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_style'] . ";
	}
	
	.cmsmasters_dropcap.type1 {
		font-size:38px; /* static */
	}
	
	.cmsmasters_dropcap.type2 {
		font-size:38px; /* static */
	}
	
	.headline_outer .headline_inner .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] + 10) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] + 14) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] + 20) . "px;
	}
	
	.headline_outer .headline_inner.align_left .headline_icon {
		padding-left:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] + 10) . "px;
	}
	
	.headline_outer .headline_inner.align_right .headline_icon {
		padding-right:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] + 10) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon {
		padding-top:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] + 30) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_currency,
	.cmsmasters_pricing_table .cmsmasters_price,
	.cmsmasters_pricing_table .cmsmasters_coins {
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] * 2) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_price {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] * 2 + 8) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_currency,
	.cmsmasters_pricing_table .cmsmasters_coins {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] - 2) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_pricing_item_inner:before, 
	.cmsmasters_profile.horizontal .profile:before {
		width:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] * 2 + 8) . "px;
		margin-left:-" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] + 4) . "px;
	}
	
	.cmsmasters_profile.vertical .profile:before {
		height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] * 2) . "px;
		margin-top:-" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] . "px;
	}
	
	.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_center .owl-buttons span:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] + 20) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] + 14) . "px;
	}
	
	.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_center .owl-buttons > div, 
	.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_center .owl-buttons span, 
	.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_center .owl-buttons span:before {
		width:" . (((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] + 20) / 2) . "px;
		height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] + 20) . "px;
	}
	
	@media only screen and (max-width: 540px) {
		.page-template-sitemap h1 {
			font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] - 6) . "px;
			line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] - 6) . "px;
		
		}
	}
	
	/* Finish H1 Font */


	/* Start H2 Font */
	.error h2.error_title, 
	h2,
	h2 a,
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap, 
	.cmsmasters_search_post_number,
	.cmsmasters_archive .cmsmasters_post_cont .cmsmasters_post_date .published:first-of-type,
	.post .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside .cmsmasters_post_date .published:first-of-type, 
	.blog.timeline .post .cmsmasters_post_info .cmsmasters_post_date .published:first-of-type, 
	#comments .post_comments_title, 
	#respond .comment-reply-title {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_text_decoration'] . ";
	}
	
	.opened-article .post .cmsmasters_post_cont .cmsmasters_post_header .cmsmasters_post_title {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] + 2) . "px;
	}
	
	.error h2.error_title {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] + 26) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] + 26) . "px;
	}
	
	.cmsmasters_archive .cmsmasters_post_header .cmsmasters_post_title a, 
	.post .cmsmasters_post_header .cmsmasters_post_title a {
		text-transform:none;
	}
	
	.blog.columns .post .cmsmasters_post_cont_info_leftside .cmsmasters_post_date .published:first-of-type {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] - 8) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] - 8) . "px;
	}
	
	.blog.timeline .post .cmsmasters_post_info .cmsmasters_post_date .published:first-of-type {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] - 8) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] - 8) . "px;
	}
	
	.post .cmsmasters_post_format_img:before, 
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] . "px;
	}
	
	.post .cmsmasters_post_format_img:before, 
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before {
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] . "px;
	}
	
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] + 8) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] + 14) . "px;
	}
	
	.cmsmasters_counters.counters_type_horizontal .cmsmasters_counter_wrap .cmsmasters_counter.counter_has_icon .cmsmasters_counter_inner {
		padding-" . ((is_rtl()) ? 'right' : 'left') . ":" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] + 14) . "px;
	}
	
	.post .cmsmasters_post_cont .cmsmasters_post_title:before {
		height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] . "px;
		margin-top:" . (((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] - (int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size']) / 2) . "px;
	}
	
	@media only screen and (max-width: 540px) {
		.post .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside .cmsmasters_post_date .published:first-of-type {
			font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] - 6) . "px;
			line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] - 6) . "px;
		}
	}
	
	/* Finish H2 Font */


	/* Start H3 Font */
	h3,
	h3 a,
	.cmsmasters_post_info .cmsmasters_post_date .cmsmasters_year, 
	.cmsmasters_pricing_table .pricing_title, 
	.opened-article .post .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside 	.published:first-of-type {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_text_decoration'] . ";
	}
	
	.post.cmsmasters_timeline_type .cmsmasters_post_format_img:before, 
	.bypostauthor > .comment-body .alignleft:before {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] . "px;
	}
	
	.widget .owl-buttons span:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] + 4) . "px;
	}
	
	.post.cmsmasters_timeline_type .cmsmasters_post_format_img:before, 
	.post_nav > span:before, 
	.bypostauthor > .comment-body .alignleft:before, 
	.widget .owl-buttons span:before {
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	
	.portfolio .project .project_outer .project_inner .cmsmasters_project_header .cmsmasters_project_title, 
	.cmsmasters_posts_slider .project .slider_project_outer .slider_project_inner .cmsmasters_slider_project_header .cmsmasters_slider_project_title {
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] - 2) . "px;
	}
	
	.cmsmasters_post_info .cmsmasters_post_date .cmsmasters_year {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] - 2) . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] . "px;
	}
	
	.post.cmsmasters_timeline_type .cmsmasters_post_cont .cmsmasters_post_title:before {
		height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] . "px;
		margin-top:" . (((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] - (int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size']) / 2) . "px;
	}
	
	.bypostauthor > .comment-body .alignleft:before {
		width:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	
	.bypostauthor > .comment-body .alignleft:before {
		height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	
	.blog.timeline .post .cmsmasters_post_info {
		width:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] + 74) . "px;
		height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] + 74) . "px;
	}
	
	.blog.timeline .post.cmsmasters_timeline_left .cmsmasters_post_info {
		right:-" . (((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] + 74) / 2) . "px;
	}
	
	.blog.timeline .post.cmsmasters_timeline_right .cmsmasters_post_info {
		left:-" . (((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] + 74) / 2) . "px;
	}
	
	.widget .owl-buttons span {
		width:" . (((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] + 4) / 2) . "px;
		height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	/* Finish H3 Font */


	/* Start H4 Font */
	h4, 
	h4 a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a,
	#wp-calendar caption, 
	.bottom_inner .widgettitle, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a, 
	.cmsmasters_quotes h6.quote_title,
	.cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_title,
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title,
	.post_nav > span, 
	.post_nav > span a, 
	.post_comments .commentlist .comment-body .comment-content .fn, 
	.cmsmasters_roll_titles_wrap .cmsmasters_roll_titles_slider_wrap .cmsmasters_roll_titles_slider .owl-carousel article .cmsmasters_slider_post_title a {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_text_decoration'] . ";
	}
	
	.cmsmasters_roll_titles_wrap .cmsmasters_roll_titles_slider_wrap .cmsmasters_roll_titles_slider .owl-carousel article .cmsmasters_slider_post_title a, 
	.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .cmsmasters_slider_post_header .cmsmasters_slider_post_title, 
	.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .cmsmasters_slider_post_header .cmsmasters_slider_post_title a {
		text-transform:none;
	}
	
	.pj_ddn .cmsmastersLike, 
	.pj_ddn .cmsmastersLike:before {
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_line_height'] + 2) . "px !important;
	}
	
	.post_nav > span a {
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_line_height'] + 6) . "px;
	}
	
	.post.cmsmasters_masonry_type .cmsmasters_post_format_img:before, 
	.post.cmsmasters_puzzle_type .cmsmasters_post_format_img:before {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_line_height'] . "px;
	}
	
	.post.cmsmasters_masonry_type .cmsmasters_post_cont .cmsmasters_post_title:before, 
	.post.cmsmasters_puzzle_type .cmsmasters_post_cont .cmsmasters_post_title:before {
		height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] . "px;
		margin-top:" . (((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_line_height'] - (int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size']) / 2) . "px;
	}
	
	@media only screen and (max-width: 540px) {
		.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a {
			font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] - 2) . "px;
			line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_line_height'] - 2) . "px;
		}
	}
	
	/* Finish H4 Font */


	/* Start H5 Font */
	.cmsmasters-form-builder .form_info select, 
	.cmsmasters_paypal_donations > form + .button, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list  .cmsmasters_tabs_list_item span, 
	#wp-calendar thead * , 
	widget_archive .screen-reader-text, 
	h5,
	h5 a, 
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap, 
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap,  
	.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a,
	table caption, 
	table th, 
	table th a,
	.cmsmasters_table tr.cmsmasters_table_row_footer, 
	.cmsmasters_table tr.cmsmasters_table_row_footer a, 
	.cmsmasters_pricing_table .cmsmasters_period,
	.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title > a, 
	.cmsmasters_post_read_more,
	.button, 
	button,
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap .cmsmasters_stat_units_text,
	form .form_info label,
	.wpcf7-form p, 
	.profiles.opened-article .profile .profile_sidebar .profile_features .profile_features_item .profile_features_item_title,
	.profiles.opened-article .profile .profile_sidebar .profile_details .profile_details_item .profile_details_item_title, 
	.cmsmasters_project_filter_but, 
	.cmsmasters_project_sort_but, 
	.cmsmasters_twitter .published, 
	.blog.timeline .post .cmsmasters_post_cont_info .cmsmasters_post_read_more, 
	.post_comments .commentlist .comment-body .comment-content .published, 
	.comment-edit-link, 
	.comment-reply-link, 
	#cancel-comment-reply-link, 
	.portfolio.opened-article .project .project_sidebar .project_details .project_details_item .project_details_item_title, 
	.portfolio.opened-article .project .project_sidebar .project_features .project_features_item > div:first-child {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_decoration'] . ";
	}
	
	.cmsmasters_twitter .published {
		height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] . "px;
		text-transform:uppercase;
	}
	
	.cmsmasters_post_read_more, 
	.blog.timeline .post .cmsmasters_post_cont_info .cmsmasters_post_read_more {
		text-transform:lowercase;
	}
	
	.cmsmasters_wrap_pagination ul li .page-numbers {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_decoration'] . ";
	}
	
	.cmsmasters_profile.horizontal .pl_subtitle,
	.cmsmasters_profile.vertical .pl_subtitle,
	.profiles.opened-article .profile .cmsmasters_profile_header .cmsmasters_profile_subtitle {
		font-family:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_system_font'] . ";
	}
	
	.cmsmasters_project_sort_but, 
	.cmsmasters_project_filter_but {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 1) . "px;
	}
	
	.cmsmasters_profile.vertical .pl_subtitle,
	.cmsmasters_profile.horizontal .pl_subtitle {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] - 1) . "px;
	}
	
	#wp-calendar thead * , 
	.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_footer .cmsmasters_post_read_more {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] - 2) . "px;
	}
	
	input[type=text],
	input[type=email],
	input[type=password],
	input[type=number],
	input[type=url],
	input[type=tel],
	input[type=search],
	textarea {
		font-family:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_system_font'] . ";
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 1) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] + 2) . "px;	
		font-weight:normal;
	}
	
	.cmsmasters_paypal_donations > form + .button {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] + 6) . "px;
	}
	
	.cmsmasters-form-builder .form_info select, 
	form .form_info label,
	.wpcf7-form p {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 1) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] + 1) . "px;
	}
	
	.cmsmasters-form-builder .form_info select, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list  .cmsmasters_tabs_list_item span, 
	form .form_info label,
	.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title > a {
		font-weight:bold;
	}
	
	.widget_custom_posts_tabs_entries .cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list  .cmsmasters_tabs_list_item.current_tab span, 
	.widget_pages ul li.page_item a, 
	form .form_info .check_parent label {
		font-weight:normal;
	}
	
	.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title > a {
		line-height:26px; /* static */
	}

	.cmsmasters-form-builder .form_info select, 
	.cmsmasters_paypal_donations > form + .button, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list  .cmsmasters_tabs_list_item span, 
	.widget_nav_menu .menu-main-container ul li a, 
	.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title > a,
	.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a {
		text-transform:uppercase;
	}

	input[type=text]:-ms-input-placeholder,  
	input[type=email]:-ms-input-placeholder,  
	input[type=password]:-ms-input-placeholder,  
	input[type=number]:-ms-input-placeholder,  
	input[type=search]:-ms-input-placeholder,  
	input[type=url]:-ms-input-placeholder,  
	input[type=tel]:-ms-input-placeholder,  
	textarea:-ms-input-placeholder,  
	input:-ms-input-placeholder,  
	:-ms-input-placeholder {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_system_font'] . ";
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 1) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] + 1) . "px;
		font-weight:bold;
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_style'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_decoration'] . ";
	}
	
	input[type=text]::-webkit-input-placeholder, 
	input[type=email]::-webkit-input-placeholder, 
	input[type=password]::-webkit-input-placeholder, 
	input[type=number]::-webkit-input-placeholder, 
	input[type=search]::-webkit-input-placeholder, 
	input[type=url]::-webkit-input-placeholder, 
	input[type=tel]::-webkit-input-placeholder, 
	textarea::-webkit-input-placeholder, 
	input::-webkit-input-placeholder, 
	::-webkit-input-placeholder {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_system_font'] . ";
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 1) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] + 1) . "px;
		font-weight:bold;
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_style'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_decoration'] . ";
	}
	
	input[type=text]::-moz-placeholder, 
	input[type=email]::-moz-placeholder, 
	input[type=password]::-moz-placeholder, 
	input[type=number]::-moz-placeholder, 
	input[type=search]::-moz-placeholder, 
	input[type=url]::-moz-placeholder, 
	input[type=tel]::-moz-placeholder, 
	textarea::-moz-placeholder, 
	input::-moz-placeholder,
	::-moz-placeholder {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_system_font'] . ";
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 1) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] + 1) . "px;
		font-weight:bold;
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_style'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_decoration'] . ";
	}
	
	input[type=text]:-moz-placeholder, 
	input[type=email]:-moz-placeholder, 
	input[type=password]:-moz-placeholder, 
	input[type=number]:-moz-placeholder, 
	input[type=search]:-moz-placeholder, 
	input[type=url]:-moz-placeholder, 
	input[type=tel]:-moz-placeholder, 
	textarea:-moz-placeholder, 
	input:-moz-placeholder, 
	:-moz-placeholder {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_system_font'] . ";
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 1) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] + 1) . "px;
		font-weight:bold;
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_style'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_decoration'] . ";
	}

	@media only screen and (max-width: 1024px) {
		.header_top_inner nav > div > ul > li a {
			font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_system_font'] . ";
			font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] . "px;
			line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] . "px;
			font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_weight'] . ";
			font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_style'] . ";
			text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_transform'] . ";
			text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_decoration'] . ";
		}
	}
	
	@media only screen and (max-width: 960px) {
		.widget_search .search_bar_wrap form p.search_field input[type=search]::-webkit-input-placeholder {
			font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] - 1) . "px;
		}
		
		.widget_search .search_bar_wrap form p.search_field input[type=search]::-moz-placeholder {
			font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] - 1) . "px;
		}
		
		.widget_search .search_bar_wrap form p.search_field input[type=search]:-ms-input-placeholder {
			font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] - 1) . "px;
		}
		
		.widget_search .search_bar_wrap form p.search_field input[type=search]:-moz-placeholder {
			font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] - 1) . "px;
		}
	}
	
	/* Finish H5 Font */


	/* Start H6 Font */
	h6,
	h6 a, 
	input[type=submit], 
	input[type=button], 
	dl dt, 
	table.shop_attributes th, 
	fieldset legend,
	blockquote footer,
	.cmsmasters_post_info .cmsmasters_post_date .cmsmasters_day_mon, 
	.cmsmasters_search_post .cmsmasters_search_post_number_wrap .cmsmasters_post_type_label, 
	.meta_wrap,
	.meta_wrap a, 
	.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_cont_wrap .cmsmasters_post_cont_info a,
	.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_cont_wrap .cmsmasters_post_cont_info span, 
	.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_cont_wrap .cmsmasters_post_cont_info abbr,
	.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .cmsmasters_slider_post_header_with_date .cmsmasters_post_date, 
	.post .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info span, 
	.post .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info div, 
	.cmsmasters_archive .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside span, 
	.blog.timeline .post .cmsmasters_post_cont_info span, 
	.blog.timeline .post .cmsmasters_post_cont_info span a, 
	.widget .tweet_list .tweet_time	{
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_text_decoration'] . ";
	}
	
	.post.cmsmasters_masonry_type .cmsmasters_post_header .cmsmasters_post_subtitle, 
	.post.cmsmasters_timeline_type .cmsmasters_post_header .cmsmasters_post_subtitle, 
	.post.cmsmasters_puzzle_type .cmsmasters_post_header .cmsmasters_post_subtitle {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_size'] - 1) . "px;
	}
	
	.cmsmasters_post_info .cmsmasters_post_date .cmsmasters_day_mon, 
	.cmsmasters_search_post .cmsmasters_search_post_number_wrap .cmsmasters_post_type_label {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_size'] - 2) . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_size'] . "px;
	}
	
	.meta_wrap,
	.meta_wrap a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_size'] + 1) . "px;
	}
	
	.cmsmasters_single_slider .related_posts_item_title a{
		font-weight:bold;
	}
	
	.post .cmsmasters_slider_post_header .cmsmasters_slider_post_subtitle {
		font-weight:400; /* static */
	}
	
	.widget .tweet_list .tweet_time, 
	.post .cmsmasters_post_header .cmsmasters_post_subtitle, 
	.cmsmasters_search_post .cmsmasters_search_post_number_wrap .cmsmasters_post_type_label {
		text-transform:uppercase; /* static */
	}
	
	#cancel-comment-reply-link {
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	
	.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_cont_wrap .cmsmasters_post_cont_info a,
	.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_cont_wrap .cmsmasters_post_cont_info span, 
	.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_cont_wrap .cmsmasters_post_cont_info abbr {
		text-transform:uppercase;
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_size'] - 2) . "px;
		font-weight:lighter;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_line_height'] - 4) . "px;
	}
	
	.cmsmasters_archive .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside span, 
	.post .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info span, 
	.post .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info div, 
	.post .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info .cmsmasters_post_category a	{
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_size'] + 1) . "px;
		text-transform:uppercase;
		font-weight:lighter;
	}
	
	.blog.columns .post .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info span, 
	.blog.columns .post .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info .cmsmasters_post_category a, 
	.blog.timeline .post .cmsmasters_post_cont_info span, 
	.blog.timeline .post .cmsmasters_post_cont_info span a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_line_height'] - 2) . "px;
		text-transform:uppercase;
		font-weight:lighter;
	}
	
	.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_cont_wrap .cmsmasters_post_cont_info a span, 
	.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_cont_wrap .cmsmasters_post_cont_info a, 
	.post .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info a, 
	.post .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info a span, 
	.cmsmasters_archive .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside a span,
	.post .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info .cmsmasters_post_category a, 
	.blog.columns .post .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info a, 
	.blog.columns .post .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info a span, 
	.blog.columns .post .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info .cmsmasters_post_category a, 
	.blog.timeline .post .cmsmasters_post_cont_info span a span, 
	.blog.timeline .post .cmsmasters_post_cont_info span a {
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_weight'] . ";
	}
	
	.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .cmsmasters_slider_post_header_with_date .cmsmasters_post_date {
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_line_height'] + 4) . "px;
	}
	
	/* Finish H6 Font */


	/* Start Button Font */
	.cmsmasters_button,
	input[type=submit],
	.cmsmasters_search_post_cont_info, 
	.cmsmasters_search_post_cont_info a {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_text_transform'] . ";
	}
		
	#slide_top {
		font-size:18px;
		line-height:18px;
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_system_font'] . ";
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_text_transform'] . ";
	}
	
	#slide_top span {
		font-size:14px;
		line-height:14px;
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_system_font'] . ";
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_text_transform'] . ";
	}
	
	.gform_wrapper .gform_footer input.button, 
	.gform_wrapper .gform_footer input[type=submit] {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_size'] . "px !important;
	}
	
	button,
	input[type=submit] {
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_text_transform'] . ";
	}
	
	.cmsmasters_posts_slider .cmsmasters_slider_post_header .cmsmasters_slider_post_subtitle,
	.cmsmasters_search_post_cont_info, 
	.cmsmasters_search_post_cont_info a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_size'] + 4) . "px;
	}
	
	.cmsmasters_tabs.lpr .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a {
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_line_height'] - 4) . "px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	.cmsmasters_button.cmsmasters_but_icon_divider, 
	.cmsmasters_button.cmsmasters_but_icon_inverse {
		padding-left:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_line_height'] + 20) . "px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_divider:before, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:before, 
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_divider:after, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		width:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_line_height'] . "px;
	}
	/* Finish Button Font */


	/* Start Small Text Font */
	.error h1.error_title, 
	small,
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap .cmsmasters_stat_counter,
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap span, 
	.cmsmasters_archive .cmsmasters_post_cont .cmsmasters_post_date .published:nth-of-type(2), 
	.post .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside .cmsmasters_post_date .published:nth-of-type(2), 
	.blog.timeline .post .cmsmasters_post_info .cmsmasters_post_date .published:nth-of-type(2), 
	.opened-article .post .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside 	.published:nth-of-type(2) {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_text_transform'] . ";
	}
	
	.error h1.error_title, 
	.error h2.error_title {
		text-transform:uppercase;
	}
	
	form .formError .formErrorContent {
		font-family:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_text_transform'] . ";
	}
	
	.cmsmasters_archive .cmsmasters_post_cont .cmsmasters_post_date .published:nth-of-type(2), 
	.post .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside .cmsmasters_post_date  .published:nth-of-type(2) {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 58) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] + 50) . "px;
	}
	
	.blog.columns .post .cmsmasters_post_cont_info_leftside .cmsmasters_post_date  .published:nth-of-type(2), 
	.blog.timeline .post .cmsmasters_post_info .cmsmasters_post_date .published:nth-of-type(2) {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 38) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] + 30) . "px;
	}
	
	.opened-article .post .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside 	.published:nth-of-type(2) {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 48) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] + 40) . "px;
	}
	
	.error h1.error_title {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 48) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] + 46) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_price,
	.cmsmasters_pricing_table .cmsmasters_currency,
	.cmsmasters_pricing_table .cmsmasters_coins {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_system_font'] . ";
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 24) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] + 30) . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_text_transform'] . ";
	}
	
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap .cmsmasters_stat_counter,
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap	span {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 36) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] + 28) . "px;
	}

	#navigation > li.menu-item-mega > div.menu-item-mega-container ul ul li.menu-item-mega-description span.menu-item-mega-description-container {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] . "px;
	}

	.cmsmasters_posts_slider .cmsmasters_slider_post_cont_info,
	.cmsmasters_posts_slider .cmsmasters_slider_post_cont_info a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 1) . "px;
	}
	
	.gform_wrapper .description, 
	.gform_wrapper .gfield_description, 
	.gform_wrapper .gsection_description, 
	.gform_wrapper .instruction {
		font-family:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_system_font'] . " !important;
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] . "px !important;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] . "px !important;
	}
	
	.meta_wrap > div[class^=\"cmsmasters-icon-\"]:before,
	.meta_wrap > p[class^=\"cmsmasters-icon-\"]:before,
	.meta_wrap > span[class^=\"cmsmasters-icon-\"]:before,
	.meta_wrap > strong[class^=\"cmsmasters-icon-\"]:before,
	.meta_wrap > div[class*=\" cmsmasters-icon-\"]:before,
	.meta_wrap > p[class*=\" cmsmasters-icon-\"]:before,
	.meta_wrap > span[class*=\" cmsmasters-icon-\"]:before,
	.meta_wrap > strong[class*=\" cmsmasters-icon-\"]:before, 
	.meta_wrap > div[class^=\"cmsmasters_theme_icon_\"]:before,
	.meta_wrap > p[class^=\"cmsmasters_theme_icon_\"]:before,
	.meta_wrap > span[class^=\"cmsmasters_theme_icon_\"]:before,
	.meta_wrap > strong[class^=\"cmsmasters_theme_icon_\"]:before,
	.meta_wrap > div[class*=\" cmsmasters_theme_icon_\"]:before,
	.meta_wrap > p[class*=\" cmsmasters_theme_icon_\"]:before,
	.meta_wrap > span[class*=\" cmsmasters_theme_icon_\"]:before,
	.meta_wrap > strong[class*=\" cmsmasters_theme_icon_\"]:before,
	.meta_wrap > a[class^=\"cmsmasters-icon-\"]:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 6). "px;
	}
	
	.cmsmasters_dropcap.type2 {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_system_font'] . " !important;
	}
	
	@media only screen and (max-width: 600px) {
		.error h1.error_title {
			font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 30 ) . "px;
			line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] + 28) . "px;
		}
		
		.error h2.error_title {
			font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 22 ) . "px;
			line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] + 20) . "px;
		}
	
		.post .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside .cmsmasters_post_date .published:nth-of-type(2) {
			font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 36) . "px;
			line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] + 34) . "px;
		}
	}
	
	/* Finish Small Text Font */


	/* Start Text Fields Font */

	select,
	option, 
	code {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_system_font'] . ";
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_font_size'] - 2) . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_font_style'] . ";
	}
	
	code {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_font_size'] - 3) . "px;
	}
	
	.gform_wrapper input[type=text], 
	.gform_wrapper input[type=url], 
	.gform_wrapper input[type=email], 
	.gform_wrapper input[type=tel], 
	.gform_wrapper input[type=number], 
	.gform_wrapper input[type=password], 
	.gform_wrapper textarea, 
	.gform_wrapper select {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_font_size'] . "px !important;
	}
	
		/* Finish Text Fields Font */


	/* Start Blockquote Font */
	blockquote {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_font_style'] . ";
	}
	
	q {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_system_font'] . ";
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_font_style'] . ";
	}
	/* Finish Blockquote Font */

/***************** Finish Theme Font Styles ******************/


";


if (CMSMASTERS_WOOCOMMERCE) {

	$custom_css .= "
/***************** Start WooCommerce Font Styles ******************/

	/* Start Content Font */
	.woocommerce-shipping-fields #ship-to-different-address label, 	
	.woocommerce-info a, 
	.woocommerce-message a, 
	.woocommerce-error a, 
	.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_cat a, 
	.checkout #order_review .shop_table th, 
	.checkout #order_review .shop_table td, 
	.checkout #order_review .shop_table th *, 
	.checkout #order_review .shop_table td * {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_style'] . ";
	}
	
	.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .commentlist .comment .comment_container .comment-text .meta, 
	.product_list_widget li del .amount {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] - 1) . "px;
	}
	
	#page .widget_shopping_cart_content .cart_list li a.remove {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] + 10) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] - 5) . "px;
	}
	
	.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_cat a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] + 6) . "px;
	}
		
	.woocommerce-info a, 
	.woocommerce-message a, 
	.woocommerce-error a {
		font-weight:bold;
	}
	
	.woocommerce-shipping-fields #ship-to-different-address label {
		text-transform:none;
	}
	
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start H1 Font */
		.cmsmasters_single_product .cmsmasters_woo_tabs h2 {
			font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_system_font'] . ";
			font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] . "px;
			line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] . "px;
			font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_weight'] . ";
			font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_style'] . ";
			text-transform: none;
			text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_decoration'] . ";
		}	
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
		.woocommerce h2, 
		.woocommerce h3, 
		.woocommerce h4, 
		body.woocommerce-account legend, 
		.cmsmasters_single_product .cmsmasters_product_right_column .product_title {
			font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_system_font'] . ";
			font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] . "px;
			line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] . "px;
			font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_weight'] . ";
			font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_style'] . ";
			text-transform: none;
			text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_text_decoration'] . ";
		}
		
		.woocommerce h2, 
		.woocommerce h3, 
		.woocommerce h4, 
		body.woocommerce-account legend {
			text-transform:uppercase;
		}
		
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	ul.order_details li > span, 
	.cart_totals table tr.order-total th, 
	.cart_totals table tr.order-total td, 
	.shipping_calculator > h2, 
	.shipping_calculator > h2 a {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_text_decoration'] . ";
	}
	
	ul.order_details li > strong {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] . "px;
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_style'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_text_decoration'] . ";
	}
	
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.widget_categories .screen-reader-text, 
	.widget .widgettitle, 
	#page .widget_shopping_cart .widget_shopping_cart_content .total, 
	ul.order_details.bacs_details li > strong, 
	ul.order_details.bacs_details li, 
	.shop_table.order_details thead tr th, 
	.checkout #order_review .shop_table thead tr th, 
	.checkout #order_review .shop_table tfoot tr.order-total * , 
	body.woocommerce-checkout .woocommerce .woocommerce-info, 
	.cart_totals table tr.cart-subtotal td, 
	.cart_totals table tr.cart-subtotal th, 
	.shop_table td.product-subtotal, 
	.shop_table thead th, 
	#page .cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button, 
	#page .cmsmasters_dynamic_cart .widget_shopping_cart_content .total, 
	.cmsmasters_single_product .cmsmasters_woo_tabs #reviews .comment-respond label, 
	.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_header .cmsmasters_product_title, 
	.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_header .cmsmasters_product_title a, 
	.cmsmasters_woo_wrap_result select, 
	.cmsmasters_single_product .cmsmasters_tabs.cmsmasters_woo_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item a, 
	.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .commentlist .comment .comment_container .comment-text .meta h4 {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_text_decoration'] . ";
	}
	
	.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .commentlist .comment .comment_container .comment-text .meta h4 {
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] . "px;
	}
	
	
	.cmsmasters_single_product .cmsmasters_woo_tabs #reviews .comment-respond label {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] - 1) . "px;	
	}
	
	.widget .widgettitle {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] + 6) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] + 10) . "px;	
	}
	
	.widget_categories .screen-reader-text, 
	ul.order_details.bacs_details li > strong {
		font-weight:normal;
	}
	
	#page .widget_shopping_cart_content .total strong {
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_weight'] . ";
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.widget_custom_contact_form_entries .cmsmasters-form-builder form .submit_wrap .button span, 
	.search_bar_wrap form .button, 
	.widget_price_filter .price_slider_wrapper .price_slider_amount .button, 
	.widget ul li a, 
	#page .widget_shopping_cart .widget_shopping_cart_content .buttons .button, 
	body.woocommerce-account .form-row label, 
	table.shop_table.my_account_orders tr td,  
	table.shop_table.my_account_orders tr td * , 
	table.customer_details tr * , 
	body.woocommerce-cart .woocommerce .return-to-shop a.button, 
	.shop_table.order_details tr td.product-name a, 
	.shop_table.order_details tr td.product-name strong, 
	.shop_table.order_details tr td.product-total span, 
	.shop_table.order_details tr * , 
	.checkout #order_review .shop_table tr * , 
	.cart_totals table tr th, 
	.woocommerce-shipping-fields label, 
	.woocommerce-billing-fields label, 
	.woocommerce .myaccount_user strong, 
	.cart_totals .proceed-to-checkout .button, 
	.shipping-calculator-form .button, 
	.shipping_calculator .shipping-calculator-button, 
	.shop_table td.actions .button[name=apply_coupon], 
	.shop_table td.product-price, 
	.shop_table td.product-name a, 
	#page .cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li .quantity, 
	#page .widget_shopping_cart_content .cart_list li a,
	.widget ul.product_list_widget li a, 
	.cmsmasters_single_product .cmsmasters_product_right_column .cart .variations td.label, 
	.cmsmasters_single_product .cmsmasters_product_right_column .cart .single_add_to_cart_button, 
	.cmsmasters_single_product .cmsmasters_product_right_column .price, 
	.cmsmasters_woo_wrap_result .woocommerce-result-count, 
	.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_info .price, 
	.cmsmasters_single_product .cmsmasters_product_right_column .cart .variations td .reset_variations, 
	.cmsmasters_single_product .cmsmasters_woo_tabs .shop_attributes th, 
	.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .cmsmasters_single_product_review_title, 
	.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .commentlist .comment .comment_container .comment-text .meta time, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_wrap div ul > li a {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_decoration'] . ";
	}
	
	.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .commentlist .comment .comment_container .comment-text .meta time {
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 2) . "px;
	}
	
	
	body.woocommerce-cart .woocommerce .return-to-shop a.button, 
	.cart_totals .proceed-to-checkout .button, 
	.shop_table td.product-name a, 
	.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .cmsmasters_single_product_review_title, 
	.cmsmasters_single_product .cmsmasters_product_right_column .price {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] + 4) . "px;	
	}
	
	.widget_custom_contact_form_entries .cmsmasters-form-builder form .submit_wrap .button span, 
	.search_bar_wrap form .button, 
	.widget_price_filter .price_slider_wrapper .price_slider_amount .button, 
	#page .widget_shopping_cart .widget_shopping_cart_content .buttons .button, 
	.shipping-calculator-form .button, 
	.shop_table td.actions .button[name=apply_coupon] {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 1) . "px;
		text-transform:uppercase;
	}
	
	.widget ul.product_list_widget li span, 
	#page .cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li .quantity {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] - 2) . "px;
	}
	
	.cmsmasters_single_product .cmsmasters_product_right_column .cart .variations td .reset_variations, 
	.cmsmasters_woo_wrap_result .woocommerce-result-count, 
	.widget ul li a,
	table.shop_table.my_account_orders tr td, 
	table.shop_table.my_account_orders tr td * , 
	table.customer_details tr * , 
	.shop_table.order_details tr td.product-name a, 
	.shop_table.order_details tr td.product-name strong, 
	.shop_table.order_details tr td.product-total span, 
	.shop_table.order_details tr * , 
	.checkout #order_review .shop_table tr * , 
	.shipping_calculator .shipping-calculator-button, 
	.shop_table td.product-price, 
	.cart_totals table tr th {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 2) . "px;
	}
	
	.shipping_calculator .shipping-calculator-button {
		text-transform:lowercase;
	}
	
	body.woocommerce-cart .woocommerce .return-to-shop a.button, 
	.cart_totals .proceed-to-checkout .button {
		text-transform:uppercase;
	}
	
	.widget ul li a, 
	.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .cmsmasters_single_product_review_title {
		font-weight:bold;
	}

	body.woocommerce-account .form-row label, 
	.woocommerce-shipping-fields label, 
	.woocommerce-billing-fields label, 
	.cmsmasters_single_product .cmsmasters_product_right_column .cart .variations td.label, 
	.cmsmasters_single_product .cmsmasters_product_right_column .cart .single_add_to_cart_button {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 2) . "px;
		text-transform:uppercase;
	}
	
	.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_info .price {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] - 4) . "px;	
	}

	.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_img .button {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_system_font'] . ";
		font-size:14px; /* static */
		line-height:30px; /* static */
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_decoration'] . ";
	}
	
	.shop_table td.product-subtotal, 
	#page .widget_shopping_cart_content .cart_list li .quantity, 
	#page .widget_shopping_cart_content .total strong, 
	#page .widget_shopping_cart_content .total .amount, 
	.product_list_widget li .amount {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_system_font'] . ";
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.cart_totals table tr.cart-subtotal {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_text_decoration'] . ";
	}
	
	.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_info .price del, 
	.cmsmasters_single_product .cmsmasters_product_right_column .price del {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_line_height'] . "px;
	}
	
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	.shop_table td.product-name, 
	.cmsmasters_added_product_info .cmsmasters_added_product_info_text, 
	.product_list_widget li > a {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_system_font'] . ";
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_text_transform'] . ";
	}	
	
	#page .cmsmasters_dynamic_cart_button {
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_line_height'] . "px;
	}
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	.out-of-stock, 
	.onsale	{
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_text_transform'] . ";
	}
	
	.related .products .onsale,
	.related .products .out-of-stock, 
	.upsells .products .onsale,	
	.upsells .products .out-of-stock {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 6) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] + 4) . "px;		
	}
	
	.out-of-stock {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 12) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] + 16) . "px;		
		text-transform:uppercase;
	}
	
	.onsale {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 18) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] + 16) . "px;		
	}
	/* Finish Small Text Font */

/***************** Finish WooCommerce Font Styles ******************/


";

}


if (CMSMASTERS_EVENTS_CALENDAR) {

	$custom_css .= "
/***************** Start Events Font Styles ******************/

	/* Start Content Font */ 
	.tribe_events.cmsmasters_default_type .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_tags a, 
	.tribe_events.cmsmasters_default_type .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_content p, 
	.tribe_events.cmsmasters_default_type .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside > .cmsmasters_post_meta_info a span, 
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .tribe-events-schedule * , 
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"] a, 
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-event-\"] .tribe-events-month-event-title a, 
	.recurringinfo, 
	.recurringinfo *, 
	#tribe-events-content.tribe-events-list .tribe-events-event-meta * , 
	#tribe-events-content.tribe-events-list .tribe-events-venue-details * ,
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_meta .tribe-events-meta-group .cmsmasters_event_meta_info .cmsmasters_event_meta_info_item dt, 
	#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-event-meta .time-details, 
	#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-event-meta .time-details *, 
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-allday .column.first, 
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-grid-body .tribe-week-grid-hours, 
	#tribe-mobile-container .tribe-mobile-day .tribe-events-mobile .tribe-events-event-body .time-details, 
	.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_info *, 
	.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_venue_info_loc, 
	.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_venue_info_loc *, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td * {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_style'] . ";
	}

	.tribe_events.cmsmasters_default_type .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_content p, 
	.tribe_events.cmsmasters_default_type .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside > .cmsmasters_post_meta_info a span, 
	#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-list-photo-description, 
	.tribe-events-tooltip .tribe-events-event-body .description, 
	#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .tribe-events-event-meta .tribe-events-venue-details, 
	#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-event-meta .time-details, 
	#tribe-mobile-container .tribe-mobile-day .tribe-events-mobile .tribe-events-event-body .time-details, 
	.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_venue_info_loc {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] - 1) . "px;
	}
	
	.tribe_events.cmsmasters_default_type .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside > .cmsmasters_post_meta_info a span, 
	.tribe-events-tooltip .tribe-events-event-body .description {
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] - 4) . "px;
	}
	
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-event-\"] .tribe-events-month-event-title a {
		text-transform:none;
	} 

	.widget.tribe-this-week-events-widget .tribe-this-week-widget-day .tribe-this-week-widget-day-wrap .duration, 
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .tribe-events-schedule * , 
	.tribe-events-tooltip .tribe-events-event-body .duration abbr {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] - 6) . "px;
	}

	#tribe-events-content.tribe-events-list .tribe-events-event-meta * , 
	#tribe-events-content.tribe-events-list .tribe-events-venue-details * , 
	.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_venue_info_loc * , 
	.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_info * , 
	.tribe_events.cmsmasters_default_type .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_tags a, 	
	#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-event-meta .time-details *, 
	.tribe-events-tooltip .tribe-events-event-body .duration abbr, 
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-allday .column.first, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td * {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] - 2) . "px;
	}
	
	.tribe_events.cmsmasters_default_type .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_tags a {
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] - 4) . "px;
	}
	
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-allday .column.first span {
		height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] . "px;
	}
	
	.tribe_events .cmsmasters_post_meta_info {
		height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] . "px;
	}
	 
	.tribe-events-day .tribe-events-event-meta div * {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] - 2) . "px;
	}
	
	.widget .vcalendar .type-tribe_events .tribe-events-list-widget-content-wrap .duration:before, .widget .tribe-events-list-widget-events .tribe-events-list-widget-content-wrap .duration:before, 
	#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-event-meta .time-details:before, 
	#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .tribe-events-event-meta .tribe-events-venue-details:before, 
	#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .tribe-events-event-meta .time-details:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] + 4) . "px;
	}
	
	#tribe-events-content.tribe-events-list .tribe-events-event-meta a, 
	#tribe-events-content.tribe-events-list .tribe-events-venue-details a {
		font-weight:bold; /*static*/
	}
	
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	#tribe-events-content .cmsmasters_event_day, 
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-colon {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_decoration'] . ";
	}
	
	#tribe-events-content .cmsmasters_event_day {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] . "px;
	}
	
	#tribe-events-content .cmsmasters_event_date:before {
		width:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] . "px;
		margin-left:-" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] / 2) . "px;
	}
	
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number, 
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-colon {
		font-size:36px; /* static */
		line-height:40px; /* static */
	}
	
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .tribe-events-single-event-title {
		text-transform:none;
	}
	
	@media only screen and (max-width: 1440px) {
		.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number, 
		.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-colon {
			font-size:20px; /* static */
			line-height:26px; /* static */
		}
	}
	
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	.tribe_events.cmsmasters_default_type .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside .cmsmasters_post_date .published:first-of-type, 
	#tribe-events-content .cmsmasters_single_event .cmsmasters_event_month, 
	#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-heading, 
	#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-date {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_text_decoration'] . ";
	}
	
	.widget .vcalendar .type-tribe_events .entry-title a, 
	.tribe_events .cmsmasters_post_header .cmsmasters_post_title a {
		text-transform:none;
	}
	
	.tribe-events-list-widget-events .cmsmasters_event_day, 
	.vcalendar .type-tribe_events .cmsmasters_event_day {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] - 4) . "px;
	}
	
	.tribe_events .cmsmasters_post_format_img:before {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] . "px;
	}
	
	.tribe_events .cmsmasters_post_format_img:before {
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] . "px;
	}
	
	.tribe_events .cmsmasters_post_cont .cmsmasters_post_title:before {
		height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] . "px;
		margin-top:" . (((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] - (int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size']) / 2) . "px;
	}
	
	.tribe-events-list-widget-events .cmsmasters_event_date:before, 
	.vcalendar .type-tribe_events .cmsmasters_event_date:before {
		width:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] . "px;
		margin-left:-" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] / 2) . "px;
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.widget.tribe-this-week-events-widget .tribe-events-page-title, 
	#tribe-events-content.tribe-events-list .tribe-events-list-separator-month {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_text_decoration'] . ";
	}
	
	#tribe-events-content.tribe-events-list .tribe-events-list-separator-month:before {
		height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] . "px;
		margin-top:-" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] / 2) . "px;
	}
	
	.widget.tribe-this-week-events-widget .tribe-this-week-widget-day .tribe-this-week-widget-day-wrap .entry-title a,
	.widget.tribe-this-week-events-widget .tribe-events-page-title {
		text-transform:none;
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.widget.tribe-this-week-events-widget .tribe-this-week-widget-day .tribe-this-week-widget-header-date .day, 
	.widget .vcalendar .type-tribe_events .cmsmasters_event_date .cmsmasters_event_month, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div > span, 
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column *, 
	#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-date-filter #tribe-bar-dates label, 
	#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-search-filter label, 
	#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-geoloc-filter label, 
	#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-submit label, 
	.tribe-events-countdown-widget .tribe-countdown-text a, 
	.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name, 
	.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name a, 
	#tribe-events-content .cmsmasters_event_month, 
	#tribe-events-content.tribe-events-month table.tribe-events-calendar thead th {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_text_decoration'] . ";
	}
	
	#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .tribe-events-event-meta > div:before, 
	#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .tribe-events-event-meta > div > div:before, 
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right .tribe-events-back:before, 
	.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_right a:before, 
	.tribe-events-venue-widget .tribe-venue-widget-wrapper .cmsmasters_widget_event_info > div:before, 
	.tribe-events-list-widget-events .tribe-events-list-widget-content-wrap .duration:before, 
	.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_info > div:before, 
	.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_venue_info_loc > div:before, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .type-tribe_events .tribe-mini-calendar-event .list-info .duration:before, 
	#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-event-meta .time-details:before {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] . "px;
	}
	
	.tribe-events-list-widget-events .tribe-events-list-widget-content-wrap .duration:before, 
	.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_info > div:before, 
	.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_venue_info_loc > div:before, 
	.tribe-events-venue-widget .tribe-venue-widget-wrapper .cmsmasters_widget_event_info > div:before, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .type-tribe_events .tribe-mini-calendar-event .list-info .duration:before {
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] + 2) . "px;
	}
	
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .tribe-events-schedule > div:before, 
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column * {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] + 2) . "px;
	}
	
	.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] - 2) . "px;
		text-transform:none;
	}
	
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_meta .tribe-events-meta-group .tribe-events-single-section-title {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] + 6) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] + 12) . "px;
	}
	
	.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name:before, 
	#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-list-event-title:before {
		height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] . "px;
		margin-top:-" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] / 2) . "px;
	}
	
	.tribe-events-venue-widget .tribe-venue-widget-wrapper .entry-title a {
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_weight'] . ";
	}
	
	@media only screen and (max-width: 1440px) {
		.tribe-events-countdown-widget .tribe-countdown-text a {
			font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] - 2) . "px;
		}
	}
	
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_venue_info_loc a , 
	.tribe_events.cmsmasters_default_type .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info .cmsmasters_post_user_name, 
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .tribe-events-schedule .tribe-events-cost, 
	#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-list-event-title a, 
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-grid-body .tribe-week-grid-hours div, 
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-allday .column.first span, 
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title a, 
	#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .tribe-events-list-event-description .tribe-events-read-more, 
	#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .cmsmasters_events_list_event_header .tribe-events-event-cost, 
	#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .cmsmasters_events_list_event_header .tribe-events-list-event-title a, 
	.tribe-events-tooltip .entry-title, 
	#tribe-events-bar #tribe-bar-views ul.tribe-bar-views-list li.tribe-bar-views-option a, 
	#tribe-events-bar #tribe-bar-views label.button, 
	#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner div input, 
	.tribe-events-tooltip .entry-title a, 
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column, 
	.tribe-events-list-widget-events .cmsmasters_event_month, 
	.vcalendar .type-tribe_events .cmsmasters_event_month, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .type-tribe_events .tribe-mini-calendar-event .list-info h2, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .type-tribe_events .tribe-mini-calendar-event .list-info h2 a {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_decoration'] . ";
	}
	
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_meta .tribe-events-meta-group .cmsmasters_event_meta_info .cmsmasters_event_meta_info_item dt, 
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_meta .tribe-events-meta-group .cmsmasters_event_meta_info .cmsmasters_event_meta_info_item .cmsmasters_event_meta_info_item_title {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_system_font'] . ";
	}
	
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] + 2) . "px;
	}
	
	#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-list-event-title a {
		font-weight:bold;	
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] + 4) . "px;
	}
	
	.tribe-events-tooltip .entry-title {
		font-weight:bold;	
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] + 2) . "px;
	}
	
	#tribe-events-bar #tribe-bar-views label.button, 
	#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner div input {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 1) . "px;
	}
	
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .tribe-events-schedule .tribe-events-cost:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 4) . "px;
	}
	
	.tribe_events.cmsmasters_default_type .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info .cmsmasters_post_user_name, 
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] - 1) . "px;
	}

	.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_venue_info_loc a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] - 2) . "px;
	}
	
	#tribe-events-bar #tribe-bar-views label.button:before {
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] . "px;
	}
	
	.tribe_events.cmsmasters_default_type .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info .cmsmasters_post_user_name, 
	.tribe_events.cmsmasters_default_type .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info .cmsmasters_post_user_name a, 
	#tribe-events-bar #tribe-bar-views ul.tribe-bar-views-list li.tribe-bar-views-option a {
		text-transform:uppercase;
	}
	
	#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .tribe-events-list-event-description .tribe-events-read-more {
		text-transform:lowercase;
	}
	
	.tribe_events.cmsmasters_default_type .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info .cmsmasters_post_user_name {
		font-weight: lighter;
	}
	
	#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .cmsmasters_events_list_event_header .tribe-events-list-event-title a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 10) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] + 12) . "px;
		font-weight:bold;
	}
	
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-event-\"] .tribe-events-month-event-title, 
	#tribe-events-footer > a, 
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td .tribe-events-viewmore, 
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td .tribe-events-viewmore a, 
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title, 
	#tribe-mobile-container .tribe-mobile-day .tribe-events-mobile .tribe-events-event-body .tribe-events-read-more, 
	.tribe-events-viewmore a {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_text_decoration'] . ";
	}
	
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right .tribe-events-back a:before, 
	.tribe-events-organizer .cmsmasters_events_organizer_header .cmsmasters_events_organizer_header_right a:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_size'] + 1) . "px;
	}
	
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"], 
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"] a, 
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td .tribe-events-viewmore, 
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td .tribe-events-viewmore a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_size'] + 4) . "px;
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
		#tribe-events-bar #tribe-bar-views label.button, 
		#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner div input {
			text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_text_transform'] . ";
		}
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	.widget.tribe-this-week-events-widget .tribe-this-week-widget-day .tribe-this-week-widget-header-date .date, 
	.widget .vcalendar .type-tribe_events .cmsmasters_event_date .cmsmasters_event_day, 
	.tribe_events.cmsmasters_default_type .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside .cmsmasters_post_date .published:nth-of-type(2), 
	#tribe-events-content.tribe-events-day .tribe-events-day-time-slot > h5, 
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number .tribe-countdown-under, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar th.tribe-mini-calendar-dayofweek {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_text_transform'] . ";
	}
	
	.widget.tribe-this-week-events-widget .tribe-this-week-widget-day .tribe-this-week-widget-header-date .date, 
	.widget .vcalendar .type-tribe_events .cmsmasters_event_date .cmsmasters_event_day, 
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-colon, 
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number, 
	.tribe_events.cmsmasters_default_type .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside .cmsmasters_post_date .published:nth-of-type(2), 
	#tribe-events-content .cmsmasters_single_event .cmsmasters_event_day, 
	#tribe-events-content.tribe-events-day .tribe-events-day-time-slot > h5 {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_system_font'] . ";
	}
	
	.widget.tribe-this-week-events-widget .tribe-this-week-widget-day .tribe-this-week-widget-header-date .date, 
	.tribe_events.cmsmasters_default_type .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside .cmsmasters_post_date .published:nth-of-type(2) {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 58) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] + 50) . "px;
	}
	
	.widget .vcalendar .type-tribe_events .cmsmasters_event_date .cmsmasters_event_day, 
	#tribe-events-content .cmsmasters_single_event .cmsmasters_event_day {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 40) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] + 32) . "px;
	}
	
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number .tribe-countdown-under {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 1) . "px;
	}
	
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number .tribe-countdown-under {
		text-transform:uppercase; /* static */
	}
	
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-grid-body .tribe-week-grid-hours {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] - 1) . "px;
	}
	
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-colon {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 20) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] + 20) . "px;
	}
	
	#tribe-events-content.tribe-events-day .tribe-events-day-time-slot > h5 {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 18) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] + 16) . "px;
	}
	
	/* Finish Small Text Font */

/***************** Finish Events Font Styles ******************/


";

}


if (CMSMASTERS_TC_EVENTS) {

	$custom_css .= "
/***************** Start TC Events Font Styles ******************/

	/* Start Content Font */
	.tc_event_content {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_style'] . ";
	}
	
	.cmsmasters_tc_event .cmsmasters_tc_event_info span, 
	.cmsmasters_open_tc_event .cmsmasters_tc_event_info span {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] - 2) . "px;
	}
	/* Finish Content Font */
	
	
	/* Start H1 Font */
	.cmsmasters_open_tc_event .cmsmasters_tc_event_title, 
	.tickera_owner_info > h2 {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_open_tc_event .cmsmasters_tc_event_title {
		text-transform:none;
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	.tickera_buyer_info > h3 {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_text_decoration'] . ";
	}
	
	.cmsmasters_tc_event .cmsmasters_tc_event_title, 
	.cmsmasters_tc_event .cmsmasters_tc_event_title a {
		text-transform:none;
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.event_tickets th, 
	.tickera_table th {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_text_decoration'] . ";
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.event_tickets a, 
	.tickera_owner_info > h5, 
	.tickera-payment-gateways .plugin-title {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_text_decoration'] . ";
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.event_tickets, 
	.tickera_table, 
	.fields-wrap label span, 
	.tickera > p, 
	.tickera > label, 
	.tickera-payment-gateways .tc_redirect_message, 
	.tc_cart_widget .tc_cart_ul li {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_decoration'] . ";
	}
	
	.event_tickets, 
	.tickera_table, 
	.fields-wrap label span, 
	.tickera > p, 
	.tickera > label {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 2) . "px;
	}
	
	.fields-wrap label span {
		text-transform:uppercase;
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.cmsmasters_tc_event .cmsmasters_tc_event_category a, 
	.cmsmasters_open_tc_event .cmsmasters_tc_event_category a {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_text_decoration'] . ";
	}
	
	.cmsmasters_tc_event .cmsmasters_tc_event_category a, 
	.cmsmasters_open_tc_event .cmsmasters_tc_event_category a {
		text-transform:uppercase;
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	.tc_event_button {
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_text_transform'] . ";
	}
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	.tc_event_small	{
		font-family:" . cmsmasters_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_text_transform'] . ";
	}
	/* Finish Small Text Font */

/***************** Finish TC Events Font Styles ******************/


";

}
	
	return $custom_css;
}

