</div> <!-- .site-central -->
</div> <!-- .extra-central -->
<footer class="extra-footer">
	<div class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-12 text-center">
					<p>
						<img src="<?php echo get_template_directory_uri(); ?>/img/mundo-montessori-white.png" alt="Logo Mundo Montessori" class="logo-footer">
					</p>
					<p class="footer-frase">
						A Educação Cósmica permite a formação do cidadão universal apto a relacionar-se com as exigências do mundo moderno de forma harmônica, criativa e ética.
					</p>
					<br>
					<p>
						<a href="<?php echo site_url('agenda-kids'); ?>" title="Conheça e baixe o Agenda Kids!"><img src="<?php echo get_template_directory_uri(); ?>/img/agenda-kids-white.png" alt="Agenda Kids"></a>
					</p>
					<p>
						<a href="https://itunes.apple.com/us/app/agenda-kids/id924641763" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/app-store.png" alt="Disponível na App Store"></a>
						<a href="https://play.google.com/store/apps/details?id=com.agendakidsdigital.app" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/google-play.png" alt="Disponível no Google Play"></a>
					</p>
				</div> <!-- .col-md-3 -->
				<div class="col-md-2 col-sm-3">
					<ul class="footer-menu">
						<li>
							<span class="footer-header">Institucional</span>
							<ul>
								<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>' ) ); ?>
							</ul>
						</li>
					</ul>
				</div> <!-- .col-md-2 -->
				<div class="col-md-2 col-sm-3">
					<ul class="footer-menu">
						<li>
							<span class="footer-header">Peteleco</span>
							<ul>
								<?php 
								$my_wp_query = new WP_Query(  );
								$all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'post_parent ' => 0, 'order'   => 'ASC'));

								$staff = get_page_children(get_page_by_title('Peteleco')->ID, $all_wp_pages);

								foreach($staff as $s){
									$page = $s->ID;
									$page_data = get_page($page);
									$childrenPermalink = get_page_uri($page_data);
									$childrenName = $page_data->post_name;
									$childrenTitle = $page_data->post_title;
									?>
									<li><a href="<?php echo $childrenPermalink; ?>" title="<?php echo $childrenTitle; ?>"><?php echo $childrenTitle; ?></a></li>
									<?php
									} // foreach($staff as $s){
										?>
									</ul>
								</li>
							</ul>
						</div> <!-- .col-md-2 -->
						<div class="col-md-2 col-sm-3">
							<ul class="footer-menu">
								<li>
									<span class="footer-header">CEMP</span>
									<ul>
										<?php 
										$my_wp_query = new WP_Query(  );
										$all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'post_parent ' => 0, 'order'   => 'ASC'));

										$staff = get_page_children(get_page_by_title('cemp')->ID, $all_wp_pages);

										foreach($staff as $s){
											$page = $s->ID;
											$page_data = get_page($page);
											$childrenPermalink = get_page_uri($page_data);
											$childrenName = $page_data->post_name;
											$childrenTitle = $page_data->post_title;

											?>
											<li><a href="<?php echo $childrenPermalink; ?>" title="<?php echo $childrenTitle; ?>"><?php echo $childrenTitle; ?></a></li>
											<?php
									} // foreach($staff as $s){
										?>
									</ul>
								</li>
							</ul>
						</div> <!-- .col-md-2 -->
						<div class="col-md-3 col-sm-3">
							<ul class="footer-menu">
								<li>
									<span class="footer-header">Contatos</span>
									<ul class="media-list footer-contatos">
										<li class="media">
											<span class="media-left media-middle"><i class="fa fa-phone"></i></span>
											<div class="media-body">
												<span class="footer-phone">(91) 3344-0940</span>
											</div> <!-- media-body -->
										</li>
										<li class="media">
											<span class="media-left media-middle"><i class="fa fa-envelope"></i></span>
											<div class="media-body">
												<a href="mailto:contato@mundomontessori.com.br" class="footer-mail">contato@mundomontessori.com.br</a>
											</div> <!-- media-body -->
										</li>
										<li class="media">
											<span class="media-left media-middle"><i class="fa fa-map-marker"></i></span>
											<div class="media-body">
												<span class="footer-address">Trav. Rui Barbosa, 845 - Reduto - Belém - Pará </span>
											</div> <!-- media-body -->
										</li>
									</ul>
								</li>
								<li>
									<span class="footer-header">Siga-nos</span>
									<ul class="footer-social clearfix">
										<?php //<li><a href="#" title="Acesse nosso Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>?>
										<li><a href="https://www.facebook.com/escolapeteleco/" title="Acesse nosso Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<?php // <li><a href="#" title="Acesse nosso Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li> ?>
										<li><a href="https://www.youtube.com/channel/UCwbXzlt_YwFUiN3JmEIuTBg" title="Acesse nosso Youtube" target="_blank"><i class="fa fa-youtube"></i></a></li>
									</ul>
								</li>
							</ul>
						</div> <!-- .col-md-3 -->
					</div> <!-- .row -->
				</div> <!-- .container -->
			</div> <!-- .site-footer -->
			<div class="site-direitos">
				<div class="container">
					<p>
						© 2017 Mundo Montessori, Todos os direitos reservados.
					</p>
					<p>
						Desenvolvido por <a href="http://grutacriativa.com.br/" title="Conheça a Gruta Criativa" target="_blank">Gruta Criativa Comunicação</a>
					</p>
				</div> <!-- .container -->
			</div> <!-- .site-direitos -->
		</footer> <!-- .extra-footer -->
	</div> <!-- .site-geral -->
</div> <!-- .extra-geral -->
<?php wp_footer(); ?>
</body>
</html>