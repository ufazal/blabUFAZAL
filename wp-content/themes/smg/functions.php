<?php 

class smg{

	public function __construct(){
		add_action("wp_enqueue_scripts", array($this, "enqueue_scripts"), 99);
		add_filter("wp_head", array($this, "header_tags"), -1);
	}

	public function enqueue_scripts(){
		wp_enqueue_style("smg", get_stylesheet_directory_uri() . "/style.css");
	}

	public function header_tags(){
		echo '<meta charset="utf-8"> <!-- set the character set -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
				<!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
				<!--[if lt IE 9]>
				  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
				  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
				  <link href="/wp-content/themes/smg/css/app-ie8.css" type="text/stylesheet"/>
				<![endif]-->
			';
	}

}

new smg();