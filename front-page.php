<?php get_header();
$postThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );

if( get_field("breadcrumb_toggle") == true && function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '</p><p id=“breadcrumbs”>','</p><p>' );
} ?>


<?php get_template_part( 'flexible-content' ); ?>

<?php get_footer(); ?>
