<?php

$section_heading = get_field('section_heading');

 ?>


<div class="container-fluid industries">
  <div class="container">

    <h3><?php echo $section_heading; ?></h3>

    <?php if( have_rows('food_industries') ): ?>

    	<div class="row">

    	<?php $i = 0; while( have_rows('food_industries') ): the_row();

    		// vars
    		$industryTitle = get_sub_field('industry_title');
    		$link_to_more = get_sub_field('link_to_more');
    		$industry_bg = get_sub_field('industry_bg_image');

    		?>



    		<div class="col-xs-12 col-sm-6 col-md-3 industry wow <?php if ($i % 2) : ?>fadeInDown <?php else : ?> fadeInUp <?php endif; ?>">

          <div class="wrapper" style="background: url(<?php echo $industry_bg ?>); background-size: cover;">
            <div class="inner">
              <h4 class=""><?php echo $industryTitle ?></h4>

              <a href="<?php echo $link_to_more ?>">Click here to see more ></a>
            </div>
          </div>

    		</div><!-- /.industry -->

    	<?php $i++; endwhile; ?>

    </div>

    <?php endif; ?>

  </div><!-- /.container -->
</div><!-- /.container-fluid -->
