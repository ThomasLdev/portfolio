<?php if( have_posts() ): while( have_posts() ): the_post();?>

<section>
    <div class="container-fluid mb-5">
        <div class="row bg-light p-5">
            <div class="col-12">
                <h2 class="text-center">Keynan c'est...</h2>
                <p class="text-center">
                    Créée en 2000, Keynan s’est progressivement développée
                    organiquement sur des prestations à valeur ajoutée. La société a
                    structuré son expertise sur les systèmes d’information complexes
                    et sensibles
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row d-flex flex-wrap mb-5">
            <div class="col-lg-4 col-sm-6 col-12 p-2 d-flex justify-content-center">
                <!-- A transformer en Widget -->
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
                        <a href="#" class="btn btn-secondary btn-xl">Découvrir</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 p-2 d-flex justify-content-center">
                <!-- A transformer en Widget -->
                <div class="card text-center" style="width: 18rem; height: 30rem;">
                    <img class="card-img-top" src="<?php echo get_theme_file_uri('/assets/images/card2.jpg') ?>);"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">
                            <a class="nav-link" href="#">Qualité</a>
                        </h5>
                        <p class="card-text">
                            Une qualité de prestations et un savoir-faire reconnu par nos
                            clients.
                        </p>
                        <a href="#" class="btn btn-secondary btn-xl">Découvrir</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 p-2 d-flex justify-content-center">
                <!-- A transformer en Widget -->
                <div class="card text-center" style="width: 18rem; height: 30rem;">
                    <img class="card-img-top" src="<?php echo get_theme_file_uri('/assets/images/card3.jpg') ?>" alt="Card image cap" />
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">
                            <a class="nav-link" href="#">Exigence</a>
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

<?php endwhile; else: endif;?>