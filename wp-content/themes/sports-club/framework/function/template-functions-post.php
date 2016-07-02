<?php 
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.0
 * 
 * Template Functions for Blog & Post
 * Created by CMSMasters
 * 
 */


/* Get Posts Heading Function */
function cmsmasters_post_heading($cmsmasters_id, $tag = 'h1', $show = true) { 
	$out = '<header class="cmsmasters_post_header entry-header">' . 
		'<' . esc_html($tag) . ' class="cmsmasters_post_title entry-title">' . 
			'<a href="' . esc_url(get_permalink()) . '">' . cmsmasters_title($cmsmasters_id, false) . '</a>' . 
		'</' . esc_html($tag) . '>' . 
	'</header>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Heading Without Link Function */
function cmsmasters_post_title_nolink($cmsmasters_id, $tag = 'h1', $show = true) { 
	$out = '<' . esc_html($tag) . ' class="cmsmasters_post_title entry-title">' . 
		cmsmasters_title($cmsmasters_id, false) . 
	'</' . esc_html($tag) . '>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Date Function */
function cmsmasters_post_date($template_type = 'page', $layout_type = 'default', $show = true) {
	if ($template_type == 'page') {
		$out = '<div class="cmsmasters_post_date">' . 
			'<abbr class="published" title="' . esc_html(get_the_date()) . '">' . 
				esc_html(get_the_date('F')) . 
			'</abbr>' . 
			'<abbr class="published" title="' . esc_html(get_the_date()) . '">' . 
				esc_html(get_the_date('j')) . 
			'</abbr>' . 
			'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
				esc_html(get_the_modified_date()) . 
			'</abbr>' . 
		'</div>';
	} elseif ($template_type == 'post') {
		$cmsmasters_option = cmsmasters_get_global_options();
		
		$out = '';
		
		if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_date']) {
			$out = '<div class="cmsmasters_post_date">' . 
				'<abbr class="published" title="' . esc_html(get_the_date()) . '">' . 
					esc_html(get_the_date('F')) . 
				'</abbr>' . 
				'<abbr class="published" title="' . esc_html(get_the_date()) . '">' . 
					esc_html(get_the_date('j')) . 
				'</abbr>' . 
				'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
					esc_html(get_the_modified_date()) . 
				'</abbr>' . 
			'</div>';
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Author Function */
function cmsmasters_post_author($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = '<span class="cmsmasters_post_user_name">' . 
			esc_html__('By', 'sports-club') . ' ' . 
			'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Posts by', 'sports-club') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author"><span class="fn" rel="author">' . esc_html(get_the_author_meta('display_name')) . '</span></a>' . 
		'</span>';
	} elseif ($template_type == 'post') {
		$cmsmasters_option = cmsmasters_get_global_options();
		$out = '';
		
		if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_author']) {
			$out .= '<span class="cmsmasters_post_user_name">' . 
				esc_html__('By', 'sports-club') . ' ' . 
				'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Posts by', 'sports-club') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author"><span class="fn" rel="author">' . esc_html(get_the_author_meta('display_name')) . '</span></a>' . 
			'</span>';
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Category Function */
function cmsmasters_post_category($template_type = 'page', $show = true) {
	if (get_the_category()) {
		if ($template_type == 'page') {
			$out = '<span>' . esc_html__('In', 'sports-club') . '</span><div class="cmsmasters_post_category"> ' . 
					get_the_category_list(' ') . 
				'</div>';
		} elseif ($template_type == 'post') {
			$cmsmasters_option = cmsmasters_get_global_options();
			$out = '';
			
			if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_cat']) {
				$out = '<span>' . esc_html__('In', 'sports-club') . '</span><div class="cmsmasters_post_category"> ' . 
					get_the_category_list(' ') . 
				'</div>';
			}
		}
		
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}



/* Get Posts Tags Function */
function cmsmasters_post_tags($template_type = 'page', $show = true) {
	if (get_the_tags()) {
		if ($template_type == 'page') {
			$out = '<span class="cmsmasters_post_tags cmsmasters-icon-tags">' . 
				get_the_tag_list(' ', ', ', '') . 
			'</span>';
		} else if ($template_type == 'post') {
			$cmsmasters_option = cmsmasters_get_global_options();
			$out = '';
			
			if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_tag']) {
				$out .= '<span class="cmsmasters_post_tags cmsmasters-icon-tags">' . 
					get_the_tag_list(' ', ', ', '') . 
				'</span>';
			}
		}
		
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}



/* Get Posts Content/Excerpt Function */
function cmsmasters_post_exc_cont($show = true) {
	$out = cmsmasters_divpdel('<div class="cmsmasters_post_content entry-content">' . "\n" . 
		wpautop(theme_excerpt(20, false)) . 
	'</div>' . "\n");
	
	
	if (theme_excerpt(20, false) != '') {
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}



/* Get Posts Like Function */
function cmsmasters_post_like($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = cmsmastersLike(false);
	} elseif ($template_type == 'post') {
		$cmsmasters_option = cmsmasters_get_global_options();
		$out = '';
		
		if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_like']) {
			$out = cmsmastersLike(false);
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Comments Function */
function cmsmasters_post_comments($template_type = 'page', $show = true) {
	if (comments_open()) {
		if ($template_type == 'page') {
			$out = '<a class="cmsmasters_post_comments cmsmasters_theme_icon_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'sports-club') . ' ' . esc_attr(get_the_title()) . '">' . 
				'<span>' . esc_html(get_comments_number()) . '</span>' . 
			'</a>';

		} elseif ($template_type == 'post') {
			$cmsmasters_option = cmsmasters_get_global_options();
			$out = '';
			if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_comment']) {
				$out = '<a class="cmsmasters_post_comments cmsmasters_theme_icon_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'sports-club') . ' ' . esc_attr(get_the_title()) . '">' . 
					'<span>' . esc_html(get_comments_number()) . '</span>' . 
				'</a>';
			}
		}
		
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}



/* Get Posts More Button/Link Function */
function cmsmasters_post_more($cmsmasters_id, $show = true) {
	$cmsmasters_post_read_more = get_post_meta($cmsmasters_id, 'cmsmasters_post_read_more', true);
	
	
	if ($cmsmasters_post_read_more == '') {
		$cmsmasters_post_read_more = esc_attr__('read more', 'sports-club');
	}
	
	
	$out = '<a class="cmsmasters_post_read_more" href="' . esc_url(get_permalink($cmsmasters_id)) . '">' . esc_html($cmsmasters_post_read_more) . '</a>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Post Format Icon Placeholder Function */
function cmsmasters_post_format_icon_placeholder($cmsmasters_id, $format = 'std', $show = true) {
	$out = '<figure>' . 
		'<a href="' . esc_url(get_permalink()) . '" title="' . cmsmasters_title($cmsmasters_id, false) . '" class="preloader cmsmasters_theme_icon_' . esc_attr($format) . '"></a>' . 
	'</figure>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}

