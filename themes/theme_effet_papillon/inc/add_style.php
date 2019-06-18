<?php 

function ajout_style() {
    // enregistrement d'un nouveau style
    wp_register_style( 'main_style', CSS_URL.'/style.css' );
    
    // appel du style dans la page
    wp_enqueue_style( 'main_style' );
    
    }
    
    add_action( 'wp_enqueue_scripts', 'ajout_style' );