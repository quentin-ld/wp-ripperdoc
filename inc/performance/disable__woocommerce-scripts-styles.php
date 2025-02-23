<?php

/*
Snippet Name: Disable WooCommerce Scripts & Styles
Version: 1.0.0
Tag(s): Performance
Description:
*/

if (!defined('ABSPATH')) die();

if ( class_exists( 'woocommerce' ) ) {

	// Disable WooCommerce scripts and styles
	if (!is_woocommerce() && !is_cart() && !is_checkout() && !is_account_page() && !is_product() && !is_product_category() && !is_shop()) {
		//Dequeue WooCommerce Styles
		wp_dequeue_style('woocommerce-general');
		wp_dequeue_style('woocommerce-layout');
		wp_dequeue_style('woocommerce-smallscreen');
		wp_dequeue_style('woocommerce_frontend_styles');
		wp_dequeue_style('woocommerce_fancybox_styles');
		wp_dequeue_style('woocommerce_chosen_styles');
		wp_dequeue_style('woocommerce_prettyPhoto_css');
		//Dequeue WooCommerce Scripts
		wp_dequeue_script('wc_price_slider');
		wp_dequeue_script('wc-single-product');
		wp_dequeue_script('wc-add-to-cart');
		wp_dequeue_script('wc-checkout');
		wp_dequeue_script('wc-add-to-cart-variation');
		wp_dequeue_script('wc-single-product');
		wp_dequeue_script('wc-cart');
		wp_dequeue_script('wc-chosen');
		wp_dequeue_script('woocommerce');
		wp_dequeue_script('prettyPhoto');
		wp_dequeue_script('prettyPhoto-init');
		wp_dequeue_script('jquery-blockui');
		wp_dequeue_script('jquery-placeholder');
		wp_dequeue_script('fancybox');
		wp_dequeue_script('jqueryui');
	}
}
