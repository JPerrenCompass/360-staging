<section class="three-wide-wrapper wrapper">
  <div class="three-wide-container container">
    <div class="three-wide-row row">
      <?php if(have_rows('3_item_repeater')):
        while (have_rows('3_item_repeater')) : the_row();
        $wideThumb = get_sub_field('3item_thumb');
        $wideHeader = get_sub_field('3item_header');
        $wideContent = get_sub_field('3item_content');
        $wideLink = get_sub_field('3item_link'); ?>

        <a class="col-12 col-md-4 three-wide-item" href='<?php echo $wideLink; ?>'>
          <div class="three-wide-subrow">
            <div class="row">
              <img class="col-3 three-wide-content" src="<?php echo $wideThumb;?>" alt="">
              <div class="col-9 three-wide-content">
                <h3><?php echo $wideHeader;?></h3>
                <p><?php echo $wideContent;?></p>
              </div>
            </div>
          </div>
        </a>
      <?php endwhile;
    endif;?>
    </div>
  </div>
</section>
