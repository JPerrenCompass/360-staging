<?php get_header(); ?>

<section class="home-hero-container">
    <div class="homepage-slider row no-gutter stuck-banner">
            <?php
            if( have_rows('slide_backgrounds') ):
                $slideCount = 0;
                while ( have_rows('slide_backgrounds') ) : the_row(); 
                $slideCount ++;
        
                $backgroundImg = get_sub_field('slide_background'); 
                $backgroundImgLink = $backgroundImg['url'];
                
                $slideOffset = get_sub_field('slide_offset'); ?>
                    <script type="text/javascript">
                        /*var waypoint = new Waypoint({
                            element: jQuery('.break-<?php //echo $slideCount; ?>'),
                            handler: function(direction) {
                            testslider.slick('slickGoTo', <?php //echo $slideCount +1;?>, false);
                        },
                            offset: 0
                        });*/
                    </script>
                    <div class="col-12 cappa text-center slide-<?php echo $slideCount;?>" style="background-image: url('<?php echo $backgroundImgLink;?>');"></div>
                <?php endwhile;
            endif; ?> 
    </div>
	<div class="container">
		<div class="row">
			<div class="col-12">
			    <?php 
                if( have_rows('slide_content')) :
                    $slideContentCount = 0;
                
                    while (have_rows('slide_content')) : the_row();
                    $slideContentCount ++;
                                    
                    $slideForegroundImg = get_sub_field('slide_foreground_image');
                    $slideForegroundImgLink = $slideForegroundImg['url']; ?>
                       
                    <div class="home-hero-section break-<?php echo $slideContentCount; ?>">
                    <?php if (get_sub_field('slide_content')) { ?>
                        <h2><?php the_sub_field('slide_content', false, false); ?></h2>
                    <?php
                    } elseif (get_sub_field('slide_foreground_image')) { ?>
                        <img src="<?php echo $slideForegroundImgLink; ?>" alt="">
                    <?php } else { ?>
                        <div class="empty-block"></div>
                    <?php } ?>
                    </div>
                <?php endwhile;
                endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_template_part( 'flexible-content' ); ?>

<?php get_footer(); ?>