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
              <td width="100" rowspan="2"align="center" valign="top" class="postheadauthor" style="font-size:10px; font-family:Arial, Helvetica, sans-serif; color:#999"><a href="<?php echo get_bloginfo('url') . '/author/' . get_the_author_meta('user_nicename'); ?>"> <?php echo get_avatar( get_the_author_email(), '70' ); ?> </a><?php the_author() ?></td>
            </tr>
            <tr>
              <td>
              <?php if(function_exists('display_social4i')) echo display_social4i("small","float-left"); ?>
              </td>
            </tr>
            <tr>
              <td align="center" ></td>
            </tr>
          </table>
          <div style="margin-top:10px;">

          </div>
          <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
                   <div style="margin-top:10px;margin-bottom:10px;">
<table width="640" border="0" cellspacing="0" cellpadding="0" style="clear:both">
            <tr>
              <td>
              <?php if(function_exists('display_social4i')) echo display_social4i("small","float-left"); ?>
              </td>
              <td rowspan="2">&nbsp;</td>
              <td width="100" class="postheadauthor" style="font-size:10px; font-family:Arial, Helvetica, sans-serif; color:#999">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" ></td>
            </tr>
          </table>
          </div> 
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
