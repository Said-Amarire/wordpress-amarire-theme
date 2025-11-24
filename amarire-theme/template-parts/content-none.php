<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<section class="no-results not-found">
  <h2><?php esc_html_e( 'Nothing Found', 'amarire-theme' ); ?></h2>
  <p><?php esc_html_e( 'It seems we can’t find what you’re looking for. Perhaps searching can help.', 'amarire-theme' ); ?></p>
  <?php get_search_form(); ?>
</section>
