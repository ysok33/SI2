<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function si_group_theme_setup() {
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/custom.css' );
}
add_action( 'after_setup_theme', 'si_group_theme_setup' );

function si_group_enqueue_fonts() {
    wp_enqueue_style(
        'si-group-google-fonts',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP:wght@700&family=Barlow+Condensed:wght@600&display=swap',
        [],
        null
    );
    wp_enqueue_style(
        'si-group-custom',
        get_template_directory_uri() . '/assets/css/custom.css',
        [ 'si-group-google-fonts' ],
        '1.0.0'
    );
}
add_action( 'wp_enqueue_scripts', 'si_group_enqueue_fonts' );
