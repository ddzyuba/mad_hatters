<?php 

/**
 * Enqueue scripts and styles.
 */
function mad_hatters_scripts() {
	$css_ver = date( 'YsB', filemtime( MAD_HATTERS_THEME_DIRECTORY_PATH . '/style.css' ) );
	wp_enqueue_style( 'mad-hatters-style', get_stylesheet_uri(), array(), $css_ver );

	$js_ver = date( 'YsB', filemtime( MAD_HATTERS_THEME_DIRECTORY_PATH . '/assets/js/dist/scripts.min.js' ) );

	wp_enqueue_script( 
		'mad-hatters-main', 
		MAD_HATTERS_THEME_DIRECTORY_URL . '/assets/js/dist/scripts.min.js', 
		array( 'jquery' ), 
		$js_ver, 
		true 
	);

	wp_localize_script( 'mad-hatters-main', 'madHattersData', array(
		'ajaxUrl' => admin_url( 'admin-ajax.php' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'mad_hatters_scripts' );
