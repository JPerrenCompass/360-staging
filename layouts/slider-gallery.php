<div class="slider-gallery-wrapper wrapper">
  <div class="slider-gallery-container container">
    <div class="slider-gallery-row row">
      <div class="slider-gallery col-12">
        <?php
        if( have_rows('slide_gallery_repeater') ):
        while( have_rows('slide_gallery_repeater') ) : the_row();
        $slideImage = get_sub_field('slide_image');
        $galleryLink = $slideImage['url'];
        $galleryAlt = $slideImage['alt']; ?>
        <div class="slide mx-2">
          <a href="<?php echo $galleryLink;?>">
          <img src="<?php echo $galleryLink;?>" alt="<?php echo galleryAlt;?>">
          </a>
        </div>
        <?php endwhile;
        endif; ?>
      </div>
    </div>
  </div>
</div>
