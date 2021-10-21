<section class="multislide-wrapper wrapper">
  <div class="multislide-container container">
    <div class="multislide-row row">
      <div class="left-multislider col-12 col-md-8">
        <?php if (have_rows('multislider_repeater')) :
          while (have_rows('multislider_repeater')) : the_row();
          $leftslideimage = get_sub_field('slide_image'); ?>

              <div class="leftslide"  style="background-image: url('<?php echo $leftslideimage; ?>');"></div>

        <?php endwhile;
          endif;
        ?>
      </div>
      <div class="right-multislider col-12 col-md-4">
        <?php if (have_rows('multislider_repeater')) :
          while (have_rows('multislider_repeater')) : the_row();

          $rightslideheader = get_sub_field('slide_header');
          $rightslidecontent = get_sub_field('slide_content');
          $rightslidelink = get_sub_field('slide_link'); ?>

          <div class="rightslide">
            <h2 class="slide-header">
              <?php echo $rightslideheader; ?>
            </h2>
            <p class="slide-content">
              <?php echo $rightslidecontent;?>
            </p>
            <div class="primary-button button slide_link">
              <a href="<?php echo $rightslidelink; ?>">
                Read More
              </a>
            </div>
          </div>
        <?php endwhile;
          endif;
        ?>
      </div>
    </div>
  </div>
</section>
