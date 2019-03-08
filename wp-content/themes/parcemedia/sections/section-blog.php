<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'paged'          => $paged
  );
  $query = new WP_Query($args);

?>

<section class="slice slice-lg bg-secondary">

  <div class="container" id="ajax">

      <div class="row row-grid">

        <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

            <div class="col-lg-4 mb-5">
              <div class="card shadow-sm shadow--hover">
                  <a href="<?php the_permalink(); ?>"><img alt="Image placeholder" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>" class="card-img-top"></a>
                  <div class="card-body py-5 text-center">
                      <a href="<?php the_permalink(); ?>" class="h5 lh-150"><?php the_title(); ?></a>
                      <h6 class="text-muted mt-4 mb-0"><?php echo get_the_date('F j, Y'); ?></h6>
                  </div>
              </div>
          </div>

          <?php endwhile; endif; wp_reset_postdata(); ?>

      </div><!--/.row -->

  </div><!--/.container-->
    <!-- Load more -->
    <div class="mt-lg text-center">
      <?php load_more_button(); ?>
        <!--<a href="#" class="btn btn-dark btn-circle shadow">Load more</a>-->
    </div>
</section>