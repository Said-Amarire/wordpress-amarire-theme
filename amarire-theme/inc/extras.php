<?php
if ( ! defined( 'ABSPATH' ) ) exit;

// Remove WP version
remove_action( 'wp_head', 'wp_generator' );

// Security headers
add_action( 'send_headers', function() {
    header( 'X-Frame-Options: SAMEORIGIN' );
    header( 'X-Content-Type-Options: nosniff' );
    header( 'Referrer-Policy: no-referrer-when-downgrade' );
    if ( isset( $_SERVER['HTTPS'] ) && 'on' === $_SERVER['HTTPS'] ) {
        header( 'Strict-Transport-Security: max-age=31536000; includeSubDomains; preload' );
    }
} );

// Disable emoji for performance if not needed
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
