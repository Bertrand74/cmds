<?php get_header(); ?>

<div class="main">
    <section id="carousel">
        <?php get_template_part('template-parts/front-page/carousel') ; ?>
    </section>
        <i class="fa fa-arrow-down mt-3" aria-hidden="true"></i>
    <section id="description">
        <?php get_template_part('template-parts/front-page/description') ; ?>
   </section>
</div>

<?php get_footer(); ?>