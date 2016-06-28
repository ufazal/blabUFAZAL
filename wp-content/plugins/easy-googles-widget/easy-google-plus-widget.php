<?php
/**
 * Plugin Name: Easy Google+ Widget
 * Plugin URI: http://wordpress.fabulator.cz/easy-googles-widget/
 * Description: Googles+ widget which provides you public post from your timeline.
 * Version: 0.2.7.2
 * Author: Michal Ozogán
 * Author URI: https://plus.google.com/109888980413832680050/about
 *
 */
function vypsatAutora($actor){
  global $profile;
  $return = "
    <div class='ozoGPAuthor'>
      <a href='" . $actor->url . "' title='" . $actor->displayName . "'>
        <img src='" . str_replace("?sz=50", "", $actor->image->url) . "?sz=" . $profile . "' width='" . $profile . "' alt='" . $actor->displayName . "'>
      </a>
	</div>";
  return $return;
}

function vypsatGoogle($obj, $comments = 0){
  global $profile;
  $space = 8;
  $profile = get_option('ozoGPProfile');
  $images = get_option('ozoGPImages');
  if($profile != 0 and $profile < 20) $profile = 20;
  if($comments == 1){
    $profile = round($profile / 2);
    if($profile != 0 and $profile < 20) $profile = 20;
  }

  $results = get_option('ozoGPResults');
  if($obj->items){
    foreach($obj->items as $aktivita){
      echo "<div class='ozoGPstatus'>";
      echo vypsatAutora($aktivita->actor);
      echo "<p style='margin-left: " . ($profile + $space) . "px;'>
			<strong>
              <a href='" . $aktivita->actor->url . "'>" . $aktivita->actor->displayName . "</a>:</strong>
                " . preg_replace('/(^|\s)#(\w+)/u', '\1<a href="https://plus.google.com/s/%23\2">#\2</a>', $aktivita->object->content);
      $album = 0;
      $album = 0;
      if($aktivita->object->attachments){
        foreach($aktivita->object->attachments as $attachments){
          if($attachments->objectType == 'photo-album'){
            $echox .= "<br /><strong>" . $attachments->displayName . "</strong>";
            $urlAlba = $attachments->url;
            $album = 1;
            break;
          }
        }
      }
      if($album == 1){
        $pocetObrazku = 0;
        $pocet = (count($aktivita->object->attachments)) - 2;
        $velikost = @floor($images / $pocet);
        if($velikost < 53){
          $pocet = floor($images / 53);
        }
        $velikost = floor($images / $pocet) - 3;
        $break = 0;
        $echo = 0;
        foreach($aktivita->object->attachments as $attachments){
          if($attachments->objectType == 'photo' and $pocetObrazku == 0){
            echo "<br />
									<a href='" . $urlAlba . "'><img class='photo' src='http://images0-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&gadget=a&resize_w=" . $images . "&url=" . urlencode($attachments->image->url) . "' alt='' style='max-width: " . $images . "px;'></a>
									<div style='clear: both'></div>";
            $pocetObrazku++;
          }
          elseif($attachments->objectType == 'photo' and $pocetObrazku <= $pocet){
            if($pocetObrazku == 1){
              echo "<div class='photos' style='margin-left:" . ($profile + $space) . "px;'>";
              $echo = 1;
            }
            $sizes = getimagesize($attachments->image->url);
            $height = 50;
            $width = round($sizes[0] / ($sizes[1] / 50));
            echo "<a href='" . $attachments->image->url . "'>
										<img class='photo' src='http://images0-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&gadget=a&resize_h=50&resize_w=" . $width . "&url=" . urlencode($attachments->image->url) . "' alt='' style='max-width: " . ($velikost) . "px;  margin-right: 2px; max-height: 50px'>
										</a>";
            $pocetObrazku++;
          }
          elseif($pocetObrazku > 1 and $echo == 1){
            echo "</div>";
            $break = 1;
            break;
          }
        }
        if($break == 0 and $echo == 1) echo "</div>";
        echo "<div style='clear: both'></div>";
      }
      else{
        if($aktivita->object->attachments){
          $pocetObrazku = 0;
          foreach($aktivita->object->attachments as $attachments){
            if($attachments->objectType == 'article') echo "<br /><a href='" . $attachments->url . "'>" . $attachments->displayName . "</a>";
            if($attachments->objectType == 'photo-album') $urlAlba = $attachments->url;
            else{
              if($attachments->image->url){
                if(($attachments->objectType == 'photo' || $attachments->objectType == 'article') and $pocetObrazku == 0){
                  echo "<br />
								<a href='" . $attachments->image->url . "'>
								<img class='left' src='http://images0-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&gadget=a&resize_w=" . $images . "&url=" . urlencode($attachments->image->url) . "' alt='' style='max-width: " . $images . "px'>
								<div style='clear: both'></div>";
                  $pocetObrazku++;
                }
                elseif($attachments->objectType == 'video') echo "<br /><a href='" . $attachments->url . "'><img class='left' src='http://images0-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&gadget=a&resize_w=" . $images . "&url=" . urlencode($attachments->image->url) . "' alt=''style='max-width: " . $images . "px'  ></a><div style='clear: both'></div>";
              }
            }
          }
        }
      }
      echo "<div class='hr' style='margin-left: " . ($profile + $space) . "px;'>";

      if($comments == 0){
        echo "<a href='" . $aktivita->object->url . "' name='" . $aktivita->object->replies->selfLink . "' class='left ozoGPcomments' id='ozoGP" . $aktivita->id . "'>" . __('Comments', 'default') . ": " . $aktivita->object->replies->totalItems . "</a>";
      }

      echo date(get_option('date_format'), strtotime($aktivita->published)) . " " . date(get_option('time_format'), strtotime($aktivita->published)) . "
				</div>
				</p>
				<div style='clear: both'></div>
				<br /><div class='ozoGP" . $aktivita->id . "' style='margin-left: " . (get_option('ozoGPProfile') + 8) . "px'></div>";
      echo "</div>";
    }
  }
}

class ozoGPWidget extends WP_Widget {

  function ozoGPWidget(){
    parent::WP_Widget('ozogpwidget', $name = __('Google+ widget', 'ozoGP'), array('description' => __('Googles+ widget which provides you public post from your timeline.', 'ozoGP')));
    $x = WP_PLUGIN_URL . '/' . str_replace(basename(__FILE__), "", plugin_basename(__FILE__));
    wp_register_style('ozoGPWidgetSheet', $x . 'ozoGPWidgetStyle.php');
    wp_enqueue_style('ozoGPWidgetSheet');

    wp_enqueue_script('ajax-script', $x . '/ozoGPWidgetScript.js', array('jquery'), 1.0); // jQuery will be included automatically
    wp_localize_script('ajax-script', 'ajax_object', array('ajaxurl' => admin_url('admin-ajax.php'))); // setting ajaxurl
    add_action('wp_ajax_ajax_action', 'ajax_action_stuff'); // ajax for logged in users
    add_action('wp_ajax_nopriv_ajax_action', 'ajax_action_stuff'); // ajax for not logged in users

    function ajax_action_stuff(){
      $json = @file_get_contents($_POST['link'] . "?key=" . get_option('ozoGPApi'));
      $obj = json_decode($json);
      vypsatGoogle($obj, 1);
      die(); // stop executing script
      exit;
    }

  }

  function widget($args, $instance){
    global $profile;
    global $images;
    global $results;
    extract($args);
    $title = apply_filters('widget_title', $instance['title']);
    $id = $instance['id'];
    $api = $instance['api'];
    $profile = $instance['profile'];
    $images = $instance['images'];
    $results = $instance['results'];
    if($profile == "") $profile = 30;
    if($images == "") $images = 999;
    if($results == "") $results = 5;

    echo $before_widget;
    if($title) echo $before_title . $title . $after_title;
	$url = ("https://www.googleapis.com/plus/v1/people/" . $id . "/activities/public?key=" . $api . "&maxResults=" . $results);
    if($api == "") $api = get_option('ozoGPApi');
    $cache = get_option('_ozoGP' . md5($url));
    if(time() > $cache['time'] + 60 * 20){
      $json = @file_get_contents($url);
      if($json) update_option('_ozoGP' . md5($url), array('time' => time(), 'content' => $json));
    }
    else{
      $json = $cache['content'];
    }
    if($json){
      $obj = json_decode($json);
      echo "<div id='ozoGPstatusWidget'>";
      vypsatGoogle($obj);
      echo "</div>";
    }
    ?>
    <?php
    echo $after_widget;
  }

  function update($new_instance, $old_instance){

    function nastavPromenou($option_name, $newvalue){
      if(get_option($option_name) != $newvalue){
        update_option($option_name, $newvalue);
      }
      else{
        $deprecated = ' ';
        $autoload = 'no';
        add_option($option_name, $newvalue, $deprecated, $autoload);
      }
    }

    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
    $instance['id'] = $new_instance['id'];
    $instance['api'] = $new_instance['api'];
    nastavPromenou('ozoGPApi', $instance['api']);
    $instance['profile'] = $new_instance['profile'];
    nastavPromenou('ozoGPProfile', $instance['profile']);
    $instance['images'] = $new_instance['images'];
    nastavPromenou('ozoGPImages', $instance['images']);
    $instance['results'] = $new_instance['results'];
    nastavPromenou('ozoGPResults', $instance['results']);
    ;
    return $instance;
  }

  function form($instance){
    $defaults = array('title' => __('Google plus', 'googleplus'), 'name' => __('John Doe', 'ozoGP'), 'sex' => 'male', 'show_sex' => true);
    $instance = wp_parse_args((array) $instance, $defaults);
    ?>
    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'default'); ?></label>
      <input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('id'); ?>"><?php _e('ID of your google profile: (from your URL for example <a href="https://plus.google.com/109888980413832680050">plus.google.com/109888980413832680050</a> => 109888980413832680050)', 'ozoGP'); ?></label>
      <input id="<?php echo $this->get_field_id('id'); ?>" name="<?php echo $this->get_field_name('id'); ?>" value="<?php echo $instance['id']; ?>" style="width:100%;" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('api'); ?>"><?php _e('Your API key: (<a href="https://code.google.com/apis/console/b/0/?pli=1">Create google app</a>)', 'ozoGP'); ?></label>
      <input id="<?php echo $this->get_field_id('api'); ?>" name="<?php echo $this->get_field_name('api'); ?>" value="<?php echo $instance['api']; ?>" style="width:100%;" />
    </p>		
    <p>
      <label for="<?php echo $this->get_field_id('profile'); ?>"><?php _e('Size of your profile image (in pixels):', 'ozoGP'); ?></label>
      <input id="<?php echo $this->get_field_id('profile'); ?>" name="<?php echo $this->get_field_name('profile'); ?>" value="<?php echo $instance['profile']; ?>" style="width:100%;" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('images'); ?>"><?php _e('Maximum size of images (in pixels):', 'ozoGP'); ?></label>
      <input id="<?php echo $this->get_field_id('images'); ?>" name="<?php echo $this->get_field_name('images'); ?>" value="<?php echo $instance['images']; ?>" style="width:100%;" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('results'); ?>"><?php _e('Max results:', 'ozoGP'); ?></label>
      <input id="<?php echo $this->get_field_id('results'); ?>" name="<?php echo $this->get_field_name('results'); ?>" value="<?php echo $instance['results']; ?>" style="width:100%;" />
    </p>
    <?php
  }

}

add_action('widgets_init', create_function('', 'return register_widget("ozoGPWidget");'));
?>