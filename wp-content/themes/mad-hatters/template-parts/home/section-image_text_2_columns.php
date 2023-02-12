<?php 
$image           = get_sub_field( 'image' );
$short_text      = get_sub_field( 'short_text' );
$heading         = get_sub_field( 'heading' );
$cta_button_text = get_sub_field( 'cta_button_text' );
$cta_button_url  = get_sub_field( 'cta_button_url' );
?>
<section class="img-txt-2-col side-padding">
	<div class="img-txt-2-col__container">
		<div class="img-txt-2-col__col-1">
			<?php
			if ( $image ) {
				echo wp_get_attachment_image( 
					$image , 
					'full', 
					false, 
					array( 
						'class'   => 'img-txt-2-col__image-1',
						'loading' => 'lazy',
					) 
				);
			}
			?>
		</div>
		<div class="img-txt-2-col__col-2">
			<?php if ( $short_text ): ?>
				<div 
					class="img-txt-2-col__short-text short-text"
				><?php esc_html_e( $short_text ); ?></div>
			<?php endif; ?>
			<?php if ( $heading ) : ?>
				<h2 class="img-txt-2-col__heading"><?php esc_html_e( $heading ); ?></h2>
			<?php endif; ?>
			<?php if ( $cta_button_text && $cta_button_url ) : ?>
				<div class="img-txt-2-col__cta-wrapper">
					<a 
						class="cta-button"
						href="<?php echo esc_url( $cta_button_url ); ?>"
					><?php esc_html_e( $cta_button_text ); ?></a>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
