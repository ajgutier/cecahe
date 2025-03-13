<?php

function cecahe_menus() {
    register_nav_menus(array(
        'menu-principal' => __( 'Menu Principal', 'cecahe' ),
        'menu-social' => __( 'Menu Social', 'cecahe' )
    ));
}

add_action( 'init', 'cecahe_menus' );

function cecahe_scripts_styles() {
    // Normalize CSS
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/normalize.css', array(), '8.0.1' );

    // Google Fonts
    /* wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Next:ital,wght@0,200..800;1,200..800&display=swap', array(), '1.0.0' ); */

    // Slicknav CSS
    /* wp_enqueue_style( 'slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10' ); */

    // Slicknav JS
    /* wp_enqueue_script( 'slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true ); */

    // Script.js
    /* wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true ); */

    // Stylesheet
    wp_enqueue_style( 'style', get_stylesheet_uri(), array('normalize'), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'cecahe_scripts_styles' );