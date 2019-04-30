<?php 
/**
 * Plugin Name: AJAX FUNCTION
 * Plugin URI: http://ape68.com
 * Description: Woocommerce Add to Cart AJAX buttons
 * Version: 1.0.1
 * Author: Simon Jacks
 * Author URI: http://ape68.com
 * License: GPL2
 */

// Don't Change this
add_action( 'wp_enqueue_scripts', 'ajax_bookmark_enqueue_scripts' );
function ajax_bookmark_enqueue_scripts() {
	wp_enqueue_script( 'ajax-posts', plugins_url( '/ajax-posts.js', __FILE__ ), array('jquery'), '1.0', true );
	wp_localize_script( 'ajax-posts', 'ajax_poster', array(
		'ajax_url' => admin_url( 'admin-ajax.php' )
	));
}

// Function to process
function FUNCTION_NAME() {
	// DO SOMETHING with $thing
	// $thing = $_REQUEST['thing']
	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
		// exit(json_encode($thing));
		// exit();
	} else {
		// $someToReturnIfFailed = 'Value to return';
		exit();
	}
}

add_action( 'wp_ajax_nopriv_FUNCTION_NAME', 'FUNCTION_NAME' );
add_action( 'wp_ajax_FUNCTION_NAME', 'FUNCTION_NAME' );

?>
