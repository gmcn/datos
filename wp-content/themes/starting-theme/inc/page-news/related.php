<div class="container-fluid">
  <div class="row no-gutter">
    <div class="col-md-12 featured-testimonials">

      <?php

      $args = array(
          'post_type' => 'testimonials',
          'posts_per_page' => 3,
          'orderby' => 'date',
          // 'paged' => $paged,
          'post_status' => 'publish',

      );

      $the_query = new WP_Query( $args ); ?>

      <?php if ( $the_query->have_posts() ) : ?>

        <h3>Testimonials</h3>

      <?php
      while ($the_query->have_posts()) : $the_query->the_post();
      $video = get_field('video');
      $company_logo = get_field('company_logo');
      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
      ?>

      <div class="col-md-4 testimonial-entry wow fadeinUp">
        <div class="row">
          <div class="col-md-6 title">
            <div class="vert-align">
              <h2><?php the_title(); ?></h2>
              <a href="<?php the_permalink(); ?>">
                <?php if ($video) : ?>
                  <!-- Button trigger modal -->
                  <img src="<?php echo get_template_directory_uri(); ?>/images/play-icon.png"  />
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/book-icon.png"  />
                <?php endif; ?>
              </a>
              <p>
                <?php the_excerpt() ?>
              </p>
            </div>
          </div>
          <div class="col-md-6 no-gutter-left">
            <div class="wrapper" style="background: url(<?php echo $thumb[0] ?>) #000;">
              <div class="vert-align">
                <img src="<?php echo $company_logo ?>" alt="<?php the_title(); ?>" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php endwhile; wp_reset_postdata(); ?>

    <?php endif; ?>
    </div>
  </div>
</div>
