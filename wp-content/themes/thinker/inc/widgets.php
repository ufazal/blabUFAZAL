<?php
/**
 * Available Thinker Custom Widgets
 *
 * Learn more: http://codex.wordpress.org/Widgets_API#Developing_Widgets
 *
 * @package Thinker
 * @since Thinker 1.0
 */
/*-----------------------------------------------------------------------------------*/
/* Custom Fan Pit Widget: Front Page Two Columns Recent Posts
/*-----------------------------------------------------------------------------------*/
class thinker_recentposts extends WP_Widget {
	function __construct() {
		$widget_ops = array('description' => __( '3 Column Recents Posts Widget.', 'thinker') );
		parent::__construct(false, __('Thinker Front Page: 3 Column Recent Posts', 'thinker'),$widget_ops);
	}
	function widget($args, $instance) {
		$title = apply_filters('widget_title', $instance['title'] );
		$postnumber = $instance['postnumber'];
		$category = apply_filters('widget_title', $instance['category']);
		echo $args['before_widget']; ?>
		<?php if( ! empty( $title ) )
			echo '<div class="widget-title-wrap"><h3 class="widget-title"><span>'. esc_html($title) .'</span></h3></div>'; ?>
<?php
// The Query
$recent_query = new WP_Query(array (
		'post_status'    => 'publish',
		'posts_per_page' => $postnumber,
		'ignore_sticky_posts' => 1,
		'category_name' => $category,
	) );
?>
<?php
// The Loop
if($recent_query->have_posts()) : ?>
   <?php while($recent_query->have_posts()) : $recent_query->the_post() ?>
   <div class="threecolumn clearfix masonry">
    <article>
         <?php if ( '' != get_the_post_thumbnail() ) : ?>
			 <div class="entry-thumb">
				 <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'thinker' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail(); ?></a>
			</div><!-- end .entry-thumb -->
		<?php endif; ?>
            <div class="postinner">
			<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'thinker' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_title(); ?></a></h3>
			<?php the_excerpt(); ?>
            </div>
      </article><!--end .column -->
      </div>
   <?php endwhile ?>
<?php endif ?>
	   <?php
	   echo $args['after_widget'];
	    // Reset the post globals as this query will have stomped on it
	   wp_reset_postdata();
	   }
   function update($new_instance, $old_instance) {
   		$instance['title'] = $new_instance['title'];
   		$instance['postnumber'] = $new_instance['postnumber'];
   		$instance['category'] = $new_instance['category'];
       return $new_instance;
   }
   function form($instance) {
   		$title = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
   		$postnumber = isset( $instance['postnumber'] ) ? esc_attr( $instance['postnumber'] ) : '';
   		$category = isset( $instance['category'] ) ? esc_attr( $instance['category'] ) : '';
   	?>
	<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','thinker'); ?></label>
		<input type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($title); ?>" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" /></p>
	<p><label for="<?php echo $this->get_field_id('postnumber'); ?>"><?php _e('Number of posts to show:','thinker'); ?></label>
		<input type="text" name="<?php echo $this->get_field_name('postnumber'); ?>" value="<?php echo esc_attr($postnumber); ?>" class="widefat" id="<?php echo $this->get_field_id('postnumber'); ?>" /></p>
	<p><label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Category slug (optional, separate multiple categories by comma):','thinker'); ?></label>
	<input type="text" name="<?php echo $this->get_field_name('category'); ?>" value="<?php echo esc_attr($category); ?>" class="widefat" id="<?php echo $this->get_field_id('category'); ?>" /></p>
	<?php
	}
}
register_widget('thinker_recentposts');