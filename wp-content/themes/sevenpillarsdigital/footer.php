<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package SevenPillarsDigital
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<div class="container-fluid" style="background-color:#f4f5f5">
  <div class="container" style="background-color:#f4f5f5;  margin-top:25px; margin-bottom:25px;">
    <div class="col-md-6">
      <h5><strong>QUICK LINKS</strong></h5>
      <ul style="font-weight: bold; font-size:16px; text-transform:uppercase;">
       	<!-- The WordPress Menu goes here -->
			<?php wp_nav_menu(
				array(
					'theme_location' => 'footermenu',
					'container_class' => '',
					'menu_class' => 'nav',
					'fallback_cb' => '',
					'menu_id' => 'footer-menu',
					'depth'           => 1
					
				)
			); ?>
      </ul>
    </div>
    <div class="col-md-6">
      <h5><strong>CALL US AT</strong></h5>
      <p style="font-weight: bold; font-size:40px; color:#006699">212-904-1240</p>
     <a href="<?php echo home_url(); ?>"> <img src="<?php bloginfo('stylesheet_directory') ?>/images/blueliner.jpg" alt="home"> </a>
    

    </div>
  </div>
</div>




<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="site-footer-inner col-sm-8">

				<div class="site-info">
					  ©<?php echo date('Y'); ?>  7 Pillars Digital Marketing Academy
				</div><!-- close .site-info -->

			</div>
            
            
            			<div class="site-footer-inner col-sm-4">

				<div class="social">
		
		<a href="http://www.facebook.com/bluelinerny"><i class="fa fa-facebook fa-2x"></i></a>
		<a href="http://twitter.com/blueliner"><i class="fa fa-twitter fa-2x"></i></a>
		<a href="http://www.linkedin.com/companies/blueliner-marketing"><i class="fa fa-linkedin fa-2x"></i></a>
		<a href="http://www.youtube.com/BluelinerPodcasts"><i class="fa fa-youtube fa-2x"></i></a>
		
	</div>
			</div>
             
            
            
            
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>
  <script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 

  ga('create', 'UA-291276-15', '7pillarsdigital.com');

  ga('send', 'pageview');

 

</script>




</body>
</html>