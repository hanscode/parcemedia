<section class="slice slice-lg bg-secondary">
    <div class="container" id="ajax">
      <?php

            $posts = get_posts(array(
                'posts_per_page'	=> -1,
                'post_type'			=> 'post'
            ));

            if ($posts): ?>

            	<div class="row row-grid">

            	<?php foreach ($posts as $post):

                    setup_postdata($post);

                    ?>
                    <div class="col-lg-4 mb-5">
                      <div class="card shadow-sm shadow--hover">
                          <img alt="Image placeholder" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(),'full')); ?>" class="card-img-top">
                          <div class="card-body py-5 text-center">
                              <a href="<?php the_permalink(); ?>" class="h5 lh-150"><?php the_title(); ?></a>
                              <h6 class="text-muted mt-4 mb-0"><?php echo get_the_date( 'F j, Y' ); ?></h6>
                          </div>
                      </div>
                  </div>

            	<?php endforeach; ?>

            	</div><!--/.row -->

            	<?php wp_reset_postdata(); ?>

    <?php endif; ?>
    <!-- Load more -->
    <div class="mt-lg text-center">
      <?php load_more_button(); ?>
        <!--<a href="#" class="btn btn-dark btn-circle shadow">Load more</a>-->
    </div>
    </div><!--/.container-->
</section>