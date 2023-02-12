<?php
$items = get_sub_field( 'items' ); 

if ( ! empty( $items ) ) :
?>
	<section class="text-3-col side-padding">
		<div class="text-3-col__container">
			<?php for ( $i = 0; $i < count( $items ); $i++ ): ?>
				<div class="text-3-col__item">
					<?php if ( $items[ $i ]['heading'] ) : ?>
						<h3 
							class="text-3-col__title"
						><?php esc_html_e( $items[ $i ]['heading'] ); ?></h3>
					<?php endif; ?>
					<?php if ( $items[ $i ]['text'] ) : ?>
						<div 
							class="text-3-col__text"
						><?php esc_html_e( $items[ $i ]['text'] ); ?></div>
					<?php endif; ?>
				</div>
			<?php endfor; ?>
		</div>
	</section>
<?php 
endif;
