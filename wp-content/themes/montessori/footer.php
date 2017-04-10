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
					<p>
						A Educação Cósmica permite a formação do cidadão universal apto a relacionar-se com as exigências do mundo moderno de forma harmônica, criativa e ética.
					</p>
					<p>
						Agenda Kids
					</p>
					<p>
						<a href="#">AppStore</a>
						<a href="#">Google Play</a>
					</p>
				</div> <!-- .col-md-3 -->
				<div class="col-md-2 col-sm-3">
					<ul class="footer-menu">
						<li>
							<a href="#" class="footer-header">Institucional</a>
							<ul>
								<li><a href="#" title="">O mundo Montessori</a></li>
								<li><a href="#" title="">Matrícula Online</a></li>
								<li><a href="#" title="">Agenda Kids</a></li>
								<li><a href="#" title="">Notícias</a></li>
								<li><a href="#" title="">Galeria</a></li>
								<li><a href="#" title="">Calendário</a></li>
								<li><a href="#" title="">Contato</a></li>
							</ul>
						</li>
					</ul>
				</div> <!-- .col-md-2 -->
				<div class="col-md-2 col-sm-3">
					<ul class="footer-menu">
						<li>
							<a href="#" class="footer-header">Peteleco</a>
							<ul>
								<?php 
								$my_wp_query = new WP_Query(  );
								//$all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'post_parent ' => 0, 'order'   => 'ASC'));
								$args = array( 
									'child_of' => get_page_by_title('Cursos')->ID, 
									'parent' => $post->ID,
									'hierarchical' => 0,
									'sort_column' => 'menu_order', 
									'sort_order' => 'asc'
									);
								$staff = get_pages( $args );
								//$staff = get_page_children(get_page_by_title('Cursos')->ID, $all_wp_pages);

								foreach($staff as $s){
									$page = $s->ID;
									$page_data = get_page($page);
									$content = $page_data->post_content;
									$childrenPermalink = get_page_uri($page_data);
									$childrenName = $page_data->post_name;
									$childrenTitle = $page_data->post_title;
									$content = apply_filters('the_content',$content);
									$content = str_replace(']]>', ']]>', $content);

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
									<a href="javascript:void(0);" class="footer-header">CEMP</a>
									<ul>
										<li><a href="#" title="">Blog do Castilla Idiomas</a></li>
										<li><a href="#" title="">Guia de Intercâmbio</a></li>
										<li><a href="#" title="">Seja um Franqueado</a></li>
									</ul>
								</li>
							</ul>
						</div> <!-- .col-md-2 -->
						<div class="col-md-3 col-sm-3">
							<ul class="footer-menu">
								<li>
									<a href="javascript:void(0);" class="footer-header">Contatos</a>
									<ul class="media-list">
										<li class="media">
											<span class="pull-left"><i class="fa fa-phone"></i></span>
											<div class="media-body">
												<span class="footer-phone">(91) 3344-0940</span>
											</div> <!-- media-body -->
										</li>
										<li class="media">
											<span class="pull-left"><i class="fa fa-envelope"></i></span>
											<div class="media-body">
												<a href="mailto:peteleco@peteleco.com.br" class="footer-mail">peteleco@peteleco.com.br</a>
											</div> <!-- media-body -->
										</li>
										<li class="media">
											<span class="pull-left"><i class="fa fa-map-marker"></i></span>
											<div class="media-body">
												<span class="footer-address">Trav. Rui Barbosa, 845 - Reduto - Belém - Pará </span>
											</div> <!-- media-body -->
										</li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0);" class="footer-header">Siga-nos</a>
									<ul class="footer-social clearfix">
										<li><a href="#" title="Acesse nosso Twitter"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#" title="Acesse nosso Facebook"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" title="Acesse nosso Instagram"><i class="fa fa-instagram"></i></a></li>
										<li><a href="#" title="Acesse nosso Youtube"><i class="fa fa-youtube"></i></a></li>
										<li><a href="#" title="Acesse nosso Google+"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#" title="Acesse nosso Linkedin"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#" title="Acesse nosso RSS"><i class="fa fa-rss"></i></a></li>
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