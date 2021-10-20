<?php get_header();
  $postThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
  $headerImg = get_field('hero_image_replacement'); ?>

  <?php if (get_field('hero_image_replacement')) {
      $headerImg = get_field('hero_image_replacement'); ?>

    <div class="short-banner jumbotron text-center" style="background-image: url('<?php echo $headerImg; ?>');">
      <div class="short-image-overlay">
        <h1><?php wp_title();?></h1>
      </div>
      <div class="short-banner-container container">
      </div>
    </div>

    <?php } else { ?>

    <div class="short-banner jumbotron text-center" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/placeholder-background.png'); background-size:cover;  min-height:18rem;">
      <div class="short-image-overlay">
        <h1><?php wp_title();?></h1>
      </div>
      <div class="short-banner-container container">
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
            <div class="post-item col-6 col-md-4">
              <div class="archive-image">
                <?php $postThumbnail = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
                <div class="bg-image-container" style="background-image: url('<?php echo $postThumbnail; ?>');">
                </div>
              </div>
              <div class="archive-details">
                <div class="AdName col-12">
                  <h3><?php the_title(); ?></h3>
                </div>
                <div class="AdInfo col-12">
                  <p><?php $post_date = get_the_date('j F, Y'); echo $post_date;?></p>
                  <?php  the_excerpt(); ?>
                </div>
                <div class="AdLink col-12">
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
