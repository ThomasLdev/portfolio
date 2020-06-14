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

    wp_enqueue_style('keynan-googlefonts', "https://fonts.googleapis.com/css2?family=Abel&family=Cantarell:ital@1&family=Ubuntu:wght@700&display=swap", array(), "1.0", "all");

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

// Custom Post Types

function keynan_post_types() {
    // Cards
    register_post_type('card-section', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'public' => true,
        'labels' => array(
            'name' => 'Cards',
            'add_new_item' => 'Add New Card-Section',
            'edit_item' => 'Edit Card-Section',
            'all_items' => 'All Card-Sections',
            'singular_name' => 'Card-Section'
        ),
        'menu_icon' => 'dashicons-images-alt2'
    ));

    // Masthead
    register_post_type('masthead', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'public' => true,
        'labels' => array(
            'name' => 'Masthead',
            'add_new_item' => 'Add New Masthead',
            'edit_item' => 'Edit Masthead',
            'all_items' => 'All Mastheads',
            'singular_name' => 'Masthead'
        ),
        'menu_icon' => 'dashicons-format-gallery'
    ));

    // Skills
    register_post_type('skills-section', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'public' => true,
        'labels' => array(
            'name' => 'Skills',
            'add_new_item' => 'Add New Skills-Section',
            'edit_item' => 'Edit Skills-Section',
            'all_items' => 'All Skills-Sections',
            'singular_name' => 'Skills-Section'
        ),
        'menu_icon' => 'dashicons-buddicons-forums'
    ));

    // About
    register_post_type('about-section', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'public' => true,
        'labels' => array(
            'name' => 'About',
            'add_new_item' => 'Add New About-Section',
            'edit_item' => 'Edit About-Section',
            'all_items' => 'All About-Sections',
            'singular_name' => 'About-Section',
            'feature_image' => true
        ),
        'menu_icon' => 'dashicons-format-status'
    ));

    // Pole Tech
    register_post_type('techpost', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'public' => true,
        'labels' => array(
            'name' => 'Techpost',
            'add_new_item' => 'Add New Techpost',
            'edit_item' => 'Edit Techpost',
            'all_items' => 'All Techposts',
            'singular_name' => 'Techpost'
        ),
        'menu_icon' => 'dashicons-code-standards'
    ));

    // Form Place
    register_post_type('form', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'public' => true,
        'labels' => array(
            'name' => 'Forms',
            'add_new_item' => 'Add New Form',
            'edit_item' => 'Edit Form',
            'all_items' => 'All Forms',
            'singular_name' => 'Form',
        ),
        'menu_icon' => 'dashicons-media-document'
    ));

    // Carrière
    register_post_type('carrier', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'public' => true,
        'labels' => array(
            'name' => 'Carrière',
            'add_new_item' => 'Add New Carrière',
            'edit_item' => 'Edit Carrière',
            'all_items' => 'All Carrières',
            'singular_name' => 'Carrière',
        ),
        'menu_icon' => 'dashicons-groups'
    ));

}

add_action('init', 'keynan_post_types');

?>

