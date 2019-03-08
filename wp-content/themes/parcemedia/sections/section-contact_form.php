<section id="sct_contact_form" class="slice slice-lg">
    <div class="container">
        <div class="row row-grid justify-content-center align-items-center">
            <div class="col-lg-6">
              <?php
              $shortcode = get_sub_field('contact_form_shortcode');
              echo do_shortcode($shortcode);
              ?>
            </div>
        </div>
    </div>
</section>