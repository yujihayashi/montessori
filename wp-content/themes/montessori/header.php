<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" type="image/png" />
	<meta name="author" content="Gruta Criativa Comunicação" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/stylesheet.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/easing/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/cycle2/jquery.cycle2.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/cycle2/jquery.cycle2.swipe.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/cycle2/jquery.cycle2.scrollVert.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/cycle2/jquery.cycle2.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap_site.js"></script>
</head>
<body <?php body_class(); ?>>
	<div class="extra-geral">
		<div class="site-geral">
			<header class="extra-header">
				<div class="site-header">
					<nav class="navbar navbar-default" role="navigation">
						<div class="container">
							<div class="row">
								<div class="col-md-2">
									<div class="navbar-header">
										<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/mundo-montessori.png" alt="Logotipo Mundo Montessori"></a>
									</div> <!-- navbar-header -->
								</div> <!-- col-md-2 -->
								<div class="col-md-10">
									<div class="line-1">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary">
											<span class="sr-only">Navegação</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>								
										<ul class="nav navbar-nav navbar-right navbar-social">
											<li><a href="#" title="Acesse nosso"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#" title="Acesse nosso"><i class="fa fa-instagram"></i></a></li>
											<li><a href="#" title="Acesse nosso"><i class="fa fa-youtube"></i></a></li>
										</ul>
										<ul class="nav navbar-nav navbar-right navbar-sublinks">
											<li class="btn-matricula-online"><a href="#"><i class="fa fa-user"></i> Matrícula online</a></li>
											<li><a href="#" title="Conheça e baixe o Agenda Kids!"><img src="<?php echo get_template_directory_uri(); ?>/img/agenda-kids.png" alt="Agenda Kids"></a></li>
										</ul>
									</div> <!-- .line-1 -->
									<div class="line-2">
										<div class="collapse navbar-collapse navbar-primary">
											<ul class="nav navbar-nav navbar-right navbar-principal">
												<li class="active"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Início</a></li>
												<li><a href="<?php echo site_url('/o-mundo-montessori/'); ?>">O mundo Montessori</a></li>
												<li><a href="<?php echo site_url('/peteleco/'); ?>">Peteleco</a></li>
												<li><a href="<?php echo site_url('/cemp/'); ?>">CEMP</a></li>
												<li><a href="<?php echo site_url('/calendario/'); ?>">Calendário</a></li>
												<li><a href="<?php echo site_url('/category/galeria/'); ?>">Galeria</a></li>
												<li><a href="<?php echo site_url('/category/noticias/'); ?>">Notícias</a></li>
												<li><a href="<?php echo site_url('/contato/'); ?>">Contato</a></li>
											</ul>
										</div><!-- /.navbar-collapse -->
									</div> <!-- .line-2 -->
								</div> <!-- col-md-10 -->
							</div> <!-- row -->
						</div> <!-- container -->
					</nav>
				</div> <!-- .site-header -->
			</header> <!-- .extra-header -->
			<div class="extra-central">
				<div class="site-central">
					<?php if (!is_home()) { ?>
					<div class="bg-header" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/bg-interna.jpg);">
						
					</div> <!-- bg-header -->
					<?php } //if (!is_home()) { ?>