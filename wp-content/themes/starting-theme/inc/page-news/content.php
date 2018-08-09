<?php

$page_colour = get_field('page_colour');
$column_1 = get_field('column_1');
$column_2 = get_field('column_2');
$video = get_field('video');

 ?>
  <div class="container-fluid content-news">

    <div class="row intro-industry">

      <div class="col-md-7 wow fadeInLeft">

        <?php if (!is_singular( 'casestudies' )) : ?>

          <div class="date">
            <?php echo get_the_date(); ?>
          </div>

        <?php endif; ?>

        <h1><?php the_title() ?></h1>

        <div class="row">
          <div class="col-md-6 column_1">

            <?php echo $column_1 ?>
          </div>
          <div class="col-md-6 column_2">
            <?php echo $column_2 ?>
          </div>
        </div>

      </div>

      <div class="col-md-5 wow fadeInRight">

        <?php if ($video): ?>

          <iframe width="100%" height="400px" src="https://www.youtube.com/embed/<?php echo $video ?>?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

        <?php endif; ?>


        <?php if( have_rows('gallery') ): ?>

        	<div class="row">

        	<?php while( have_rows('gallery') ): the_row();

        		// vars
        		$image = get_sub_field('image');

        		?>

        		<div class="col-xs-6 col-sm-3 col-md-4 col-lg-3 gallery">
              <a class="fancybox" rel="group" href="<?php echo $image ?>" title="<?php the_title() ?>">
                <div class="gallery_wrapper" style="background: url(<?php echo $image ?>) center center; background-size: cover;"> </div>
              </a>
            </div>

        	<?php endwhile; ?>

        </div>

        <?php endif; ?>


      </div>

    </div>
