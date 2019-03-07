<section class="slice slice-lg bg-secondary">
    <div class="container">
        <div class="mb-lg text-center">
            <h3><?php the_sub_field('sct_benefits_title'); ?></h3>
            <div class="fluid-paragraph text-center mt-4">
                <p class="lead lh-180"><?php the_sub_field('sct_benefits_description'); ?></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
              <?php
              //Variables
              $rows = get_sub_field('benefits'); // get all the rows

              if ($rows) {
                              echo '<div class="row row-grid">';

                              foreach ($rows as $row) {

                                echo '
                                <div class="col-lg-6">
                                    <div class="px-5">
                                        <div class="icon text-primary mb-3">
                                            <img alt="Image placeholder" src="' . $row['benefit_icon']['url'] . '" class="img-fluid">
                                        </div>
                                        <h5 class="heading h5">'. $row['benefit_title'] .'</h5>
                                        <p>'. $row['benefit_description'] .'</p>
                                    </div>
                                </div>
                                ';

                              }
                              echo '</div>'; //.row
                          }

              ?>
            </div><!-- /.col-lg-10-->
        </div>
    </div>
</section>