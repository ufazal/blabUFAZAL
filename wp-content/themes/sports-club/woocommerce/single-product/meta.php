<?php
/**
 * Single Product Meta
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 *
 * @cmsmasters_package 	Sports Club
 * @cmsmasters_version 	1.0.0
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;

$cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );
$tag_count = sizeof( get_the_terms( $post->ID, 'product_tag' ) );

?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php echo $product->get_categories( ', ', '<span class="posted_in"><strong>' . esc_html(_n( 'Category:', 'Categories:', $cat_count, 'sports-club' )) . '</strong> ', '</span>' ); ?>

	<?php echo $product->get_tags( ' ', '<span class="tagged_as"><strong>' . esc_html(_n( 'Tag:', 'Tags:', $tag_count, 'sports-club' )) . '</strong> ', '</span>' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<span class="sku_wrapper"><strong><?php esc_html_e( 'SKU:', 'sports-club' ); ?></strong> <span class="sku" itemprop="sku"><?php echo ( $sku = $product->get_sku() ) ? esc_html($sku) : esc_html__( 'N/A', 'sports-club' ); ?></span>.</span>
		
	<?php endif; ?>
	
	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>