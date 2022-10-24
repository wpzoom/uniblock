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
function uniblock_theme_fonts() {
    $fonts_url = uniblock_get_fonts_url();

    // Load Fonts if necessary.
    if ( $fonts_url ) {
        require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );

        wp_enqueue_style( 'uniblock-theme-fonts', wptt_get_webfont_url( $fonts_url ), array(), '20220930' );

        add_editor_style( $fonts_url );

    }

}
add_action( 'admin_init', 'uniblock_theme_fonts', 1 );
add_action( 'wp_enqueue_scripts', 'uniblock_theme_fonts', 1 );
add_action( 'enqueue_block_editor_assets', 'uniblock_theme_fonts', 1 );


/**
 * Retrieve webfont URL to load fonts locally.
 */
function uniblock_get_fonts_url() {
    $font_families = array(
        'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
        'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'Crimson+Pro:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600',
        'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700',
        'Epilogue:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'Figtree:wght@300;400;500;600;700;800;900',
        'IBM+Plex+Mono:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700',
        'IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
        'Inter:wght@100;200;300;400;500;600;700;800;900',
        'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'Lexend:wght@100;200;300;400;500;600;700;800;900',
        'Libre+Baskerville:ital,wght@0,400;0,700;1,400',
        'Libre+Franklin:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
        'Manrope:wght@200;300;400;500;600;700;800',
        'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900',
        'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000',
        'Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000',
        'Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800',
        'Oswald:wght@200;300;400;500;600;700',
        'Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
        'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'Quicksand:wght@300;400;500;600;700',
        'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900',
        'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'Source+Serif+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
        'Space+Grotesk:wght@300;400;500;600;700',
        'Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        'Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900'
    );

    $query_args = array(
        'family'  => urlencode( implode( '|', $font_families ) ),
        'subset'  => urlencode( 'latin,latin-ext' ),
        'display' => urlencode( 'swap' ),
    );

    return apply_filters( 'uniblock_get_fonts_url', add_query_arg( $query_args, 'https://fonts.googleapis.com/css' ) );
}



/**
 * Recommended Plugins
 */
require_once get_template_directory() . '/inc/classes/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'uniblock_register_required_plugins' );



/**
 * Register the required plugins for this theme.
 */
function uniblock_register_required_plugins() {
    /*
     * Array of plugin arrays. Required keys are name and slug.
     */
    $plugins = array(

        array(
            'name'     => 'One Click Demo Import',
            'slug'     => 'one-click-demo-import',
            'required' => false,
        ),
    );

    /*
     * Array of configuration settings. Amend each line as needed.
     */
    $config = array(
        'id'           => 'uniblock_wporg',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.

    );

    tgmpa( $plugins, $config );
}




if ( ! class_exists( 'Uniblock_After_Setup_Theme' ) ) {
    /**
     * Inspiro_After_Setup_Theme initial setup
     *
     * @since 1.0.0
     */
    class UniBlock_After_Setup_Theme {
        /**
         * Instance
         *
         * @var $instance
         */
        private static $instance;

        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object
         */
        public static function get_instance() {
            if ( ! isset( self::$instance ) ) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        /**
         * Constructor
         */
        public function __construct() {
            add_action( 'tgmpa_register', array( $this, 'register_required_plugins' ) );
            add_action( 'tgmpa_register', array( $this, 'register_required_plugins' ) );
            add_filter( 'ocdi/register_plugins', array( $this,'ocdi_register_plugins' ) );
            add_filter( 'ocdi/import_files', array( $this,'ocdi_import_files' ) );
            add_action( 'ocdi/after_import', array( $this,'ocdi_after_import_setup' ));

        }


        public function ocdi_register_plugins( $plugins ) {
          $theme_plugins = [
            [
                'name'     => 'Video Popup Block by WPZOOM',
                'slug'     => 'wpzoom-video-popup-block',
                'required' => false,
            ],
            [
                'name'     => 'Map Block for Google Maps',
                'slug'     => 'map-block-gutenberg',
                'required' => false,
            ],
          ];

          return array_merge( $plugins, $theme_plugins );
        }


        public function ocdi_import_files() {
          return [
            [
              'import_file_name'           => 'UniBlock',
              'import_file_url'            => get_template_directory_uri() . '/inc/demo-content/uniblock.xml',
              'import_preview_image_url'   => get_template_directory_uri() . '/screenshot.png',
              'preview_url'                => 'https://demo.wpzoom.com/uniblock/',
            ]
          ];
        }


        public function ocdi_after_import_setup() {
            // Assign menus to their locations.
            $main_menu = get_term_by( 'name', 'Primary', 'nav_menu' );

            set_theme_mod( 'nav_menu_locations', [
                    'primary' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function in your theme.
                ]
            );

            // Assign front page and posts page (blog page).
            $front_page_id = get_page_by_title( 'Homepage' );
            $blog_page_id  = get_page_by_title( 'Blog' );

            update_option( 'show_on_front', 'page' );
            update_option( 'page_on_front', $front_page_id->ID );
            update_option( 'page_for_posts', $blog_page_id->ID );

        }


        /**
         * Register the required plugins for this theme.
         *
         * In this example, we register five plugins:
         * - one included with the TGMPA library
         * - two from an external source, one from an arbitrary source, one from a GitHub repository
         * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
         *
         * The variables passed to the `tgmpa()` function should be:
         * - an array of plugin arrays;
         * - optionally a configuration array.
         * If you are not changing anything in the configuration array, you can remove the array and remove the
         * variable from the function call: `tgmpa( $plugins );`.
         * In that case, the TGMPA default settings will be used.
         *
         * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
         *
         * @since 1.2.3
         * @return void
         */
        public function register_required_plugins() {
            /*
             * Array of plugin arrays. Required keys are name and slug.
             * If the source is NOT from the .org repo, then source is also required.
             */

            $plugins = array(

                array(
                    'name'     => 'One Click Demo Import',
                    'slug'     => 'one-click-demo-import',
                    'required' => false,
                ),

                array(
                    'name'     => 'WPZOOM Portfolio',
                    'slug'     => 'wpzoom-portfolio',
                    'required' => false,
                ),

                array(
                    'name'     => 'Instagram Widget by WPZOOM',
                    'slug'     => 'instagram-widget-by-wpzoom',
                    'required' => false,
                ),

                array(
                    'name'     => 'Social Icons Widget by WPZOOM',
                    'slug'     => 'social-icons-widget-by-wpzoom',
                    'required' => false,
                ),

            );

            /*
             * Array of configuration settings. Amend each line as needed.
             *
             * TGMPA will start providing localized text strings soon. If you already have translations of our standard
             * strings available, please help us make TGMPA even better by giving us access to these translations or by
             * sending in a pull-request with .po file(s) with the translations.
             *
             * Only uncomment the strings in the config array if you want to customize the strings.
             */
            $config = array(
                'id'           => 'uniblock_wporg',         // Unique ID for hashing notices for multiple instances of TGMPA.
                'default_path' => '',                      // Default absolute path to bundled plugins.
                'menu'         => 'tgmpa-install-plugins', // Menu slug.
                'has_notices'  => true,                    // Show admin notices or not.
                'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
                'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
                'is_automatic' => false,                   // Automatically activate plugins after installation or not.
                'message'      => '',                      // Message to output right before the plugins table.
            );

            tgmpa( $plugins, $config );
        }

    }

}

Uniblock_After_Setup_Theme::get_instance();
