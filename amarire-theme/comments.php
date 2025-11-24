<?php
if ( ! defined( 'ABSPATH' ) ) exit;
if ( post_password_required() ) {
    return;
}
?>
<div id="comments" class="comments-area">
<?php
if ( have_comments() ) :
    the_comments_navigation();
    wp_list_comments( array( 'style' => 'ol' ) );
    the_comments_navigation();
endif;
comment_form();
?>
</div>
