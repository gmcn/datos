<div class="container-fluid">
  <div class="row">

    <?php
    $i = 0;
    while ($wp_query->have_posts()) : $wp_query->the_post();
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

    $product_type = get_field('product_type');
    ?>

    <div class="col-md-6 casestudies-entry wow fadeinUp" style="background: url(<?php echo $thumb[0] ?>); background-size: cover">
      <div class="hover">
        <div class="row vert-align">
          <div class="col-md-5">
            <h3><?php the_title() ?></h3>
          </div>
          <div class="col-md-7">
            <a href="<?php the_permalink() ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/images/read-casestudy.png" />Click here to view the case study
            </a>
          </div>
        </div>
      </div>
        <h2><?php the_title(); ?></h2>
        <h4 class="<?php echo $product_type['value']; ?>">Season <?php echo $product_type['label']; ?></h4>
    </div>

    <?php $i++; endwhile; ?>

  </div>
</div>

<?php the_posts_pagination( array( 'mid_size'  => 2 ) ); ?>
