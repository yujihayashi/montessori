<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="container">
	<?php
				// Start the Loop.
	while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					// Previous/next post navigation.
					// twentyfourteen_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
					/*if ( comments_open() || get_comments_number() ) {
						comments_template();
					}*/
					endwhile;
					?>


					<?php
					$category_id = get_cat_ID( 'Noticias' );
					
					$category_link = get_category_link( $category_id );
					?>
					<div class="box-noticias">
						<h2 class="box-title"><a href="#" title="Veja todas as notícias">Veja mais notícias</a></h2>
						<div class="box-content">
							<ul class="lista-noticias row">
								<?
								global $post;
								$args = array( 'numberposts' => 3, 'category_name' => 'noticias', 'exclude' => get_the_ID() );
								$posts = get_posts( $args );
								if ($posts) {
									foreach( $posts as $post ): setup_postdata($post); 
									?>
									<li class="clearfix col-md-12 destaque">
										<div class="row">
											<?php if ( has_post_thumbnail() ) { 
												$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
												<div class="col-md-3">
													<a href="<?php the_permalink(); ?>" title="Leia na íntegra" class="imagem" style="background-image:url(<?php echo $thumbnail_url; ?>);">
														<img src="<?php echo get_template_directory_uri(); ?>/img/pixel.gif" clas="pixel" alt="">
													</a> <!-- .imagem -->
												</div> <!-- col-md-3 -->
												<div class="col-md-9">
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
												</div> <!-- col-md-9 -->
											</div> <!-- row -->
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


					</div> <!-- .container -->

					<?php
					get_footer();
