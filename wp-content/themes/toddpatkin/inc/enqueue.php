<?php

// Enqueue Scripts & Styles
function toddpatkin_enqueue_scripts() {

    // Register styles
    wp_register_style('toddpatkin-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
    wp_register_style('toddpatkin-main', get_template_directory_uri() . '/assets/css/main.css', [], false);

    // Enqueue styles
    wp_enqueue_style('toddpatkin-style');
    wp_enqueue_style('toddpatkin-main');

    // Register JS
    wp_register_script('toddpatkin-main-js', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], false, true);

    // Enqueue JS
    wp_enqueue_script('toddpatkin-main-js');
}
add_action('wp_enqueue_scripts', 'toddpatkin_enqueue_scripts');
