<?php 
$short_text     = get_sub_field( 'short_text' );
$heading        = get_sub_field( 'heading' );
$form_shortcode = get_sub_field( 'form_shortcode' );
?>
<section class="signup side-padding">
	<div class="signup__container">
		<?php if ( $short_text ) : ?>
			<div 
				class="signup__short-text short-text"
			><?php esc_html_e( $short_text ); ?></div>
		<?php endif; ?>
		<?php if ( $heading ) : ?>
			<h2 class="signup__heading"><?php esc_html_e( $heading ); ?></h2>
		<?php endif; ?>
		<?php 
		if ( $form_shortcode && shortcode_exists( 'contact-form-7' ) ) {
			echo do_shortcode( $form_shortcode );
		}
		?>
	</div>
</section>
