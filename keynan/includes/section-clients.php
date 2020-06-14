<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="mt-5 mb-5">
    <div class="container">

        <div class="row d-flex justify-content-center align-items-center m-5">
            <div class="col-12 d-flex justify-content-center align-items-center mt-2">
              
            </div>
        </div>
        <?php the_content(); ?>
    </div>
</section>

<?php endwhile;
else : endif; ?>