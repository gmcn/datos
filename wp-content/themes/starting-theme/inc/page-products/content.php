<?php

$products_title = get_field('products_title');
$product_section_icon = get_field('product_section_icon');
$intro_text = get_field('intro_text');
$intro_sub_text = get_field('intro_sub_text');
$product_selling_points = get_field('product_selling_points');

 ?>
  <div class="container-fluid content products">

    <div class="row intro">
      <div class="col-md-2">

        <?php if ( is_page() && $post->post_parent ) : ?>

          <h1>Products</h1>

        <?php else : ?>

          <h1><?php echo the_title() ?></h1>

      <?php endif ?>

        <h2><?php echo $products_title ?></h2>

        <?php if ( is_page() && $post->post_parent ) : ?>

          <h1><?php echo the_title() ?></h1>

          <?php if ($product_section_icon): ?>
            <img class="icon" src="<?php echo $product_section_icon ?>" />
          <?php endif; ?>

      <?php endif ?>



      </div>
      <div class="col-md-4 col-md-offset-1 intro_text">
        <?php echo $intro_text ?>
      </div>
      <div class="col-md-4 intro_sub_text">
        <?php echo $intro_sub_text ?>
      </div>
    </div>
