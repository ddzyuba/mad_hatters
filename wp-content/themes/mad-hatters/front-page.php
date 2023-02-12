<?php
/**
 * The template for displaying Front page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mad_Hatters
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		if ( class_exists( 'acf' ) ) {
			get_template_part( 'template-parts/content', 'front' );
		} else {
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'page' );
			endwhile;
		}
		?>

	</main>

<?php
get_footer();
