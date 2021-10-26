<div class="nandu-wrapper wrapper">
  <div class="nandu-container container nandu-row row">
    <div class="nandu-header col-12">

    </div>
  </div>
</div>
<?php if( have_rows('repeater_field_name') ):
    while( have_rows('repeater_field_name') ) : the_row();
        $nanduCat = get_sub_field('sub_field');
        $nanduNum = get_sub_field('');
        $nanduLink = get_sub_field('');?>

        <div class="col-12 col-sm-6 col-md-3 nandu-column">
          <?php echo do_shortcode('[wpdm-all-packages items_per_page="'. $nanduNum .'" categories="'. $nanduCat .'" jstable=1 order="ASC/DESC" cols="title" colheads=""]'); ?>
          <div class="nandu-link">
            <a href="<?php echo $nanduLink; ?>">See older posts ></a>
          </div>
        </div>

    <?php endwhile;
endif; ?>
