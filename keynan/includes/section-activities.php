<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section>
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12">
                        <p>
                            <?php the_content(); ?>
                        </p>

                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-6 d-flex justify-content-center align-items-center m-0 p-0">
                        <img src="<?php echo get_theme_file_uri("/assets/images/activities.jpg") ?>" alt="" style="width: 100%; height: auto">
                    </div>
                    <div class="col-6 d-flex justify-content-center align-items-center m-0 p-0">
                        <div class="text-wrapper-activities d-flex justify-content-center align-items-center flex-column">
                            <p>Faites appel à des experts</p>
                            <p>Pour des solutions software efficaces</p>
                            <a class="btn btn-secondary btn-xl" href="<?php echo site_url('/contact'); ?>">Nous contacter</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php endwhile;
else : endif; ?>