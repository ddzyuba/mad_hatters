<?php 

/**
 * Ajax actions and callback function to load more posts on the home page.
 */
function ajax_show_posts_callback() {

	$args = [
		'paged'          => (int) $_POST['page'],
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' => 4,
		'order'          => 'ASC',
	];

	$the_query           = new WP_Query( $args );

	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			get_template_part( 'template-parts/home/content', 'post-item' );
		}
	}

	die();
}
add_action( 'wp_ajax_nopriv_show_posts', 'ajax_show_posts_callback' );
add_action( 'wp_ajax_show_posts', 'ajax_show_posts_callback' );
