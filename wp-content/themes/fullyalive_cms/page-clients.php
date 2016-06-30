<?php
/**
 * Template Name: Clients 
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
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
			
				
             

				
				
				
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php the_content( __( 'Read More', 'bluelinerfoundation' ) ); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'bluelinerfoundation' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'bluelinerfoundation' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post -->
	

				<?php endwhile; ?>
				<div class="clear"></div><!-- clear float -->
			
                
                
                
                
				
				<?php 
						global $more; $post;
						$args = array(
							'category_name' => 'clients', // Change these category SLUGS to suit your 
							'paged' => $paged
						);
						
					query_posts($args); 
				
				
					/* Since we called the_post() above, we need to
					 * rewind the loop back to the beginning that way
					 * we can run the loop properly, in full.
					 */
					rewind_posts();
				
					/* Run the loop for the archives page to output the posts.
					 * If you want to overload this in a child theme then include a file
					 * called loop-archives.php and that will be used instead.
					 */
					
				?>
              <!--  clients cat loop start-->
                
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
    <?php $excerpt = get_the_excerpt(); echo bf_string_limit_char($excerpt,150);?>
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
              <!--  clients category loop end-->
                	<div class="clear"></div><!-- clear float -->
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
                
                
                
                
				
				<?php wp_reset_query();?>
				<div class="clear"></div><!-- clear float -->
			</div><!-- end #maincontent -->
			
			
			
		  <div class="clear"></div><!-- clear float -->
		  
		</div><!-- end #main -->
	</div><!-- end #content -->
<?php get_footer(); ?>
