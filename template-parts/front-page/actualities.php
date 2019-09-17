<?php
if (!get_theme_mod('CMDS_theme_actualities_active')) : 
?>

<div class="container" >
    <div class="row">
        <div class="actualities col-12 mt-4">
            <h2 class="actualities__title">Actualités</h2>
        </div> 
    </div>    
</div>
    

<div class="container-fluid">
  <div class="row justify-content-center">


      <?php 

        $args = [
            'post_type' => 'post',
        /* 'posts_per_page' => get_theme_mod('CMDS_theme_actualities_numbers'), */
            'posts_per_page' => 6,
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
  </div>
</div>

<?php endif; ?>