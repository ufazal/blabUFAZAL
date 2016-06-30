<?php
/**
 * The template for displaying clients.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Foundation
 * @since foundation 1.0
 */

get_header(); ?>
	<div id="content">
		<div id="main">
		<?php if ( function_exists('yoast_breadcrumb') && !is_front_page() ) {
				yoast_breadcrumb('<div id="breadcrumbs">','</div>');
				} ?>
			<div id="main">
				<h1 class="pagetitle">What People Are Saying</h1>
				<?php if ( $paged < 2 ) : ?>
<p>At the completion of each Fully Alive Leadership©workshop and keynote, attendees always come to me with comments about what our session has meant to them. Here's a collection of a few of these heartfelt comments from our wonderful attendees in their words - some are in video, too. Just click more beneath any entry for their comments. They will give you an idea of the take-home value of Fully Alive Leadership© keynotes and workshops.</p>

<p>And when it's time to create full engagement - to influence others to give their A-game - just contact us and together we'll explore the possibilities together.</p>
<hr class="separator.line"></hr>
<?php else : ?>

<?php endif; ?>

				
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                
                   <?php
  ++$featuredgridcounter;
  if($featuredgridcounter == 4) {
    $postclass = 'last';
    $featuredgridcounter = 0;
  } else { $postclass = ''; }
?>
                <div class="clientbox <?php echo $postclass; ?>">
           <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>     

				 
                <!--  thumbnail-->
                 <?php
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

  
                 <div class="entry-content">
                 	<h3 class="posttitle"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'bluelinerfoundation' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
    <?php the_title(); ?>
    </a></h3>
    <?php $excerpt = get_the_excerpt(); echo bf_string_limit_words($excerpt,20);?>
    <br />
    <br />
    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to', 'bluelinerfoundation');?> <?php the_title_attribute(); ?>" class="more alignright">
    <?php _e('More', 'bluelinerfoundation'); ?>
    </a>
   
    <div class="clear"></div>
    <!-- end clear float --> 
  </div>
	
			</div><!-- end .post -->
	</div>
				<?php endwhile; ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
<?php if(function_exists('wp_pagenavi')) { ?>
<?php wp_pagenavi(); ?>
<?php }else{ ?>
<div id="nav-below" class="navigation">
  <div class="nav-previous">
    <?php next_posts_link( __( '<span class="meta-nav">&laquo;</span> Next', 'bluelinerfoundation' ) ); ?>
  </div>
  <div class="nav-next">
    <?php previous_posts_link( __( 'Previous <span class="meta-nav">&raquo;</span>', 'bluelinerfoundation' ) ); ?>
  </div>
</div>
<!-- #nav-below -->
<?php }?>
<?php endif; ?>


				<div class="clear"></div><!-- clear float -->
			</div><!-- end #maincontent -->
			
			

		  
		</div><!-- end #main -->
	</div><!-- end #content -->
<?php get_footer(); ?>
