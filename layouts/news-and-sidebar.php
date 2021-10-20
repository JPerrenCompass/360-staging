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
        <?php the_title(); ?>
        <?php the_excerpt(); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>

      <div class="sidebar col-12 col-md-4">
        <h2>Need to ask zoe some questions about this on thursday but the space exists and the layout works!</h2>
      </div>
    </div>
  </div>
</div>
