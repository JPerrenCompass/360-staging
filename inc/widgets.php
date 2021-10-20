<?php

// Add your widgets here
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Footer Column 1',
		'id'   => 'footer-column-1',
		'description'   => 'Footer Column 1',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>'
	));

	register_sidebar(array(
		'name' => 'Footer Column 2',
		'id'   => 'footer-column-2',
		'description'   => 'Footer Column 2',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>'
	));
    
	register_sidebar(array(
		'name' => 'Footer Column 4',
		'id'   => 'footer-column-4',
		'description'   => 'Footer Column 4',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
}