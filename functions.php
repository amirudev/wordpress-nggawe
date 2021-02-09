<?php
$version = wp_get_theme()->get('version');

// function wp_register_styles() {
//     wp_enqueue_style('nggawe_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css', $version);
//     wp_enqueue_style('nggawe_stylesheet', get_template_directory_uri() . '/style.css', $version);
// }

// add_action('wp_enqueue_scripts', 'wp_register_styles');

function wp_register_styles() {
    wp_enqueue_style( 'nggawe_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' );
    wp_enqueue_style('nggawe_stylesheet', get_template_directory_uri() . '/style.css', $version);
}

add_action('wp_enqueue_scripts', 'wp_register_styles');

?>