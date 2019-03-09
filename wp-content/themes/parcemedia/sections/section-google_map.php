<section>
  <?php $coordinates = get_sub_field('data_ coordinates'); ?>
    <div id="map-canvas" class="map-canvas" data-lat="<?php echo $coordinates['latitude'];  ?>" data-lng="<?php echo $coordinates['longitude']; ?>"></div>
</section>

<!-- Page plugins -->
<!-- Google maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBuyKngB9VC3zgY_uEB-DKL9BKYMekbeY"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/autosize/dist/autosize.min.js"></script>