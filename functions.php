<?php
/**
 * @version    1.0
 * @package    WR_Theme
 * @author     WooRockets Team <support@woorockets.com>
 * @copyright  Copyright (C) 2014 WooRockets.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.woorockets.com
 */

// Define supported content width.
$content_width = 740;

// Initialize WR Nitro.
get_template_part( 'woorockets/core' );

/**
 * Enqueue magnific-popup everywhere
 */
function wr_nitro_child_enqueue_scripts_in_footer() {
	if ( ! is_woocommerce() ) {
		echo '<script type="text/javascript" src="' . get_template_directory_uri() . '/assets/3rd-party/magnific-popup/jquery-magnific-popup.min.js"></script>';
	}
		echo '<script type="text/javascript" src="' . get_template_directory_uri() . '/assets/3rd-party/inputmask/jquery.inputmask.bundle.js"></script>';
		echo '<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>';
}
add_action( 'wp_footer', 'wr_nitro_child_enqueue_scripts_in_footer' );

/* Remove add to cart button */
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
remove_action( 'woocommerce_simple_add_to_cart', 'woocommerce_simple_add_to_cart', 30 );
remove_action( 'woocommerce_grouped_add_to_cart', 'woocommerce_grouped_add_to_cart', 30 );