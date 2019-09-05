<div class="card" style="width: 18rem;">
  <img src="<?= get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= the_title();?></h5>
    <a href="<?= the_permalink();?>" class="btn learn-more-button">Voir la gallerie</a>
  </div>
</div>