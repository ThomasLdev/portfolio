<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>

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
		
		
		<header class="secondary-header" style="background: linear-gradient(
    rgba(99, 149, 173, 0.8), 
    rgba(99, 149, 173, 0.9)
  ), url(<?php echo get_theme_file_uri("/assets/images/activities.jpg")?>);">
		<h1 class="text-center"><?php the_title(); ?></h1>
		</header>
    

   