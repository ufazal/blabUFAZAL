<?php 

class anagnost {

	public function __construct(){
		add_shortcode("schema", array($this, "schema_shortcode"));
	}

	public function schema_shortcode($atts, $content){
		return "Hello, world!";
	}
}

$anagnost = new anagnost();