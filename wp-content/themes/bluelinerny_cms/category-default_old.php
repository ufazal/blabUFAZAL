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

      <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">

        <?php the_title(); ?>

        </a></h2>

      <abbr title="<?php the_time('Y-m-d\TH:i:sO'); ?>">

      <?php unset($previousday); printf(__('%1$s &#8211; %2$s'), the_date('', '', '', false), get_the_time()) ?>

      </abbr>

      <!-- by <?php the_author() ?> -->

    

      <?php the_content('Read the rest of this entry &raquo;'); ?>
      
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

    Sorry, but you are looking for something that isn't here. </div>

  <?php endif; ?>

</div>

  <!-- end content -->

  <?php get_sidebar(); ?>

  </div>

</div>

<!-- end content_wrap -->



<?php get_footer(); ?>

