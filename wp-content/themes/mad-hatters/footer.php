<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mad_Hatters
 */

$copyright = get_field( 'copyright', 'option' );
?>
	<footer class="site-footer side-padding">
		<div class="container">
			<div class="site-footer__wrapper">
				<div class="site-footer__col-1">
					<?php
					if ( is_active_sidebar( 'footer-column-1' ) ) {
						dynamic_sidebar( 'footer-column-1' );
					}
					?>
					<?php if ( $copyright ) : ?>
						<div 
							class="site-footer__copyright"
						><?php echo wp_kses_post( $copyright ); ?></div>
					<?php endif; ?>
				</div>
				<div class="site-footer__col-2">
					<?php
					if ( is_active_sidebar( 'footer-column-2' ) ) {
						dynamic_sidebar( 'footer-column-2' );
					}
					?>
				</div>
				<div class="site-footer__col-3">
					<?php
					if ( is_active_sidebar( 'footer-column-3' ) ) {
						dynamic_sidebar( 'footer-column-3' );
					}
					?>
				</div>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
