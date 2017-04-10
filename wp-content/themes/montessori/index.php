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
	<div class="color-bar clearfix">
		<span class="bar-1"></span>
		<span class="bar-2"></span>
		<span class="bar-3"></span>
		<span class="bar-4"></span>
		<span class="bar-5"></span>
		<span class="bar-6"></span>
	</div> <!-- color-bar -->
</div> <!-- .home-banner -->
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<?php
			$category_id = get_cat_ID( 'Noticias' );

			$category_link = get_category_link( $category_id );
			?>
			<div class="box-noticias">
				<h2 class="box-title">Notícias</h2>
				<div class="box-content">
					<ul class="lista-noticias">
						<?
						global $post;
						$args = array( 'numberposts' => 1, 'category_name' => 'noticias' );
						$posts = get_posts( $args );
						if ($posts) {
							foreach( $posts as $post ): setup_postdata($post); 
							?>
							<?php get_template_part( 'inc/lista', 'noticias' ); ?>
							<?php
							endforeach; 
						}
						?>
						<?
						global $post;
						$args = array( 'numberposts' => 2, 'category_name' => 'noticias', 'offset' => '1' );
						$posts = get_posts( $args );
						if ($posts) {
							foreach( $posts as $post ): setup_postdata($post); 

							?>
							<?php get_template_part( 'inc/lista', 'noticias' ); ?>
							<?php
							endforeach; 
						} else { echo '<li>No momento não há nenhuma notícia publicada.</li>';}
						?>
					</ul>
					<p>
						<a href="<?= $category_link; ?>" class="btn btn-info" title="Veja todos os posts">+ notícias</a>
					</p>
				</div> <!-- .box-content -->
			</div> <!-- box-noticias -->
		</div> <!-- col-md-8 -->
		<div class="col-md-3 col-md-offset-1">
			<div class="box-avisos">
				<h2 class="box-title">Avisos</h2>
				<div class="box-content">
					<ul class="lista-avisos">
						<li>
							<h3>Dia internacional do livro infantil</h3>
							<p>
								No dia 4 de abril será a comemoração do Dia Internacional do Livro Infantil no Peteleco.
							</p>
						</li>
					</ul>
				</div> <!-- box-content -->
			</div> <!-- box-avisos -->
			<div class="box-tv">
				<h2 class="box-title">TV Montessori</h2>
				<div class="box-content">
					<p>
						<a href="<?= $category_link; ?>" class="btn btn-info" title="Veja todos os posts">+ vídeos</a>
					</p>
				</div> <!-- box-content -->
			</div> <!-- box-tv -->
		</div> <!-- col-md-3 -->
	</div> <!-- row -->
</div> <!-- container -->

<?php get_footer(); ?>