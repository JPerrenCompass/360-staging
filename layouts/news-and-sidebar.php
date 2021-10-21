<?php $postThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<div class="nands-wrapper wrapper">
  <div class="nands-container container">
    <div class="nands-row row">
      <div class="news col-12 col-md-8">
        <h2>News</h2>
        <?php
        $the_query = new WP_Query( array(
        'posts_per_page' => 3
        ));
        ?>
        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <?php $postThumbnail = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
          <div class="row">
            <div class="post-thumbnail col-3" style="background-image: url('<?php echo $postThumbnail; ?>');">
            </div>
            <div class="post-content col-9">
              <h3><?php the_title(); ?></h3>
              <p><?php $post_date = get_the_date('j F, Y'); echo $post_date;?></p>
              <?php echo wp_trim_words( get_the_content(), 20, '...' ); ?>
            </div>
            <div class="post-link col-12 text-right">
              <a href="<?php the_permalink();?>">Read More</a>
            </div>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        <div class="read-more-row row justify-content-end">
          <div class="col-12 col-md-4 text-right">
            <a href="###"> Read older news <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </div>

      <div class="sidebar col-12 col-md-4">
        <h2>Need to ask zoe some questions about this on thursday but the space exists and the layout works!</h2>
      </div>
    </div>
  </div>
</div>
