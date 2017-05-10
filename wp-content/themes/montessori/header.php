<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" type="image/png" />
	<meta name="author" content="Gruta Criativa Comunicação" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
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
								<div class="col-md-2 navbar-left">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary">
											<span class="sr-only">Navegação</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
										<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/mundo-montessori.png" alt="Logotipo Mundo Montessori"></a>
									</div> <!-- navbar-header -->
								</div> <!-- col-md-2 -->
								<div class="col-md-10 navbar-right">
									<div class="line-1 clearfix">								
										<ul class="nav navbar-nav navbar-right navbar-social">
											<li><a href="https://www.facebook.com/escolapeteleco/" title="Acesse nosso Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
											<?php //<li><a href="#" title="Acesse nosso Instagram"><i class="fa fa-instagram" target="_blank"></i></a></li> ?>
											<li><a href="https://www.youtube.com/channel/UCwbXzlt_YwFUiN3JmEIuTBg" title="Acesse nosso Youtube" target="_blank"><i class="fa fa-youtube"></i></a></li>
										</ul>
										<ul class="nav navbar-nav navbar-right navbar-sublinks">
											<?php if ( get_post_status( get_page_by_title('Matricula online') ) == 'publish') { ?>
											<li class="btn-matricula-online"><a href="<?php echo site_url('matricula-online'); ?>"><i class="fa fa-user"></i> Matrícula online</a></li>
											<?php } //if ( get_post_status( get_page_by_title('Matricula online') ) == 'publish') { ?>
											<li><a href="<?php echo site_url('agenda-kids'); ?>" title="Conheça e baixe o Agenda Kids!"><img src="<?php echo get_template_directory_uri(); ?>/img/agenda-kids.png" alt="Agenda Kids"></a></li>
										</ul>
											<?php wp_nav_menu( array( 'theme_location' => 'third', 'menu_class' => 'nav navbar-nav navbar-right navbar-sublinks', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>' ) ); ?>
									</div> <!-- .line-1 -->
									<div class="line-2 clearfix">
										<div class="collapse navbar-collapse navbar-primary">
											<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav navbar-right navbar-principal ', 'link_before' => '', 'link_after' => ' <span class="icon-arrow-down icone"></span>', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>' ) ); ?>
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
					<?php if (!is_home()) { 
					 if ( has_post_thumbnail() ) { 
					 	$backgroundImageURL = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					  } else {
					  	$backgroundImageURL = get_template_directory_uri().'/img/bg-interna.jpg';
					  }
					  ?>
					<div class="bg-header" style="background-image:url(<?php echo $backgroundImageURL; ?>);">
						<div class="mask"></div>
					</div> <!-- bg-header -->
					<div class="color-bar clearfix">
						<span class="bar-1"></span>
						<span class="bar-2"></span>
						<span class="bar-3"></span>
						<span class="bar-4"></span>
						<span class="bar-5"></span>
						<span class="bar-6"></span>
					</div> <!-- color-bar -->
					<?php } //if (!is_home()) { ?>