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
				<?php 
				// global $post;
				$args = array( 'posts_per_page' => get_option( 'posts_per_page' ), 'category_name' => 'galeria', 'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ) );
				$postslist = new WP_Query( $args );
				if ( have_posts() ) : ?>
				<ul class="lista-galeria row clearfix">
					<?php
						// Start the Loop.
					while ( $postslist->have_posts() ) : $postslist->the_post(); 
					// while ( have_posts() ) : the_post();
					?>
					<li class="col-md-4">
						<?php 
							$media = get_attached_media( 'image', $post->ID );
							 ?>
						<?php if ( has_post_thumbnail() ) { 

							$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
							<a href="<?php the_permalink(); ?>" style="background-image:url(<?php echo $thumbnail_url; ?>);" class="imagem" title="Veja a galeria de fotos"></a>
							<?php } else { ?>
							<a href="<?php the_permalink(); ?>" style="background-image:url(<?php echo array_values($media)[0]->guid; ?>);" class="imagem" title="Veja a galeria de fotos"></a>
							<?php } //if ( has_post_thumbnail() ) { ?>
							<a href="<?php the_permalink(); ?>" class="title" title="Veja a galeria de fotos"><?php echo the_title(); ?></a>
						</li>
						<?php
						endwhile;
					// endforeach;
					// twentyfourteen_paging_nav();

						?>
					</ul>
					<?php projeto_paginacao(); ?>
					<?php
					wp_reset_postdata();
					else :
						// If no content, include the "No posts found" template.
						get_template_part( 'content', 'none' );

					endif;
					?>
				</div> <!-- .entry-content -->
			</div><!-- #content -->
		</div> <!-- container -->
	</section><!-- #primary -->
	<script type="text/javascript">
	jQuery(document).ready( function () {
		$('.lista-fotos').find('> li:nth-child(2n-1)').addClass('first');
	});
	</script>
	<?php
	get_footer();
