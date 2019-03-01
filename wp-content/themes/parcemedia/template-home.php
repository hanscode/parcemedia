<?php
/*
  Template Name: Home Template
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">

    <title>Purpose Website UI Kit - Professional Website UI Kit by Webpixels</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/brand/favicon.png" type="image/png">

    <?php wp_head(); ?>


</head>

<body <?php  body_class(); ?>>


    <header class="header-transparent" id="header-main">

        <!-- Search -->
        <div id="search-main" class="navbar-search">
            <div class="container">
                <!-- Search form -->
                <form class="navbar-search-form" role="form">
                    <div class="form-group">
                        <div class="input-group input-group-transparent">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Type and hit enter ...">
                        </div>
                    </div>
                </form>
                <div class="navbar-search-suggestions">
                    <h6>Search Suggestions</h6>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="fas fa-search"></i>
                                        <span>macbook pro</span> in Laptops
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="fas fa-search"></i>
                                        <span>iphone 8</span> in Smartphones
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="fas fa-search"></i>
                                        <span>macbook pro</span> in Laptops
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="fas fa-search"></i>
                                        <span>beats pro solo 3</span> in Headphones
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="fas fa-search"></i>
                                        <span>smasung galaxy 10</span> in Phones
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Topbar -->
        <div id="navbar-top-main" class="navbar-top  navbar-dark bg-dark border-bottom">
            <div class="container">
                <div class="navbar-nav align-items-center">
                    <div class="d-none d-lg-inline-block">
                        <span class="navbar-text mr-3">Purpose - Website UI Kit</span>
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
                                    <a href="" class="dropdown-item">
                                        <img alt="Image placeholder" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/flags/ro.svg">Romanian</a>
                                    <a href="" class="dropdown-item">
                                        <img alt="Image placeholder" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/flags/gr.svg">Greek</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="ml-auto">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/pages/support.html">Support</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-action="search-open" data-target="#search-main"><i class="fas fa-search"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/pages/shop-cart.html"><i class="fas fa-shopping-cart"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/pages/login.html"><i class="fas fa-user-circle"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <!-- Main navbar -->

        <nav class="navbar navbar-main navbar-expand-lg navbar-sticky navbar-transparent navbar-dark bg-dark" id="navbar-main">
            <div class="container">
                <a class="navbar-brand mr-lg-5" href="<?php echo get_template_directory_uri(); ?>/index.html">
                    <img alt="Image placeholder" src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/white.png" style="height: 50px;">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar-main-collapse">
                    <ul class="navbar-nav align-items-lg-center">
                        <li class="nav-item active">
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
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/docs/alerts.html" role="button">Components</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/docs/introduction.html" target="_blank">Docs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/docs/changelog.html" target="_blank">Changelog</a>
                        </li>
                        <li class="nav-item mr-0">
                            <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="nav-link d-lg-none">Purchase now</a>
                            <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="btn btn-sm btn-white btn-circle btn-icon d-none d-lg-inline-flex">
                                <span class="btn-inner--icon"><i class="fas fa-shopping-cart"></i></span>
                                <span class="btn-inner--text">Purchase now</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

    </header>





    <main>







        <section class="section-rotate">
            <div class="section-inner bg-gradient-primary"></div>
            <!--Illustation -->
            <div class="pt-5 position-absolute middle right-0 col-lg-7 col-xl-7 d-none d-lg-block">
                <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/work-chat.svg" class="img-fluid">
            </div>
            <!-- SVG shapes background -->
            <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
                <figure class="w-100">

                    <svg preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 1506.3 578.7" xmlns="http://www.w3.org/2000/svg">
                        <path class="shape-fill-purple" d="M 147.269 295.566 C 147.914 293.9 149.399 292.705 151.164 292.431 L 167.694 289.863 C 169.459 289.588 171.236 290.277 172.356 291.668 L 182.845 304.699 C 183.965 306.091 184.258 307.974 183.613 309.64 L 177.572 325.239 C 176.927 326.905 175.442 328.1 173.677 328.375 L 157.147 330.943 C 155.382 331.217 153.605 330.529 152.485 329.137 L 141.996 316.106 C 140.876 314.714 140.583 312.831 141.228 311.165 L 147.269 295.566 Z"
                        />
                        <path class="shape-fill-green" d="M 92.927 474.881 C 93.309 473.896 94.187 473.19 95.23 473.028 L 105.002 471.51 C 106.045 471.347 107.096 471.754 107.758 472.577 L 113.959 480.28 C 114.621 481.103 114.794 482.216 114.413 483.201 L 110.841 492.423 C 110.46 493.408 109.582 494.114 108.539 494.277 L 98.767 495.795 C 97.723 495.957 96.673 495.55 96.011 494.727 L 89.81 487.024 C 89.148 486.201 88.975 485.088 89.356 484.103 L 92.927 474.881 Z"
                        />
                        <path class="shape-fill-teal" d="M 34.176 36.897 C 34.821 35.231 36.306 34.036 38.071 33.762 L 54.601 31.194 C 56.366 30.919 58.143 31.608 59.263 32.999 L 69.752 46.03 C 70.872 47.422 71.165 49.305 70.52 50.971 L 64.479 66.57 C 63.834 68.236 62.349 69.431 60.584 69.706 L 44.054 72.274 C 42.289 72.548 40.512 71.86 39.392 70.468 L 28.903 57.437 C 27.783 56.045 27.49 54.162 28.135 52.496 L 34.176 36.897 Z"
                        />
                        <path class="shape-fill-blue" d="M 975.636 9.762 C 976.101 8.561 977.171 7.7 978.443 7.502 L 990.354 5.652 C 991.626 5.454 992.907 5.95 993.714 6.953 L 1001.272 16.343 C 1002.079 17.346 1002.29 18.703 1001.826 19.903 L 997.472 31.144 C 997.008 32.344 995.938 33.205 994.666 33.403 L 982.754 35.254 C 981.483 35.451 980.202 34.956 979.395 33.953 L 971.837 24.563 C 971.03 23.559 970.818 22.203 971.283 21.002 L 975.636 9.762 Z"
                        />
                        <path class="shape-fill-gray-dark" d="M 1417.759 409.863 C 1418.404 408.197 1419.889 407.002 1421.654 406.728 L 1438.184 404.16 C 1439.949 403.885 1441.726 404.574 1442.846 405.965 L 1453.335 418.996 C 1454.455 420.388 1454.748 422.271 1454.103 423.937 L 1448.062 439.536 C 1447.417 441.202 1445.932 442.397 1444.167 442.672 L 1427.637 445.24 C 1425.872 445.514 1424.095 444.826 1422.975 443.434 L 1412.486 430.403 C 1411.366 429.011 1411.073 427.128 1411.718 425.462 L 1417.759 409.863 Z"
                        />
                        <path class="shape-fill-orange" d="M 1313.903 202.809 C 1314.266 201.873 1315.1 201.201 1316.092 201.047 L 1325.381 199.604 C 1326.373 199.449 1327.372 199.837 1328.001 200.618 L 1333.895 207.941 C 1334.525 208.723 1334.689 209.782 1334.327 210.718 L 1330.932 219.484 C 1330.57 220.42 1329.735 221.092 1328.743 221.246 L 1319.454 222.689 C 1318.462 222.843 1317.464 222.457 1316.834 221.674 L 1310.94 214.351 C 1310.31 213.569 1310.146 212.511 1310.508 211.575 L 1313.903 202.809 Z"
                        />
                        <path class="shape-fill-red" d="M 1084.395 506.137 C 1084.908 504.812 1086.09 503.861 1087.494 503.643 L 1100.645 501.6 C 1102.049 501.381 1103.463 501.929 1104.354 503.036 L 1112.699 513.403 C 1113.59 514.51 1113.823 516.009 1113.31 517.334 L 1108.504 529.744 C 1107.99 531.07 1106.809 532.02 1105.405 532.239 L 1092.254 534.282 C 1090.85 534.5 1089.436 533.953 1088.545 532.845 L 1080.2 522.478 C 1079.309 521.371 1079.076 519.873 1079.589 518.547 L 1084.395 506.137 Z"
                        />
                    </svg>


                </figure>
            </div>
            <!-- Hero container -->
            <div class="container pt-lg pb-xl-md position-relative zindex-100">
                <div class="row">
                    <div class="col-lg-5 text-center text-lg-left">
                        <a href="pages/pages-shop.html" class="alert alert-news" data-toggle="tooltip" data-original-title="See changelog">
                            <span class="badge badge-pill badge-warning">New</span>
                            <span class="alert-content">E-commerce module, new app pages and features</span>
                            <i class="fas fa-angle-right"></i>
                        </a>
                        <div class="">
                            <h2 class="text-white my-4">
	                    <span class="display-4 font-weight-light">See it. Love it</span>
	                    <span class="d-block">Purpose <strong class="font-weight-light">Website UI Kit</strong></span>
	                </h2>
                            <p class="lead text-white">A unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</p>
                            <div class="mt-5">
                                <a href="#sct_page_examples" class="btn btn-dark btn-circle btn-translate--hover btn-icon mr-sm-4 scroll-me">
                                    <span class="btn-inner--text">Page Examples</span>
                                    <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                                </a>
                                <a href="#sct_features" class="btn btn-outline-white btn-circle btn-translate--hover btn-icon d-none d-xl-inline-block scroll-me">
                                    <span class="btn-inner--icon"><i class="fas fa-file-alt"></i></span>
                                    <span class="btn-inner--text">Explore Features</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="sct_page_examples" class="slice">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 mb-5 mb-lg-0">
                        <div data-animate-hover="1" data-toggle="hidden">
                            <div class="card bg-gradient-primary shadow-primary border-primary animate-this">
                                <div class="py-5 text-center">
                                    <img alt="Image placeholder" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/browser-window.svg" class="img-saturate" style="width: 100px;">
                                </div>
                                <div class="px-4 pb-5 text-center">
                                    <a href="<?php echo get_template_directory_uri(); ?>/pages/pages-landing.html" class="btn btn-sm btn-white btn-circle">Landing Pages</a>
                                    <p class="text-white mt-4">Let's get started with one of these landing page examples.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-5 mb-lg-0">
                        <div data-animate-hover="1" data-toggle="hidden">
                            <div class="card shadow animate-this">
                                <div class="py-5 text-center">
                                    <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/ios-photos.svg" class="img-saturate" style="width: 100px;">
                                </div>
                                <div class="px-4 pb-5 text-center">
                                    <a href="<?php echo get_template_directory_uri(); ?>/pages/pages-secondary.html" class="btn btn-sm btn-dark btn-circle">Secondary Pages</a>
                                    <p class="mt-4">Inner pages templates designed to cover a large number of purposes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-5 mb-lg-0">
                        <div data-animate-hover="1" data-toggle="hidden">
                            <div class="card shadow animate-this">
                                <div class="py-5 text-center">
                                    <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/maintenance.svg" class="img-saturate" style="width: 100px;">
                                </div>
                                <div class="px-4 pb-5 text-center">
                                    <a href="<?php echo get_template_directory_uri(); ?>/pages/pages-account.html" class="btn btn-sm btn-dark btn-circle">Account Pages</a>
                                    <p class="mt-4">Pages designed for user registration, account administration and more.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-5 mb-lg-0">
                        <div data-animate-hover="1" data-toggle="hidden">
                            <div class="card shadow animate-this">
                                <div class="py-5 text-center">
                                    <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/in-progress.svg" class="img-saturate" style="width: 100px;">
                                </div>
                                <div class="px-4 pb-5 text-center">
                                    <a href="<?php echo get_template_directory_uri(); ?>/pages/pages-shop.html" class="btn btn-sm btn-dark btn-circle">Shop Pages</a>
                                    <p class="mt-4">A complete e-commerce flow to integrate your online shop fast and easy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fluid-paragraph text-center mt-5">
                    <p><strong class="text-primary">*Good to know!</strong> You are not limited to the examples we've built. We have the liberty to choose any of the page layouts and components from the package and create your own version.</p>
                </div>
            </div>
        </section>

        <section class="slice bg-gradient-secondary overflow-hidden">
            <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
                <figure class="w-100">

                    <svg preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 1506.3 578.7" xmlns="http://www.w3.org/2000/svg">
                        <path class="shape-fill-purple" d="M 147.269 295.566 C 147.914 293.9 149.399 292.705 151.164 292.431 L 167.694 289.863 C 169.459 289.588 171.236 290.277 172.356 291.668 L 182.845 304.699 C 183.965 306.091 184.258 307.974 183.613 309.64 L 177.572 325.239 C 176.927 326.905 175.442 328.1 173.677 328.375 L 157.147 330.943 C 155.382 331.217 153.605 330.529 152.485 329.137 L 141.996 316.106 C 140.876 314.714 140.583 312.831 141.228 311.165 L 147.269 295.566 Z"
                        />
                        <path class="shape-fill-green" d="M 92.927 474.881 C 93.309 473.896 94.187 473.19 95.23 473.028 L 105.002 471.51 C 106.045 471.347 107.096 471.754 107.758 472.577 L 113.959 480.28 C 114.621 481.103 114.794 482.216 114.413 483.201 L 110.841 492.423 C 110.46 493.408 109.582 494.114 108.539 494.277 L 98.767 495.795 C 97.723 495.957 96.673 495.55 96.011 494.727 L 89.81 487.024 C 89.148 486.201 88.975 485.088 89.356 484.103 L 92.927 474.881 Z"
                        />
                        <path class="shape-fill-teal" d="M 34.176 36.897 C 34.821 35.231 36.306 34.036 38.071 33.762 L 54.601 31.194 C 56.366 30.919 58.143 31.608 59.263 32.999 L 69.752 46.03 C 70.872 47.422 71.165 49.305 70.52 50.971 L 64.479 66.57 C 63.834 68.236 62.349 69.431 60.584 69.706 L 44.054 72.274 C 42.289 72.548 40.512 71.86 39.392 70.468 L 28.903 57.437 C 27.783 56.045 27.49 54.162 28.135 52.496 L 34.176 36.897 Z"
                        />
                        <path class="shape-fill-blue" d="M 975.636 9.762 C 976.101 8.561 977.171 7.7 978.443 7.502 L 990.354 5.652 C 991.626 5.454 992.907 5.95 993.714 6.953 L 1001.272 16.343 C 1002.079 17.346 1002.29 18.703 1001.826 19.903 L 997.472 31.144 C 997.008 32.344 995.938 33.205 994.666 33.403 L 982.754 35.254 C 981.483 35.451 980.202 34.956 979.395 33.953 L 971.837 24.563 C 971.03 23.559 970.818 22.203 971.283 21.002 L 975.636 9.762 Z"
                        />
                        <path class="shape-fill-gray-dark" d="M 1417.759 409.863 C 1418.404 408.197 1419.889 407.002 1421.654 406.728 L 1438.184 404.16 C 1439.949 403.885 1441.726 404.574 1442.846 405.965 L 1453.335 418.996 C 1454.455 420.388 1454.748 422.271 1454.103 423.937 L 1448.062 439.536 C 1447.417 441.202 1445.932 442.397 1444.167 442.672 L 1427.637 445.24 C 1425.872 445.514 1424.095 444.826 1422.975 443.434 L 1412.486 430.403 C 1411.366 429.011 1411.073 427.128 1411.718 425.462 L 1417.759 409.863 Z"
                        />
                        <path class="shape-fill-orange" d="M 1313.903 202.809 C 1314.266 201.873 1315.1 201.201 1316.092 201.047 L 1325.381 199.604 C 1326.373 199.449 1327.372 199.837 1328.001 200.618 L 1333.895 207.941 C 1334.525 208.723 1334.689 209.782 1334.327 210.718 L 1330.932 219.484 C 1330.57 220.42 1329.735 221.092 1328.743 221.246 L 1319.454 222.689 C 1318.462 222.843 1317.464 222.457 1316.834 221.674 L 1310.94 214.351 C 1310.31 213.569 1310.146 212.511 1310.508 211.575 L 1313.903 202.809 Z"
                        />
                        <path class="shape-fill-red" d="M 1084.395 506.137 C 1084.908 504.812 1086.09 503.861 1087.494 503.643 L 1100.645 501.6 C 1102.049 501.381 1103.463 501.929 1104.354 503.036 L 1112.699 513.403 C 1113.59 514.51 1113.823 516.009 1113.31 517.334 L 1108.504 529.744 C 1107.99 531.07 1106.809 532.02 1105.405 532.239 L 1092.254 534.282 C 1090.85 534.5 1089.436 533.953 1088.545 532.845 L 1080.2 522.478 C 1079.309 521.371 1079.076 519.873 1079.589 518.547 L 1084.395 506.137 Z"
                        />
                    </svg>


                </figure>
            </div>
            <div class="container position-relative zindex-100">
                <div class="mb-md text-center">
                    <span class="badge badge-lg badge-success badge-pill">Build tools</span>
                    <h3 class="mt-4">Built for <strong class="font-weight-700">awesomeness</strong></h3>
                    <div class="fluid-paragraph text-center mt-4">
                        <p class="lead lh-180">We use the latest technologies and tools in order to create a better code that not only works great, but it is easy easy to work with too.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card shadow border-0 mb-4">
                            <div class="card-body py-5">
                                <div class="d-flex align-items-start">
                                    <div class="icon icon-shape icon-green rounded-circle">
                                        <i class="fab fa-html5"></i>
                                    </div>
                                    <div class="icon-text pl-4">
                                        <h5 class="font-weight-bold">Created with the latest technologies</h5>
                                    </div>
                                </div>
                                <p class="mt-4">We use the latest technologies and tools in order to create a better code that not only works great, but it is easy easy to work with too.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow border-0 mb-4">
                            <div class="card-body py-5">
                                <div class="d-flex align-items-start">
                                    <div class="icon icon-shape icon-orange rounded-circle">
                                        <i class="fab fa-node-js"></i>
                                    </div>
                                    <div class="icon-text pl-4">
                                        <h5 class="font-weight-bold">Built by developers for developers</h5>
                                    </div>
                                </div>
                                <p class="mt-4">You don't only need a theme, but also great tools in order to ease the process or building and customizing. And this is exactly what we offer you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow border-0 mb-4">
                            <div class="card-body py-5">
                                <div class="d-flex align-items-start">
                                    <div class="icon icon-shape icon-teal rounded-circle">
                                        <i class="fas fa-thumbs-up"></i>
                                    </div>
                                    <div class="icon-text pl-4">
                                        <h5 class="font-weight-bold">Made for great first impressions</h5>
                                    </div>
                                </div>
                                <p class="mt-4">Purpose is lighter and faster than most of the themes out there which means you get more for less. Check out the components and examples pages.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="slice slice-xl bg-gradient-primary has-floating-items" id="sct_call_to_action">
            <a href="#sct_call_to_action" class="tongue tongue-up tongue-secondary scroll-me"><i class="fas fa-angle-up"></i></a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-white strong-600">Complete features at your hand</h1>
                        <div class="row justify-content-center mt-4">
                            <div class="col-lg-8">
                                <p class="lead text-white">
                                    Purpose is a great premium UI package including all the important and needed features so you can jumpstart the hard work and get right to the website creation fast and easy with more than 100 customized Bootstrap components and 15+ integrated plugins.
                                </p>
                                <div class="btn-container mt-5">
                                    <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="btn btn-white btn-circle btn-translate--hover px-4 mr-lg-4">Purchase now</a>
                                    <a href="<?php echo get_template_directory_uri(); ?>/docs/plugins.html" target="_blank" class="btn btn-warning btn-circle btn-translate--hover px-4">See the Plugins</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container floating-items">
                <div class="floating-icon"><span></span>
                    <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/add.svg" class="img-saturate" style="width: 50px;">
                </div>
                <div class="floating-icon"><span></span>
                    <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/change-theme.svg" class="img-saturate" style="width: 76px;">
                </div>
                <div class="floating-icon"><span></span>
                    <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/comments.svg" class="img-saturate" style="width: 36px;">
                </div>
                <div class="floating-icon"><span></span>
                    <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/download.svg" class="img-saturate" style="width: 76px;">
                </div>
                <div class="floating-icon"><span></span>
                    <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/form.svg" class="img-saturate" style="width: 46px;">
                </div>
                <div class="floating-icon"><span></span>
                    <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/ios-photos.svg" class="img-saturate" style="width: 36px;">
                </div>
            </div>
        </section>

        <section class="slice slice-lg pt-md-xl bg-secondary">
            <div class="container">
                <div class="mb-md text-center">
                    <h3 class="h3">Customize with confidence</h3>
                    <div class="fluid-paragraph text-center mt-4">
                        <p class="lead lh-180">Customization has never been easier. Purpose has all the right tools in order to make your website building process a breeze.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <h6 class="text-primary mb-3">Customize your website using Sass</h6>
                        <div class="frame-browser shadow-lg">
                            <div class="frame-header d-flex align-items-center floatfix">
                                <div class="col-6">
                                    <span class="dot bg-red"></span>
                                    <span class="dot bg-orange"></span>
                                    <span class="dot bg-blue"></span>
                                </div>
                                <div class="col-6 text-right">
                                    <small class="text-muted">SCSS</small>
                                </div>
                            </div>
                            <div class="frame-body">
                                <pre class="highlight css"><code>
/* Insert your brand's colors and the theme will adapt */

$primary:       #510FA8;
$secondary:     #f5f5fd;
$success:       $green;
$info:          $teal;
$warning:       $orange;
$danger:        $red;
</code></pre>
                            </div>
                        </div>
                        <div class="mt-5">
                            <p>After changing the Sass variables, simply rung the <code>gulp</code> command from your terminal and you're done. <a href="<?php echo get_template_directory_uri(); ?>/docs/gulp.html" target="_blank">Learn more here</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h6 class="text-primary mb-3">Make use of the pre-defined helper classes</h6>
                        <div class="frame-browser shadow-lg">
                            <div class="frame-header d-flex align-items-center floatfix">
                                <div class="col-6">
                                    <span class="dot bg-red"></span>
                                    <span class="dot bg-orange"></span>
                                    <span class="dot bg-blue"></span>
                                </div>
                                <div class="col-6 text-right">
                                    <small class="text-muted">HTML</small>
                                </div>
                            </div>
                            <div class="frame-body">
                                <pre class="highlight html"><code>
/* Add a shadow effect with just one CSS class */
&lt;div class="card shadow"&gt;
   ...
&lt;/div&gt;

/* Add a smooth button animation on hover */
&lt;a href="#" class="btn btn-primary btn-translate--hover"&gt;
   ...
&lt;/a&gt;
</code></pre>
                            </div>
                        </div>
                        <div class="mt-5">
                            <p>Check out all the pre-defined modifier classes and see how they can help you. <a href="<?php echo get_template_directory_uri(); ?>/docs/customization.html" target="_blank">Learn more here</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="slice slice-lg" id="sct_features">
            <a href="#sct_features" class="tongue tongue-up tongue-secondary scroll-me"><i class="fas fa-angle-up"></i></a>
            <div class="container">
                <div class="mb-md text-center">
                    <h3 class="h3">Really useful features</h3>
                    <div class="fluid-paragraph text-center mt-4">
                        <p class="lead lh-180">You get all Bootstrap components fully customized. Besides, you receive another numerous plugins out of the box and ready to use.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-5">
                        <div class="d-flex align-items-start">
                            <div class="icon icon-lg icon-shape icon-teal rounded-circle">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <div class="icon-text pl-4">
                                <h5>Latest Bootstrap Framework</h5>
                                <p class="mb-0">We build responsive, mobile-first themes with the world's most popular front-end component library</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="d-flex align-items-start">
                            <div class="icon icon-lg icon-shape icon-teal rounded-circle">
                                <i class="fab fa-sass"></i>
                            </div>
                            <div class="icon-text pl-4">
                                <h5>Built with Sass <small>(included)</small></h5>
                                <p class="mb-0">Change one variable and the theme adapts. Colors, fonts, sizes ... you name it.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="d-flex align-items-start">
                            <div class="icon icon-lg icon-shape icon-teal rounded-circle">
                                <i class="fab fa-sass"></i>
                            </div>
                            <div class="icon-text pl-4">
                                <h5>700+ Components</h5>
                                <p class="mb-0">Nicely customized components that can be reused anytime and anywhere in your project.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-5">
                        <div class="d-flex align-items-start">
                            <div class="icon icon-lg icon-shape icon-teal rounded-circle">
                                <i class="fas fa-tint"></i>
                            </div>
                            <div class="icon-text pl-4">
                                <h5 class="font-weight-bold">Extended color palette</h5>
                                <p class="mb-0">A beautiful color palette that can be easily modified with our nicely coded Sass files.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="d-flex align-items-start">
                            <div class="icon icon-lg icon-shape icon-teal rounded-circle">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="icon-text pl-4">
                                <h5 class="font-weight-bold">15+ Integrated Plugins</h5>
                                <p class="mb-0">Get even more functionality with the ready to use plugins we have integrated in this theme for you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="d-flex align-items-start">
                            <div class="icon icon-lg icon-shape icon-teal rounded-circle">
                                <i class="fas fa-font"></i>
                            </div>
                            <div class="icon-text pl-4">
                                <h5 class="font-weight-bold">Font and SVG icons</h5>
                                <p class="mb-0">One nice collection of icons so you can add a more intuitive and playful touch to your website.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="slice slice-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-5 mb-md-0">
                        <div class="card bg-gradient-dark shadow shadow-lg--hover border-0 position-relative zindex-100">
                            <div class="card-body py-5">
                                <div class="d-flex align-items-start">
                                    <div class="icon">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                    <div class="icon-text">
                                        <h3 class="text-white h4">70+ example pages</h3>
                                        <p class="text-white mb-0">We took a step further and created a set of 70+ pages for a variety of purposes that makes it the ideal point to start building websites of any kind.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5 mb-md-0">
                        <div class="card bg-gradient-secondary shadow shadow-lg--hover border-0 position-relative zindex-100">
                            <div class="card-body py-5">
                                <div class="d-flex align-items-start">
                                    <div class="icon text-primary">
                                        <i class="fas fa-question-circle"></i>
                                    </div>
                                    <div class="icon-text">
                                        <h3 class="h4">6 months technical support</h3>
                                        <p class="mb-0">Use our dedicated support email to send your issues or suggestions. We are here to help anytime: <strong class="text-dark">support@webpixels.io</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>


    <footer class="footer footer-dark bg-gradient-primary footer-rotate">
        <div class="container">
            <div class="row pt-md">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <a href="<?php echo get_template_directory_uri(); ?>/index.html">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/white.png" alt="Footer logo" style="height: 70px;">
                    </a>
                    <p class="text-sm">A unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</p>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
                    <h6 class="heading mb-3">Account</h6>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo get_template_directory_uri(); ?>/pages/account-profile.html">Profile</a>
                        </li>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/pages/account-settings.html">Settings</a>
                        </li>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/pages/account-billing.html">Billing</a>
                        </li>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/pages/account-notifications.html">Notifications</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                    <h6 class="heading mb-3">About</h6>
                    <ul class="list-unstyled text-small">
                        <li><a href="#">Services</a>
                        </li>
                        <li><a href="#">Contact</a>
                        </li>
                        <li><a href="#">Careers</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-4 mb-5 mb-lg-0">
                    <h6 class="heading mb-3">Company</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Terms</a>
                        </li>
                        <li><a href="#">Privacy</a>
                        </li>
                        <li><a href="#">Support</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top">
                <div class="col-md-6">
                    <div class="copyright text-sm font-weight-bold text-center text-md-left">
                        &copy; 2018 <a href="https://webpixels.io/" class="font-weight-bold" target="_blank">Webpixels</a>. All rights reserved.
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="https://dribbble.com/webpixels" target="_blank">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="https://instagram.com/webpixelsofficial" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/webpixels" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://facebook.com/webpixels" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


  <?php wp_footer(); ?>



</body>

</html>
