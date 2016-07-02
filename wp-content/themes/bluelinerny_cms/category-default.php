<?php  ?><?php get_header(); ?>
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
              <td rowspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" ></td>
            </tr>
          </table>
          <div style="margin-top:10px;">

          </div>
          <?php the_content('Read the rest of this entry &raquo;'); ?>
          <div class="clearboth"></div>
          <div class="bigcomment" align="center">
            <a href="<?php comments_link(); ?>"><img src="<?php bloginfo('stylesheet_directory') ?>/images/comment_big.jpg" alt="comment" width="230" height="55" border="0" /></a>
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
        Sorry, but you are looking for something that isn't here.
      </div>
      <?php endif; ?>
    </div>
    <!-- end content -->
    <?php get_sidebar(); ?>
  </div>
</div>
<!-- end content_wrap -->
<?php get_footer(); ?>
