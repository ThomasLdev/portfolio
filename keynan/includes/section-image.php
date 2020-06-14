<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php $masthead = new WP_Query(array(
            'posts_per_page' => 1,
            'post_type' => 'masthead',
        ));

        while ($masthead->have_posts()) {
            $masthead->the_post(); ?>

            <header class="masthead bg-primary text-white text-center" style="background: linear-gradient(
    rgba(0, 0, 0, 0.5), 
    rgba(0, 0, 0, 0.8)
  ), url(<?php the_field('masthead') ?>);">
                <div class="row d-flex justify-content-end">
                    <div class="offset-md-6 offset-0 col-md-6 col-12 d-flex justify-content-center mast">
                        <div class="masthead-text">
                            <h1 class="text-shadow"><?php the_title(); ?></h1>
                            <p class="text-shadow mast-content">
                                <?php the_content(); ?>
                            </p>
                            <a class="btn btn-xl btn-secondary mb-4" href="<?php echo site_url('/pole-tech'); ?>">En Savoir +</a>
                        </div>
                    </div>
                </div>
            </header>
        <?php
        }

        ?>



<?php endwhile;
else : endif; ?>