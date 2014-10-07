<?php
/**
 * @package Make Child
 *
 * Add your custom functions here.
 */

function theme_name_scripts() {
  wp_enqueue_style( 'style-name', get_stylesheet_uri() );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . 'wp-content/themes/make child/js/iconic.min.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );




