<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.0
 * 
 * Portfolio Grid Video Project Format Template
 * Created by CMSMasters
 * 
 */


global $cmsmasters_pj_metadata, 
	$cmsmasters_pj_layout_mode;


$cmsmasters_project_metadata = explode(',', $cmsmasters_pj_metadata);

$title = (in_array('title', $cmsmasters_project_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$excerpt = (in_array('excerpt', $cmsmasters_project_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$categories = (get_the_terms(get_the_ID(), 'pj-categs') && (in_array('categories', $cmsmasters_project_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_project_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$likes = (in_array('likes', $cmsmasters_project_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$rollover = in_array('rollover', $cmsmasters_project_metadata) ? true : false;


$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);

$cmsmasters_project_link_redirect = get_post_meta(get_the_ID(), 'cmsmasters_project_link_redirect', true);


$project_thumb_size = (($cmsmasters_pj_layout_mode == 'masonry') ? 'project-masonry-thumb' : 'project-thumb');

$project_thumb_high = (($cmsmasters_pj_layout_mode == 'masonry') ? true : false);


$cmsmasters_project_video_type = get_post_meta(get_the_ID(), 'cmsmasters_project_video_type', true);

$cmsmasters_project_video_link = get_post_meta(get_the_ID(), 'cmsmasters_project_video_link', true);

$cmsmasters_project_video_links = get_post_meta(get_the_ID(), 'cmsmasters_project_video_links', true);


$project_sort_categs = get_the_terms(0, 'pj-categs');

$project_categs = '';

if ($project_sort_categs != '') {
	foreach ($project_sort_categs as $project_sort_categ) {
		$project_categs .= ' ' . $project_sort_categ->slug;
	}
	
	$project_categs = ltrim($project_categs, ' ');
}

?>

<!--_________________________ Start Video Project _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); echo (($project_categs != '') ? ' data-category="' . esc_attr($project_categs) . '"' : '') ?>>
	<div class="project_outer">
	<?php 
		if (!is_home() && !is_archive() && !is_search()) {
			cmsmasters_thumb(get_the_ID(), $project_thumb_size, true, false, true, true, true, true, false);
			
		} else {
			cmsmasters_thumb(get_the_ID(), 'masonry-thumb', false, 'img_' . get_the_ID(), true, true, true, true, false);
		}


		
		
		if (!$title) {
			echo '<div class="dn">';
				
				cmsmasters_project_heading(get_the_ID(), 'h4');
				
			echo '</div>';
		}
		
		
		if ($title || $categories || $excerpt || $likes || $comments) {
			echo '<div class="project_inner">' . "\n" . 
				'<div class="pj_top_wrap">' . "\n" . 
				'<div class="pj_top_wrap_leftside">' . "\n";
				($title) ? cmsmasters_project_heading(get_the_ID(), ((!is_home() && !is_archive() && !is_search()) ? 'h4' : 'h5'), true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url) : '';
				
				
				if ($categories) {
					echo '<div class="cmsmasters_project_cont_info entry-meta">';
						
						cmsmasters_project_category(get_the_ID(), 'pj-categs', 'page');
						
					echo '</div>';
				}
				
				echo '</div>' . "\n";
				
				if ($likes || $comments) {
					echo '<div class="pj_top_wrap_rightside entry-meta">' . "\n";
											
						($comments) ? cmsmasters_project_comments('page') : '';
						
						($likes) ? cmsmasters_project_like('page') : '';
						
					echo '</div>';
				}
				echo '</div>';
				
				($excerpt && cmsmasters_project_check_exc_cont()) ? cmsmasters_project_exc_cont() : '';
				
				
			echo '</div>';
		}
		
		echo '<span class="dn meta-date">' . get_the_time('YmdHis') . '</span>';
	?>
		<div class="cl"></div>
	</div>
</article>
<!--_________________________ Finish Video Project _________________________ -->

