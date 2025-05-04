<?php
// Add theme support
function blackair_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
}
add_action('after_setup_theme', 'blackair_theme_setup');

// Register menus
function blackair_register_menus() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'black-air-electric'),
        'footer-menu' => __('Footer Menu', 'black-air-electric')
    ));
}
add_action('init', 'blackair_register_menus');

// Enqueue CSS
function blackair_enqueue_scripts() {
    wp_enqueue_style('blackair-style', get_stylesheet_uri(), array(), filemtime(get_stylesheet_directory() . '/style.css'));
}
add_action('wp_enqueue_scripts', 'blackair_enqueue_scripts');

// Register sidebar widgets
function blackairelectric_widgets_init() {
    register_sidebar( array(
        'name'          => 'Main Sidebar',
        'id'            => 'main-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}
add_action( 'widgets_init', 'blackairelectric_widgets_init' );
?>
