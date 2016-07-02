<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version 	1.0.0
 * 
 * 404 Error Page Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = cmsmasters_get_global_options();

?>

</div>

<!-- _________________________ Start Content _________________________ -->
<div class="entry">
	<div class="error">
		<div class="error_bg">
			<div class="error_inner">
				<h1 class="error_title">Oops!</h1>
				<h2 class="error_title">you`ve turned <span>the wrong way</span></h2>
				<p>We're sorry, but the page you were <br />looking for doesn't exist.</p>
				
				<?php 	
						
					if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_error_search']) { 
						get_search_form(); 
					}
					
						
					if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_error_sitemap_button'] && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_error_sitemap_link'] != '') {
						echo '<div class="error_button_wrap"><a href="' . esc_url($cmsmasters_option[CMSMASTERS_SHORTNAME . '_error_sitemap_link']) . '" class="button cmsmasters_button">' . esc_html__('Sitemap', 'sports-club') . '</a></div>';
					}
				?>
				
			</div>
		</div>
	</div>
</div>
<div class="content_wrap fullwidth">
	
<!-- _________________________ Finish Content _________________________ -->

<?php 
get_footer();

