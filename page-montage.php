<?php get_header() ;?>

 
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
   <div class="single-post__assembly d-flex ">
   <div><?php the_content(); ?></div>
    <?php
    endwhile; endif; ?>

    <img src="<?= get_the_post_thumbnail_url(); ?>" alt="">
   </div> 

<?php get_footer() ; ?>