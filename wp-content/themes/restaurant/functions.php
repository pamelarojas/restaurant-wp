<?php

function dl_enqueue_style() {
    $theme_data = wp_get_theme();

    wp_register_style('bootstrap', get_theme_file_uri('/assets/css/bootstrap.css'), null, null, 'screen');

    wp_register_style('lightbox', get_theme_file_uri('/assets/css/lightbox.css'), null, $theme_data->get( 'Version' ), 'screen');
    
    wp_register_style('style', get_theme_file_uri('/assets/css/style.css'), null, $theme_data->get( 'Version' ), 'screen');

    wp_register_style('fonts-1',"https://use.fontawesome.com/releases/v5.3.1/css/all.css");
    
    wp_register_style('fonts-2',"https://fonts.googleapis.com/css?family=Archivo+Black|Lato:400,700|Oswald");

    wp_enqueue_style('bootstrap');
 
    wp_enqueue_style('lightbox');
 
    wp_enqueue_style('style');

      
    
    
}
add_action( 'wp_enqueue_scripts', 'dl_enqueue_style');

function dl_enqueue_scripts() {
    $theme_data = wp_get_theme();

    wp_deregister_script( 'jquery' );
    wp_deregister_script( 'bootstrap' );

    wp_register_script('jquery-1.11.1', get_theme_file_uri('assets/js/jquery-1.11.1.min.js'), null, '1.11.1', true);

    wp_register_script('modernizr', get_theme_file_uri('assets/js/modernizr.custom.js'), null, '2.2.3', true);

    wp_register_script('bootstrap', get_theme_file_uri('assets/js/bootstrap.js'), null, null, true);


    wp_register_script('lightbox-plus-jquery', get_theme_file_uri('assets/js/lightbox-plus-jquery.min.js'), array('jquery-2'), null, true);

    wp_register_script('responsiveslides', get_theme_file_uri('assets/js/responsiveslides.min.js'), array('jquery-2'), null, true);

   
    
    wp_enqueue_script('jquery-1.11.1');
    wp_enqueue_script('modernizr');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('lightbox-plus-jquery');
    wp_enqueue_script('responsiveslides');
   
    
}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts');

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
?>