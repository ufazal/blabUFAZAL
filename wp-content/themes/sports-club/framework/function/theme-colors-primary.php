<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version 	1.0.1
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function cmsmasters_theme_colors_primary() {
	$cmsmasters_option = cmsmasters_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version 	1.0.1
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	" . (($scheme == 'default') ? "body," : '') . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer .headline_text .entry-subtitle," : '') . "
	{$rule}.cmsmasters-form-builder .form_info label, 
	{$rule}.cmsmasters-form-builder .form_info label span, 
	{$rule}.cmsmasters-form-builder .form_info select, 
	{$rule}.cmsmasters-form-builder .form_info .form_field_wrap input, 
	{$rule}.cmsmasters-form-builder .form_info .form_field_wrap textarea, 
	{$rule}.cmsmasters-form-builder .form_info .form_field_wrap select, 
	{$rule}.cmsmasters-form-builder .form_info .form_field_wrap select option, 
	{$rule}.header_top_outer .meta_wrap,
	{$rule}.footer_inner, 
	{$rule}.cmsmasters_post_comments,
	{$rule}.cmsmasters_post_comments:hover,
	{$rule}.widget_nav_menu ul ul ul li a, 
	{$rule}.widget_nav_menu ul ul ul ul li a, 
	{$rule}.widget_nav_menu ul ul ul ul ul li a, 
	{$rule}.cmsmasters_notice .notice_close,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item a,
	{$rule}.cmsmasters_search_post .cmsmasters_post_cont_info,
	{$rule}.post.cmsmasters_search_post .cmsmasters_post_cont_info,
	{$rule}.cmsmasters_search_post .cmsmasters_post_footer_info,
	{$rule}.post.cmsmasters_search_post .cmsmasters_post_footer_info,
	{$rule}.header_mid #navigation > li > a[data-tag]:before,
	{$rule}.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner, 
	{$rule}.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner a,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_price_wrap .cmsmasters_period, 
	{$rule}.wpcf7-list-item-label, body .cmsmasters-form-builder .check_parent input[type=checkbox] + label, 
	{$rule}body .cmsmasters-form-builder .check_parent input[type=radio] + label, 
	{$rule}.wpcf7-list-item-label, body .cmsmasters-form-builder .check_parent input[type=checkbox] + label, 
	{$rule}body .cmsmasters-form-builder .check_parent input[type=radio] + label, 
	{$rule}.error p.search_field input {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_price_wrap .cmsmasters_period {
		font-weight:bold;
	}
	
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title > .cmsmasters_toggle_plus .cmsmasters_toggle_plus_hor,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title > .cmsmasters_toggle_plus .cmsmasters_toggle_plus_vert {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	{$rule}.cmsmasters-form-builder .form_info.cmsmasters_checkboxes label, 
	{$rule}.cmsmasters-form-builder .form_info.cmsmasters_checkbox label, 
	{$rule}.cmsmasters-form-builder .form_info.cmsmasters_radio label, 
	{$rule}.cmsmasters-form-builder .form_info.cmsmasters_checkboxes label span, 
	{$rule}.cmsmasters-form-builder .form_info.cmsmasters_checkbox label span, 
	{$rule}.cmsmasters-form-builder .form_info.cmsmasters_radio label span, 
	{$rule}.error .error_button_wrap a:hover, 
	{$rule}.error .search_bar_wrap form button[type=submit]:hover, 
	{$rule}mark, 
	{$rule}.cmsmasters_button,
	{$rule}.cmsmasters_button:hover, 	
	{$rule}.button, 
	{$rule}.button:hover, 
	{$rule}button, 
	{$rule}button:hover, 
	{$rule}input[type=submit], 
	{$rule}input[type=submit]:hover, 
	{$rule}input[type=button], 
	{$rule}input[type=button]:hover, 
	{$rule}.current > .button, 
	{$rule}.button.current,  
	{$rule}input[type=file], 
	{$rule}input[type=text]:focus, 
	{$rule}input[type=email]:focus, 
	{$rule}input[type=password]:focus, 
	{$rule}input[type=number]:focus, 
	{$rule}input[type=url]:focus, 
	{$rule}input[type=tel]:focus, 
	{$rule}input[type=search]:focus, 
	{$rule}input:focus, 
	{$rule}select:focus, 
	{$rule}option:focus, 
	{$rule}textarea:focus, 
	{$rule}.wpcf7-form p,
	{$rule}a,
	{$rule}h1 a:hover,
	" . (($scheme != 'default') ? "{$rule}.headline_outer a," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a:hover h1," : '') . "
	" . (($scheme != 'default') ? "{$rule}.widget ul li a," : '') . "
	{$rule}.related_posts_tabs .cmsmasters_tab_inner .one_half .rel_post_content:hover a,
	{$rule}.color_2,
	{$rule}.cmsmasters_post_format_img,
	{$rule}.owl-buttons span:hover,
	{$rule}.cmsmasters_dropcap.type1, 
	{$rule}.tweet_time:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_heading_left .icon_box_heading:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before, 
	{$rule}.cmsmasters_post_comments:hover:before, 
	{$rule}#cancel-comment-reply-link, 
	{$rule}.post_nav a:hover,
	{$rule}.cmsmasters_project_filter_list .button:hover, 
	{$rule}.cmsmasters_post_filter_list .button:hover, 
	{$rule}.cmsmasters_project_filter_list .current .button, 
	{$rule}.cmsmasters_post_filter_list .current .button, 
	{$rule}.img_placeholder_small:hover,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_price_wrap .cmsmasters_currency, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_price_wrap .cmsmasters_price, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_price_wrap .cmsmasters_coins, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_button,
	{$rule}.pl_subtitle, 
	{$rule}.cmsmasters_profile.vertical .profile .pl_img:hover .pl_noimg,
	{$rule}.cmsmasters_search .cmsmasters_search_post .cmsmasters_post_read_more, 
	{$rule}#wp-calendar thead th,
	{$rule}.bypostauthor > .comment-body .alignleft:before, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a:hover, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a:hover, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a:hover, 
	{$rule}.cmsmasters_img_rollover_wrap .cmsmasters_img_rollover .cmsmasters_image_link:hover, 
	{$rule}.cmsmasters_img_rollover_wrap .cmsmasters_img_rollover .cmsmasters_open_link:hover, 
	{$rule}.header_mid_inner .search_bar_wrap form p.search_field .search_button button,
	{$rule}.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner a:first-of-type,
	{$rule}.cmsmasters_table tbody tr td,
	{$rule}code,
	{$rule}.cmsmasters_dropcap.type2,
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_inner .quote_info_wrap	.wrap_quote_title,
	{$rule}.cmsmasters_quotes_slider .owl-controls .owl-buttons > div > span,
	{$rule}.quote_grid .quote_image_content_wrap .quote_subtitle,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title:hover > .cmsmasters_toggle_plus > span,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title > a,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .feature_list *, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .pricing_title, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .feature_list *, 	
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_price_wrap .cmsmasters_currency, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_price_wrap .cmsmasters_price, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_price_wrap .cmsmasters_coins, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_price_wrap .cmsmasters_period,
	{$rule}.header_mid_inner .search_bar_wrap form p.search_button button:hover,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap,
	{$rule}.owl-buttons .owl-prev span, 
	{$rule}.owl-buttons .owl-next span,
	{$rule}.cmsmastersLike,
	{$rule}.cmsmastersLike:hover,
	{$rule}.cmsmastersLike.active:before,
	{$rule}.cmsmastersLike:hover:before,
	{$rule}.cmsmastersLike.active,
	{$rule}.cmsmasters_theme_icon_comment,
	{$rule}.cmsmasters_theme_icon_comment:hover, 
	{$rule}.cmsmasters_theme_icon_comment:hover:before, 
	{$rule}.cmsmasters_theme_icon_comment.active, 
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_features .profile_features_item .profile_features_item_title,
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_details .profile_details_item .profile_details_item_title,
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_social_icons .profile_social_icons_list li a,
	{$rule}.profiles.opened-article .profile .cmsmasters_profile_header .cmsmasters_profile_subtitle,
	{$rule}.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_cont_wrap .cmsmasters_post_cont_info span, 
	{$rule}.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_cont_wrap .cmsmasters_post_cont_info abbr,
	{$rule}.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_cont_wrap .cmsmasters_post_cont_info a, 
	{$rule}.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_footer .cmsmasters_post_read_more, 
	{$rule}.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_footer .cmsmasters_post_read_more:hover,
	{$rule}.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .cmsmasters_slider_post_header_with_date .cmsmasters_post_date,
	{$rule}.cmsmasters_posts_slider .cmsmasters_owl_slider .owl-buttons .owl-prev .cmsmasters_prev_arrow, 
	{$rule}.cmsmasters_posts_slider .cmsmasters_owl_slider .owl-buttons .owl-next .cmsmasters_next_arrow,
	{$rule}.cmsmasters_roll_titles_wrap .cmsmasters_roll_titles_slider_wrap .cmsmasters_roll_titles_slider .owl-carousel .owl-buttons .cmsmasters_prev_arrow:before, 
	{$rule}.cmsmasters_roll_titles_wrap .cmsmasters_roll_titles_slider_wrap .cmsmasters_roll_titles_slider .owl-carousel .owl-buttons .cmsmasters_next_arrow:before, 
	{$rule}.cmsmasters_posts_slider .cmsmasters_owl_slider .owl-buttons .owl-prev .cmsmasters_prev_arrow:before, 
	{$rule}.cmsmasters_posts_slider .cmsmasters_owl_slider .owl-buttons .owl-next .cmsmasters_next_arrow:before,
	{$rule}.cmsmasters_twitter .owl-controls .owl-buttons .owl-prev .cmsmasters_prev_arrow:before, 
	{$rule}.cmsmasters_twitter .owl-controls .owl-buttons .owl-next .cmsmasters_next_arrow:before,
	{$rule}.cmsmasters_posts_slider .project .slider_project_outer .slider_project_img_wrap .cmsmasters_slider_project_category a, 
	{$rule}.portfolio.opened-article .project .project_sidebar .project_details .project_details_item .project_details_item_title, 
	{$rule}.cmsmasters_wrap_pagination ul li	.page-numbers, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.current:hover,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers:hover,
	{$rule}.portfolio .project .project_outer .project_inner .pj_top_wrap .pj_top_wrap_leftside a,
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsmasters_project_cont_info_bottom_wrap .cmsmasters_project_cont_info .cmsmasters_project_category a,
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button,
	{$rule}.cmsmasters_twitter_item, 
	{$rule}.cmsmasters_theme_icon_user_twitter, 
	{$rule}.cmsmasters_icon_wrap .cmsmasters_simple_icon, 
	{$rule}.cmsmasters_archive .cmsmasters_post_cont .cmsmasters_post_date .published:first-of-type, 
	{$rule}.cmsmasters_archive .cmsmasters_post_cont .cmsmasters_post_date .published:nth-of-type(2), 
	{$rule}.post .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside .cmsmasters_post_date .published:first-of-type, 
	{$rule}.post .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside .cmsmasters_post_date .published:nth-of-type(2), 
	{$rule}.cmsmasters_post_read_more, 
	{$rule}.cmsmasters_post_read_more:hover, 
	{$rule}.post .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info span,
	{$rule}.post .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info div, 	
	{$rule}.post .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info a, 
	{$rule}.post .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info .cmsmasters_post_category a, 
	{$rule}.cmsmasters_post_filter_but.button:before, 
	{$rule}.blog.columns .post .cmsmasters_post_cont_info_leftside .cmsmasters_post_date .published, 
	{$rule}.blog.timeline .post .cmsmasters_post_info .cmsmasters_post_date, 
	{$rule}.blog.timeline .post .cmsmasters_post_cont_info span, 
	{$rule}.blog.timeline .post .cmsmasters_post_cont_info span a, 
	{$rule}.blog.timeline .post .cmsmasters_post_cont_info .cmsmasters_post_category a, 
	{$rule}.blog.timeline .post .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_tags, 
	{$rule}.post_comments .commentlist .comment-body .comment-content abbr, 
	{$rule}.cmsmasters_single_slider .cmsmasters_single_slider_img_wrap .cmsmasters_post_category a, 
	{$rule}.cmsmasters_clients_slider_wrap .owl-wrapper-outer .cmsmasters_clients_slider .owl-controls .owl-buttons div span:before, 
	{$rule}.cmsmasters_clients_slider_wrap .owl-wrapper-outer .cmsmasters_clients_slider .owl-controls .owl-buttons div span, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs span, 
	{$rule}.page-template-sitemap .cmsmasters_sitemap_wrap a:hover, 
	{$rule}.cmsmasters_project_filter_but.button:hover,  
	{$rule}.cmsmasters_post_filter_but.button:hover, 
	{$rule}.cmsmasters_post_filter_but.button:hover:before, 
	{$rule}.cmsmasters_project_sort_but.button:hover, 
	{$rule}.widget .tweet_list .tweet_time, 
	{$rule}.widget .tweet_list .tweet_text a, 
	{$rule}.widget .tweet_list .tweet_text {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	" . (($scheme == 'default') ? "mark," : '') . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme} mark," : '') . "
	{$rule}.widget_custom_projects_entries_slides .cmsmasters_project_category a:hover, 
	{$rule}.cmsmasters_table tr.cmsmasters_table_row_header,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_item:hover .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_quotes .owl-page:hover,
	{$rule}.cmsmasters_quotes .owl-page.active, 
	{$rule}.post .cmsmasters_post_cont .cmsmasters_post_title:before,  
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab:before,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item:hover:before, 
	{$rule}.cmsmasters_tabs.lpr .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab a:before,
	{$rule}.cmsmasters_tabs.lpr .cmsmasters_tabs_list .cmsmasters_tabs_list_item a:hover:before, 
	{$rule}.cmsmasters_profile .profile:before, 
	{$rule}.cmsmasters_img_rollover_wrap .cmsmasters_img_rollover .cmsmasters_image_link, 
	{$rule}.cmsmasters_img_rollover_wrap .cmsmasters_img_rollover .cmsmasters_open_link,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_pricing_item_inner .cmsmasters_price_wrap_top,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before,
	{$rule}.cmsmasters_notice .notice_close:before,
	{$rule}.cmsmasters_notice .notice_close:after,
	{$rule}.cmsmasters_profile.horizontal .profile,
	{$rule}.cmsmasters_profile.horizontal .pl_content .pl_content_rightside, 
	{$rule}.cmsmasters_profile.vertical .pl_content .pl_content_rightside,
	{$rule}.cmsmasters_profile .pl_img figure a:after, 
	{$rule}.cmsmasters_profile .pl_img figure,
	{$rule}.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_cont_wrap .cmsmasters_post_cont_info span.cmsmasters_slider_post_category a:hover, 
	{$rule}.cmsmasters_posts_slider .project .slider_project_outer .slider_project_img_wrap .cmsmasters_slider_project_category a:hover, 
	{$rule}.cmsmasters_posts_slider .project .slider_project_outer .slider_project_img_wrap, 
	{$rule}.cmsmasters_posts_slider .project .slider_project_outer .slider_project_img_wrap figure a:after,
	{$rule}.portfolio .project .project_outer .project_inner .pj_top_wrap .pj_top_wrap_rightside,
	{$rule}.portfolio .project .pj_top_wrap .cmsmasters_project_cont_info .cmsmasters_project_category a:hover,
	{$rule}.portfolio .project .project_outer figure, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsmasters_project_cont_info_bottom_wrap .cmsmasters_project_cont_info .cmsmasters_project_category a:hover, 
	{$rule}.portfolio.puzzle .project .project_outer:after, 
	{$rule}.post .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info .cmsmasters_post_category a:hover, 
	{$rule}.blog.timeline .post .cmsmasters_post_cont_info .cmsmasters_post_category a:hover, 
	{$rule}.cmsmasters_single_slider .cmsmasters_single_slider_img_wrap .cmsmasters_post_category a:hover, 
	{$rule}.cmsmasters_single_slider .cmsmasters_single_slider_img_wrap, 
	{$rule}.widget_custom_projects_entries_slides .pj_ddn_buttons,
	{$rule}.widget.widget_custom_latest_projects_entries .owl-wrapper-outer .owl-item .latest_pj_item .latest_pj_img, 
	{$rule}.widget.widget_custom_latest_projects_entries .owl-wrapper-outer .owl-item .latest_pj_item .latest_pj_img figure a:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_project_filter_list .button, 
	{$rule}.cmsmasters_post_filter_list .button, 
	{$rule}.cmsmasters_project_filter_list .button:hover, 
	{$rule}.cmsmasters_post_filter_list .button:hover, 
	{$rule}.cmsmasters_project_filter_list .current .button, 
	{$rule}.cmsmasters_post_filter_list .current .button {
		background-color:transparent; /* static */
	}
	
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:after, 
	{$rule}.header_mid_inner .search_bar_wrap form p.search_button button,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap,
	{$rule}.header_mid_inner .search_bar_wrap form p.search_button button,
	{$rule}input[type=text]:focus, 
	{$rule}input[type=email]:focus, 
	{$rule}input[type=password]:focus, 
	{$rule}input[type=number]:focus, 
	{$rule}input[type=url]:focus, 
	{$rule}input[type=tel]:focus, 
	{$rule}input[type=search]:focus, 
	{$rule}input:focus, 
	{$rule}select:focus, 
	{$rule}option:focus, 
	{$rule}textarea:focus, 
	{$rule}.cmsmasters_button,
	{$rule}.comment-respond .comment-form p input:not([type='submit']):focus, 
	{$rule}.button, 
	{$rule}button, 
	{$rule}input[type=submit], 
	{$rule}input[type=button], 
	{$rule}.owl-buttons .owl-prev span, 
	{$rule}.owl-buttons .owl-next span, 
	{$rule}.cmsmasters_project_filter_but.button, 
	{$rule}.cmsmasters_project_filter_but.button.current, 
	{$rule}.cmsmasters_project_sort_but.button,  
	{$rule}.cmsmasters_project_sort_but.button.current, 
	{$rule}.cmsmasters_icon_wrap .cmsmasters_simple_icon, 
	{$rule}.cmsmasters_post_filter_but.button, 
	{$rule}.cmsmasters_post_filter_but.button.current, 
	{$rule}.responsive_nav {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap:before {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	/* Finish Primary Color */
	
	/* Start Highlight Color */
	{$rule}.widget_custom_projects_entries_slides .pj_ddn_buttons .cmsmastersLike:hover:before, 
	{$rule}.widget_custom_projects_entries_slides .pj_ddn_buttons .cmsmastersLike:active:before, 
	{$rule}.widget_custom_projects_entries_slides .cmsmasters_project_category a:hover, 
	{$rule}.error h2.error_title span, 
	{$rule}a:hover,
	" . (($scheme != 'default') ? "{$rule}.headline_outer a:hover," : '') . "
	{$rule}.tweet_time,
	{$rule}.cmsmasters_toggles .cmsmasters_toggles_filter > a.current_filter,
	{$rule}.search_bar_wrap button:before, 
	{$rule}.widget ul li a:hover,
	{$rule}.widget_nav_menu ul li.current-menu-item a,
	{$rule}.post .cmsmasters_post_cont_info,
	{$rule}.post .cmsmasters_post_footer_info,
	{$rule}.post .cmsmasters_post_header .cmsmasters_post_subtitle,
	{$rule}.comment-content abbr, 
	{$rule}#cancel-comment-reply-link:hover, 
	{$rule}.img_placeholder_small,
	{$rule}.cmsmasters_search_post .cmsmasters_search_post_number_wrap .cmsmasters_post_type_label, 
	{$rule}.post_nav span:before,
	{$rule}.footer_inner #footer_nav > li.current-menu-item > a,
	{$rule}.footer_inner #footer_nav > li.current_page_item > a,
	{$rule}.footer_inner #footer_nav > li.current-menu-ancestor > a,
	{$rule}.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner a:hover,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title:hover > a,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_pricing_item_inner .cmsmasters_price_wrap_top .cmsmasters_period,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .feature_list a:hover, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .feature_list a:hover,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap .cmsmasters_stat_units_text,
	{$rule}.owl-buttons .owl-prev span:hover:before, 
	{$rule}.owl-buttons .owl-next span:hover:before,
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_social_icons .profile_social_icons_list li a:hover,
	{$rule}.post_nav span a:hover,
	{$rule}.pl_social_list li a:hover,
	{$rule}.cmsmasters_profile.horizontal .pl_noimg:before,
	{$rule}.owl-controls .owl-buttons .owl-prev:hover .cmsmasters_prev_arrow:before, 
	{$rule}.owl-controls .owl-buttons .owl-next:hover .cmsmasters_next_arrow:before,
	{$rule}.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_cont_wrap .cmsmasters_post_cont_info a:hover, 
	{$rule}.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_cont_wrap .cmsmasters_post_cont_info a:hover	span,
	{$rule}.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_cont_wrap .cmsmasters_post_cont_info span.cmsmasters_slider_post_category a:hover,
	{$rule}.cmsmasters_posts_slider .project .slider_project_outer .slider_project_img_wrap .cmsmasters_slider_project_category a:hover, 
	{$rule}.cmsmasters_posts_slider .project .slider_project_outer .slider_project_img_wrap .cmsmasters_slider_project_cont_info_top_wrap a:hover:before, 
	{$rule}.cmsmasters_posts_slider .project .slider_project_outer .slider_project_img_wrap .cmsmasters_slider_project_cont_info_top_wrap a:active,
	{$rule}.portfolio .project .pj_top_wrap .cmsmasters_project_cont_info .cmsmasters_project_category a:hover, 
	{$rule}.portfolio .project .project_outer .project_inner .pj_top_wrap .pj_top_wrap_rightside a:hover:before, 
	{$rule}.portfolio .project .project_outer .project_inner .pj_top_wrap .pj_top_wrap_rightside a.active:before, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsmasters_project_cont_info_top_wrap a:hover:before, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsmasters_project_cont_info_bottom_wrap .cmsmasters_project_cont_info .cmsmasters_project_category a:hover, 
	{$rule}.cmsmasters_roll_titles_wrap .cmsmasters_roll_titles_slider_wrap .cmsmasters_roll_titles_slider .owl-carousel .owl-buttons .cmsmasters_prev_arrow:hover:before, 
	{$rule}.cmsmasters_roll_titles_wrap .cmsmasters_roll_titles_slider_wrap .cmsmasters_roll_titles_slider .owl-carousel .owl-buttons .cmsmasters_next_arrow:hover:before, 
	{$rule}.post .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info	a:hover span, 
	{$rule}.post .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info .cmsmasters_post_category a:hover, 
	{$rule}.blog.timeline .post .cmsmasters_post_cont_info a:hover span, 
	{$rule}.blog.timeline .post .cmsmasters_post_cont_info .cmsmasters_post_category a:hover, 
	{$rule}.blog.timeline .post .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_tags a:hover, 
	{$rule}.cmsmasters_single_slider .cmsmasters_single_slider_img_wrap .cmsmasters_post_category a:hover, 
	{$rule}blockquote:before, 
	{$rule}.widget .tweet_list .tweet_text a:hover, 
	{$rule}.cmsmasters_posts_slider .project .slider_project_outer .slider_project_img_wrap .cmsmasters_slider_project_cont_info_top_wrap a.active:before,
	.cmsmasters_color_scheme_{$scheme} .footer_inner .social_wrap a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	{$rule}.responsive_nav:hover,
	{$rule}.enable_header_bottom .responsive_nav:hover, 	
	{$rule}.enable_header_bottom .responsive_nav.active,  
	{$rule}.responsive_nav.active, 
	{$rule}.widget_custom_projects_entries_slides .cmsmasters_project_category a, 
	{$rule}#wp-calendar thead * , 
	{$rule}.header_mid_inner .search_wrap .search_wrap_inner .search_bar_wrap form p.search_button button:hover, 
	{$rule}mark, 
	{$rule}.cmsmasters_button:hover, 	
	{$rule}.button:hover, 
	{$rule}button:hover, 
	{$rule}input[type=submit]:hover, 
	{$rule}input[type=button]:hover, 
	{$rule}.blog.columns.puzzle .post .preloader,
	{$rule}.cmsmasters_dropcap.type2,
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_inner .quote_info_wrap .quote_subtitle,
	{$rule}.quote_grid .quote_image_content_wrap .quote_subtitle,
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab > a,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab a span,
	{$rule}.cmsmasters_pricing_table .pricing_title, 
	{$rule}.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.header_mid_inner .search_bar_wrap form p.search_button button:hover,
	{$rule}.cmsmasters_notice .notice_close:hover:before,
	{$rule}.cmsmasters_notice .notice_close:hover:after,
	{$rule}.owl-page:hover, 
	{$rule}.owl-page.active,
	{$rule}.profiles.opened-article .profile .cmsmasters_profile_header .cmsmasters_profile_subtitle,
	{$rule}.cmsmasters_profile.horizontal .pl_subtitle, 
	{$rule}.cmsmasters_profile.vertical .pl_subtitle, 
	{$rule}.cmsmasters_profile.horizontal .pl_noimg, 
	{$rule}.cmsmasters_profile.vertical .pl_noimg,
	{$rule}.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_cont_wrap .cmsmasters_post_cont_info span.cmsmasters_slider_post_category a,
	{$rule}.cmsmasters_posts_slider .project .slider_project_outer .slider_project_img_wrap .cmsmasters_slider_project_category a, 
	{$rule}.cmsmasters_project_filter_list li.current > a.button,
	{$rule}.cmsmasters_post_filter_wrap .cmsmasters_post_filter .cmsmasters_post_filter_block .cmsmasters_post_filter_list li.current > a.button, 
	{$rule}.portfolio .project .pj_top_wrap .cmsmasters_project_cont_info .cmsmasters_project_category a, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsmasters_project_cont_info_bottom_wrap .cmsmasters_project_cont_info .cmsmasters_project_category a, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button, 
	{$rule}.post .cmsmasters_post_cont .cmsmasters_post_cont_info_rightside .cmsmasters_post_cont_info .cmsmasters_post_category a, 
	{$rule}.blog.timeline .post .cmsmasters_post_cont_info .cmsmasters_post_category a, 
	{$rule}.portfolio .project .project_outer .cmsmasters_img_wrap .img_placeholder, 
	{$rule}.header_mid_inner #navigation > li.current_page_item > a	> span, 
	{$rule}.cmsmasters_single_slider .cmsmasters_single_slider_img_wrap .cmsmasters_post_category a, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .button, 
	{$rule}.widget_custom_popular_projects_entries .img_placeholder,
	{$rule}.widget_custom_latest_projects_entries .img_placeholder, 
	{$rule}.cmsmasters_project_filter_but.button:hover, 
	{$rule}.cmsmasters_post_filter_but.button:hover, 
	{$rule}.cmsmasters_project_sort_but.button:hover, 
	{$rule}#page .cmsmasters_posts_slider .owl-buttons .owl-prev span:hover, 
	{$rule}#page .cmsmasters_posts_slider .owl-buttons .owl-next span:hover, 
	{$rule}#page .cmsmasters_posts_slider .owl-buttons .owl-prev span:hover:before, 
	{$rule}#page .cmsmasters_posts_slider .owl-buttons .owl-next span:hover:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.responsive_nav, 
	{$rule}#wp-calendar tfoot td, 
	{$rule}.header_mid_inner .search_wrap .search_wrap_inner .search_bar_wrap form p.search_button button, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_img a.button, 
	{$rule}.cmsmasters_project_filter_block > a.button, 
	{$rule}.cmsmasters_project_sort_block > a.button, 
	{$rule}input[type=file], 
	{$rule}.cmsmasters_button,
	{$rule}.button,
	{$rule}input[type=submit],
	{$rule}input[type=button],
	{$rule}button {
		background-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . ", 0.0);
	}

	
	{$rule}#page .cmsmasters_posts_slider .owl-buttons .owl-prev span:hover, 
	{$rule}#page .cmsmasters_posts_slider .owl-buttons .owl-next span:hover, 
	{$rule}#page .cmsmasters_posts_slider .owl-buttons .owl-prev span:hover:before, 
	{$rule}#page .cmsmasters_posts_slider .owl-buttons .owl-next span:hover:before, 
	{$rule}.responsive_nav:hover, 
	{$rule}.responsive_nav.active, 
	{$rule}.error .search_bar_wrap form button[type=submit]:hover, 
	{$rule}.error .error_button_wrap a:hover, 
	{$rule}.cmsmasters_button:hover, 	
	{$rule}.button:hover, 
	{$rule}button:hover, 
	{$rule}input[type=submit]:hover, 
	{$rule}input[type=button]:hover, 
	{$rule}.cmsmasters_table tr.cmsmasters_table_row_header,
	{$rule}.cmsmasters_toggles .current_toggle .cmsmasters_toggle,
	{$rule}.header_mid_inner .search_bar_wrap form p.search_button button:hover,
	{$rule}.owl-buttons .owl-prev span:hover, 
	{$rule}.owl-buttons .owl-next span:hover, 
	{$rule}.cmsmasters_project_filter_but.button:hover, 
	{$rule}.cmsmasters_post_filter_but.button:hover, 
	{$rule}.cmsmasters_project_sort_but.button:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	
	{$rule}.page-template-sitemap .cmsmasters_sitemap_wrap a, 
	{$rule}.cmsmasters_roll_titles_wrap .cmsmasters_roll_titles_slider_wrap .cmsmasters_roll_titles_slider .owl-carousel article .cmsmasters_slider_post_title a, 
	{$rule}.widget_custom_projects_entries_slides .pj_ddn .entry-title a, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item span, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs span:hover, 
	{$rule}.widget_nav_menu ul li a, 
	{$rule}.cmsmasters_post_read_more,
	{$rule}.cmsmasters_tabs span,
	{$rule}.cmsmasters_profile.horizontal .entry-title a, 
	{$rule}.cmsmasters_profile.vertical .profile .entry-title a, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.current:hover,
	{$rule}.cmsmasters_project_filter_wrap .cmsmasters_project_filter .cmsmasters_project_filter_block .cmsmasters_project_filter_list li > a,
	{$rule}.portfolio .project .pj_top_wrap .cmsmasters_project_header .cmsmasters_project_title, 
	{$rule}.cmsmasters_post_filter_wrap .cmsmasters_post_filter .cmsmasters_post_filter_block .cmsmasters_post_filter_list li > a, 
	{$rule}.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_header .cmsmasters_slider_post_title a, 
	{$rule}.post .cmsmasters_post_header .cmsmasters_post_title a, 
	{$rule}.cmsmasters_archive .cmsmasters_post_header .cmsmasters_post_title a, 
	{$rule}.cmsmasters_single_slider .related_posts_item_title {
		text-shadow:0 0 0 transparent;
	}
	
	

	{$rule}.page-template-sitemap .cmsmasters_sitemap_wrap a:hover, 
	{$rule}.cmsmasters_roll_titles_wrap .cmsmasters_roll_titles_slider_wrap .cmsmasters_roll_titles_slider .owl-carousel article .cmsmasters_slider_post_title a:hover, 
	{$rule}.widget_custom_projects_entries_slides .pj_ddn .entry-title a:hover, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item span:hover, 
	{$rule}.widget_nav_menu ul li a:hover, 
	{$rule}.cmsmasters_tabs span:hover,
	{$rule}.cmsmasters_post_read_more:hover,
	{$rule}.cmsmasters_profile.horizontal .entry-title a:hover ,
	{$rule}.cmsmasters_profile.vertical .profile .entry-title a:hover, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers:hover, 
	{$rule}.cmsmasters_project_filter_wrap .cmsmasters_project_filter .cmsmasters_project_filter_block .cmsmasters_project_filter_list li > a:hover,
	{$rule}.portfolio .project .pj_top_wrap .cmsmasters_project_header .cmsmasters_project_title:hover, 
	{$rule}.cmsmasters_post_filter_wrap .cmsmasters_post_filter .cmsmasters_post_filter_block .cmsmasters_post_filter_list li > a:hover, 
	{$rule}.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_header .cmsmasters_slider_post_title a:hover, 
	{$rule}.post .cmsmasters_post_header .cmsmasters_post_title a:hover, 
	{$rule}.cmsmasters_archive .cmsmasters_post_header .cmsmasters_post_title a:hover, 
	{$rule}.cmsmasters_single_slider .related_posts_item_title:hover {
		" . cmsmasters_color_css('text-shadow', "2px 2px 0px" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}h1,
	{$rule}h2,
	{$rule}h3,
	{$rule}h4,
	{$rule}h5,
	{$rule}h6,
	{$rule}h1 a,
	{$rule}h2 a,
	{$rule}h3 a,
	{$rule}h4 a,
	{$rule}h5 a,
	{$rule}h6 a,
	{$rule}fieldset legend,
	" . (($scheme != 'default') ? "{$rule}.headline_outer h1," : '') . "
	" . (($scheme != 'default') ? "{$rule}.headline_outer a h1," : '') . "
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	" . (($scheme == 'default') ? "{$rule}.widget ul li a," : '') . "
	" . (($scheme != 'default') ? "{$rule}.footer_inner, " : '') . "
	{$rule}.widget_nav_menu .menu-main-container ul li a, 
	{$rule}#wp-calendar th, 
	{$rule}#wp-calendar td, 
	{$rule}.widget_pages ul li.page_item:before, 
	{$rule}.widget_categories .screen-reader-text, 
	{$rule}.widget_custom_contact_info_entries > span:before,
	{$rule}.widget_custom_contact_info_entries > div:before,
	{$rule}.widget .owl-buttons span:hover,
	{$rule}.cmsmasters_clients_slider .owl-buttons span:hover,
	{$rule}.cmsmasters_twitter .owl-buttons span:hover,
	{$rule}.cmsmasters_quotes .owl-buttons span:hover,
	{$rule}.cmsmasters_posts_slider .owl-buttons span:hover,
	{$rule}.cmsmasters_post_read_more, 
	{$rule}.related_posts_tabs .cmsmasters_tab_inner .one_half .rel_post_content figure a,
	{$rule}blockquote footer,
	{$rule}table caption,
	{$rule}.cmsmasters_project_filter_list .button, 
	{$rule}.cmsmasters_post_filter_list .button, 
	{$rule}.cmsmasters_table tr.cmsmasters_table_row_footer,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_title,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item a,
	{$rule}.cmsmasters_post_comments:before,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"checkbox\"] + span.wpcf7-list-item-label:after,
	{$rule}.cmsmasters-form-builder .check_parent input[type=\"checkbox\"] + label:after, 
	{$rule}.project .cmsmasters_project_cont_info, 
	{$rule}.cmsmasters_img_wrap .img_placeholder:before, 
	{$rule}.cmsmasters_img_rollover_wrap .img_placeholder:before, 
	{$rule}#header .logo, 
	{$rule}.cmsmasters_search .cmsmasters_search_post .cmsmasters_post_read_more:hover, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > ul li a:before, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > ul li a:before, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive > li a:before, 
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title,
	{$rule}form .form_info label,
	{$rule}form .form_info label span, 
	{$rule}.portfolio.opened-article .project .project_sidebar .project_features .project_features_item > div:first-child, 
	{$rule}.responsive_nav:before, 
	{$rule}#page .cmsmasters_posts_slider .owl-buttons .owl-prev span:hover, 
	{$rule}#page .cmsmasters_posts_slider .owl-buttons .owl-next span:hover, 
	{$rule}#page .cmsmasters_posts_slider .owl-buttons .owl-prev span:hover:before, 
	{$rule}#page .cmsmasters_posts_slider .owl-buttons .owl-next span:hover:before, 
	{$rule}.cmsmasters_quotes_slider .quote_content p {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	
	{$rule}.page-template-sitemap .cmsmasters_sitemap_wrap a:hover, 
	{$rule}.cmsmasters_roll_titles_wrap .cmsmasters_roll_titles_slider_wrap .cmsmasters_roll_titles_slider .owl-carousel article .cmsmasters_slider_post_title a:hover, 
	{$rule}.widget_custom_projects_entries_slides .pj_ddn .entry-title a:hover, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item span:hover, 
	{$rule}.widget_nav_menu ul li a:hover, 
	{$rule}.cmsmasters_tabs span:hover, 
	{$rule}.cmsmasters_post_read_more:hover, 
	{$rule}.cmsmasters_profile.horizontal .entry-title a:hover, 
	{$rule}.cmsmasters_profile.vertical .profile .entry-title a:hover, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers:hover, 
	{$rule}.cmsmasters_project_filter_wrap .cmsmasters_project_filter .cmsmasters_project_filter_block .cmsmasters_project_filter_list li > a:hover, 
	{$rule}.portfolio .project .pj_top_wrap .cmsmasters_project_header .cmsmasters_project_title:hover, 
	{$rule}.cmsmasters_post_filter_wrap .cmsmasters_post_filter .cmsmasters_post_filter_block .cmsmasters_post_filter_list li > a:hover, 
	{$rule}.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_header .cmsmasters_slider_post_title a:hover, 
	{$rule}.post .cmsmasters_post_header .cmsmasters_post_title a:hover, 
	{$rule}.cmsmasters_archive .cmsmasters_post_header .cmsmasters_post_title a:hover, 
	{$rule}#page .related_posts_item_title a:hover, 
	{$rule}#page .related_posts_item_title a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.cmsmasters_icon_list_items .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_hover_slider .cmsmasters_hover_slider_thumbs > li a:before,
	{$rule}.cmsmasters_search .cmsmasters_search_post .cmsmasters_search_post_number, 
	{$rule}.blog.columns.puzzle .post .preloader:after, 
	{$rule}.cmsmasters_profile .profile .pl_img .pl_noimg:after, 
	{$rule}.cmsmasters_profile .profile .pl_img figure a:after, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=\"radio\"] + label:after,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"radio\"] + span.wpcf7-list-item-label:after,
	{$rule}form .formError .formErrorContent,
	{$rule}.widget_calendar table caption {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}form .formError .formErrorContent,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.cmsmasters_search .cmsmasters_search_post .cmsmasters_search_post_number, 
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before, 
	{$rule}.error .error_button_wrap a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	" . (($scheme == 'default') ? "body," : '') . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	{$rule}.header_top_outer,
	{$rule}.header_mid_outer,
	{$rule}.header_bot_outer,
	" . (($scheme == 'default') ? ".middle_inner," : '') . "
	{$rule}.footer_bg,
	" . (($scheme != 'default') ? "{$rule}.headline_outer," : '') . "
	{$rule}.related_posts_tabs .cmsmasters_tab_inner .one_half .rel_post_content figure a,
	{$rule}.cmsmasters_quotes .owl-page,
	{$rule}.portfolio .project .project_outer, 
	{$rule}.cmsmasters_posts_slider .project .slider_project_outer, 
	{$rule}#header,
	{$rule}#middle,
	{$rule}.cmsmasters_table tr,
	{$rule}.owl-buttons .owl-prev, 
	{$rule}.owl-buttons .owl-next,
	{$rule}.owl-page,
	{$rule}.post_nav span a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.error .error_button_wrap a {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap:after {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.content_slider .owl-controls .owl-buttons div span, 
	{$rule}.widget_custom_projects_entries_slides .pj_ddn_buttons .cmsmastersLike:before, 
	{$rule}.widget_custom_projects_entries_slides .pj_ddn_buttons .cmsmastersLike, 
	{$rule}.widget_custom_popular_projects_entries .img_placeholder,
	{$rule}.widget_custom_latest_projects_entries .img_placeholder, 
	{$rule}#wp-calendar caption, 
	{$rule}.error .search_bar_wrap form button[type=submit], 
	{$rule}.error p, 
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon_wrap, 
	{$rule}.blog.columns.puzzle .post .preloader:before, 
	{$rule}.cmsmasters_table tr.cmsmasters_table_row_header, 
	{$rule}.cmsmasters_img_rollover_wrap .cmsmasters_img_rollover .cmsmasters_image_link, 
	{$rule}.cmsmasters_img_rollover_wrap .cmsmasters_img_rollover .cmsmasters_open_link, 
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_inner:before,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_pricing_item_inner .cmsmasters_price_wrap_top .cmsmasters_price,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_pricing_item_inner .cmsmasters_price_wrap_top .cmsmasters_currency, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_pricing_item_inner .cmsmasters_price_wrap_top .cmsmasters_coins,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap .cmsmasters_stat_counter,
	{$rule}.cmsmasters_profile.horizontal .pl_img_with_caption .entry-content,
	{$rule}.pl_social_list li a,
	{$rule}.cmsmasters_profile.horizontal .pl_noimg:before, 
	{$rule}.cmsmasters_profile.vertical .pl_noimg:before, 
	{$rule}.cmsmasters_posts_slider .project .slider_project_outer .slider_project_img_wrap .cmsmasters_slider_project_cont_info_top_wrap a,
	{$rule}.cmsmasters_posts_slider .project .slider_project_outer .slider_project_img_wrap .cmsmasters_slider_project_cont_info_top_wrap a:before,
	{$rule}.project .pj_top_wrap .cmsmasters_project_cont_info .cmsmasters_project_category a,
	{$rule}.portfolio .project .project_outer .project_inner .pj_top_wrap .pj_top_wrap_rightside a, 
	{$rule}.portfolio .project .project_outer .project_inner .pj_top_wrap .pj_top_wrap_rightside a:before,
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsmasters_project_cont_info_top_wrap a, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsmasters_project_cont_info_top_wrap a:before, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsmasters_project_cont_info_bottom_wrap .cmsmasters_project_content, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsmasters_project_header .cmsmasters_project_title a, 
	{$rule}.portfolio .project .cmsmasters_img_wrap .cmsmasters_theme_icon_image:before, 
	{$rule}.cmsmasters_post_cont	.owl-buttons div span,  
	{$rule}.widget.widget_custom_latest_projects_entries .owl-wrapper-outer .owl-item .latest_pj_item .latest_pj_img .pj_item_meta a span {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}input[type=text], 
	{$rule}input[type=email], 
	{$rule}input[type=password], 
	{$rule}input[type=number], 
	{$rule}input[type=url], 
	{$rule}input[type=tel], 
	{$rule}input[type=search], 
	{$rule}input, 
	{$rule}select, 
	{$rule}option, 
	{$rule}textarea, 
	{$rule}.current > .button, 
	{$rule}.button.current, 
	{$rule}.cmsmasters_featured_block,
	{$rule}.quote_grid .quotes_list .cmsmasters_quote,
	{$rule}.cmsmasters_notice,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat canvas,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_pricing_item_inner,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_pricing_item_inner, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_pricing_item_inner:before, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"checkbox\"] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=\"checkbox\"]+label:before,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=\"radio\"] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=\"radio\"]+label:before,
	{$rule}.post .cmsmasters_post_cont, 
	{$rule}.post .wp-caption, 
	{$rule}.blog.columns.puzzle .post .puzzle_post_content_wrapper .cmsmasters_post_footer, 
	{$rule}.gallery-item .gallery-icon,
	{$rule}.gallery-item .gallery-caption,
	{$rule}.cmsmasters_gallery li.cmsmasters_caption figure,
	{$rule}.about_author .about_author_inner,
	{$rule}.post_comments .commentlist .comment-body, 
	{$rule}.portfolio .project .project_outer .project_inner, 
	{$rule}.cmsmasters_posts_slider .project .slider_project_outer .slider_project_inner, 
	{$rule}.cmsmasters_img.with_caption,
	{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_wrap,
	{$rule}.cmsmasters_tabs.lpr .cmsmasters_tabs_wrap,
	{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list,
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_wrap, 
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap .cmsmasters_toggle_title,
	{$rule}.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_box .cmsmasters_quote_inner:before, 
	{$rule}.cmsmasters_profile .profile,
	{$rule}.tweet_list li,
	{$rule}.widget_custom_latest_projects_entries .pj_ddn,
	{$rule}.widget_custom_popular_projects_entries .pj_ddn, 
	{$rule}code, 
	{$rule}.cmsmasters_img_rollover_wrap .cmsmasters_img_rollover .cmsmasters_image_link:hover, 
	{$rule}.cmsmasters_img_rollover_wrap .cmsmasters_img_rollover .cmsmasters_open_link:hover, 
	{$rule}.header_mid_inner .search_bar_wrap form p.search_field input[type='search'],
	{$rule}.cmsmasters_table tbody tr:nth-child(2n+1),
	.cmsmasters_color_scheme_{$scheme}.cmsmasters_footer_default .footer_inner span.copyright,
	.cmsmasters_color_scheme_{$scheme}.cmsmasters_footer_small .footer_bg,
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap:before,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_container:before,
	{$rule}.cmsmasters_profile.horizontal .pl_content .pl_content_leftside,
	{$rule}.cmsmasters_slider_post_cont,
	{$rule}.cmsmasters_posts_slider .project .slider_project_outer, 
	{$rule}.cmsmasters_twitter .owl-controls .owl-buttons .owl-prev, 
	{$rule}.cmsmasters_twitter .owl-controls .owl-buttons .owl-next, 
	{$rule}.blog.timeline .post .cmsmasters_post_info .cmsmasters_post_date, 
	{$rule}.cmsmasters_single_slider .cmsmasters_single_slider_post, 
	{$rule}.cmsmasters_clients_slider .owl-controls .owl-buttons, 
	{$rule}.profiles.opened-article .profile .profile_content .cmsmasters_profile_content, 
	{$rule}.portfolio.opened-article .project .project_content .cmsmasters_project_content, 
	{$rule}.widget_calendar table td, 
	{$rule}.widget_calendar table th, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_wrap div ul > li, 
	{$rule}.cmsmasters_archive .blog.portfolio > article .cmsmasters_post_cont, 
	{$rule}.enable_header_bottom .responsive_nav, 
	{$rule}.headline_outer, 
	{$rule}.widget .tweet_list .owl-item {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.error .search_bar_wrap form button[type=submit], 
	{$rule}.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_box .cmsmasters_quote_inner:after, 
	{$rule}.blog.columns.puzzle .post .puzzle_post_content_wrapper:before,
	{$rule}.cmsmasters_quotes_slider	.cmsmasters_quote_inner .quote_info_wrap .quote_image {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.widget .tweet_list .tweet-owl-item, 
	{$rule}input[type=text], 
	{$rule}input[type=email], 
	{$rule}input[type=password], 
	{$rule}input[type=number], 
	{$rule}input[type=url], 
	{$rule}input[type=tel], 
	{$rule}input[type=search], 
	{$rule}input, 
	{$rule}select, 
	{$rule}option, 
	{$rule}textarea, 
	{$rule}.cmsmastersLike:before,
	{$rule}.cmsmasters_theme_icon_comment:before, 
	{$rule}.post .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_tags:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsmasters_icon_list_items.cmsmasters_icon_list_type_block .cmsmasters_icon_list_item:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	@media only screen and (max-width: 950px) {
		{$rule}.content_wrap .sidebar:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
		}
	}
	
	{$rule}input[type=text], 
	{$rule}input[type=email], 
	{$rule}input[type=password], 
	{$rule}input[type=number], 
	{$rule}input[type=url], 
	{$rule}input[type=tel], 
	{$rule}input[type=search], 
	{$rule}input, 
	{$rule}select, 
	{$rule}option, 
	{$rule}textarea, 
	{$rule}.search_bar_wrap,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_icon_list_type_block .cmsmasters_icon_list_item,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_icon:after,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:after,
	{$rule}.cmsmasters_img.with_caption,
	{$rule}.img_placeholder_small,
	{$rule}code, 
	{$rule}.header_mid_outer,
	{$rule}.headline_outer,
	{$rule}.cmsmasters_quotes_slider .quote_content,
	{$rule}.quote_grid .quotes_list .cmsmasters_quote,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title,
	{$rule}.cmsmasters_toggles .current_toggle,
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list,
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_wrap,
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item,
	{$rule}.cmsmasters_tabs.tabs_mode_tab, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .feature_list > li,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_pricing_item_inner,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_container:before,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	{$rule}.cmsmasters_featured_block,
	{$rule}.wpcf7-list-item-label:before,
	{$rule}.cmsmasters-form-builder .form_info label:before,
	{$rule}.owl-page,
	{$rule}.cmsmasters_clients_items, 
	{$rule}.cmsmasters_clients_item,
	{$rule}.profiles.opened-article .profile .cmsmasters_profile_header,
	{$rule}.cmsmasters_profile.horizontal .pl_content .pl_content_leftside, 
	{$rule}.cmsmasters_profile.vertical .profile .pl_content_leftside, 
	{$rule}.cmsmasters_profile.vertical .profile .entry-content, 
	{$rule}.cmsmasters_profile.vertical .profile,
	{$rule}.post .cmsmasters_slider_post_cont, 
	{$rule}.cmsmasters_posts_slider .project .slider_project_outer .slider_project_inner .cmsmasters_slider_project_content, 
	{$rule}.cmsmasters_posts_slider .project .slider_project_outer,
	{$rule}.portfolio .project .project_outer .project_inner .pj_top_wrap .pj_top_wrap_leftside, 
	{$rule}.portfolio .project .project_outer .project_inner .cmsmasters_project_content, 
	{$rule}.post .cmsmasters_post_cont .cmsmasters_post_footer, 
	{$rule}.post .cmsmasters_post_cont, 
	{$rule}.post .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside .cmsmasters_post_meta_info, 
	{$rule}.blog.timeline:before, 
	{$rule}.post.cmsmasters_timeline_type:before, 
	{$rule}.about_author .about_author_inner, 
	{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list, 
	{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_wrap, 
	{$rule}.post_comments .commentlist .comment-body, 
	{$rule}.comment-respond .comment-form p input:not([type='submit']), 
	{$rule}.cmsmasters_single_slider .cmsmasters_single_slider_post, 
	{$rule}.widget_nav_menu .menu-main-container ul > li a, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_wrap div ul > li, 
	{$rule}.cmsmasters_archive .blog.portfolio > article .cmsmasters_post_cont, 
	{$rule}.cmsmasters_archive .blog.portfolio > article .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside > .cmsmasters_post_meta_info, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li, 
	{$rule}.widget.widget_custom_latest_projects_entries .owl-wrapper-outer .owl-item .latest_pj_item {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.widget ul li,
	{$rule}.post_nav, 
	{$rule}.cmsmasters_search .cmsmasters_search_post .cmsmasters_post_cont_info, 
	{$rule}.cmsmasters_search .post.cmsmasters_search_post .cmsmasters_post_cont_info {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
		
	{$rule}hr,
	{$rule}.cmsmasters_divider,
	{$rule}.opened-article .post, 
	{$rule}.post_nav,
	{$rule}.sidebar .widget,
	{$rule}.portfolio.opened-article .project .cmsmasters_project_header, 
	{$rule}.cmsmasters_widget_divider,
	{$rule}.cmsmasters_table tr, 
	{$rule}.portfolio.opened-article .project .project_content .cmsmasters_project_content	{
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	/* Finish Borders Color */
	
	
	/* Start Custom Color */
	
	{$rule}.headline_outer .headline_icon:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_custom']) . "
	}
	
	{$rule}.bottom_inner .widgettitle:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_custom']) . "
	}
	
	/* Finish Custom Color */
	
	
	/* Start Custom Rules */
	{$rule}::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . ";
	}
	
	{$rule}::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.project_outer:hover .cmsmasters_img_rollover, 
	{$rule}.slider_project_outer:hover .cmsmasters_img_rollover {
		background-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . ", 0.8);
	}
	
	{$rule}.cmsmasters_notice .notice_close:hover {
		color:#dd0000;
	}
	";
	
	
	if ($scheme == 'default') {
	$custom_css .= "
	#slide_top {
		background-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . ", 0.5);
	}
	";
	}
	
	
	$custom_css .= "
	/* Finish Custom Rules */

/***************** Finish {$title} Color Scheme Rules ******************/


/***************** Start {$title} Button Color Scheme Rules ******************/
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:hover, 
	{$rule}.cmsmasters_button.cm.sms_but_bg_expand_hor:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_slide_left, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_slide_right, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_slide_top, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_slide_bottom, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_expand_vert, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_expand_hor, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_expand_diag {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_shadow {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_shadow:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_shadow {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_light_bg, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_divider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:after {
		" . cmsmasters_color_css('border-right-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_inverse {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:before, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_inverse:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:after, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_inverse:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_slide_left, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_slide_right {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_hover_slide_left, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_hover_slide_right, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_hover_slide_top, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}";

	
	$custom_css .= "
/***************** Finish {$title} Button Color Scheme Rules ******************/


";
	}
	
	
	return $custom_css;
}

