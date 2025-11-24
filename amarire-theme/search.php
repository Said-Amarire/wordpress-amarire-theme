<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<main id="main" role="main">
  <h1><?php printf( esc_html__( 'Search results for: %s', 'amarire-theme' ), get_search_query() ); ?></h1>
  <?php
  if ( have_posts() ) {
      while ( have_posts() ) {
          the_post();
          get_template_part( 'template-parts/content', get_post_type() );
      }
      the_posts_pagination();
  } else {
      get_template_part( 'template-parts/content', 'none' );
  }
  ?>
</main>
<?php get_footer(); ?>
