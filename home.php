<?php
/**
 * The first site being displayed when loading Julia's website.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EUlia
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>
		
				<header>
					<h1 class="page-title screen-reader-text">Hello World! Hello c3o!</h1>
				</header>

			<?php

			/* Show the last post */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
