<?php
wp_footer();
$footerContactNumber = get_field('footer__phone', 'option');
$footerContactEmail = get_field('footer_email', 'option');
$preFooterLogo = get_field('footer_logo', 'option');
$tandcText = get_field('tandc_text', 'option');
?>
<footer>
  <section class="pre-footer-wrapper wrapper">
    <div class="pre-footer-container container">
      <div class="pre-footer-row row">
        <div class="col-sm-12 pre-footer-left">
          <div class="pre-footer-left-row row">
            <?php if (have_rows('partners', 'options')) :
              while (have_rows('partners', 'options')) : the_row();
              $partnerImg = get_sub_field('partner_logo');
              $partnerLnk = get_sub_field('partner_link');?>
            <div class="pre-footer-partner col-6 col-sm-3 text-center">
              <a href="<?php echo $partnerLnk;?>" target="_blank"><img src="<?php echo $partnerImg;?>" alt=""></a>
            </div>
            <?php
            endwhile;
            endif;
          ?>
          <div class="pre-footer-logo col-6 col-sm-3 text-right">
            <img src="<?php echo $preFooterLogo;?>" alt="">
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="footer-wrapper wrapper">
    <div class="footer-container container">
      <div class="footer-row row">
        <div class="footer-contact col-sm-12 col-md-4 text-sm-center text-md-left">
          <h3>Get in Touch</h3>
        </div>
        <div class="footer-contact footer-phone col-sm-12 col-md-4">
          <!--<i class="fas fa-phone-alt"></i><a href="tel:<?php //echo $footerContactNumber; ?>"><?php //echo $footerContactNumber; ?></a>-->
        </div>
        <div class="footer-contact footer-email col-sm-12 col-md-4">
          <!--<i class="fas fa-envelope"></i><a href="mailto:<?php //echo $footerContactEmail; ?>"><?php //echo $footerContactEmail; ?></a>-->
        </div>
      </div>
      <div class="footer-menu col-sm-12">
        <?php wp_nav_menu( array(
          'theme_location'=>'footer-menu',
          'container_class' => 'footer-nav-container') );?>
      </div>
    </div>
    <div class="tandc-wrapper wrapper">
      <div class="tandc-container container">
        <div class="tandc-row row">
          <div class="col-sm-12">
            <p><?php echo $tandcText; ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
</footer>
</body>
</html>
