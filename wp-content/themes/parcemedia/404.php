<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
get_header();
?>

<?php
$not_title = get_field_object('field_5c8481cad7b9a');
$not_subtitle = get_field_object('field_5c848208d7b9b');
$not_text = get_field_object('field_5c84825bd7b9d');
$translation = get_field('enable_theme_translation', 'option');

?>

<!-- Page Content -->
  <section class="slice slice-lg">
      <div class="container pt-lg">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h6 class="text-uppercase ls-2 text-muted font-weight-700">
              <?php if ( $translation == 'on' && get_field('404_error', 'option')): ?>
                <?php the_field('404_error', 'option'); ?>
              <?php else: ?>
                <?php echo $not_title['label'] ?>
              <?php endif; ?>
          </h6>
            <h2 class="heading h1 mb-4">
              <?php if ( $translation == 'on' && get_field('oops_missing', 'option')): ?>
                <?php the_field('oops_missing', 'option'); ?>
              <?php else: ?>
                <?php echo $not_subtitle['label'] ?>
              <?php endif; ?>
            </h2>
            <p class="lead lh-180">
              <?php if ( $translation == 'on' && get_field('404_page_description', 'option')): ?>
                <?php the_field('404_page_description', 'option'); ?>
              <?php else: ?>
                <?php echo $not_text['label'] ?>
              <?php endif; ?>
            </p>
            <div class="mt-5 mx-auto">
              <a href="/contact" class="btn btn-primary btn-circle px-5 mr-lg-4">Contact us</a>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
  </section>


<?php get_footer(); ?>