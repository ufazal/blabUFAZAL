<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Foundation
 * @since foundation 1.0
 */
?>
<hr class="separator.line"></hr>
<?php /*?><div id="f_clientthumbs">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/f_clientthumb.png" alt="our clients"    />
</div><?php */?>
<div id="plug_clientthumbs">

<?php include (ABSPATH . '/wp-content/plugins/logo-slideshow/logo-slider.php');?>



</div>
<div class="image_carousel_wrap">

	<div class="image_carousel">
						<div id="foo1"> 














                      
                 

                         <div class="clear"></div><!-- clear float -->     
						</div>
                  </div>

  
		
					<!-- /image_carousel -->





</div>

</div>
<!-- end .pad_container -->

</div>
<!-- end #container -->

</div>
<!-- end #frame -->

<div class="clear"></div><!-- clear float -->  
<div id="footerwrap">

  <div id="footer">
    <div id="footerlinks">
      <div id="foot-col1">
        <?php get_sidebar('footer1');?>
      </div>
      <!-- end #foot-col1 -->
      <div id="foot-col2">
        <?php get_sidebar('footer2');?>
      </div>
      <div id="copyright"> &copy;
      <?php global $wpdb;
				$post_datetimes = $wpdb->get_results("SELECT YEAR(min(post_date_gmt)) AS firstyear, YEAR(max(post_date_gmt)) AS lastyear FROM $wpdb->posts WHERE post_date_gmt > 1970");
				if ($post_datetimes) {
					$firstpost_year = $post_datetimes[0]->firstyear;
					$lastpost_year = $post_datetimes[0]->lastyear;
	
					$copyright = $firstpost_year;
					if($firstpost_year != $lastpost_year) {
						$copyright .= '-'. $lastpost_year;
					}
					$copyright .= ' ';
	
					echo $copyright;
					echo '<a href="'.home_url( '/').'">'.get_bloginfo('name') .'</a>';
				}
			?>
      .
      <?php _e('All rights reserved.', 'bluelinerfoundation'); ?>
    </div>
      <!-- end #foot-col2 -->      
    </div>
    <div class="clear"></div>
    <div id="sn_footer">
      <ul class="sn">
      <li><a href="https://twitter.com/#!/FullyAliveLead" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/i-twitter.png" alt="twitter"    /></a></li>
      <li><a href="https://www.facebook.com/FullyAliveLeadership" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/i-fb.png" alt="facebook"    /></a></li>
      <li><a href="http://www.youtube.com/user/FullyAliveLeadership?feature=plcp" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/i-ytube.png" alt="youtube"    /></a></li>
      <li><a href="http://www.linkedin.com/in/jackaltschuler" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/i-linked.png" alt="linked in"    /></a></li>
      </ul>
    </div>
    <div id="footer_logo"> <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'bluelinerfoundation' ) ); ?>" > <img src="<?php echo get_stylesheet_directory_uri() . "/images/logo_footer.png" ?>" alt="" /> </a> </div>
  </div>
  <!-- end #footer -->

</div>
<!-- end #footerwrap --> 

<script type="text/javascript"> Cufon.now();</script> <!-- to fix cufon problems in IE browser -->
<?php
		/* Note to Always have wp_footer() just before the closing </body> */
			wp_footer();
	?>
</body></html>