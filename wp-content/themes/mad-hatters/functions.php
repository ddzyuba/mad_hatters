<?php
/**
 * Mad Hatters functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mad_Hatters
 */

if ( ! defined( 'MAD_HATTERS_THEME_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'MAD_HATTERS_THEME_VERSION', '1.0.0' );
}

if ( ! defined( 'MAD_HATTERS_THEME_DIRECTORY_URL' ) ) {
	define( 'MAD_HATTERS_THEME_DIRECTORY_URL', get_template_directory_uri() );
}

if ( ! defined( 'MAD_HATTERS_THEME_DIRECTORY_PATH' ) ) {
	define( 'MAD_HATTERS_THEME_DIRECTORY_PATH', get_stylesheet_directory() );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
require get_template_directory() . '/inc/theme-setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Add ACF options page.
 */
require get_template_directory() . '/inc/acf-options.php';

/**
 * Load Fonts.
 */
require get_template_directory() . '/inc/fonts.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue-scripts-n-styles.php';

/**
 * Ajax actions and callback functions.
 */
require get_template_directory() . '/inc/ajax-functions.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
