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
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fab fa-instagram"></i></a>
                        </li>
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
                <img alt="Image placeholder" src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/logo.svg" style="height: 50px;">
              <?php else : ?>
                <img alt="Image placeholder" src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/logo-dark.svg" style="height: 50px;">
              <?php endif; ?>

            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-main-collapse">
                <ul class="navbar-nav align-items-lg-center">
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php bloginfo('url'); ?>">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow py-0">
                            <div class="list-group">
                                <a href="<?php echo get_template_directory_uri(); ?>/pages/pages-landing.html" class="list-group-item list-group-item-action">
                                    <div class="media d-flex align-items-center">
                                        <img alt="Image placeholder" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/list.svg" class="img-saturate" style="width: 50px;">
                                        <div class="media-body ml-3">
                                            <h6 class="mb-1">Social Media Consulting</h6>
                                            <p class="mb-0">A great point to start from.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo get_template_directory_uri(); ?>/pages/pages-secondary.html" class="list-group-item list-group-item-action">
                                    <div class="media d-flex align-items-center">
                                        <img alt="Image placeholder" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/details-popup.svg" class="img-saturate" style="width: 50px;">
                                        <div class="media-body ml-3">
                                            <h6 class="mb-1">Social Media Coaching</h6>
                                            <p class="mb-0">Build your website with these demos.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo get_template_directory_uri(); ?>/pages/pages-account.html" class="list-group-item list-group-item-action">
                                    <div class="media d-flex align-items-center">
                                        <img alt="Image placeholder" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/in-progress.svg" class="img-saturate" style="width: 50px;">
                                        <div class="media-body ml-3">
                                            <h6 class="mb-1">Social Media Management</h6>
                                            <p class="mb-0">Ads management made easy.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Contact</a>
                    </li>

                </ul>

                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item mr-0">
                        <a href="#" target="_blank" class="nav-link d-lg-none">Get started</a>
                        <?php if ($nav && $nav = 'dark'): ?>
                          <a href="#" target="_blank" class="btn btn-sm btn-white btn-circle btn-icon d-none d-lg-inline-flex">
                        <?php else : ?>
                          <a href="#" target="_blank" class="btn btn-sm btn-dark btn-circle btn-icon d-none d-lg-inline-flex">
                        <?php endif; ?>
                            <span class="btn-inner--text">Get started</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

</header>

<main role="main">
  <!-- <main class="main" role="main"> -->