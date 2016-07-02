<?php
/**
 * Plugin Name: Soliloquy - Dynamic Addon
 * Plugin URI:  http://soliloquywp.com
 * Description: Enables Dynamic sliders in Soliloquy.
 * Author:      Thomas Griffin
 * Author URI:  http://thomasgriffinmedia.com
 * Version:     2.1.6
 * Text Domain: soliloquy-dynamic
 * Domain Path: languages
 *
 * Soliloquy is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Soliloquy is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Soliloquy. If not, see <http://www.gnu.org/licenses/>.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define necessary addon constants.
define( 'SOLILOQUY_DYNAMIC_PLUGIN_NAME', 'Soliloquy - Dynamic Addon' );
define( 'SOLILOQUY_DYNAMIC_PLUGIN_VERSION', '2.1.6' );
define( 'SOLILOQUY_DYNAMIC_PLUGIN_SLUG', 'soliloquy-dynamic' );

// Register activation and uninstall hooks.
register_activation_hook( __FILE__, 'soliloquy_dynamic_activation_hook' );
/**
 * Fired when the plugin is activated.
 *
 * @since 1.0.0
 *
 * @global object $wpdb         The WordPress database object.
 * @param boolean $network_wide True if WPMU superadmin uses "Network Activate" action, false otherwise.
 */
function soliloquy_dynamic_activation_hook( $network_wide ) {

    // Bail if the main class does not exist.
    if ( ! class_exists( 'Soliloquy' ) ) {
        return;
    }

    $instance = Soliloquy::get_instance();
    global $wpdb;

    if ( is_multisite() && $network_wide ) {
        $site_list = $wpdb->get_results( "SELECT * FROM $wpdb->blogs ORDER BY blog_id" );
        foreach ( (array) $site_list as $site ) {
            switch_to_blog( $site->blog_id );

            // Generate the custom slider options holder for default dynamic sliders if it does not exist.
            $slider_found = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM " . $wpdb->posts . " WHERE post_name = '%s' AND post_type = '%s' LIMIT 1", 'soliloquy-dynamic-slider', 'soliloquy' ) );
            if ( ! $slider_found ) {
                $args = array(
                    'post_type'   => 'soliloquy',
                    'post_name'   => 'soliloquy-dynamic-slider',
                    'post_title'  => __( 'Soliloquy Dynamic Slider', 'soliloquy-dynamic' ),
                    'post_status' => 'publish'
                );
                $dynamic_id = wp_insert_post( $args );

                // If successful, update our option so that we can know which slider is dynamic.
                if ( $dynamic_id ) {
                    update_option( 'soliloquy_dynamic', $dynamic_id );

                    // Loop through the defaults and prepare them to be stored.
                    foreach ( Soliloquy_Common::get_instance()->get_config_defaults( $dynamic_id ) as $key => $default ) {
                        $fields['config'][$key] = $default;
                    }

                    // Update some default post meta fields.
                    $fields = array(
                        'id'     => $dynamic_id,
                        'config' => array(
                            'title'   => __( 'Soliloquy Dynamic Slider', 'soliloquy-dynamic' ),
                            'slug'    => 'soliloquy-dynamic-slider',
                            'classes' => array( 'soliloquy-dynamic-slider' ),
                            'type'    => 'dynamic'
                        ),
                        'slider' => array()
                    );

                    // Update the meta field.
                    update_post_meta( $dynamic_id, '_sol_slider_data', $fields );
                }
            }

            restore_current_blog();
        }
    } else {
        // Generate the custom slider options holder for default dynamic sliders if it does not exist.
        $slider_found = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM " . $wpdb->posts . " WHERE post_name = '%s' AND post_type = '%s' LIMIT 1", 'soliloquy-dynamic-slider', 'soliloquy' ) );
        if ( ! $slider_found ) {
            $args = array(
                'post_type'   => 'soliloquy',
                'post_name'   => 'soliloquy-dynamic-slider',
                'post_title'  => __( 'Soliloquy Dynamic Slider', 'soliloquy-dynamic' ),
                'post_status' => 'publish'
            );
            $dynamic_id = wp_insert_post( $args );

            // If successful, update our option so that we can know which slider is dynamic.
            if ( $dynamic_id ) {
                update_option( 'soliloquy_dynamic', $dynamic_id );

                // Loop through the defaults and prepare them to be stored.
                foreach ( Soliloquy_Common::get_instance()->get_config_defaults( $dynamic_id ) as $key => $default ) {
                    $fields['config'][$key] = $default;
                }

                // Update some default post meta fields.
                $fields = array(
                    'id'     => $dynamic_id,
                    'config' => array(
                        'title'   => __( 'Soliloquy Dynamic Slider', 'soliloquy-dynamic' ),
                        'slug'    => 'soliloquy-dynamic-slider',
                        'classes' => array( 'soliloquy-dynamic-slider' ),
                        'type'    => 'dynamic'
                    ),
                    'slider' => array()
                );

                // Update the meta field.
                update_post_meta( $dynamic_id, '_sol_slider_data', $fields );
            }
        }
    }

}

register_uninstall_hook( __FILE__, 'soliloquy_dynamic_uninstall_hook' );
/**
 * Fired when the plugin is uninstalled.
 *
 * @since 1.0.0
 *
 * @global object $wpdb The WordPress database object.
 */
function soliloquy_dynamic_uninstall_hook() {

    // Bail if the main class does not exist.
    if ( ! class_exists( 'Soliloquy' ) ) {
        return;
    }

    $instance = Soliloquy::get_instance();

    if ( is_multisite() ) {
        global $wpdb;
        $site_list = $wpdb->get_results( "SELECT * FROM $wpdb->blogs ORDER BY blog_id" );
        foreach ( (array) $site_list as $site ) {
            switch_to_blog( $site->blog_id );

            // Grab the dynamic slider ID and use that to delete the slider.
            $dynamic_id = get_option( 'soliloquy_dynamic' );
            if ( $dynamic_id ) {
                wp_delete_post( $dynamic_id, true );
            }

            // Delete the option.
            delete_option( 'soliloquy_dynamic' );

            restore_current_blog();
        }
    } else {
        // Grab the dynamic slider ID and use that to delete the slider.
        $dynamic_id = get_option( 'soliloquy_dynamic' );
        if ( $dynamic_id ) {
            wp_delete_post( $dynamic_id, true );
        }

        // Delete the option.
        delete_option( 'soliloquy_dynamic' );
    }

}

add_action( 'plugins_loaded', 'soliloquy_dynamic_plugins_loaded' );
/**
 * Ensures the full Soliloquy plugin is active before proceeding.
 *
 * @since 1.0.0
 *
 * @return null Return early if Soliloquy is not active.
 */
function soliloquy_dynamic_plugins_loaded() {

    // Bail if the main class does not exist.
    if ( ! class_exists( 'Soliloquy' ) ) {
        return;
    }

    // Display a notice if Soliloquy does not meet the proper version to run the addon.
    if ( version_compare( Soliloquy::get_instance()->version, '2.0.2', '<' ) ) {
        add_action( 'admin_notices', 'soliloquy_dynamic_version_notice' );
        return;
    };

    // Fire up the addon.
    add_action( 'soliloquy_init', 'soliloquy_dynamic_plugin_init' );

}

/**
 * Outputs a required version notice for the addon to work with Soliloquy.
 *
 * @since 1.0.0
 */
function soliloquy_dynamic_version_notice() {

    ?>
    <div class="error">
        <p><?php printf( __( 'The <strong>%s</strong> requires Soliloquy 2.0.2 or later to work. Please update Soliloquy to use this addon.', 'soliloquy-dynamic' ), SOLILOQUY_DYNAMIC_PLUGIN_NAME ); ?></p>
    </div>
    <?php

}

/**
 * Loads all of the addon hooks and filters.
 *
 * @since 1.0.0
 */
function soliloquy_dynamic_plugin_init() {

    // Add hooks and filters.
    add_action( 'soliloquy_updater', 'soliloquy_dynamic_updater' );
    add_filter( 'soliloquy_defaults', 'soliloquy_dynamic_defaults', 10, 2 );
    add_action( 'soliloquy_admin_css', 'soliloquy_dynamic_admin_css' );
    add_action( 'admin_head', 'soliloquy_dynamic_remove_cb' );
    add_filter( 'soliloquy_row_actions', 'soliloquy_dynamic_row_actions', 10, 2 );
    add_filter( 'soliloquy_slider_types', 'soliloquy_dynamic_type', 9999, 2 );
    add_action( 'soliloquy_display_dynamic', 'soliloquy_dynamic_settings' );
    add_filter( 'soliloquy_custom_slider_data', 'soliloquy_dynamic_parse_atts', 10, 3 );
    add_filter( 'soliloquy_pre_data', 'soliloquy_dynamic_data', 10, 2 );
    add_filter( 'post_gallery', 'soliloquy_dynamic_default_gallery', 9999, 2 );
    add_shortcode( 'soliloquy_dynamic', 'soliloquy_dynamic_shortcode' );

}

/**
 * Initializes the addon updater.
 *
 * @since 1.0.0
 *
 * @param string $key The user license key.
 */
function soliloquy_dynamic_updater( $key ) {

    $args = array(
        'plugin_name' => SOLILOQUY_DYNAMIC_PLUGIN_NAME,
        'plugin_slug' => SOLILOQUY_DYNAMIC_PLUGIN_SLUG,
        'plugin_path' => plugin_basename( __FILE__ ),
        'plugin_url'  => trailingslashit( WP_PLUGIN_URL ) . SOLILOQUY_DYNAMIC_PLUGIN_SLUG,
        'remote_url'  => 'http://soliloquywp.com/',
        'version'     => SOLILOQUY_DYNAMIC_PLUGIN_VERSION,
        'key'         => $key
    );
    $soliloquy_dynamic_updater = new Soliloquy_Updater( $args );

}

/**
 * Applies a default to the addon setting.
 *
 * @since 1.0.0
 *
 * @param array $defaults  Array of default config values.
 * @param int $post_id     The current post ID.
 * @return array $defaults Amended array of default config values.
 */
function soliloquy_dynamic_defaults( $defaults, $post_id ) {

    $dynamic_id = soliloquy_dynamic_get_id();
    if ( $dynamic_id && $dynamic_id == $post_id ) {
        $defaults['type'] = 'dynamic';
    }

    return $defaults;

}

/**
 * Outputs custom CSS to hide specific actions that are not allowed with
 * the dynamic slider settings holder.
 *
 * @since 1.0.0
 *
 * @global int $id      The current post ID.
 * @global object $post The current post object.
 */
function soliloquy_dynamic_admin_css() {

    global $id, $post;

    // Get the current post ID. If ajax, grab it from the $_POST variable.
    if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
        $post_id = absint( $_POST['post_id'] );
    } else {
        $post_id = isset( $post->ID ) ? $post->ID : (int) $id;
    }

    $dynamic_id = soliloquy_dynamic_get_id();
    if ( $dynamic_id && $dynamic_id == $post_id ) {
        ?>
        <style type="text/css">.edit-post-status, #delete-action { display: none; }</style>
        <?php
    }

}

/**
 * Removes the checkbox for allowing bulk actions on the dynamic slider.
 *
 * @since 1.0.0
 */
function soliloquy_dynamic_remove_cb() {

    if ( isset( get_current_screen()->post_type ) && 'soliloquy' == get_current_screen()->post_type ) {
        $dynamic_id = soliloquy_dynamic_get_id();
        ?>
        <script type="text/javascript">
            jQuery(document).ready(function($){
                $('#post-<?php echo $dynamic_id; ?> .check-column, #post-<?php echo $dynamic_id; ?> .column-shortcode, #post-<?php echo $dynamic_id; ?> .column-template, #post-<?php echo $dynamic_id; ?> .column-images').empty();
            });
        </script>
        <?php
    }

}

/**
 * Removes the ability to trash the dynamic slider.
 *
 * @since 1.0.0
 *
 * @param array $actions  Default row actions.
 * @param object $post    The current post object.
 * @return array $actions Amended row actions.
 */
function soliloquy_dynamic_row_actions( $actions, $post ) {

    if ( isset( get_current_screen()->post_type ) && 'soliloquy' == get_current_screen()->post_type ) {
        $dynamic_id = soliloquy_dynamic_get_id();
        if ( $dynamic_id && $dynamic_id == $post->ID ) {
            unset( $actions['trash'] );
        }
    }

    return $actions;

}

/**
 * If the Dynamic slider is shown, remove types from selection.
 *
 * @since 1.0.0
 *
 * @param array $types  Types of sliders to select.
 * @param object $post  The current post object.
 * @return array $types Amended types of sliders to select.
 */
function soliloquy_dynamic_type( $types, $post ) {

    $dynamic_id = soliloquy_dynamic_get_id();
    if ( $dynamic_id && $dynamic_id == $post->ID ) {
        $types = array(
            'dynamic' => __( 'Dynamic', 'soliloquy-dynamic' )
        );
    }

    return apply_filters( 'soliloquy_dynamic_slider_types', $types, $post, $dynamic_id );

}

/**
 * Callback for displaying the UI for dynamic options.
 *
 * @since 1.0.0
 *
 * @param object $post The current post object.
 */
function soliloquy_dynamic_settings( $post ) {

    $instance = Soliloquy_Metaboxes::get_instance();

    ?>
    <div id="soliloquy-dynamic">
        <p class="soliloquy-intro"><?php printf( __( 'This slider and its settings will be used as defaults for any dynamic slider you create on this site. Any of these settings can be overwritten on an individual slider basis via template tag arguments or shortcode parameters. <a href="%s" title="Click here for Dynamic Addon documentation." target="_blank">Click here for Dynamic Addon documentation.</a>', 'soliloquy-dynamic' ), 'http://soliloquywp.com/docs/dynamic-addon/' ); ?></p>
    </div>
    <?php

}

/**
 * Parses the Dynamic attributes and filters them into the data.
 *
 * @since 1.0.0
 *
 * @param bool $bool   Boolean (false) since no data is found yet.
 * @param array $atts  Array of shortcode attributes to parse.
 * @param object $post The current post object.
 * @return array $data Array of dynamic slider data.
 */
function soliloquy_dynamic_parse_atts( $bool, $atts, $post ) {

    // If the dynamic attribute is not set to true, do nothing.
    if ( empty( $atts['dynamic'] ) ) {
        return $bool;
    }

    // Now that we have a dynamic slider, prepare atts to be parsed with defaults.
    $dynamic_id = soliloquy_dynamic_get_id();
    $defaults   = get_post_meta( $dynamic_id, '_sol_slider_data', true );
    $data       = array();
    foreach ( (array) $atts as $key => $value ) {
        // Cast any 'true' or 'false' atts to a boolean value.
        if ( 'true' == $value ) {
            $atts[$key] = 1;
            $value      = 1;
        }

        if ( 'false' == $value ) {
            $atts[$key] = 0;
            $value      = 0;
        }

        // Parse and store the data.
        $data = soliloquy_dynamic_parse_attribute( $data, $key, $value );
    }

    // If the data is empty, return false.
    if ( empty( $data ) || empty( $defaults ) ) {
        return false;
    }

    // Merge in the defaults into the data.
    $config           = $defaults;
    $config['id']     = str_replace( '-', '_', $atts['dynamic'] ); // Replace dashes with underscores.
    $config_array     = $defaults['config'];
    $parsed_array     = wp_parse_args( $data, $defaults['config'] );
    $config['config'] = $parsed_array;

    // Parse the args and return the data.
    return apply_filters( 'soliloquy_dynamic_parsed_data', $config, $data, $defaults, $atts, $post );

}

/**
 * Parses the an individual attribute and merges into the data store. This is
 * mostly for backwards compatability with v1 of the Dynamic Addon.
 *
 * @since 1.0.0
 *
 * @param array $data   The data store for the parsed attributes.
 * @param string $key   The attribute key.
 * @param string $value The attribute value.
 * @return array $data  Amended data store.
 */
function soliloquy_dynamic_parse_attribute( $data, $key, $value ) {

    // Process each key/value pair accordingly for backwards compat.
    switch ( $key ) {
        case 'id' :
            $data['id']      = $value;
            $data['dynamic'] = $value;
            break;
        case 'dynamic' :
            $data['id']      = $value;
            $data['dynamic'] = $value;
            break;
        case 'crop' :
            $data['slider'] = $value;
            break;
        case 'theme' :
            $data['slider_theme'] = $value;
            break;
        case 'width' :
            $data['slider_width'] = $value;
            break;
        case 'height' :
            $data['slider_height'] = $value;
            break;
        case 'animate' :
            $data['auto'] = $value;
            break;
        case 'transition' :
            if ( 'slide-horizontal' == $value ) {
                $data['transition'] = 'horizontal';
            } else if ( 'slide-vertical' == $value ) {
                $data['transition'] = 'vertical';
            }
        case 'navigation' :
            $data['arrows'] = $value;
            break;
        case 'thumbnails_max' :
            $data['thumbnails_num'] = $value;
        default :
            $data[$key] = $value;
            break;
    }

    return $data;

}

/**
 * Filters the data to pull images from Dynamic for Dynamic sliders.
 *
 * @since 1.0.0
 *
 * @param array $data  Array of slider data.
 * @param int $id      The slider ID.
 * @return array $data Amended array of slider data.
 */
function soliloquy_dynamic_data( $data, $id ) {

    // Return early if not an Dynamic slider.
    $instance = Soliloquy_Shortcode::get_instance();
    if ( 'dynamic' !== $instance->get_config( 'type', $data ) ) {
        return $data;
    }

    // $id should be false, so we need to set it now.
    if ( ! $id ) {
        $id = $instance->get_config( 'dynamic', $data );
    }

    // Grab the Dynamic data.
    $dynamic = soliloquy_dynamic_get_data( $id, $data );
    if ( ! $dynamic ) {
        return $data;
    }

    // Insert the data into the slider data.
    $data = soliloquy_dynamic_insert_data( $data, $dynamic );

    // Return the modified data.
    return apply_filters( 'soliloquy_dynamic_data', $data, $id );

}

/**
 * Grabs the appropriate data from Dynamic.
 *
 * @since 1.0.0
 *
 * @param mixed $id   The current slider ID.
 * @param array $data Array of slider data.
 * @return array|bool Array of data on success, false on failure.
 */
function soliloquy_dynamic_get_data( $id, $data ) {

    // Determine type of data to retrieve based on ID given.
    $dynamic_data = false;

    if ( preg_match( '#^custom-#', $id ) ) {
        $dynamic_data = soliloquy_dynamic_get_custom_images( $id, $data );
    } else if ( preg_match( '#^nextgen-#', $id ) ) {
        $nextgen_id   = explode( '-', $id );
        $dynamic_data = soliloquy_dynamic_get_nextgen_images( $nextgen_id[1], $data );
    } else {
        $exclude      = ! empty( $data['config']['exclude'] ) ? $data['config']['exclude'] : false;
        $images       = soliloquy_dynamic_get_images_attached_to_post( $id, $exclude );
        $dynamic_data = soliloquy_dynamic_get_custom_images( $id, $data, implode( ',', (array) $images ) );
    }

    return apply_filters( 'soliloquy_dynamic_queried_data', $dynamic_data, $id, $data );

}

/**
 * Retrieves the image data for custom image sets.
 *
 * @since 1.0.0
 *
 * @param mixed $id           The current slider ID.
 * @param array $data         Array of slider data.
 * @param bool|array $images  Possibly an array of image ids to use.
 * @return array|bool         Array of data on success, false on failure.
 */
function soliloquy_dynamic_get_custom_images( $id, $data, $images = false ) {

    // Explode the image ids (if they are set) into an array and grab data for each.
    $instance    = Soliloquy_Shortcode::get_instance();
    $data_images = $instance->get_config( 'images', $data );
    if ( ! $data_images ) {
        if ( ! $images ) {
            return false;
        }
    } else {
        $images = $data_images;
    }

    $image_data = array();
    $images     = explode( ',', (string) $images );
    foreach ( (array) $images as $i => $image_id ) {
        $attachment                       = get_post( $image_id );
        $src                              = wp_get_attachment_image_src( $image_id, 'full' );
        $image_data[$image_id]['title']   = get_the_title( $image_id );
        $image_data[$image_id]['alt']     = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
        $image_data[$image_id]['src']     = ! empty( $src[0] ) ? $src[0] : '';
        $image_data[$image_id]['caption'] = ! empty( $attachment->post_excerpt ) ? $attachment->post_excerpt : '';

        // Set the link property based on $data variable.
        $link = $instance->get_config( 'link', $data );
        if ( $link ) {
            if ( 'file' == $link ) {
                $image_data[$image_id]['link'] = ! empty( $src[0] ) ? $src[0] : '';
            } else if ( 'attachment' == $link ) {
                $image_data[$image_id]['link'] = get_attachment_link( $image_id );
            } else {
                $image_data[$image_id]['link'] = '';
            }
        } else {
            $image_data[$image_id]['link'] = '';
        }
    }

    return apply_filters( 'soliloquy_dynamic_custom_image_data', $image_data, $id, $data );

}

/**
 * Retrieves the image data for NextGen gallery images.
 *
 * @since 1.0.0
 *
 * @param mixed $id           The current slider ID.
 * @param array $data         Array of slider data.
 * @return array|bool         Array of data on success, false on failure.
 */
function soliloquy_dynamic_get_nextgen_images( $id, $data ) {

    // Return false if the NextGen database class is not available.
    if ( ! class_exists( 'nggdb' ) ) {
        return false;
    }

    // Prepare the NextGen objects to be properly formatted for the slider output.
    $objects    = apply_filters( 'soliloquy_dynamic_get_nextgen_image_data', nggdb::get_gallery( $id ), $id );
    $instance   = Soliloquy_Shortcode::get_instance();
    $image_data = array();

    // If no objects are found, return false.
    if ( ! $objects ) {
        return false;
    }

    // Loop through the objects and prepare the data.
    foreach( (array) $objects as $i => $image ) {
        $image_data[$image->pid]['title']   = isset( $image->alttext ) ? strip_tags( esc_attr( $image->alttext ) ) : '';
        $image_data[$image->pid]['alt']     = isset( $image->alttext ) ? strip_tags( esc_attr( $image->alttext ) ) : '';
        $image_data[$image->pid]['src']     = isset( $image->imageURL ) ? esc_url( $image->imageURL ) : '';
        $image_data[$image->pid]['caption'] = isset( $image->description ) ? $image->description : '';

        // Set the link property based on $data variable.
        $link = $instance->get_config( 'link', $data );
        if ( $link ) {
            if ( 'file' == $link || 'attachment' == $link ) {
                $image_data[$image->pid]['link'] = isset( $image->imageURL ) ? esc_url( $image->imageURL ) : '';
            } else {
                $image_data[$image->pid]['link'] = '';
            }
        } else {
            $image_data[$image->pid]['link'] = '';
        }
    }

    return apply_filters( 'soliloquy_dynamic_nextgen_images', $image_data, $objects, $id, $data );

}

/**
 * Inserts the Dynamic data into the slider.
 *
 * @since 1.0.0
 *
 * @param array $data    Array of slider data.
 * @param array $dynamic Array of Dynamic image data arrays.
 * @return array $data   Amended array of slider data.
 */
function soliloquy_dynamic_insert_data( $data, $dynamic ) {

    // Empty out the current slider data.
    $data['slider'] = array();

    // Loop through and insert the Dynamic data.
    foreach ( $dynamic as $id => $image ) {
        // Prepare variables.
        $prep            = array();
        $prep['status']  = 'active';
        $prep['src']     = ! empty( $image['src'] ) ? esc_url( $image['src'] ) : '';
        $prep['title']   = ! empty( $image['caption'] ) ? esc_attr( $image['caption'] ) : '';
        $prep['alt']     = ! empty( $image['alt'] ) ? esc_attr( $image['alt'] ) : '';
        $prep['caption'] = ! empty( $image['caption'] ) ? $image['caption'] : '';
        $prep['link']    = ! empty( $image['link'] ) ? esc_url( $image['link'] ) : '';
        $prep['type']    = 'image';

        // Allow image to be filtered for each image.
        $prep = apply_filters( 'soliloquy_dynamic_image', $prep, $dynamic, $data );

        // Insert the image into the slider.
        $data['slider'][$id] = $prep;
    }

    // Return and allow filtering of final data.
    return apply_filters( 'soliloquy_dynamic_slider_data', $data, $dynamic );

}

/**
 * Retrieves the dynamic slider ID for holding dynamic settings.
 *
 * @since 1.0.0
 *
 * @return int The post ID for the dynamic slider settings.
 */
function soliloquy_dynamic_get_id() {

    return get_option( 'soliloquy_dynamic' );

}

/**
 * Allows the dynamic addon to override the default WordPress gallery shortcode.
 *
 * @since 1.0.0
 *
 * @global object $post The current post object.
 * @param string $html  The default gallery HTML.
 * @param array $atts   Array of shortcode attributes.
 * @return string $html Amended gallery HTML.
 */
function soliloquy_dynamic_default_gallery( $html, $atts ) {

    // If there is no Soliloquy attribute or we want to stop the slider output, return the default gallery output.
    if ( empty( $atts['soliloquy'] ) || apply_filters( 'soliloquy_dynamic_pre_gallery', false ) ) {
        return $html;
    }

    // Declare a static incremental to ensure unique IDs when multiple sliders are called.
    global $post;
    static $dynamic_i = 0;

    // Either grab custom images or images attached to the post.
    $images = false;
    if ( ! empty( $atts['ids'] ) ) {
        $images = $atts['ids'];
    } else {
        if ( empty( $post->ID ) ) {
            return $html;
        }

        $exclude = ! empty( $atts['exclude'] ) ? $atts['exclude'] : false;
        $images  = soliloquy_dynamic_get_images_attached_to_post( $post->ID, $exclude );
    }

    // If no images have been found, return the default HTML.
    if ( ! $images ) {
        return $html;
    }

    // Set the shortcode atts to be passed into shortcode regardless.
    $args           = array();
    $args['images'] = implode( ',', (array) $images );
    $args['link']   = ! empty( $atts['link'] ) ? $atts['link'] : 'none';

    // Check if the soliloquy_args attribute is set and parse the query string provided.
    if ( ! empty( $atts['soliloquy_args'] ) ) {
        wp_parse_str( html_entity_decode( $atts['soliloquy_args'] ), $parsed_args );
        $args = array_merge( $parsed_args, $args );
        $args = apply_filters( 'soliloquy_dynamic_gallery_args', $args, $atts, $dynamic_i );
    }

    // Prepare the args to be output into query string shortcode format for the shortcode.
    $output_args = '';
    foreach ( $args as $k => $v ) {
        $output_args .= $k . '=' . $v . ' ';
    }

    // Increment the static counter.
    $dynamic_i++;

    // Map to the new Soliloquy shortcode with the proper data structure.
    return do_shortcode( '[soliloquy dynamic="custom-gallery-' . $dynamic_i . '" ' . trim( $output_args ) . ']' );

}

/**
 * Retrieves images attached to a post.
 *
 * @since 1.0.0
 *
 * @param int $post_id   The post ID to target.
 * @param bool|string    Image ids to exclude from retrieving.
 * @param string $fields The fields to retrieve for the images.
 * @return bool|array    False if no images are found, otherwise array of image data.
 */
function soliloquy_dynamic_get_images_attached_to_post( $post_id, $exclude = false, $fields = 'ids' ) {

    // Prepare query args.
    $args = array(
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
        'post_type'      => 'attachment',
        'post_parent'    => $post_id,
        'post_mime_type' => 'image',
        'post_status'    => null,
        'posts_per_page' => -1,
        'fields'         => $fields
    );

    // Add images to exclude if necessary.
    if ( $exclude ) {
        $args['post__not_in'] = (array) explode( ',', $exclude );
    }

    // Allow args to be filtered and then query the images.
    $args   = apply_filters( 'soliloquy_dynamic_attached_image_args', $args, $post_id, $fields, $exclude );
    $images = get_posts( $args );

    // If no images are found, return false.
    if ( ! $images ) {
        return false;
    }

    return apply_filters( 'soliloquy_dynamic_attached_images', $images, $post_id, $exclude, $fields );

}

/**
 * Generates the "soliloquy_dynamic" shortcode for backwards compat.
 *
 * @since 1.0.0
 *
 * @param array $atts Array of shortcode attributes.
 */
function soliloquy_dynamic_shortcode( $atts ) {

    // If no ID, return false.
    if ( empty( $atts['id'] ) ) {
        return false;
    }

    // Pull out the ID and remove from atts.
    $id = $atts['id'];
    unset( $atts['id'] );

    // Prepare the args to be output into query string shortcode format for the shortcode.
    $output_args = '';
    foreach ( $atts as $k => $v ) {
        $output_args .= $k . '=' . $v . ' ';
    }

    // Map to the new Soliloquy shortcode with the proper data structure.
    return do_shortcode( '[soliloquy dynamic="' . $id . '" ' . trim( $output_args ) . ']' );

}

// Conditionally load the template tag.
if ( ! function_exists( 'soliloquy_dynamic' ) ) {
    /**
     * Template tag function for outputting dynamic sliders with Soliloquy.
     *
     * @since 1.0.0
     *
     * @param array $args  Args used for the slider init script.
     * @param bool $return Flag for returning or echoing the slider content.
     */
    function soliloquy_dynamic( $args = array(), $return = false ) {

        // If no ID, return false.
        if ( empty( $args['id'] ) ) {
            return false;
        }

        // Pull out the ID and remove from args.
        $id = $args['id'];
        unset( $args['id'] );

        // Map to v2 template tag method of using dynamic sliders.
        soliloquy( $id, 'dynamic', $args, $return );

    }
}