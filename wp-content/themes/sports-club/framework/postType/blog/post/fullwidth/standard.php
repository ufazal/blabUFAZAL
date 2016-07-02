<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.0
 * 
 * Blog Post Full Width Standard Post Format Template
 * Created by CMSMasters
 * 
 */
 
 
$cmsmasters_option = cmsmasters_get_global_options();


$cmsmasters_post_post_options = get_post_meta(get_the_ID(), 'cmsmasters_post_post_options', true);

if ($cmsmasters_post_post_options == 'custom') {
	
	$cmsmasters_post_title = get_post_meta(get_the_ID(), 'cmsmasters_post_title', true);
	
} else {

	$cmsmasters_post_title = $cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_title'] ? 'true' : 'false';
}

?>

<!--_________________________ Start Standard Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsmasters_post_cont">
	<?php 
		if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_date']) {
			echo '<div class="cmsmasters_post_cont_info_leftside">';
				cmsmasters_post_date('post');
			echo '</div>';
		}
		
		if (
			$cmsmasters_post_title == 'true' || 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_author'] || 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_cat']
		) {
			echo '<div class="cmsmasters_post_cont_info_rightside">';
				if ($cmsmasters_post_title == 'true') {
					echo '<header class="cmsmasters_post_header entry-header">' . 
						cmsmasters_post_title_nolink(get_the_ID(), 'h2', false) . 
					'</header>';
				}
				
				
				if ( 
					$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_author'] || 
					$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_cat']
				) {
					echo '<div class="cmsmasters_post_cont_info entry-meta' . ((get_the_content() == '') ? ' no_bdb' : '') . '">';
						
						cmsmasters_post_author('post');
						
						cmsmasters_post_category('post');
						
					echo '</div>';
				}
			echo '</div>';
			
		}
			
		if (get_the_content() != '') {
			echo '<div class="cmsmasters_post_content entry-content">';
				
				the_content();
				
				
				wp_link_pages(array( 
					'before' => '<div class="subpage_nav" role="navigation">' . '<strong>' . esc_html__('Pages', 'sports-club') . ':</strong>', 
					'after' => '</div>', 
					'link_before' => ' [ ', 
					'link_after' => ' ] ' 
				));
				
			echo '<div class="cl"></div>' . 
			'</div>';
		}
		
		if (
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_tag'] || 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_like'] || 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_comment'] 
		) {
			echo '<footer class="cmsmasters_post_footer entry-meta">' . 
				'<div class="cmsmasters_post_footer_info">';
				
				if (
					$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_tag'] || 
					$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_like'] || 
					$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_comment'] 
				) {
					echo '<div class="cmsmasters_post_meta_info clear">';
							
						cmsmasters_post_comments('post');
							
						cmsmasters_post_like('post');
							
						cmsmasters_post_tags('post');
						
					echo '</div>';
				}	
			echo '</div>' . 
			'</footer>';
		}
	?>
	</div>
</article>
<!--_________________________ Finish Standard Article _________________________ -->

