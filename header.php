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



<header class="site-header">

</header>

<section class="user-menu-wrapper wrapper">
  <div class="user-menu-container container">
    <div class="user-menu-row row">
      <div class="col-12">
        <!-- ultimate user stuff goes here, leave blank for now -->
      </div>
    </div>
  </div>
</section>

 <?php if ( function_exists( 'groovy_menu' ) ) { groovy_menu(); } ?>

<body <?php body_class(); ?>>
