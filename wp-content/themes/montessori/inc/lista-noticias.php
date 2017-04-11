<li class="clearfix destaque">
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