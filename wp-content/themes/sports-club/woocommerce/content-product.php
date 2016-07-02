<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.4.0
 * 
 * @cmsmasters_package 	Sports Club
 * @cmsmasters_version 	1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;


// Ensure visibility
if ( ! $product || ! $product->is_visible() ) {
	return;
}

?>
<li <?php post_class(); ?>>
	<div class="product_outer">
		<article class="product_inner">
			<figure class="cmsmasters_product_img preloader">
				<?php 
					woocommerce_show_product_loop_sale_flash();
					
					$availability = $product->get_availability();

					if (esc_attr($availability['class']) == 'out-of-stock') {
						echo apply_filters('woocommerce_stock_html', '<p class="' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</p>', $availability['availability']);
					}
				?>
				<div class="cmsmasters_img_btns_rollover">
					<?php cmsmasters_woocommerce_add_to_cart_button(); ?>
				</div>
				<div class="cmsmasters_product_img_wrap">
					<?php woocommerce_template_loop_product_thumbnail(); ?>
				</div>
			</figure>
			<header class="entry-header cmsmasters_product_header">
				<h5 class="entry-title cmsmasters_product_title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h5>
			</header>
			<div class="cmsmasters_product_info">
			<?php
				woocommerce_template_loop_price();
			
				cmsmasters_woocommerce_rating('cmsmasters_theme_icon_star_empty', 'cmsmasters_theme_icon_star_full');
			?>
			</div>
			<?php 
			$product_cat = $product->get_categories();
			if ($product_cat){
				echo '<footer class="entry-meta cmsmasters_product_footer">' . 
				$product->get_categories(', ', '<div class="entry-meta cmsmasters_product_cat">', '</div>') . '
			</footer>';
			}
			?>
		</article>
	</div>
</li>