<section class="slice slice-lg bg-secondary" data-delimiter-before="1" data-delimiter-after="1">
    <div class="container">
        <div class="mb-md text-center">
            <h3 class="heading h2">
              <?php
                $related_title = get_field_object('field_5c8482abd7b9e');
                $related_description = get_field_object('field_5c8482c0d7b9f');
                $translation = get_field('enable_theme_translation', 'option');

                if ($translation == 'on' && get_field('you_may_also_like', 'option')):
              ?>
              <?php the_field('you_may_also_like', 'option'); ?>

              <?php else: ?>

                <?php echo $related_title['label'] ?>

              <?php endif; ?>
              </h3>
            <div class="fluid-paragraph mt-3">

                <p class="lead">
                  <?php if ( $translation == 'on' && get_field('related_post_description', 'option')): ?>
                      <?php the_field('related_post_description', 'option'); ?>
                  <?php else: ?>
                      <?php echo $related_description['label'] ?>
                  <?php endif; ?>
                </p>
            </div>
        </div>

        <!--Start Related Posts-->
        <?php
        // Build our basic related post query arguments
        $related_query_args = array(
            'posts_per_page' => 3, // Number of related posts to display
            'post__not_in' => array($post->ID), // Ensure that the current post is not displayed
            'orderby' => 'rand', // Randomize the results
        );
        // Initiate the custom query
        $related_query = new WP_Query($related_query_args);

        // Run the loop and output data for the results
        if ($related_query->have_posts()) : ?>
        <div class="row row-grid">
        	<?php while ($related_query->have_posts()) : $related_query->the_post(); ?>

                <div class="col-lg-4">
                    <div class="card shadow-sm shadow--hover">
                        <img alt="Image placeholder" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>" class="card-img-top">
                        <div class="card-body py-5 text-center">
                            <a href="<?php the_permalink(); ?>" class="h5 lh-150"><?php the_title(); ?></a>
                            <h6 class="text-muted mt-4 mb-0 text-capitalize"><?php echo get_the_date('F j, Y'); ?></h6>
                        </div>
                    </div>
                </div>

        	<?php endwhile; ?>
        <?php else : ?>
        		<p>Sorry, no related articles to display.</p>
            </div><!--/.row-->
        <?php endif;
        // Reset postdata
        wp_reset_postdata();
        ?>
        <!--End Related Posts-->

    </div><!--/.container -->
</section>