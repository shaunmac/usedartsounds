<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package used_art_sounds
 */

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
<div class="top-header">

	<div class="top-header__shipping">
		<p class="top-header__p"><i class="fa-solid fa-truck-fast"></i> Free shipping on all orders over $100</p>
	</div>

	<div class="top-header__cart">
		<p class="top-header__p"><i class="fa-solid fa-cart-shopping"></i> Your cart: 0 items - $0.00</p>
	</div>

</div>  <!-- // #top-header -->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'usedartsounds' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php

			the_custom_logo();

			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<span><?php bloginfo( 'name' ); ?></span>
					</a>
				</h1>
				<?php
			else :
			?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$used_art_sounds_description = get_bloginfo( 'description', 'display' );
			if ( $used_art_sounds_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $used_art_sounds_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa-solid fa-bars"></i><i class="fa-solid fa-x"></i><span><?php esc_html_e( 'Primary Menu', 'usedartsounds' ); ?></span></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
