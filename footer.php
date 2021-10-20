<?php
wp_footer();
$footerContactNumber = get_field('footer__phone', 'option');
$footerContactEmail = get_field('footer_email', 'option');
$preFooterLogo = get_field('footer_logo', 'option');
$tandcText = get_field('tandc_text', 'option');
?>
<footer>
  <section class="footer-wrapper wrapper">
    <div class="footer-container container">
      <div class="footer-row row">
        <div class="footer-menu col-12 col-md-4 text-sm-center text-md-left">
          <div class="footer-header">
            <h3>Login Areas</h3>
          </div>
          <?php wp_nav_menu( array(
            'theme_location'=>'login-area',
            'container_class' => 'footer-nav-container') );?>
          </div>
          <div class="footer-menu col-12 col-md-4 text-sm-center text-md-left">
            <div class="footer-header">
              <h3>Navigation</h3>
            </div>
            <?php wp_nav_menu( array(
              'theme_location'=>'footer-menu',
              'container_class' => 'footer-nav-container') );?>
            </div>
        <div class="footer-slider col-12 col-md-4">
            <div class="footer-header">
              <h3>New Starters</h3>
            </div>
        </div>
      </div>
      <div class="footer-spacing"></div>
    </div>
  </section>
</footer>
</body>
</html>
