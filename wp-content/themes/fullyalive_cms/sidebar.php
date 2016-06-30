<?php
/**
 * The Sidebar containing the post widget areas.
 *
 * @package WordPress
 * @subpackage Foundation
 * @since foundation 1.0
 */
?>
<div id="nsa_member_logo">
	<img class="sidebar_img" src="http://www.fullyaliveleadership.com//wp-content/themes/fullyalive_cms/images/nsa_smaller.jpg" />
</div>

<div id="side-bubble-chimp">
  <h2 class="widget-title" style="font-size:26px;">Sign Up for Blog Email Alerts</h2>
<!-- Begin MailChimp Signup Form -->

<div id="mc_embed_signup">
<form action="http://FullyAliveLeadership.us5.list-manage1.com/subscribe/post?u=b8d5759aa0e1c9a60437b9113&amp;id=37480c3142" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">


<div class="mc-field-group">
	<label for="mce-MMERGE3">Name  <span class="asterisk">*</span>
</label>
	<input type="text" value="" name="MMERGE3" class="required" id="mce-MMERGE3">
</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>	<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
     <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
</form>
</div>

<!--End mc_embed_signup-->
<br />

    <!-- // MAILCHIMP UNSUBSCRIBE CODE \\ -->
<div class="indicates-required" style="float:right; font-size:11px"><a href="http://FullyAliveLeadership.us5.list-manage.com/unsubscribe?u=b8d5759aa0e1c9a60437b9113&id=37480c3142">Unsubscribe from our newsletter</a></div>
<!-- \\ MAILCHIMP UNSUBSCRIBE CODE // -->
<div class="clear"></div>
</div>

<a href="https://twitter.com/#!/FullyAliveLead" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side_twit.png" alt="twitter"    /></a>
     <a href="https://www.facebook.com/FullyAliveLeadership" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side_face.png" alt="facebook"    /></a>
     
     <a href="http://www.linkedin.com/in/jackaltschuler" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side_in.png" alt="linked in"    /></a>
     <br /><br />

  
   


   

   
   
   
<h2 class="widget-title">RSS Feed</h2>
<!-- AddThis Button BEGIN -->
        <a href="http://www.addthis.com/feed.php?pub=xa-4aa80f84617d880a&amp;h1=<?php bloginfo('rss_url'); ?>&amp;t1=" onclick="return addthis_open(this, 'feed', '<?php bloginfo('rss_url'); ?>')" alt="Subscribe using any feed reader!" target="_blank"><img src="http://s7.addthis.com/static/btn/sm-feed-en.gif" alt="Subscribe" style="border: 0px none;" height="16" width="83"></a>
        <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js?pub=xa-4aa80f84617d880a"></script>
        <!-- AddThis Button END --><br /><br />

          <div class="clear"></div>
<div class="widget-area">
  <?php if ( ! dynamic_sidebar( 'post-sidebar' ) ) : ?>
  <?php endif; // end general widget area ?>
</div>
<a href="<?php echo home_url( '/speaker-calendar/' ); ?>" title="schedule" ><img src="<?php echo get_stylesheet_directory_uri() . "/images/schedule_side.png" ?>" alt="jacks schedule" /></a>

