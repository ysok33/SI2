<?php
/**
 * SI Group Theme functions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Google Fonts の読み込み
 */
function si_group_theme_enqueue_assets() {
	wp_enqueue_style(
		'si-group-google-fonts',
		'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Noto+Serif+JP:wght@600;700&display=swap',
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
add_action( 'wp_enqueue_scripts', 'si_group_theme_enqueue_assets' );

/**
 * ブロックエディタ用フォント読み込み
 */
function si_group_theme_editor_assets() {
	wp_enqueue_style(
		'si-group-google-fonts-editor',
		'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Noto+Serif+JP:wght@600;700&display=swap',
		[],
		null
	);
}
add_action( 'enqueue_block_editor_assets', 'si_group_theme_editor_assets' );

/**
 * パターンの登録
 */
function si_group_theme_register_patterns() {
	$pattern_dir = get_template_directory() . '/patterns';
	$patterns = glob( $pattern_dir . '/*.php' );
	if ( ! empty( $patterns ) ) {
		foreach ( $patterns as $pattern ) {
			require_once $pattern;
		}
	}
}
add_action( 'init', 'si_group_theme_register_patterns' );
