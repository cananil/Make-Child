<?php
/**
 * @package make_child
 *
 * Add custom functions here.
 */
//Add Scripts n Styles
add_action( 'wp_enqueue_scripts', 'load_my_styles' );
function load_my_styles() {
    wp_enqueue_style( 'parent-theme', get_stylesheet_directory_uri() . '/css/red-duotone.css' );
}

add_action( 'wp_enqueue_scripts', 'load_my_scripts' );
function load_my_scripts() {
    wp_enqueue_script( 'parent-theme', get_stylesheet_directory_uri() . '/js/iconic.min.js' );
    wp_enqueue_script( 'parent-theme', get_stylesheet_directory_uri() . '/js/dropcap.js' );
  }