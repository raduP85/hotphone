<?php 
/**
 * Jobit functions and definitions
 *
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Includes directory.
$inc_dir = 'inc';

// Array of files to include.
// $understrap_includes = array(
// 	'/theme-settings.php',                  // Initialize theme default settings.
// 	'/setup.php',                           // Theme setup and custom theme supports.
// 	'/widgets.php',                         // Register widget area.
// 	'/enqueue.php',                         // Enqueue scripts and styles.
// 	'/template-tags.php',                   // Custom template tags for this theme.
// 	'/pagination.php',                      // Custom pagination for this theme.
// 	'/hooks.php',                           // Custom hooks.
// 	'/extras.php',                          // Custom functions that act independently of the theme templates.
// 	'/customizer.php',                      // Customizer additions.
// 	'/custom-comments.php',                 // Custom Comments file.
// 	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
// 	'/editor.php',                          // Load Editor functions.
// 	'/block-editor.php',                    // Load Block Editor functions.
// 	'/deprecated.php',                      // Load deprecated functions.
// );

// Array of files to include.
$includes = array(
	'/class-wp-bootstrap-navwalker.php'
);

// // Load WooCommerce functions if WooCommerce is activated.
// if ( class_exists( 'WooCommerce' ) ) {
// 	$understrap_includes[] = '/woocommerce.php';
// }

// // Load Jetpack compatibility file if Jetpack is activiated.
// if ( class_exists( 'Jetpack' ) ) {
// 	$understrap_includes[] = '/jetpack.php';
// }

// Include files.
foreach ( $includes as $file ) {
	require_once get_theme_file_path( $inc_dir . $file );
}



function scripts(){
  wp_register_style( 'style', get_template_directory_uri().'/dist/app.css', [], 1, 'all');
  wp_enqueue_style( 'style');

  wp_enqueue_script('bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', [], '5.0.2', true);

  wp_register_script('app', get_template_directory_uri().'/dist/app.js', [], 1, true );
  wp_enqueue_script('app');
};

add_action('wp_enqueue_scripts', 'scripts');




// This theme uses wp_nav_menu() in one location.
if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

	function mytheme_register_nav_menu(){
		register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'hotphone' ),
	    	// 'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
		) );
	}
	add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}

