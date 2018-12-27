<div class="news p-3 mt-5">
    <h2 class="news__title text-center">Actualités </h2>
    <div class="news__content">

    <?php 

    $args = [
        'post-type' => 'post',
        'posts-per_page' => 6,
        'order' => 'DESC',
        'order_by' => 'date'
    ];

    $our_articles = new WP_Query ($args);
    if ( $our_articles->have_posts() ) : while ( $our_articles->have_posts() ) : $our_articles->the_post();

        get_template_part('template-parts/actualities/actualities' , 'display');

endwhile;
    
    wp_reset_postdata();

endif;

    ?>