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
        <header class="home-banner">
            <div class="home-banner__wrapper">
                <div class="home-banner__content">
                    <h1 class="home-banner__title"><?php the_field('title'); ?></h1>
                    <h2 class="home-banner__subtitle"><?php the_field('subtitle'); ?></h2>
                    <?php 
                        $link = get_field('link');
                        if( $link ): ?>
                            <a class="button" href="<?php echo esc_url( $link['url'] ); ?>">SHOP NOW</a>
                    <?php endif; ?>
                </div>
                <div class="home-banner__image-wrapper">
                <?php 
                    $image = get_field('image');
                    if( !empty( $image ) ): ?>
                        <img class="home-banner__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                </div>
            </div>
        </header>

        <?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
