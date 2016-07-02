<?php  ?><?php

add_action('init', 'portfolio_register');
add_action('init', 'team_register'); 
 
function portfolio_register() {
/* 
* Labels Used for custom post type
* name – this is the (probably plural) name for our new post type 
* singular_name – how you’d refer to this in the singular (such as ‘Add new ****’)
* and the rest used seem to be good for defaults 
*/

	$labels = array(
		'name' => _x('My Portfolio', 'post type general name'),
		'singular_name' => _x('Portfolio Item', 'post type singular name'),
		'add_new' => _x('Add New', 'portfolio item'),
		'add_new_item' => __('Add New Portfolio Item'),
		'edit_item' => __('Edit Portfolio Item'),
		'new_item' => __('New Portfolio Item'),
		'view_item' => __('View Portfolio Item'),
		'search_items' => __('Search Portfolio'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
/* 
* arguments for label ie: what wordpress behaviors this custom page can do
* info can be found at http://codex.wordpress.org/Function_Reference/register_post_type
* below explains what i added for this custom portfolio page uses
* public – should they be shown in the admin UI
* show_ui – should we display an admin panel for this custom post type
* menu_icon – a custom icon for the admin panel
* capability_type - WordPress will treat this as a ‘post’ for read, edit, and delete capabilities
* hierarchical – is it hierarchical, like pages
* rewrite – rewrites permalinks using the slug ‘portfolio’
* supports – which items do we want to display on the add/edit post page
 */
 $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/adminPortfolio.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'menu_position' => null,
		'page-attributes',
		'supports' => array('title','editor','thumbnail','excerpt','page-attributes'),
		     'has_archive' => true // Will use the post type slug, ie. example
        //'has_archive' => 'my-example-archive' // Explicitly setting the archive slug
	  ); 
 
	register_post_type( 'portfolio' , $args );
} 

/*
begin team funtion
*/

function team_register() {
/* 
* Labels Used for custom post type
* name – this is the (probably plural) name for our new post type 
* singular_name – how you’d refer to this in the singular (such as ‘Add new ****’)
* and the rest used seem to be good for defaults 
*/

	$labels = array(
		'name' => _x('Our Team', 'post type general name'),
		'singular_name' => _x('Team Item', 'post type singular name'),
		'add_new' => _x('Add New', 'team item'),
		'add_new_item' => __('Add New Team Item'),
		'edit_item' => __('Edit Team Item'),
		'new_item' => __('New Team Item'),
		'view_item' => __('View Team Item'),
		'search_items' => __('Search Team'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
/* 
* arguments for label ie: what wordpress behaviors this custom page can do
* info can be found at http://codex.wordpress.org/Function_Reference/register_post_type
* below explains what i added for this custom portfolio page uses
* public – should they be shown in the admin UI
* show_ui – should we display an admin panel for this custom post type
* menu_icon – a custom icon for the admin panel
* capability_type - WordPress will treat this as a ‘post’ for read, edit, and delete capabilities
* hierarchical – is it hierarchical, like pages
* rewrite – rewrites permalinks using the slug ‘portfolio’
* supports – which items do we want to display on the add/edit post page
 */
 $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/adminTeam.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'menu_position' => null,
		'page-attributes',
		'show_in_nav_menus' => true,
		 'has_archive' => true, // Will use the post type slug, ie. example
		'supports' => array('title','editor','thumbnail','excerpt','page-attributes')
	  ); 
 
	register_post_type( 'team' , $args );
} 

/*
register a taxonomy. ie: create categories for this new portfolio content type, and create locations category for team pages

*/

register_taxonomy("services", array("portfolio"), array("hierarchical" => true, "label" => "Portfolio Services", "singular_label" => "service", "rewrite" => true));
register_taxonomy("locations", array("team"), array("hierarchical" => true, "label" => "Locations", "singular_label" => "Location", "rewrite" => true));



/*adding custom data fields to the add/edit post page*/

add_action("admin_init", "admin_init");
 
function admin_init(){
	/*adding custom data fields to the add/edit Portfolio */
  add_meta_box("year_completed-meta", "Year Completed", "year_completed", "portfolio", "side", "low");
  add_meta_box("clients_meta", "Client Informtion", "clients_meta", "portfolio", "normal", "high");
  add_meta_box("clients_images_meta", "Client Images", "clients_images_meta", "portfolio", "normal", "high");
/*adding custom data fields to the add/edit Team  */
  add_meta_box("team-meta", "Team Informtion", "team_meta", "team", "normal", "low");
}
 
 
 
/*portfolio meta info*/ 
function year_completed(){
  global $post;
  $custom = get_post_custom($post->ID);
  $year_completed = $custom["year_completed"][0];
  ?>

<label>Year:</label>
<input name="year_completed" value="<?php echo $year_completed; ?>" />
<?php
}
 
function clients_meta() {
   global $post;
  $custom = get_post_custom($post->ID);
  $companyname = $custom["companyname"][0];
  $clientlink = $custom["clientlink"][0];
    $clientdescription = $custom["clientdescription"][0];
  $clientquote = $custom["clientquote"][0];
  $clientname = $custom["clientname"][0];
  ?>
<p>
  <label>Company Name:</label>
  <br />
  <textarea cols="50" rows="1" name="companyname"><?php echo $companyname; ?></textarea>
</p>
<p>
  <label>Company Short Description: <small>(for use on index page rollovers)</small></label>
   <br />
  <textarea cols="50" rows="3" name="clientdescription"><?php echo $clientdescription; ?></textarea>
</p>
<p>
  <label>Visit URL:</label>
  <small>optional- be sure to use full http:// uri's</small> <br />
  <textarea cols="50" rows="1" name="clientlink"><?php echo $clientlink; ?></textarea>
</p>
<p>
  <label>Client Quote: <small>(optional)</small></label>
   <br />
  <textarea cols="50" rows="4" name="clientquote"><?php echo $clientquote; ?></textarea>
</p>
<p>
  <label>Client Name: <small>(to accompany quote above,optional)</small></label>
  <br />
  <textarea cols="50" rows="1" name="clientname"><?php echo $clientname; ?></textarea>
</p>
<?php
}

function clients_images_meta() {
  global $post;
  $custom = get_post_custom($post->ID);
  $clientindexthumb = $custom["clientindexthumb"][0];
  $clientpromothumb = $custom["clientpromothumb"][0];
  ?>
<p>
  <label>Client Image:</label>
  <small>used on portfolio index page</small><br />
  <textarea cols="50" rows="1" name="clientindexthumb"><?php echo $clientindexthumb; ?></textarea>
</p>
 <p><img src="<?php echo $clientindexthumb; ?>" /></p>
<p>
  <label>Client Promo Image:</label>
  <small>not implemented yet (will be used for sidebar/other portfolio rotators</small> <br />
  <textarea cols="50" rows="1" name="clientpromothumb"><?php echo $clientpromothumb; ?></textarea>
</p>
<?php
}

/* team meta info */
function team_meta() {
  global $post;
  $custom = get_post_custom($post->ID);
  $teamTitle = $custom["teamTitle"][0];
  $teamlocal = $custom["teamlocal"][0];
  $teamPicture = $custom["teamPicture"][0];
  $tedlink = $custom["tedlink"][0];
  $personaltwitterlink = $custom["personaltwitterlink"][0];
  $bluelinertwitterlink = $custom["bluelinertwitterlink"][0];
  ?>
  <h2>Required Basics</h2>
<p><label>Title:</label><br />
  <textarea cols="60" rows="1" name="teamTitle"><?php echo $teamTitle; ?></textarea></p>
  <p><label>Photo: (maximum width of 167px)</label><br />
  <textarea cols="60" rows="1" name="teamPicture"><?php echo $teamPicture; ?></textarea></p>
  <p><img src="<?php echo $teamPicture; ?>" /></p>
  <h2>Optional Info Bits</h2>
  <b>Local:</b>
  <p><label>city/state etc.. (still need to set country location on the right sidebar)</label><br />
  <textarea cols="60" rows="1" name="teamlocal"><?php echo $teamlocal ?></textarea></p>
  <b>Social Networks</b>
  <p><label>TED Link: <small>optional- be sure to use full http:// uri's</small> </label><br />
  <textarea cols="60" rows="1" name="tedlink"><?php echo $tedlink; ?></textarea></p>
   <p><label>Personal Twitter Link: <small>optional- be sure to use full http:// uri's</small> </label><br />
  <textarea cols="60" rows="1" name="personaltwitterlink"><?php echo $personaltwitterlink; ?></textarea></p>
   <p><label>Bluelinerny Twitter Link: <small>optional- be sure to use full http:// uri's</small>  </label><br />
  <textarea cols="60" rows="1" name="bluelinertwitterlink"><?php echo $bluelinertwitterlink; ?></textarea></p>
  <?php
}	

add_action('save_post', 'save_details');
function save_details(){
  global $post;
   if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
    return $post->ID;

	// FOR PORTFOLIO
  update_post_meta($post->ID, "year_completed", $_POST["year_completed"]);
  update_post_meta($post->ID, "companyname", $_POST["companyname"]);
  update_post_meta($post->ID, "clientlink", $_POST["clientlink"]);
  update_post_meta($post->ID, "clientdescription", $_POST["clientdescription"]);
  
  update_post_meta($post->ID, "clientquote", $_POST["clientquote"]);
  update_post_meta($post->ID, "clientname", $_POST["clientname"]);
  
  update_post_meta($post->ID, "clientindexthumb", $_POST["clientindexthumb"]);
  update_post_meta($post->ID, "clientpromothumb", $_POST["clientpromothumb"]);
  
	  // FOR TEAM
  update_post_meta($post->ID, "teamTitle", $_POST["teamTitle"]);
  update_post_meta($post->ID, "teamlocal", $_POST["teamlocal"]);
  update_post_meta($post->ID, "teamPicture", $_POST["teamPicture"]);
  update_post_meta($post->ID, "tedlink", $_POST["tedlink"]);
  update_post_meta($post->ID, "personaltwitterlink", $_POST["personaltwitterlink"]);
  update_post_meta($post->ID, "bluelinertwitterlink", $_POST["bluelinertwitterlink"]);
}


// activate built in thumb support
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'post','page','portfolio' ) ); // Add it for posts

set_post_thumbnail_size( 100, 50, true ); // 50 pixels wide by 50 pixels tall, hard crop mode




?>
