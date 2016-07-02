<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version 	1.0.0
 * 
 * Theme Secondary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function cmsmasters_theme_colors_secondary() {
	$cmsmasters_option = cmsmasters_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version 	1.0.0
 * 
 * Theme Secondary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		if (CMSMASTERS_WOOCOMMERCE) {
			$custom_css .= "
/***************** Start {$title} WooCommerce Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_cat, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_cat a, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_info .price del, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_right_column .price del, 
	{$rule}#order_review .shop_table td.product-name, 
	{$rule}#order_review .shop_table td.product-name *, 
	{$rule}.shop_table.order_details td.product-name, 
	{$rule}.shop_table.order_details td.product-name *, 
	{$rule}.widget_shopping_cart_content .cart_list li .quantity, 
	{$rule}.product_list_widget li del .amount, 
	{$rule}.cmsmasters_woo_wrap_result select option, 
	{$rule}.cmsmasters_woo_wrap_result select {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.widget_shopping_cart_content .cart_list li .quantity, 
	{$rule}ul.order_details.bacs_details li, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_right_column .cart .single_add_to_cart_button:hover, 
	{$rule}table.shop_table.my_account_orders tr td a.button:hover, 
	{$rule}.checkout #order_review .shop_table tr a:hover, 
	{$rule}.woocommerce-shipping-fields #ship-to-different-address label, 
	{$rule}.woocommerce .myaccount_user strong, 
	{$rule}.shipping-calculator-form .button, 
	{$rule}.shop_table td.product-subtotal, 
	{$rule}.shop_table td.product-price, 
	{$rule}#page .cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button, 
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs #reviews .comment-respond label, 
	{$rule}.widget_shopping_cart_content .cart_list li a.remove, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_info .price, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_right_column .price, 
	{$rule}.required, 
	{$rule}.shop_table .product-name a:hover, 
	{$rule}.cart_totals table tr.cart-subtotal td, 
	{$rule}.cart_totals table tr.order-total td, 
	{$rule}#order_review .shop_table tr.order-total th, 
	{$rule}#order_review .shop_table tr.order-total td, 
	{$rule}.shop_table.order_details td.product-name a:hover, 
	{$rule}.shop_table.order_details tfoot tr:last-child th, 
	{$rule}.shop_table.order_details tfoot tr:last-child td, 
	{$rule}.widget_shopping_cart_content .cart_list li .quantity .amount, 
	{$rule}.widget_shopping_cart_content .total .amount, 
	{$rule}.product_list_widget li .amount, 
	{$rule}.widget_product_categories li.current-cat a, 
	{$rule}.onsale, 
	{$rule}.cmsmasters_woo_wrap_result .woocommerce-result-count, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_right_column .product_meta > span.tagged_as a, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_right_column .cart .variations td.label, 
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .commentlist .comment .comment_container .comment-text .meta time, 
	{$rule}#page .cmsmasters_dynamic_cart:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}ul.order_details li > span, 
	{$rule}.shop_table thead tr th,
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_footer > a:hover, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_footer > a.cmsmasters_add_to_cart_button.loading, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_img, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_img .cmsmasters_product_img_wrap:after, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_right_column .product_meta > span.tagged_as a:hover, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_right_column .product_meta > span a:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-handle:before, 
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-handle, 
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active, 
	{$rule}.cart_totals .proceed-to-checkout .button, 
	{$rule}.shipping-calculator-form .button, 
	{$rule}#page .cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button, 
	{$rule}#page .cmsmasters_dynamic_cart .widget_shopping_cart_content:before, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_right_column .cart .single_add_to_cart_button {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.widget_shopping_cart_content .cart_list li a:hover, 
	{$rule}.product_list_widget li > a:hover, 
	{$rule}.shop_table td.product-remove .remove:hover, 
	{$rule}table.shop_table.my_account_orders tr td a:hover, 
	{$rule}.checkout #order_review .shop_table tr a, 
	{$rule}.shop_table td.product-name a:hover, 
	{$rule}.woocommerce-info a:hover, 
	{$rule}.woocommerce-message a:hover, 
	{$rule}.woocommerce-error a:hover, 
	{$rule}#page .cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li a:hover, 
	{$rule}.widget_shopping_cart_content .cart_list li a.remove:hover, 
	{$rule}.comment-form-rating .stars > span a.active, 
	{$rule}.comment-form-rating .stars > span a:hover, 
	{$rule}.cmsmasters_star_rating .cmsmasters_theme_icon_star_full, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_cat a:hover, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_header .cmsmasters_product_title a:hover, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_img a.button:hover, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_right_column .product_meta > span.tagged_as a:hover, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_right_column .product_meta > span a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-range, 
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider_amount .button:hover, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_right_column .cart .single_add_to_cart_button:hover, 
	{$rule}.input-radio:checked + label:after, 
	{$rule}input.shipping_method + label:after, 
	{$rule}.input-checkbox + label:after, 
	{$rule}.cart_totals .proceed-to-checkout .button:hover, 
	{$rule}input.shipping_method + label:after, 
	{$rule}#page .cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button:hover, 
	{$rule}#page .cmsmasters_dynamic_cart:hover, 
	{$rule}.onsale, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_footer > a, 
	{$rule}#page .cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_right_column .product_meta > span.tagged_as a, 
	{$rule}.shop_table td.actions .button[name=update_cart]:hover, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_right_column .product_meta > span a, 
	{$rule}#page .header_bot .cmsmasters_dynamic_cart_nav > div {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}ul.order_details li > span, 
	{$rule}.shop_table tr th, 
	{$rule}.cart_totals .proceed-to-checkout .button:hover, 
	{$rule}.shipping-calculator-form .button:hover, 
	{$rule}#page .cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button:hover, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_img a.button:hover, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_right_column .cart .single_add_to_cart_button:hover, 
	{$rule}#page .cmsmasters_dynamic_cart:hover, 
	{$rule}#page .header_bot .cmsmasters_dynamic_cart_nav > div {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-range {
		" . cmsmasters_color_css('outline-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}body.woocommerce-account .form-row legend, 
	{$rule}body.woocommerce-account .form-row label, 
	{$rule}table.shop_table.my_account_orders tr td, 
	{$rule}table.shop_table.my_account_orders tr td * , 
	{$rule}table.customer_details tr * , 
	{$rule}.shop_table.order_details tr td.product-name a, 
	{$rule}.shop_table.order_details tr td.product-name strong, 
	{$rule}.shop_table.order_details tr td.product-total span, 
	{$rule}.shop_table.order_details tr * , 
	{$rule}ul.order_details li > strong, 
	{$rule}.checkout #order_review .shop_table tr * , 
	{$rule}.cart_totals table tr th, 
	{$rule}.woocommerce-shipping-fields label, 
	{$rule}.woocommerce-billing-fields label, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_right_column .product_meta strong, 
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs .shop_attributes th, 
	{$rule}.shop_table td.product-remove .remove, 
	{$rule}.shop_table td.product-name, 
	{$rule}.shop_table td.product-name a, 
	{$rule}#order_review .shop_table thead tr th, 
	{$rule}.quantity .text, 
	{$rule}.woocommerce-info, 
	{$rule}.woocommerce-message, 
	{$rule}.cart_totals table tr.cart-subtotal th, 
	{$rule}.cart_totals table tr.order-total th, 
	{$rule}#order_review .shop_table tr.cart-subtotal th, 
	{$rule}#order_review .shop_table tr.cart-subtotal td, 
	{$rule}dl.customer_details dt, 
	{$rule}ul.order_details li > span, 
	{$rule}.shop_table.order_details thead tr:first-child th, 
	{$rule}.shop_table.order_details thead tr:first-child td, 
	{$rule}.shop_table.order_details tfoot tr:first-child th, 
	{$rule}.shop_table.order_details tfoot tr:first-child td, 
	{$rule}#order_review #payment .payment_methods label, 
	{$rule}.widget_shopping_cart_content .cart_list li a, 
	{$rule}.widget_shopping_cart_content .total strong, 
	{$rule}.cmsmasters_added_product_info .cmsmasters_added_product_info_text, 
	{$rule}.product_list_widget li > a, 
	{$rule}.woocommerce-error li, 
	{$rule}#page .cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_footer > a.cmsmasters_details_button:hover, 
	{$rule}.input-radio + label:after, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_images .cmsmasters_product_thumbs .cmsmasters_product_thumb:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.header_top a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.quantity .text {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}#order_review #payment .payment_methods .payment_box:before {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider_amount .button {
		" . cmsmasters_color_css('background-color', " rgba(0,0,0, 0)") . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}ul.order_details li > span, 
	{$rule}.out-of-stock, 
	{$rule}.shop_table thead tr th, 
	{$rule}#page .cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_footer > a, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_footer > a:hover, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_footer > a:hover:before, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_img a.button {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.search_bar_wrap form p.search_field input[type=search], 
	{$rule}.widget ul.product_list_widget li, 
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-handle, 
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider, 
	{$rule}.widget_shopping_cart .widget_shopping_cart_content .cart_list li, 
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}body.woocommerce-checkout .woocommerce .woocommerce-info, 
	{$rule}.product .cmsmasters_product_right_column .buttons_added .minus, 
	{$rule}.product .cmsmasters_product_right_column .buttons_added .plus, 
	{$rule}.product .cmsmasters_product_right_column .buttons_added .text, 
	{$rule}.product .cmsmasters_product_right_column .buttons_added .minus:hover, 
	{$rule}.product .cmsmasters_product_right_column .buttons_added .plus:hover, 
	{$rule}#page .cmsmasters_dynamic_cart .widget_shopping_cart_content, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner, 
	{$rule}.shop_table td.actions, 
	{$rule}#order_review .shop_table thead tr th, 
	{$rule}.input-checkbox + label:before,
	{$rule}.input-radio + label:before, 
	{$rule}input.shipping_method + label:before, 
	{$rule}.checkout #order_review #payment, 
	{$rule}.shop_table.order_details thead tr:first-child th, 
	{$rule}.shop_table.order_details thead tr:first-child td, 
	{$rule}ul.order_details li, 
	{$rule}.shop_table tr th, 
	{$rule}.shop_table tr td, 
	{$rule}.cart_totals table tr th, 
	{$rule}.cart_totals table tr td, 
	{$rule}.cmsmasters_added_product_info, 
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active, 
	{$rule}.cmsmasters_single_product .cmsmasters_product_right_column .cart .quantity input, 
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .commentlist .comment,
	{$rule}#page .header_bot .cmsmasters_dynamic_cart_nav > div:hover, 
	{$rule}#page .cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-handle:after, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_img a.button, 
	{$rule}#page .cmsmasters_dynamic_cart .widget_shopping_cart_content:after, 
	{$rule}#page .header_bot .cmsmasters_dynamic_cart_nav > div:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}#order_review #payment .payment_methods .payment_box:after, 
	{$rule}.cmsmasters_added_product_info:before {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active, 
	{$rule}.cmsmasters_star_rating .cmsmasters_theme_icon_star_empty, 
	{$rule}.comment-form-rating .stars > span {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.shop_table.cart .cart_item, 
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider, 
	{$rule}ul.order_details li, 
	{$rule}table.customer_details tr * , 
	{$rule}table.shop_table.order_details tr * , 
	{$rule}.checkout #order_review #payment,  
	{$rule}.checkout #order_review #payment .payment_box,  
	{$rule}table.woocommerce-checkout-review-order-table tr th, 
	{$rule}table.woocommerce-checkout-review-order-table tr td, 
	{$rule}body.woocommerce-checkout .woocommerce .woocommerce-info, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_footer, 
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs .shop_attributes th, 
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs .shop_attributes td, 
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .commentlist .comment , 
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .commentlist .comment .comment_container .comment-text, 
	{$rule}.shop_table th, 
	{$rule}.shop_table td, 
	{$rule}.cart_totals table tr th, 
	{$rule}.cart_totals table tr td, 
	{$rule}ul.order_details li, 
	{$rule}.widget_shopping_cart_content .cart_list li, 
	{$rule}.product_list_widget li, 
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}.input-checkbox + label:before,
	{$rule}.input-radio + label:before, 
	{$rule}input.shipping_method + label:before, 
	{$rule}.cmsmasters_products .product .product_outer .product_inner .cmsmasters_product_info {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	#order_review #payment .payment_methods .payment_box:before  {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.comment-form-rating .stars > span, 
	{$rule}.comment-form-rating .stars > span a:hover, 
	{$rule}.cmsmasters_tabs .cmsmasters_star_rating .cmsmasters_star:hover {
		" . cmsmasters_color_css('text-shadow', "0 0 0 rgba(0,0,0, 0)") . "
	}
	
	";
	
	$custom_css .= "
	/* Finish Borders Color */

/***************** Finish {$title} WooCommerce Color Scheme Rules ******************/


";
		}


		if (CMSMASTERS_EVENTS_CALENDAR) {
			$custom_css .= "
/***************** Start {$title} Events Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}.widget.tribe-this-week-events-widget .tribe-events-page-title, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"], 
	{$rule}.recurringinfo, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-has-events div, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-has-events * {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}#tribe-events-content .cmsmasters_single_event .cmsmasters_event_month, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .tribe-events-schedule .event-is-recurring a:hover, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .tribe-events-schedule * , 
	{$rule}.widget .vcalendar .type-tribe_events .tribe-events-list-widget-content-wrap span, 
	{$rule}.widget .vcalendar .type-tribe_events .cmsmasters_event_date .cmsmasters_event_day, 
	{$rule}.widget .vcalendar .type-tribe_events .cmsmasters_event_date .cmsmasters_event_month, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number .tribe-countdown-colon, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number .tribe-countdown-under, 
	{$rule}.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_info *, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-has-events.tribe-events-thismonth div .tribe-mini-calendar-day-link, 
	{$rule}widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-thismonth span, 
	{$rule}widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-past div .tribe-mini-calendar-no-event, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar th.tribe-mini-calendar-dayofweek, 
	{$rule}.tribe_events.cmsmasters_default_type .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside .cmsmasters_post_date .published, 
	{$rule}#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .tribe-events-event-meta .time-details, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"] a:hover, 
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner ul.tribe-bar-views-list li.tribe-bar-views-option a, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .tribe-events-schedule .tribe-events-cost, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right .tribe-events-back a:hover, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right .tribe-events-cal-links a:hover, 
	{$rule}#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .cmsmasters_events_list_event_header .tribe-events-event-cost, 
	{$rule}.recurringinfo a:hover, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_right a:hover, 
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header .cmsmasters_events_organizer_header_right a:hover, 
	{$rule}#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-event-meta .time-details, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-events-mobile .tribe-events-event-body .time-details, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text a:hover,  
	{$rule}.widget .vcalendar .type-tribe_events .entry-title a:hover, 
	{$rule}.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_info .cmsmasters_widget_event_info_date, 
	{$rule}.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_venue_info_loc .cmsmasters_widget_event_venue_info a:hover, 
	{$rule}.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_venue_info_loc .cmsmasters_widget_event_venue_loc a, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-has-events:hover *, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .type-tribe_events .tribe-mini-calendar-event .list-info, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .type-tribe_events .tribe-mini-calendar-event .list-info .tribe-mini-calendar-event-venue a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	

	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"]:hover, 
	{$rule}#tribe-events-content .cmsmasters_event_date:before, 
	{$rule}.tribe-events-list-widget-events .cmsmasters_event_date:before, 
	{$rule}.vcalendar .type-tribe_events .cmsmasters_event_date:before, 
	{$rule}.tribe_events .cmsmasters_post_cont .cmsmasters_post_title:before, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column a:hover, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event:hover > div:first-child > .entry-title, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name:before, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-present div * {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-has-events.tribe-events-othermonth div .tribe-mini-calendar-day-link:hover, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-has-events.tribe-events-present div .tribe-mini-calendar-day-link, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-present div * , 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-has-events div .tribe-mini-calendar-day-link:hover,
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-event-\"] .tribe-events-month-event-title a:hover, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-past .tribe-events-month-event-title a:hover, 
	{$rule}#tribe-events-bar #tribe-bar-views label.button, 
	{$rule}.tribe-events-tooltip {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td div span, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-past div .tribe-mini-calendar-no-event, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-event-\"] .tribe-events-month-event-title a, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-past .tribe-events-month-event-title a {
		" . cmsmasters_color_css('border-color', "rgba(0,0,0, 0)") . "
	}
	
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth:hover * {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		}
		
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth.tribe-events-present {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		}
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .tribe-events-schedule .event-is-recurring a, 
	{$rule}.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_venue_info_loc .cmsmasters_widget_event_venue_info a:hover, 
	{$rule}.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_venue_info_loc .cmsmasters_widget_event_venue_loc a:hover, 
	{$rule}.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_venue_info_loc a:hover, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link:hover:before, 
	{$rule}#tribe-events-footer > a:hover, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-has-events.tribe-events-othermonth div[id*=\"tribe-events-daynum-\"] a:hover,  
	{$rule}.recurringinfo a, 
	{$rule}.tribe-events-sub-nav li a:hover, 
	{$rule}.tribe-events-tooltip .tribe-events-event-body .duration, 
	{$rule}.widget.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name:before, 
	{$rule}#page #tribe-events-content.tribe-events-list .tribe-events-event-meta a, 
	{$rule}#page #tribe-events-content.tribe-events-list .tribe-events-venue-details a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}ul.tribe-related-events > li .tribe-related-events-thumbnail .cmsmasters_events_img_placeholder, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar th.tribe-mini-calendar-dayofweek, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"], 
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner ul.tribe-bar-views-list li.tribe-bar-views-option.tribe-bar-active a, 
	{$rule}#tribe-events-bar #tribe-bar-views label.button:hover, 
	{$rule}#tribe-events-bar #tribe-bar-views.tribe-bar-views-open label.button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-week-today {
		background-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . ", 0.1);
	} 
	
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-has-events.tribe-events-present div .tribe-mini-calendar-day-link:hover, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-has-events div .tribe-mini-calendar-day-link, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap, 
	{$rule}.recurringinfo .recurring-info-tooltip:after, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar thead th, 
	{$rule}#tribe-events-bar #tribe-bar-views.tribe-bar-views-open label.button, 
	{$rule}#tribe-events-bar #tribe-bar-views label.button:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}

	
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-has-events:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
		}
	}
	
	
	{$rule}.widget.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-events-widget-link a, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .entry-title a, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name a, 
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner ul.tribe-bar-views-list li.tribe-bar-views-option a, 
	{$rule}.tribe-events-list-event-title a, 
	{$rule}.tribe_events .cmsmasters_post_header .cmsmasters_post_title a,
	{$rule}.widget .vcalendar .type-tribe_events .entry-title {
		text-shadow:0 0 0 transparent;
	}
 
	{$rule}.widget.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-events-widget-link a:hover, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .entry-title a:hover, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name a:hover, 	
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner ul.tribe-bar-views-list li.tribe-bar-views-option a:hover, 
	{$rule}.tribe-events-list-event-title a:hover, 
	{$rule}.tribe_events .cmsmasters_post_header .cmsmasters_post_title a:hover, 
	{$rule}.widget .vcalendar .type-tribe_events .entry-title:hover {
		" . cmsmasters_color_css('text-shadow', "2px 2px 0px" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	";	

	$custom_css .= "
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}.widget.tribe-this-week-events-widget .tribe-this-week-widget-day .tribe-this-week-widget-header-date .day, 
	{$rule}.widget.tribe-this-week-events-widget .tribe-this-week-widget-day .tribe-this-week-widget-header-date .date, 
	{$rule}.widget.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-events-widget-link a:hover, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .entry-title a:hover, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name a:hover, 
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner ul.tribe-bar-views-list li.tribe-bar-views-option a:hover, 
	{$rule}.tribe-events-list-event-title a:hover, 
	{$rule}.tribe_events .cmsmasters_post_header .cmsmasters_post_title a:hover, .widget .vcalendar .type-tribe_events .entry-title:hover, 
	{$rule}#tribe-events-content.tribe-events-list .tribe-events-event-meta * , 
	{$rule}#tribe-events-content.tribe-events-list .tribe-events-venue-details *, 
	{$rule}#page #tribe-events-content.tribe-events-list .tribe-events-event-meta a:hover, 
	{$rule}#page #tribe-events-content.tribe-events-list .tribe-events-venue-details a:hover, 
	{$rule}.widget.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-events-widget-link a:hover, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-grid-body .tribe-week-grid-hours div, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-allday .column.first span, 
	{$rule}.tribe-events-tooltip .tribe-events-event-body .duration abbr, 
	{$rule}.tribe-events-tooltip .entry-title, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"], 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .tribe-events-address address .adr span:first-child, 
	{$rule}#tribe-events-content .cmsmasters_event_date .cmsmasters_event_day, 
	{$rule}.tribe-events-list-widget-events .cmsmasters_event_date .cmsmasters_event_day, 
	{$rule}.vcalendar .type-tribe_events .cmsmasters_event_date .cmsmasters_event_day, 
	{$rule}#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .tribe-events-event-meta > div:before, 
	{$rule}#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .tribe-events-event-meta > div > div:before, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right .tribe-events-back:before, 
	{$rule}.tribe-events-list-widget-events .tribe-events-list-widget-content-wrap .tribe-events-event-cost, 
	{$rule}.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_info .tribe-events-event-cost, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right .tribe-events-back a, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right .tribe-events-cal-links a, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_meta .tribe-events-meta-group .cmsmasters_event_meta_info .cmsmasters_event_meta_info_item .cmsmasters_event_meta_info_item_title, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_meta .tribe-events-meta-group .cmsmasters_event_meta_info .cmsmasters_event_meta_info_item dt, 
	{$rule}#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-date-filter #tribe-bar-dates label, 
	{$rule}#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-search-filter label, 
	{$rule}#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-geoloc-filter label, 
	{$rule}#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-submit label, 
	{$rule}#tribe-events-footer > a, 
	{$rule}#tribe-events-content.tribe-events-list .tribe-events-list-separator-month, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-heading, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-date, 
	{$rule}#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .tribe-events-event-meta .tribe-events-venue-details .author, 
	{$rule}.tribe-events-notices, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_right a, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_right a:before, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_right a:hover:before, 
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header .cmsmasters_events_organizer_header_right a, 
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header .cmsmasters_events_organizer_header_right a:hover:before, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title a, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text a, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-colon, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name a, 
	{$rule}.tribe-events-sub-nav li a, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .type-tribe_events .tribe-mini-calendar-event .list-info .duration:before, 
	{$rule}.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_info .cmsmasters_widget_event_info_cost, 
	{$rule}.widget .vcalendar .type-tribe_events .entry-title, 
	{$rule}.widget .vcalendar .type-tribe_events .entry-title a, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .cmsmasters_widget_event_info > div:before, 
	{$rule}.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_venue_info_loc .cmsmasters_widget_event_venue_info a, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .type-tribe_events .tribe-mini-calendar-event .list-info .tribe-mini-calendar-event-venue, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .type-tribe_events .tribe-mini-calendar-event .list-info .tribe-mini-calendar-event-venue a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar thead th, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-mini-calendar-today div a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column, 
	{$rule}.tribe-events-tooltip:before {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.tribe-events-tooltip.recurring-info-tooltip:before {
		border-bottom-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . ", 1) !important;
	}
	
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-body .tribe-events-tooltip:before {
		border-right-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . ", 1) !important;
	}
	
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-body .tribe-events-right .tribe-events-tooltip:before {
		border-left-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . ", 1) !important;
	}
	
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth * {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
		}
	
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth.mobile-active {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
		}
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar thead th, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column a, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-present *, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-present:hover *, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-mini-calendar-today *, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-mini-calendar-today:hover * {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-week-grid-outer-wrap .tribe-week-grid-inner-wrap .tribe-week-grid-block:nth-child(odd), 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-othermonth, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-othermonth .tribe-events-month-event-title a, 
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner label.button .cmsmasters_next_arrow, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner label.button .cmsmasters_next_arrow:before, 
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner label.button .cmsmasters_next_arrow:after {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth.mobile-active *, 
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth.tribe-events-present * {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
		}
		
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-has-events.mobile-active:before, 
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
		}
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-has-events.tribe-mini-calendar-today div a.tribe-mini-calendar-day-link, 
	{$rule}ul.tribe-related-events > li .tribe-related-events-thumbnail .cmsmasters_events_img_placeholder, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-has-events.tribe-events-thismonth.tribe-events-present div .tribe-mini-calendar-day-link, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link:before, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"]:hover a, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event:hover > div:first-child > .entry-title a, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-events-past .tribe-week-event:hover > div:first-child a, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"] {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.widget.tribe-this-week-events-widget .tribe-this-week-widget-day, 
	{$rule}.widget ol.vcalendar .type-tribe_events, .widget ul.vcalendar .type-tribe_events, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-thismonth, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar, 
	{$rule}.tribe-events-single .tribe_events, 
	{$rule}.middle_content .tribe-events-venue, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-week-grid-outer-wrap .tribe-week-grid-inner-wrap, 
	{$rule}#tribe-events-content.tribe-events-list .type-tribe_events, 
	{$rule}.tribe-events-tooltip, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td .tribe-events-month-event-title a, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td, 
	{$rule}#tribe-events-content .cmsmasters_event_date, 
	{$rule}.tribe-events-list-widget-events .cmsmasters_event_date, 
	{$rule}.vcalendar .type-tribe_events .cmsmasters_event_date, 
	{$rule}.tribe_events .cmsmasters_post_cont, 
	{$rule}#tribe-events-content.tribe-events-list .tribe-events-list-separator-month, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-heading, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-date, 
	{$rule}.tribe-events-notices, 
	{$rule}#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-allday, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.tribe-events-tooltip:after {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-body .tribe-events-tooltip:after {
		border-right-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . ", 1) !important;
	}
	
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
		}
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .tribe-events-schedule > div:before, 
	{$rule}.tribe-events-list-widget-events .tribe-events-list-widget-content-wrap .duration:before, 
	{$rule}.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_info > div:before, 
	{$rule}.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_venue_info_loc > div:before, 
	{$rule}.widget .vcalendar .type-tribe_events .tribe-events-list-widget-content-wrap .duration:before, .widget .tribe-events-list-widget-events .tribe-events-list-widget-content-wrap .duration:before, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-othermonth * , 
	{$rule}.tribe_events.cmsmasters_default_type .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_tags:before, 
	{$rule}#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-event-meta .time-details:before, 
	{$rule}#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .tribe-events-event-meta div:before, 
	{$rule}#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .cmsmasters_events_list_event_header .tribe-events-event-cost:before, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-othermonth div[id*=\"tribe-events-daynum-\"] a, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-othermonth div[id*=\"tribe-events-daynum-\"], 
	{$rule}.bd_font_color, 
	{$rule}#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .tribe-events-event-meta .time-details:before, 
	{$rule}#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .tribe-events-event-meta .tribe-events-venue-details:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.widget.tribe-this-week-events-widget .tribe-this-week-widget-day, 
	{$rule}#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-has-events.tribe-events-othermonth div .tribe-mini-calendar-day-link, 
	{$rule}.tribe_events .cmsmasters_post_cont .cmsmasters_post_footer, 
	{$rule}.tribe_events.cmsmasters_default_type .cmsmasters_post_cont .cmsmasters_post_cont_info_leftside > .cmsmasters_post_meta_info, 
	{$rule}.tribe_events.cmsmasters_default_type .cmsmasters_post_cont, 
	{$rule}.tribe-events-single .tribe_events, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"], 
	{$rule}#tribe-events-content.tribe-events-list .type-tribe_events, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td .tribe-events-viewmore, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-scroller, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-content-wrap .column, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-allday, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-week-grid-outer-wrap .tribe-week-grid-inner-wrap .tribe-week-grid-block div, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-events-mobile, 
	{$rule}.widget .vcalendar .type-tribe_events, 
	{$rule}.widget.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar th, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.tribe_events .cmsmasters_post_cont_info, 
	{$rule}.tribe_events .cmsmasters_post_footer_info {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.tribe_events .cmsmasters_post_cont_info {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */
	
/***************** Finish {$title} Events Color Scheme Rules ******************/


";
		}
		
		
		if (CMSMASTERS_TC_EVENTS) {
				$custom_css .= "
/***************** Start {$title} TC Events Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}.tc_event_color {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.cmsmasters_tc_event .cmsmasters_tc_event_category a, 
	{$rule}.cmsmasters_open_tc_event .cmsmasters_tc_event_category a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_tc_event .cmsmasters_tc_event_category a:hover, 
	{$rule}.cmsmasters_open_tc_event .cmsmasters_tc_event_category a:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.cmsmasters_tc_event .cmsmasters_tc_event_category a:hover, 
	{$rule}.cmsmasters_open_tc_event .cmsmasters_tc_event_category a:hover, 
	{$rule}.tickera_table .ticket-quantity .minus:hover, 
	{$rule}.tickera_table .ticket-quantity .plus:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.cmsmasters_tc_event .cmsmasters_tc_event_category a, 
	{$rule}.cmsmasters_open_tc_event .cmsmasters_tc_event_category a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.event_tickets th, 
	{$rule}.tickera_table th {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.cmsmasters_tc_event .cmsmasters_tc_event_title a:hover {
		" . cmsmasters_color_css('text-shadow', "2px 2px 0px" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}.tc_cart_errors > ul, 
	{$rule}.event_tickets, 
	{$rule}.event_tickets select, 
	{$rule}.tickera_table, 
	{$rule}.cmsmasters_tc_event .cmsmasters_tc_event_title a:hover, 
	{$rule}.cmsmasters_tc_event .cmsmasters_tc_event_info span, 
	{$rule}.cmsmasters_open_tc_event .cmsmasters_tc_event_info span, 
	{$rule}.tickera_table .ticket-quantity input, 
	{$rule}.fields-wrap label span, 
	{$rule}.tickera-payment-gateways .plugin-title, 
	{$rule}.tickera > p, 
	{$rule}.tickera > label, 
	{$rule}.tickera-payment-gateways .tc_redirect_message, 
	{$rule}.tc_cart_widget .tc_cart_ul li {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.event_tickets th, 
	{$rule}.tickera_table th {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.tc_event_bg {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.event_tickets th, 
	{$rule}.tickera_table th {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.tc_cart_errors > ul, 
	{$rule}.event_tickets td, 
	{$rule}.tickera_table td, 
	{$rule}.cmsmasters_tc_event .cmsmasters_tc_event_cont, 
	{$rule}.cmsmasters_open_tc_event .cmsmasters_tc_event_cont, 
	{$rule}.tickera > p, 
	{$rule}.tickera > label, 
	{$rule}.tickera > hr, 
	{$rule}#tc_payment_form, 
	{$rule}.tc_cart_widget .tc_cart_ul li {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsmasters_tc_event .cmsmasters_tc_event_info span:before, 
	{$rule}.cmsmasters_open_tc_event .cmsmasters_tc_event_info span:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.tc_cart_errors > ul, 
	{$rule}.event_tickets td, 
	{$rule}.tickera_table td, 
	{$rule}.cmsmasters_tc_event .cmsmasters_tc_event_cont, 
	{$rule}.cmsmasters_open_tc_event .cmsmasters_tc_event_cont, 
	{$rule}.cmsmasters_open_tc_event .cmsmasters_tc_event_img, 
	{$rule}.cmsmasters_open_tc_event .cmsmasters_tc_event_content, 
	{$rule}.tickera > p, 
	{$rule}.tickera > label, 
	{$rule}.tickera > hr, 
	{$rule}#tc_payment_form, 
	{$rule}.tc_cart_widget .tc_cart_ul li {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */

/***************** Finish {$title} TC Events Color Scheme Rules ******************/


";
		}
	}
	
	
	$custom_css .= "
/***************** Start Header Color Scheme Rules ******************/

	/* Start Header Content Color */
	.header_mid,
	.header_mid_inner .social_wrap a, 
	.header_mid_inner .search_wrap .search_bar_wrap button:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_color']) . "
	}
	/* Finish Header Content Color */
	
	
	/* Start Header Primary Color */
	.header_mid a,
	.header_mid h1 a:hover,
	.header_mid h2 a:hover,
	.header_mid h3 a:hover,
	.header_mid h4 a:hover,
	.header_mid h5 a:hover,
	.header_mid h6 a:hover,
	.header_mid .color_2,
	.header_mid h1,
	.header_mid h2,
	.header_mid h3,
	.header_mid h4,
	.header_mid h5,
	.header_mid h6,
	.header_mid h1 a,
	.header_mid h2 a,
	.header_mid h3 a,
	.header_mid h4 a,
	.header_mid h5 a,
	.header_mid h6 a,
	.header_mid #navigation > li > a,
	.header_mid_inner .social_wrap a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_link']) . "
	}
	
	.header_mid .button:hover,
	.header_mid .cmsmasters_button:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_link']) . "
	}
	
	.header_mid input[type=text]:focus,
	.header_mid input[type=email]:focus,
	.header_mid input[type=password]:focus,
	.header_mid input[type=search]:focus,
	.header_mid textarea:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_link']) . "
	}
	/* Finish Header Primary Color */
	
	
	/* Start Header Rollover Color */
	.header_mid a:hover,
	.header_mid #navigation > li.current-menu-item > a,
	.header_mid #navigation > li.current-menu-ancestor > a,
	.header_mid #navigation > li.menu-item-highlight > a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_hover']) . "
	}
	
	.header_mid .button,
	.header_mid .cmsmasters_button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_hover']) . "
	}	
	
	/* Finish Header Rollover Color */
	
	
	/* Start Header Subtitle Color */
	.header_mid #navigation > li > a > span > span.nav_subtitle {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_subtitle']) . "
	}
	/* Finish Header Subtitle Color */
	
	
	/* Start Header Background Color */
	.header_top_inner nav > div > ul > li:hover > a,
	.header_top_inner nav > div > ul > li.current-menu-item:hover > a,
	.header_top a:hover,
	.header_top_inner .meta_wrap a:hover,
	.header_mid .button,
	.header_mid .button:hover,
	.header_mid .cmsmasters_button,
	.header_mid .cmsmasters_button:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bg']) . "
	}
	
	.header_mid input[type=text]:focus,
	.header_mid input[type=number]:focus,
	.header_mid input[type=email]:focus,
	.header_mid input[type=password]:focus,
	.header_mid input[type=search]:focus,
	.header_mid textarea:focus,
	#header .header_mid .header_mid_outer {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bg']) . "
	}
	/* Finish Header Background Color */
	
	
	/* Start Header Background Color on Scroll */
	#header.navi_scrolled .header_mid .header_mid_outer {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bg_scroll']) . "
	}
	/* Finish Header Background Color on Scroll */
	
	
	/* Start Header Rollover Background Color */
	.header_mid .search_wrap .search_bar_wrap input[type=text],
	.header_mid .search_wrap .search_bar_wrap input[type=text]:focus {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_hover_bg']) . "
	}
	/* Finish Header Rollover Background Color */
	
	
	/* Start Header Borders Color */
	
	.header_mid input[type=text],
	.header_mid input[type=number],
	.header_mid input[type=email],
	.header_mid input[type=password],
	.header_mid input[type=search],
	.header_mid input[type=submit],
	.header_mid textarea,
	.header_mid select,
	.header_mid option {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_border']) . "
	}
	
	.header_mid hr,
	.header_mid .cmsmasters_divider {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_border']) . "
	}
	/* Finish Header Borders Color */
	
	
	/* Start Header Dropdown Link Color */
	#header #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li:hover > a, 
	#header #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a, 
	.header_mid_inner .social_wrap ul li a, 
	.header_mid_inner .social_wrap ul li a:hover, 
	.header_mid #navigation ul li a, 
	.header_mid #navigation > li.menu-item-mega ul li:hover > a, 
	.header_mid #navigation > li.menu-item-mega li.current-menu-ancestor > a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_link']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li.current-menu-ancestor > a, 
		.header_mid #navigation > li > a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_link']) . "
		}
		
		.header_top .header_top_inner .header_top_right .nav_wrap .responsive_top_nav {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_link']) . "
		}
	}
	
	.header_mid #navigation ul li > a[data-tag]:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_link']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li > a[data-tag]:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_link']) . "
		}
	}
	/* Finish Header Dropdown Link Color */
	
	
	/* Start Header Dropdown Rollover Color */
	#header #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li:hover > a:hover, 
	.header_mid #navigation ul li > a:hover,
	.header_mid #navigation ul li.current-menu-item > a,
	.header_mid #navigation ul li.current_page_item > a,
	.header_mid #navigation ul li.current-menu-ancestor > a,
	.header_mid #navigation > li li.menu-item-highlight > a,
	.header_mid #navigation > li li.menu-item-highlight > a:hover,
	.header_mid #navigation > li.menu-item-mega li > a:hover,
	.header_mid #navigation > li.menu-item-mega li.current-menu-ancestor > a,
	.header_mid #navigation > li.menu-item-mega li li > a:hover,
	.header_mid #navigation > li.menu-item-mega > ul > li > a,
	.header_mid #navigation > li.menu-item-mega > ul > li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-item > a,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.current_page_item > a,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a[href]:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li:hover > a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_hover']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li > a:hover,
		.header_mid #navigation > li.current-menu-item > a,
		.header_mid #navigation > li.current_page_item > a,
		.header_mid #navigation > li.menu-item-highlight > a,
		.header_mid #navigation > li > a:hover > span > span.nav_subtitle,
		.header_mid #navigation > li.current-menu-item > a > span > span.nav_subtitle,
		.header_mid #navigation > li.current_page_item > a > span > span.nav_subtitle,
		.header_mid #navigation > li.current-menu-ancestor > a > span > span.nav_subtitle,
		.header_mid #navigation > li.menu-item-highlight > a > span > span.nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_hover']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_mid #navigation ul li:hover > a,
		.header_mid #navigation > li li.menu-item-highlight:hover > a,
		.header_mid #navigation > li.menu-item-mega li:hover > a,
		.header_mid #navigation > li.menu-item-mega > ul > li:hover > a,
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li:hover > a,
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li:hover > a,
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_hover']) . "
		}
	}
	
	.header_mid #navigation > li:not(.menu-item-mega) ul li > a[data-tag]:hover:before, 
	.header_mid #navigation > li:not(.menu-item-mega) ul li.current-menu-item > a[data-tag]:before,
	.header_mid #navigation > li:not(.menu-item-mega) ul li.current-menu-ancestor > a[data-tag]:before,
	.header_mid #navigation > li:not(.menu-item-mega) ul li.menu-item-highlight > a[data-tag]:before,
	.header_mid #navigation > li.menu-item-mega li li:hover > a[data-tag]:hover:before,
	.header_mid #navigation > li.menu-item-mega li li.current-menu-item > a[data-tag]:before, 
	.header_mid #navigation > li.menu-item-mega li li.menu-item-highlight > a[data-tag]:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_hover']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li > a[data-tag]:hover:before,
		.header_mid #navigation > li.current-menu-item > a[data-tag]:before,
		.header_mid #navigation > li.current_page_item > a[data-tag]:before,
		.header_mid #navigation > li.current-menu-ancestor > a[data-tag]:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_hover']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_mid #navigation > li:not(.menu-item-mega) ul li:hover > a[data-tag]:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_hover']) . "
		}
	}
	/* Finish Header Dropdown Rollover Color */
	
	
	/* Start Header Dropdown Subtitle Color */
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover > span > span.nav_subtitle,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a > span > span.nav_subtitle {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_subtitle']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li > a > span > span.nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_subtitle']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li:hover > a > span > span.nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_subtitle']) . "
		}
	}
	/* Finish Header Dropdown Subtitle Color */
	
	
	/* Start Header Dropdown Background Color */
	.header_mid #navigation ul li > a[data-tag]:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_bg']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation > li > a[data-tag]:before {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_bg']) . "
		}
	}
	
	.header_mid input[type=text],
	.header_mid input[type=number],
	.header_mid input[type=email],
	.header_mid input[type=password],
	.header_mid input[type=search],
	.header_mid input[type=submit],
	.header_mid button,
	.header_mid textarea,
	.header_mid select,
	.header_mid option,
	.header_mid #navigation ul,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container, 
	.header_mid #navigation > li.menu-item-mega li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-highlight > a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_bg']) . "
	}
	
	.header_mid #navigation ul li a {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_bg']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid #navigation {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_bg']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_mid #navigation > li.menu-item-mega li:hover > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_bg']) . "
		}
	}
	/* Finish Header Dropdown Background Color */
	
	
	/* Start Header Dropdown Rollover Background Color */
	#header #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_hover_bg']) . "
	}
	
	.header_mid #navigation ul li > a:hover,
	.header_mid #navigation ul li.current-menu-item > a,
	.header_mid #navigation ul li.current-menu-ancestor > a,
	.header_mid #navigation ul li.menu-item-highlight > a,
	.header_mid #navigation > li.menu-item-mega li li:hover > a:hover,
	.header_mid #navigation > li.menu-item-mega li li.current-menu-item > a,
	.header_mid #navigation > li.menu-item-mega li.menu-item-highlight > a, 
	.header_mid #navigation > li.current-menu-item > a > span,
	.header_mid #navigation > li.current-menu-ancestor > a > span,
	.header_mid #navigation > li.current-menu-parent > a > span	{
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_hover_bg']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		#header .header_mid #navigation > li > a:hover span,
		#header .header_mid #navigation > li > a:hover,
		#header .header_mid #navigation ul li > a:hover, 
		#header .header_mid #navigation ul li.current-menu-item > a, 
		#header .header_mid #navigation ul li.current_page_item > a, 
		#header .header_mid #navigation ul li.current-menu-ancestor > a, 
		#header .header_mid #navigation > li li.menu-item-highlight > a, 
		#header .header_mid #navigation > li li.menu-item-highlight > a:hover, 
		#header .header_mid #navigation > li.menu-item-mega li li > a:hover, 
		#header .header_mid #navigation > li.menu-item-mega li > a:hover, 
		#header .header_mid #navigation > li.menu-item-mega li li:hover > a:hover, 
		#header .header_mid #navigation > li.menu-item-mega li li.current-menu-item > a, 
		#header .header_mid #navigation > li.menu-item-mega li.current-menu-ancestor > a, 
		#header .header_mid #navigation > li.menu-item-mega li.menu-item-highlight > a, 
		#header .header_mid #navigation > li.current-menu-item > a > span, 
		#header .header_mid #navigation > li.current-menu-ancestor > a > span, 
		#header .header_mid #navigation > li.current-menu-parent > a > span, 
		#header .header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-item > a, 
		#header .header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.current_page_item > a, 
		#header .header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-ancestor > a, 
		#header .header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-item > a:hover, 
		#header .header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.current_page_item > a:hover, 
		#header .header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-ancestor > a:hover, 
		#header .header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-item:hover > a:hover, 
		#header .header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.current_page_item:hover > a:hover, 
		#header .header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-ancestor:hover > a:hover, 
		#header .header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li > a:hover, 
		#header .header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li:hover > a:hover, 
		#header .header_mid #navigation > li.menu-item-mega > ul > li > a, 
		#header .header_mid #navigation > li.menu-item-mega > ul > li > a:hover, 
		#header .header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li > a:hover, 
		#header .header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a, 
		#header .header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a:hover, 
		#header .header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a:hover, 
		#header .header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover, 
		#header .header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a[href]:hover, 
		#header .header_mid #navigation > li.current-menu-ancestor ul li.current_page_item > a span {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_hover_bg']) . "
		}

		.header_mid #navigation ul li > a:hover, 
		.header_mid #navigation ul li.current-menu-item > a, 
		.header_mid #navigation ul li.current-menu-ancestor > a, 
		.header_mid #navigation ul li.menu-item-highlight > a, 
		.header_mid #navigation > li.menu-item-mega li li:hover > a:hover, 
		.header_mid #navigation > li.menu-item-mega li li.current-menu-item > a, 
		.header_mid #navigation > li.menu-item-mega li.menu-item-highlight > a, 
		.header_mid #navigation > li.current-menu-item > a > span, 
		.header_mid #navigation > li.current-menu-ancestor > a > span, 
		.header_mid #navigation > li.current-menu-parent > a > span {
			background:transparent;
		}
	}
	
	
	.header_mid_inner #navigation > li > a > span,
	.header_mid_inner #navigation > li:hover > a > span > span	{
		" . cmsmasters_color_css('text-shadow', "0px 0px 0px rgba(0,0,0, 0)") . "
	}
	
	@media only screen and (max-width: 1024px) {
		#page .header_mid_inner #navigation > li:hover > a > span {
			text-shadow:0 0 0 transparent;
		}
	}
	
	.header_mid_inner #navigation > li:hover > a span, 
	.header_mid_inner #navigation > li > a:hover  > span {
		" . cmsmasters_color_css('text-shadow', "2px 2px 0px" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_hover_bg']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.header_mid #navigation ul li:hover > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_hover_bg']) . "
		}
	}
	/* Finish Header Dropdown Rollover Background Color */
	
	
	/* Start Header Dropdown Borders Color */
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li li li:first-child {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_dropdown_border']) . "
	}
	
	/* Finish Header Dropdown Borders Color */
	
	
	/* Start Header Custom Rules */
	.header_mid ::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bg']) . "
	}
	
	.header_mid ::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bg']) . "
	}
	
	/* Finish Header Custom Rules */

/***************** Finish Header Color Scheme Rules ******************/



/***************** Start Header Bottom Color Scheme Rules ******************/

	/* Start Header Bottom Content Color */
	.header_bot, 
	.header_bot .social_wrap a, 
	.header_bot .search_wrap .search_bar_wrap button:before, 
	.header_bot #navigation > li.current-menu-item ul li.current_page_item > a span,
	.header_bot #navigation > li.current-menu-ancestor ul li.current_page_item > a span,
	.header_bot #navigation > li.current-menu-parent ul li.current_page_item > a span,
	.header_bot #navigation > li.current-menu-item ul li.current_menu_item > a span,
	.header_bot #navigation > li.current-menu-ancestor ul li.current_menu_item > a span,
	.header_bot #navigation > li.current-menu-parent ul li.current_menu_item > a span {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_color']) . "
	}
	/* Finish Header Bottom Content Color */
	
	
	/* Start Header Bottom Primary Color */
	.header_bot a,
	.header_bot h1 a:hover,
	.header_bot h2 a:hover,
	.header_bot h3 a:hover,
	.header_bot h4 a:hover,
	.header_bot h5 a:hover,
	.header_bot h6 a:hover,
	.header_bot .color_2,
	.header_bot h1,
	.header_bot h2,
	.header_bot h3,
	.header_bot h4,
	.header_bot h5,
	.header_bot h6,
	.header_bot h1 a,
	.header_bot h2 a,
	.header_bot h3 a,
	.header_bot h4 a,
	.header_bot h5 a,
	.header_bot h6 a,
	.header_bot .social_wrap a:hover,
	.header_bot #navigation > li > a[data-tag]:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_link']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot #navigation ul li a:hover {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_link']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_bot #navigation > li:hover > a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_link']) . "
		}
	}
	
	.header_bot .cmsmasters_button,
	.header_bot .button:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_link']) . "
	}
	
	.header_bot input[type=text]:focus,
	.header_bot input[type=email]:focus,
	.header_bot input[type=password]:focus,
	.header_bot input[type=search]:focus,
	.header_bot textarea:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_link']) . "
	}
	/* Finish Header Bottom Primary Color */
	
	
	/* Start Header Bottom Rollover Color */
	.header_bot a:hover,
	.header_bot .button {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_hover']) . "
	}


	/* Finish Header Bottom Rollover Color */
	
	
	/* Start Header Bottom Subtitle Color */
	.header_bot #navigation > li > a > span > span.nav_subtitle {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_subtitle']) . "
	}
	/* Finish Header Bottom Subtitle Color */
	
	
	/* Start Header Bottom Background Color */
	.header_bot .cmsmasters_button {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_bg']) . "
	}
	
	.header_mid #navigation ul li a {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_bg']) . "
	}
	
	.header_bot input[type=text]:focus,
	.header_bot input[type=number]:focus,
	.header_bot input[type=email]:focus,
	.header_bot input[type=password]:focus,
	.header_bot input[type=search]:focus,
	.header_bot textarea:focus,
	.header_bot_outer {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_bg']) . "
	}
	/* Finish Header Bottom Background Color */
	
	
	/* Start Header Bottom Background Color on Scroll */
	
	/*.header_bot_scroll .header_bot_outer {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_bg_scroll']) . "
	}*/
	/* Finish Header Bottom Background Color on Scroll */
	
	
	/* Start Header Bottom Rollover Background Color */
	.header_bot #navigation > li.current-menu-item ul li.current_page_item > a,
	.header_bot #navigation > li.current-menu-ancestor ul li.current_page_item > a,
	.header_bot #navigation > li.current-menu-parent ul li.current_page_item > a,
	.header_bot #navigation > li.current-menu-item ul li.current_menu_item > a,
	.header_bot #navigation > li.current-menu-ancestor ul li.current_menu_item > a,
	.header_bot #navigation > li.current-menu-parent ul li.current_menu_item > a, 
	.header_bot #navigation ul li:hover > a,
	.header_bot .search_wrap.search_opened .search_bar_wrap, 
	.header_bot .search_wrap .search_bar_wrap input[type=text],
	.header_bot .search_wrap .search_bar_wrap input[type=text]:focus {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_hover_bg']) . "
	}

	/* Finish Header Bottom Rollover Background Color */
	
	
	/* Start Header Borders Color */
	.header_bot .search_wrap .search_bar_wrap {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_border']) . "
	}
	
	.header_bot input[type=text],
	.header_bot input[type=number],
	.header_bot input[type=email],
	.header_bot input[type=password],
	.header_bot input[type=seach],
	.header_bot input[type=submit],
	.header_bot button,
	.header_bot textarea,
	.header_bot select,
	.header_bot option {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_border']) . "
	}
	
	.header_bot hr,
	.header_bot .cmsmasters_divider {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_border']) . "
	}
	/* Finish Header Bottom Borders Color */
	
	
	/* Start Header Bottom Dropdown Link Color */
	.header_bot #navigation ul li a,
	.header_bot #navigation > li:hover > a span, 
	.header_bot #navigation > li.current-menu-item > a,	
	.header_bot #navigation > li.current-menu-ancestor > a,	
	.header_bot #navigation > li.current-page-item > a,	
	.header_bot #navigation > li.menu-item-highlight > a,
	.header_bot #navigation > li:hover > a,
	.header_bot #navigation > li.menu-item-mega ul li:hover > a, 
	.header_bot #navigation > li.menu-item-mega li.current-menu-ancestor > a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_link']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot #navigation > li > a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_link']) . "
		}
	}
	
	.header_bot #navigation ul li > a[data-tag]:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_link']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot #navigation > li > a[data-tag]:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_link']) . "
		}
	}
	/* Finish Header Bottom Dropdown Link Color */
	
	
	/* Start Header Bottom Dropdown Rollover Color */
	.header_bot #navigation > li li.menu-item-highlight > a,
	.header_bot #navigation > li li.menu-item-highlight > a:hover,
	.header_bot #navigation > li.menu-item-mega li > a:hover,
	.header_bot #navigation > li.menu-item-mega li.current-menu-ancestor > a,
	.header_bot #navigation > li.menu-item-mega li li > a:hover,
	.header_bot #navigation > li.menu-item-mega > ul > li > a,
	.header_bot #navigation > li.menu-item-mega > ul > li > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-item > a,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.current_page_item > a,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a:hover
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a[href]:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li:hover > a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_hover']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.header_bot #navigation ul li:hover > a,
		.header_bot #navigation > li li.menu-item-highlight:hover > a,
		.header_bot #navigation > li.menu-item-mega li:hover > a,
		.header_bot #navigation > li.menu-item-mega > ul > li:hover > a,
		.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li:hover > a,
		.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li:hover > a,
		.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_hover']) . "
		}
	}
	
	.header_bot #navigation > li:not(.menu-item-mega) ul li > a[data-tag]:hover:before, 
	.header_bot #navigation > li:not(.menu-item-mega) ul li.current-menu-item > a[data-tag]:before,
	.header_bot #navigation > li:not(.menu-item-mega) ul li.current-menu-ancestor > a[data-tag]:before,
	.header_bot #navigation > li:not(.menu-item-mega) ul li.menu-item-highlight > a[data-tag]:before,
	.header_bot #navigation > li.menu-item-mega li li:hover > a[data-tag]:hover:before,
	.header_bot #navigation > li.menu-item-mega li li.current-menu-item > a[data-tag]:before, 
	.header_bot #navigation > li.menu-item-mega li li.menu-item-highlight > a[data-tag]:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_hover']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot #navigation > li > a[data-tag]:hover:before,
		.header_bot #navigation > li.current-menu-item > a[data-tag]:before,
		.header_bot #navigation > li.current_page_item > a[data-tag]:before,
		.header_bot #navigation > li.current-menu-ancestor > a[data-tag]:before,
		.header_bot #navigation > li.menu-item-highlight > a[data-tag]:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_hover']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_bot #navigation > li:not(.menu-item-mega) ul li:hover > a[data-tag]:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_hover']) . "
		}
	}
	/* Finish Header Bottom Dropdown Rollover Color */
	
	
	/* Start Header Bottom Dropdown Subtitle Color */
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover > span > span.nav_subtitle,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a > span > span.nav_subtitle {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_subtitle']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot #navigation > li > a > span > span.nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_subtitle']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li:hover > a > span > span.nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_subtitle']) . "
		}
	}
	/* Finish Header Bottom Dropdown Subtitle Color */
	
	
	/* Start Header Bottom Dropdown Background Color */
	.header_bot #navigation ul li > a[data-tag]:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_bg']) . "
	}
	
	@media only screen and (max-width: 1024px) {
	
		.header_bot #navigation ul li:hover > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_bg']) . "
		}
		
		.header_bot #navigation > li > a[data-tag]:before {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_bg']) . "
		}
	}
	
	.header_bot input[type=text],
	.header_bot input[type=number],
	.header_bot input[type=email],
	.header_bot input[type=password],
	.header_bot input[type=search],
	.header_bot input[type=submit],
	.header_bot button,
	.header_bot textarea,
	.header_bot select,
	.header_bot option,
	.header_bot #navigation ul,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container, 
	.header_bot #navigation > li.menu-item-mega li > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li.menu-item-highlight > a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_bg']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot #navigation {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_bg']) . "
		}
	}
	
	@media only screen and (min-width: 1024px) {
		.header_bot #navigation > li.menu-item-mega li:hover > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_bg']) . "
		}
	}
	/* Finish Header Bottom Dropdown Background Color */
	
	
	/* Start Header Bottom Dropdown Rollover Background Color */
	.header_bot #navigation ul li.menu-item-highlight > a,
	.header_bot #navigation > li.menu-item-mega li li:hover > a:hover,
	.header_bot #navigation > li.menu-item-mega li li.current-menu-item > a,
	.header_bot #navigation > li.menu-item-mega li.menu-item-highlight > a,
	.header_bot .search_bar_wrap,
	.header_bot .search_bar_wrap input[type=text],
	.header_bot .search_bar_wrap input[type=text]:focus {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_hover_bg']) . "
	}
	
	
	@media only screen and (max-width: 1024px) {
		#header .header_bot #navigation > li > a:hover span,
		#header .header_bot #navigation > li > a:hover,
		#header .header_bot #navigation ul li > a:hover, 
		#header .header_bot #navigation ul li.current-menu-item > a, 
		#header .header_bot #navigation ul li.current_page_item > a, 
		#header .header_bot #navigation ul li.current-menu-ancestor > a, 
		#header .header_bot #navigation > li li.menu-item-highlight > a, 
		#header .header_bot #navigation > li li.menu-item-highlight > a:hover, 
		#header .header_bot #navigation > li.menu-item-mega li li > a:hover, 
		#header .header_bot #navigation > li.menu-item-mega li > a:hover, 
		#header .header_bot #navigation > li.menu-item-mega li li:hover > a:hover, 
		#header .header_bot #navigation > li.menu-item-mega li li.current-menu-item > a, 
		#header .header_bot #navigation > li.menu-item-mega li.current-menu-ancestor > a, 
		#header .header_bot #navigation > li.menu-item-mega li.menu-item-highlight > a, 
		#header .header_bot #navigation > li.current-menu-item > a > span, 
		#header .header_bot #navigation > li.current-menu-ancestor > a > span, 
		#header .header_bot #navigation > li.current-menu-parent > a > span, 
		#header .header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-item > a, 
		#header .header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.current_page_item > a, 
		#header .header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-ancestor > a, 
		#header .header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-item > a:hover, 
		#header .header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.current_page_item > a:hover, 
		#header .header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-ancestor > a:hover, 
		#header .header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-item:hover > a:hover, 
		#header .header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.current_page_item:hover > a:hover, 
		#header .header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-ancestor:hover > a:hover, 
		#header .header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li > a:hover, 
		#header .header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li:hover > a:hover, 
		#header .header_bot #navigation > li.menu-item-mega > ul > li > a, 
		#header .header_bot #navigation > li.menu-item-mega > ul > li > a:hover, 
		#header .header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li > a:hover, 
		#header .header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a, 
		#header .header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a:hover, 
		#header .header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a:hover, 
		#header .header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover, 
		#header .header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a[href]:hover, 
		#header .header_bot #navigation > li.current-menu-ancestor ul li.current_page_item > a span {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_hover_bg']) . "
		}

		.header_bot #navigation ul li > a:hover, 
		.header_bot #navigation ul li.current-menu-item > a, 
		.header_bot #navigation ul li.current-menu-ancestor > a, 
		.header_bot #navigation ul li.menu-item-highlight > a, 
		.header_bot #navigation > li.menu-item-mega li li:hover > a:hover, 
		.header_bot #navigation > li.menu-item-mega li li.current-menu-item > a, 
		.header_bot #navigation > li.menu-item-mega li.menu-item-highlight > a, 
		.header_bot #navigation > li.current-menu-item > a > span, 
		.header_bot #navigation > li.current-menu-ancestor > a > span, 
		.header_bot #navigation > li.current-menu-parent > a > span {
			background:transparent;
		}
	}
	
	/* Finish Header Bottom Dropdown Rollover Background Color */
	
	
	/* Start Header Bottom Dropdown Borders Color */
	.header_bot #navigation ul li a,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li li li:first-child {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_dropdown_border']) . "
	}
	/* Finish Header Bottom Dropdown Borders Color */
	
	
	/* Start Header Bottom Custom Rules */
	.header_bot ::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_bg']) . "
	}
	
	.header_bot ::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bottom_bg']) . "
	}
	
	/* Finish Header Bottom Custom Rules */

/***************** Finish Header Bottom Color Scheme Rules ******************/



/***************** Start Header Top Color Scheme Rules ******************/

	/* Start Header Top Content Color */
	.header_top,
	.header_top_inner .meta_wrap {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_color']) . "
	}
	/* Finish Header Top Content Color */
	
	
	/* Start Header Top Primary Color */
	.header_top a,
	.header_top .color_2,
	.header_top_inner nav > div > ul > li a,
	.header_top_inner .meta_wrap a,
	.header_top h1,
	.header_top h2,
	.header_top h3,
	.header_top h4,
	.header_top h5,
	.header_top h6,
	.header_top h1 a,
	.header_top h2 a,
	.header_top h3 a,
	.header_top h4 a,
	.header_top h5 a,
	.header_top h6 a,
	.header_top h1 a:hover,
	.header_top h2 a:hover,
	.header_top h3 a:hover,
	.header_top h4 a:hover,
	.header_top h5 a:hover,
	.header_top h6 a:hover,
	.header_top .search_bar_wrap button[type=submit][class^=\"cmsmasters-icon-\"],
	.header_top .search_bar_wrap button[type=submit][class*=\" cmsmasters-icon-\"], 
	.header_top .search_bar_wrap button[type=submit][class^=\"cmsmasters_theme_icon_\"],
	.header_top .search_bar_wrap button[type=submit][class*=\" cmsmasters_theme_icon_\"], 
	html #page #header .header_top .header_top_inner .header_top_right .nav_wrap .responsive_top_nav.active	{
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_link']) . "
	}
	
	/* @media only screen and (max-width: 1024px) {
		html #page #header .header_top .header_top_inner .header_top_right .nav_wrap .responsive_top_nav, 
		html #page #header .header_top .header_top_inner .header_top_right .nav_wrap nav #top_line_nav li > a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_link']) . "
		}
	} */
	
	#page #header .header_top .header_top_inner .header_top_right .nav_wrap .responsive_top_nav:hover, 
	.header_top .cmsmasters_button,
	.header_top .button:hover,
	.header_top_inner nav > div > ul > li > a > span.cmsmasters_count {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_link']) . "
	}
	
	.header_top input[type=text]:focus,
	.header_top input[type=number]:focus,
	.header_top input[type=email]:focus,
	.header_top input[type=password]:focus,
	.header_top input[type=search]:focus,
	.header_top textarea:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_link']) . "
	}
	/* Finish Header Top Primary Color */
	
	
	/* Start Header Top Rollover Color */
	.header_top .button {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_hover']) . "
	}
	
	/* @media only screen and (max-width: 1024px) {
		html #page #header .header_top .header_top_inner .header_top_right .nav_wrap nav #top_line_nav li > a:hover, 
		html #page #header .header_top .header_top_inner .header_top_right .nav_wrap nav #top_line_nav li.current-menu-item > a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_hover']) . "
		}
	} */
	
	.header_top_but .cmsmasters_top_arrow, 
	.header_top_but .cmsmasters_bot_arrow {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_hover']) . "
	}
	
	.header_top_but .cmsmasters_top_arrow:before, 
	.header_top_but .cmsmasters_top_arrow:after, 
	.header_top_but .cmsmasters_top_arrow span:before, 
	.header_top_but .cmsmasters_top_arrow span:after, 
	.header_top_but .cmsmasters_bot_arrow:before, 
	.header_top_but .cmsmasters_bot_arrow:after, 
	.header_top_but .cmsmasters_bot_arrow span:before, 
	.header_top_but .cmsmasters_bot_arrow span:after {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_hover']) . "
	}
	/* Finish Header Top Rollover Color */
	
	
	/* Start Header Top Background Color */
	.header_top_inner nav > div > ul > li > a > span.cmsmasters_count,
	.header_top .cmsmasters_button,
	.header_top .cmsmasters_button:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_bg']) . "
	}
	
	.header_top,
	.header_top input[type=text]:focus,
	.header_top input[type=number]:focus,
	.header_top input[type=email]:focus,
	.header_top input[type=password]:focus,
	.header_top input[type=search]:focus,
	.header_top textarea:focus,
	.header_top_outer,
	.header_top_inner nav > div > ul > li > ul li:hover,
	.header_top_inner nav > div > ul > li ul li.current-menu-item, 
	html #page #header .header_top .header_top_inner .header_top_right .nav_wrap .responsive_top_nav.active	{
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_bg']) . "
	}
	
	@media only screen and (max-width: 1024px) {	
		.header_top_inner nav > div > ul > li ul li.current-menu-item,
		.header_top_inner nav > div > ul > li > ul li:hover {
			background:transparent;
		}
	
		html #page #header .header_top_inner nav > div > ul li.current_page_item > a, 
		html #page #header .header_top_inner nav > div > ul li.current-menu-item > a, 
		html #page #header .header_top .header_top_outer .header_top_inner .header_top_right 	.nav_wrap nav #top_line_nav li a:hover, 
		#page #header .header_top .header_top_inner .header_top_right .nav_wrap .responsive_top_nav:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_bg']) . "
		}
	}


	";
	
	
	$custom_css .= "
	/* Finish Header Top Background Color */
	
	
	/* Start Header Top Borders Color */
	.header_top input[type=text],
	.header_top input[type=number],
	.header_top input[type=email],
	.header_top input[type=password],
	.header_top input[type=search],
	.header_top input[type=submit],
	.header_top button,
	.header_top textarea,
	.header_top select,
	.header_top option {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_border']) . "
	}
	
	.header_top hr,
	.header_top .cmsmasters_divider {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_border']) . "
	}
	/* Finish Header Top Borders Color */
	
	
	/* Start Header Top Dropdown Link Color */
	.header_top_inner .social_wrap a,
	.header_top_inner nav > div > ul > li ul li > a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_link']) . "
	}	
	
	@media only screen and (max-width: 1024px) {
		.header_top_inner nav > div > ul > li a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_link']) . "	
		}
	}
	
	/* Finish Header Top Dropdown Link Color */
	
	
	/* Start Header Top Dropdown Rollover Color */
	.header_top_inner nav > div > ul > li ul li:hover > a,
	.header_top_inner nav > div > ul > li ul li.current-menu-item > a,
	.header_top_inner nav > div > ul > li ul li.current-menu-ancestor > a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_hover']) . "
	}
	/* Finish Header Top Dropdown Rollover Color */
	
	
	/* Start Header Top Dropdown Background Color */
	.header_top input[type=text],
	.header_top input[type=number],
	.header_top input[type=email],
	.header_top input[type=password],
	.header_top input[type=search],
	.header_top input[type=submit],
	.header_top button,
	.header_top textarea,
	.header_top select,
	.header_top option,
	.header_top_inner nav > div > ul > li ul,
	.header_top .search_bar_wrap,
	.header_top .search_bar_wrap input[type=text],
	.header_top .search_bar_wrap input[type=text]:focus {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_bg']) . "
	}
	
	@media only screen and (max-width: 1024px) {	
		html #page #header .header_top .header_top_inner .header_top_right.active {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_bg']) . "
		}
	}	
	/* Finish Header Top Dropdown Background Color */
	
	
	/* Start Header Top Dropdown Border Color */
	.header_top_inner nav > div > ul > li li {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_border']) . "
	}
	/* Finish Header Top Dropdown Border Color */
	
	
	/* Start Header Top Custom Rules */
	.header_top ::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_bg']) . "
	}
	
	.header_top ::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_bg']) . "
	}
	";
	
	
	$custom_css .= "
	/* Finish Header Top Custom Rules */

/***************** Finish Header Top Color Scheme Rules ******************/

";
	
	
	return $custom_css;
}

