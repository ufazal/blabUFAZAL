<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.0
 * 
 * Campaign Standard Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = cmsmasters_get_global_options();


$cmsmasters_campaign_title = get_post_meta(get_the_ID(), 'cmsmasters_campaign_title', true);

?>

<!--_________________________ Start Standard Campaign _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsmasters_campaign_cont">
	<?php
		if (!post_password_required() && has_post_thumbnail()) {
			cmsmasters_thumb(get_the_ID(), 'post-thumbnail', true, false, true, false, true, true, false);
		}
		
		
		echo '<div class="campaign_meta_wrap">';
		
			cmsmasters_campaign_target(get_the_ID(), true);
			
			cmsmasters_campaign_donations_count(get_the_ID(), true);
			
			cmsmasters_campaign_donated(get_the_ID(), 'post');
			
			cmsmasters_campaign_donate_button(get_the_ID(), true);
			
		echo '</div>';
		
		
		if ($cmsmasters_campaign_title == 'true') {
			cmsmasters_campaign_heading(get_the_ID(), 'h2', false);
		}
		
		
		if ( 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_donations_campaign_date'] || 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_donations_campaign_author'] || 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_donations_campaign_cat'] || 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_donations_campaign_tag'] || 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_donations_campaign_like'] || 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_donations_campaign_comment'] 
		) {
			echo '<div class="cmsmasters_campaign_cont_info entry-meta' . ((get_the_content() == '') ? ' no_bdb' : '') . '">';
				
				if ( 
					$cmsmasters_option[CMSMASTERS_SHORTNAME . '_donations_campaign_like'] || 
					$cmsmasters_option[CMSMASTERS_SHORTNAME . '_donations_campaign_comment'] 
				) {
					echo '<div class="cmsmasters_campaign_meta_info">';
						
						cmsmasters_campaign_comments('post');
						
						cmsmasters_campaign_like('post');
						
					echo '</div>';
				}
				
				
				cmsmasters_campaign_date('post');
				
				cmsmasters_campaign_author('post');
				
				cmsmasters_campaign_category(get_the_ID(), 'cp-categs', 'post');
				
				cmsmasters_campaign_tags(get_the_ID(), 'cp-tags', 'post');
				
			echo '</div>';
		}
		
		
		if (get_the_content() != '') {
			echo '<div class="cmsmasters_campaign_content entry-content">';
				
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
	?>
	</div>
</article>
<!--_________________________ Finish Standard Campaign _________________________ -->

