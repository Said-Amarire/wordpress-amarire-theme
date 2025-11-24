<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function amarire_enqueue_assets() {
    $ver = AMARIRE_THEME_VERSION;

    // Styles
    wp_enqueue_style( 'amarire-style', get_stylesheet_uri(), array(), $ver );
    wp_enqueue_style( 'amarire-main', get_template_directory_uri() . '/assets/css/main.css', array(), $ver );

    // Scripts
    wp_register_script( 'amarire-main', get_template_directory_uri() . '/assets/js/main.js', array(), $ver, true );
    wp_enqueue_script( 'amarire-main' );

    // Defer main script
    add_filter( 'script_loader_tag', function( $tag, $handle ) {
        if ( 'amarire-main' === $handle ) {
            return str_replace( ' src', ' defer="defer" src', $tag );
        }
        return $tag;
    }, 10, 2 );
}
add_action( 'wp_enqueue_scripts', 'amarire_enqueue_assets', 20 );

// Admin styles
function amarire_admin_assets() {
    wp_enqueue_style( 'amarire-admin', get_template_directory_uri() . '/assets/css/admin.css', array(), AMARIRE_THEME_VERSION );
}
add_action( 'admin_enqueue_scripts', 'amarire_admin_assets' );
