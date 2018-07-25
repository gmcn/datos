<?php

$hero_bg = get_field('hero_bg');
$title = get_field('title');
$paragraph = get_field('paragraph');

?>


<div class="container-fluid hero" style="background: url(<?php echo $hero_bg ?>) top center; background-size: cover;">
  <div class="container">

    <h1 class="wow fadeInDown"><?php echo $title ?></h1>
    <p class="wow fadeInDown">
      <?php echo $paragraph ?>
    </p>

    <?php if( have_rows('products') ): ?>

    	<div class="row products">

    	<?php while( have_rows('products') ): the_row();

    		// vars
    		$productTitle = get_sub_field('title');
    		$productIcon = get_sub_field('icon');
    		$productLink = get_sub_field('link');

    		?>

    		<div class="col-xs-6 col-sm-4 col-md-2 <?php echo $productTitle ?> product wow fadeInUp">


          <h2 class=""><?php echo $productTitle ?></h2>
          <img src="<?php echo $productIcon ?>" alt="<?php echo $productTitle ?>" />
          <a href="<?php echo $productLink ?>">more info ></a>


    		</div>

    	<?php endwhile; ?>

    </div>

    <?php endif; ?>

  </div><!-- /.container -->
</div><!-- /.container-fluid -->
