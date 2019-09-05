<?php get_header() ;?>

 
  <?php if (have_posts()) : while (have_posts()) : the_post();  ?>

    <div class="single-post__desk d-flex justify-content-around"> <?php the_content()?> 

      <?php endwhile; endif; ?>

      <img src="<?= get_the_post_thumbnail_url(); ?>" alt="">

   </div>

<?php get_footer() ; ?>