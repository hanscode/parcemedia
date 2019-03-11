<?php get_header(); ?>

  <!-- Page Content -->

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <section class="slice slice-lg pb-2">
              <div class="container pt-lg">
                  <div class="row justify-content-center">
                      <div class="col-md-9">
                          <h1 class="lh-150 mb-3 text-center"><?php the_title(); ?></h1>
                      </div>
                  </div>
              </div>
          </section>
          <?php
          /* grab the url for the full size featured image */
          $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
          ?>
            <?php if (has_post_thumbnail()): ?>
              <section class="bg-cover bg-size--cover" style="height: 600px; background-image: url('<?php echo esc_url($featured_img_url); ?>'); background-position: top center;"></section>
            <?php endif; ?>

          <section class="slice">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-9">
                        <!-- Article body -->
                        <article>
                          <?php the_content(); ?>
                        </article>
                      </div>
                  </div>
              </div>
          </section>


    	<?php endwhile; else : ?>

    	  <p><?php _e( 'Sorry, no results found.'); ?></p>

    	<?php endif; ?>

<?php get_footer(); ?>