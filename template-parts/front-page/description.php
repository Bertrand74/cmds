<div class="container">
  <div class="row">
    <div class=" introduction__description">
      <h3 class="introduction__title">Qui sommes nous ?</h3>
    <?= get_theme_mod('CMDS_theme_description'); ?>
    </div>
    <div class="introduction__skills">
      <h3 class="introduction__title"> Nos domaines d'activités.</h3>
      <?php if (have_posts()) : while (have_posts()) : the_post(); 
      the_content();
    endwhile; endif; ?>
    </div>
  </div>
</div>