<?php

/*
Template Name: Techpole
*/
?>

<?php get_header('secondary'); ?>

<div class="container">
    <div class="row d-flex justify-content-center align-items-center mt-4">
        <div class="col-sm-12">
            <?php get_template_part('includes/post-techpole'); ?>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-6 d-flex justify-content-center align-items-center m-0 p-0">
            <img src="<?php echo get_theme_file_uri("/assets/images/card1.jpg") ?>" alt="" style="max-width: 100%; height: auto">
        </div>
        <div class="col-6 d-flex justify-content-center align-items-center m-0 p-0">
            <div class="text-wrapper-activities d-flex justify-content-center align-items-center flex-column">
                <h1 class="text-center p-2">Des compétences variées et une équipe à la pointe de ses technologies</h1>
                <p>Pour répondre à toutes les attentes et solutionner tous les problèmes</p>
                <a class="btn btn-secondary btn-xl" href="<?php echo site_url('/contact'); ?>">Nous contacter</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>