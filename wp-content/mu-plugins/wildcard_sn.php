<?php
/**
 * Handle wildcard URLs
 * Description: Makes adjustments for wildcard and catchall server names
 * @author TC McCarthy
 * @since July 31, 2016
 */

class wildcard_sn{
	public function __construct(){
		global $wpdb;
		$this->db = $wpdb;
		add_filter("wp_mail_from", array($this, 'set_mail_from'));
	}

	public function set_mail_from(){
		return "wordpress@{$_SERVER['HTTP_HOST']}";
	}
}

$tcNR = new wildcard_sn();