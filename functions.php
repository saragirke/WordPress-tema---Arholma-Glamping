<?php
/*Registrera meny */
add_action('init', 'register_my_menus');

function register_my_menus() {
    register_nav_menus(array(
        'main-menu' => 'Top menu'
    ));
}

/*Aktivera dynamisk header-bild */
$args= array(
'width' => 1920,
'height' => 646,
'defaults-image' =>get_template_directory_uri() . '/images/header.jpg', //Var uppladdad bil ska lagras
'uploads' => true
);
add_theme_support('custom-header', $args);



/* Dynamisk Logga*/
add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 300,
        'width'                => 300,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );




/* Funktionalitet för bilder */ 
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 550, 550, true ); 



/* Ställer in längd för 'excerpt' */ 
function wpdocs_custom_excerpt_length( $length ) {
    return 45;
} 
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



/* Widget area */ 
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Puffen',
		'id'            => 'puffen',
		'before_widget' => '<article>',
		'after_widget'  => '</article>',
        'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
