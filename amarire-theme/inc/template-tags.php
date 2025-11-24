<?php
if ( ! defined( 'ABSPATH' ) ) exit;

// Safe site title
function amarire_site_title() {
    echo esc_html( get_bloginfo( 'name' ) );
}

// Post meta example
function amarire_posted_on() {
    echo '<span class="posted-on">' . esc_html( get_the_date() ) . '</span>';
}
