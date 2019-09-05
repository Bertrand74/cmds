<?php get_header(); ?>

   <div class="main">

    <?php
        get_template_part('template-parts/front-page/carousel') ; 

        get_template_part('template-parts/front-page/description') ; 
        
        get_template_part('template-parts/front-page/actualities') ; 

        get_template_part('template-parts/front-page/projects') ;   
        ; ?>
    </div>
    <?php get_footer();?>