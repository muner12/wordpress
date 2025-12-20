<?php

// Theme Setup
function toddpatkin_theme_setup() {

    // Basic theme supports
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails'); 
    add_theme_support('custom-logo');
    add_theme_support('menus');
    add_theme_support('automatic-feed-links');

    // HTML5 Support
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Background support
    add_theme_support(
        'custom-background',
        apply_filters(
            'toddpatkin_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Selective refresh
    add_theme_support('customize-selective-refresh-widgets');

    // Register Menus
    register_nav_menus([
        'primary_menu' => __('Primary Menu', 'toddpatkin'),
        'footer_menu' => __('Footer Menu', 'toddpatkin'),
    ]);
}
add_action('after_setup_theme', 'toddpatkin_theme_setup');
