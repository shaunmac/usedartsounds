<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package used_art_sounds
 */

get_header();

?>

	<main id="primary" class="site-main">
	<div class="content-wrapper">
		<section class="error-404 not-found">

			<div class="page-content">




				<div class="error-404__colums">
					<!-- Image Wrapper -->
					<img class="error-404__image" src="https://usedartsounds.com/wp-content/uploads/2026/09/404.jpg" alt="Product Image">
					
					<!-- Content Wrapper -->
					<div class="error-404__content">
						<h1 class="error-404__page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'usedartsounds' ); ?></h1>
						<p class="error-404__page-s-title"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'usedartsounds' ); ?></p>
					</div>

				</div>

				

					

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

		<?php if ( class_exists( 'WooCommerce' ) ) : ?>
	<section class="error-404__products">
		<h2 class="error-404__products-title">
			<?php esc_html_e( 'Shop the collection', 'usedartsounds' ); ?>
		</h2>

		<?php
		echo do_shortcode(
			'[products limit="4" columns="4" orderby="popularity" visibility="visible"]'
		);
		?>
	</section>
<?php endif; ?>
	</div>
	</main><!-- #main -->

<?php
get_footer();
