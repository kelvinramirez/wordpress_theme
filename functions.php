<?php

// <!-- Cargar estilos Intertrans -->
// <!-- ****************************************** -->
 
function themeslug_enqueue_style() {

	wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css', false );

	wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css', false );

	wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.4.2/css/all.css', false );

    wp_enqueue_style( 'hover', 'https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css', false );
    
    // wp_enqueue_style( 'navbar', get_template_directory_uri() . '/css/navbar.css', false );

    // wp_enqueue_style( 'dropdown', get_template_directory_uri() . '/css/dropdown.css', false );

    // wp_enqueue_style( 'button', get_template_directory_uri() . '/css/button.css', false );

    // wp_enqueue_style( 'list', get_template_directory_uri() . '/css/list.css', false );

    // wp_enqueue_style( 'sidebar', get_template_directory_uri() . '/css/sidebar.css', false );

	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css', false );
	
	
}






function themeslug_enqueue_script() {
 
    wp_enqueue_script( 'jquery', true );
	// wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', true );
 
	// wp_enqueue_script( 'match', '//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js', true );
	
    wp_enqueue_script( 'boostrap_min', get_template_directory_uri() .'/js/bootstrap.min.js', true );
    
    // wp_enqueue_script( 'global', get_template_directory_uri() .'/js/global.js', true );

    // wp_enqueue_script( 'Propeller_dropdown', 'http://propeller.in/components/dropdown/js/dropdown.js', true );

    // wp_enqueue_script( 'Propeller_ripple', 'http://propeller.in/components/button/js/ripple-effect.js', true );

    // wp_enqueue_script( 'Propeller_sidebar', get_template_directory_uri() .'/js/sidebar.js', true );
 
    wp_enqueue_script( 'wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', true );
 
    wp_enqueue_script( 'scroll', get_template_directory_uri() .'/js/scrollIt.min.js', true );
 

}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );




add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'html5', array('search-form') ); 
    
function custom_thumbs()
 
{
 
    add_image_size( 'thumb-small', 340, 220, true ); // Hard crop to exact dimensions (crops sides or top and bottom)
 
    add_image_size( 'thumb-medium', 730, 486 ); // Crop to 520px width, unlimited height

    add_image_size( 'thumb-medium_v2', 350, 233 ); // Crop to 520px width, unlimited height
 
    // add_image_size( 'thumb-large', 359, 224 ); // Soft proprtional crop to max 720px width, max 340px height
 
}
 
add_action( 'after_setup_theme', 'custom_thumbs' );


remove_filter ('the_exceprt', 'wpautop');

function custom_excerpt_length( $length ) {
	return 50;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
 



// <!-- ****************************************** -->
// <!-- Servicios post type  -->
// <!-- ****************************************** -->
 
function my_custom_servicio() {
    $labels = array(
      'name'               => _x( 'servicios', 'post type general name' ),
      'singular_name'      => _x( 'servicios', 'post type singular name' ),
      'add_new'            => _x( 'Add New', 'servicio' ),
      'add_new_item'       => __( 'Add New servicio' ),
      'edit_item'          => __( 'Edit comentario' ),
      'new_item'           => __( 'New comentario' ),
      'all_items'          => __( 'All comentarios' ),
      'view_item'          => __( 'View comentario' ),
      'search_items'       => __( 'Search comentario' ),
      'not_found'          => __( 'No comentario found' ),
      'not_found_in_trash' => __( 'No comentario found in the Trash' ),
      'parent_item_colon'  => '',
      'menu_name'          => 'servicio'
    );
    $args = array(
      'labels'        => $labels,
      'description'   => 'Holds our products and product specific data',
      'public'        => true,
      'menu_position' => 5,
      'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ,'author', ),
      'has_archive'   => true,
      //'taxonomies' => array('category' , 'post_tag'),
    );
    register_post_type( 'servicio', $args );
  }
  add_action( 'init', 'my_custom_servicio' );



// sidebar

  function federacion_widgets_init() {

    register_sidebar( 
    	array(
        'name' => __( 'sidebar_general' ),
        'id' => 'sidebar-1',
        'description' => __( 'Este es el sidebar de todas las paginas' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) 
    	);





}


add_action( 'widgets_init', 'federacion_widgets_init' );
