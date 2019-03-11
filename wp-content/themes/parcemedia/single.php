<?php get_header(); ?>

  <!-- Page Content -->

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <section class="slice slice-lg">
              <div class="container pt-lg">
                  <div class="row justify-content-center">
                      <div class="col-md-9">
                          <h1 class="lh-150 mb-3"><?php the_title(); ?></h1>
                          <p class="lead text-muted mb-0"><?php ( ! has_excerpt() ) ? '' : the_excerpt(); ?></p>
                          <div class="media align-items-center mt-5">
                            <?php $user_id = get_the_author_meta('user_email'); ?>
                              <img alt="Image placeholder" src="<?php echo esc_url( get_avatar_url( $user_id ) ); ?>" class="avatar avatar-sm mr-3">
                              <div class="media-body">
                                  <span class="h6 mb-0"><?php the_author(); ?></span>
                                  <span class="text-small text-muted text-capitalize"><?php echo get_the_date( 'F j, Y' ); ?></span>
                              </div>
                          </div>
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
                        <hr>

                        <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) {
                                      comments_template();
                                }
                        ?>
                      </div>
                  </div>
              </div>
          </section>

          <?php get_template_part('partials/related', 'posts'); ?>


    	<?php endwhile; else : ?>

    	  <p><?php _e( 'Sorry, no results found.'); ?></p>

    	<?php endif; ?>

<?php get_footer(); ?>