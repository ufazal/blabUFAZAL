<?php
//https://pippinsplugins.com/adding-custom-meta-fields-to-taxonomies/
//https://en.bainternet.info/custom-taxonomies-extra-fields/
//add extra fields to custom taxonomy edit form callback function
function case_study_add_extra_tax_fields($tag) {
   //check for existing taxonomy meta for term ID
	?>
	<div class="form-field">
		<label for="term_meta[cs_tab_img]">Case Study Tab image</label>
		<input type="text" name="term_meta[cs_tab_img]" id="term_meta[cs_tab_img]" size="3" value=""><br />
        <span class="description"><?php _e('Tab image for Term: use full url with '); ?></span>
	</div>

	<div class="form-field">
		<label for="term_meta[cs_tab_hover_img]">Case Study Tab hover image</label>
		<input type="text" name="term_meta[cs_tab_hover_img]" id="term_meta[cs_tab_hover_img]" size="3" value=""><br />
        <span class="description"><?php _e('Tab hover image for Term: use full url with '); ?></span>
	</div>

	<?php
}
add_action( 'casestudy_cat_add_form_fields', 'case_study_add_extra_tax_fields', 10, 2);

function case_study_extra_edit_tax_fields($tag) {
   //check for existing taxonomy meta for term ID
    $t_id = $tag->term_id;
    $term_meta = get_option( "taxonomy_$t_id");
	?>
	<tr class="form-field">
		<th scope="row" valign="top"><label for="cat_Image_url"><?php _e('Case Study Tab image'); ?></label></th>
		<td>
		<input type="text" name="term_meta[cs_tab_img]" id="term_meta[cs_tab_img]" size="3" value="<?php echo $term_meta['cs_tab_img'] ? $term_meta['cs_tab_img'] : ''; ?>"><br />
        <span class="description"><?php _e('Tab image for Term: use full url with '); ?></span>
        </td>
	</tr>

	<tr class="form-field">
		<th scope="row" valign="top"><label for="cat_Image_url"><?php _e('Case Study Tab hover image'); ?></label></th>
		<td>
		<input type="text" name="term_meta[cs_tab_hover_img]" id="term_meta[cs_tab_hover_img]" size="3" value="<?php echo $term_meta['cs_tab_hover_img'] ? $term_meta['cs_tab_hover_img'] : ''; ?>"><br />
        <span class="description"><?php _e('Tab hover image for Term: use full url with '); ?></span>
        </td>
	</tr>

	<?php
}
add_action( 'casestudy_cat_edit_form_fields', 'case_study_extra_edit_tax_fields', 10, 2);

// save extra taxonomy fields callback function
function save_extra_cs_taxonomy_fields( $term_id ) {
    if ( isset( $_POST['term_meta'] ) ) {
        $t_id = $term_id;
        $term_meta = get_option( "taxonomy_$t_id");
        $cat_keys = array_keys($_POST['term_meta']);
            foreach ($cat_keys as $key){
            if (isset($_POST['term_meta'][$key])){
                $term_meta[$key] = $_POST['term_meta'][$key];
            }
        }
        //save the option array
        update_option( "taxonomy_$t_id", $term_meta );
    }
}

add_action( 'edited_casestudy_cat', 'save_extra_cs_taxonomy_fields', 10, 2 );  
add_action( 'create_casestudy_cat', 'save_extra_cs_taxonomy_fields', 10, 2 );

/**********************
* B-Lab Category
**********************/

function blab_add_extra_tax_fields($tag) {
   //check for existing taxonomy meta for term ID
  ?>
  <div class="form-field">
    <label for="term_meta[cs_tab_img]">B-Lab Tab image</label>
    <input type="text" name="term_meta[cs_tab_img]" id="term_meta[cs_tab_img]" size="3" value=""><br />
        <span class="description"><?php _e('Tab image for Term: use full url with '); ?></span>
  </div>

  <div class="form-field">
    <label for="term_meta[cs_tab_hover_img]">B-Lab Tab hover image</label>
    <input type="text" name="term_meta[cs_tab_hover_img]" id="term_meta[cs_tab_hover_img]" size="3" value=""><br />
        <span class="description"><?php _e('Tab hover image for Term: use full url with '); ?></span>
  </div>

  <?php
}
add_action( 'blab_cat_add_form_fields', 'blab_add_extra_tax_fields', 10, 2);

function blab_extra_edit_tax_fields($tag) {
   //check for existing taxonomy meta for term ID
    $t_id = $tag->term_id;
    $term_meta = get_option( "taxonomy_$t_id");
  ?>
  <tr class="form-field">
    <th scope="row" valign="top"><label for="cat_Image_url"><?php _e('B-Lab Tab image'); ?></label></th>
    <td>
    <input type="text" name="term_meta[cs_tab_img]" id="term_meta[cs_tab_img]" size="3" value="<?php echo $term_meta['cs_tab_img'] ? $term_meta['cs_tab_img'] : ''; ?>"><br />
        <span class="description"><?php _e('Tab image for Term: use full url with '); ?></span>
        </td>
  </tr>

  <tr class="form-field">
    <th scope="row" valign="top"><label for="cat_Image_url"><?php _e('B-Lab Tab hover image'); ?></label></th>
    <td>
    <input type="text" name="term_meta[cs_tab_hover_img]" id="term_meta[cs_tab_hover_img]" size="3" value="<?php echo $term_meta['cs_tab_hover_img'] ? $term_meta['cs_tab_hover_img'] : ''; ?>"><br />
        <span class="description"><?php _e('Tab hover image for Term: use full url with '); ?></span>
        </td>
  </tr>

  <?php
}
add_action( 'blab_cat_edit_form_fields', 'blab_extra_edit_tax_fields', 10, 2);

// save extra taxonomy fields callback function
function save_extra_blab_taxonomy_fields( $term_id ) {
    if ( isset( $_POST['term_meta'] ) ) {
        $t_id = $term_id;
        $term_meta = get_option( "taxonomy_$t_id");
        $cat_keys = array_keys($_POST['term_meta']);
            foreach ($cat_keys as $key){
            if (isset($_POST['term_meta'][$key])){
                $term_meta[$key] = $_POST['term_meta'][$key];
            }
        }
        //save the option array
        update_option( "taxonomy_$t_id", $term_meta );
    }
}

add_action( 'edited_blab_cat', 'save_extra_blab_taxonomy_fields', 10, 2 );  
add_action( 'create_blab_cat', 'save_extra_blab_taxonomy_fields', 10, 2 );