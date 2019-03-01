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

    <!-- Topbar -->
    <div id="navbar-top-main" class="navbar-top  navbar-light bg-white border-bottom">
        <div class="container">
            <div class="navbar-nav align-items-center">
                <div class="d-none d-lg-inline-block">
                    <span class="navbar-text mr-3">Parce Media, LLC</span>
                </div>
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
    <nav class="navbar navbar-main navbar-expand-lg navbar-sticky navbar-transparent navbar-light bg-white" id="navbar-main">
    <!--<nav class="navbar navbar-main navbar-expand-lg navbar-sticky navbar-transparent navbar-dark bg-dark" id="navbar-main">-->
        <div class="container">
            <a class="navbar-brand mr-lg-5" href="<?php bloginfo('url'); ?>">
                <img alt="Image placeholder" src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/dark.png" style="height: 50px;">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-main-collapse">
                <ul class="navbar-nav align-items-lg-center">
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/index.html">Overview</a>
                    </li>
                    <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow py-0">
                            <div class="list-group">
                                <a href="<?php echo get_template_directory_uri(); ?>/pages/pages-landing.html" class="list-group-item list-group-item-action">
                                    <div class="media d-flex align-items-center">
                                        <img alt="Image placeholder" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/browser-window.svg" class="img-saturate" style="width: 50px;">
                                        <div class="media-body ml-3">
                                            <h6 class="mb-1">Landing Pages</h6>
                                            <p class="mb-0">A great point to start from.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo get_template_directory_uri(); ?>/pages/pages-secondary.html" class="list-group-item list-group-item-action">
                                    <div class="media d-flex align-items-center">
                                        <img alt="Image placeholder" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/ios-photos.svg" class="img-saturate" style="width: 50px;">
                                        <div class="media-body ml-3">
                                            <h6 class="mb-1">Secondary Pages</h6>
                                            <p class="mb-0">Build your website with these demos.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo get_template_directory_uri(); ?>/pages/pages-account.html" class="list-group-item list-group-item-action">
                                    <div class="media d-flex align-items-center">
                                        <img alt="Image placeholder" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/maintenance.svg" class="img-saturate" style="width: 50px;">
                                        <div class="media-body ml-3">
                                            <h6 class="mb-1">Account Pages</h6>
                                            <p class="mb-0">Account management made easy.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo get_template_directory_uri(); ?>/pages/pages-shop.html" class="list-group-item list-group-item-action">
                                    <div class="media d-flex align-items-center">
                                        <img alt="Image placeholder" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/in-progress.svg" class="img-saturate" style="width: 50px;">
                                        <div class="media-body ml-3">
                                            <h6 class="mb-1">Shop Pages</h6>
                                            <p class="mb-0">Explore the full ecommerce website flow.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/docs/alerts.html" role="button">Components</a>
                    </li>-->
                </ul>

                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <!--<li class="nav-item">
                        <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/docs/introduction.html" target="_blank">Docs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/docs/changelog.html" target="_blank">Changelog</a>
                    </li>-->
                    <li class="nav-item mr-0">
                        <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="nav-link d-lg-none">Get started</a>
                        <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="btn btn-sm btn-primary btn-circle btn-icon d-none d-lg-inline-flex">

                        <!--<a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="btn btn-sm btn-white btn-circle btn-icon d-none d-lg-inline-flex">-->
                            <!--<span class="btn-inner--icon"><i class="fas fa-shopping-cart"></i></span>-->
                            <span class="btn-inner--text">Purchase now</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

</header>