<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-sm-5 bg-light d-flex flex-column justify-content-center align-items-center">
          <h2><?php the_title(); ?></h2>
          <p class="text-center">
            <?php the_content(); ?>
          </p>
        </div>
        <div class="col-sm-7">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.3631464906716!2d2.222565416009763!3d48.87035337928866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e664da8e23be99%3A0x6ce2069a8cb7e9ca!2sKeynan%20Technologies!5e0!3m2!1sfr!2sfr!4v1592052328345!5m2!1sfr!2sfr" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>

      </div>
    </div>

    <?php endwhile;
else : endif; ?>