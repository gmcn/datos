<div class="container-fluid related">
  <div class="row">
    <div class="col-md-3 related-news">

      <h3>News</h3>
      <?php

      $args = array(
          'post' => 'posts',
          'posts_per_page' => 1,
          'cat' => get_query_var('cat'),
          'orderby' => 'date',
          'post_status' => 'publish',

      );

      $the_query = new WP_Query( $args ); ?>


      <?php if ( $the_query->have_posts() ) : ?>

        <div class="container-fluid">
          <div class="row">

          	<!-- the loop -->
          	<?php while ( $the_query->have_posts() ) : $the_query->the_post();

            $thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

            ?>


              <div class="col-md-12 news-entry wow fadeinLeft <?php foreach((get_the_category()) as $category){ echo $category->slug; echo category_description($category); }?>" style="background: url(<?php echo $thumb ?>); background-size: cover">
                <div class="hover">
                  <div class="vert-align">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/read-more.jpg" alt="<?php the_title(); ?>"><br  />
                    <a href="<?php the_permalink() ?>">Click here to read more</a>
                  </div>
                </div>
                <div class="date">
                  <?php echo get_the_date('jS F Y'); ?>
                </div>
          		    <h2><?php the_title(); ?></h2>
              </div>
          	<?php endwhile; ?>
          	<!-- end of the loop -->

          </div>
        </div>



      	<?php wp_reset_postdata(); ?>

      <?php else : ?>
      	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>

    </div>
    <div class="col-md-9 featured-testimonials">

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
