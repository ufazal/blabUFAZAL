<?php get_header(); ?>
<div id="contentwrapper">
<div id="content">

	<?php if (have_posts()) :?>
		<?php $postCount=0; ?>
		<?php while (have_posts()) : the_post();?>
			<?php $postCount++;?>
	<div class="entry entry-<?php echo $postCount ;?>">
		<div class="entrytitle">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2> 
			<h3><?php the_category(', ') ?> <?php the_time('F jS, Y') ?></h3>
		</div>

		<div class="entrybody">
			<?php the_content(); ?>
		</div>
		
		<br />
		
		<div class="entrymeta">
		<div class="postinfo">

			<a class="commentmeta" href="#respond">Leave a comment</a>
			<a class="commentrss" href="<?php echo comments_rss(); ?>" rel="nofollow">Comment RSS</a> <?php edit_post_link('Edit', ' | ', ' | '); ?>
			
		</div>
		</div>

		<br />

		<div class="navigation">
			<?php previous_post('Previous: %', '', 'yes'); ?>
			<br />
			<?php next_post('Next: %', '', 'yes'); ?>
		</div>

	</div>		

	<div class="commentsblock">
		<?php comments_template(); ?>
	</div>

	<?php endwhile; ?>

	<?php else : ?>

		<h2>Not Found</h2>
		<div class="entrybody">Sorry, but you are looking for something that isn't here.</div>
	<?php endif; ?>
</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>