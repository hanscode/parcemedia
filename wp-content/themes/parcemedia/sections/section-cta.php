<section class="slice slice-lg bg-secondary">

  <?php   //Vars
    $cta_link = get_sub_field('cta_button');
    $cta_support = get_sub_field('cta_support');
  ?>

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-8 text-center">
                <h3 class="font-weight-400"><?php the_sub_field('cta_message'); ?></h3>
                <div class="mt-5">
                    <a href="<?php echo $cta_link['url']; ?>" class="btn btn-primary btn-circle btn-translate--hover px-4"><?php echo $cta_link['title']; ?></a>
                    <?php if (get_sub_field('cta_support')): ?>
                      <a target="_blank" href="mailto:<?php echo $cta_support['support_email']; ?>" class="btn btn-link"><?php echo $cta_support['support_link_title']; ?></a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>