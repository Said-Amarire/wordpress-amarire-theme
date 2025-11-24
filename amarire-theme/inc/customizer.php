<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function amarire_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'amarire_branding', array(
        'title'    => __( 'Branding', 'amarire-theme' ),
        'priority' => 30,
    ) );

    $wp_customize->add_setting( 'amarire_footer_text', array(
        'default'           => sprintf( esc_html__( '© %s Amarire Dev', 'amarire-theme' ), date_i18n( 'Y' ) ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'amarire_footer_text', array(
        'label'   => __( 'Footer text', 'amarire-theme' ),
        'section' => 'amarire_branding',
        'type'    => 'text',
    ) );
}
add_action( 'customize_register', 'amarire_customize_register' );
