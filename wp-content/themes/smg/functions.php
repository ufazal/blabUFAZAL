<?php 

class smg{

	public function __construct(){
		add_action("wp_enqueue_scripts", array($this, "enqueue_scripts"), 99);
		add_action("wp_head", array($this, "header_tags"), -1);

		if(getenv("ENV") == "prod" || getenv("ENV") == "production"){
			add_action("wp_footer", array($this, "google_analytics"), 99);
		}
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

	public function google_analytics(){
		$siteID = "UA-29564057-1";

		$html = "
			<!-- Google Analytics -->
			<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', '{$siteID}', 'auto');
			ga('send', 'pageview');
			</script>
			<!-- End Google Analytics —->
		";

		echo $html;
	}

}

new smg();