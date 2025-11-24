<?php
if ( ! defined( 'ABSPATH' ) ) exit;

// WooCommerce support
add_action( 'after_setup_theme', function() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
} );

// Wrap WooCommerce content to fit theme html structure
function amarire_woocommerce_wrapper_start() {
    echo '<main id="main" class="site-main"><div class="container">';
}
function amarire_woocommerce_wrapper_end() {
    echo '</div></main>';
}
add_action( 'woocommerce_before_main_content', 'amarire_woocommerce_wrapper_start', 5 );
add_action( 'woocommerce_after_main_content', 'amarire_woocommerce_wrapper_end', 5 );
