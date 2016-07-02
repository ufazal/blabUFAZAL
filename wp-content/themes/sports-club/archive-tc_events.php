<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.0
 * 
 * Blog Archives Page Template
 * Created by CMSMasters
 * 
 */


get_header();


list($cmsmasters_layout) = cmsmasters_theme_page_layout_scheme();


echo '<!--_________________________ Start Content _________________________ -->' . "\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo '<div class="content entry" role="main">' . "\n\t";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo '<div class="content entry fr" role="main">' . "\n\t";
} else {
	echo '<div class="middle_content entry" role="main">' . "\n\t";
}


echo '<div class="cmsmasters_tc_events">' . "\n";


if (!have_posts()) : 
	echo '<h2>' . esc_html__('No events found', 'sports-club') . '</h2>';
else : 
	while (have_posts()) : the_post(); 
	?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_tc_event'); ?>>
			<?php
			if (!post_password_required() && has_post_thumbnail()) {
				echo '<div class="cmsmasters_tc_event_img">';
					cmsmasters_thumb(get_the_ID(), 'post-thumbnail', true, false, true, false, true, true, false);
				echo '</div>';
			}
			
			
			echo '<div class="cmsmasters_tc_event_cont">';
				cmsmasters_tc_event_heading(get_the_ID(), 'h2');
				
				cmsmasters_tc_event_category(get_the_ID(), 'event_category');
				
				echo '<div class="cmsmasters_tc_event_info">';
					cmsmasters_tc_event_date();
					
					cmsmasters_tc_event_location();
				echo '</div>';
				
				cmsmasters_tc_event_content('page');
				
				cmsmasters_tc_event_ticket(get_the_ID());
			echo '</div>';
			?>
		</article>
	<?php
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

