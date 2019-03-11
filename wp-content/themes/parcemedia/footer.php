</main>
<footer class="footer footer-dark bg-gradient-primary">
    <div class="container">
        <div class="row pt-md">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <a href="../index.html">
                  <?php if (get_theme_mod( 'parce_media_footer_logo' )): ?>
                      <img src="<?php echo get_theme_mod( 'parce_media_footer_logo' );  ?>" alt="Footer logo" style="height: 70px;">
                      <?php else: ?>
                        <img alt="Image placeholder" src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/logo.svg" style="height: 70px;">
                  <?php endif; ?>

                </a>
                <p class="text-sm mt-4"><?php echo get_theme_mod( 'text_setting' ); ?></p>
            </div>

                <?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
                  <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
                <?php endif; ?>
                <!-- .first .widget-area -->

                <?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
                  <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
                <?php endif; ?>
                <!-- .second .widget-area -->

                <?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
                  <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
                <?php endif; ?>
                <!-- .third .widget-area -->

        </div>
        <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top">
            <div class="col-md-6">
                <div class="copyright text-sm font-weight-bold text-center text-md-left">
                  <?php
                  $all_rights = get_field_object('field_5c8484d7a6192');
                  $translation = get_field('enable_theme_translation', 'option');
                  ?>
                    &copy; <?php echo date('Y'); ?> <a href="<?php echo get_bloginfo('url'); ?>" class="font-weight-bold" target="_blank">Parce Media, LLC</a>.
                    <?php if ( $translation == 'on' && get_field('all_rights_reserved', 'option')): ?>
                      <?php the_field('all_rights_reserved', 'option'); ?>
                    <?php else: ?>
                      <?php echo $all_rights['label'] ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6">
                <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                    <?php parce_media_social_links(); ?>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
<?php
if (get_field('additional_javascript', 'option')) {
  echo '<script>';
    the_field('additional_javascript', 'option');
  echo '</script>'; 
}
?>
</body>
</html>