<?php
	const VERSION_THEME_FILES = '1.0.0';

	add_action( 'wp_enqueue_scripts', function() {

		wp_enqueue_style('styles-parent', get_template_directory_uri() . '/style.css', [], VERSION_THEME_FILES );
		wp_style_add_data( 'saitcraft-style', 'rtl', 'replace' );
		wp_enqueue_style('styles-child', get_stylesheet_directory_uri() . '/assets/css/style.min.css', ['styles-parent'], VERSION_THEME_FILES );

		wp_enqueue_script( 'jquery' );

		wp_enqueue_script('navigation', get_template_directory_uri() . '/js/navigation.js', [], VERSION_THEME_FILES, ['in_footer'=>true]);
		wp_enqueue_script('customizer', get_template_directory_uri() . '/js/customizer.js', ['customize-preview'], VERSION_THEME_FILES, ['in_footer'=>true]);
		wp_enqueue_script('scripts-child', get_stylesheet_directory_uri() . '/assets/js/scripts.min.js', ['navigation', 'customizer'], VERSION_THEME_FILES, ['in_footer'=>true] );

	} );

	/* Ajax Reviews */
	include_once(__DIR__ . '/ajax/ajax-reviews.php');