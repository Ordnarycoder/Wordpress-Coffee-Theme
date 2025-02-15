<?php
function coffee_shop_setup() {
    // Add theme support for title tag
    add_theme_support('title-tag');

    // Register a main menu
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'coffee-shop'),
    ));
}
add_action('after_setup_theme', 'coffee_shop_setup'); 

function coffee_shop_enqueue_styles() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('coffee-shop-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'coffee_shop_enqueue_styles'); 