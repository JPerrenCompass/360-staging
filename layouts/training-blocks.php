<section class="training-blocks-wrapper wrapper">
  <div class="training-blocks-container container">
    <div class="training-blocks-row row">
      <div class="training-blocks-header col-12">
        <h2><?php the_sub_field('blocks_header');?> </h2>
      </div>
        <?php
          if( have_rows('training_blocks_repeater') ):
            while( have_rows('training_blocks_repeater') ) : the_row();
                $tbImg = get_sub_field('block_image');
                $tbNam = get_sub_field('block_name');
                $tbLnkInf = get_sub_field('block_link');
                $tbUrl = $tbLnkInf['url'];
                ?>
                <div class="training-block col-12 col-md-4">
                  <div class="block-img" style="background-image: url('<?php echo $tbImg;?>')">
                  </div>
                  <div class="block-content">
                    <a href="<?php echo $tbUrl;?>">
                      <h3><?php echo $tbNam;?></h3>
                    </a>
                  </div>
                </div>
            <?php endwhile;
          endif;
        ?>
    </div>
  </div>
</section>
