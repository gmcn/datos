<div class="container-fluid content__wrapper">
  <div class="container-fluid content">
    <!-- <div class="row"> -->
      <div class="col-md-3 matchheight">
        <?php echo the_content() ?>
      </div><!-- /.col-md-3 -->
      <div class="col-md-9 contactform matchheight">
        <p>
          Send us a message
        </p>
        <?php echo do_shortcode('[formidable id=2]'); ?>
      </div><!-- /.col-md-9 -->
    <!-- </div> -->
  </div>
</div>
