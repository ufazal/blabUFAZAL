<?php  ?><?php get_header(); ?>
<!-- begin header big image -->
<?php include('inc_blog_header.php'); ?>
<!-- end header big image -->
<!-- begin content_wrap -->
<div id="content_wrap"  class="clearfix">
  <div id="main-blog">
    <!-- begin content -->
    <div id="content" class="clearfix">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="entry">
        <div class="post" id="post-<?php the_ID(); ?>">
          
         
          <!-- by <?php the_author() ?> -->
          
          <script type="text/javascript">
(function() {
var s = document.createElement('SCRIPT'), s1 = document.getElementsByTagName('SCRIPT')[0];
s.type = 'text/javascript';
s.async = true;
s.src = 'http://widgets.digg.com/buttons.js';
s1.parentNode.insertBefore(s, s1);
})();
</script>
          <table width="640" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td colspan="4" valign="top"><h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
                <?php the_title(); ?>
              </a></h2>
                <abbr title="<?php the_time('Y-m-d\TH:i:sO'); ?>">
                  <?php unset($previousday); printf(__('%1$s &#8211; %2$s'), the_date('', '', '', false), get_the_time()) ?>
                </abbr></td>
              <td width="100" rowspan="2"align="center" valign="top" class="postheadauthor" style="font-size:10px; font-family:Arial, Helvetica, sans-serif; color:#999"><a href="<?php echo get_bloginfo('url') . '/author/' . get_the_author_meta('user_nicename'); ?>"> <?php echo get_avatar( get_the_author_email(), '80' ); ?> </a><?php the_author() ?></td>
            </tr>
            <tr>
              <td width="90" rowspan="2" valign="middle" class="postheadtable"><a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink() ?>" data-count="horizontal">Tweet</a>
                <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></td>
              <td width="90" rowspan="2" valign="middle" class="postheadtable"><a class="DiggThisButton DiggCompact" href="http://digg.com/submit?url=<?php echo get_permalink() ?>"></a></td>
              <td width="90" rowspan="2" valign="middle" class="postheadtable"><iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo get_permalink() ?>&amp;layout=button_count&amp;show_faces=false&amp;width=90&amp;action=like&amp;colorscheme=light&amp;height=20" scrolling="No" frameborder="0" style="border:none; overflow:hidden; width:90px; height:20px;" allowtransparency="true"></iframe></td>
              <td rowspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" ></td>
            </tr>
          </table>
          <div style="margin-top:10px;">

          </div>
          <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
          
          <p class="postmetadata"> Posted by <a href="mailto:<?php the_author_email(); ?>">
            <?php the_author() ?>
            </a><br />
            Posted in <span class="cty">
            <?php the_category(', ') ?>
            </span> |
            <?php edit_post_link('Edit', '', ' | '); ?>
            <span class="cmt">
            <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
            </span><br />
            <?php the_tags('Tags: ', ', ', '<br />'); ?>
          </p>
          <script src="http://feeds.feedburner.com/~s/bluelinerny?i=<?php the_permalink() ?>" type="text/javascript" charset="utf-8"></script>
          <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
        </div>
      </div>
      <div class="entry">
        <?php comments_template(); ?>
      </div>
      <?php endwhile; else: ?>
      <div class="entry">
        <p>Sorry, no posts matched your criteria.</p>
      </div>
      <?php endif; ?>
    </div>
    <!-- end content -->
    <?php get_sidebar(); ?>
  </div>
</div>
<!-- end content_wrap -->
<?php get_footer(); ?>
