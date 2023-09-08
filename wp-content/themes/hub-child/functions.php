<?php

add_action( 'wp_enqueue_scripts', 'liquid_child_theme_style', 99 );

function liquid_parent_theme_scripts() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
function liquid_child_theme_style(){
    wp_enqueue_style( 'child-hub-style', get_stylesheet_directory_uri() . '/style.css' );	
    wp_enqueue_script( 'swiper-bundle', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js' );	
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/assets/js/main.js' );	
}

#-----------------------------------------------------------------#
# custom Widgets
#-----------------------------------------------------------------#
require_once(get_stylesheet_directory() . '/custom-widget/core-widget.php');
