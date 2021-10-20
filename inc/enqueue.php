<?php

/*
*
* ENQUEUE ALL CSS AND JS
*
*/

	/* ADMIN CSS  */
	function load_custom_wp_admin_style() {

	}

	add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );

	/*
	*
	* THEME ENQUEUE FUNCTION
	*
	*/
	function enqueue_theme_scripts() {

		// CSS ENQUEUE
		// $css_url = get_stylesheet_directory_uri().'/assets/css';

		//MAIN CSS FILE
		//wp_enqueue_style( 'style', get_stylesheet_directory_uri().'/assets/css/style.css' );

		//DE-REGISTER JQUERY TO AVOID CONFLICTS
		wp_deregister_script('jquery');

		// JS ENQUEUES
		wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', array(), null, true);
		//wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true );
		wp_enqueue_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js');

	}

	add_action( 'wp_enqueue_scripts', 'enqueue_theme_scripts' );
