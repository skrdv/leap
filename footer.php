<div class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="site-footer-title">
          Get The Latest<span></span>
        </h3>
      </div>
      <div class="col-md-8">
        Your Email
      </div>
      <div class="col-md-4">
        Subscribe
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h3 class="site-footer-title">
          Follow LEAP<span></span>
        </h3>
        <div class="site-footer-socials">
          Socials
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <h3 class="site-footer-subtitle">Why LEAP?</h3>
        <?php wp_nav_menu(
          array(
            'depth'           => 2,
            'container'       => false,
            'theme_location'  => 'footer-1',
            'menu_class' 	    => 'nav navbar-nav navbar-footer',
            'fallback_cb' 	  => 'wp_bootstrap_navwalker::fallback',
            'walker' 			    => new wp_bootstrap_navwalker()
          )
        ); ?>
      </div>
      <div class="col-md-3">
        <h3 class="site-footer-subtitle">Learn More</h3>
        <?php wp_nav_menu(
          array(
            'depth'           => 2,
            'container'       => false,
            'theme_location' 	=> 'footer-2',
            'menu_class' 		  => 'nav navbar-nav navbar-footer',
            'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
            'walker' 			    => new wp_bootstrap_navwalker()
          )
        ); ?>
      </div>
      <div class="col-md-3">
        <h3 class="site-footer-subtitle">Connect</h3>
        <?php wp_nav_menu(
          array(
            'depth'           => 2,
            'container'       => false,
            'theme_location' 	=> 'footer-3',
            'menu_class' 		  => 'nav navbar-nav navbar-footer',
            'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
            'walker' 			    => new wp_bootstrap_navwalker()
          )
        ); ?>
      </div>
      <div class="col-md-3">
        <h3 class="site-footer-subtitle">For You</h3>
        <?php wp_nav_menu(
          array(
            'depth'           => 2,
            'container'       => false,
            'theme_location' 	=> 'footer-4',
            'menu_class' 		  => 'nav navbar-nav navbar-footer',
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
