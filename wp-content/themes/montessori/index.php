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
	<ul class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-timeout="5000" data-cycle-speed="1800" data-cycle-slides="> li" data-cycle-pager=".home-banner .cycle-nav" data-cycle-easing="easeInOutExpo" data-cycle-log="false" data-cycle-swipe="true" data-cycle-pager-template="<a href='javascript:void(0);'> <i class='fa fa-circle'></i> <span class='sr-only'>{{slideNum}}</span> </a>">
		<?php $args = array(
			'orderby'          => 'rating',
			'category_name'    => 'banner',
			'categorize'       => 0,
			'title_li'         => '',
			'category_orderby' => 'name',
			'category_order'   => 'ASC',
			'class'            => 'linkcat',
			'category_before'  => '<li id=%id class=%class>',
			'show_name'		=> false,
			'category_after'   => '</li>' ); ?> 
			<?php wp_list_bookmarks($args); ?>
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
<div class="home-blocos">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php
				$category_id = get_cat_ID( 'Noticias' );
				
				$category_link = get_category_link( $category_id );
				?>
				<div class="box-noticias">
					<h2 class="box-title"><a href="#" title="Veja todas as notícias">Notícias</a></h2>
					<div class="box-content">
						<ul class="lista-noticias row">
							<?
							global $post;
							$args = array( 'numberposts' => 1, 'category_name' => 'noticias' );
							$posts = get_posts( $args );
							if ($posts) {
								foreach( $posts as $post ): setup_postdata($post); 
								?>
								<li class="clearfix col-md-12 destaque">
									<div class="row">
										<?php if ( has_post_thumbnail() ) { 
											$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
											<div class="col-md-5">
												<a href="<?php the_permalink(); ?>" title="Leia na íntegra" class="imagem" style="background-image:url(<?php echo $thumbnail_url; ?>);">
													<img src="<?php echo get_template_directory_uri(); ?>/img/pixel.gif" clas="pixel" alt="">
												</a> <!-- .imagem -->
											</div> <!-- col-md-5 -->
											<div class="col-md-7">
												<?php } else {
													echo '<div class="col-md-12">';
												} //if ( has_post_thumbnail() ) { ?>
												<div class="media">
													<div class="media-left">
														<div class="date">
															<span class="day"><?php echo get_the_date('d'); ?></span>
															<span class="month"><?php echo get_the_date('M'); ?></span>
															<i class="fa fa-caret-right"></i>
														</div> <!-- .date -->
													</div> <!-- media-left -->
													<div class="media-body media-middle">
														<h3 class="h4 title">
															<a href="<?php the_permalink(); ?>" title="Leia na íntegra" class=""><?php the_title(); ?></a>
														</h3>
													</div> <!-- media-body -->
												</div> <!-- media -->
												<div class="resumo"><?php the_excerpt(); ?></div>
											</div> <!-- col-md-7 -->
										</div> <!-- row -->
									</li>
									<?php
									endforeach; 
								} else { echo '<li>No momento não há nenhuma notícia publicada.</li>';}
								?>
								<?
								global $post;
								$args = array( 'numberposts' => 2, 'category_name' => 'noticias', 'offset' => '1' );
								$posts = get_posts( $args );
								if ($posts) {
									foreach( $posts as $post ): setup_postdata($post); 
									?>
									<li class="clearfix col-md-6">
										<div class="date">
											<span class="day"><?php echo get_the_date('d'); ?></span>
											<span class="separator">de</span>
											<span class="month"><?php echo get_the_date('F'); ?></span>
										</div> <!-- .date -->
										<div class="text">
											<h3 class="h4 title">
												<a href="<?php the_permalink(); ?>" title="Leia na íntegra" class=""><?php the_title(); ?></a>
											</h3>
											<?php the_excerpt(); ?>
										</div> <!-- .text -->
									</li>
									<?php
									endforeach; 
								} 
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
							<ul class="cycle-slideshow lista-avisos" data-cycle-fx="scrollHorz" data-cycle-timeout="5000" data-cycle-speed="1800" data-cycle-slides="> li" data-cycle-pager=".box-avisos .cycle-nav" data-cycle-easing="easeInOutExpo" data-cycle-log="false" data-cycle-swipe="true" data-cycle-pager-template="<a href='javascript:void(0);'> <i class='fa fa-circle'></i> <span class='sr-only'>{{slideNum}}</span> </a>">
								<?
								global $post;
								$args = array( 'category_name' => 'avisos' );
								$posts = get_posts( $args );
								if ($posts) {
									foreach( $posts as $post ): setup_postdata($post); 
									?>
									<li class="">
											<h3 class="title">
												<?php the_title(); ?>
											</h3>
											<?php the_content(); ?>
									</li>
									<?php
									endforeach; 
								} else { echo '<li>No momento não há nenhum aviso publicado.</li>';}
								?>
							</ul>
							<div class="cycle-nav"></div>
						</div> <!-- box-content -->
					</div> <!-- box-avisos -->
					<div class="box-tv">
						<h2 class="box-title"><a href="#" title="Veja todos os vídeos">TV Montessori</a></h2>
						<div class="box-content">
							<?
							global $post;
							$args = array( 'numberposts' => 1, 'category_name' => 'TV Montessori' );
							$posts = get_posts( $args );
							$category_id = get_cat_ID( 'Videos' );

							$category_link = get_category_link( $category_id );
								// print_r($posts);
							if ($posts) {
								foreach( $posts as $post ): setup_postdata($post); 
								?>
								<div class="embed-responsive embed-responsive-16by9">
									<iframe width="853" height="480" src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'youtube_id', true); ?>" frameborder="0" allowfullscreen></iframe>
								</div>

								<?php
								endforeach; 
							} else { echo '<div>No momento não há nenhum vídeo publicado.</div>';}
							?>
							<p>
								<a href="<?= $category_link; ?>" class="btn btn-info" title="Veja todos os posts">+ vídeos</a>
							</p>
						</div> <!-- box-content -->
					</div> <!-- box-tv -->
				</div> <!-- col-md-3 -->
			</div> <!-- row -->
		</div> <!-- container -->
	</div> <!-- home-blocos -->

	<?php get_footer(); ?>