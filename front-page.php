<?php
/**
 * Template Name: frontpage
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package used_art_sounds
 */


get_header();
?>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :
		
        ?>
        <div class="home-banner">
            <div class="home-banner__wrapper">
                <div class="home-banner__content">
                    <h1 class="home-banner__title font-header"><?php the_field('title'); ?></h1>
                    <h2 class="home-banner__subtitle"><?php the_field('subtitle'); ?></h2>
                    
                </div>
                <div class="home-banner__image-wrapper">
                <?php 
                    $image = get_field('image');
                    if( !empty( $image ) ): ?>
                        <img class="home-banner__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                </div>

                <?php 
                    $link = get_field('link');
                    if( $link ): ?>
                        <a class="button" href="<?php echo esc_url( $link['url'] ); ?>">SHOP NOW</a>
                <?php endif; ?>
            </div>
        </div>

        <?php while ( have_posts() ) : the_post(); ?>
        <div class="content-wrapper">
        <?php the_content(); ?>
        </div>
        <?php endwhile;

			the_posts_navigation();


		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
