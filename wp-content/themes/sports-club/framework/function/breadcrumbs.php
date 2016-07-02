<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.0
 * 
 * Breadcrumbs Function
 * Created by CMSMasters
 * 
 */


function breadcrumbs() {
	global $post;
	
	
	$homeLink = esc_url(home_url('/'));
	
	$homeText = esc_attr__('Home', 'sports-club');
	
	$sep = "\n\t" . '<span class="breadcrumbs_sep"> / </span>' . "\n\t";
	
	$maxLength = 30;
	
	
	$year_format = get_the_time('Y');
	
	$month_format = get_the_time('F');
	
	$day_format = get_the_time('d');
	
	$day_full_format = get_the_time('l');
	
	
	$url_year = get_year_link($year_format);
	
	$url_month = get_month_link($year_format, $month_format);
	
	
	

	
	
	
	
	
	
	echo '<a href="' . esc_url($homeLink) . '" class="cms_home">' . esc_html($homeText) . '</a>' . $sep;
	
	/* start added by adam*/
		
	if ($post->post_type == "project") {
		echo '<a href="' . esc_url($homeLink) . esc_url('/media/') .'" class="cms_home">' . 'MEDIA'. '</a>' . $sep;
};
	if( $post->post_type == 'profile'){
		echo '<a href="' . esc_url($homeLink) . esc_url('/boys-teams/') .'" class="cms_home">' . 'TEAMS'. '</a>' . $sep;
		


};




	/* end added by adam*/
	
	if (is_single()) {
		$category = get_the_category();
		
		$num_cat = count($category);
		
		
		if ($num_cat < 1) {
			echo '<span>' . cmsmasters_title(get_the_ID(), false) . '</span>';
		} else if ($num_cat >= 1) {
			echo get_category_parents($category[0], true, $sep) . ' ' . '<span>' . cmsmasters_title(get_the_ID(), false) . '</span>';
		}
	} elseif (is_category()) {
		global $cat;
		
		
		$multiple_cats = get_category_parents($cat, true, $sep);
		
		$multiple_cats_array = explode($sep, $multiple_cats);
		
		$multiple_cats_num = count($multiple_cats_array);
		
		
		$i = 1;
		
		
		foreach ($multiple_cats_array as $single_cat) {
			echo $single_cat;
			
			
			if ($i < $multiple_cats_num) {
				echo $sep;
			}
			
			
			$i++;
		}
		
		
		echo cmsmasters_title(get_the_ID(), false);
	} elseif (is_tag()) {
		echo single_tag_title('', false);
	} elseif (is_day()) {
		echo '<a href="' . esc_url($url_year) . '">' . esc_html($year_format) . '</a>' . 
			$sep . 
			'<a href="' . esc_url($url_month) . '">' . esc_html($month_format) . '</a>' . 
			$sep . 
			$day_format . ' (' . $day_full_format . ')';
			esc_html($day_format) . ' (' . esc_html($day_full_format) . ')';
	} elseif (is_month()) {
		echo '<a href="' . esc_url($url_year) . '">' . esc_html($year_format) . '</a>' . $sep . esc_html($month_format);
	} elseif (is_year()) {
		echo esc_html($year_format);
	} elseif (is_search()) {
		echo '<span>' . esc_html__('Search Results for', 'sports-club') . "</span>: '" . esc_html(get_search_query()) . "'";
	} elseif (is_page() && !$post->post_parent) {
		echo '<span>' . cmsmasters_title(get_the_ID(), false) . '</span>';
	} elseif (is_page() && $post->post_parent) {
		$post_array = get_post_ancestors($post);
		
		
		krsort($post_array);
		
		
		foreach ($post_array as $key => $postid) {
			$post_ids = get_post($postid);
			
			$title = $post_ids->post_title;
			
			
			echo '<a href="' . esc_url(get_permalink($post_ids)) . '">' . esc_html($title) . '</a>' . $sep;
		}
		
		
		echo '<span>' . cmsmasters_title(get_the_ID(), false) . '</span>';
	} elseif (is_author()) {
		echo '<span>' . esc_html(get_the_author()) . '</span>';
	} elseif (is_tax('post_format')) {
		if (is_tax('post_format', 'post-format-gallery')) {
			echo '<span>' . esc_html_x('Galleries', 'post format archive title', 'sports-club') . '</span>';
		} elseif (is_tax('post_format', 'post-format-image')) {
			echo '<span>' . esc_html_x('Images', 'post format archive title', 'sports-club') . '</span>';
		} elseif (is_tax('post_format', 'post-format-video')) {
			echo '<span>' . esc_html_x('Videos', 'post format archive title', 'sports-club') . '</span>';
		} elseif (is_tax('post_format', 'post-format-audio')) {
			echo '<span>' . esc_html_x('Audio', 'post format archive title', 'sports-club') . '</span>';
		}
	} elseif (is_post_type_archive()) {
		echo '<span>' . post_type_archive_title('', false) . '</span>';
	} elseif (is_tax()) {
		echo '<span>' . esc_html($tax_cat->name) . '</span>';
	} else {
		echo '<span>' . esc_html__('No Breadcrumbs', 'sports-club') . '</span>';
	}
}

