<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.0
 * 
 * Blog Archive by Author Page Template
 * Created by CMSMasters
 * 
 */


get_header();


list($cmsmasters_layout) = cmsmasters_theme_page_layout_scheme();


echo '<!--_________________________ Start Content _________________________ -->' . "\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo '<div class="content cmsmasters_archive entry" role="main">' . "\n\t";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo '<div class="content cmsmasters_archive entry fr" role="main">' . "\n\t";
} else {
	echo '<div class="middle_content cmsmasters_archive entry" role="main">' . "\n\t";
}


cmsmasters_author_box();


echo '<br />' . "\n" . 
'<div class="blog portfolio cmsmasters_profile vertical cmsmasters_campaigns">' . "\n";


if (!have_posts()) : 
	echo '<h2>' . esc_html__('No posts found', 'sports-club') . '</h2>';
else : 
	while (have_posts()) : the_post();
		if (get_post_type() == 'project') {
			get_template_part('framework/postType/portfolio/page/grid/standard');
		} elseif (get_post_type() == 'profile') {
			get_template_part('framework/postType/profile/page/vertical');
		} elseif (get_post_type() == 'campaign') {
			get_template_part('framework/postType/campaign/page/horizontal');
		} else {
			if (get_post_format() != '') {
				get_template_part('framework/postType/blog/page/default/' . get_post_format());
			} else {
				get_template_part('framework/postType/blog/page/default/standard');
			}
		}
	endwhile;
	
	
	echo pagination();
endif;


echo '</div>' . "\n" . 
'</div>' . "\n" . 
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

