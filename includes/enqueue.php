<?php
/*
	
@package sunsettheme
	
	===============================
		ADMIN ENQUEUE FUNCTIONS
	===============================
 */

 //function to apply custom style

function sunset_load_admin_scripts( $hook ){
	
    //$hook variable holds unique value for each admn page
    //Hence we are using it to apply custom style to only admin page.
    //echo $hook;
	if( 'toplevel_page_alfa_admin' != $hook ){ return; }
	
	wp_register_style( 'alfa_admin', get_template_directory_uri() . '/css/alfa.admin.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'alfa_admin' );

    wp_enqueue_media();
	
	wp_register_script( 'alfa-admin-script', get_template_directory_uri() . '/js/alfa.admin.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'alfa-admin-script' );
	
}
add_action( 'admin_enqueue_scripts', 'sunset_load_admin_scripts' );

