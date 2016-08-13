<?php
/**
 * TC McCarthy's new relic
 * Description: Sets new relic appname to support monitoring of individual sites within WMPU as well as the WPMU as a rollup
 * @author TC McCarthy
 * @since July 31, 2016
 */


class tcNR{
	public function __construct(){
		global $wpdb;
		$this->db = $wpdb;
		add_action("init", array($this, "set_appname"));
	}

	public function set_appname(){
		if (extension_loaded('newrelic')) {
			$name = get_blog_details($this->db->blog_id, true);
			$name = preg_replace(array("/[^A-Za-z0-9\s]+/", "/039/"), array("", ""), html_entity_decode($name->blogname));
			$env = getenv("ENV");
			$appname = "Managed WP - {$env};{$name} - {$env}";
			newrelic_set_appname($appname);
		}
	}
}

$tcNR = new tcNR();