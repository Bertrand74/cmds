<?php get_header(); ?>

<div class="main">
    <section id="carousel">
        <?php get_template_part('template-parts/front-page/carousel') ; ?>
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a href="#description__anchor"  id="description__anchor" class="text-center"><i class="fa fa-arrow-down mt-5 mb-5" aria-hidden="true"></i></a>  
            </div>
        </div>       
    </div>
    
    <section id="description">
        <?php get_template_part('template-parts/front-page/description') ; ?>
   </section>
    <section id="skills">
        <?php get_template_part('template-parts/front-page/skills') ; ?>
    </section>
    <section id="actualities">
        <?php get_template_part('template-parts/front-page/actualities') ; ?>
    </section>
    <section id="galery">
        <?php get_template_part('template-parts/front-page/galery') ; ?>
    </section>
</div>

<?php get_footer(); ?>