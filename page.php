<?php get_header();?>

<div class="page-title-wrapper wrapper">
  <div class="page-title-container container">
    <div class="page-title-row row">
      <div class="col-12">
        <?php the_title();?>
      </div>
    </div>
  </div>
</div>

<?php get_template_part( 'flexible-content' ); ?>

<?php get_footer(); ?>
