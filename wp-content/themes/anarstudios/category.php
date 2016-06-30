

<?php	 	 get_header(); ?>
<?php	 	 if(cat_match('portfolio')){?>
        <?php	 	 include(TEMPLATEPATH."/category_info.php");?>
    <?php	 	 }else {?>
<div class="container_24">
    <div class="grid_17">



       <?php	 	 while (have_posts()) : the_post(); ?>
			<div class="grid_5">	 <div style="overflow:hidden; height:120px; margin-bottom:10px"><?php	 	 the_post_thumbnail("post_thumb"); ?></div> </div>
			
				
				<div class="grid_11">
						<h2 class="archive_title"><a href="<?php	 	 the_permalink(); ?>"><?php	 	 the_title(); ?></a></h2>
					<?php	 	 the_excerpt(); ?>
					
					</div>
				<div class="clear"></div>
			<?php	 	 endwhile; ?>
			
			<div id="pagination">
			
				<p class="newer"><?php	 	 previous_posts_link('&laquo; Newer posts from this category', 0); ?></p>
				<p class="older"<?php	 	 next_posts_link('Older posts from this category &raquo;', 0); ?></p>
				
			</div>
          
    </div><!-- #content -->
</div><!-- #container -->
<?php	 	 get_sidebar(); ?>
<?php	 	 get_footer(); ?>
 <?php	 	 } ?>