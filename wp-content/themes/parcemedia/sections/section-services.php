<section id="sct_services" class="slice">
  <div class="container">
  <?php
  //Variables
  $rows = get_sub_field('services_list'); // get all the rows

  if ($rows) {
                  echo '<div class="row">';

                  foreach ($rows as $row) {

                    $highlight = ($row['highlight_block'] == 'yes') ? 'bg-gradient-primary shadow-primary border-primary' : 'shadow' ;
                    $btn = ($row['highlight_block'] == 'yes') ? 'btn-white' : 'btn-dark' ;
                    $title = ($row['highlight_block'] == 'yes') ? '<h2 class="text-white">' . $row['service_name'] .'</h2>' : ' ' ;
                    $textcolor = ($row['highlight_block'] == 'yes') ? 'text-white' : ' ' ;

                      echo '<div class="col-lg-3 mb-5 mb-lg-0">
                              <div data-animate-hover="1" data-toggle="hidden">
                                <div class="card ' . $highlight .' animate-this">
                                  <div class="py-5 text-center">
                                      <img alt="image placeholder" src="'. get_template_directory_uri() . '/assets/img/icons/dusk/svg/' . $row['service_icon'] . '.svg" alt="' . $row['service_icon'] . '">
                                  </div>
                                  <div class="px-4 pb-5 text-center">';

                                    if ($row['service_link']) {
                                      echo '<a href="' . $row['service_link'] . '" class="btn btn-sm '. $btn .' btn-circle scroll-me"> ' . $row['service_name'] .'</a>';
                                    } else {
                                      echo $title;
                                    }
                                  echo'
                                    <p class="'. $textcolor . ' mt-4">' . $row['service_description'] .'</p>
                                  </div>
                                </div>
                              </div>
                           </div>'; //.col
                  }
                  echo '</div>'; //.row
              }

  ?>

      <!--<div class="row">
            <div class="col-lg-3 mb-5 mb-lg-0">
                <div data-animate-hover="1" data-toggle="hidden">
                    <div class="card bg-gradient-primary shadow-primary border-primary animate-this">
                        <div class="py-5 text-center">
                            <img alt="Image placeholder" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/comments.svg" class="img-saturate" style="width: 100px;">
                        </div>
                        <div class="px-4 pb-5 text-center">
                          <h2 class="text-white">Services</h2>
                            <a href="<?php echo get_template_directory_uri(); ?>/pages/pages-landing.html" class="btn btn-sm btn-white btn-circle">Social Media</a>
                            <p class="text-white mt-4">Let's get started with one of these digital marketing services.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-5 mb-lg-0">
                <div data-animate-hover="1" data-toggle="hidden">
                    <div class="card shadow animate-this">
                        <div class="py-5 text-center">
                            <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/details-popup.svg" class="img-saturate" style="width: 100px;">
                        </div>
                        <div class="px-4 pb-5 text-center">
                            <a href="<?php echo get_template_directory_uri(); ?>/pages/pages-secondary.html" class="btn btn-sm btn-dark btn-circle">Social Media Coaching</a>
                            <p class="mt-4">Inner pages templates designed to cover a large number of purposes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-5 mb-lg-0">
                <div data-animate-hover="1" data-toggle="hidden">
                    <div class="card shadow animate-this">
                        <div class="py-5 text-center">
                            <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/list.svg" class="img-saturate" style="width: 100px;">
                        </div>
                        <div class="px-4 pb-5 text-center">
                            <a href="<?php echo get_template_directory_uri(); ?>/pages/pages-account.html" class="btn btn-sm btn-dark btn-circle">Social Media Consulting</a>
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
                            <a href="<?php echo get_template_directory_uri(); ?>/pages/pages-shop.html" class="btn btn-sm btn-dark btn-circle">Social Ads Management</a>
                            <p class="mt-4">A complete e-commerce flow to integrate your online shop fast and easy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fluid-paragraph text-center mt-5">
            <p><strong class="text-primary">*Good to know!</strong> You are not limited to the examples we've built. We have the liberty to choose any of the page layouts and components from the package and create your own version.</p>
        </div>-->
    </div>
</section>