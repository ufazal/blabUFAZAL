<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.0
 * 
 * Posts Slider Gallery Post Format Template
 * Created by CMSMasters
 * 
 */


global $cmsmasters_post_metadata;


$cmsmasters_metadata = explode(',', $cmsmasters_post_metadata);

$excerpt = in_array('excerpt', $cmsmasters_metadata) ? true : false;
$date = in_array('date', $cmsmasters_metadata) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_metadata))) ? true : false;
$author = in_array('author', $cmsmasters_metadata) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_metadata))) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;
$more = in_array('more', $cmsmasters_metadata) ? true : false;


$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));


?>

<!--_________________________ Start Gallery Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsmasters_slider_post_cont">
	<?php
		if (!post_password_required() && has_post_thumbnail()) {
			echo '<div class="thumb_wrap">';
				
				cmsmasters_thumb(get_the_ID(), 'square-thumb', true, false, true, false, true, true, false);
				
			echo '</div>';
		}
		
		
		echo '<div class="cmsmasters_slider_post_cont_wrap">';
			
			if($date) {
				cmsmasters_slider_post_heading_with_date(get_the_ID(), 'post', 'h4');
			} else {
				cmsmasters_slider_post_heading(get_the_ID(), 'post', 'h4');
			}
			
			
			
			if ($author || $categories) {
				echo '<div class="cmsmasters_post_cont_info entry-meta">';
					
					$author ? cmsmasters_slider_post_author('post') : '';
					
					$categories ? cmsmasters_slider_post_category('post') : '';
					
				echo '</div>';
			}
			
			
			if ($excerpt) {
				($excerpt && cmsmasters_slider_post_check_exc_cont('post')) ? cmsmasters_slider_post_exc_cont('post') : '';
			}
			
			
			if ($more || $likes || $comments) {
				echo '<footer class="cmsmasters_slider_post_footer entry-meta">';
					
					if ($likes || $comments) {
						echo '<div class="cmsmasters_slider_post_meta_info">';
							
							$comments ? cmsmasters_slider_post_comments('post') : '';
							
							$likes ? cmsmasters_slider_post_like('post') : '';
							
						echo '</div>';
					}
					
					
					$more ? cmsmasters_slider_post_more(get_the_ID()) : '';
					
				echo '</footer>';
			}
			
		echo '</div>';
	?>
	</div>
</article>
<!--_________________________ Finish Gallery Article _________________________ -->

