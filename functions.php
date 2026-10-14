<?php
/**
 * Theme setup and features.
 *
 * @package HaberMagazin
 */

function haber_magazin_setup() {
	load_theme_textdomain( 'haber-magazin', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
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
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 160,
			'width'       => 480,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'Ana Menü', 'haber-magazin' ),
		)
	);
}
add_action( 'after_setup_theme', 'haber_magazin_setup' );

function haber_magazin_enqueue_styles() {
	wp_enqueue_style(
		'haber-magazin-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'haber_magazin_enqueue_styles' );

function haber_magazin_excerpt_length( $length ) {
	return 24;
}
add_filter( 'excerpt_length', 'haber_magazin_excerpt_length' );
