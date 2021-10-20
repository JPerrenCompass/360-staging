<?php

add_action( 'after_setup_theme', 'register_my_menus' );

function register_my_menus() {
  register_nav_menu( 'primary', __( 'Primary' ) );
  register_nav_menu( 'footer-menu', __( 'Footer Menu' ) );
  register_nav_menu( 'login-area', __('Login Areas') );
}
?>
