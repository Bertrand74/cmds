<h2 class="news__title mb-3 text-center"> Réalisations </h2>
  <div class="cards d-flex justify-content-around flex-wrap">

    <?php 
    
    $args= [
        'post_type' => 'project',
        'cat' => '',
        'posts_per_page' => 6,
        'order' => 'DESC',
        'order_by' => 'date'
    ];

$our_articles = new WP_Query($args);

if ($our_articles->have_posts()) : while ( $our_articles->have_posts()) : $our_articles->the_post();

    get_template_part('template-parts/front-page/project'); 

endwhile;
wp_reset_postdata();

endif; 

?>

    

  </div>
  </div>