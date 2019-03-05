<section class="slice slice-lg" id="sct_coaching">

    <div class="container">
        <div class="mb-md text-center">
          <?php if (get_sub_field('coach_section_title')): ?>
            <h3 class="h3 mt-5"><?php the_sub_field('coach_section_title'); ?></h3>
          <?php endif; ?>
            <?php if (get_sub_field('coach_section_description')): ?>
              <div class="fluid-paragraph text-center mt-4">
                  <p class="lead lh-180"><?php the_sub_field('coach_section_description'); ?></p>
              </div>
            <?php endif; ?>
        </div>

        <?php
          $rows = get_sub_field('coach_features_list'); // get all rows

          if ($rows) {
            echo '<div class="row">';

            foreach($rows as $row) {
              echo '
              <div class="col-lg-4 mb-5">
                  <div class="d-flex align-items-start">
                      <div class="icon icon-lg icon-shape icon-' . $row['coach_feature_icon']['coach_icon_color'] . ' rounded-circle">
                          ' . $row['coach_feature_icon']['coach_icon_code'] . '
                      </div>
                      <div class="icon-text pl-4">
                          <h5>' . $row['coach_feature_title'] . '</h5>
                          <p class="mb-0">' . $row['coach_feature_description'] . '</p>
                      </div>
                  </div>
              </div>
              ';
            }

            echo '</div>'; //.row
          }

        ?>
    </div>
</section>