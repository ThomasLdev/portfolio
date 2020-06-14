<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section>

            <?php

            $frontPageCards = new WP_Query(array(
                'posts_per_page' => 1,
                'post_type' => 'card-section'
            ));

            while ($frontPageCards->have_posts()) {
                $frontPageCards->the_post(); ?>

                <div class="container-fluid">
                    <div class="row bg-light p-5">
                        <div class="col-12">
                            <h2 class="text-center"><?php the_title(); ?></h2>
                        </div>
                    </div>
                </div>

                <div class="container ">
                    <div class="row mt-5 mb-5">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <p class="text-center"><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row d-flex flex-wrap mb-5">
                        <!--Insérer card widgets ici -->
                        <div class="col-lg-4 col-sm-6 col-12 p-2 d-flex justify-content-center">
                            <!--Card 1-->
                            <div class="card text-center" style="width: 18rem; height: 30rem;">
                                <img class="card-img-top" src="<?php echo get_theme_file_uri('/assets/images/card1.jpg') ?>" alt="Card image cap" />
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h5 class="card-title">
                                        <a class="nav-link" href="#">Professionalisme</a>
                                    </h5>
                                    <p class="card-text">
                                        Un professionnalisme et une expérience démontrée dans le
                                        domaine du service.
                                    </p>
                                    <a href="<?php echo site_url('/clients'); ?>" class="btn btn-secondary btn-xl">Découvrir</a>
                                </div>
                            </div>
                        </div>
                        <!--Card 2-->
                        <div class="col-lg-4 col-sm-6 col-12 p-2 d-flex justify-content-center">

                            <div class="card text-center" style="width: 18rem; height: 30rem;">
                                <img class="card-img-top" src="<?php echo get_theme_file_uri('/assets/images/card2.jpg') ?>);" />
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h5 class="card-title">
                                        <a class="nav-link" href="#">Qualité</a>
                                    </h5>
                                    <p class="card-text">
                                        Une qualité de prestations et un savoir-faire reconnu par nos
                                        clients.
                                    </p>
                                    <a href="<?php echo site_url('/activites'); ?>" class="btn btn-secondary btn-xl">Découvrir</a>
                                </div>
                            </div>
                        </div>
                        <!--Card 3-->
                        <div class="col-lg-4 col-sm-6 col-12 p-2 d-flex justify-content-center">
                            <div class="card text-center" style="width: 18rem; height: 30rem;">
                                <img class="card-img-top" src="<?php echo get_theme_file_uri('/assets/images/card3.jpg') ?>" alt="Card image cap" />
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h5 class="card-title">
                                        <a class="nav-link" href="<?php echo site_url('/pole-tech'); ?>">Exigence</a>
                                    </h5>
                                    <p class="card-text">
                                        Une exigence dans la qualité de nos recrutements que vous ne
                                        retrouverez pas ailleurs.
                                    </p>
                                    <a href="#" class="btn btn-secondary btn-xl">Découvrir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

    <?php
            }
    ?>

<?php endwhile;
else : endif; ?>