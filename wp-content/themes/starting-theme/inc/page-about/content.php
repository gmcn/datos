<?php

$subtitle = get_field('sub_title');

 ?>

<div class="container-fluid content__wrapper">
  <div class="container-fluid content-about">
    <!-- <div class="row"> -->
      <div class="col-md-3 wow fadeInLeft">
        <h2><?php echo $subtitle ?></h2>
      </div><!-- /.col-md-3 -->
      <div class="col-md-8 copy wow fadeInRight">
        <?php echo the_content() ?>
      </div><!-- /.col-md-9 -->
    <!-- </div> -->
  </div>
</div>
