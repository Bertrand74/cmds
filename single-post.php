<?php get_header(); 

    if (have_posts()): while (have_posts()): the_post(); ?>

          <div class="d-flex m-5 single-post__news justify-content-center">
            <div class=" p-5 text-center"><?php the_content(); ?></div>
          </div>  

    <?php endwhile;

    wp_reset_postdata();

endif;

get_footer();