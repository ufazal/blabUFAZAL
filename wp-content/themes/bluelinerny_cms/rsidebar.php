<?php  ?><div class="rsidebar">









<ul>

<li>

<?php if ( !function_exists('dynamic_sidebar')

|| !dynamic_sidebar('rightsidebarTop') ) : ?>

<?php endif; ?>

</li>

</ul>

<ul>
  <li>
    <h2>Recent Posts</h2>
    <ul>
    <ul>
<?php
    $recentPosts = new WP_Query();
    $recentPosts->query('showposts=5&cat=-1446');
?>
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
    <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
<?php endwhile; ?>
</ul>
    </ul>
  </li>
</ul>



<h2>Blueliner on Facebook </h2>

<ul>

<li>

<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fbluelinerny&amp;width=250&amp;connections=8&amp;stream=false&amp;header=false&amp;height=255" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:255px;" allowTransparency="true"></iframe>

<li>

</ul>



<ul>

  <?php // podcasting flash header

			wp_swfobject_echo("http://www.bluelinerny.com/wp-content/themes/bluelinerny_cms/global_assets/callouts/DF_00.swf", "240", "260");  ?>

</ul>



<ul> 

<?php wp_list_categories('orderby=id&show_count=1&child_of=1&title_li=<h2>' . __('Categories') . '</h2>'); ?>

</ul>







<ul>

<li>

<?php if ( !function_exists('dynamic_sidebar')

|| !dynamic_sidebar('rightsidebarBottom') ) : ?>

<?php endif; ?>



</li>

</ul>











</div>

