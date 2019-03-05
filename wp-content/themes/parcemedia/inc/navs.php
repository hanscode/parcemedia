<?php

class WP_sub_menu_Walker extends Walker_Nav_Menu
{
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class='dropdown-menu dropdown-menu-lg dropdown-menu-arrow py-0'><ul class='sub-menu'>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }
}

function primary_menu() {
  wp_nav_menu( array(
      'theme_location' => 'primary-menu',
      'menu_id'        => false,
      'container'      => false,
			'container_class' => false,
			'container_id'   => false,
      'depth'          => 2,
			'menu_class'     => 'navbar-nav align-items-lg-center',
      'walker'         => new WP_sub_menu_Walker
  ) );
}

function secondary_menu() {
  wp_nav_menu( array(
      'theme_location' => 'secondary-menu', // Defined when registering the menu
      'menu_id'        => false,
      'container'      => false,
      'menu_class'     => 'navbar-nav align-items-lg-center ml-lg-auto'
  ) );
}

function footer_menu() {
  wp_nav_menu( array(
      'theme_location' => 'footer-menu', // Defined when registering the menu
      'menu_id'        => 'footer',
      'container'      => false,
			'menu_class'     => 'nav'
  ) );
}

//Add support for two custom navigation menus.
function parce_media_menus() {
  register_nav_menus(
    array(
			'primary-menu' 	=> __( 'Primary Menu'),
			'secondary-menu' => __( 'Secondary Menu' )
    )
  );
}
add_action( 'init', 'parce_media_menus' );

function parce_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'primary-menu') {
    $classes[] = 'nav-item';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'parce_menu_classes', 10, 4);

function add_link_atts($atts) {
  $atts['class'] = "nav-link";
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');

function add_class_to_service_menu_item( $atts, $item, $args ) {
    // check if the item is set to title="services"
    if ( $atts['title'] == 'services' && $args->theme_location == 'primary-menu' ) {
      // add the desired attributes:
      $atts['role'] = 'button';
      $atts['data-toggle'] = 'dropdown';
      $atts['aria-haspopup'] = 'true';
      $atts['aria-expanded'] = 'false';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_class_to_service_menu_item', 10, 3 );

function add_class_to_get_started_item( $atts, $item, $args ) {
   $navbar = get_field('select_a_navbar');
    // check if the item is set title="get-started"
    if ( $atts['title'] == 'get-started' && $args->theme_location == 'secondary-menu' ) {
      if ($navbar && $navbar = 'dark') {
        // add the desired attributes:
        $atts['class'] = 'btn btn-sm btn-white btn-circle btn-icon d-none d-lg-inline-flex scroll-me';
      } else {
        $atts['class'] = 'btn btn-sm btn-dark btn-circle btn-icon d-none d-lg-inline-flex scroll-me';
      }

    } elseif ( $atts['title'] == 'hidden' && $args->theme_location == 'secondary-menu' ) {
      $atts['class'] = 'nav-link d-lg-none';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_class_to_get_started_item', 10, 3 );

function prefix_nav_title( $item_output, $item, $depth, $args ) {
    if ( !empty( $item->description ) ) {
        $item_output = str_replace(
          '">' . $args->link_before . $item->title, '">'
          . $args->link_before . '<div class="media d-flex align-items-center"><div class="media-body ml-3"><h6 class="mb-1">'
          . $item->title, $item_output );
    }

    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_title', 10, 4 );

function prefix_nav_description( $item_output, $item, $depth, $args ) {
    if ( !empty( $item->description ) ) {
        $item_output = str_replace(
          $args->link_after . '</a>', '</h6><p class="mb-0">'
          . $item->description . '</p></div></div>'
          . $args->link_after .
          '</a>', $item_output );
    }

    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );