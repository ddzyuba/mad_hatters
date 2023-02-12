<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mad_Hatters
 */

$header_logo = get_field( 'header_logo', 'option' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mad-hatters' ); ?></a>
	<header class="site-header side-padding">
		<div class="site-header__container container">
			<?php if ( $header_logo ) : ?>
				<a 
					href="<?php echo esc_url( home_url( '/' ) ); ?>"
					class="site-header__logo-link"
					rel="home"
				>
					<?php 
					echo wp_get_attachment_image(
						$header_logo, 
						'full',
						false, 
						array( 'loading' => 'lazy' ) 
					);
					?>
				</a>
			<?php endif; ?>
			<nav class="site-header__navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav>
			<button
				id="mobile-nav-open-button"
				aria-controls="js-mobile-nav"
				aria-expanded="false"
				aria-label="<?php esc_html_e( 'Button to open mobile navigation', 'mad-hatters' ); ?>"
			></button>
		</div>
	</header>
