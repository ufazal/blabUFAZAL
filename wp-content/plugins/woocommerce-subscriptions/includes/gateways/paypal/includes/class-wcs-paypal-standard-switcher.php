<?php
/**
 * PayPal Subscription Switcher Class.
 *
 * Because PayPal Standard does not support recurring amount or date changes, items can not be switched when the subscription is using a
 * profile ID for PayPal Standard. However, PayPal Reference Transactions do allow these to be updated and because switching uses the checkout
 * process, we can migrate a subscription from PayPal Standard to Reference Transactions when the customer switches.
 *
 * @package		WooCommerce Subscriptions
 * @subpackage	Gateways/PayPal
 * @category	Class
 * @author		Prospress
 * @since		2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class WCS_PayPal_Standard_Switcher {

	/**
	 * Bootstraps the class and hooks required actions & filters.
	 *
	 * @since 2.0
	 */
	public static function init() {

		// Allow items on PayPal Standard Subscriptions to be switch when the PayPal account supports Reference Transactions
		add_filter( 'woocommerce_subscriptions_can_item_be_switched', __CLASS__ . '::can_item_be_switched', 10, 3 );

		// Sometimes, even if the order total is $0, the cart still needs payment
		add_filter( 'woocommerce_cart_needs_payment', __CLASS__ . '::cart_needs_payment' , 100, 2 );

		// Update the new payment method if switching from PayPal Standard and not creating a new subscription
		add_filter( 'woocommerce_payment_successful_result', __CLASS__ . '::maybe_set_payment_method' , 10, 2 );
	}

	/**
	 * Allow items on PayPal Standard Subscriptions to be switch when the PayPal account supports Reference Transactions
	 *
	 * Because PayPal Standard does not support recurring amount or date changes, items can not be switched when the subscription is using a
	 * profile ID for PayPal Standard. However, PayPal Reference Transactions do allow these to be updated and because switching uses the checkout
	 * process, we can migrate a subscription from PayPal Standard to Reference Transactions when the customer switches, so we will allow that.
	 *
	 * @since 2.0
	 */
	public static function can_item_be_switched( $item_can_be_switch, $item, $subscription ) {

		if ( false === $item_can_be_switch && 'paypal' === $subscription->payment_method && WCS_PayPal::are_reference_transactions_enabled() ) {

			$is_billing_agreement = wcs_is_paypal_profile_a( wcs_get_paypal_id( $subscription->id ), 'billing_agreement' );

			if ( 'line_item' == $item['type'] && wcs_is_product_switchable_type( $item['product_id'] ) ) {
				$is_product_switchable = true;
			} else {
				$is_product_switchable = false;
			}

			if ( $subscription->has_status( 'active' ) && 0 !== $subscription->get_date( 'last_payment' ) ) {
				$is_subscription_switchable = true;
			} else {
				$is_subscription_switchable = false;
			}

			// If the only reason the subscription isn't switchable is because the PayPal profile ID is not a billing agreement, allow it to be switched
			if ( false === $is_billing_agreement && $is_product_switchable && $is_subscription_switchable ) {
				$item_can_be_switch = true;
			}
		}

		return $item_can_be_switch;
	}

	/**
	 * Check whether the cart needs payment even if the order total is $0 because it's a subscription switch request for a subscription using
	 * PayPal Standard as the subscription.
	 *
	 * @param bool $needs_payment The existing flag for whether the cart needs payment or not.
	 * @param WC_Cart $cart The WooCommerce cart object.
	 * @return bool
	 */
	public static function cart_needs_payment( $needs_payment, $cart ) {

		$cart_switch_items = WC_Subscriptions_Switcher::cart_contains_switches();

		if ( false === $needs_payment && 0 == $cart->total && false !== $cart_switch_items && 'yes' !== get_option( WC_Subscriptions_Admin::$option_prefix . '_turn_off_automatic_payments', 'no' ) ) {

			foreach ( $cart_switch_items as $cart_switch_details ) {

				$subscription = wcs_get_subscription( $cart_switch_details['subscription_id'] );

				if ( 'paypal' === $subscription->payment_method && ! wcs_is_paypal_profile_a( wcs_get_paypal_id( $subscription->id ), 'billing_agreement' ) ) {
					$needs_payment = true;
					break;
				}
			}
		}

		return $needs_payment;
	}

	/**
	 * If switching a subscription using PayPal Standard as the payment method and the customer has entered
	 * in a payment method other than PayPal (which would be using Reference Transactions), make sure to update
	 * the payment method on the subscription (this is hooked to 'woocommerce_payment_successful_result' to make
	 * sure it happens after the payment succeeds).
	 *
	 * @param array $payment_processing_result The result of the process payment gateway extension request.
	 * @param int $order_id The ID of an order potentially recording a switch.
	 * @return array
	 */
	public static function maybe_set_payment_method( $payment_processing_result, $order_id ) {

		if ( wcs_order_contains_switch( $order_id ) ) {

			$order = wc_get_order( $order_id );

			foreach ( wcs_get_subscriptions_for_switch_order( $order_id ) as $subscription ) {

				if ( 'paypal' === $subscription->payment_method && $subscription->payment_method !== $order->payment_method && false === wcs_is_paypal_profile_a( wcs_get_paypal_id( $subscription->id ), 'billing_agreement' ) ) {

					// Set the new payment method on the subscription
					$available_gateways = WC()->payment_gateways->get_available_payment_gateways();

					if ( isset( $available_gateways[ $order->payment_method ] ) ) {
						$subscription->set_payment_method( $available_gateways[ $order->payment_method ] );
					}
				}
			}
		}

		return $payment_processing_result;
	}
}
