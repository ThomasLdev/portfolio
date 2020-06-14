<?php

function keynan_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'keynan_theme_support');


function keynan_menus(){

    $locations = array(
        'primary-menu' => "Desktop Top Menu",
        'footer-menu' => "Footer Main Menu"
    );

    register_nav_menus($locations);
}

add_action('init', 'keynan_menus');

function keynan_register_styles(){

    wp_enqueue_style('keynan-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css", array(), "4.3.1", "all");
    wp_enqueue_style('keynan-style', get_template_directory_uri() . "/style.css", array('keynan-bootstrap'), false, "all");
    wp_enqueue_style('keynan-fontawesome', "https://use.fontawesome.com/releases/v5.13.0/css/all.css", array(), "5.13.0", "all");

}

add_action('wp_enqueue_scripts', 'keynan_register_styles');

function keynan_register_scripts(){

    wp_enqueue_script('keynan-bootstrap', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), '3.5.1', true);

    wp_enqueue_script('keynan-bootstrap-js', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js", array(), '3.5.1', true);

    wp_enqueue_script('keynan-bootstrap-jqueryease', "https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js", array(), '3.5.1', true);

    wp_enqueue_script('keynan-customjs', get_template_directory_uri() . "/assets/js/main.js", array(), '3.5.1', true);

    wp_enqueue_script('keynan-googleapi', "https://maps.googleapis.com/maps/api/js?key=AIzaSyCkUOdZ5y7hMm0yrcCQoCvLwzdM6M8s5qk&callback=initMap", array(), '1.0', true);
    
}

add_action('wp_enqueue_scripts', 'keynan_register_scripts');

?>