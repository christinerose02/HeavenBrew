<?php
/**
 * Template for displaying comments
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            printf(
                esc_html( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'heaven-brew' ) ),
                number_format_i18n( get_comments_number() )
            );
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 50, // Enables avatar support
            ) );
            ?>
        </ol>

        <?php
        the_comments_navigation();
    endif;

    // If comments are closed but there are comments, display a note
    if ( ! comments_open() && get_comments_number() ) :
        ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'heaven-brew' ); ?></p>
    <?php endif; ?>

    <?php comment_form(); ?>

</div><!-- #comments -->
