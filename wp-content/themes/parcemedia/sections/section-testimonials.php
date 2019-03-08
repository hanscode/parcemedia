<section class="slice slice-lg">
    <div class="container">
        <div class="mb-md text-center">
            <h3 class="heading h2"><?php the_sub_field('sct_title_testimonial'); ?></h3>
            <div class="fluid-paragraph mt-3">
                <p class="lead"><?php the_sub_field('sct_description_testimonial'); ?></p>
            </div>
        </div>
        <?php
          $rows = get_sub_field('quotes'); // get all rows

          if ($rows) {
            echo '<div class="row row-grid">';

            foreach($rows as $row) {
              echo '
              <div class="col-lg-6">
                <div class="card border-0" data-animate-hover="1">
                    <div class="animate-this">
                        <img alt="Image placeholder" class="rounded z-depth-3 img-fluid" src="'. $row['quote_image']['url'] .'">
                    </div>
                    <div class="pt-4">
                        <blockquote class="blockquote">
                            <span class="quote"></span>
                            <div class="quote-text">
                                <p class="font-italic lh-170">'. $row['block_quote'] .'</p>
                                <footer class="blockquote-footer">'. $row['quote_source'] .' <cite title="Source Title">'. $row['quote_source_title'] .'</cite>
                                </footer>
                            </div>
                        </blockquote>
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