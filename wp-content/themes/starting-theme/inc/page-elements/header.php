<?php

$header_bg = get_field('page_header_img');

 ?>



 <div class="headerimg">
   <?php if ($header_bg) : ?>
     <img src="<?php echo $header_bg; ?>" alt="<?php the_title(); ?>" />
   <?php endif; ?>
 </div>
