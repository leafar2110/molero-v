<?php
//*****************************************************css y js**********************************************************************
function adp_load_styles_scripts() {
  //CSS
  wp_register_style('theme_style', get_stylesheet_uri(), '', '1.0', 'all');// para registrar el css
  wp_enqueue_style('theme_style');
  //JS
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array ( 'jquery' ), 1.1, true);
}
add_action('wp_enqueue_scripts', 'adp_load_styles_scripts');
add_theme_support( 'post-thumbnails' ); 

function carrusel_post_type() {

	$labels = array(
		'name'                  => _x( 'Carrusel', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Carrusel', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Carrusel', 'text_domain' ),
		'name_admin_bar'        => __( 'Carrusel', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Carrusel', 'text_domain' ),
		'description'           => __( 'Site carrusel.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'carrusel', $args );

}
add_action( 'init', 'carrusel_post_type', 0 );
// Register Custom Post Type

if ( ! function_exists('custom_servicio') ) {

// Register Custom Post Type
	function custom_servicio() {

		$labels = array(
			'name'                  => _x( 'Servicios', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Servicio', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Servicios', 'text_domain' ),
			'name_admin_bar'        => __( 'Tipo de mensaje', 'text_domain' ),
			'archives'              => __( 'Archivos del artículo', 'text_domain' ),
			'attributes'            => __( 'Atributos del artículo', 'text_domain' ),
			'parent_item_colon'     => __( 'Artículo principal:', 'text_domain' ),
			'all_items'             => __( 'Todos los artículos', 'text_domain' ),
			'add_new_item'          => __( 'Agregar ítem nuevo', 'text_domain' ),
			'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
			'new_item'              => __( 'Nuevo artículo', 'text_domain' ),
			'edit_item'             => __( 'Editar elemento', 'text_domain' ),
			'update_item'           => __( 'Elemento de actualización', 'text_domain' ),
			'view_item'             => __( 'Ver ítem', 'text_domain' ),
			'view_items'            => __( 'Ver artículos', 'text_domain' ),
			'search_items'          => __( 'Buscar artículo', 'text_domain' ),
			'not_found'             => __( 'Extraviado', 'text_domain' ),
			'not_found_in_trash'    => __( 'No se encuentra en la basura', 'text_domain' ),
			'featured_image'        => __( 'Foto principal', 'text_domain' ),
			'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
			'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
			'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
			'insert_into_item'      => __( 'Insertar en el elemento', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Subido a este artículo', 'text_domain' ),
			'items_list'            => __( 'Lista de artículos', 'text_domain' ),
			'items_list_navigation' => __( 'Lista de elementos de navegación', 'text_domain' ),
			'filter_items_list'     => __( 'Lista de elementos de filtro', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Servicio', 'text_domain' ),
			'description'           => __( 'Entrada de servicio', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-admin-tools',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'Servicio', $args );

	}
	add_action( 'init', 'custom_servicio', 0 );

}

if ( ! function_exists('custom_testimonio') ) {

// Register Custom Post Type
	function custom_testimonio() {

		$labels = array(
			'name'                  => _x( 'Testimonios', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Testimonio', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Testimonios', 'text_domain' ),
			'name_admin_bar'        => __( 'Tipo de mensaje', 'text_domain' ),
			'archives'              => __( 'Archivos del artículo', 'text_domain' ),
			'attributes'            => __( 'Atributos del artículo', 'text_domain' ),
			'parent_item_colon'     => __( 'Artículo principal:', 'text_domain' ),
			'all_items'             => __( 'Todos los artículos', 'text_domain' ),
			'add_new_item'          => __( 'Agregar ítem nuevo', 'text_domain' ),
			'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
			'new_item'              => __( 'Nuevo artículo', 'text_domain' ),
			'edit_item'             => __( 'Editar elemento', 'text_domain' ),
			'update_item'           => __( 'Elemento de actualización', 'text_domain' ),
			'view_item'             => __( 'Ver ítem', 'text_domain' ),
			'view_items'            => __( 'Ver artículos', 'text_domain' ),
			'search_items'          => __( 'Buscar artículo', 'text_domain' ),
			'not_found'             => __( 'Extraviado', 'text_domain' ),
			'not_found_in_trash'    => __( 'No se encuentra en la basura', 'text_domain' ),
			'featured_image'        => __( 'Foto principal', 'text_domain' ),
			'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
			'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
			'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
			'insert_into_item'      => __( 'Insertar en el elemento', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Subido a este artículo', 'text_domain' ),
			'items_list'            => __( 'Lista de artículos', 'text_domain' ),
			'items_list_navigation' => __( 'Lista de elementos de navegación', 'text_domain' ),
			'filter_items_list'     => __( 'Lista de elementos de filtro', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Testimonio', 'text_domain' ),
			'description'           => __( 'Entrada de testimonio', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'custom-fields' ),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-groups',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'Testimonio', $args );

	}
	add_action( 'init', 'custom_testimonio', 0 );

}
if ( ! function_exists('custom_maquinarias') ) {

// Register Custom Post Type
	function custom_maquinarias() {

		$labels = array(
			'name'                  => _x( 'Maquinarias', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Maquinaria', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Maquinarias', 'text_domain' ),
			'name_admin_bar'        => __( 'Tipo de mensaje', 'text_domain' ),
			'archives'              => __( 'Archivos del artículo', 'text_domain' ),
			'attributes'            => __( 'Atributos del artículo', 'text_domain' ),
			'parent_item_colon'     => __( 'Artículo principal:', 'text_domain' ),
			'all_items'             => __( 'Todos los artículos', 'text_domain' ),
			'add_new_item'          => __( 'Agregar ítem nuevo', 'text_domain' ),
			'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
			'new_item'              => __( 'Nuevo artículo', 'text_domain' ),
			'edit_item'             => __( 'Editar elemento', 'text_domain' ),
			'update_item'           => __( 'Elemento de actualización', 'text_domain' ),
			'view_item'             => __( 'Ver ítem', 'text_domain' ),
			'view_items'            => __( 'Ver artículos', 'text_domain' ),
			'search_items'          => __( 'Buscar artículo', 'text_domain' ),
			'not_found'             => __( 'Extraviado', 'text_domain' ),
			'not_found_in_trash'    => __( 'No se encuentra en la basura', 'text_domain' ),
			'featured_image'        => __( 'Foto principal', 'text_domain' ),
			'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
			'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
			'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
			'insert_into_item'      => __( 'Insertar en el elemento', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Subido a este artículo', 'text_domain' ),
			'items_list'            => __( 'Lista de artículos', 'text_domain' ),
			'items_list_navigation' => __( 'Lista de elementos de navegación', 'text_domain' ),
			'filter_items_list'     => __( 'Lista de elementos de filtro', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Maquinaria', 'text_domain' ),
			'description'           => __( 'Entrada de Maquinarias', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-admin-generic',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'Maquinarias', $args );

	}
	add_action( 'init', 'custom_maquinarias', 0 );

}

function custom_excerpt_length( $length ) {
	return 13;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );









?>