<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.1
 * 
 * Single Post Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = cmsmasters_get_global_options();

$cmsmasters_post_post_options = get_post_meta(get_the_ID(), 'cmsmasters_post_post_options', true);

list($cmsmasters_layout) = cmsmasters_theme_page_layout_scheme();

if ($cmsmasters_post_post_options == 'custom') {

	$cmsmasters_post_title = get_post_meta(get_the_ID(), 'cmsmasters_post_title', true);
	$cmsmasters_post_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_post_sharing_box', true);
	$cmsmasters_post_author_box = get_post_meta(get_the_ID(), 'cmsmasters_post_author_box', true);
	$cmsmasters_post_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_post_more_posts', true);
	
} else {

	$cmsmasters_post_sharing_box = $cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_share_box'] ? 'true' : 'false';
	$cmsmasters_post_author_box = $cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_author_box'] ? 'true' : 'false';
	$cmsmasters_post_more_posts = $cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_more_posts_box'];

}


echo '<!--_________________________ Start Content _________________________ -->' . "\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo '<div class="content entry" role="main">' . "\n\t";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo '<div class="content entry fr" role="main">' . "\n\t";
} else {
	echo '<div class="middle_content entry" role="main">' . "\n\t";
}


if (have_posts()) : the_post();
	echo '<div class="blog opened-article">' . "\n";
	
	
	if ($cmsmasters_layout == 'fullwidth') {
		if (get_post_format() != '') {
			get_template_part('framework/postType/blog/post/fullwidth/' . get_post_format());
		} else {
			get_template_part('framework/postType/blog/post/fullwidth/standard');
		}
	} else {
		if (get_post_format() != '') {
			get_template_part('framework/postType/blog/post/sidebar/' . get_post_format());
		} else {
			get_template_part('framework/postType/blog/post/sidebar/standard');   
		}
	}
	
	
	if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_nav_box']) {
		cmsmasters_prev_next_posts();
	}
	
	
	if (get_the_tags()) {
		$tgsarray = array();
		
		foreach (get_the_tags() as $tagone) {
			$tgsarray[] = $tagone->term_id;
		}  
	} else {
		$tgsarray = '';
	}
	
	if ($cmsmasters_post_more_posts != 'hide') {
		cmsmasters_related( 
			'h2', 
			$cmsmasters_post_more_posts, 
			$tgsarray, 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_more_posts_count'], 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_more_posts_pause'], 
			'post'
		);
	}

	if ($cmsmasters_post_sharing_box == 'true') {
		cmsmasters_sharing_box(esc_html__('Share this post?', 'sports-club'), 'h2');
	}
	
	if ($cmsmasters_post_author_box == 'true') {
		cmsmasters_author_box(esc_html__('About author', 'sports-club'), 'h2');
	}
	
	comments_template(); 
	
	
	echo '</div>';
endif;


echo '</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<div class="sidebar" role="complementary">' . "\n";
	
	
	get_sidebar();
	
	
	echo "\n" . '</div>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<div class="sidebar fl" role="complementary">' . "\n";
	
	
	get_sidebar();
	
	
	echo "\n" . '</div>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
}


get_footer();

