<div class="nandu-wrapper wrapper">
  <div class="nandu-container container">
    <div class="nandu-row row">
      <div class="nandu-header col-12">
        <h2>News and Updates</h2>
      </div>
      <?php
      if( have_rows('newsletter_column_repeater') ):
          while( have_rows('newsletter_column_repeater') ) : the_row();
              $colNam = get_sub_field('nandu_column_name');
              $colUrl = get_sub_field('nandu_column_link'); ?>

              <div class="nandu-column col-12 col-sm-6 col-md-3">
              <ul class="nandu-col-list col-12">

              <?php
              if( have_rows('nandu_file_repeater') ):
                  while( have_rows('nandu_file_repeater') ) : the_row();
                    $docInf = get_sub_field('file_link');
                    $docUrl = $docInf['url'];
                    $docNam = $docInf['title']; ?>

                      <li><a href="<?php echo $docUrl; ?>" download><?php echo $docNam; ?> </a></li>

                  <?php endwhile;
              endif;
              ?>
            </ul>
            <div class="nandu-link col-12">
              <a href="<?php echo $colUrl; ?>"><?php echo $colNam; ?></a>
            </div>
          </div>
          <?php endwhile;
      endif; ?>

    </div>
  </div>
</div>
