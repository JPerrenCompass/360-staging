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

  <div class="jumbotron-banner jumbotron text-center" style="background-image: url('<?php echo $headerImg; ?>'); background-position: center;">
    <div class="image-overlay">
      <h1><?php the_title();?></h1>
    </div>
    <div class="jumbotron-banner-container container">
    </div>
  </div>

<?php } elseif (the_post_thumbnail()) { ?>

  <div class="jumbotron-banner jumbotron text-center" style="background-image: url('<?php echo $postThumbnail;?>');  min-height: 40rem; background-position: center;">
    <div class="image-overlay">
      <h1><?php the_title();?></h1>
    </div>
    <div class="jumbotron-banner-container container">
    </div>
  </div>

<?php } else { ?>

  <div class="jumbotron-banner jumbotron text-center" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/placeholder-background.png'); background-position: center; background-size:cover;  min-height: 40rem;">
    <div class="image-overlay">
      <h1><?php the_title();?></h1>
    </div>
    <div class="jumbotron-banner-container container">
    </div>
  </div>

  <?php } ?>
<section class="breadcrumb-wrapper">
  <div class="breadcrumb-container container">
    <div class="breadcrumb-row row">
      <div class="col-12 breadcrumbs-col">
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
        ?>
      </div>
    </div>
  </div>
</section>


<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', 'page' ); ?>

<?php endwhile; // end of the loop. ?>

<?php get_template_part( 'flexible-content' ); ?>

<?php get_footer(); ?>
