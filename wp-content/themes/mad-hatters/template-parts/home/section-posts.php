<?php 
$short_text = get_sub_field( 'short_text' );
$heading    = get_sub_field( 'heading' );
$posts      = get_sub_field( 'posts' );

$post_ids = [];
if ( ! empty( $posts ) ) {
	foreach ( $posts as $p ) {
		array_push( $post_ids, $p['item'] );
	}
}
?>
<section class="home-posts side-padding">
	<div class="home-posts__container">
		<div class="home-posts__wrapper-top">
			<?php if ( $short_text ) : ?>
				<div 
					class="home-posts__short-text short-text"
				><?php esc_html_e( $short_text ); ?></div>
			<?php endif; ?>
			<?php if ( $heading ) : ?>
				<h2 class="home-posts__heading"><?php esc_html_e( $heading ); ?></h2>
			<?php endif; ?>
		</div>
		<?php 
		if ( ! empty( $post_ids ) ) {
			$args = array(
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'posts_per_page' => 4,
				'order'          => 'ASC',
				'post__in'       => $post_ids,
			);

			$the_query = new WP_Query( $args );

			if ( $the_query->have_posts() ) {
			?>
				<div class="home-posts__list">
					<?php
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						get_template_part( 'template-parts/home/content', 'post-item' );
					}
					?>
				</div>
				<div class="home-posts__show-more-container">
					<div 
						class="home-posts__show-more-text"
					><?php _e( 'More', 'mad-hatters' ) ?></div>
					<a 
						class="home-posts__show-more-btn"
						href="#"
					><?php _e( '+ Show more', 'mad-hatters' ); ?></a>
				</div>
			<?php
			wp_reset_postdata();
			}
		}
		?>
	</div>
</section>
