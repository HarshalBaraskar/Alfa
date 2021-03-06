<?php
/*
	

	
	========================
		THEME CUSTOM POST TYPES
	========================
*/
$contact = get_option( 'activate_form' );
if( @$contact == 1 ){
	add_action( 'init', 'alfa_contact_custom_post_type' );
}
/* CONTACT CPT */
function alfa_contact_custom_post_type() {
	$labels = array(
		'name' 				=> 'Messages',
		'singular_name' 	=> 'Message',
		'menu_name'			=> 'Messages',
		'name_admin_bar'	=> 'Message'
	);
	
	$args = array(
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'post',
		'hierarchical'		=> false,
		'menu_position'		=> 26,
		'menu_icon'			=> 'dashicons-email-alt',
		'supports'			=> array( 'title', 'editor', 'author' )
	);

	register_post_type( 'sunset-contact', $args );
	
	
}
	