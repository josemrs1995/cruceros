<?php
/**
 * Enable features from Soil when plugin is activated
 * @link https://roots.io/plugins/soil/
 */
add_theme_support('soil-clean-up');
add_theme_support('soil-disable-asset-versioning');
add_theme_support('soil-disable-trackbacks');
add_theme_support('soil-google-analytics', 'UA-XXXXX-Y');
add_theme_support('soil-jquery-cdn');
add_theme_support('soil-js-to-footer');
add_theme_support('soil-nav-walker');
add_theme_support('soil-nice-search');
add_theme_support('soil-relative-urls');

// adding the thumbnail to the rest api 

add_action('rest_api_init', 'register_rest_images' );
function register_rest_images(){
    register_rest_field( array('post', 'page', 'post_type'),
        'fimg_url',
        array(
            'get_callback'    => 'get_rest_featured_image',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}
function get_rest_featured_image( $object, $field_name, $request ) {
    if( $object['featured_media'] ){
        $img = wp_get_attachment_image_src( $object['featured_media'], 'app-thumb' );
        return $img[0];
    }
    return false;
}

/// Adding acf to theme. 

// 1. customize ACF path
add_filter('acf/settings/path', __NAMESPACE__. '\my_acf_settings_path');
function my_acf_settings_path( $path ) {
 // update path
 $path = get_stylesheet_directory() . '/mu-plugins/acf/';
 // return
 return $path; 
}
// 2. customize ACF dir
add_filter('acf/settings/dir', __NAMESPACE__ . '\my_acf_settings_dir');
function my_acf_settings_dir( $dir ) {
 // update path
 $dir = get_stylesheet_directory_uri() . '/mu-plugins/acf/';
 // return
 return $dir; 
}
// 3. Hide ACF field group menu item
//add_filter('acf/settings/show_admin', '__return_false');
// 4. Include ACF
include_once( get_stylesheet_directory() . '/mu-plugins/acf/acf.php' );

// Adding ACF to the rest API
include_once( get_stylesheet_directory() . '/mu-plugins/acf-rest/index.php' );

//options page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page('opciones');
	
}

////
// Our custom post type function
function create_posttype() {
 
    register_post_type( 'cruceros',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Cruceros' ),
                'singular_name' => __( 'crucero' )
            ),
            'public' => true,
            'has_archive' => true,
            'taxonomies'          => array( 'navieras' ),
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'rewrite' => array('slug' => 'cruceros'),
        )
    );

    ////
    $labels = array( //labels para las taxonomia de
        'name' => _x( 'Navieras', 'taxonomy general name' ),
        'singular_name' => _x( 'Naviera', 'taxonomy singular name' ),
        'search_items' =>  __( 'Buscar Navieras' ),
        'all_items' => __( 'Todas las Navieras' ),
        'edit_item' => __( 'Editar Naviera' ), 
        'update_item' => __( 'Actualizar Naviera' ),
        'add_new_item' => __( 'Agregar nueva Naviera' ),
        'new_item_name' => __( 'Nombre de la nueva Naviera' ),
        'menu_name' => __( 'Navieras' ),
      ); 

    register_taxonomy('navieras',array('cruceros'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'navieras' ),
      ));

      /// categoria de destinos 
    $labels = array( //labels para las taxonomia de
        'name' => _x( 'Destinos', 'taxonomy general name' ),
        'singular_name' => _x( 'Destino', 'taxonomy singular name' ),
        'search_items' =>  __( 'Buscar Destinos' ),
        'all_items' => __( 'Todas las Destinos' ),
        'edit_item' => __( 'Editar Destino' ), 
        'update_item' => __( 'Actualizar Destino' ),
        'add_new_item' => __( 'Agregar nueva Destino' ),
        'new_item_name' => __( 'Nombre de la nueva Destino' ),
        'menu_name' => __( 'Destinos' ),
      ); 

    register_taxonomy('destinos',array('cruceros'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'destinos' ),
      ));
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );