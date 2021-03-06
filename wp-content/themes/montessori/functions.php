<?
add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'title-tag' );

//Gets post cat slug and looks for single-[cat slug].php and applies it
add_filter('single_template', create_function(
	'$the_template',
	'foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
			return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
		return $the_template;' )
);

if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { 
	function social_share_projeto( ) {
		echo "<div class='post-share'><span class='trace-start'></span><div class='share-content'>";
		ADDTOANY_SHARE_SAVE_KIT( array( 'linkname' => get_the_title(), 'linkurl' => get_the_permalink() ) );
		echo "</div><!-- .share-content --><span class='trace-end'></span></div> <!-- .post-share -->";
	}
}

if(function_exists('bcn_display')) {
	function projeto_breadcrumb () {
		echo '<div class="site-breadcrumb"><div class="container"><ul class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">';
		bcn_display();
		echo '</ul></div> <!-- .container --></div> <!-- .site-breadcrumb -->';
	}
}

function projeto_paginacao( $query=null ) {

	global $wp_query;
	$query = $query ? $query : $wp_query;
	$big = 999999999;

	$paginate = paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'type' => 'array',
		'total' => $query->max_num_pages,
		'format' => '?paged=%#%',
     'show_all'           => True,
     'current' => max( 1, get_query_var('paged') ),
     'prev_text'          => __('<i class="fa fa-chevron-left"></i>'),
     'next_text'          => __('<i class="fa fa-chevron-right"></i>'),
     )
	);

	if ($query->max_num_pages > 1) :
		?>
	<ul class="pagination">
		<?php
		foreach ( $paginate as $page ) {
			echo '<li>' . $page . '</li>';
		}
		?>
	</ul>
	<?php
	endif;
}

    // Add theme support for selective refresh for widgets.
add_theme_support( 'customize-selective-refresh-widgets' );
// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
    'primary'   => __( 'Menu principal do topo', 'twentyfourteen' ),
    'secondary' => __( 'Menu do rodapé', 'twentyfourteen' ),
    'third' => __( 'Menu secundário do topo', 'twentyfourteen' ),
    ) );
add_filter('post_gallery', 'my_post_gallery', 10, 2);
function my_post_gallery($output, $attr) {
    global $post;

    if (isset($attr['orderby'])) {
        $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
        if (!$attr['orderby'])
            unset($attr['orderby']);
    }

    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'itemtag' => 'dl',
        'icontag' => 'dt',
        'captiontag' => 'dd',
        'columns' => 3,
        'size' => 'thumbnail',
        'include' => '',
        'exclude' => ''
        ), $attr));

    $id = intval($id);
    if ('RAND' == $order) $orderby = 'none';

    if (!empty($include)) {
        $include = preg_replace('/[^0-9,]+/', '', $include);
        $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

        $attachments = array();
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    }

    if (empty($attachments)) return '';

    // Here's your actual output, you may customize it to your need
    $output = "<div class=\"galeria-detalhe\">\n";
    $output .= "<ul data-orbit class=\"row\">\n";

    // Now you loop through each attachment
    foreach ($attachments as $id => $attachment) {
        // Fetch the thumbnail (or full image, it's up to you)
//      $img = wp_get_attachment_image_src($id, 'medium');
//      $img = wp_get_attachment_image_src($id, 'my-custom-image-size');
        $img = wp_get_attachment_image_src($id, 'full');

        $output .= "<li class=\"col-md-3 col-sm-4\"><a href=\"{$img[0]}\" style=\"background-image:url({$img[0]});\" class=\"imagem\">\n";
        $output .= "<img src=\"".get_template_directory_uri()."/img/pixel.gif\" class\"pixel\" width=\"{$img[1]}\" height=\"{$img[2]}\" alt=\"\" />\n";
        $output .= "</a></li>\n";
    }

    $output .= "</ul>\n";
    $output .= "</div>\n";

    return $output;
}

function theme_oembed_videos() {

    global $post;

    if ( $post && $post->post_content ) {

        global $shortcode_tags;
        // Make a copy of global shortcode tags - we'll temporarily overwrite it.
        $theme_shortcode_tags = $shortcode_tags;

        // The shortcodes we're interested in.
        $shortcode_tags = array(
            'video' => $theme_shortcode_tags['video'],
            'embed' => $theme_shortcode_tags['embed']
        );
        // Get the absurd shortcode regexp.
        $video_regex = '#' . get_shortcode_regex() . '#i';

        // Restore global shortcode tags.
        $shortcode_tags = $theme_shortcode_tags;

        $pattern_array = array( $video_regex );

        // Get the patterns from the embed object.
        if ( ! function_exists( '_wp_oembed_get_object' ) ) {
            include ABSPATH . WPINC . '/class-oembed.php';
        }
        $oembed = _wp_oembed_get_object();
        $pattern_array = array_merge( $pattern_array, array_keys( $oembed->providers ) );

        // Or all the patterns together.
        $pattern = '#(' . array_reduce( $pattern_array, function ( $carry, $item ) {
            if ( strpos( $item, '#' ) === 0 ) {
                // Assuming '#...#i' regexps.
                $item = substr( $item, 1, -2 );
            } else {
                // Assuming glob patterns.
                $item = str_replace( '*', '(.+)', $item );
            }
            return $carry ? $carry . ')|('  . $item : $item;
        } ) . ')#is';

        // Simplistic parse of content line by line.
        $lines = explode( "\n", $post->post_content );
        foreach ( $lines as $line ) {
            $line = trim( $line );
            if ( preg_match( $pattern, $line, $matches ) ) {
                if ( strpos( $matches[0], '[' ) === 0 ) {
                    $ret = do_shortcode( $matches[0] );
                } else {
                    $ret = wp_oembed_get( $matches[0] );
                }
                return $ret;
            }
        }
    }
}

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );