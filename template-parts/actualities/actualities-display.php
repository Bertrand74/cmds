 <div class="news__item">
        <div class="news__item-image" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>); background-size:cover; " >
        </div>
        <div class="news__item-content  ">
          <h3 class="news__item-title text-center"><?php the_title(); ?></h3>
          <p class="news__item-text text-center"><?php the_content(); ?></p>
          <a class="btn learn-more-button d-flex justify-content-center" href="">En savoir plus</a>
        </div>
</div>