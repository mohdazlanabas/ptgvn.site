<?php

function unicorn() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'unicorn');

function myfiles() {
    // Cache-bust assets during development by using file modification time.
    $theme_directory = get_template_directory();

    wp_enqueue_style(
        'azlan-style',
        get_stylesheet_uri(),
        [],
        filemtime( $theme_directory . '/style.css' )
    );

    wp_enqueue_script(
        'azlan-main',
        get_template_directory_uri() . '/main.js',
        [],
        filemtime( $theme_directory . '/main.js' ),
        true
    );
}

add_action('wp_enqueue_scripts', 'myfiles');
