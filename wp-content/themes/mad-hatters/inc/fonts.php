<?php

/**
 * Preload Google fonts that are located in the theme,
 * instead of loading from Google server to improve scores
 * in Google Pagespeed Insights test.
 */
function preload_fonts() {
	?>
	<link 
		rel="preload" 
		href="<?php echo MAD_HATTERS_THEME_DIRECTORY_URL . '/assets/fonts/PlayfairDisplay/PlayfairDisplay_latin-ext_400_italic.woff2'?>" 
		as="font" 
		crossorigin="anonymous"
	>
	<link 
		rel="preload" 
		href="<?php echo MAD_HATTERS_THEME_DIRECTORY_URL . '/assets/fonts/PlayfairDisplay/PlayfairDisplay_latin_400_italic.woff2'; ?>" 
		as="font" 
		crossorigin="anonymous"
	>
	<link 
		rel="preload" 
		href="<?php echo MAD_HATTERS_THEME_DIRECTORY_URL . '/assets/fonts/PlayfairDisplay/PlayfairDisplay_latin-ext_700_normal.woff2'?>" 
		as="font" 
		crossorigin="anonymous"
	>
	<link 
		rel="preload" 
		href="<?php echo MAD_HATTERS_THEME_DIRECTORY_URL . '/assets/fonts/PlayfairDisplay/PlayfairDisplay_latin_700_normal.woff2'?>" 
		as="font" 
		crossorigin="anonymous"
	>
	<link 
		rel="preload" 
		href="<?php echo MAD_HATTERS_THEME_DIRECTORY_URL . '/assets/fonts/Poppins/Poppins_latin-ext_300_normal.woff2'?>" 
		as="font" 
		crossorigin="anonymous"
	>
	<link 
		rel="preload" 
		href="<?php echo MAD_HATTERS_THEME_DIRECTORY_URL . '/assets/fonts/Poppins/Poppins_latin_300_normal.woff2'?>" 
		as="font" 
		crossorigin="anonymous"
	>
	<link 
		rel="preload" 
		href="<?php echo MAD_HATTERS_THEME_DIRECTORY_URL . '/assets/fonts/Poppins/Poppins_latin-ext_400_normal.woff2'?>" 
		as="font" 
		crossorigin="anonymous"
	>
	<link 
		rel="preload" 
		href="<?php echo MAD_HATTERS_THEME_DIRECTORY_URL . '/assets/fonts/Poppins/Poppins_latin_400_normal.woff2'?>" 
		as="font" 
		crossorigin="anonymous"
	>
	<link 
		rel="preload" 
		href="<?php echo MAD_HATTERS_THEME_DIRECTORY_URL . '/assets/fonts/Poppins/Poppins_latin-ext_600_normal.woff2'?>" 
		as="font" 
		crossorigin="anonymous"
	>
	<link 
		rel="preload" 
		href="<?php echo MAD_HATTERS_THEME_DIRECTORY_URL . '/assets/fonts/Poppins/Poppins_latin_600_normal.woff2'?>" 
		as="font" 
		crossorigin="anonymous"
	>
	<?php
}
add_action( 'wp_head', 'preload_fonts' );
