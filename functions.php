<?php

// Enqueue styles and scripts
function load_css(){

    wp_register_style('mystyle', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('mystyle');
    wp_register_style('bulma', get_template_directory_uri() . '/css/bulma.min.css', array('mystyle'), false, 'all');
    wp_enqueue_style('bulma');

};

add_action('wp_enqueue_scripts', 'load_css');

function load_js(){

    wp_register_script('bulma', get_template_directory_uri() . '/js/dist/bulma.js', false, true);
    wp_enqueue_script('bulma');
};

add_action('wp_enqueue_scripts', 'load_js');


// Menus
register_nav_menus(
    array(
        'navbar-menu' => 'Main Menu'
    )
);


// Custom Image Sizes

add_image_size('img-large', 800, 400, false);
add_image_size('img-small', 300, 200, false);


// Theme Options

add_theme_support('post-thumbnails');
