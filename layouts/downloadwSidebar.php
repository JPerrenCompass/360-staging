<div class="dl-sidebar-wrapper wrapper">
  <div class="dl-sidebar-container container">
    <div class="dl-sidebar-row row">
      <div class="downloads-container col-12 col-md-9">
        <?php $shortcodeArgs = get_sub_field('downloads_category');?>
        <?php echo do_shortcode('[wpdm-all-packages items_per_page="10" categories="' . $shortcodeArgs .'" order_by="field_name" order="ASC/DESC" cols="title|update_date|download_link" colheads="Title|Date|Download"]'); ?>
      </div>
      <div class="sidebar-container col-12 col-md-3">
        <ul>
        <?php
        if( have_rows('sidebar_menu') ):
            while( have_rows('sidebar_menu') ) : the_row();
                $menuInfo = get_sub_field('menu_item');
                $menuUrl = $menuInfo['url'];
                $menuTitle = $menuInfo['title'];?>

                <li><a href="<?php echo $menuUrl; ?>"><?php echo $menuTitle;?></a></li>

        <?php endwhile;
        endif;
        ?>
        </ul>
      </div>
    </div>
  </div>
</div>
