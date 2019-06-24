<?php 
/**
 * Enqueue a script
 */
function myprefix_enqueue_scripts() {
    wp_register_script('main_script', JS_URL.'/script.js', array(),'1.1', true);
    wp_enqueue_script('main_script');
}

add_action( 'wp_enqueue_scripts', 'myprefix_enqueue_scripts' );