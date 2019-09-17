<div class="container">
  <div class="row">
    <div class="introduction col-12" >
      <h2 class="introduction__title h3">CMDS</h2>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">       
    <div id="accordion" class="introduction col-md-10 offset-md-1 mt-4 text-center">
      <div class="card border-0">
        <div class="card-header bg-primary" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Qui sommes-nous ?
            </button>
          </h5>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            <p>
            <?= get_theme_mod('CMDS_theme_description'); ?>
            </p>
          </div>
        </div>
      <div class="card border-0" id="description__anchor">
        <div class="card-header bg-primary" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            Que faisons-nous ?
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
            <?php if (have_posts()) : while (have_posts()) : the_post(); 
            the_content();
            endwhile; endif; ?>
          </div>
        </div>  
      </div>   
      <!-- end id carousel -->
    </div>   
  </div> 
</div>
     
    
 
