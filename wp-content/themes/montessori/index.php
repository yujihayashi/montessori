<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div class="home-banner">
	<a href="javascript:void(0);" class="cycle-prev"><span class="fa fa-arrow-circle-o-left"></span></a>
	<a href="javascript:void(0);" class="cycle-next"><span class="fa fa-arrow-circle-o-right"></span></a>
	<ul class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-timeout="5000" data-cycle-speed="1800" data-cycle-slides="> li" data-cycle-pager=".home-banner .cycle-nav" data-cycle-next=".home-banner .cycle-next" data-cycle-prev=".home-banner .cycle-prev" data-cycle-easing="easeInOutExpo" data-cycle-log="false" data-cycle-swipe="true">
		<?php $args = array(
			'orderby'          => 'rating',
			'category_name'    => 'banner',
			'categorize'       => 0,
			'title_li'         => '',
			'category_orderby' => 'name',
			'category_order'   => 'ASC',
			'class'            => 'linkcat',
			'category_before'  => '<div>',
			'show_name'		=> false,
			'category_after'   => '</div>' ); ?> 
			<?php wp_list_bookmarks($args); ?>
		<? /* <li>
			<div class="content" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/banner-01.jpg);">
				<img src="<?php echo get_template_directory_uri(); ?>/img/pixel.gif" alt="pixel" class="pixel">
			</div> <!-- .content -->
		</li> */ ?>
	</ul>
	<div class="cycle-nav"></div>
</div> <!-- .home-banner -->
<div class="home-chamadas">
	<div class="page-content">
		<div class="container">
			<div class="row">
				<a href="#" class="col-md-4 col-sm-4 chamada">
					<span class="content">
						<span class="imagem"><span class="fa fa-calendar"></span></span>
						<span class="title">Calendário</span>
					</span>
				</a> <!-- .chamada -->
				<a href="#" class="col-md-4 col-sm-4 chamada">
					<span class="content">
						<span class="imagem"><span class="fa fa-video-camera"></span></span>
						<span class="title">Galeria de Vídeos</span>
					</span>
				</a> <!-- .chamada -->
				<a href="#" class="col-md-4 col-sm-4 chamada">
					<span class="content">
						<span class="imagem"><span class="fa fa-image"></span></span>
						<span class="title">Galeria de Fotos</span>
					</span>
				</a> <!-- .chamada -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .page-content -->
</div> <!-- .home-chamadas -->
<div class="home-blog">
	<div class="container">
		<?php
    // Get the ID of a given category
		$category_id = get_cat_ID( 'Blog' );

    // Get the URL of this category
		$category_link = get_category_link( $category_id );
		?>
		<h2 class="page-title">Últimas do blog</h2>
		<div class="page-content">
			<ul class="lista-blog">
				<?
				global $post;
				$args = array( 'numberposts' => 3, 'category_name' => 'blog' );
				$posts = get_posts( $args );
				if ($posts) {
					foreach( $posts as $post ): setup_postdata($post); 

					?>
					<?php get_template_part( 'inc/lista', 'blog' ); ?>
					<?php
					endforeach; 
				} else { echo '<p class="text-center">No momento não há nenhum post publicado.</p>';}
				?>
			</ul>
			<p class="text-right">
				<a href="<?= $category_link; ?>" class="btn btn-primary" title="Veja todos os posts">Ver Mais <i class="fa fa-arrow-circle-o-right"></i></a>
			</p>
		</div> <!-- .page-content -->
	</div> <!-- .container -->
</div> <!-- .home-blog -->

<?php get_footer(); ?>