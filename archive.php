<?php get_header();
$postThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
$headerImg = get_field('hero_image_replacement'); ?>

<?php if (get_field('banner_video')) { ?>

  <div class="jumbotron-banner jumbotron text-center" style="height:24rem;">
    <video id="video-background" preload muted autoplay loop>
      <source src="https://www.staging3.compass-schools.org/wp-content/uploads/2021/07/Rolling-small-education-website-video1.mp4" type="video/mp4">
      <source src="https://www.staging3.compass-schools.org/wp-content/uploads/2021/07/Rolling-small-education-website-video1.mp4" type="video/ogg">
    </video>
    <div class="jumbotron-banner-container container">
      <div class="image-overlay-tn">
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

<?php } else { ?>

<div class="jumbotron-banner jumbotron text-center" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/placeholder-background.png'); background-size:cover;  min-height: 40rem;">
  <div class="image-overlay">
    <h1><?php the_title();?></h1>
  </div>
  <div class="jumbotron-banner-container container">
  </div>
</div>

<?php } ?>


<section class="archive-wrapper">
  <div class="archive-container container">
    <div class="archive-row row">
      <?php
      if ( have_posts() ) {
      	while ( have_posts() ) {
      		the_post();
          ?>
            <div class="col-sm-12 col-md-4 col-lg-3 archive-item">
              <div class="post-image-row row">
                <div class="col-sm-12 post-image">
                  <?php the_post_thumbnail(); ?>
                </div>
              </div>
              <div class="post-info-row row">
                <div class="col-sm-12 post-content">
                  <h2><?php the_title(); ?></h2>
                  <p><?php $post_date = get_the_date('j F, Y'); echo $post_date;?></p>
                  <?php if (has_excerpt()) {
                    the_excerpt();
                  } else {
                    echo apply_filters( 'the_content', wp_trim_words( strip_tags( $post->post_content ), 55 ) );
                  } ?>
                  <a href="<?php the_permalink();?>">Read More...</a>
                  <span class="archive-underline"></span>
                </div>
              </div>
            </div>
          <?php
      	}
      }
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
