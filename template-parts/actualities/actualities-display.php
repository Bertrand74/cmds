 <div class="news__item">
   <div class="news__item-content d-flex flex-rows justify-content-center">
          <div class="text-center">
            <h3 class="news__item-title"><?php the_title(); ?></h3>
            <p class="news__item-text "><?php the_content(); ?></p>
            <a class="btn learn-more-button" href="<?php the_permalink(); ?>">lire la suite</a>
          </div>
        </div>
</div>