<?php
/**
 * @cmsmasters_package 	Sports Club
 * @cmsmasters_version 	1.0.0
 */


?>
<div class="search_bar_wrap">
	<form method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<p class="search_field">
			<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'sports-club' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'sports-club' ); ?>" />
			<input type="hidden" name="post_type" value="product" />
		</p>
		<button type="submit" class="button">Search</button>
	</form>
</div>
