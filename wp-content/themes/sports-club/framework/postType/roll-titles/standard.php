<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.0
 * 
 * Roll Titles Standard Template
 * Created by CMSMasters
 * 
 */

?>

<!--_________________________ Start Standard Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsmasters_roll_titles_post_cont">
	<?php
			
		echo '<div class="cmsmasters_roll_titles_post_cont_wrap">';
		
			cmsmasters_slider_post_heading(get_the_ID(), 'post', 'h4');
			
		echo '</div>';
	?>
	</div>
</article>
<!--_________________________ Finish Standard Article _________________________ -->

