<?php

$intro_text = get_field('intro_text');

 ?>


<div class="container-fluid content-news-parent">

<div class="row intro-industry">

  <div class="col-md-6 wow fadeInLeft">

    <h1>News</h1>

    <h2>Stay up to date with the latest in the world of Datos.</h2>

  </div>

  <div class="col-md-6 wow fadeInRight">

    <p class="filter">
      News Filtering Options
    </p>

    <ul class="list_categories">
      <li>
        <a href="/news">Latest</a>
      </li>
      <?php wp_list_categories( array(
          'orderby'    => 'name',
          'title_li' => '',
          'show_count' => false,
          'exclude'    => array( 10 )
      ) ); ?>
      <div class="clear">

      </div>
    </ul>

    <!-- <form action="/" method="get">
    <div class="container">
      <input type="text" value="" placeholder="Search.." name="s">
      <button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/images/search.png"  /></button>
    </div>

  </form> -->

  </div>

</div>
