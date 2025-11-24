<footer id="site-footer" role="contentinfo">
  <div class="site-info">
    <?php
    $footer_text = get_theme_mod( 'amarire_footer_text', sprintf( esc_html__( '© %s Amarire Dev', 'amarire-theme' ), date_i18n( 'Y' ) ) );
    echo wp_kses_post( $footer_text );
    ?>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
