<?php 

/**
 * Add ACF options page.
 */
function acf_op_init() {

	if ( function_exists( 'acf_add_options_page' ) ) {

		$option_page = acf_add_options_page( array(
			'page_title'    => __( 'Mad Hatters Theme Options', 'mad-hatters' ),
			'menu_title'    => __( 'Mad Hatters Options', 'mad-hatters' ),
			'menu_slug'     => 'theme-general-settings',
			'capability'    => 'edit_posts',
			'redirect'      => false
		) );
	}
}
add_action( 'acf/init', 'acf_op_init' );
