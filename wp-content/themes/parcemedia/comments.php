<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 */

 if ( post_password_required() ) {
	return;
} ?>
<?php if (get_locale() == 'es_ES'): ?>
  <h5 class="mb-4">Comentarios</h5>
<?php else: ?>
  <h5 class="mb-4">Comments</h5>
<?php endif; ?>

<div class="p-5 bg-secondary border rounded">
		<?php if ( have_comments() ) : ?>

			<ul class="comment-list">
				<?php
				wp_list_comments( array(
					'style'       => 'li',
					'short_ping'  => true,
					'avatar_size' => 32,
				) );
				?>
			</ul>
		<?php endif; ?>
		<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
			<p class="no-comments">
				<?php _e( 'Comments are closed.' ); ?>
			</p>
		<?php endif; ?>
		<?php comment_form(); ?>
	</div>