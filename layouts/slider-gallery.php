<?php
if (get_sub_field('background_colour') == true) {
  $galleryBgc = "#2ca4e1";
} else {
  $galleryBgc = "#232930";
}
$slideTtl = get_sub_field('slider_title');
?>
<div class="slider-gallery-wrapper wrapper" style="background-color: <?php echo $galleryBgc; ?>;">
  <div class="slider-gallery-container container">
    <div class="slider-gallery-row row">
      <div class="slider-gallery-title col-12">
        <h2><?php echo $slideTtl; ?></h2>
      </div>
      <div class="slider-gallery col-12">
        <?php
        if( have_rows('slide_gallery_repeater') ):
        while( have_rows('slide_gallery_repeater') ) : the_row();
        $slideImage = get_sub_field('slide_image');
        $galleryLink = $slideImage['url'];
        $galleryAlt = $slideImage['alt']; ?>
        <div class="slide mx-2">
          <a href="<?php echo $galleryLink;?>" download>
          <img src="<?php echo $galleryLink;?>" alt="<?php echo galleryAlt;?>">
          </a>
        </div>
        <?php endwhile;
        endif; ?>
      </div>
    </div>
  </div>
</div>
