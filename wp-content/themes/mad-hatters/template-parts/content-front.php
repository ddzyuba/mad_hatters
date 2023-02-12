<?php
/**
 * Template part for displaying page content in front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mad_Hatters
 */

$hero = get_field( 'hero' );
?>
<section class="hero side-padding">
	<div class="container">
		<div class="hero__container">
			<div class="hero__wrapper-images">
				<div class="hero__wrapper-images-inner">
					<div class="hero__circle"></div>
					<div class="hero__circle-2"></div>
					<?php 
					if ( $hero['image_1'] ) {
						echo wp_get_attachment_image( 
							$hero['image_1'], 
							'full', 
							false, 
							array( 
								'class'   => 'hero__image-1',
								'loading' => 'lazy',
							) 
						);
					}
					if ( $hero['image_2'] ) {
						echo wp_get_attachment_image( 
							$hero['image_2'], 
							'full', 
							false, 
							array( 
								'class'   => 'hero__image-2',
								'loading' => 'lazy',
							) 
						);
					}
					?>
				</div>
			</div>

			<div class="hero__wrapper-text">
				<?php if ( $hero['short_text'] ) : ?>
					<div 
						class="hero__short-text short-text"
					><?php esc_html_e( $hero['short_text'] ); ?></div>
				<?php endif; ?>
				<?php if ( $hero['heading_1'] && $hero['heading_2'] ) : ?>
					<h1 class="hero__heading">
						<span><?php echo wp_kses_post( $hero['heading_1'] ); ?></span>
						<br>
						<span class="hero__heading-letter-1">b</span>
						<span class="hero__heading-letter-2">/</span>
						<span class="hero__heading-letter-3">c</span>
						<span><?php echo wp_kses_post( $hero['heading_2'] ); ?></span>
					</h1>
				<?php endif; ?>
				<?php if ( $hero['cta_button_text'] && $hero['cta_button_url'] ) : ?>
					<div class="hero__cta-wrapper">
						<a 
							class="cta-button"
							href="<?php echo esc_url( $hero['cta_button_url'] ); ?>"
						><?php esc_html_e( $hero['cta_button_text'] ); ?></a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php
while ( the_flexible_field( 'sections' ) ) {
	get_template_part( 'template-parts/home/section', get_row_layout() );
}
?>
