<?php

/**
 * Add .js script if "Enable threaded comments" is activated in Admin
 * Codex: {@link https://developer.wordpress.org/reference/functions/wp_enqueue_script/}
 */
function parce_media_enqueue_comments_reply()
{
    if (is_singular() && comments_open() && (get_option('thread_comments') == 1)) {
        // Load comment-reply.js (into footer)
        wp_enqueue_script('comment-reply', 'wp-includes/js/comment-reply', array(), false, true);
    }
}
add_action('wp_enqueue_scripts', 'parce_media_enqueue_comments_reply');

//Move comment textarea at the bottom
function wpb_move_comment_field_to_bottom($fields)
{
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter('comment_form_fields', 'wpb_move_comment_field_to_bottom');

//Edit submit button text in comment form
function parce_media_submit_label($arg)
{
    $arg['label_submit'] = 'Reply';
    return $arg;
}

add_filter('comment_form_defaults', 'parce_media_submit_label');

//Add placeholder to comment textarea form
function parce_media_update_comment_field($comment_field)
{
    $comment_field =
    '<div class="form-group">
    <label class="sr-only">Type your message</label>
    <textarea class="form-control" required id="comment" name="comment" placeholder="' . esc_attr__("Type your message", "text-domain") . '" rows="4" aria-required="true"></textarea>
    </div>';

    return $comment_field;
}
add_filter('comment_form_field_comment', 'parce_media_update_comment_field');

function parce_media_update_comment_fields($fields)
{
    $commenter = wp_get_current_commenter();
    $consent   = empty($commenter['comment_author_email']) ? '' : ' checked="checked"';
    $req       = get_option('require_name_email');
    $label     = $req ? '*' : ' ' . __('(optional)', 'text-domain');
    $aria_req  = $req ? "aria-required='true'" : '';

    $fields['author'] =
        '<div class="form-group">
    <label class="sr-only">Your name</label>
			<input class="form-control" name="author" type="text" placeholder="' . esc_attr__("Your Name ", "text-domain") . $label . '" value="' . esc_attr($commenter['comment_author']) .
        '" size="30" ' . $aria_req . ' />
		</div>';

    $fields['email'] =
        '<div class="form-group">
    <label class="sr-only">Email address</label>
			<input class="form-control" name="email" type="email" placeholder="' . esc_attr__("Email Address (will not be published) ", "text-domain") . $label . '" value="' . esc_attr($commenter['comment_author_email']) .
        '" size="30" ' . $aria_req . ' />
		</div>';

    $fields['url'] =
        '<div class="form-group">
			<input class="form-control" name="url" type="url"  placeholder="' . esc_attr__("Website ", "text-domain") . '" value="' . esc_attr($commenter['comment_author_url']) .
        '" size="30" />
			</div>';

    $fields['cookies'] = '
  <div class="custom-control custom-checkbox">
  <input class="custom-control-input" id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' . '<label class="custom-control-label mb-3" for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment</label>
  </div>';

    return $fields;
}
add_filter('comment_form_default_fields', 'parce_media_update_comment_fields');

function change_submit_button($submit_field)
{
    $changed_submit = str_replace('name="submit" type="submit" id="submit"', 'name="submit" type="submit" class="btn btn-lg btn-block btn-primary shadow mt-4"', $submit_field);
    return $changed_submit;
}
add_filter('comment_form_submit_field', 'change_submit_button');

function parce_media_comment_form_title ($arg) {

$arg['title_reply'] = __('Add you comment');
return $arg;
}
add_filter('comment_form_defaults','parce_media_comment_form_title');
