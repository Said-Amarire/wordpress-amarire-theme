<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'AMARIRE_THEME_VERSION', '1.0' );

require_once get_template_directory() . '/inc/setup.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/template-tags.php';
require_once get_template_directory() . '/inc/extras.php';
require_once get_template_directory() . '/inc/customizer.php';

if ( class_exists( 'WooCommerce' ) ) {
    require_once get_template_directory() . '/inc/woocommerce.php';
}

function amarire_load_textdomain() {
    load_theme_textdomain( 'amarire-theme', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'amarire_load_textdomain', 1 );
