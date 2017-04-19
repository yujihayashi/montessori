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
					?>
				</h1>
			</header>
		</div> <!-- .page-header -->
		<div class="page-tour-virtual">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
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
				</div> <!-- .col-md-8 -->
			</div> <!-- .row -->
		</div> <!-- .page-tour-virtual -->
	</div> <!-- .container -->
	<script src="<?php echo get_template_directory_uri(); ?>/360/swfobject/swfkrpano.js"></script>
	<div id="container" style="padding-top:50%;position: relative;">
		<div id="panoDIV" style="height:100%;position: absolute;left: 0;right:0;top:0;bottom:0;">
			<script>
				embedpano({target:"panoDIV",swf:"<?php echo get_template_directory_uri(); ?>/360/Peteleco.swf"});
			</script>
			<noscript>
				<div id="tour">
					<object width="100%" height="100%">
						<embed src="<?php echo get_template_directory_uri(); ?>/360/Peteleco.swf" width="100%" height="100%" allowFullScreen="true"></embed>
					</object>
				</div>
			</noscript>
		</div>
	</div>
</article><!-- #post-## -->
<?
endwhile;
?>



<?php
get_footer();

