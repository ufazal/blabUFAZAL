<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.3.8
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
} ?>

<div class="row">
    <div class="col-md-6 cart-main col-md-offset-1">
	<?php
	//wc_print_notices();

	do_action( 'woocommerce_before_cart' ); ?>


	<form action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
	<div class="row">
	<?php do_action( 'woocommerce_before_cart_table' ); ?>

	<div class="shop_table shop_table_responsive">

		<?php do_action( 'woocommerce_before_cart_contents' ); ?>

			<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					?>
					<div class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

						
						<div class="product-thumbnail col-md-2">
							<?php
								$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );



								if ( ! $_product->is_visible() ) {
									echo $thumbnail;
								} else {
									$new_url = esc_url(home_url('/')) . @$_product->post->post_name . '#'. @$_product->post->post_name;
									printf( '<a href="%s">%s</a>', $new_url, $thumbnail );
								}
							?>
						</div>

						<div class="col-md-9">
							<div class="product-name" data-title="<?php _e( 'Product', 'woocommerce' ); ?>">

								<?php
									if ( ! $_product->is_visible() ) {
										echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;';
									} else {
										$new_url = esc_url(home_url('/')) . @$_product->post->post_name . '#'. @$_product->post->post_name;
										echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', $new_url, $_product->get_title() ), $cart_item, $cart_item_key );
									}

									// Meta data
									echo WC()->cart->get_item_data( $cart_item );

									// Backorder notification
									if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
										echo '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>';
									}
								?>
							</div>
							<div class="short-desc">
								<?php echo @$_product->post->post_excerpt; ?>
							</div>
						</div>
						<div class="col-md-1">
							<div class="product-remove">
								<?php
									echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
										'<a href="%s" class="remove" title="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
										esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),
										__( 'Remove this item', 'woocommerce' ),
										esc_attr( $product_id ),
										esc_attr( $_product->get_sku() )
									), $cart_item_key );
								?>
							</div>
						</div>

						<div class="col-md-12 product-subtotal pull-right" data-title="<?php _e( 'Total', 'woocommerce' ); ?>">
							<?php
								echo 'Price: ' . apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
							?>
						</div>
					</div>
					<?php
				}
			}

			do_action( 'woocommerce_cart_contents' );
			?>
				<div class="actions">

					<?php if ( wc_coupons_enabled() ) { ?>
						<div class="coupon">

							<label for="coupon_code"><?php _e( 'Coupon', 'woocommerce' ); ?>:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <input type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply Coupon', 'woocommerce' ); ?>" />

							<?php do_action( 'woocommerce_cart_coupon' ); ?>
						</div>
					<?php } ?>


					<?php do_action( 'woocommerce_cart_actions' ); ?>

					<?php wp_nonce_field( 'woocommerce-cart' ); ?>
				</div>
			
			<?php do_action( 'woocommerce_after_cart_contents' ); ?>
			
		</div>
	</div>
	<?php do_action( 'woocommerce_after_cart_table' ); ?>

	</form>

	<div class="cart-collaterals">

		<?php do_action( 'woocommerce_cart_collaterals' ); ?>

	</div>

	<?php do_action( 'woocommerce_after_cart' ); ?>


	</div>
	<div class="col-md-5 cart-rightside">
		<?php do_action( 'woocommerce_cart_collaterals' ); ?>

		<?php 
	    if ( is_active_sidebar( 'cart_page' ) ) : ?>
	        <?php dynamic_sidebar( 'cart_page' ); ?>
	    <?php 
	    endif; ?>
	</div>
</div>

