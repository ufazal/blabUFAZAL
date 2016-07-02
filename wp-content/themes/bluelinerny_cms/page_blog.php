<?php  ?><?php
/*
Template Name: Blog Page
*/
?>
<?php get_header(); ?>
<!-- begin header big image -->
<?php include('inc_blog_header.php'); ?>
<!-- end header big image -->
<!-- begin content_wrap -->
<div id="content_wrap"  class="clearfix">
  <div id="main-blog">
  <!-- begin content -->
  <div id="content">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <div class="entry">
    <div id="post-<?php the_ID(); ?>">
      <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
        <?php the_title(); ?>
        </a></h2>
        <?php if (is_page('syndicate')) /* load news section styles in news categories*/{ ?>
<table width="90%" border="0" cellspacing="0" cellpadding="20">

                  <tr>

                    <td width="48%"><a href="http://feeds.feedburner.com/bluelinerny">

<img src='<?php bloginfo('stylesheet_directory'); ?>/feed_icons/rss_icon.gif' alt='RSS' border='0' /> RSS</a>

<br />

<a href="http://feeds.my.aol.com/add.jsp?url=http://feeds.feedburner.com/bluelinerny">

<img src='<?php bloginfo('stylesheet_directory'); ?>/feed_icons/myaol_cta1.gif' alt='Add to My AOL' border='0' /> </a>

<br />

<a href="http://www.bloglines.com/sub/http://feeds.feedburner.com/bluelinerny">

<img src='<?php bloginfo('stylesheet_directory'); ?>/feed_icons/sub_modern10.gif' alt='Add to Bloglines' border='0' /> </a>

<br />

<a href="http://fireant.tv/subscribe?rss_url=http://feeds.feedburner.com/bluelinerny">

<img src='<?php bloginfo('stylesheet_directory'); ?>/feed_icons/sub_fireant.gif' alt='Add to FireAnt' border='0' /> </a>

<br />

<a href="http://fusion.google.com/add?feedurl=http://feeds.feedburner.com/bluelinerny">

<img src='<?php bloginfo('stylesheet_directory'); ?>/feed_icons/add.gif' alt='Add to Google' border='0' /> </a>

<br />

<a href="http://my.msn.com/addtomymsn.armx?id=rss&amp;ut=http://feeds.feedburner.com/bluelinerny">

<img src='<?php bloginfo('stylesheet_directory'); ?>/feed_icons/mymsn_icon.gif' alt='Add to My MSN' border='0' /> </a>

<br />

<a href="http://www.netvibes.com/subscribe.php?url=http://feeds.feedburner.com/bluelinerny">

<img src='<?php bloginfo('stylesheet_directory'); ?>/feed_icons/add2netvibes.gif' alt='Add to Netvibes' border='0' /> </a>

<br />

<a href="http://www.newsburst.com/Source/?add=http://feeds.feedburner.com/bluelinerny">

<img src='<?php bloginfo('stylesheet_directory'); ?>/feed_icons/newsburst3.gif' alt='Add to Newsburst' border='0' /> </a>

<br />

<a href="http://www.newsgator.com/ngs/subscriber/subext.aspx?url=http://feeds.feedburner.com/bluelinerny">

<img src='<?php bloginfo('stylesheet_directory'); ?>/feed_icons/ngsub1.gif' alt='Add to Newsgator' border='0' /> </a>

<br />

<a href="http://www.newsisfree.com/user/sub/?url=http://feeds.feedburner.com/bluelinerny">

<img src='<?php bloginfo('stylesheet_directory'); ?>/feed_icons/sub_nif4.gif' alt='Add to News Is Free' border='0' /> </a>

<br />

<a href="http://www.rojo.com/add-subscription?resource=http://feeds.feedburner.com/bluelinerny">

<img src='<?php bloginfo('stylesheet_directory'); ?>/feed_icons/add-to-rojo.gif' alt='Add to Rojo' border='0' /> </a>

<br />

<a href="http://technorati.com/faves?add=http://feeds.feedburner.com/bluelinerny">

<img src='<?php bloginfo('stylesheet_directory'); ?>/feed_icons/tech-fav-4.gif' alt='Add to Technorati' border='0' /> </a>

<br />

<a href="http://add.my.yahoo.com/rss?url=http://feeds.feedburner.com/bluelinerny">

<img src='<?php bloginfo('stylesheet_directory'); ?>/feed_icons/addtomyyahoo4.gif' alt='Add to My Yahoo' border='0' /> </a>

<br />



</td>

                    <td width="52%"><form style="border:1px solid #ccc;padding:3px;text-align:center;" action="http://www.feedburner.com/fb/a/emailverify" method="post" target="popupwindow" onsubmit="window.open('http://www.feedburner.com/fb/a/emailverifySubmit?feedId=1231396', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><p>Subscribe by Email</p><p><input type="text" style="width:140px" name="email"/></p><input type="hidden" value="http://feeds.feedburner.com/~e?ffid=1231396" name="url"/><input type="hidden" value="7 Pillars of Internet Marketing" name="title"/><input type="hidden" name="loc" value="en_US"/><input type="submit" value="Subscribe" /><p>Delivered by <a href="http://www.feedburner.com" target="_blank">FeedBurner</a></p></form></td>

                  </tr>

                </table>
<?php } ?>

    
      <?php the_content('Read the rest of this entry &raquo;'); ?>
      
    </div>
  </div>
  <?php endwhile; ?>
  <div class="navigation">
    <div class="alignleft">
      <?php next_posts_link('<span class="prev"> Previous Entries</span>') ?>
    </div>
    <div class="alignright">
      <?php previous_posts_link('Next Entries <span class="next">&nbsp;</span>') ?>
    </div>
  </div>
  <?php else : ?>
  <div class="entry">
    <h2>Not Found</h2>
    Sorry, but you are looking for something that isn't here. </div>
  <?php endif; ?>
</div>
  <!-- end content -->
  <?php get_sidebar(); ?>
  </div>
</div>
<!-- end content_wrap -->
<?php get_footer(); ?>
