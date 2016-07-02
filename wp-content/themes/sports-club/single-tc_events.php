<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.0
 * 
 * Single Post Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = cmsmasters_get_global_options();


list($cmsmasters_layout) = cmsmasters_theme_page_layout_scheme();


echo '<!--_________________________ Start Content _________________________ -->' . "\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo '<div class="content entry" role="main">' . "\n\t";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo '<div class="content entry fr" role="main">' . "\n\t";
} else {
	echo '<div class="middle_content entry" role="main">' . "\n\t";
}


if (have_posts()) : the_post();
	echo '<div class="cmsmasters_tc_events opened-article">' . "\n";
	?>	
	<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_open_tc_event'); ?>>
		<?php
		echo '<div class="cmsmasters_tc_event_cont">' . 
			'<div class="cmsmasters_tc_event_header_wrap">';
				cmsmasters_tc_event_heading(get_the_ID(), 'h2', false);
				
				cmsmasters_tc_event_category(get_the_ID(), 'event_category');
				
				echo '<div class="cmsmasters_tc_event_info">';
					cmsmasters_tc_event_date();
					
					cmsmasters_tc_event_location();
				echo '</div>' . 
			'</div>';
			
			
			if (!post_password_required() && has_post_thumbnail()) {
				echo '<div class="cmsmasters_tc_event_img">';
					cmsmasters_thumb(get_the_ID(), 'masonry-thumb', false, 'img_' . get_the_ID(), true, true, true, true, false);
				echo '</div>';
			}
			
			
			cmsmasters_tc_event_content('post');
		echo '</div>';
		
		cmsmasters_tc_event_ticket(get_the_ID());
		?>
	</article>
	<?php 
	cmsmasters_prev_next_posts();
	
	
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

