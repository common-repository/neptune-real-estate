<?php
/**
 * The template for displaying all single property
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Neptune WP
 */

get_header(); ?>

	<div id="primary" class="content-area grid-wide">
		<main id="main" class="site-main col-9-12">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/property', get_post_type() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->

<?php

get_footer();
