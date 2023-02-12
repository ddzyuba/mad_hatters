<?php
$text = get_sub_field( 'text' );

if ( $text ) : 
?>
	<section class="blockquote">
		<div class="blockquote__circle-1"></div>
		<div class="blockquote__circle-2"></div>
		<div class="blockquote__text-wrapper">
			<div class="blockquote__text"><?php esc_html_e( $text ); ?></div>
		</div>
	</section>
<?php
endif;
