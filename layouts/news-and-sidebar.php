<?php $postThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<div class="nands-wrapper wrapper">
  <div class="nands-container container">
    <div class="nands-row row">
      <div class="news-left col-12 col-md-8">
        <h2>News</h2>
        <?php
        $the_query = new WP_Query( array(
        'posts_per_page' => 3
        ));
        ?>
        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <?php $postThumbnail = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
          <div class="news-item row">
            <div class="post-thumbnail col-12 col-md-2" style="background-image: url('<?php echo $postThumbnail; ?>');">
            </div>
            <div class="post-content col-12 col-md-10">
              <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></h3></a>
              <p><?php $post_date = get_the_date('j F, Y'); echo $post_date;?></p>
              <span class="nands-excerpt"><p><?php echo wp_trim_words( get_the_content(), 25, '...' ); ?></p></span>
            </div>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
<<<<<<< Updated upstream
        <div class="read-more-row row justify-content-end">
          <div class="read-more-text col-12 col-md-4 text-right">
            <a href="###"> Read older news <i class="fas fa-chevron-right"></i></a>
          </div>
=======

        <div class="col"></div>
        <div class="col-12 col-md-4">
          <a href="###"> Read older news <i class="fas fa-chevron-right"></i></a>
>>>>>>> Stashed changes
        </div>
      </div>

      <div class="sidebar col-12 col-md-4">
        <div class="sidebar-row row">
          <div class="nands-sidebar-item col-12">
            <a target="_blank" href="<?php the_sub_field('button_1_link');?>">
              <div class="compass-people">
                <img src="<?php the_sub_field('button_1_image'); ?>">
              </div>
            </a>
          </div>
          <div class="weekly-poll col-12 mx-3 my-3">
            <h3>This weeks poll</h3>
            <?php ?>
          </div>
          <div class="nands-sidebar-item col-12">
            <a target="_blank" href="<?php the_sub_field('button_2_link');?>">
              <div class="perkbox">
                <img src="<?php the_sub_field('button_2_image'); ?>">
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
