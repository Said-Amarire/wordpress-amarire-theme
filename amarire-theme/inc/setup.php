<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function amarire_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption', 'script', 'style' ) );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/editor-style.css' );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'amarire-theme' ),
        'footer'  => __( 'Footer Menu', 'amarire-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'amarire_theme_setup' );
