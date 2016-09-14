<?php 

class smg{

	public function __construct(){
		add_action("wp_enqueue_scripts", array($this, "enqueue_scripts"), 99);
	}

	public function enqueue_scripts(){
		wp_enqueue_style("smg", get_stylesheet_directory_uri() . "/style.css");
	}

}

new smg();