<?php
/**
 * This file adds functions to the UniBlock WordPress theme.
 *
 * @package UniBlock
 * @author  WPZOOM
 * @license GNU General Public License v2 or later
 * @link    https://www.wpzoom.com/
 */


if ( ! function_exists( 'uniblock_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function uniblock_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'uniblock', get_template_directory() . '/languages' );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./style.css',
			)
		);

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

        register_nav_menus( array( 'primary' => esc_html__( 'Primary Menu', 'uniblock' ) ) );

	}
}
add_action( 'after_setup_theme', 'uniblock_setup' );

// Enqueue style sheet.
add_action( 'wp_enqueue_scripts', 'uniblock_enqueue_style_sheet' );
function uniblock_enqueue_style_sheet() {

	wp_enqueue_style( 'uniblock', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

}

/**
 * Register block styles.
 *
 * @since 1.0.0
 */
function uniblock_register_block_styles() {

	$block_styles = array(
		'core/button'          => array(
			'fill-background'    => __( 'Fill Background', 'uniblock' ),
			'outline-background' => __( 'Outline Background', 'uniblock' ),
		),
		'core/group'           => array(
			'shadow'       => __( 'Shadow', 'uniblock' ),
			'border' => __( 'Border', 'uniblock' ),
			'full-height'  => __( 'Full-height', 'uniblock' ),
		),
        'core/cover'           => array(
            'round-corners'       => __( 'Rounded', 'uniblock' ),
        ),
        'core/column'           => array(
            'shadow'       => __( 'Shadow', 'uniblock' ),
            'border' => __( 'Border', 'uniblock' ),
            'pull-right'  => __( 'Pull right', 'uniblock' ),
            'pull-left'  => __( 'Pull left', 'uniblock' ),
        ),
		'core/image'           => array(
			'shadow' => __( 'Shadow', 'uniblock' ),
		),
		'core/list'            => array(
			'no-disc' => __( 'No Disc', 'uniblock' ),
		),
		'core/media-text'      => array(
			'shadow-media' => __( 'Shadow', 'uniblock' ),
		),
		'core/navigation-link' => array(
			'fill'         => __( 'Fill', 'uniblock' ),
			'fill-background'    => __( 'Fill Background', 'uniblock' ),
			'outline'      => __( 'Outline', 'uniblock' ),
			'outline-background' => __( 'Outline Background', 'uniblock' ),
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
add_action( 'init', 'uniblock_register_block_styles' );

/**
 * Registers block categories, and type.
 *
 * @since 1.0
 */

if ( ! function_exists( 'uniblock_register_block_pattern_categories' ) ) {

    function uniblock_register_block_pattern_categories() {

    	/* Functionality specific to the Block Pattern Explorer plugin. */
    	if ( function_exists( 'register_block_pattern_category_type' ) ) {
    		register_block_pattern_category_type( 'uniblock', array( 'label' => __( 'uniblock', 'uniblock' ) ) );
    	}

    	$block_pattern_categories = array(
    		'uniblock-footer'  => array(
    			'label'         => __( 'Footer', 'uniblock' ),
    			'categoryTypes' => array( 'uniblock' ),
    		),
    		'uniblock-general' => array(
    			'label'         => __( 'Sections', 'uniblock' ),
    			'categoryTypes' => array( 'uniblock' ),
    		),
    		'uniblock-header'  => array(
    			'label'         => __( 'Header', 'uniblock' ),
    			'categoryTypes' => array( 'uniblock' ),
    		),
    		'uniblock-page'    => array(
    			'label'         => __( 'Pages', 'uniblock' ),
    			'categoryTypes' => array( 'uniblock' ),
    		),
    		'uniblock-query'   => array(
    			'label'         => __( 'Blog Posts', 'uniblock' ),
    			'categoryTypes' => array( 'uniblock' ),
    		),
    	);

    	foreach ( $block_pattern_categories as $name => $properties ) {
    		register_block_pattern_category( $name, $properties );
    	}
    }
    add_action( 'init', 'uniblock_register_block_pattern_categories', 9 );

}

// Theme Admin Page
require get_template_directory() . '/inc/admin/theme-admin.php';

/*--------------------------------------------------------------
# Enqueue Admin Scripts and Styles
--------------------------------------------------------------*/
if ( ! function_exists( 'uniblock_admin_scripts' ) ) :
    function uniblock_admin_scripts() {
        wp_enqueue_style( 'uniblock-admin-styles', get_template_directory_uri() . '/assets/admin/css/admin-styles.css' );
    }
    add_action( 'admin_enqueue_scripts', 'uniblock_admin_scripts' );
endif;


/* Add the link to the Customizer */
// add_action('customize_register', function ( $manager ) {  },  10, 1 );



add_action( 'init', 'uniblock_font_collections' );

function uniblock_font_collections() {
    /* Register a collection of recommended fonts */
    wp_register_font_collection( 'uniblock', [
        'name'          => __( 'UniBlock', 'themeslug' ),
        'description'   => __( 'A collection of fantasy fonts.', 'themeslug' ),
        'font_families' => get_theme_file_path( 'assets/fonts/uniblock.json' ),
        'categories' => [
            [
                'name' => __( 'Display', 'themeslug' ),
                'slug' => 'display'
            ]
        ]
    ] );
}


