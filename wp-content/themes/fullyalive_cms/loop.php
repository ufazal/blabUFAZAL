<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Foundation
 * @since foundation 1.0
 */
?>
<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>

<div id="post-0" class="post error404 not-found">
  <h1 class="posttitle">
    <?php _e( 'Not Found', 'bluelinerfoundation' ); ?>
  </h1>
  <div class="entry">
    <p>
      <?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'bluelinerfoundation' ); ?>
    </p>
    <?php get_search_form(); ?>
  </div>
  <!-- .entry-content --> 
</div>
<!-- #post-0 -->
<?php endif; ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php /* How to display all posts. */ ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if(!is_search()){?>
 
  <?php } ?>
  <?php if (!is_search() ) { ?>
  
  <?php } ?>
  <?php if (is_search() ) : // Only display excerpts for archives and search. ?>
     <h2 class="posttitle"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'bluelinerfoundation' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
    <?php the_title(); ?>
    </a></h2>
  <div class="entry-content">
    <?php $excerpt = get_the_excerpt(); echo bf_string_limit_words($excerpt,50);?>
    <?php edit_post_link( __( 'Edit', 'bluelinerfoundation' ), '<span class="edit-link">', '</span>' ); ?>
    <div class="clear"></div>
    <!-- end clear float --> 
  </div>
  <!-- .entry-summary -->
  
  <?php else : ?>
  
  <div class="entry-content">

  
  <div class="thumbalign"> <?php
				$custom = get_post_custom($post->ID);
				$cf_thumb = (isset($custom["thumb"][0]))? $custom["thumb"][0] : "";
				
				if($cf_thumb!=""){
					$cf_thumb = "<img src='" . $cf_thumb . "' alt='' width='125' height='125' class='imgborder'/>";
				}
			?>
  <?php if($cf_thumb!=""){ 
			// linkthumb
			echo '<a href="' .  get_permalink($post->ID )  . '">';
			echo $cf_thumb;
			    echo '</a>';
				 }else{ 
			echo '<a href="' .  get_permalink($post->ID ) . '" >';
			the_post_thumbnail( 'blog-post-thumbnail', array('class' => 'imgborder','alt' =>'', 'title' =>'') );}
			    echo '</a>'; ?>
                </div>
                    <h2 class="posttitle"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'bluelinerfoundation' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
    <?php the_title(); ?>
    </a> <span style="font-size:12px;"> -<?php  the_time('M d, Y') ?></span></h2>                
    <?php $excerpt = get_the_excerpt(); echo bf_string_limit_words($excerpt,50);?>
   
    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to', 'bluelinerfoundation');?> <?php the_title_attribute(); ?>" class="more alignright">
    <?php _e('Read More', 'bluelinerfoundation'); ?></a>
    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'bluelinerfoundation' ), 'after' => '</div>' ) ); ?>
    <div class="clear"></div>
    <!-- end clear float --> 
  </div>
  <?php endif; ?>
</div>
<!-- end .post -->

<?php comments_template( '', true ); ?>
<?php endwhile; // End the loop. Whew. ?>
<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
<?php if(function_exists('wp_pagenavi')) { ?>
<?php wp_pagenavi(); ?>
<?php }else{ ?>
<div id="nav-below" class="navigation">
  <div class="nav-previous">
    <?php next_posts_link( __( '<span class="meta-nav">&laquo;</span> Older', 'bluelinerfoundation' ) ); ?>
  </div>
  <div class="nav-next">
    <?php previous_posts_link( __( 'Newer <span class="meta-nav">&raquo;</span>', 'bluelinerfoundation' ) ); ?>
  </div>
</div>
<!-- #nav-below -->
<?php }?>
<?php endif; ?>
