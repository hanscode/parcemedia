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
    </div>
</section>