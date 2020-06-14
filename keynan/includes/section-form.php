<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<?php

            $form = new WP_Query(array(
                'posts_per_page' => 1,
                'post_type' => 'form'
            ));

            while ($form->have_posts()) {
                $form->the_post(); ?>

<div class="container">
      <div class="row mt-5">
        <div class="col-12">
          <?php the_content(); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          
        </div>
      </div>
    </div>

    <?php
            }
    ?>


    

<?php endwhile;
else : endif; ?>