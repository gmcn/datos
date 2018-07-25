<div class="container-fluid testimonial">
    <div class="vert-align">
      <?php

    /*
    *  Loop through post objects (assuming this is a multi-select field) ( setup postdata )
    *  Using this method, you can use all the normal WP functions as the $post object is temporarily initialized within the loop
    *  Read more: http://codex.wordpress.org/Template_Tags/get_posts#Reset_after_Postlists_with_offset
    */

    $post_objects = get_field('select_testimonials');

    if( $post_objects ): ?>
        <ul class="testimonials">
          <li class="bx-clone">
            <div class="vert-align">
            <h5>What customers say about Season</h5>
            <a href="/casestudies">view all testimonials ></a>
            </div>
          </li>
        <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>
            <li>
              <h5><?php the_title(); ?></h5>
              <p>
                <?php the_excerpt(); ?>
              </p>
              <a href="<?php the_permalink(); ?>">view their story ></a>
            </li>
        <?php endforeach; ?>
        </ul>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif;

    ?>
    </div> <!-- /.vert-align -->
</div><!-- /.container-fluid -->
