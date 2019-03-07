<?php
$bg = get_sub_field('story_bg');
?>
<section class="slice slice-lg bg-dark bg-cover bg-size--cover section-story" style="background-image: url('<?php echo $bg['url']; ?>'">
    <span class="mask bg-black-color opacity-7"></span>
    <div class="container">
        <div class="row row-grid">
            <div class="col-lg-6">
                <h4 class="text-white mb-4"><?php the_sub_field('story_title'); ?></h4>
                <p class="lead text-light lh-180 mb-4"><?php the_sub_field('story_legend'); ?></p>
            </div>
        </div>
    </div>
</section>