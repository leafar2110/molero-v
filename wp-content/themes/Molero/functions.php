<?php
//*****************************************************css y js**********************************************************************
function adp_load_styles_scripts() {
  //CSS
  wp_register_style('theme_style', get_stylesheet_uri(), '', '1.0', 'all');// para registrar el css
  wp_enqueue_style('theme_style');
  //JS
  wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
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
			'taxonomies'            => array( '', 'post_tag' ),
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

if ( ! function_exists('custom_producto') ) {

// Register Custom Post Type
	function custom_producto() {

		$labels = array(
			'name'                  => _x( 'Productos', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Producto', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Productos', 'text_domain' ),
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
			'label'                 => __( 'Producto', 'text_domain' ),
			'description'           => __( 'Entrada de Producto', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			'taxonomies'            => array( 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-tag',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'producto', $args );

	}
	add_action( 'init', 'custom_producto', 0 );

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
			'taxonomies'            => array( '', '' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-admin-comments',
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
if ( ! function_exists('custom_equipo') ) {

// Register Custom Post Type
	function custom_equipo() {

		$labels = array(
			'name'                  => _x( 'Equipo', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Equipo', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Equipo Humano', 'text_domain' ),
			'name_admin_bar'        => __( 'Tipo de mensaje', 'text_domain' ),
			'archives'              => __( 'Archivos del artículo', 'text_domain' ),
			'attributes'            => __( 'Atributos del artículo', 'text_domain' ),
			'parent_item_colon'     => __( 'Artículo principal', 'text_domain' ),
			'all_items'             => __( 'Todos los artículos', 'text_domain' ),
			'add_new_item'          => __( 'Agregar ítem nuevo', 'text_domain' ),
			'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
			'new_item'              => __( 'Nuevo artículo', 'text_domain' ),
			'edit_item'             => __( 'Editar elemento', 'text_domain' ),
			'update_item'           => __( 'Elemento de actualización', 'text_domain' ),
			'view_item'             => __( 'ver ítem', 'text_domain' ),
			'view_items'            => __( 'Ver artículos', 'text_domain' ),
			'search_items'          => __( 'Buscar articulo', 'text_domain' ),
			'not_found'             => __( 'Extraviado', 'text_domain' ),
			'not_found_in_trash'    => __( 'No se encuentra en la basura', 'text_domain' ),
			'featured_image'        => __( 'Foto principal', 'text_domain' ),
			'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
			'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
			'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
			'insert_into_item'      => __( 'Insertar el elemento', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Subido a este articulo', 'text_domain' ),
			'items_list'            => __( 'Lista de articulos', 'text_domain' ),
			'items_list_navigation' => __( 'Lista de elementos de navegación', 'text_domain' ),
			'filter_items_list'     => __( 'Lista de elementos de filtro', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Equipo', 'text_domain' ),
			'description'           => __( 'Equipo humano', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'thumbnail', 'custom-fields' ),
			'taxonomies'            => array( '' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-groups',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => false,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'Equipo', $args );

	}
	add_action( 'init', 'custom_equipo', 0 );

}
if ( ! function_exists('custom_instalaciones') ) {

// Register Custom Post Type
	function custom_instalaciones() {

		$labels = array(
			'name'                  => _x( 'Instalacion', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Instalaciones', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Instalaciones', 'text_domain' ),
			'name_admin_bar'        => __( 'Tipo de mensaje', 'text_domain' ),
			'archives'              => __( 'Archivos del artículo', 'text_domain' ),
			'attributes'            => __( 'Atributos del artículo', 'text_domain' ),
			'parent_item_colon'     => __( 'Artículo principal', 'text_domain' ),
			'all_items'             => __( 'Todos los artículos', 'text_domain' ),
			'add_new_item'          => __( 'Agregar ítem nuevo', 'text_domain' ),
			'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
			'new_item'              => __( 'Nuevo artículo', 'text_domain' ),
			'edit_item'             => __( 'Editar elemento', 'text_domain' ),
			'update_item'           => __( 'Elemento de actualización', 'text_domain' ),
			'view_item'             => __( 'ver ítem', 'text_domain' ),
			'view_items'            => __( 'Ver artículos', 'text_domain' ),
			'search_items'          => __( 'Buscar articulo', 'text_domain' ),
			'not_found'             => __( 'Extraviado', 'text_domain' ),
			'not_found_in_trash'    => __( 'No se encuentra en la basura', 'text_domain' ),
			'featured_image'        => __( 'Foto principal', 'text_domain' ),
			'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
			'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
			'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
			'insert_into_item'      => __( 'Insertar el elemento', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Subido a este articulo', 'text_domain' ),
			'items_list'            => __( 'Lista de articulos', 'text_domain' ),
			'items_list_navigation' => __( 'Lista de elementos de navegación', 'text_domain' ),
			'filter_items_list'     => __( 'Lista de elementos de filtro', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Instalaciones', 'text_domain' ),
			'description'           => __( 'Instalaciones de la empresa', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'thumbnail' ),
			'taxonomies'            => array( '', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-building',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'Instalaciones', $args );

	}
	add_action( 'init', 'custom_instalaciones', 0 );

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
			'taxonomies'            => array( '', 'post_tag' ),
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

/*function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



*/
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	return $excerpt;
}




?>



