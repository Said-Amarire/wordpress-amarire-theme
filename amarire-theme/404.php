<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<main id="main" role="main">
  <h1><?php esc_html_e( '404 — Page not found', 'amarire-theme' ); ?></h1>
  <p><?php esc_html_e( 'Sorry, the page you are looking for does not exist.', 'amarire-theme' ); ?></p>
  <?php get_search_form(); ?>
</main>
<?php get_footer(); ?>
