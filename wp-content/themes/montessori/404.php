<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<div class="container">
	<div class="wrap">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<section class="error-404 not-found text-center">
					<header class="page-header">
						<h1 class="page-title">Ops! A página não pode ser encontrada.</h1>
					</header><!-- .page-header -->
					<div class="page-content">
						<p>Parece que nada foi encontrado por aqui. Tente ir para a <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Ir para a página inicial">página inicial</a>.</p>
					</div><!-- .page-content -->
				</section><!-- .error-404 -->
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .wrap -->
</div> <!-- .container -->

<?php get_footer();
