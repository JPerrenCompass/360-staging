<div class="tt-header-wrapper wrapper">
  <div class="tt-header-container container">
    <div class="tt-header-row row">
      <?php
        $ttBgImg = get_sub_field('tt_background_image');
      ?>
      <div class="ttheader-left col-12 col-md-9" style="background-image: url('<?php echp $ttBgImg;?>');">
      </div>
      <div class="ttheader-right col-12 col-md-3">
        <?php
        $ttBtnInfo = get_sub_field();
        $ttBtnTtl = $ttBtnInfo['title'];
        $ttBtnUrl = $ttBtnInfo['url'];
        ?>
        <h2><?php get_sub_field('');?></h2>
        <p><?php get_sub_field('');?></p>
        <div class="primary-button button">
          <a href="<?php echo $ttBtnTtl;?>"><?php echo $ttBtnUrl;?></a>
        </div>
      </div>
    </div>
  </div>
</div>
