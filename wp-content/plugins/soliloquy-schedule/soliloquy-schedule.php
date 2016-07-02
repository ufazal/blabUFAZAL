<?php
/**
 * Plugin Name: Soliloquy - Schedule Addon
 * Plugin URI:  http://soliloquywp.com
 * Description: Enables scheduling support for Soliloquy sliders.
 * Author:      Thomas Griffin
 * Author URI:  http://thomasgriffinmedia.com
 * Version:     2.0.1
 * Text Domain: soliloquy-schedule
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
define( 'SOLILOQUY_SCHEDULE_PLUGIN_NAME', 'Soliloquy - Schedule Addon' );
define( 'SOLILOQUY_SCHEDULE_PLUGIN_VERSION', '2.0.1' );
define( 'SOLILOQUY_SCHEDULE_PLUGIN_SLUG', 'soliloquy-schedule' );

add_action( 'plugins_loaded', 'soliloquy_schedule_plugins_loaded' );
/**
 * Ensures the full Soliloquy plugin is active before proceeding.
 *
 * @since 1.0.0
 *
 * @return null Return early if Soliloquy is not active.
 */
function soliloquy_schedule_plugins_loaded() {

    // Bail if the main class does not exist.
    if ( ! class_exists( 'Soliloquy' ) ) {
        return;
    }

    // Fire up the addon.
    add_action( 'soliloquy_init', 'soliloquy_schedule_plugin_init' );

}

/**
 * Loads all of the addon hooks and filters.
 *
 * @since 1.0.0
 */
function soliloquy_schedule_plugin_init() {

    add_action( 'soliloquy_updater', 'soliloquy_schedule_updater' );
    add_action( 'soliloquy_metabox_styles', 'soliloquy_schedule_styles' );
    add_action( 'soliloquy_metabox_scripts', 'soliloquy_schedule_scripts' );
    add_filter( 'soliloquy_defaults', 'soliloquy_schedule_defaults', 10, 2 );
    add_filter( 'soliloquy_meta_defaults', 'soliloquy_schedule_meta_defaults', 10, 3 );
    add_filter( 'soliloquy_tab_nav', 'soliloquy_schedule_tab_nav' );
    add_action( 'soliloquy_tab_schedule', 'soliloquy_schedule_settings' );
    add_action( 'soliloquy_after_image_meta_settings', 'soliloquy_schedule_meta', 10, 3 );
    add_action( 'soliloquy_after_video_meta_settings', 'soliloquy_schedule_meta', 10, 3 );
    add_action( 'soliloquy_after_html_meta_settings', 'soliloquy_schedule_meta', 10, 3 );
    add_filter( 'soliloquy_save_settings', 'soliloquy_schedule_save', 10, 2 );
    add_filter( 'soliloquy_ajax_save_meta', 'soliloquy_schedule_save_meta', 10, 4 );
    add_filter( 'soliloquy_pre_data', 'soliloquy_schedule_data', 10, 2 );

}

/**
 * Initializes the addon updater.
 *
 * @since 1.0.0
 *
 * @param string $key The user license key.
 */
function soliloquy_schedule_updater( $key ) {

    $args = array(
        'plugin_name' => SOLILOQUY_SCHEDULE_PLUGIN_NAME,
        'plugin_slug' => SOLILOQUY_SCHEDULE_PLUGIN_SLUG,
        'plugin_path' => plugin_basename( __FILE__ ),
        'plugin_url'  => trailingslashit( WP_PLUGIN_URL ) . SOLILOQUY_SCHEDULE_PLUGIN_SLUG,
        'remote_url'  => 'http://soliloquywp.com/',
        'version'     => SOLILOQUY_SCHEDULE_PLUGIN_VERSION,
        'key'         => $key
    );
    $soliloquy_schedule_updater = new Soliloquy_Updater( $args );

}

/**
 * Registers and enqueues schedule styles.
 *
 * @since 1.0.0
 */
function soliloquy_schedule_styles() {

    $suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG || defined( 'WP_DEBUG' ) && WP_DEBUG ? '.css' : '.min.css';
    wp_register_style( SOLILOQUY_SCHEDULE_PLUGIN_SLUG . '-style', plugins_url( 'css/schedule' . $suffix, __FILE__ ), array(), SOLILOQUY_SCHEDULE_PLUGIN_VERSION );
    wp_enqueue_style( SOLILOQUY_SCHEDULE_PLUGIN_SLUG . '-style' );

}

/**
 * Registers and enqueues schedule scripts.
 *
 * @since 1.0.0
 */
function soliloquy_schedule_scripts() {

    $suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG || defined( 'WP_DEBUG' ) && WP_DEBUG ? '.js' : '.min.js';
    wp_register_script( SOLILOQUY_SCHEDULE_PLUGIN_SLUG . '-jquery-ui', plugins_url( 'js/jquery.soliloquy-jquery-ui' . $suffix, __FILE__ ), array( 'jquery', ), SOLILOQUY_SCHEDULE_PLUGIN_VERSION );
    wp_register_script( SOLILOQUY_SCHEDULE_PLUGIN_SLUG . '-datepicker', plugins_url( 'js/jquery.ui-timepicker-addon' . $suffix, __FILE__ ), array( 'jquery', SOLILOQUY_SCHEDULE_PLUGIN_SLUG . '-jquery-ui', ), SOLILOQUY_SCHEDULE_PLUGIN_VERSION );
    wp_register_script( SOLILOQUY_SCHEDULE_PLUGIN_SLUG . '-script', plugins_url( 'js/jquery.schedule' . $suffix, __FILE__ ), array( 'jquery', SOLILOQUY_SCHEDULE_PLUGIN_SLUG . '-datepicker' ), SOLILOQUY_SCHEDULE_PLUGIN_VERSION );

    wp_enqueue_script( SOLILOQUY_SCHEDULE_PLUGIN_SLUG . '-script' );
    $args = array(
        'date_format' => get_option( 'date_format' ),
        'time_format' => get_option( 'time_format' ),
    );
    wp_localize_script( SOLILOQUY_SCHEDULE_PLUGIN_SLUG . '-script', 'solSched', $args );

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
function soliloquy_schedule_defaults( $defaults, $post_id ) {

    // Schedule addon defaults.
    $defaults['schedule']       = 0;
    $defaults['schedule_start'] = '';
    $defaults['schedule_end']   = '';
    return $defaults;

}

/**
 * Applies a default to the addon meta settings.
 *
 * @since 1.0.0
 *
 * @param array $defaults  Array of default config values.
 * @param int $post_id     The current post ID.
 * @param int $attach_id   The current attachment ID.
 * @return array $defaults Amended array of default config values.
 */
function soliloquy_schedule_meta_defaults( $defaults, $post_id, $attach_id ) {

    // Schedule addon meta defaults.
    $defaults['schedule_meta']       = 0;
    $defaults['schedule_meta_start'] = '';
    $defaults['schedule_meta_end']   = '';
    return $defaults;

}

/**
 * Filters in a new tab for the addon.
 *
 * @since 1.0.0
 *
 * @param array $tabs  Array of default tab values.
 * @return array $tabs Amended array of default tab values.
 */
function soliloquy_schedule_tab_nav( $tabs ) {

    $tabs['schedule'] = __( 'Schedule', 'soliloquy-schedule' );
    return $tabs;

}

/**
 * Callback for displaying the UI for setting schedule options.
 *
 * @since 1.0.0
 *
 * @param object $post The current post object.
 */
function soliloquy_schedule_settings( $post ) {

    $instance = Soliloquy_Metaboxes::get_instance();
    ?>
    <div id="soliloquy-schedule">
        <p class="soliloquy-intro"><?php _e( 'The settings below adjust the Schedule settings for the slider.', 'soliloquy-schedule' ); ?></p>
        <table class="form-table">
            <tbody>
                <tr id="soliloquy-config-schedule-box">
                    <th scope="row">
                        <label for="soliloquy-config-schedule"><?php _e( 'Enable Scheduling?', 'soliloquy-schedule' ); ?></label>
                    </th>
                    <td>
                        <input id="soliloquy-config-schedule" type="checkbox" name="_soliloquy[schedule]" value="<?php echo $instance->get_config( 'schedule', $instance->get_config_default( 'schedule' ) ); ?>" <?php checked( $instance->get_config( 'schedule', $instance->get_config_default( 'schedule' ) ), 1 ); ?> />
                        <span class="description"><?php _e( 'Enables or disables scheduling for the slider.', 'soliloquy-schedule' ); ?></span>
                    </td>
                </tr>
                <tr id="soliloquy-config-schedule-start-box">
                    <th scope="row">
                        <label for="soliloquy-config-schedule-start"><?php _e( 'Start Date', 'soliloquy-schedule' ); ?></label>
                    </th>
                    <td>
                        <input id="soliloquy-config-schedule-start" class="soliloquy-date" type="text" name="_soliloquy[schedule_start]" value="<?php echo $instance->get_config( 'schedule_start', $instance->get_config_default( 'schedule_start' ) ); ?>" />
                        <p class="description"><?php _e( 'Sets the start date for the slider.', 'soliloquy-schedule' ); ?></p>
                    </td>
                </tr>
                <tr id="soliloquy-config-schedule-end-box">
                    <th scope="row">
                        <label for="soliloquy-config-schedule-end"><?php _e( 'End Date', 'soliloquy-schedule' ); ?></label>
                    </th>
                    <td>
                        <input id="soliloquy-config-schedule-end" class="soliloquy-date" type="text" name="_soliloquy[schedule_end]" value="<?php echo $instance->get_config( 'schedule_end', $instance->get_config_default( 'schedule_end' ) ); ?>" />
                        <p class="description"><?php _e( 'Sets the end date for the slider.', 'soliloquy-schedule' ); ?></p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php

}

/**
 * Outputs the schedule meta fields.
 *
 * @since 1.0.0
 *
 * @param int $attach_id The current attachment ID.
 * @param array $data    Array of attachment data.
 * @param int $post_id   The current post ID.
 */
function soliloquy_schedule_meta( $attach_id, $data, $post_id ) {

    $instance = Soliloquy_Metaboxes::get_instance();

    // Backwards compatibility support for the free Soliloquy schedule addon.
    $image_start = get_post_meta( $post_id, '_soliloquy_image_begin', true );
    $image_end   = get_post_meta( $post_id, '_soliloquy_image_end', true );
    $enable      = false;
    if ( '' != $image_start || '' != $image_end ) {
        $enable  = true;
    }

    ?>
    <tr id="soliloquy-schedule-enable-box-<?php echo $attach_id; ?>" valign="middle">
        <th scope="row"><label for="soliloquy-schedule-enable-<?php echo $attach_id; ?>"><?php _e( 'Schedule Slide?', 'soliloquy-schedule' ); ?></label></th>
        <td>
            <input id="soliloquy-schedule-enable-<?php echo $attach_id; ?>" class="soliloquy-schedule-enable" type="checkbox" name="_soliloquy[schedule_meta]" data-soliloquy-meta="schedule_meta" value="<?php echo ( $enable ? $enable : $instance->get_meta( 'schedule_meta', $attach_id, $instance->get_meta_default( 'schedule_meta', $attach_id ) ) ); ?>"<?php checked( ( $enable ? $enable : $instance->get_meta( 'schedule_meta', $attach_id, $instance->get_meta_default( 'schedule_meta', $attach_id ) ) ), 1 ); ?> />
            <span class="description"><?php _e( 'Enables or disables slide scheduling.', 'soliloquy-schedule' ); ?></span>
        </td>
    </tr>
    <tr id="soliloquy-schedule-start-box-<?php echo $attach_id; ?>" valign="middle">
        <th scope="row"><label for="soliloquy-schedule-start-<?php echo $attach_id; ?>"><?php _e( 'Start Date', 'soliloquy-schedule' ); ?></label></th>
        <td>
            <input id="soliloquy-schedule-start-<?php echo $attach_id; ?>" class="soliloquy-schedule-start soliloquy-date soliloquy-time" type="text" name="_soliloquy[schedule_meta_start]" data-soliloquy-meta="schedule_meta_start" value="<?php echo ( $image_start ? $image_start : $instance->get_meta( 'schedule_meta_start', $attach_id, $instance->get_meta_default( 'schedule_meta_start', $attach_id ) ) ); ?>"<?php checked( ( $image_start ? $image_start : $instance->get_meta( 'schedule_meta_start', $attach_id, $instance->get_meta_default( 'schedule_meta_start', $attach_id ) ) ), 1 ); ?> />
            <p class="description"><?php _e( 'Sets the start date for the slide.', 'soliloquy-schedule' ); ?></p>
        </td>
    </tr>
    <tr id="soliloquy-schedule-end-box-<?php echo $attach_id; ?>" valign="middle">
        <th scope="row"><label for="soliloquy-schedule-end-<?php echo $attach_id; ?>"><?php _e( 'End Date', 'soliloquy-schedule' ); ?></label></th>
        <td>
            <input id="soliloquy-schedule-end-<?php echo $attach_id; ?>" class="soliloquy-schedule-end soliloquy-date soliloquy-time" type="text" name="_soliloquy[schedule_meta_end]" data-soliloquy-meta="schedule_meta_end" value="<?php echo ( $image_end ? $image_end : $instance->get_meta( 'schedule_meta_end', $attach_id, $instance->get_meta_default( 'schedule_meta_end', $attach_id ) ) ); ?>"<?php checked( ( $image_end ? $image_end : $instance->get_meta( 'schedule_meta_end', $attach_id, $instance->get_meta_default( 'schedule_meta_end', $attach_id ) ) ), 1 ); ?> />
            <p class="description"><?php _e( 'Sets the end date for the slide.', 'soliloquy-schedule' ); ?></p>
        </td>
    </tr>
    <?php

}

/**
 * Saves the addon setting.
 *
 * @since 1.0.0
 *
 * @param array $settings  Array of settings to be saved.
 * @param int $post_id     The current post ID.
 * @return array $settings Amended array of settings to be saved.
 */
function soliloquy_schedule_save( $settings, $post_id ) {

    $settings['config']['schedule']       = isset( $_POST['_soliloquy']['schedule'] ) ? 1 : 0;
    $settings['config']['schedule_start'] = esc_attr( $_POST['_soliloquy']['schedule_start'] );
    $settings['config']['schedule_end']   = esc_attr( $_POST['_soliloquy']['schedule_end'] );
    return $settings;

}

/**
 * Saves the addon meta settings.
 *
 * @since 1.0.0
 *
 * @param array $settings  Array of settings to be saved.
 * @param array $meta      Array of slide meta to use for saving.
 * @param int $attach_id   The current attachment ID.
 * @param int $post_id     The current post ID.
 * @return array $settings Amended array of settings to be saved.
 */
function soliloquy_schedule_save_meta( $settings, $meta, $attach_id, $post_id ) {

    $settings['slider'][$attach_id]['schedule_meta']       = isset( $meta['schedule_meta'] ) && $meta['schedule_meta'] ? 1 : 0;
    $settings['slider'][$attach_id]['schedule_meta_start'] = isset( $meta['schedule_meta_start'] ) && $meta['schedule_meta_start'] ? esc_attr( $meta['schedule_meta_start'] ) : '';
    $settings['slider'][$attach_id]['schedule_meta_end']   = isset( $meta['schedule_meta_end'] ) && $meta['schedule_meta_end'] ? esc_attr( $meta['schedule_meta_end'] ) : '';
    return $settings;

}

/**
 * Removes a slider if it is scheduled and not during the proper time window.
 *
 * @since 1.0.0
 *
 * @param array $data      Array of slider data.
 * @param mixed $slider_id The current slider ID.
 * @return array $data     Amended array of slider data.
 */
function soliloquy_schedule_data( $data, $slider_id ) {

    // Time variables.
    $instance   = Soliloquy_Shortcode::get_instance();
    $offset     = soliloquy_schedule_timezone_offset( soliloquy_schedule_timezone_string(), true );
    $schedule   = $instance->get_config( 'schedule', $data );
    $begin_date = strtotime( $instance->get_config( 'schedule_start', $data ) );
    $end_date   = strtotime( $instance->get_config( 'schedule_end', $data ) );

    // Check to see if a slider is scheduled. If it is and it is not the correct time, return the data.
    if ( $schedule ) {
        if ( ( '' != $begin_date && $begin_date > time() + $offset ) || ( '' != $end_date && $end_date < time() + $offset ) ) {
            return false;
        }
    }

    // Now check to see if a slide is scheduled. If it is and is not the right time, remove it from display.
    foreach ( (array) $data['slider'] as $id => $slide ) {
        $meta_sched = isset( $slide['schedule_meta'] ) ? $slide['schedule_meta'] : 0;
        $start_date = isset( $slide['schedule_meta_start'] ) ? strtotime( $slide['schedule_meta_start'] ) : '';
        $end_date   = isset( $slide['schedule_meta_end'] ) ? strtotime( $slide['schedule_meta_end'] ) : '';

        if ( $meta_sched ) {
            if ( ( '' != $start_date && $start_date > time() + $offset ) || ( '' != $end_date && $end_date < time() + $offset ) ) {
                unset( $data['slider'][$id] );
            }
        }
    }

    return apply_filters( 'soliloquy_schedule_data', $data, $slider_id );

}

/**
 * Utility method that returns a timezone string representing the default timezone for the site.
 *
 * Roughly copied from WordPress, as get_option('timezone_string') will return
 * an empty string if no value has beens set on the options page.
 * A timezone string is required by the wp_timezone_choice() used by the
 * select_timezone field.
 *
 * @since 1.0.0
 *
 * @return string Properly formatted timezone string.
 */
function soliloquy_schedule_timezone_string() {

    $current_offset = get_option( 'gmt_offset' );
    $tzstring       = get_option( 'timezone_string' );

    // Create a UTC+- zone if no timezone string exists.
    if ( empty( $tzstring ) ) {
        if ( 0 == $current_offset ) {
            $tzstring = 'UTC+0';
        } elseif ( $current_offset < 0 ) {
            $tzstring = 'UTC' . $current_offset;
        } else {
            $tzstring = 'UTC+' . $current_offset;
        }
    }

    return $tzstring;

}

/**
 * Utility method that returns time string offset by timezone.
 *
 * @since 1.0.0
 *
 * @param  string $tzstring Time string.
 * @return string           Offset time string.
 */
function soliloquy_schedule_timezone_offset( $tzstring ) {

    if ( ! empty( $tzstring ) && is_string( $tzstring ) ) {
        if ( substr( $tzstring, 0, 3 ) === 'UTC' ) {
            $tzstring = str_replace( array( ':15', ':30', ':45' ), array( '.25', '.5', '.75' ), $tzstring );
            return intval( floatval( substr( $tzstring, 3 ) ) * HOUR_IN_SECONDS );
        }

        $date_time_zone_selected = new DateTimeZone( $tzstring );
        $tz_offset = timezone_offset_get( $date_time_zone_selected, date_create() );

        return $tz_offset;
    }

    return 0;

}