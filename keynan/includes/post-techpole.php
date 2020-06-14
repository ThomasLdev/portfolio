<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section>
            <?php
            $techpost = new WP_Query(array(
                'posts_per_page' => 4,
                'post_type' => 'techpost'
            ));

            while ($techpost->have_posts()) {
                $techpost->the_post(); ?>

                <div class="skill-wrapper p-3">
                    <div class="title-wrap d-flex justify-content-start align-items-center">
                        <div class="icon-tech d-flex justify-content-center align-items-center mr-2">
                            <i class="fas fa-network-wired fa-2x"></i>
                        </div>
                        <h1 class="pl-3"><?php the_title(); ?></h1>
                    </div>
                    <p class="text-justify p-3">
                        <?php the_content(); ?>
                    </p>
                </div>

                <hr class="bg-black" />
            <?php }
            ?>
        </section>

<?php endwhile;
else : endif; ?>