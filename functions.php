<?php
/**
 * Theme Functions
 *
 * @package     Genesis Sass
 * @subpackage  Genesis
 * @copyright   Copyright (c) 2014, Flagship
 * @license     GPL-2.0+
 * @since       1.0.0
 */

/**
 * Set Localization (do not remove).
 *
 * @since  1.0.0
 * @todo   change genesis-sass to your child theme text domain.
 * @todo   change genesis_sass to your child theme prefix.
 */
load_child_theme_textdomain( 'genesis-sass', apply_filters( 'genesis_sass_textdomain', get_stylesheet_directory() . '/languages', 'genesis-sass' ) );

add_action( 'genesis_setup', 'genesis_sass_setup', 15 );
/**
 * Set up the theme.
 *
 * @since  1.0.0
 * @todo   change genesis_sass to your child theme prefix.
 */
function genesis_sass_setup() {
	$genesis_sass = wp_get_theme();

	//* Child theme (do not remove)
	define( 'CHILD_THEME_NAME', 'Genesis Sass' );
	define( 'CHILD_THEME_URL', 'http://flagshipwp.com' );
	define( 'CHILD_THEME_VERSION', $genesis_sass->get( 'Version' ) );

	//* Add HTML5 markup structure.
	add_theme_support( 'html5' );

	//* Add viewport meta tag for mobile browsers.
	add_theme_support( 'genesis-responsive-viewport' );

	//* Add support for custom background.
	add_theme_support( 'custom-background' );

	//* Add support for 3-column footer widgets.
	add_theme_support( 'genesis-footer-widgets', 3 );

	//* Load the favicon from the assets folder.
	add_filter( 'genesis_pre_load_favicon', 'genesis_sass_load_favicon' );

	//* Enqueue all required child theme CSS files.
	add_action( 'wp_enqueue_scripts', 'genesis_sass_enqueue_styles' );
}

/**
 * Load the favicon from the assets folder.
 *
 * @param  string favicon url
 * @return string modified favicon uri
 * @since  1.0.0
 * @todo   change genesis_sass to your child theme prefix.
 */
function genesis_sass_load_favicon( $favicon ) {
	$favicon = get_stylesheet_directory_uri() . '/assets/images/favicon.ico';
	return $favicon;
}

/**
 * Enqueue all required child theme CSS files.
 *
 * @since  1.0.0
 * @todo   change genesis_sass to your child theme prefix.
 */
function genesis_sass_enqueue_styles() {
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,700', array(), CHILD_THEME_VERSION );
}
