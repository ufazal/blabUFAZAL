<?php
/**
* The main template file.
*/
get_header(); ?>

   <div class="container clearfix">
		
		<div id="primary" role="main" class="twelve columns">
			
			<?php if ( have_posts() ) : ?>
				
				<?php 					
					// Search results (index.php handles search if no search.php used)				
					if ( is_search() ) {
						echo "<div class='post'><h2 class='entry-title archive-title'>";
						echo sprintf( __( 'Your search for %s returned %s %s.', 'cudazi' ), "<span class='search-query'>".get_search_query()."</span>", $wp_query->found_posts, _n( 'result', 'results', $wp_query->found_posts, 'cudazi' ) );
						echo "</h2></div>";
					}				
					while ( have_posts() ) : the_post(); ?>										
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix with-entry-wrap'); ?>>												

							<?php 
                                $ft_image_atts = array( 'fallback_to_first_attached' => false );
                                echo cudazi_featured_image( $ft_image_atts ); 
                            ?>
                            
                            <div class="entry-wrap">
                        
                                <header class="entry-header">	
                                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'cudazi' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                    <div class="post-format-icon"></div>		
                                    <time class="entry-date" datetime="<?php the_time('c'); ?>" pubdate="pubdate" title="<?php the_time( get_option('date_format') ); ?>">
                                        <?php the_time( 'M d' ); ?>
                                    </time>
                                </header>
                            
                                <div class="entry-content">
                                    <?php the_excerpt(); ?>
                                    <?php if ( is_single() ) { wp_link_pages( array( 'before' => '' . __( '<p>Pages:', 'cudazi' ), 'after' => '</p>' ) ); } ?>
                                </div><!--//entry-content-->
                                                
                                <?php get_template_part( 'meta', 'post' ); ?>
                                
                            </div><!--//entry-wrap-->
                        </article><!--//post-->
					
					<?php  endwhile;			    	
			    	get_template_part( 'nav', 'post-loop' );			    	
			    ?>
			    				    
			<?php else: ?>
				
				<div id="post-0" class="post error404 not-found clearfix">
					<h2 class="entry-title"><?php _e( 'Not Found', 'cudazi' ); ?></h2>
					<div class="entry-content">
						<p><?php _e( "We are sorry, the item you requested cannot be found.", 'cudazi' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- //entry-content -->
				</div><!-- //post-0 -->
				
			<?php endif; ?>
							
		</div><!--//columns-->
		
		<div id="secondary" role="complementary" class="four columns">
			<?php get_sidebar(); ?>
		</div><!--//columns-->
						
	</div><!--//container-->
        
<?php get_footer(); ?>