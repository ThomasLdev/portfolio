<?php if( have_posts() ): while( have_posts() ): the_post();?>

<section class="about-image">

<div class="container-fluid">
    <div class="row p-5">
        <div class="col-sm-5 pb-3">
            <img src="<?php echo get_theme_file_uri("/assets/images/about.jpg")?>" alt="" style="width: 100%;">
        </div>
        <div class="col-sm-5 d-flex flex-column justify-content-center">
            <h2 class="mb-2">Keynan</h2>
            <p class="subtitle mb-3">Votre interlocuteur privilégié</p>
            <p class="line-height">Keynan se positionne sur le marché des applications stratégiques soutenues par les Nouvelles Technologies.

                Notre société, créative et en croissance intervient chez de grands clients dans les secteurs Privé et Public : Banque, Etablissements Financiers, Mutuelles, Industries, Services, Administrations.

                Nous intervenons en conseil métier ou technologique, conception et développement applicatif, intégration de solutions ou de progiciels.
                Nous proposons des expertises métiers et technologiques en réponse aux attentes de nos clients en matière d’évolution de leurs systèmes d’information.

                Nous proposons les compétences d’ingénieurs informaticiens, capables d’assurer des missions dans la durée et d’offrir une capacité d’adaptation à des problématiques évoluées.</p>


        </div>
    </div>
    <div class="container">
        <div class="row pb-5">
            <div class="col-sm-3">
                <div class="icon-wrap d-flex">
                    <i class="fas fa-flask fa-2x icon-color"></i>
                    <p class="pl-2">Tests Qualité</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="icon-wrap d-flex">
                    <i class="fas fa-history fa-2x icon-color"></i>
                    <p class="pl-2">Timing parfait</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="icon-wrap d-flex">
                    <i class="fas fa-users-cog fa-2x icon-color"></i>
                    <p class="pl-2">Equipes soudées</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="icon-wrap d-flex">
                    <i class="far fa-lightbulb fa-2x icon-color"></i>
                    <p class="pl-2">Innovation permanente</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile; else: endif;?>