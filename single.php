<?php get_header();
$postThumbnail = get_the_post_thumbnail_url();
$headerImg = get_field('hero_image_replacement'); ?>

<?php if (get_field('banner_video')) { ?>

  <div class="jumbotron-banner jumbotron text-center" style="height:24rem;">
    <video id="video-background" preload muted autoplay loop>
      <source src="https://www.staging3.compass-schools.org/wp-content/uploads/2021/07/Rolling-small-education-website-video1.mp4" type="video/mp4">
      <source src="https://www.staging3.compass-schools.org/wp-content/uploads/2021/07/Rolling-small-education-website-video1.mp4" type="video/ogg">
    </video>
    <div class="jumbotron-banner-container container">
      <div class="image-overlay">
      </div>
      <h1><?php the_title();?></h1>
    </div>
  </div>

  <?php } elseif (get_field('hero_image_replacement')) {
    $headerImg = get_field('hero_image_replacement'); ?>

  <div class="jumbotron-banner jumbotron text-center" style="background-image: url('<?php echo $headerImg; ?>');">
    <div class="image-overlay">
      <h1><?php the_title();?></h1>
    </div>
    <div class="jumbotron-banner-container container">
    </div>
  </div>

<?php } elseif (has_post_thumbnail()) { ?>

  <div class="jumbotron-banner jumbotron text-center" style="background-image: url('<?php echo $postThumbnail;?>');  min-height: 40rem;">
    <div class="image-overlay">
      <h1><?php the_title();?></h1>
    </div>
    <div class="jumbotron-banner-container container">
    </div>
  </div>

<?php } ?>


<?php if( get_field("breadcrumb_toggle") == true && function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '</p><p id=“breadcrumbs”>','</p><p>' );
} ?>


<?php get_template_part( 'flexible-content' ); ?>

<?php get_footer(); ?>
