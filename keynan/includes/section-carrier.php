<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php

            $carrier = new WP_Query(array(
                'posts_per_page' => 1,
                'post_type' => 'carrier'
            ));

            while ($carrier->have_posts()) {
                $carrier->the_post(); ?>

<section>
<div class="container">
<div class="row d-flex flex-column d-flex justify-content-center align-items-center">
    <div class="col-6 d-flex justify-content-center align-items-center mt-3">
    <h1 class="center mt-3"><?php the_title();?></h1>
 
    </div>
    <div class="col-6 d-flex justify-content-center align-items-center mt-3">
    
    <h2 class="subtitle"><?php the_excerpt();?></h2>
    </div>
</div>
</div>

<div class="container-fluid mb-5">
    <div class="row d-flex justify-content-center align-items-center mt-3">
       
        <div class="col-sm-4 d-flex flex-column justify-content-center align-items-center">
        <div class="image-wrapper">
            <div class="image-content">
                <img src="<?php echo get_theme_file_uri("/assets/images/job1.jpg")?>)" alt="" style="max-width: 100%; height: auto">
            </div>
            <div class="text-content d-flex justify-content-center align-items-center p-3">
            <a class="carrier-link" href="#">Consultant Junior/Senior</a> 
            </div>
        </div>
    </div>
    <div class="col-sm-4 d-flex flex-column justify-content-center align-items-center">
        <div class="image-wrapper ">
            <div class="image-content">
                <img src="<?php echo get_theme_file_uri("/assets/images/job2.jpg")?>)" alt="" style="max-width: 100%; height: auto">
            </div>
            <div class="text-content d-flex justify-content-center align-items-center p-3">
            <a class="carrier-link" href="#">Développeur C++/Java</a> 
            </div>
        </div>
    </div>
    <div class="col-sm-4 d-flex flex-column justify-content-center align-items-center">
        <div class="image-wrapper ">
            <div class="image-content">
                <img src="<?php echo get_theme_file_uri("/assets/images/job3.jpg")?>)" alt="" style="max-width: 100%; height: auto">
            </div>
            <div class="text-content d-flex justify-content-center align-items-center p-3">
            <a class="carrier-link" href="#">Team Lead Devops</a> 
            </div>
        </div>
    </div>
    </div>
</div>

<div class="container">
<div class="row d-flex justify-content-center align-items-center">
    <div class="col-12 d-flex justify-content-center align-items-center">
    <p class="text-center">
    <?php the_content(); ?>
</p>
    </div>
</div>
</div>
    

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <p>Pour charger votre CV, rendez vous sur la page <a href="<?php echo site_url('/contact'); ?>">contact</a></p>
        </div>
    </div>
</div>


</div>
</section>

    <?php
            }
    ?>


























<!---->

<?php endwhile;
else : endif; ?>