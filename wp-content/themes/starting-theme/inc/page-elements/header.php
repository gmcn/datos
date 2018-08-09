<?php

$header_bg = get_field('page_header_img');

 ?>

 <?php if ($header_bg) : ?>

 <div class="headerimg">
   <img src="<?php echo $header_bg; ?>" alt="<?php the_title(); ?>" />
 </div>

<?php endif; ?>
