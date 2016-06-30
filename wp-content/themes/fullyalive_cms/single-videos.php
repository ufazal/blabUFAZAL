<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Foundation
 * @since foundation 1.0
 */

get_header(); ?>
	<div id="content">
<div id="breadcrumbs">You are here: <a href="<?php echo home_url( '/' ); ?>">Home</a> » <a href="<?php echo home_url( '/clients' ); ?>">Clients</a> » <strong><?php the_title(); ?></strong></div>
		<div id="main">
			<div id="maincontent">
			
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				
				
				
				<h2 class="posttitle"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'bluelinerfoundation' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						
						
				<div class="entry-content">
					<?php the_content( __( 'Read More', 'bluelinerfoundation' ) ); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'bluelinerfoundation' ), 'after' => '</div>' ) ); ?>
					<br />
<div class="clear"></div><!-- end clear float -->
				</div>
			</div><!-- end post -->
	
			<?php endwhile; // end of the loop. ?>
				<div class="clear"></div><!-- clear float -->
                <a href="<?php echo home_url( '/contact' ); ?>" title="contact" ><img src="<?php echo get_stylesheet_directory_uri() . "/images/contact_b.png" ?>" alt="contact jack" /></a>

<a href="<?php echo home_url( '/speaking/schedule/' ); ?>" title="contact" ><img src="<?php echo get_stylesheet_directory_uri() . "/images/schedule_b.png" ?>" alt="jacks schedule" /></a>
			</div><!-- end #maincontent -->
			
			<div id="side">
				<?php get_sidebar('page');?>

			</div><!-- end #side -->
			
		  <div class="clear"></div><!-- clear float -->
		  
		</div><!-- end #main -->
	</div><!-- end #content -->
<?php get_footer(); ?>
