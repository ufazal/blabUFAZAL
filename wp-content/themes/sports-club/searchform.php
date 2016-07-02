<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.1
 * 
 * Search Form Template
 * Created by CMSMasters
 * 
 */
?>

<div class="search_bar_wrap">
	<form method="get" action="<?php echo esc_url(home_url('/')); ?>">
		<p class="search_field">
			<input name="s" placeholder="<?php esc_attr_e('enter keywords...', 'sports-club'); ?>" value="" type="search" />
		</p>
		<p class="search_button">
			<button type="submit"><?php esc_html_e('Search', 'sports-club'); ?></button>
		</p>
	</form>
</div>

