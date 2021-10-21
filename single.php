<?php get_header(); ?>

<?php $postThumbnail = get_the_post_thumbnail_url(); ?>


<section class="blog-header-wrapper wrapper">
  <div class="blog-header-container container">
    <div class="blog-header-row row">
      <div class="blog-header-image col-12" style="background-image: url('<?php echo $postThumbnail;?>');">
      </div>
    </div>
  </div>
</section>

<section class="post-content-wrapper wrapper">
  <div class="post-content-container container">
    <div class="post-content-row row">
      <div class="blog-container col-8">
        <div class="post-title">
          <h1><?php the_title();?></h1>
        </div>
        <div class="post-date">
          <p><?php $post_date = get_the_date('j F, Y'); echo $post_date;?></p>
        </div>
        <div class="post-content"><?php the_content(); ?></div>
        <?php get_template_part( 'flexible-content' ); ?>
      </div>
      <div class="more-blogs col-4">
        <h2>Other Posts</h2>
        <?php
        $the_query = new WP_Query( array(
        'posts_per_page' => 4
        ));
        ?>
        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <?php $postThumbnail = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
          <a class="blog-row row" href="<?php the_permalink();?>">
            <div class="more-blogs-thumbnail col-4" style="background-image: url('<?php echo $postThumbnail; ?>');">
            </div>
            <div class="more-blogs-content col-8">
              <h3><?php the_title(); ?></h3>
              <p><?php echo wp_trim_words( get_the_content(), 10, '...' ); ?></p>
            </div>
          </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        <div class="col-12 read-more-link">
          <a href="###"> Read older news <i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
