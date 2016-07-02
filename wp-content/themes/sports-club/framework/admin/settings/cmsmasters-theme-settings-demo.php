<?php 
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.0
 * 
 * Admin Panel Theme Settings Import/Export
 * Created by CMSMasters
 * 
 */


function cmsmasters_options_demo_tabs() {
	$tabs = array();
	
	
	$tabs['import'] = esc_attr__('Import', 'sports-club');
	$tabs['export'] = esc_attr__('Export', 'sports-club');
	
	
	return $tabs;
}


function cmsmasters_options_demo_sections() {
	$tab = cmsmasters_get_the_tab();
	
	
	switch ($tab) {
	case 'import':
		$sections = array();
		
		$sections['import_section'] = esc_html__('Theme Settings Import', 'sports-club');
		
		
		break;
	case 'export':
		$sections = array();
		
		$sections['export_section'] = esc_html__('Theme Settings Export', 'sports-club');
		
		
		break;
	}
	
	
	return $sections;
} 


function cmsmasters_options_demo_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsmasters_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'import':
		$options[] = array( 
			'section' => 'import_section', 
			'id' => CMSMASTERS_SHORTNAME . '_demo_import', 
			'title' => esc_html__('Theme Settings', 'sports-club'), 
			'desc' => esc_html__("Enter your theme settings data here and click 'Import' button", 'sports-club'), 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		
		break;
	case 'export':
		$options[] = array( 
			'section' => 'export_section', 
			'id' => CMSMASTERS_SHORTNAME . '_demo_export', 
			'title' => esc_html__('Theme Settings', 'sports-club'), 
			'desc' => esc_html__("Click here to export your theme settings data to the file", 'sports-club'), 
			'type' => 'button', 
			'std' => esc_attr__('Export Theme Settings', 'sports-club'), 
			'class' => 'cmsmasters-demo-export' 
		);
		
		
		break;
	}
	
	
	return $options;	
}

