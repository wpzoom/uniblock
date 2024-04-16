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


/**
* Enqueue theme fonts.
*/

function uniblock_get_custom_typography() {

    $font_families = array();

    $args = array(
        'post_type'      => 'wp_global_styles',
        'posts_per_page' => 1,
    );

    $get_custom_styles = get_posts( $args );

    if( !empty( $get_custom_styles ) ) {

        $styles = $get_custom_styles[0]->post_content;
        $styles = json_decode( $styles, true );
        $font_families = uniblock_extract_font_families( $styles );
    }

    return $font_families;

}

function uniblock_extract_font_families( $data = array() ) {

    if( empty( $data ) ) {
        return array();
    }

    $pattern  = '/var:preset\|font-family\|([^|]+)/';
    $pattern2 = '/var\(--wp--preset--font-family--(\w+)\)/';
    $preset_patern = 'var(--wp--preset--font-family--';

    $font_families = $matches = $matches2 = array();

    foreach ( $data as $key => $value ) {

        if( $key === 'fontFamily') {

            if ( strpos( $value, $preset_patern ) !== false ) {
                if ( preg_match( $pattern2, $value, $matches2 ) ) {
                    $value = $matches2[1];
                    $font_families[] = $value;
                }
            } else {
                if( preg_match_all( $pattern, $value, $matches ) ) {
                    $value = end( $matches[1] );
                }
                $font_families[] = $value;
            }
        } elseif ( is_array( $value ) ) {
            $font_families = array_merge( $font_families, uniblock_extract_font_families( $value ) );
        }
    }

    $font_families = array_unique( $font_families );

    return $font_families;
}

/**
* Enqueue theme fonts.
*/
function uniblock_theme_fonts() {

    $theme_fonts_url             = uniblock_get_fonts_url();
    $theme_fonts_url_for_editor  = uniblock_get_fonts_url( true );

    // Load Fonts if necessary.
    if ( $theme_fonts_url ) {

        require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );

        wp_enqueue_style( 'uniblock-theme-fonts', wptt_get_webfont_url( $theme_fonts_url ), array(), wp_get_theme()->get( 'Version' ) );

        add_editor_style( $theme_fonts_url_for_editor );

    }

}
add_action( 'admin_init', 'uniblock_theme_fonts', 1 );
add_action( 'wp_enqueue_scripts', 'uniblock_theme_fonts', 1 );
add_action( 'enqueue_block_editor_assets', 'uniblock_theme_fonts', 1 );


/*
 * Gutenberg Editor CSS
 *
 * Load a stylesheet for customizing the Gutenberg editor
 * including support for Google Fonts and @import rules.
 */
function uniblock_gutenberg_editor_css() {

  wp_enqueue_style( 'uniblock-theme-editor-css', get_stylesheet_directory_uri() . '/assets/admin/css/editor-google-fonts.css', array(), wp_get_theme()->get( 'Version' ) );

}
add_action( 'enqueue_block_editor_assets', 'uniblock_gutenberg_editor_css' );




/**
 * Retrieve webfont URL to load fonts locally.
 */
function uniblock_get_fonts_url( $all = false )  {

    //Set default theme typography font families
    $theme_default_typo = array(
        'outfit',
        'bitter',
        'epilogue',
        'montserrat',
        'poppins',
        'yeseva-one',
        'inter',
        'source-sans-pro',
        'nunito',
        'josefin-sans',
        'raleway'
    );

    $fonts_to_download = array();

    $font_families = array(
        'alegreya'           => 'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
        'archivo'            => 'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'bitter'             => 'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'cormorant-garamond' => 'Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700',
        'crimson-pro'        => 'Crimson+Pro:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600',
        'dm-sans'            => 'DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700',
        'epilogue'           => 'Epilogue:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'figtree'            => 'Figtree:wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900',
        'ibm-plex-mono'      => 'IBM+Plex+Mono:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700',
        'ibm-plex-sans'      => 'IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
        'inter'              => 'Inter:wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900',
        'josefin-sans'       => 'Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
        'jost'               => 'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'krona-one'          => 'Krona+One',
        'lexend'             => 'Lexend:wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900',
        'libre-baskerville'  => 'Libre+Baskerville:ital,wght@0,400;0,700;1,400',
        'libre-franklin'     => 'Libre+Franklin:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'lora'               => 'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
        'manrope'            => 'Manrope:wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800',
        'merriweather'       => 'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900',
        'montserrat'         => 'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'mulish'             => 'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000',
        'nunito'             => 'Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000',
        'open-sans'          => 'Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800',
        'oswald'             => 'Oswald:wght@0,200;0,300;0,400;0,500;0,600;0,700',
        'outfit'             => 'Outfit:wght@100;200;300;400;500;600;700;800;900',
        'philosopher'        => 'Philosopher:ital,wght@0,400;0,700;1,400;1,700',
        'playfair-display'   => 'Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
        'poppins'            => 'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'quicksand'          => 'Quicksand:wght@0,300;0,400;0,500;0,600;0,700',
        'raleway'            => 'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'roboto'             => 'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900',
        'roboto-condensed'   => 'Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
        'rubik'              => 'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'source-sans-pro'    => 'Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
        'source-serif-pro'   => 'Source+Serif+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
        'space-grotesk'      => 'Space+Grotesk:wght@0,300;0,400;0,500;0,600;0,700',
        'syne'               => 'Syne:wght@0,400;0,500;0,600;0,700;0,800,1,400;1,500;1,600;1,700;1,800',
        'urbanist'           => 'Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'work-sans'          => 'Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'yeseva-one'         => 'Yeseva+One'
    );

    //Get user's saved custom typography
    $user_custom_typo = uniblock_get_custom_typography();

    //Combine default and custom typography
    $theme_custom_typo = array_merge( $user_custom_typo, $theme_default_typo );

    $theme_custom_typo = array_unique( $theme_custom_typo );

    if( !empty( $theme_custom_typo ) ) {

        foreach( $theme_custom_typo as $value ) {
            $fonts_to_download[] = isset( $font_families[ $value ] ) ? $font_families[ $value ] : '';
        }

        if( $all ) {
            $fonts_to_download = $font_families;
        }

        $query_args = array(
            'family'  => implode( '|', $fonts_to_download ),
            'subset'  => urlencode( 'latin,latin-ext' ),
            'display' => urlencode( 'swap' ),
        );

        return apply_filters( 'uniblock_get_fonts_url', add_query_arg( $query_args, 'https://fonts.googleapis.com/css' ) );

    }

    return $fonts_to_download;

}
