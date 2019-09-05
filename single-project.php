<?php get_header();
    
    if (have_posts()): while (have_posts()): the_post();

        get_template_part('template-parts/project/project', 'display');

    endwhile; wp_reset_postdata(); endif;

?>

<?php get_footer() ;