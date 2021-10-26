<div class="tt-header-wrapper wrapper">
  <div class="tt-header-container container">
    <div class="tt-header-row row">
      <?php
        $ttBgImg = get_sub_field('tt_background_image');
      ?>
      <div class="ttheader-left col-12 col-md-8" style="background-image: url('<?php echo $ttBgImg;?>');">
      </div>
      <div class="ttheader-right col-12 col-md-4">
        <?php
        $ttBtnInfo = get_sub_field('tt_right_link');
        $ttBtnTtl = $ttBtnInfo['title'];
        $ttBtnUrl = $ttBtnInfo['url'];
        ?>
          <h2><?php the_sub_field('tt_right_header');?></h2>
          <p><?php the_sub_field('tt_right_content');?></p>
          <div class="primary-button button">
            <a href="<?php echo $ttBtnTtl;?>"><?php echo $ttBtnUrl;?></a>
          </div>
      </div>
    </div>
  </div>
</div>
