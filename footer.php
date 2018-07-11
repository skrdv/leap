<div class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="site-footer-title">Get The Latest<span></span></h3>
      </div>
      <?php echo do_shortcode('[contact-form-7 id="200" title="Subscribe"]'); ?>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h3 class="site-footer-title">
          Follow LEAP<span></span>
        </h3>
        <div class="site-footer-socials">
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
        <h3 class="navbar-footer site-footer-subtitle">Why LEAP?</h3>
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
        <h3 class="navbar-footer site-footer-subtitle">Learn More</h3>
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
        <h3 class="navbar-footer site-footer-subtitle">Connect</h3>
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
        <h3 class="navbar-footer site-footer-subtitle">For You</h3>
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
        <p class="site-footer-copy">© 2018 — LEAP Innovations</p>
        <a class="site-footer-link" href="#">Terms & Conditions</a>
        <a class="site-footer-link" href="#">Privacy Policy</a>
      </div>
    </div>
  </div>
</div>


<?php wp_footer(); ?>

</body>
</html>
