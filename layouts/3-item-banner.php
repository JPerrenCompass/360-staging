<section class="three-wide-wrapper wrapper">
  <div class="three-wide-container container overflow-hidden">
    <div class="three-wide-row row">
      <?php if(have_rows('3_item_repeater')):
        while (have_rows('3_item_repeater')) : the_row();
        $wideThumb = get_sub_field('3item_thumb');
        $wideHeader = get_sub_field('3item_header');
        $wideContent = get_sub_field('3item_content');
        $wideLink = get_sub_field('3item_link'); ?>

        <a class="col-12 col-md-4 three-wide-item" href='<?php echo $wideLink; ?>'>
            <div class="three-wide-item-row row mx-3">
              <div class="tw-match-row col-12">
                <div class="row mx-1">
                  <div class="col-3 three-wide-image mt-4" style="background-image: url('<?php echo $wideThumb;?>');">
                  </div>
                  <div class="col-9 three-wide-content">
                    <h3><?php echo $wideHeader;?></h3>
                    <p><?php echo $wideContent;?></p>
                  </div>
                </div>
              </div>
            </div>
        </a>
      <?php endwhile;
    endif;?>
    </div>
  </div>
</section>
