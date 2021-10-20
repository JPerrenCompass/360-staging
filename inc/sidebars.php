<?php
/*
*
* Add sidebars for your theme here
*
*/

// Register Sidebars
function custom_sidebars() {

	/* $args = array(
		'id'            => 'primary',
		'class'         => 'primary-sidebar',
		'name'          => __( 'Primary', 'text_domain' ),
		'description'   => __( 'The main site sidebar', 'text_domain' ),
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'footer',
		'class'         => 'footer-sidebar',
		'name'          => __( 'Footer', 'text_domain' ),
		'description'   => __( 'Sidebar for widgets in footer', 'text_domain' ),
	);
	register_sidebar( $args ); */

}
add_action( 'widgets_init', 'custom_sidebars' );