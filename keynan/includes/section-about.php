<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section class="about-image">
            <?php
            $aboutSection = new WP_Query(array(
                'posts_per_page' => 1,
                'post_type' => 'about-section'
            ));

            while ($aboutSection->have_posts()) {
                $aboutSection->the_post(); ?>

                <div class="container-fluid">
                    <div class="row p-5 flex-wrap column d-flex justify-content-center align-items-center">
                        <div class="col-lg-7 col-md-12 col-12 image-size d-flex justify-content-center align-items-center">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="col-lg-5 col-md-12 col-12 d-flex flex-column justify-content-center align-items-center">
                            <h2 class="mb-1 margin-media"><?php the_title(); ?></h2>
                            <h3 class="subtitle"><?php the_excerpt(); ?></h3>

                            <div class="content-display collapse mb-3" id="content-about">
                                <p class="text-justify"><?php the_content(); ?></p>
                            </div>
                            <button class="btn btn-secondary btn-xl display-btn" type="button" data-toggle="collapse" data-target="#content-about" aria-expanded="false" aria-controls="content-about">Voir +</button>
                        </div>
                    </div>
                </div>

            <?php }
            ?>

            <!-- Hard Code Content-->
            <div class="container">
                <div class="row pb-5 d-flex justify-content-center align-items-center p-3">
                    <div class="col-sm-3 col-6">
                        <div class="icon-wrap d-flex">
                            <i class="fas fa-flask fa-2x icon-color"></i>
                            <p class="pl-2">Tests Qualité</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="icon-wrap d-flex">
                            <i class="fas fa-history fa-2x icon-color"></i>
                            <p class="pl-2">Timing parfait</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="icon-wrap d-flex">
                            <i class="fas fa-users-cog fa-2x icon-color"></i>
                            <p class="pl-2">Equipes soudées</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="icon-wrap d-flex">
                            <i class="far fa-lightbulb fa-2x icon-color"></i>
                            <p class="pl-2">Innovation permanente</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php endwhile;
else : endif; ?>