<?php 
/**
 * Enqueue a script
 */
function myprefix_enqueue_scripts() {
    wp_enqueue_script( 'my-script', JS_URL.'/script.js', array(), true );
}
add_action( 'wp_enqueue_scripts', 'myprefix_enqueue_scripts' );