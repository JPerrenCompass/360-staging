<!DOCTYPE html>
<html lang="en">
<?php wp_head(); ?>

<head>
    <title>Compass Community Education</title>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/main.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/form-style.css" />
    <link rel="stylesheet" href="https://use.typekit.net/kah1sqf.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/menu-style.css?v=0.1">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  </head>


<header id="masthead" class="site-header">
  <div id="navbar" class="navbar"><nav id="site-navigation" class="navigation main-navigation"><button class="menu-toggle"><!--?php _e( 'Menu', 'twentythirteen' ); ?--></button>
  <!--?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?-->
  <!--?php get_search_form(); ?--></nav><!-- #site-navigation -->
  </div>
</header>

 <?php if ( function_exists( 'groovy_menu' ) ) { groovy_menu(); } ?>

<body <?php body_class(); ?>>
