<?php

$intro_text = get_field('intro_text');

 ?>


<div class="container-fluid content-casestudies">

<div class="row intro-industry">

  <div class="col-md-6 wow fadeInLeft">

    <?php if( is_tax( 'casestudies_category' ) ) : ?>

      <h1>Case Studies</h1>
      <h2>See who we’re helping and what we’ve done.</h2>

    <?php endif; ?>

    <?php if( is_tax( 'testimonials_category' ) ) : ?>

      <h1>Testimonials</h1>
      <h2>Don't take our word for it, ask them.</h2>

    <?php endif; ?>

  </div>

  <div class="col-md-6 wow fadeInRight">

    <p class="filter">
      Filtering Options
    </p>

    <?php if( is_tax( 'casestudies_category' ) ) : ?>

    <?php $taxonomies = get_terms( 'casestudies_category', array( 'orderby' => 'id', 'order' => 'DESC', 'hide_empty' => 1, 'category__not_in' => 5 ) );
    if ( ! empty( $taxonomies ) && ! is_wp_error( $taxonomies ) ){
        echo '<ul class="tags">';
        foreach ( $taxonomies as $taxonomy ) {


            //echo '<li class="' . $taxonomy->name .'"><a href="/projects_category/' . $taxonomy->slug . '">' . $taxonomy->name . '</a></li>';

            echo '<li class="';
            echo $taxonomy->name;
            echo '"><a href="/casestudies_category/';
            echo $taxonomy->slug;
            echo '">';
            if ($taxonomy->slug == 'case-studies') {
              echo "All";
            } else {
              echo $taxonomy->name;
            }
            echo '</a></li>';
        }
        echo '</ul>';
    } ?>

    <?php endif; ?>

    <?php if( is_tax( 'testimonials_category' ) ) : ?>

    <?php $taxonomies = get_terms( 'testimonials_category', array( 'orderby' => 'title', 'order' => 'DESC', 'hide_empty' => 1, 'category__not_in' => 5 ) );
    if ( ! empty( $taxonomies ) && ! is_wp_error( $taxonomies ) ){
        echo '<ul class="tags">';
        foreach ( $taxonomies as $taxonomy ) {


            //echo '<li class="' . $taxonomy->name .'"><a href="/projects_category/' . $taxonomy->slug . '">' . $taxonomy->name . '</a></li>';

            echo '<li class="';
            echo $taxonomy->name;
            echo '"><a href="/testimonials_category/';
            echo $taxonomy->slug;
            echo '">';
            if ($taxonomy->slug == 'testimonials') {
              echo "All";
            } else {
              echo $taxonomy->name;
            }
            echo '</a></li>';
        }
        echo '</ul>';
    } ?>

    <?php endif; ?>

    <!--

    <form action="/" method="get">
    <div class="container">
      <input type="text" value="" placeholder="Search.." name="s">
      <button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/images/search.png"  /></button>
    </div>

  </form>

  -->

  </div>

</div>
