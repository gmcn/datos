<?php

$args = array(
    'post' => 'posts',
    'posts_per_page' => 12,
    'cat' => get_query_var('cat'),
    'orderby' => 'date',
    'paged' => $paged,
    'post_status' => 'publish',

);

$the_query = new WP_Query( $args ); ?>


<?php if ( $the_query->have_posts() ) : ?>

  <div class="container-fluid">
    <div class="row">

    	<!-- the loop -->
    	<?php $i = 0; while ( $the_query->have_posts() ) : $the_query->the_post();

      $thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

      $cat_name = get_category(get_query_var('cat'))->name;

      $categ = get_the_category();

      ?>


        <div class="col-sm-6 col-md-4 col-lg-3 news-entry wow <?php if ($i % 2) : ?>fadeinLeft <?php else : ?> fadein<?php endif; ?>">
          <div class="wrapper <?php

          foreach((get_the_category()) as $category){ echo $category->slug . " "; }

          ?>" style="background: url(<?php echo $thumb ?>); background-size: cover; height: 100%;">
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

        </div>
    	<?php $i++; endwhile; ?>
    	<!-- end of the loop -->

    </div>
  </div>

  <?php if ($the_query->max_num_pages > 1) : // custom pagination  ?>
      <?php
      $orig_query = $wp_query; // fix for pagination to work
      $wp_query = $custom_query;
      ?>

      <?php if (function_exists("pagination")) : ?>

          <div class="pagination">

            Page

          <?php echo get_previous_posts_link( '<' ); ?>

            <?php echo pagination($the_query->max_num_pages); ?>

            <?php echo get_next_posts_link( '>', $the_query->max_num_pages ); ?>

          </div>

        <?php endif; ?>

      <?php
      $wp_query = $orig_query; // fix for pagination to work
      ?>
  <?php endif; ?>



	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
