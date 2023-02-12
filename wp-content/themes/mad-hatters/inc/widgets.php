<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mad_hatters_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer column 1', 'mad-hatters' ),
			'id'            => 'footer-column-1',
			'description'   => esc_html__( 'Add widgets here.', 'mad-hatters' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer column 2', 'mad-hatters' ),
			'id'            => 'footer-column-2',
			'description'   => esc_html__( 'Add widgets here.', 'mad-hatters' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer column 3', 'mad-hatters' ),
			'id'            => 'footer-column-3',
			'description'   => esc_html__( 'Add widgets here.', 'mad-hatters' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'mad_hatters_widgets_init' );
