<?php

// Add support for manu setting via admin panel
add_theme_support( 'menus' );

//All menu additions
require get_template_directory() . '/inc/navs.php';
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/helpers.php';
//require get_template_directory() . '/inc/custom-comments.php';

// Add thumbnails support
add_theme_support( 'post-thumbnails' );

//Add theme support for title tag (since wp 4.1)
add_theme_support( 'title-tag' );

//Enable HTML5 markup support
add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

//Enable selective refresh for widgets in customizer
add_theme_support('customize-selective-refresh-widgets');

//Allow SVG files uploads
add_filter('upload_mimes', function ($mimes) {
    $mimes['svg'] = 'image/svg+xml';

    return $mimes;
});

// Theme assets: CSS
function parcemedia_theme_styles() {
  wp_enqueue_style( 'theme.css', get_template_directory_uri() . '/dist/css/theme.min.css' );
  wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css' );

}
add_action( 'wp_enqueue_scripts', 'parcemedia_theme_styles' );

// Theme assets: Javascript
function parcemedia_theme_js() {
  wp_enqueue_script ('jquery', get_template_directory_uri() . '/assets/vendor/jquery/dist/jquery.min.js', array(),'3.3.1',true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js', array('jquery'), '', true );
  wp_enqueue_script( 'in-view', get_template_directory_uri() . '/assets/vendor/in-view/dist/in-view.min.js', array('jquery'), '', true );
  wp_enqueue_script( 'highlight', get_template_directory_uri() . '/assets/vendor/highlight.js/lib/highlight.js', array('jquery'), '', true );
  wp_enqueue_script( 'main.js', get_template_directory_uri() . '/dist/js/main.min.js', array('jquery'), '', true );

}
add_action( 'wp_enqueue_scripts', 'parcemedia_theme_js' );

/**
 * Hide ACF plugins updates
 */
function acf_settings_init() {
	acf_update_setting('show_updates', false);
}
add_action('acf/init', 'acf_settings_init');

/**
 * Only show Custom Fields admin page on ":8080" address.
 */
add_filter('acf/settings/show_admin', function () {
    $site_url = get_bloginfo('url');

    if (string_ends_with($site_url, ':8080')) {
        return true;
    } else {
        return false;
    }
});

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

  acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Translate Settings',
		'menu_title'	=> 'Translation',
		'parent_slug'	=> 'theme-general-settings',
	));

}

//Edit submit button text in comment form
function parce_media_submit_label($arg) {
    $arg['label_submit'] = 'Reply';
    return $arg;
}
add_filter('comment_form_defaults', 'parce_media_submit_label');

//Move comment textarea at the bottom
function wpb_move_comment_field_to_bottom($fields)
{
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter('comment_form_fields', 'wpb_move_comment_field_to_bottom');

//Delete A Field from Your Comment Form
function remove_website_field($fields) {
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields', 'remove_website_field');

// Custom images sizes
add_image_size( 'logos-size', 227, 105, true ); // 195 pixels wide by 115 pixels tall (cropped)
add_image_size( 'avatar', 107, 107, true ); // 195 pixels wide by 115 pixels tall (cropped)

//Remove WP Custom Fields MetaBox
add_filter('acf/settings/remove_wp_meta_box', '__return_true');

//Diasable Gutenberg New Editor
add_filter('use_block_editor_for_post', '__return_false');
add_filter('use_block_editor_for_post_type', '__return_false');