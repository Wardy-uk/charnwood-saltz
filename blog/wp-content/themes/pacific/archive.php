<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pacific
 */

get_header(); ?>

<div class="content-sidebar-wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main masonry-container">

		<?php
		if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->

		<?php pacific_posts_navigation();?>

	</div><!-- #primary -->
</div><!-- .content-sidebar-wrap -->

<?php
get_footer();
