  <footer class="site-footer">

    <div class="site-footer__inner container container--narrow">

      <div class="group">

        <div class="site-footer__col-one">
          <h1 class="school-logo-text school-logo-text--alt-color"><a href="<?php echo site_url()?>"><strong>easy</strong> Learning</a></h1>
         <!-- <p><a class="site-footer__link" href="#">555.555.5555</a></p> -->
         <p class="site-footer__link"> <em style=color:blue;>We promote <strong>free education</strong></em></p>
        </div>

        <div class="site-footer__col-two-three-group">
          <div class="site-footer__col-two">
            <h3 class="headline headline--small">Explore</h3>
            <nav class="nav-list">
	
              <ul>
                <li><a href="<?php echo site_url('/about-us')?>"><strong>About Us</strong></a></li>
                <li><a href="<?php echo site_url('/colleges');?>"><strong>Colleges</strong></a></li>
                <li><a href="<?php echo site_url('/exams');?>"><strong>Exams</strong></a></li>
                <li><a href="<?php echo site_url('/programs');?>"><strong>Programs</strong></a></li>
              </ul>
			  
            </nav>
          </div>

          <div class="site-footer__col-three">
            <h3 class="headline headline--small"><strong>Learn</strong></h3>
            <nav class="nav-list">
	  
	  
		
              <ul>
                <li><a href="#"><strong>Legal</strong></a></li>
                <li><a href="<?php echo site_url('/privacy-policy')?>"><strong>Privacy</strong></a></li>
                <li><a href="#"><strong>Careers</strong></a></li>
              </ul>
			  
            </nav>
          </div>
        </div>

        <div class="site-footer__col-four">
          <h3 class="headline headline--small"><strong>Connect With Us</strong></h3>
          <nav>
            <ul class="min-list social-icons-list group">
              <li><a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
              <li><a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </nav>
        </div>
      </div>

    </div>
	
	
  </footer>
  <!--<div class="search-overlay search-overlay--active">
        <div class="search-overlay__top">
          <div class="container">
            <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
            <input type="text" class="search-term" placeholder="What are you looking for?" id="search-term">
            <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
          </div>
        </div>
-->

  <?php wp_footer(); ?>
   </body>
 </html>