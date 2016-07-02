<?php
/**
 * Single Event Template for Widgets
 *
 * This template is used to render single events for both the calendar and advanced
 * list widgets, facilitating a common appearance for each as standard.
 *
 * You can override this template in your own theme by creating a file at
 * [your-theme]/tribe-events/widgets/modules/single-widget.php
 *
 * @package TribeEventsCalendarPro
 * 
 * @cmsmasters_package 	Sports Club
 * @cmsmasters_version 	1.0.0
 *
 */

 
?>
<div class="cmsmasters_event_date">
	<div class="cmsmasters_event_month"><?php echo tribe_get_start_date(null, false, 'F'); ?></div>
	<div class="cmsmasters_event_day"><?php echo tribe_get_start_date(null, false, 'd'); ?></div>
</div>
<div class="tribe-events-list-widget-content-wrap">
	<?php do_action( 'tribe_events_list_widget_before_the_event_title' ); ?>

	<h3 class="entry-title summary">
		<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" rel="bookmark"><?php the_title(); ?></a>
	</h3>

	<?php do_action( 'tribe_events_list_widget_after_the_event_title' ); ?>

	<?php do_action( 'tribe_events_list_widget_before_the_meta' ) ?>
	
	<div class="cmsmasters_widget_event_info">
		<div class="duration cmsmasters-icon-clock">
			<?php echo tribe_events_event_schedule_details(); ?>
		</div>
		<?php if ( isset( $cost ) && $cost && tribe_get_cost() != '' ) { ?>
			<div class="tribe-events-event-cost cmsmasters-icon-ticket">
				<?php echo tribe_get_cost( null, true ); ?>
			</div>
		<?php } ?>
	</div>
	
	<div class="vcard adr location cmsmasters_widget_event_venue_info_loc">
	<?php 
		if ( 
			( isset( $venue ) && $venue && tribe_get_venue() != '' ) || 
			( isset( $address ) && $address && tribe_get_address() != '' ) || 
			( isset( $city ) && $city && tribe_get_city() != '' ) || 
			( isset( $region ) && $region && tribe_get_region() != '' ) || 
			( isset( $zip ) && $zip && tribe_get_zip() != '' ) || 
			( isset( $country ) && $country && tribe_get_country() != '' ) 
		) {
	?>
		<div class="cmsmasters_widget_event_venue_info cmsmasters-icon-location">
			<?php if ( isset( $venue ) && $venue && tribe_get_venue() != '' ) { ?>
				<span class="fn org tribe-venue"><?php echo tribe_get_venue_link(); ?></span>
			<?php } ?>

			<?php if ( isset( $address ) && $address && tribe_get_address() != '' ) { ?>
				<span class="street-address"><?php echo tribe_get_address(); ?></span>
			<?php } ?>

			<?php if ( isset( $city ) && $city && tribe_get_city() != '' ) { ?>
				<span class="locality"><?php echo tribe_get_city(); ?></span>
			<?php } ?>

			<?php if ( isset( $region ) && $region && tribe_get_region() != '' ) { ?>
				<span class="region"><?php echo tribe_get_region(); ?></span>
			<?php	} ?>

			<?php if ( isset( $zip ) && $zip && tribe_get_zip() != '' ) { ?>
				<span class="postal-code"><?php echo tribe_get_zip(); ?></span>
			<?php } ?>

			<?php if ( isset( $country ) && $country && tribe_get_country() != '' ) { ?>
				<span class="country-name"><?php echo tribe_get_country(); ?></span>
			<?php } ?>
		</div>
	<?php 
		}
		
		
		if ( 
			( isset( $organizer ) && $organizer && tribe_get_organizer() != '' ) || 
			( isset( $phone ) && $phone && tribe_get_phone() != '' ) 
		) {
	?>
		<div class="cmsmasters_widget_event_venue_loc cmsmasters_theme_icon_person">
			<?php if ( isset( $organizer ) && $organizer && tribe_get_organizer() != '' ) { ?>
				<span class="tribe-organizer"><?php echo tribe_get_organizer_link(); ?></span>
			<?php } ?>

			<?php if ( isset( $phone ) && $phone && tribe_get_phone() != '' ) { ?>
				<span class="tel"><?php echo tribe_get_phone(); ?></span>
			<?php } ?>
		</div>
		<?php } ?>
	</div>
	
	<?php do_action( 'tribe_events_list_widget_after_the_meta' ) ?>
</div>

