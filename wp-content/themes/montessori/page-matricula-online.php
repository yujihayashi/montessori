<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<?php
				// Start the Loop.
while ( have_posts() ) : the_post();

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="page-header">
		<div class="container">
			<header class="entry-header">
				<h1 class="text-warning">
					<?php
					the_title();
					?>
				</h1>
			</header>
		</div> <!-- .container -->
	</div> <!-- .page-header -->
	<div class="container">
		<div class="entry-content">
			<?php the_content(); ?>
			<div class="row">
				<div class="col-md-6">
				<div class="well">
					
					<h2 class="media-heading">Efetue sua matrícula</h2>
					<p>
						Para efetuar a matrícula online é necessário LOGIN e SENHA do aluno. Caso você não possui estes dados, procure a secretaria da escola ou ligue para (91) 3344-0940.
					</p>
					<p>
						<a href="http://maisescolaweb.com.br/matriculapeteleco/" title="Clique aqui para matricular seu filho" class="btn btn-primary" target="_blank">Acesse a matrícula online</a>
					</p>
				</div> <!-- well -->
				</div> <!-- col-md-6 -->
				<div class="col-md-6">
					<h2>Lista de materiais e livros</h2>
					<p>
						Imprima a lista de livros e materiais de seu filho.
					</p>
					<ul class="list-group">
						
					<?php
                            $args = array(
                                'order'          => 'ASC',
                                'post_type'      => 'attachment',
                                'post_parent'    => $post->ID,
                                'post_mime_type' => 'application/pdf',
                                'post_status'    => null,
                                'posts_per_page'   => -1,
                                );
                                $attachments = get_posts($args);
                                if ($attachments) {
                                    foreach ($attachments as $attachment) {
                                        echo "<li class='list-group-item'>";
                                        echo "<a href='".wp_get_attachment_url($attachment->ID)."' target='_blank' title='Faça download do arquivo ".$attachment->post_title."'><i class='fa fa-file-pdf-o'></i> ".$attachment->post_title."</a>";
                                        echo "</li>";
                                        }
                                    }
                                    ?>
					</ul>
				</div> <!-- col-md-6 -->
			</div> <!-- row -->
			<?php
			edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
			?>
		</div><!-- .entry-content -->
	</div> <!-- .container -->
</article><!-- #post-## -->
<?

					// If comments are open or we have at least one comment, load up the comment template.
				/*if ( comments_open() || get_comments_number() ) {
					comments_template();
				}*/
				endwhile;
				?>
				

				<?php
				get_footer();

