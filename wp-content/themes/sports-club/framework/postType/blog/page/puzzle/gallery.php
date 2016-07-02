<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.0
 * 
 * Blog Page Puzzle Gallery Post Format Template
 * Created by CMSMasters
 * 
 */


global $cmsmasters_metadata;


$cmsmasters_post_metadata = explode(',', $cmsmasters_metadata);


$date = (in_array('date', $cmsmasters_post_metadata) || is_home()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_post_metadata) || is_home())) ? true : false;
$author = (in_array('author', $cmsmasters_post_metadata) || is_home()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_post_metadata) || is_home())) ? true : false;
$likes = (in_array('likes', $cmsmasters_post_metadata) || is_home()) ? true : false;
$tags = (get_the_tags() && (in_array('tags', $cmsmasters_post_metadata) || is_home())) ? true : false;
$more = (in_array('more', $cmsmasters_post_metadata) || is_home()) ? true : false;


$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));


$post_sort_categs = get_the_terms(0, 'category');

if ($post_sort_categs != '') {
	$post_categs = '';
	
	foreach ($post_sort_categs as $post_sort_categ) {
		$post_categs .= ' ' . $post_sort_categ->slug;
	}
	
	$post_categs = ltrim($post_categs, ' ');
}


$uniqid = uniqid();

?>

<!--_________________________ Start Gallery Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_puzzle_type'); ?> data-category="<?php echo esc_attr($post_categs); ?>">
	<div class="cmsmasters_post_cont">
	<?php 
		if (!post_password_required()) {
			if (sizeof($cmsmasters_post_images) >= 1 && $cmsmasters_post_images[0] != '') {
				$first_post_image = array_shift($cmsmasters_post_images);
				
				
				$unique_id = uniqid();
				
				
				cmsmasters_thumb(get_the_ID(), 'project-thumb', false, 'img_' . get_the_ID(), true, false, true, true, $first_post_image, $unique_id);
				
				
				if (sizeof($cmsmasters_post_images) > 0) {
					echo '<div class="dn">';
					
					
					foreach ($cmsmasters_post_images as $cmsmasters_post_image) {
						$image_src = wp_get_attachment_image_src($cmsmasters_post_image, 'full');
						
						
						echo '<figure>' . 
							'<a href="' . esc_url($image_src[0]) . '" title="' . esc_attr(cmsmasters_title(get_the_ID(), false)) . '" rel="ilightbox[img_' . get_the_ID() . '_' . $unique_id . ']">' . 
								wp_get_attachment_image($cmsmasters_post_image, 'project-thumb', false, array( 
									'class' => 	'full-width', 
									'alt' => 	esc_attr(cmsmasters_title(get_the_ID(), false)), 
									'title' => 	esc_attr(cmsmasters_title(get_the_ID(), false)) 
								)) . 
							'</a>' . 
						'</figure>';
					}
					
					
					echo '</div>';
				}
			} elseif (has_post_thumbnail()) {
				cmsmasters_thumb(get_the_ID(), 'project-thumb', false, 'img_' . get_the_ID(), true, false, true, true, false);
			} else {
				cmsmasters_post_format_icon_placeholder(get_the_ID(), 'gallery');
			}
		} else {
			cmsmasters_post_format_icon_placeholder(get_the_ID(), 'gallery');
		}
		
		
		echo '<div class="puzzle_post_content_wrapper">' . 
			'<div class="puzzle_post_content_wrap">';
			
			
			if ($date) {
				echo '<div class="cmsmasters_post_cont_info entry-meta">';
					
					$date ? cmsmasters_post_date('page', 'default') : '';
					
				echo '</div>';
			}
			
			
			cmsmasters_post_heading(get_the_ID(), 'h4');
			
			
			cmsmasters_post_exc_cont();
			
			
			$more ? cmsmasters_post_more(get_the_ID()) : '';
			
			
			if ($author || $categories || $tags || $likes || $comments) {
				echo '<footer class="cmsmasters_post_footer entry-meta">' . 
					'<div class="cmsmasters_post_footer_info">';
						
						if ($comments || $likes) {
							echo '<div class="cmsmasters_post_meta_info">';
								
								$comments ? cmsmasters_post_comments('page') : '';
								
								echo '<div class="cl"></div>';
								
								$likes ? cmsmasters_post_like('page') : '';
								
							echo '</div>';
						}
						
					echo '</div>';
					
					
					$author ? cmsmasters_post_author('page') : '';
					
					$categories ? cmsmasters_post_category('page') : '';
					
					$tags ? cmsmasters_post_tags('page') : '';
					
				echo '</footer>';
			}
			
			
		echo '</div>' . 
		'</div>';
	?>
	</div>
</article>
<!--_________________________ Finish Gallery Article _________________________ -->

