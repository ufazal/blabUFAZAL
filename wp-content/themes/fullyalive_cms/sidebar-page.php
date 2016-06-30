<?php
/**
 * The Sidebar containing the page widget areas.
 *
 * @package WordPress
 * @subpackage Foundation
 * @since foundation 1.0
 */
?>
<?php if (!is_page('Home')) {  ?>
<div id="nsa_member_logo">
	<img class="sidebar_img" src="http://www.fullyaliveleadership.com//wp-content/themes/fullyalive_cms/images/nsa_smaller.jpg" />
</div>
<?php }  ?>


<div>
	<a href="http://www.amazon.com/Engagement-Leaders-Ignite--Game-Performance/dp/1941870171" target="_blank"> <img class="sidebar_img" src="http://fullyaliveleadership.com/wp-content/uploads/2015/06/book-engagement.png" /> </a>
	<div align="center"><a href="http://fullyaliveleadership.com/contact/">For volume purchases, just send us a note</a>.</div>
	<br />
</div>


<div id="side-bubble">
  <h2 class="widget-title" style="font-size:26px;">Request A Quote / Contact</h2>
<?php  echo do_shortcode('[contact-form-7 id="79" title="contactsidebar"]'); ?>
</div>

<div class="widget-area">
<h2 class="widget-title" ">Recent Blog Posts</h2>
</div>
<div>
  <?php $postslist = get_posts('category=1&numberposts=4&order=DESC&orderby=post_date');
foreach ($postslist as $post) :
setup_postdata($post); ?>
  
  <!--  thumbnail-->
  
  <div style="width:300px; padding-bottom:20px"> 
    <!-- start thumb -->
    <div style="float:left; width:50px; margin-right:15px; margin-top:5px; ">
    
      <?php if($cf_thumb!=""){ 
			// linkthumb
		
			echo $cf_thumb;
			 
				 }else{ 
		
			the_post_thumbnail( 'blog-post-tinythumb', array('class' => '','alt' =>'', 'title' =>'', 'style' =>' border:solid;border-width:1px') );}
			    ?>
    </div>
    <!-- end thumb -->
 <span style="font-size:12px; line-height:12px"> <a href="<?php the_permalink() ?>" rel="bookmark"> <strong><?php the_title(); ?></strong><span style="font-size:11px;"><em> ~<?php the_time('m/j/y') ?></em></span></a>
      <br />
      <?php $excerpt = get_the_excerpt(); echo bf_string_limit_words($excerpt,20);?>
    
    </span>
    <div class="clear"></div>
    <!-- clear float --> 
  </div>
  <?php endforeach; ?>
</div>
<!-- end latest post-->



<div class="widget-area">
	<?php if ( ! dynamic_sidebar( 'page-sidebar' ) ) : ?><?php endif; // end general widget area ?>
</div>
<div class="clear"></div>
