<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>
		<!-- Icone Site-->
		<link rel="icon" type="image/png" href="/wp-content/themes/keynan/assets/images/keynan-icon.png" />

        <?php
        wp_head();
        ?>
	</head>

	<body id="page-top">
		<!-- Navigation-->
		<nav
			class="navbar navbar-expand-lg bg-white navbar-dark text-uppercase fixed-top shadow-sm"
			id="mainNav"
		>
			<div class="container-fluid">
				<a class="navbar-brand js-scroll-trigger" href="#page-top"
                    >
                    <?php 
                    if(function_exists('the_custom_logo')){
                        the_custom_logo();
                    }
                    ?>
                    </a
				><button
					class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded"
					type="button"
					data-toggle="collapse"
					data-target="#navbarResponsive"
					aria-controls="navbarResponsive"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					Menu <i class="fas fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">

                    <?php

                        wp_nav_menu(
                            array(
                                'menu' => 'primary-menu',
                                'container' => '',
                                'theme_location' => 'primary-menu',
                                'items_wrap' => '<ul id="" class="navbar-nav ml-auto">%3$s</ul>'
                            )
                        );
                    ?>

				</div>
			</div>
        </nav>
        
        <!-- Masthead -->
<header class="masthead bg-primary text-white text-center" style="background: linear-gradient(
    rgba(0, 0, 0, 0.5), 
    rgba(0, 0, 0, 0.8)
  ), url(<?php echo get_theme_file_uri('/assets/images/frontpage_image.jpg') ?>);">
    <div class="row d-flex justify-content-end">
        <div class="masthead-text">
            <h1 class="text-shadow">Acteur de vos solutions numériques</h1>
            <p class="text-shadow mt-5">

    
                Keynan se positionne sur le marché des applications stratégiques
                soutenues par les Nouvelles Technologies. Notre société, créative et
                en croissance intervient chez de grands clients dans les secteurs
                Privé et Public : Banque, Etablissements Financiers, Mutuelles,
                Industries, Services, Administrations
            </p>
            <a class="btn btn-xl btn-secondary mt-4" href="#" style="width: 20%;">En Savoir +</a>
        </div>
    </div>
</header>

   