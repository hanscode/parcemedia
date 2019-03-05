<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function footer_widgets_init() {

  // First footer widget area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'parce_media' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'parce_media' ),
        'before_widget' => '<div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0 widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="heading mb-3">',
        'after_title' => '</h6>',
    ) );

    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'parce_media' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'The second footer widget area', 'parce_media' ),
        'before_widget' => '<div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0 widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="heading mb-3">',
        'after_title' => '</h6>',
    ) );

    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Third Footer Widget Area', 'parce_media' ),
        'id' => 'third-footer-widget-area',
        'description' => __( 'The third footer widget area', 'parce_media' ),
        'before_widget' => '<div class="col-lg-2 col-sm-4 mb-5 mb-lg-0 widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="heading mb-3">',
        'after_title' => '</h6>',
    ) );

}
add_action( 'widgets_init', 'footer_widgets_init' );
?>