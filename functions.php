<?php
/* Adds page name to classes for page */
add_filter('body_class','page_class');
function page_class($classes) {
   global $wp_query;
   $page = '';
   $page = $wp_query->query_vars['pagename'];
   // add 'pagename' to the $classes array
   $classes[] = $page;
   // return the $classes array
   return $classes;
}
/* Color palette */
function color_palette() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => esc_attr__( 'llc orange', 'literacy-gp-child' ),
            'slug' => 'orange',
            'color' => '#f2633e',
        ),
        array(
            'name' => esc_attr__( 'llc green', 'it4hosting-gp-child' ),
            'slug' => 'green',
            'color' => '#24c2ad',
        ),
        array(
            'name' => esc_attr__( 'it4 gold', 'it4hosting-gp-child' ),
            'slug' => 'gold',
            'color' => '#f3b71c',
        ),
        array(
            'name' => esc_attr__( 'it4 light gold', 'it4hosting-gp-child' ),
            'slug' => 'lightgold',
            'color' => '#e9cf3a',
        ),
		array(
            'name' => esc_attr__( 'llc gray', 'it4hosting-gp-child' ),
            'slug' => 'gray',
            'color' => '#2c2c2c',
        ),
		array(
            'name' => esc_attr__( 'llc light gray', 'it4hosting-gp-child' ),
            'slug' => 'lightgray',
            'color' => '#f2f2f2',
        ),
		array(
            'name' => esc_attr__( 'black', 'it4hosting-gp-child' ),
            'slug' => 'black',
            'color' => '#000000',
        ),
		array(
            'name' => esc_attr__( 'white', 'it4hosting-gp-child' ),
            'slug' => 'white',
            'color' => '#ffffff',
        ),
    ) );
}
add_action( 'after_setup_theme', 'color_palette' );
// JS for home page iframe
/**
 * Enqueue a script
 */
function myprefix_enqueue_scripts() {
	wp_register_script('table-resp', get_stylesheet_directory_uri() . '/js/home-iframe.js', array() );
    wp_enqueue_script( 'table-resp', get_stylesheet_directory_uri() . '/js/home-iframe.js', array(), true );
}
add_action( 'wp_enqueue_scripts', 'myprefix_enqueue_scripts' );
?>