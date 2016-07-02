<?php 
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.0
 * 
 * Admin Panel Colors Options
 * Created by CMSMasters
 * 
 */


function cmsmasters_options_color_tabs() {
	$tabs = array();
	
	
	foreach (cmsmasters_all_color_schemes_list() as $key => $value) {
		$tabs[$key] = $value;
	}
	
	
	return $tabs;
}



function cmsmasters_options_color_sections() {
	$tab = cmsmasters_get_the_tab();
	
	
	$schemes = cmsmasters_all_color_schemes_list();
	
	
	$sections = array();
	
	
	$sections[$tab . '_section'] = $schemes[$tab] . ' ' . esc_attr__('Color Scheme Options', 'sports-club');
	
	
	return $sections;
} 



function cmsmasters_options_color_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsmasters_get_the_tab();
	}
	
	
	$defaults = cmsmasters_color_schemes_defaults();
	
	
	$options = array();
	
	
	if ($tab == 'header' || $tab == 'header_bottom') { // Header & Header Bottom
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_color', 
			'title' => esc_html__('Text Font Color', 'sports-club'), 
			'desc' => esc_html__('Font color for header text', 'sports-club'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['color'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_link', 
			'title' => esc_html__('Primary Font Color', 'sports-club'), 
			'desc' => esc_html__('Font color for header headings, links, etc', 'sports-club'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_hover', 
			'title' => esc_html__('Rollover Font Color', 'sports-club'), 
			'desc' => esc_html__('Font color for header links rollovers, etc', 'sports-club'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_subtitle', 
			'title' => esc_html__('Subtitle Font Color', 'sports-club'), 
			'desc' => esc_html__('Font color for navigation subtitle, etc', 'sports-club'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['subtitle'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_bg', 
			'title' => esc_html__('Background Color', 'sports-club'), 
			'desc' => esc_html__('Header block background color', 'sports-club'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_bg_scroll', 
			'title' => esc_html__('Background Color on Scroll', 'sports-club'), 
			'desc' => esc_html__('Header block background color on scroll', 'sports-club'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['bg_scroll'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_hover_bg', 
			'title' => esc_html__('Rollover Background Color', 'sports-club'), 
			'desc' => esc_html__('Background color for main navigation top level links rollovers and some other elements', 'sports-club'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['hover_bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_border', 
			'title' => esc_html__('Border Color', 'sports-club'), 
			'desc' => esc_html__('Color for borders in header block', 'sports-club'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['border'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_link', 
			'title' => esc_html__('Dropdown Links Color', 'sports-club'), 
			'desc' => esc_html__('Links color for header main navigation dropdown', 'sports-club'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_hover', 
			'title' => esc_html__('Dropdown Rollover Font Color', 'sports-club'), 
			'desc' => esc_html__('Font color for header links rollovers in main navigation dropdown, etc', 'sports-club'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_subtitle', 
			'title' => esc_html__('Dropdown Subtitle Font Color', 'sports-club'), 
			'desc' => esc_html__('Font color for navigation dropdown subtitle, etc', 'sports-club'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_subtitle'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_bg', 
			'title' => esc_html__('Dropdown Background Color', 'sports-club'), 
			'desc' => esc_html__('Header block background color for main navigation dropdown', 'sports-club'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_hover_bg', 
			'title' => esc_html__('Dropdown Rollover Background Color', 'sports-club'), 
			'desc' => esc_html__('Background color for main navigation dropdown links rollovers and some other elements', 'sports-club'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_hover_bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_border', 
			'title' => esc_html__('Dropdown Border Color', 'sports-club'), 
			'desc' => esc_html__('Color for borders for main navigation dropdown in header block ', 'sports-club'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_border'] 
		);
	} elseif ($tab == 'header_top') { // Header Top
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_color', 
			'title' => esc_html__('Content Font Color', 'sports-club'), 
			'desc' => esc_html__('Font color for header top main content, headings, links, etc', 'sports-club'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['color'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_link', 
			'title' => esc_html__('Primary Font Color', 'sports-club'), 
			'desc' => esc_html__('Font color for header top headings, links, etc', 'sports-club'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_hover', 
			'title' => esc_html__('Rollover Font Color', 'sports-club'), 
			'desc' => esc_html__('Font color for header top links rollovers, etc', 'sports-club'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_bg', 
			'title' => esc_html__('Background Color', 'sports-club'), 
			'desc' => esc_html__('Header top block background color', 'sports-club'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_border', 
			'title' => esc_html__('Border Color', 'sports-club'), 
			'desc' => esc_html__('Color for borders in header top block', 'sports-club'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['border'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_link', 
			'title' => esc_html__('Dropdown Links Color', 'sports-club'), 
			'desc' => esc_html__('Links color for header top main navigation dropdown', 'sports-club'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_hover', 
			'title' => esc_html__('Dropdown Rollover Font Color', 'sports-club'), 
			'desc' => esc_html__('Font color for header top links rollovers in main navigation dropdown, etc', 'sports-club'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_bg', 
			'title' => esc_html__('Dropdown Background Color', 'sports-club'), 
			'desc' => esc_html__('Header top block background color for main navigation dropdown', 'sports-club'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_dropdown_border', 
			'title' => esc_html__('Dropdown Border Color', 'sports-club'), 
			'desc' => esc_html__('Color for borders for main navigation dropdown in header top block ', 'sports-club'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_border'] 
		);
	} else { // Other
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_color', 
			'title' => esc_html__('Main Content Font Color', 'sports-club'), 
			'desc' => esc_html__('Font color for main content', 'sports-club'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['color'] : $defaults['default']['color'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_link', 
			'title' => esc_html__('Primary Color', 'sports-club'), 
			'desc' => esc_html__('First color for links and some other elements', 'sports-club'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['link'] : $defaults['default']['link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_hover', 
			'title' => esc_html__('Highlight Color', 'sports-club'), 
			'desc' => esc_html__('Color for links rollovers, etc', 'sports-club'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['hover'] : $defaults['default']['hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_heading', 
			'title' => esc_html__('Headings Color', 'sports-club'), 
			'desc' => esc_html__('Color for headings and some other elements', 'sports-club'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['heading'] : $defaults['default']['heading'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_bg', 
			'title' => esc_html__('Main Background Color', 'sports-club'), 
			'desc' => esc_html__('Main background color for some elements', 'sports-club'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['bg'] : $defaults['default']['bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_alternate', 
			'title' => esc_html__('Alternate Background Color', 'sports-club'), 
			'desc' => esc_html__('Alternate background color for some elements', 'sports-club'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['alternate'] : $defaults['default']['alternate'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_border', 
			'title' => esc_html__('Borders Color', 'sports-club'), 
			'desc' => esc_html__('Color for borders', 'sports-club'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['border'] : $defaults['default']['border'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMASTERS_SHORTNAME . '_' . $tab . '_custom', 
			'title' => esc_html__('Custom Color', 'sports-club'), 
			'desc' => esc_html__('Color for some custom elements', 'sports-club'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['custom'] : $defaults['default']['custom'] 
		);
	}
	
	
	return $options;	
}

