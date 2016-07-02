/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.0
 * 
 * Visual Content Composer Schortcodes Extend
 * Created by CMSMasters
 * 
 */
 

/* 
// For Change Fields in Shortcodes

var sc_name_new_fields = {};


for (var id in cmsmastersShortcodes.sc_name.fields) {
	if (id === 'field_name') { // Delete Field
		delete cmsmastersShortcodes.sc_name.fields[id];
	} else if (id === 'field_name') { // Delete Field Attribute
		delete cmsmastersShortcodes.sc_name.fields[id]['field_attribute'];  
		
		
		sc_name_new_fields[id] = cmsmastersShortcodes.sc_name.fields[id];
	} else if (id === 'field_name') { // Add/Change Field Attribute
		cmsmastersShortcodes.sc_name.fields[id]['field_attribute'] = 'value';
		
		
		sc_name_new_fields[id] = cmsmastersShortcodes.sc_name.fields[id];
	} else if (id === 'field_name') { // Add Field (before the field as found, add new field)
		sc_name_new_fields['field_name'] = { 
			type : 		'rgba', 
			title : 	composer_shortcodes_extend.sc_name_field_custom_bg_color, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half' 
		};
		
		
		sc_name_new_fields[id] = cmsmastersShortcodes.sc_name.fields[id];
	} else { // Allways add this in the bottom
		sc_name_new_fields[id] = cmsmastersShortcodes.sc_name.fields[id];
	}
}


cmsmastersShortcodes.sc_name.fields = sc_name_new_fields; 
*/

 

 
// Portfolio Modified - Rollover

var cmsmasters_portfolio_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_portfolio.fields) {
	if (id === 'metadata') {
		delete cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['choises']['rollover'];  
	
		
		
		cmsmasters_portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else {
		cmsmasters_portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_portfolio.fields = cmsmasters_portfolio_new_fields;



/**
 * Theme Shortcodes
 */
 
var cmsmastersShortcodes_new_shortcode = {};


for (var id in cmsmastersShortcodes) {
	if (id === 'cmsmasters_sidebar') {
		
		/* Roll Titles */
		cmsmastersShortcodes_new_shortcode['cmsmasters_roll_titles'] = { 
			title : 	composer_shortcodes_extend.roll_titles_title, 
			icon : 		'admin-icon-roll-titles', 
			pair : 		false, 
			content : 	false, 
			visual : 	false, 
			multiple : 	false, 
			def : 		'', 
			fields : { 
				// Roll Titles Info
				rollscinfo : { 
					type : 		'input', 
					title : 	composer_shortcodes_extend.roll_titles_field_sc_info_title, 
					descr : 	composer_shortcodes_extend.roll_titles_field_sc_info_descr, 
					def : 		'', 
					required : 	false, 
					width : 	'half' 
				}, 
				// Navigation
				navigation : { 
					type : 		'checkbox', 
					title : 	composer_shortcodes_extend.roll_titles_field_navigation_title, 
					descr : 	composer_shortcodes_extend.roll_titles_field_navigation_descr, 
					def : 		'', 
					required : 	false, 
					width : 	'half', 
					choises : { 
								'1' : 	'Enable', 
					}, 
				}, 
				// Order By
				orderby : { 
					type : 		'select', 
					title : 	cmsmasters_shortcodes.orderby_title, 
					descr : 	composer_shortcodes_extend.roll_titles_field_orderby_descr, 
					def : 		'date', 
					required : 	true, 
					width : 	'half', 
					choises : { 
								'date' : 		cmsmasters_shortcodes.choice_date, 
								'name' : 		cmsmasters_shortcodes.name, 
								'id' : 			cmsmasters_shortcodes.choice_id, 
								'menu_order' : 	cmsmasters_shortcodes.choice_menu, 
								'popular' : 	cmsmasters_shortcodes.choice_popular, 
								'rand' : 		cmsmasters_shortcodes.choice_rand 
					} 
				}, 
				// Order
				order : { 
					type : 		'radio', 
					title : 	cmsmasters_shortcodes.order_title, 
					descr : 	cmsmasters_shortcodes.order_descr, 
					def : 		'DESC', 
					required : 	true, 
					width : 	'half', 
					choises : { 
								'ASC' : 	cmsmasters_shortcodes.choice_asc, 
								'DESC' : 	cmsmasters_shortcodes.choice_desc 
					} 
				}, 
				// Posts Categories
				blog_categories : { 
					type : 		'select_multiple', 
					title : 	composer_shortcodes_extend.roll_titles_field_postscateg_title, 
					descr : 	composer_shortcodes_extend.roll_titles_field_postscateg_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + composer_shortcodes_extend.roll_titles_field_postscateg_descr_note + "</span>", 
					def : 		'', 
					required : 	false, 
					width : 	'half', 
					choises : 	cmsmasters_composer_categories()
				}, 
				// Posts Number
				count : { 
					type : 		'input', 
					title : 	composer_shortcodes_extend.roll_titles_field_postsnumber_title, 
					descr : 	"<span>" + cmsmasters_shortcodes.note + ' ' + composer_shortcodes_extend.roll_titles_field_postsnumber_descr_note + "</span>", 
					def : 		'12', 
					required : 	false, 
					width : 	'number', 
					min : 		'1' 
				}, 
				// Pause Time
				pause : { 
					type : 		'input', 
					title : 	cmsmasters_shortcodes.pause_time, 
					descr : 	composer_shortcodes_extend.roll_titles_field_pausetime_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.autoslide_def + "</span>", 
					def : 		'5', 
					required : 	false, 
					width : 	'number', 
					min : 		'0' 
				}, 
				// CSS3 Animation
				animation : { 
					type : 		'select', 
					title : 	cmsmasters_shortcodes.animation_title, 
					descr : 	cmsmasters_shortcodes.animation_descr + " <br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.animation_descr_note + "</span>", 
					def : 		'', 
					required : 	false, 
					width : 	'half', 
					choises : 	get_animations() 
				}, 
				// Animation Delay
				animation_delay : { 
					type : 		'input', 
					title : 	cmsmasters_shortcodes.animation_delay_title, 
					descr : 	cmsmasters_shortcodes.animation_delay_descr + " <br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.animation_delay_descr_note + "</span>", 
					def : 		'0', 
					required : 	false, 
					width : 	'number', 
					min : 		'0', 
					step : 		'50' 
				}, 
				// Additional Classes
				classes : { 
					type : 		'input', 
					title : 	cmsmasters_shortcodes.classes_title, 
					descr : 	cmsmasters_shortcodes.classes_descr, 
					def : 		'', 
					required : 	false, 
					width : 	'half' 
				} 
			} 
		};
		
		
		/* TC Event Tickets  */
		if (cmsmasters_composer_tc() === 'true') {
			cmsmastersShortcodes_new_shortcode['cmsmasters_tc_event_tickets'] = { 
				title : 	composer_shortcodes_extend.tc_event_tickets_title, 
				icon : 		'admin-icon-price', 
				pair : 		false, 
				content : 	false, 
				visual : 	false, 
				multiple : 	false, 
				def : 		'', 
				fields : { 
					// Event
					event : { 
						type : 		'select', 
						title : 	composer_shortcodes_extend.tc_event_tickets_field_event_title, 
						descr : 	'', 
						def : 		'', 
						required : 	false, 
						width : 	'half', 
						choises : 	cmsmasters_composer_tc_events() 
					}, 
					// Link
					link : { 
						type : 		'input', 
						title : 	composer_shortcodes_extend.tc_event_tickets_field_link_title, 
						descr : 	'', 
						def : 		composer_shortcodes_extend.tc_event_tickets_field_link_def, 
						required : 	false, 
						width : 	'half' 
					}, 
					// Type
					type : { 
						type : 		'input', 
						title : 	composer_shortcodes_extend.tc_event_tickets_field_type_title, 
						descr : 	'', 
						def : 		composer_shortcodes_extend.tc_event_tickets_field_type_def, 
						required : 	false, 
						width : 	'half' 
					}, 
					// Price
					price : { 
						type : 		'input', 
						title : 	composer_shortcodes_extend.tc_event_tickets_field_price_title, 
						descr : 	'', 
						def : 		composer_shortcodes_extend.tc_event_tickets_field_price_def, 
						required : 	false, 
						width : 	'half' 
					}, 
					// Cart
					cart : { 
						type : 		'input', 
						title : 	composer_shortcodes_extend.tc_event_tickets_field_cart_title, 
						descr : 	'', 
						def : 		composer_shortcodes_extend.tc_event_tickets_field_cart_def, 
						required : 	false, 
						width : 	'half' 
					}, 
					// Quantity
					quantity : { 
						type : 		'input', 
						title : 	composer_shortcodes_extend.tc_event_tickets_field_quantity_title, 
						descr : 	'', 
						def : 		composer_shortcodes_extend.tc_event_tickets_field_quantity_def, 
						required : 	false, 
						width : 	'half' 
					}, 
					// Soldout
					soldout : { 
						type : 		'input', 
						title : 	composer_shortcodes_extend.tc_event_tickets_field_soldout_title, 
						descr : 	'', 
						def : 		composer_shortcodes_extend.tc_event_tickets_field_soldout_def, 
						required : 	false, 
						width : 	'half' 
					}, 
					// Show Quantity
					show_quantity : { 
						type : 		'select', 
						title : 	composer_shortcodes_extend.tc_event_tickets_field_show_quantity_title, 
						descr : 	'', 
						def : 		'false', 
						required : 	false, 
						width : 	'half', 
						choises : { 
									'false' : 	composer_shortcodes_extend.tc_event_tickets_field_show_quantity_no, 
									'true' : 	composer_shortcodes_extend.tc_event_tickets_field_show_quantity_yes 
						} 
					}, 
					// Link Type
					link_type : { 
						type : 		'select', 
						title : 	composer_shortcodes_extend.tc_event_tickets_field_link_type_title, 
						descr : 	composer_shortcodes_extend.tc_event_tickets_field_link_type_descr, 
						def : 		'cart', 
						required : 	false, 
						width : 	'half', 
						choises : { 
									'cart' : 	composer_shortcodes_extend.tc_event_tickets_field_link_type_cart, 
									'buynow' : 	composer_shortcodes_extend.tc_event_tickets_field_link_type_buynow 
						} 
					}, 
					// CSS3 Animation
					animation : { 
						type : 		'select', 
						title : 	cmsmasters_shortcodes.animation_title, 
						descr : 	cmsmasters_shortcodes.animation_descr + " <br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.animation_descr_note + "</span>", 
						def : 		'', 
						required : 	false, 
						width : 	'half', 
						choises : 	get_animations() 
					}, 
					// Animation Delay
					animation_delay : { 
						type : 		'input', 
						title : 	cmsmasters_shortcodes.animation_delay_title, 
						descr : 	cmsmasters_shortcodes.animation_delay_descr + " <br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.animation_delay_descr_note + "</span>", 
						def : 		'0', 
						required : 	false, 
						width : 	'number', 
						min : 		'0', 
						step : 		'50' 
					}, 
					// Additional Classes
					classes : { 
						type : 		'input', 
						title : 	cmsmasters_shortcodes.classes_title, 
						descr : 	cmsmasters_shortcodes.classes_descr, 
						def : 		'', 
						required : 	false, 
						width : 	'half' 
					} 
				} 
			};
		}
		
		
		cmsmastersShortcodes_new_shortcode[id] = cmsmastersShortcodes[id];
	} else {
		cmsmastersShortcodes_new_shortcode[id] = cmsmastersShortcodes[id];
	}
}


cmsmastersShortcodes = cmsmastersShortcodes_new_shortcode;
