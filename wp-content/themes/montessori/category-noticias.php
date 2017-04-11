<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<section id="primary" class="content-area">
	<div class="container">
		<div id="content" class="site-content" role="main">
			<header class="archive-header page-header">
				<h1 class="archive-title"><?php printf( single_cat_title( '', false ) ); ?></h1>
			</header><!-- .archive-header -->

			<div class="entry-content">
				<?php if ( have_posts() ) : ?>
				<ul class="lista-noticias">
					<?php
						// Start the Loop.
					while ( have_posts() ) : the_post();
					?>
					<?php get_template_part( 'inc/lista', 'noticias' ); ?>
					<?php
					endwhile;
					?>
				</ul>
				<?php projeto_paginacao(); ?>
				<?php
				else :
						// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
				?>
			</div> <!-- .entry-content -->
		</div><!-- #content -->
	</div> <!-- container -->
</section><!-- #primary -->

<?php
get_footer();
