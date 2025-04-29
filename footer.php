<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package used_art_sounds
 */

$theme_dir = get_template_directory_uri();
$site_title = get_bloginfo('name');
$site_dist = get_bloginfo('description');

?>

	<footer id="colophon" class="site-footer">

		<div class="site-footer__logo">
			<div class="site-footer__logo--left">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/footerlogo.png" width="240" height="240" class="site-footer__logo-image">
			</div>
			<div class="site-footer__logo--right">
				<p class="site-footer__title font-header"><?php echo $site_title; ?></p>
				<p class="site-footer__tagline"><?php echo $site_dist; ?></p>
			</div>
		</div>
		
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer-menu',
					'orderby' 	     => 'menu_order'
				)
			);
		?>

		<div class="site-info">

			<p>UsedArtSounds.com &copy; <?php echo date('Y'); ?> All Rights Reserved.</p>

			<?php wp_nav_menu(
				array(
					'theme_location' 	=> 'footer-socials',
					'orderby' 	     	=> 'menu_order',
					'container' 	 	=> '',
					'before'    		=> '',
					'after'				=> '',
					'container_class' 	=> 'menu-socials',
				)
			); ?>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
