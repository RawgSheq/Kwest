<?php
/**
 * Theme Functions.
 * 
 * @package Kwest
 * 
*/
function kwest_enqueue_scripts() {

    // Register styles.
    wp_register_style( 'style', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css'), 'all' );
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all' );
    

    // Register Scripts
    wp_register_script( 'main', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory() . '/assets/main.js'), true );
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true );
 
    // Enqueue Styles
    wp_enqueue_style('style');
    wp_enqueue_style('bootstrap');
   
    // Enqueue Scripts.
    wp_enqueue_script('main');
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'kwest_enqueue_scripts');

?>