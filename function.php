<?php
// Theme setup
function blackairelectric_theme_setup() {
    add_theme_support('title-tag'); // Dynamic title
    add_theme_support('post-thumbnails'); // Featured images
}
add_action('after_setup_theme', 'blackbulb_theme_setup');

// Load Styles
function blackairelectric_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'blackairelectric_enqueue_styles');
?>