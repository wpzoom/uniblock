<?php
/**
 * This file adds functions to the bildr WordPress theme.
 *
 * @package bildr
 * @author  WPZOOM
 * @license GNU General Public License v2 or later
 * @link    https://www.wpzoom.com/
 */

if ( ! function_exists( 'bildr_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 0.8.0
	 *
	 * @return void
	 */
	function bildr_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'bildr', get_template_directory() . '/languages' );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./style.css',
			)
		);

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

	}
}
add_action( 'after_setup_theme', 'bildr_setup' );

// Enqueue style sheet.
add_action( 'wp_enqueue_scripts', 'bildr_enqueue_style_sheet' );
function bildr_enqueue_style_sheet() {

	wp_enqueue_style( 'bildr', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

}

/**
 * Register block styles.
 *
 * @since 0.9.2
 */
function bildr_register_block_styles() {

	$block_styles = array(
		'core/button'          => array(
			'fill-background'    => __( 'Fill Background', 'bildr' ),
			'outline-background' => __( 'Outline Background', 'bildr' ),
		),
		'core/group'           => array(
			'shadow'       => __( 'Shadow', 'bildr' ),
			'shadow-solid' => __( 'Shadow Solid', 'bildr' ),
			'full-height'  => __( 'Full-height', 'bildr' ),
		),
        'core/column'           => array(
            'shadow'       => __( 'Shadow', 'bildr' ),
            'shadow-solid' => __( 'Shadow Solid', 'bildr' ),
            'full-height'  => __( 'Full-height', 'bildr' ),
        ),
		'core/image'           => array(
			'shadow' => __( 'Shadow', 'bildr' ),
		),
		'core/list'            => array(
			'no-disc' => __( 'No Disc', 'bildr' ),
		),
		'core/media-text'      => array(
			'shadow-media' => __( 'Shadow', 'bildr' ),
		),
		'core/navigation-link' => array(
			'fill'         => __( 'Fill', 'bildr' ),
			'fill-background'    => __( 'Fill Background', 'bildr' ),
			'outline'      => __( 'Outline', 'bildr' ),
			'outline-background' => __( 'Outline Background', 'bildr' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'bildr_register_block_styles' );

/**
 * Registers block categories, and type.
 *
 * @since 0.9.2
 */
function bildr_register_block_pattern_categories() {

	/* Functionality specific to the Block Pattern Explorer plugin. */
	if ( function_exists( 'register_block_pattern_category_type' ) ) {
		register_block_pattern_category_type( 'bildr', array( 'label' => __( 'bildr', 'bildr' ) ) );
	}

	$block_pattern_categories = array(
		'bildr-footer'  => array(
			'label'         => __( 'Footer', 'bildr' ),
			'categoryTypes' => array( 'bildr' ),
		),
		'bildr-general' => array(
			'label'         => __( 'General', 'bildr' ),
			'categoryTypes' => array( 'bildr' ),
		),
		'bildr-header'  => array(
			'label'         => __( 'Header', 'bildr' ),
			'categoryTypes' => array( 'bildr' ),
		),
		'bildr-page'    => array(
			'label'         => __( 'Page', 'bildr' ),
			'categoryTypes' => array( 'bildr' ),
		),
		'bildr-query'   => array(
			'label'         => __( 'Query', 'bildr' ),
			'categoryTypes' => array( 'bildr' ),
		),
	);

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', 'bildr_register_block_pattern_categories', 9 );
