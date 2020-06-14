<?php if( have_posts() ): while( have_posts() ): the_post();?>

<section class="transition" style="background: linear-gradient(
    rgba(99, 149, 173, 0.8), 
    rgba(99, 149, 173, 0.9)
  ), url(<?php echo get_theme_file_uri("/assets/images/transition.jpg")?>);">
    <div class="container-fluid pb-5">
        <div class="row pt-4">
            <div class="col-sm-12 d-flex flex-column justify-content-center align-items-center">
                <h2 class="text-center">Nos points forts</h2>
                <p class="text-center subtitle">Une démarche qualité en continu</p>
            </div>
        </div>
        <div class="row mt-5 d-flex justify-content-center align-items-center">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="transition-wrap">
                    <div class="icons-wrap"><i class="fas fa-concierge-bell fa-2x"></i>
                    </div>
                    <div class="text-wrap">
                        <p>une expérience démontrée dans le domaine du service</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="transition-wrap">
                    <div class="icons-wrap"><i class="fas fa-sitemap fa-2x"></i>
                    </div>
                    <div class="text-wrap">
                        <p>Une exigence dans la qualité de nos recrutements</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="transition-wrap">
                    <div class="icons-wrap"><i class="fas fa-book-open fa-2x"></i>
                    </div>
                    <div class="text-wrap">
                        <p>Une qualité de prestations et un savoir-faire reconnu par nos clients </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="transition-wrap">
                    <div class="icons-wrap"><i class="fas fa-search-dollar fa-2x"></i>
                    </div>
                    <div class="text-wrap">
                        <p>Une présence au sein de grands comptes à forte visibilité.</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="row mt-5 d-flex justify-content-center align-items-center">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="transition-wrap">
                    <div class="icons-wrap"><i class="fas fa-directions fa-2x"></i>
                    </div>
                    <div class="text-wrap">
                        <p>Une réactivité forte en étant à l’écoute de nos clients.</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="transition-wrap">
                    <div class="icons-wrap"><i class="fas fa-running fa-2x"></i>
                    </div>
                    <div class="text-wrap">
                        <p>Des méthodes agiles pour réagir en direct</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="transition-wrap">
                    <div class="icons-wrap"><i class="fas fa-tasks fa-2x"></i>
                    </div>
                    <div class="text-wrap">
                        <p>Une organisation de projets en mode devops</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="transition-wrap">
                    <div class="icons-wrap"><i class="fas fa-project-diagram fa-2x"></i>
                    </div>
                    <div class="text-wrap">
                        <p>Une structure à taille humaine</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<?php endwhile; else: endif;?>