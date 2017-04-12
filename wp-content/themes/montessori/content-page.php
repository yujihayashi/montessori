<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="page-header">
		<header class="entry-header">
			<h1 class="">
				<?php
				the_title();
				?>
			</h1>
		</header>
	</div> <!-- .page-header -->
	<div class="entry-content">
		<?php
		the_content();
		edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
