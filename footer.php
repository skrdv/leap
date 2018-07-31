
  <footer class="siteFooter">
    <div class="container">

  	  <?php if (!is_front_page()): ?>
      <div class="row">
        <div class="col-md-12">
          <h3 class="siteFooter-title">Get The Latest<span></span></h3>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="200" title="Subscribe"]'); ?>
      </div>
  	  <?php endif; ?>

      <div class="row">
        <div class="col-md-12">
          <h3 class="siteFooter-title">
            Follow LEAP<span></span>
          </h3>
          <div class="siteFooter-social social">
            <ul class="social-icons">
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <h3 class="navbar-footer siteFooter-subtitle">Why LEAP?</h3>
          <?php wp_nav_menu(
            array(
              'depth'           => 1,
              'container'       => false,
              'theme_location'  => 'footer-1',
              'menu_class' 	    => 'nav navbar-nav navbar-footer navbar-footer-1',
              'fallback_cb' 	  => 'wp_bootstrap_navwalker::fallback',
              'walker' 			    => new wp_bootstrap_navwalker()
            )
          ); ?>
        </div>
        <div class="col-sm-6 col-md-3">
          <h3 class="navbar-footer siteFooter-subtitle">Learn More</h3>
          <?php wp_nav_menu(
            array(
              'depth'           => 1,
              'container'       => false,
              'theme_location' 	=> 'footer-2',
              'menu_class' 		  => 'nav navbar-nav navbar-footer navbar-footer-2',
              'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
              'walker' 			    => new wp_bootstrap_navwalker()
            )
          ); ?>
        </div>
        <div class="col-sm-6 col-md-3">
          <h3 class="navbar-footer siteFooter-subtitle">Connect</h3>
          <?php wp_nav_menu(
            array(
              'depth'           => 1,
              'container'       => false,
              'theme_location' 	=> 'footer-3',
              'menu_class' 		  => 'nav navbar-nav navbar-footer navbar-footer-3',
              'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
              'walker' 			    => new wp_bootstrap_navwalker()
            )
          ); ?>
        </div>
        <div class="col-sm-6 col-md-3">
          <h3 class="navbar-footer siteFooter-subtitle">For You</h3>
          <?php wp_nav_menu(
            array(
              'depth'           => 1,
              'container'       => false,
              'theme_location' 	=> 'footer-4',
              'menu_class' 		  => 'nav navbar-nav navbar-footer navbar-footer-4',
              'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
              'walker' 			    => new wp_bootstrap_navwalker()
            )
          ); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="siteFooter-copy">© 2018 — LEAP Innovations</p>
          <a class="siteFooter-link" href="#">Terms & Conditions</a>
          <a class="siteFooter-link" href="#">Privacy Policy</a>
        </div>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>

</body>
</html>
