<?php
if( have_rows('flexible_content') ):
    $index = 1;
    while ( have_rows('flexible_content') ) : the_row();
        if( get_row_layout() == 'content_block'):
            get_template_part( 'layouts/full-width-content');
          elseif( get_row_layout() == 'spacer'):
            include( locate_template( 'layouts/spacer.php', false, false) );
          elseif (get_row_layout() == '2of3_slider'):
            get_template_part('layouts/multi-slider');
          elseif (get_row_layout() == '3_item_banner'):
            get_template_part('layouts/3-item-banner');
          elseif (get_row_layout() == 'news_and_sidebar'):
            get_template_part('layouts/news-and-sidebar');
        endif;
        $index++;
    endwhile;
endif;
?>
