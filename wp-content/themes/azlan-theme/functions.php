<?php

function unicorn() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'unicorn');

function mytheme_enqueue_styles() {
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

function my_theme_enqueue_scripts() {
    wp_enqueue_script('main.js',
    get_template_directory_uri() . '/js/main.js',
    array('jquery'),
    '1.0.0', 
    true);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');