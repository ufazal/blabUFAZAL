<tr>
    <td>
        <label for='<?php echo esc_attr($display_type_name); ?>_image_dimensions'>
            <?php esc_html_e($dimensions_label); ?>
        </label>
    </td>
    <td>
        <label for='<?php echo esc_attr($display_type_name); ?>_width'>w</label>
        <input type='number'
               id='<?php echo esc_attr($display_type_name); ?>_width'
               name='<?php echo esc_attr($display_type_name); ?>[width]'
               class='nextgen_settings_field_width_and_height'
               placeholder='<?php _e('Width'); ?>'
               min='1'
               value='<?php echo esc_attr($width); ?>'/> /
        <input type='number'
               id='<?php echo esc_attr($display_type_name); ?>_height'
               name='<?php echo esc_attr($display_type_name); ?>[height]'
               class='nextgen_settings_field_width_and_height'
               placeholder='<?php _e('Height'); ?>'
               min='1'
               value='<?php echo esc_attr($height); ?>'/>
        <label for='<?php echo esc_attr($display_type_name); ?>_height'>h</label>
    </td>
</tr>
