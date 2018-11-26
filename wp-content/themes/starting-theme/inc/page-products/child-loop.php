<hr />

<?php if ( is_page() && $post->post_parent ) : ?>

<?php else : ?>

  <div class="cta__wrapper">

    <?php $postid = get_the_ID(); if ( $postid != 694) : ?>

      <span class="product__cta">Please click on a product below to find out more.</span>

    <?php endif; ?>
    
  </div>

<?php endif ?>

<?php
$args = array(
'post_parent' => $post->ID,
'post_type' => 'page',
'orderby' => 'menu_order'
);

$child_query = new WP_Query( $args );

?>

  <?php
  $i = 0;

  while ( $child_query->have_posts() ) : $child_query->the_post();

  $thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  $intro_main_copy = get_field('intro_main_copy');
  $intro_sub_paragraph = get_field('intro_sub_paragraph');

  ?>

  <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 product wow <?php if ($i % 2) : ?>fadeInDown <?php else : ?>fadeInUp <?php endif; ?> ">

    <a href="<?php echo the_permalink() ?>">
      <img src="<?php echo $thumb ?>" alt="<?php the_title(); ?>"  />
    </a>

  </div> <!--/.col-md-2 -->

<?php $i++; endwhile; wp_reset_postdata(); ?>


<?php if( have_rows('product_selling_points') ): ?>

	<div class="row sellingpoints">

	<?php $i = 1; while( have_rows('product_selling_points') ): the_row();

		// vars
		$title = get_sub_field('title');
		$copy = get_sub_field('copy');

		?>

		<div class="col-md-4 wow fadeInUp sellingpoint">

      <h3><span><?php echo $i ?></span><?php echo $title; ?></h3>
      <?php echo $copy; ?>

		</div>

	<?php $i++; endwhile; ?>

	</ul>

<?php endif; ?>


<?php if( have_rows('support_information') ): ?>

	<div class="row">

	<?php $i = 0; while( have_rows('support_information') ): the_row();

		// vars
    $bg_img = get_sub_field('bg_img');
		$title = get_sub_field('title');
		$copy = get_sub_field('copy');

		?>

    <div class="col-sm-6 col-md-4 support wow fadeInDown">
      <div class="wrapper-support <?php echo $title ?>" style="background-image: url(<?php echo $bg_img ?>); background-size: cover;">
        <h3 class="<?php echo $title ?>"><?php echo $title ?></h3>
        <?php echo $copy ?>
      </div>
    </div>


	<?php $i++; endwhile; ?>

  </div>

<?php endif; ?>


</div><!-- /.container-fluid content -->
