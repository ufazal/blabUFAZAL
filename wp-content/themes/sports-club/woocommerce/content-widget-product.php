<?php
/**
 * @cmsmasters_package 	Sports Club
 * @cmsmasters_version 	1.0.0
 */


global $product;

?>
<li>
	<a href="<?php echo esc_url( get_permalink( $product->id ) ); ?>" title="<?php echo esc_attr( $product->get_title() ); ?>">
		<?php echo $product->get_image(); ?>
		<?php echo $product->get_title(); ?>
	</a>
	<?php 
	cmsmasters_woocommerce_rating('cmsmasters_theme_icon_star_empty', 'cmsmasters_theme_icon_star_full');
	
	echo $product->get_price_html(); 
	?>
</li>