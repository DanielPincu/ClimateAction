<?php
// Enable dynamic title tag support
function climate_auto_title() {
    add_theme_support("title-tag");
}
add_action("after_setup_theme", "climate_auto_title");

// Disable Gutenberg editor for posts and pages
function climate_disable_gutenberg() {
    // remove_post_type_support("post", "editor");
    remove_post_type_support("page", "editor");
}
add_action("init", "climate_disable_gutenberg");

// Enqueue Tailwind CSS and custom scripts
function climate_resources() {
    // Enqueue Tailwind CSS
    wp_enqueue_script("tailwind-css", "https://cdn.tailwindcss.com");
    
    // Enqueue custom style if you want to keep your style.css
    wp_enqueue_style("climate-style", get_template_directory_uri() . "/style.css");
    
    // Enqueue custom JavaScript file
    wp_enqueue_script("climate-js", get_template_directory_uri() . "/js/script.js", array(), false, true);
}
add_action("wp_enqueue_scripts", "climate_resources");


function my_theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');

function custom_excerpt_length($length) {
    return 50; // Set this to the number of words you want for the excerpt length
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);



function pll_register_strings() {

    pll_register_string('Sustainable Development Goals', 'Home');
    pll_register_string('Sustainable Development Goals', 'Blog');
    pll_register_string('Sustainable Development Goals', 'Contact');
    pll_register_string('Sustainable Development Goals', 'Wanna stay up to date?');
    pll_register_string('Sustainable Development Goals', 'Subscribe to Newsletter');
    
}

add_action('init', 'pll_register_strings');