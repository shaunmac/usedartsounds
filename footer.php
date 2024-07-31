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

?>

	<footer id="colophon" class="site-footer">
		
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
