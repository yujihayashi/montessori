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

<?php
				// Start the Loop.
while ( have_posts() ) : the_post();

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="page-header">
			<header class="entry-header">
				<h1 class="text-center">
					<?php
						// twentyfourteen_post_thumbnail();
					the_title();
					?> <a href="https://responsavel.agendakidsdigital.com/" title="Acesse o sistema do Agenda Kids para responsáveis" class="btn btn-primary">Acesse aqui</a>
				</h1>
			</header>
		</div> <!-- .page-header -->
		<div class="page-agenda-kids">
			<div class="entry-content">
				<?php
				the_content();
				?>

				<?php
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					) );

				edit_post_link( __( 'Editar', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
				?>
			</div><!-- .entry-content -->
		</div> <!-- .page-agenda-kids -->
	</div> <!-- .container -->
</article><!-- #post-## -->
<?
endwhile;
?>



<?php
get_footer();

