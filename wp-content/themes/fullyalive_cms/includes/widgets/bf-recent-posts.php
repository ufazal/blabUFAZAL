<?php
// =============================== BF Recent Posts widget ======================================
class BF_RecentPostWidget extends WP_Widget {
    /** constructor */

	function BF_RecentPostWidget() {
		$widget_ops = array('classname' => 'widget_bf_recent_posts', 'description' => __('BF - Recent Posts','bluelinerfoundation') );
		$this->WP_Widget('bf-recent-posts', __('BF - Recent Posts','bluelinerfoundation'), $widget_ops);
	}


  /** @see WP_Widget::widget */
    function widget($args, $instance) {		
        extract( $args );
        $title = apply_filters('widget_title', empty($instance['title']) ? __('BF Recent Posts','bluelinerfoundation') : $instance['title']);
		$category = apply_filters('widget_category', $instance['category']);
		$showpost = apply_filters('widget_showpost', $instance['showpost']);
		$showdate = apply_filters('widget_showdate', isset($instance['showdate']));
        ?>
              <?php echo $before_widget; ?>
                  <?php if ( $title )
                        echo $before_title . $title . $after_title; ?>
						
								<?php  if (have_posts()) : ?>
								<ul class="latestpost">
								<?php $querycat = $category;?>
								<?php 
									query_posts("showposts=".$showpost."&category_name=" . $querycat);
									global $post;
								?>
								<?php while (have_posts()) : the_post(); ?>
								<li>
								<?php if($showdate=="true") {?>
								<span class="date"><?php  the_time('M d, Y') ?></span><br />
								<?php } ?>
								<span class="t1"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to', 'bluelinerfoundation');?> <?php the_title_attribute(); ?>"><?php the_title();?></a></span><br />
								<?php $excerpt = get_the_excerpt(); echo bf_string_limit_words($excerpt,15);?>
								</li>
								<?php endwhile; ?>
								</ul>
								<?php endif; ?>

								<?php wp_reset_query();?>
								
              <?php echo $after_widget; ?>
			 
        <?php
    }

    /** @see WP_Widget::update */
    function update($new_instance, $old_instance) {				
        return $new_instance;
    }

    /** @see WP_Widget::form */
    function form($instance) {
		$instance['title'] = (isset($instance['title']))? $instance['title'] : "";
		$instance['category'] = (isset($instance['category']))? $instance['category'] : "";
		$instance['showpost'] = (isset($instance['showpost']))? $instance['showpost'] : "";
		$instance['showdate'] = (isset($instance['showdate']))? $instance['showdate'] : "";
					
        $title = esc_attr($instance['title']);
		$category = esc_attr($instance['category']);
		$showpost = esc_attr($instance['showpost']);
		$showdate = esc_attr($instance['showdate']);
        ?>
            <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'bluelinerfoundation'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>
			
            <p><label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Category:', 'bluelinerfoundation'); ?> <input class="widefat" id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>" type="text" value="<?php echo $category; ?>" /></label></p>
			
            <p><label for="<?php echo $this->get_field_id('showpost'); ?>"><?php _e('Show Post:', 'bluelinerfoundation'); ?> <input class="widefat" id="<?php echo $this->get_field_id('showpost'); ?>" name="<?php echo $this->get_field_name('showpost'); ?>" type="text" value="<?php echo $showpost; ?>" /></label></p>
			
            <p><label for="<?php echo $this->get_field_id('showdate'); ?>"><?php _e('Show Date:', 'bluelinerfoundation'); ?> 
			
			<?php if($instance['showdate']){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                            <input type="checkbox" name="<?php echo $this->get_field_name('showdate'); ?>" id="<?php echo $this->get_field_id('showdate'); ?>" value="true" <?php echo $checked; ?> />
							
							
			
			</label></p>
        <?php 
    }

} // class  Widget
?>