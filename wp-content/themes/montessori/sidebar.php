<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

/*if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}*/
?>
<aside class="sidebar">

	<?php 
	$my_wp_query = new WP_Query(  );
	$all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => -1, 'orderby' => 'menu_order',
		'order'   => 'ASC'));
	$ancestor = get_post_ancestors( $post->ID );
	$staff = get_page_children($ancestor[0], $all_wp_pages);
	$ancestor_data = get_page($ancestor[0]);
	?>
	<ul>
		<li>
			<h2><?php echo $ancestor_data->post_title ?></h2>
			<ul>
				<?php
				foreach($staff as $s){
					$page = $s->ID;
					$page_data = get_page($page);
					$childrenPermalink = get_permalink($page);
					$childrenName = $page_data->post_name;
					$childrenTitle = $page_data->post_title;

					?>
					<li><a href="<?php echo $childrenPermalink; ?>"><?php echo $childrenTitle; ?></a></li>
					<?php } // foreach($staff as $s){?>
				</ul>
			</li>
		</ul>
		<br>
		<ul>
			<li>
		<h2 class="h3"><a href="<?php echo get_site_url(); ?>/tour-virtual" title="Acesse nosso tour virtual">Tour Virtual</a></h2>
		<p>
			Você vai descobrir uma estrutura completa com ambientes preparados especialmente para estimular o desenvolvimento de cada criança.
		</p>
		<p>
			<a href="<?php echo get_site_url(); ?>/tour-virtual" title="Acesse nosso tour virtual" class="btn btn-primary">Acesse o tour virtual</a>
		</p>
			</li>
		</ul>
	</aside>