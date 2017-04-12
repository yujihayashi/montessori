<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div class="container">
	<div class="row">
		<?php if (get_post_ancestors( $post->ID )) { ?>
		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div> <!-- col-md-3 -->
		<div class="col-md-9">
		<?php } else {echo "<div class='col-md-12'>";} ?>
			<?php
			while ( have_posts() ) : the_post();

			get_template_part( 'content', 'page' );

			endwhile;
			?>
		</div> <!-- col-md-9 -->
	</div> <!-- row -->
</div> <!-- container -->

<?php

get_footer();
