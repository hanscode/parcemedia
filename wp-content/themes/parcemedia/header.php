<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/brand/favicon.png" type="image/png">

    <?php wp_head(); ?>

  </head>

  <body <?php  body_class(); ?>>

<header class="header-transparent" id="header-main">

  <?php $nav = get_field('select_a_navbar'); ?>

    <!-- Topbar -->
    <?php if ($nav && $nav = 'dark'): ?>
      <div id="navbar-top-main" class="navbar-top navbar-dark bg-dark border-bottom">
      <?php else : ?>
      <div id="navbar-top-main" class="navbar-top navbar-light bg-white border-bottom">
    <?php endif; ?>

        <div class="container">
            <div class="navbar-nav align-items-center">
                <div>
                    <ul class="nav">
                        <li class="nav-item dropdown ml-lg-2 dropdown-animate" data-toggle="hover">
                            <a class="nav-link px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img alt="Image placeholder" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/flags/us.svg">
                                <span class="d-none d-lg-inline-block">United States</span>
                                <span class="d-lg-none">EN</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-arrow">
                                <a href="" class="dropdown-item">
                                    <img alt="Image placeholder" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/flags/es.svg">Spanish</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="ml-auto">
                    <ul class="nav">
                        <?php parce_media_social_links(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Main navbar -->
    <?php if ($nav && $nav = 'dark'): ?>
      <nav class="navbar navbar-main navbar-expand-lg navbar-sticky navbar-transparent navbar-dark bg-dark" id="navbar-main">
      <?php else : ?>
        <nav class="navbar navbar-main navbar-expand-lg navbar-sticky navbar-transparent navbar-light bg-white" id="navbar-main">
    <?php endif; ?>
        <div class="container">
            <a class="navbar-brand mr-lg-5" href="<?php bloginfo('url'); ?>">
              <?php if ($nav && $nav = 'dark'): ?>
                    <?php if (get_theme_mod( 'parce_media_logo' )): ?>
                      <img alt="Image placeholder" src="<?php echo get_theme_mod( 'parce_media_logo' );  ?>" style="height: 50px;">
                      <?php else: ?>
                        <img alt="Image placeholder" src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/logo.svg" style="height: 50px;">
                    <?php endif; ?>

              <?php else : ?>
                <img alt="Image placeholder" src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/logo-dark.svg" style="height: 50px;">
              <?php endif; ?>

            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-main-collapse">
              <?php has_nav_menu( 'primary-menu' ) ? primary_menu() : '' ?>

              <?php has_nav_menu( 'secondary-menu' ) ? secondary_menu() : '' ?>

            </div>
        </div>
    </nav>

</header>

<main role="main">
  <!-- <main class="main" role="main"> -->