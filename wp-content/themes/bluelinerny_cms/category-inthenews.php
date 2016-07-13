<?php  ?><?php get_header(); ?>
<!-- begin header big image -->
<?php include('inc_header_image.php'); ?>
<!-- end header big image -->
<!-- begin content_wrap -->

<div id="content_wrap"  class="clearfix">
  <!-- begin content -->
  <div id="content" class="clearfix">
    <!-- begin content_left -->
    <div id="content_left">
      <!-- beginleftnav -->
      <?php include('left_nav_itdev.php'); ?>
      <!-- endleft nav -->
    </div>
    <!-- end content_left -->
    <!-- begin content_right -->
    <div id="content_right" class="makerelative">
      <?php
// let's generate info appropriate to the page being displayed
if (is_category('News')) {
// we're in events category
echo '<a href="';
echo bloginfo('url'); 
echo '" title="News" ><img src="';
echo bloginfo('template_url'); 
echo '/global_assets/header_images/textheader_whatsup.png" alt="News and Events"id="headertext"></a>';
} elseif (is_category('Events')) {
// we're in events category
echo '<a href="';
echo bloginfo('url'); 
echo '" title="News" ><img src="';
echo bloginfo('template_url'); 
echo '/global_assets/header_images/textheader_events.png" alt="News and Events"id="headertext"></a>';
} elseif (is_category('In The News')) {
// we're in Inthenews category
echo '<a href="';
echo bloginfo('url'); 
echo '" title="News" ><img src="';
echo bloginfo('template_url'); 
echo '/global_assets/header_images/textheader_inthenews.png" alt="News and Events"id="headertext"></a>';
}elseif (is_category('Latest News')) {
// we're looking at a single category view, so let's show _all_ the categories
// we're in the latest news category
echo '<a href="';
echo bloginfo('url'); 
echo '" title="News" ><img src="';
echo bloginfo('template_url'); 
echo '/global_assets/header_images/textheader_latestnews.png" alt="News and Events"id="headertext"></a>';
}elseif (is_single()) {
// we're looking at a singlepage.  Which category?
 $post = $wp_query->post;
 if ( in_category('In The News') ) {
// we're in Inthenews category
echo '<a href="';
echo bloginfo('url'); 
echo '" title="News" ><img src="';
echo bloginfo('template_url'); 
echo '/global_assets/header_images/textheader_inthenews.png" alt="News and Events"id="headertext"></a>';
 } elseif ( in_category('Latest News') ) {
  // we're in the latest news category
echo '<a href="';
echo bloginfo('url'); 
echo '" title="News" ><img src="';
echo bloginfo('template_url'); 
echo '/global_assets/header_images/textheader_latestnews.png" alt="News and Events"id="headertext"></a>';
 }elseif ( in_category('Events') ) {
 // we're in events category
echo '<a href="';
echo bloginfo('url'); 
echo '" title="News" ><img src="';
echo bloginfo('template_url'); 
echo '/global_assets/header_images/textheader_events.png" alt="News and Events"id="headertext"></a>';						
 }
 // end wich category
}  else {
// catch-all for everything else show default(archives, searches, 404s, etc)
 echo '<a href="';
echo bloginfo('url'); 
echo '" title="News" ><img src="';
echo bloginfo('template_url'); 
echo '/global_assets/header_images/textheader_whatsup.png" alt="News and Events"id="headertext"></a>';
} // That's all, folks!
?>
      <div id="breadcrumbNews">
        <ul>
         <?php wp_list_cats('child_of=3&exclude_tree=&title_li=' ); ?>
        </ul>
      </div>
      <div id="page">
		<?php if (have_posts()) : ?>

		 
		<?php while (have_posts()) : the_post(); ?>
		<div class="post news">
				<div class="inthenews_date" >
				<?php the_date('Y-m-d'); ?>				</div>
				<h2 id="post-<?php the_ID(); ?>"class="post_title_icon"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		

		<div class="line-seperator"></div>
		

			</div>
	
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>
	
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>
		
	</div>
      <div id="right_column">
        <div id="sidebar">
          <h2 class="calendar">Upcoming Events</h2>
          <ul>
            <?php

 global $post;

 $myposts = get_posts('numberposts=5&offset=0&category=4');

 foreach($myposts as $post) :

 ?>
            <li><a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
              </a> </li>
            <?php endforeach; ?>
          </ul>
          <br />
          <br />
          <table border="0" align="center" cellpadding="5" cellspacing="0">
            <tr>
              <td colspan="2" valign="top"><strong><font color="#0063A4">Blueliner's Senior Management is available for media interviews and speaking engagements. Contact our marketing department for inquiries: </font></strong></td>
            </tr>
            <tr>
              <td align="right" valign="top"><img src="<?php bloginfo('template_url'); ?>/images_news/icon_phone.jpg" width="35" height="36" /></td>
              <td align="left" valign="middle"><font color="#333333"><strong>Call today </strong><br />
                212-904-1240 </font></td>
            </tr>
            <tr>
              <td align="right" valign="top"><img src="<?php bloginfo('template_url'); ?>/images_news/icon_contactform.jpg" width="35" height="36" /></td>
              <td align="left" valign="middle"><font color="#333333"><strong>Contact us <br />
                </strong><a href="http://www.bluelinerny.com/contact.php">Reach us Online &raquo;</a></font></td>
            </tr>
            <tr>
              <td align="right" valign="top"><img src="<?php bloginfo('template_url'); ?>/images_news/icon_email.jpg" width="35" height="36" /></td>
              <td align="left" valign="middle"><p><font color="#333333"><strong>Email us<br />
                  </strong>info@bluelinerny.com</font></p></td>
            </tr>
          </table>
          <div class="clear">
          </div>
        </div>
      </div>
    </div>
    <!-- end content_right -->
  </div>
  <!-- end content -->
</div>
<!-- end content_wrap -->
<?php get_footer(); ?>