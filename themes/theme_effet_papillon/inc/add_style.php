<?php 

function ajout_style() {
        wp_register_style( 'reset', CSS_URL.'/reset.css' );
        wp_enqueue_style( 'reset' ); 
        wp_register_style( 'main_style', CSS_URL.'/style.css' );
        wp_enqueue_style( 'main_style' ); 
    }
    
    add_action( 'wp_enqueue_scripts', 'ajout_style' );