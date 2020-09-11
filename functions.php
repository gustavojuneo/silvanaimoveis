<?php

function load_scripts() {

	// Scripts em Fila

	wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js', array(), '4.2.1', true );
	wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array( 'jquery' ), '4.2.1', true );

	wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/bower_components/wow/dist/wow.min.js', array(), '4.2.1', true );
	wp_enqueue_script( 'menu-responsivo', get_template_directory_uri() . '/assets/js/menu-responsivo.js',array( 'jquery' ), '1.0', true );

	// Importando Script do Portfolio
	if(is_home()) :
		wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.mixitup.min.js',array( 'jquery' ), '1.0', true );
		wp_enqueue_script( 'portfolio-js', get_template_directory_uri() . '/assets/js/portfolio.js',array( 'jquery' ), '1.0', true );
	endif;

	if(is_single()) :
		wp_enqueue_script( 'slick-js', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery'), '1.8.1', true );
		wp_enqueue_script( 'slide', get_template_directory_uri() . '/assets/js/slide-post.js',array( 'jquery' ), '1.0', true );
	endif;

	// Folhas de Estilos em Fila
	wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css', array(), '4.2.1', 'bootstrap-css' );
	wp_enqueue_style( 'geral', get_template_directory_uri() . '/assets/css/geral.css', array(), '1.0' , 'all' );
	wp_enqueue_style( 'plugins', get_template_directory_uri() . '/assets/css/plugins.css', array(), '1.0' , 'all' );
	wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css', array(), '5.6.3', 'all' );

	if(is_front_page()) :
		wp_enqueue_style( 'home', get_template_directory_uri() . '/assets/css/home.css', array(), '1.0' , 'all' );
	endif;

	if(is_single()) :
		wp_enqueue_style( 'single', get_template_directory_uri() . '/assets/css/single.css', array(), '1.0' , 'all' );
		wp_enqueue_style( 'slick-css', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.8.1' , 'all' );
	endif;

	if(is_home() || is_search() || is_archive()) :
		wp_enqueue_style( 'imoveis', get_template_directory_uri() . '/assets/css/imoveis.css', array(), '1.0' , 'all' );
	endif;

	if(is_page('institucional')) :
		wp_enqueue_style( 'instituto', get_template_directory_uri() . '/assets/css/instituto.css', array(), '1.0' , 'all' );
	endif;

	if(is_page('contato')) :
		wp_enqueue_style( 'contato', get_template_directory_uri() . '/assets/css/contato.css', array(), '1.0' , 'all' );
	endif;

	if(is_page('simulador')) :
		wp_enqueue_style( 'simulador', get_template_directory_uri() . '/assets/css/simulador.css', array(), '1.0' , 'all' );
	endif;

	if(is_page('links')) :
		wp_enqueue_style( 'links', get_template_directory_uri() . '/assets/css/links.css', array(), '1.0' , 'all' );
	endif;



}
add_action( 'wp_enqueue_scripts', 'load_scripts' );


//Paginação
function wordpress_pagination() {
global $wp_query;

$big = 999999999;

echo paginate_links( array(
  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
  'format' => '?paged=%#%',
  'current' => max( 1, get_query_var('paged') ),
  'total' => $wp_query->max_num_pages
) );
}

function svimoveis_config(){
	// Registro de Menus
	register_nav_menus(
		array(
			'menu_imoveis' => 'Imoveis Menu',
			'menu_institucional' => 'Institucional Menu',
		)
	);


	$args = array (
		'height'	=> 350,
		'width'		=> 1920
	);
	// Suporte ao Tema
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'video', 'image' ) );

	// Post Types
	register_post_type('utilidade',
      array(
      	'labels' 			=> array(
      		'name' 			=> __('Links úteis'),
      		'singular-name' => __('Link Útil')
      		),

      	'public'			=> true,
      	'has_archive'		=> true,
      	'menu_icon'			=> 'dashicons-admin-site',
      	'supports'			=> array('title', 'thumbnail'),

        )
    );

}
add_action( 'after_setup_theme', 'svimoveis_config', 0 );

add_action( 'widgets_init', 'wpcurso_sidebars' );
function wpcurso_sidebars(){
	register_sidebar(
		array(
			'name'					=> 'Home Page Sidebar',
			'id'						=> 'sidebar-1',
			'description' 	=> 'Sidebar to be used on Home Page',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' 	=> '</div>',
			'before_title'	=> '<h2 class="widget-title">',
			'after_title'		=> '</h2>'
		)
	);
}

add_filter('wpcf7_form_elements', function( $content ) {
  $dom = new DOMDocument();
  $dom->preserveWhiteSpace = false;
  $dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

  $xpath = new DomXPath($dom);
  $spans = $xpath->query("//span[contains(@class, 'wpcf7-form-control-wrap')]" );

  foreach ( $spans as $span ) :
    $children = $span->firstChild;
    $span->parentNode->replaceChild( $children, $span );
  endforeach;

  return $dom->saveHTML();
});
