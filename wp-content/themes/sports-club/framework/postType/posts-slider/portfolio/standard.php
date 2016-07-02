<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.0
 * 
 * Posts Slider Standard Project Format Template
 * Created by CMSMasters
 * 
 */


global $cmsmasters_project_metadata;


$cmsmasters_metadata = explode(',', $cmsmasters_project_metadata);

$title = in_array('title', $cmsmasters_metadata) ? true : false;
$excerpt = in_array('excerpt', $cmsmasters_metadata) ? true : false;
$categories = (get_the_terms(get_the_ID(), 'pj-categs') && in_array('categories', $cmsmasters_metadata)) ? true : false;
$comments = (comments_open() && in_array('comments', $cmsmasters_metadata)) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;


$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);

$cmsmasters_project_link_redirect = get_post_meta(get_the_ID(), 'cmsmasters_project_link_redirect', true);


$cmsmasters_project_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_project_images', true))));

?>

<!--_________________________ Start Standard Project _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="slider_project_outer">
	<?php 
		echo '<div class="slider_project_img_wrap">';
		
			if ($categories || $likes || $comments) {
			
				echo '<div class="cmsmasters_slider_project_cont_info_top_wrap entry-meta">';
				
				if ($likes || $comments) {
						($comments) ? cmsmasters_slider_post_comments('project') : '';
						
						($likes) ? cmsmasters_slider_post_like('project') : '';
				}
				
				echo '</div>' . "\n";

				if ($categories) {
					cmsmasters_slider_post_category('project', get_the_ID(), 'pj-categs');
				}
			}
			
		echo '<figure>' . "\n" . 
				'<a href="' . esc_url(get_permalink()) . '">' . 
					get_the_post_thumbnail(get_the_ID(), 'project-thumb', array( 
						'alt' => cmsmasters_title(get_the_ID(), false), 
						'title' => cmsmasters_title(get_the_ID(), false) 
					)) . 
				'</a>' . 
			'</figure>' . "\n" . 
		
		'</div>' . "\n";
		
		if ($title || $excerpt) {
			echo '<div class="slider_project_inner">';
				
				($title) ? cmsmasters_slider_post_heading(get_the_ID(), 'project', 'h4', true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url) : '';
				
				($excerpt && cmsmasters_slider_post_check_exc_cont('project')) ? cmsmasters_slider_post_exc_cont('project') : '';
					
			echo '</div>';
		}
	?>
		<div class="cl"></div>
	</div>
</article>
<!--_________________________ Finish Standard Project _________________________ -->

