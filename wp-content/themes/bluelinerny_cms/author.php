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

<?php
if(get_query_var('author_name')) :
    $curauth = get_user_by('slug', get_query_var('author_name'));
else :
    $curauth = get_userdata(get_query_var('author'));
endif;
?>

<br />


  <h2 class="pagetitle">Contributions by <?php echo $curauth->display_name; ?></h2><br />

						
		<?php while (have_posts()) : the_post(); ?>
      
        
		<div class="entry">
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time('l, F jS, Y') ?> <?php if(function_exists('the_views')) { the_views(); } ?></small>


				<br /><?php the_excerpt('<p class="serif">Read the rest of this entry &raquo;</p>'); ?> <br />


				<p class="postmetadata">Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>

			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>

	<?php else : ?>
				<div class="entry">
		<h2 class="center">Not Found</h2>
</div>

	<?php endif; ?>

	</div>
  <!-- end content -->
  <?php get_sidebar(); ?>
  </div>
</div>
<!-- end content_wrap -->
<?php get_footer(); ?>
