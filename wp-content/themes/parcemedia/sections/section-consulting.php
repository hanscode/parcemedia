<section class="slice slice-xl bg-gradient-primary has-floating-items" id="sct_consulting">
    <a href="#sct_consulting" class="tongue tongue-up tongue-secondary scroll-me"><i class="fas fa-angle-up"></i></a>
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
              <?php if (get_sub_field('consulting_section_title')): ?>
                <h1 class="text-white strong-600"><?php the_sub_field('consulting_section_title'); ?></h1>
              <?php endif; ?>

                <div class="row justify-content-center mt-4">
                    <div class="col-lg-8">
                      <?php if (get_sub_field('consulting_section_description')): ?>
                        <p class="lead text-white">
                          <?php the_sub_field('consulting_section_description'); ?>
                        </p>
                      <?php endif; ?>
                        <div class="btn-container mt-5">
                          <?php
                          $action_btn = get_sub_field('consulting_action_button');
                          $more_btn = get_sub_field('consulting_more_button');
                          ?>
                          <?php if ($more_btn): ?>
                            <a href="<?php echo $more_btn['url']; ?>" target="_blank" class="btn btn-white btn-circle btn-translate--hover px-4 mr-lg-4"><?php echo $more_btn['title']; ?></a>
                          <?php endif; ?>
                            <?php if ($action_btn): ?>
                              <a href="<?php echo $action_btn['url']; ?>" target="_blank" class="btn btn-warning btn-circle btn-translate--hover px-4"><?php echo $action_btn['title']; ?></a>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container floating-items">
        <div class="floating-icon"><span></span>
            <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/add.svg" class="img-saturate" style="width: 50px;">
        </div>
        <div class="floating-icon"><span></span>
            <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/numbered-list.svg" class="img-saturate" style="width: 76px;">
        </div>
        <div class="floating-icon"><span></span>
            <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/comments.svg" class="img-saturate" style="width: 36px;">
        </div>
        <div class="floating-icon"><span></span>
            <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/bullish.svg" class="img-saturate" style="width: 76px;">
        </div>
        <div class="floating-icon"><span></span>
            <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/faq.svg" class="img-saturate" style="width: 46px;">
        </div>
        <div class="floating-icon"><span></span>
            <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/dusk/svg/email.svg" class="img-saturate" style="width: 36px;">
        </div>
    </div>
</section>