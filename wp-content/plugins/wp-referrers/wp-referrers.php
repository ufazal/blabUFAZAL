<?php  ?><?php

//echo "<div style='display:none'>REFERRER ". print_r($_SERVER) ."</div>";

/*

Plugin Name: wp-referrers

Description: This plugin collects the referral data, searched keyword, last visited and all visited URL of http://www.bluelinerny.com for Blueliner sales wizard

Author: Blueliner Marketing Agency

Version: 1.01

Author URI: http://www.bluelinerny.com/

*/



$wp_referrers = $wpdb->prefix . 'referrers';

$wp_referrers_keywords = $wpdb->prefix . 'referrers_keywords';

$wp_referrers_search_engines = $wpdb->prefix . 'referrers_search_engines';



register_activation_hook( __FILE__, 'create_tables');

add_action('get_header', 'log_referrer');

add_action('admin_menu', 'add_admin_menu');

add_action('wp_head', 'time_referrer');





function create_tables() {

	global $wpdb, $wp_referrers, $wp_referrers_keywords, $wp_referrers_search_engines;



	$sql1  = " CREATE TABLE IF NOT EXISTS ".$wpdb->prefix."referrers (";

	$sql1 .= "   `id` int(10) unsigned NOT NULL auto_increment,";

	$sql1 .= "   `url` varchar(255) NOT NULL,";

	$sql1 .= "   `referrer` varchar(255) NOT NULL,";

	$sql1 .= "   `search_engine` int(10) unsigned NOT NULL default '0',";

	$sql1 .= "   `keywords` int(10) unsigned NOT NULL default '0',";

	$sql1 .= "   `last_time` datetime NOT NULL,";

	$sql1 .= "   `create_time` datetime NOT NULL,";

	$sql1 .= "   `hits` int(10) unsigned NOT NULL,";

	$sql1 .= "   PRIMARY KEY  (`id`)";

	$sql1 .= " ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";



	$sql2  = " CREATE TABLE IF NOT EXISTS ".$wpdb->prefix."referrers_keywords (";

	$sql2 .= "   `id` int(10) unsigned NOT NULL auto_increment,";

	$sql2 .= "   `keywords` varchar(255) NOT NULL,";

	$sql2 .= "   `last_time` datetime NOT NULL,";

	$sql2 .= "   `create_time` datetime NOT NULL,";

	$sql2 .= "   `hits` int(10) unsigned NOT NULL,";

	$sql2 .= "   PRIMARY KEY  (`id`)";

	$sql2 .= " ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";



	$sql3  = " CREATE TABLE IF NOT EXISTS ".$wpdb->prefix."referrers_search_engines (";

	$sql3 .= "   `id` int(10) unsigned NOT NULL auto_increment,";

	$sql3 .= "   `display_name` varchar(255) NOT NULL,";

	$sql3 .= "   `name` varchar(20) NOT NULL,";

	$sql3 .= "   `var_name` varchar(20) NOT NULL,";

	$sql3 .= "   `url` varchar(255) NOT NULL,";

	$sql3 .= "   PRIMARY KEY  (`id`)";

	$sql3 .= " ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";

	

	// Make sure our tables are in the database, if not, create them

	$wpdb->query($sql1);

	$wpdb->query($sql2);

	$wpdb->query($sql3);



	$qryresult = $wpdb->get_row("SELECT COUNT(*) AS total FROM $wp_referrers_search_engines")	;

	if ($qryresult->total == 0) {

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(1, 'Google (google.com, google.fr, google.com.hk, etc.)', 'google', 'q', 'http://www.google.com');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(2, 'Yahoo! (yahoo.com, it.yahoo.com, hk.yahoo.com)', 'yahoo', 'p', 'http://www.yahoo.com');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(3, 'AOL', 'aol', 'q', 'http://www.aol.com');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(4, 'Ask.com', 'ask.com', 'q', 'http://www.ask.com');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(5, 'Reference.com', 'reference.com', 'q', 'http://www.reference.com');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(6, 'alot.com', 'alot.com', 'q', 'http://www.alot.com');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(7, 'Babylon.com', 'babylon.com', 'q', 'http://www.babylon.com');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(8, 'BT.com', 'bt.com', 'p', 'http://www.bt.com');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(9, 'comcast.net', 'comcast.net', 'q', 'http://www.comcast.net');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(10, 'conduit.com', 'conduit.com', 'q', 'http://www.');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(11, 'daum.net', 'daum.net', 'q', 'http://www.daum.net');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(12, 'freecause.com', 'freecause.com', 'p', 'http://www.freecause.com');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(13, 'hiyo.com', 'hiyo.com', 'q', 'http://www.hiyo.com');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(14, 'ICQ', 'icq.com', 'q', 'http://www.icq.com');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(15, 'incredimail.com', 'incredimail.com', 'q', 'http://www.incredimail.com');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(16, 'Netscape', 'netscape.com', 'query', 'http://www.netscape.com');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(17, 'live.com', 'live.com', 'q', 'http://www.live.com');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(18, 'MSN', 'msn', 'q', 'http://www.msn.com');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(19, 'mywebsearch.com', 'mywebsearch.com', 'searchfor', 'http://www.mywebsearch.com');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(20, 'naver.com', 'naver.com', 'query', 'http://www.naver.com');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(21, 'sky.com', 'sky.com', 'term', 'http://www.sky.com');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(22, 'rr.com', 'rr.com', 'qs', 'http://www.');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(23, 'sweetim.com', 'sweetim.com', 'q', 'http://www.sweetim.com');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(24, 'winamp.com', 'winamp.com', 'query', 'http://www.winamp.com');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(25, 'Altavista', 'altavista.com', 'q', 'http://www.altavista.com');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(26, 'baidu.com', 'baidu.com', 'wd', 'http://www.baidu.com');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(27, 'Bing', 'bing.com', 'q', 'http://www.bing.com');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(28, 'optimum.net', 'optimum.net', 'q', 'http://www.optimum.net');");

		$wpdb->query("INSERT INTO `wp_referrers_search_engines` VALUES(29, 'Yandex (yandex.ru, yandex.kz, yandex.ua)', 'yandex', 'text', 'http://www.yandex.ru');");

	}

}





function log_referrer() {

	global $wpdb, $wp_referrers, $wp_referrers_keywords, $wp_referrers_search_engines;

	

	$url = getenv('REQUEST_URI');

	$query = getenv('QUERY_STRING');

//	$referrer = getenv('HTTP_REFERER');	
	$referrer = $_SERVER['HTTP_REFERER'];	

	$wpurl = get_bloginfo('wpurl');

	$contact_url = $wpurl . '/contact.php';

	$contact_uri = '/contact.php';

	//echo substr($referrer, 0, strlen($wpurl)) .'!='. $wpurl;

	//echo $referrer;

	//ereg("^http://([^/]+)/(.*)", $referrer, $vars1);

	//print_r($vars1);



	//log only if $referrer is not from a local page

	if (substr($referrer, 0, strlen($wpurl)) != $wpurl) {

		// log only if $referrer looks like a URL

		if (ereg("^http://([^/]+)/(.*)", $referrer, $vars)) {
			$domain = $vars[1];

			// see if it's a search engine
			list($search_engine, $keywords) = is_search_engine($referrer);
			$search_engine = $search_engine ? $search_engine : $domain; //sukhon
		}
		//echo $ref.'==='.$kw.'//';
		$ref = addslashes(strip_tags($_GET['ref']));
		$search_engine = $ref ? $ref." &raquo; ".$search_engine : $search_engine;
		$keywords = $keywords ? $keywords : addslashes(strip_tags($_GET['kw']));
		//echo $ref.'==='.$kw.'//'.$search_engine.'=='.$keywords;
		setcookie('contact_referrer', base64_encode(serialize(array('search_engine' => $search_engine, 'keywords' => $keywords))));

	} else {

		//echo $wpurl.$url.'<br>';

		$contact_referrer = unserialize(base64_decode($_COOKIE['contact_referrer']));

		!@in_array($contact_referrer['visited'], 'http://'.$_SERVER['HTTP_HOST'].'/'.$url) ? ($contact_referrer['visited'][] = 'http://'.$_SERVER['HTTP_HOST'].''.$url) : '';

		//!@in_array($contact_referrer['visited'], $wpurl.$url) ? ($contact_referrer['visited'][] = $wpurl.$url) : '';

		if(substr($url, 0, strlen($contact_uri)) == $contact_uri) {

			//echo substr($referrer, 0, strlen($contact_url)) .'!='. $contact_url;

			if(substr($referrer, 0, strlen($contact_url)) != $contact_url) {

				$contact_referrer['last_visited'] = $referrer;

			}

		}

		//print_r($contact_referrer);echo '-------<br>-------';

		setcookie('contact_referrer', base64_encode(serialize($contact_referrer)));

	}

	//setcookie('page_visited', $url);

	//echo substr($url, 0, strlen($contact_url)) ."==". $contact_url;

	//print_r(unserialize(base64_decode($_COOKIE['contact_referrer'])));

	//print_r($_COOKIE['mystaytime']);

}



function time_referrer() {

	echo '<script language="javascript" type="text/javascript"><!--

	var startTime = "'.($_COOKIE['mystaytime'] == 'NaN' ? 0 : $_COOKIE['mystaytime']).'",expiredays = 1, c_name="mystaytime";

	var totalspent;

	function loopz()

	{

		setTimeout("loopz()",1000);

		startTime++;

		//totalspent = convertReadable(startTime);

		//document.getElementById(\'countz\').innerHTML = convertReadable(startTime);

		//alert(totalspent);

		var exdate=new Date();

		exdate.setDate(exdate.getDate()+expiredays);

		document.cookie=c_name+ "=" +escape(startTime); //+	((expiredays==null) ? "" : ";expires="+exdate.toUTCString());

	}

	function convertReadable(giefTime)

	{

		days = 0; hrs = 0; mins = 0;

		while(giefTime > 86400)

		{

			days++;

			giefTime -= 86400;

		}

		while(giefTime > 3600)

		{

			hrs++;

			giefTime -= 3600;

		}

		while(giefTime > 59)

		{

			mins++;

			giefTime -= 60;

		}

		return days+" days, "+hrs+" hours, "+mins+" minutes and "+giefTime+" seconds.";

	}

	loopz();

	//--></script>

	';



}



function add_admin_menu() {

		add_submenu_page('wp_referrers', 'Recent Referrers','Recent Referrers', 'read', 'wp_referrers', 'wp_referrers');

		add_menu_page('Referrers', 'Referrers', 'read', 'wp_referrers', 'wp_referrers', plugins_url('wp-referrers/wp-referrers.png')); 

		add_submenu_page('wp_referrers', 'Referrals by Referrer','By Referrer', 'read', 'wp_referrers_by_referrer', 'wp_referrers_by_referrer');

		add_submenu_page('wp_referrers', 'Referrals by Page','By Page', 'read', 'wp_referrers_by_page', 'wp_referrers_by_page');

		add_submenu_page('wp_referrers', 'Referrals from Search Engines by Page','By Page from SE', 'read', 'wp_referrers_by_page_from_se', 'wp_referrers_by_page_from_se');

		add_submenu_page('wp_referrers', 'Referrals by Search Engine','By Search Engine', 'read', 'wp_referrers_by_search_engine', 'wp_referrers_by_search_engine');

		add_submenu_page('wp_referrers', 'Referrals by Keyword','By Keyword', 'read', 'wp_referrers_by_keyword', 'wp_referrers_by_keyword');

}





function wp_referrers() {

	global $wpdb, $wp_referrers, $wp_referrers_keywords, $wp_referrers_search_engines;

	

	echo '<link rel="stylesheet" href="'.plugins_url('wp-referrers/wp-referrers.css').'" type="text/css" />'."\n";

	

	// get all the referrers

	$query = "SELECT COUNT(*) AS total FROM $wp_referrers";

	$qryresult = $wpdb->get_row($query);

	

	// set page related variables

	$total_items = $qryresult->total;

	$items_per_page = 20;

	$num_pages = ceil($total_items/$items_per_page);

	if ($_GET['p'] >= 1 AND $_GET['p'] <= $num_pages)

		$current_page = $_GET['p'];

	else

		$current_page = 1;

	$start_item = ($current_page-1)*$items_per_page;



	echo '<div class="wrap">'."\n";

	

	echo '<div id="icon-referrer-manager" class="icon32"><br /></div>'."\n";

	echo '<h2>Recent Referrers</h2>'."\n";





	if ($total_items > 0) {

		echo '<div class="tablenav">'."\n";

		

		$query = "SELECT referrer, url, create_time FROM $wp_referrers ORDER BY create_time DESC LIMIT $start_item, $items_per_page";

		$qryresult = $wpdb->get_results($query);

		

		// expand/collapse buttons

		$div_list = array();

		for ($i=0; $i<count($qryresult); $i++)

			array_push($div_list, "'domain-".($i+1)."'");

		echo '<ul class="subsubsub"><li><a href="javascript:animatedcollapse.show(['.join(',', $div_list).'])">Expand all</a> | </li><li><a href="javascript:animatedcollapse.hide(['.join(',', $div_list).'])">Collapse all</a></li></ul>'."\n";



		// print nav bar

		nav_bar($total_items, $items_per_page, $current_page, count($qryresult), admin_url('admin.php?page=wp_referrers'));

		echo '</div>'."\n";

		

		echo '<table class="widefat fixed" cellspacing="0">'."\n";

		echo '	<thead>'."\n";

		echo '	<tr class="thead">'."\n";

		echo '		<th scope="col" id="rank" class="manage-column column-rank" style=""></th>'."\n";

		echo '		<th scope="col" id="referrer" class="manage-column column-referrer" style="">Referrer</th>'."\n";

		echo '		<th scope="col" id="time" class="manage-column column-time" style="">Time</th>'."\n";

		echo '	</tr>'."\n";

		echo '	</thead>'."\n";

		

		echo '	<tfoot>'."\n";

		echo '	<tr class="thead">'."\n";

		echo '		<th scope="col" class="manage-column column-rank" style=""></th>'."\n";

		echo '		<th scope="col" class="manage-column column-referrer" style="">Referrer</th>'."\n";

		echo '		<th scope="col" class="manage-column column-time" style="">Time</th>'."\n";

		echo '	</tr>'."\n";

		echo '	</tfoot>'."\n";



		echo '<tbody id="">'."\n";

		for ($i=0; $i<count($qryresult); $i++) {

			$row = $qryresult[$i];

			echo '	<tr class="row-referrer" onclick="animatedcollapse.toggle(\'domain-'.($i+1).'\')">'."\n";

			echo '	<td class="rank column-rank">'.($start_item+$i+1).'</td>'."\n";

			echo '	<td class="referrer column-referrer"><a href="'.$row->referrer.'" target="_new">'.trim_url($row->referrer).'</a></td>'."\n";

			echo '	<td class="time column-time">'.$row->create_time.'</td>'."\n";

			echo '	</tr>'."\n";

			

			// print collapsible row

			echo '	<tr>';

			echo '	<td class="domain column-domain collapse-holder" colspan=3>'."\n";

			

			echo '	<div id="domain-'.($i+1).'" class="collapse-div">'."\n";

			echo '	<table class="collapse-table" cellspacing="0">'."\n";

		

			// print page from this referrer

			echo '	<tr class="row-collapse">'."\n";

			echo '	<td class="collapse-cell domain column-domain">&#8658; <a href="'.$row->url.'" target="_new">'.$row->url.'</a></td>'."\n";

			echo '	</tr>'."\n";

			echo '	</table>'."\n";

			echo '	</div>'."\n";

			

			echo '	</td>'."\n";

			echo '	</tr>'."\n";

			

		}

		echo '</tbody>'."\n";

		

		echo '</table>'."\n";

	}

	else {

		echo "No records yet";

	}

	

	echo '</div>'."\n";

	

	collapsible_div(count($qryresult));

}





function wp_referrers_by_referrer() {

	global $wpdb, $wp_referrers, $wp_referrers_keywords, $wp_referrers_search_engines;



	echo '<link rel="stylesheet" href="'.plugins_url('wp-referrers/wp-referrers.css').'" type="text/css" />'."\n";

	

	echo '<div class="wrap">'."\n";

	

	echo '<div id="icon-referrer-manager" class="icon32"><br /></div>'."\n";

	echo '<h2>Referrals by Referrer</h2>'."\n";



	// get all the unique domains

	$query = "SELECT LEFT(referrer, LOCATE('/', referrer, 8)) AS domain, COUNT(*) As hits FROM $wp_referrers WHERE search_engine = 0 GROUP BY domain ORDER BY hits DESC, domain";

	$qryresult = $wpdb->get_results($query);

	

	// set page related variables

	$total_items = count($qryresult);

	$items_per_page = 20;

	$num_pages = ceil($total_items/$items_per_page);

	if ($_GET['p'] >= 1 AND $_GET['p'] <= $num_pages) $current_page = $_GET['p'];

		else $current_page = 1;

	$start_item = ($current_page-1)*$items_per_page;

	

	if ($total_items > 0) {

		// get the unique domains for this page

		$query = "SELECT LEFT(referrer, LOCATE('/', referrer, 8)) AS domain, COUNT(*) As hits FROM $wp_referrers WHERE search_engine = 0 GROUP BY domain ORDER BY hits DESC, domain ASC LIMIT $start_item, $items_per_page";

		$qryresult = $wpdb->get_results($query);



		echo '<div class="tablenav">'."\n";

		

		// expand/collapse buttons

		$div_list = array();

		for ($i=0; $i<count($qryresult); $i++)

			array_push($div_list, "'domain-".($i+1)."'");

		echo '<ul class="subsubsub"><li><a href="javascript:animatedcollapse.show(['.join(',', $div_list).'])">Expand all</a> | </li><li><a href="javascript:animatedcollapse.hide(['.join(',', $div_list).'])">Collapse all</a></li></ul>'."\n";



		// print nav bar

		nav_bar($total_items, $items_per_page, $current_page, count($qryresult), admin_url('admin.php?page=wp_referrers_by_referrer'));



		echo '</div>'."\n";



		echo '<div id="wp_referrers">'."\n";

		echo '<table id="wp_referrers-table" class="widefat fixed" cellspacing="0">'."\n";

		echo '	<thead>'."\n";

		echo '	<tr class="thead">'."\n";

		echo '		<th scope="col" id="rank" class="manage-column column-rank" style="">Rank</th>'."\n";

		echo '		<th scope="col" id="domain" class="manage-column column-domain" style="">Referrer Domain</th>'."\n";

		echo '		<th scope="col" id="hits" class="manage-column column-hits" style="">Hits</th>'."\n";

		echo '	</tr>'."\n";

		echo '	</thead>'."\n";

		

		echo '	<tfoot>'."\n";

		echo '	<tr class="thead">'."\n";

		echo '		<th scope="col" class="manage-column column-rank" style="">Rank</th>'."\n";

		echo '		<th scope="col" class="manage-column column-domain" style="">Referrer Domain</th>'."\n";

		echo '		<th scope="col" class="manage-column column-hits" style="">Hits</th>'."\n";

		echo '	</tr>'."\n";

		echo '	</tfoot>'."\n";



		echo '<tbody id="">'."\n";

		

		for ($i=0; $i<count($qryresult); $i++) {

			$row = $qryresult[$i];

			

			// Find all referrers from this domain

			$sql  = "SELECT referrer, COUNT(*) AS hits FROM wp_referrers WHERE";

			$sql .= ' LEFT(referrer, LENGTH("'.addslashes($row->domain).'")) = "'.addslashes($row->domain).'"';

			$sql .= " GROUP BY referrer";

			$sql .= " ORDER BY referrer";

			$qryresult2 = $wpdb->get_results($sql);

		

			// print domain

			echo '	<tr class="row-domain" onclick="animatedcollapse.toggle(\'domain-'.($i+1).'\')">'."\n";

			echo '	<td class="rank column-rank">'.($start_item+$i+1).'</td>'."\n";

			echo '	<td class="domain column-domain"><span class="domain-name">'.$row->domain.'</span> ('.count($qryresult2).')</td>'."\n";

			echo '	<td class="hits column-hits">'.$row->hits.'</td>'."\n";

			echo '	</tr>'."\n";



			// print collapsible row

			echo '	<tr>';

			echo '	<td class="domain column-domain collapse-holder" colspan=3>'."\n";

			echo '	<div id="domain-'.($i+1).'" class="collapse-div">'."\n";

			echo '	<table class="collapse-table" cellspacing="0">'."\n";

			

			// print referrers from this domain

			for ($j=0; $j<count($qryresult2); $j++) {

				$row = $qryresult2[$j];

				echo '	<tr class="row-collapse">'."\n";

				echo '	<td class="collapse-cell domain column-domain"><a href="'.$row->referrer.'" target="_new">'.trim_url($row->referrer).'</a></td>'."\n";

				echo '	<td class="collapse-cell hits column-hits">'.$row->hits.'</td>'."\n";

				echo '	</tr>'."\n";

			}

			

			echo '	</table>'."\n";

			echo '	</div>'."\n";

			echo '	</td>'."\n";

			echo '	</tr>'."\n";

		}



		echo '</tbody>'."\n";

		echo '</table>'."\n";

		echo '</div>'."\n";

	}

	else {

		echo "No records yet";

	}

		

	echo '</div>'."\n";

		

	collapsible_div(count($qryresult));

}





function wp_referrers_by_page() {

	global $wpdb, $wp_referrers, $wp_referrers_keywords, $wp_referrers_search_engines;

	

	// get all the unique domains

	$qryresult = $wpdb->get_row("SELECT COUNT(DISTINCT url) AS total FROM $wp_referrers WHERE search_engine = 0");

	

	// set page related variables

	$total_items = $qryresult->total;

	$items_per_page = 20;

	$num_pages = ceil($total_items/$items_per_page);

	if ($_GET['p'] >= 1 AND $_GET['p'] <= $num_pages) $current_page = $_GET['p'];

		else $current_page = 1;

	$start_item = ($current_page-1)*$items_per_page;



	echo '<link rel="stylesheet" href="'.plugins_url('wp-referrers/wp-referrers.css').'" type="text/css" />'."\n";



	echo '<div class="wrap">'."\n";

	

	echo '<div id="icon-referrer-manager" class="icon32"><br /></div>'."\n";

	echo '<h2>Referrals by Page</h2>'."\n";

	

	if ($total_items > 0) {

	

		// get the unique pages

		$query = "SELECT url, COUNT(*) AS hits FROM $wp_referrers WHERE search_engine = 0 GROUP BY url ORDER BY hits DESC, url ASC LIMIT $start_item, $items_per_page";

		$qryresult = $wpdb->get_results($query);



		echo '<div class="tablenav">'."\n";

		

		// expand/collapse buttons

		$div_list = array();

		for ($i=0; $i<count($qryresult); $i++)

			array_push($div_list, "'domain-".($i+1)."'");

		echo '<ul class="subsubsub"><li><a href="javascript:animatedcollapse.show(['.join(',', $div_list).'])">Expand all</a> | </li><li><a href="javascript:animatedcollapse.hide(['.join(',', $div_list).'])">Collapse all</a></li></ul>'."\n";



		// print nav bar

		nav_bar($total_items, $items_per_page, $current_page, count($qryresult), admin_url('admin.php?page=wp_referrers_by_page'));



		echo '</div>'."\n";

		

		

		echo '<div id="wp_referrers">'."\n";

		echo '<table id="wp_referrers-table" class="widefat fixed" cellspacing="0">'."\n";

		echo '	<thead>'."\n";

		echo '	<tr class="thead">'."\n";

		echo '		<th scope="col" id="rank" class="manage-column column-rank" style="">Rank</th>'."\n";

		echo '		<th scope="col" id="domain" class="manage-column column-domain" style="">Page</th>'."\n";

		echo '		<th scope="col" id="hits" class="manage-column column-hits" style="">Hits</th>'."\n";

		echo '	</tr>'."\n";

		echo '	</thead>'."\n";

		

		echo '	<tfoot>'."\n";

		echo '	<tr class="thead">'."\n";

		echo '		<th scope="col" class="manage-column column-rank" style="">Rank</th>'."\n";

		echo '		<th scope="col" class="manage-column column-domain" style="">Page</th>'."\n";

		echo '		<th scope="col" class="manage-column column-hits" style="">Hits</th>'."\n";

		echo '	</tr>'."\n";

		echo '	</tfoot>'."\n";



		echo '<tbody id="">'."\n";



		for ($i=0; $i<count($qryresult); $i++) {

			$row = $qryresult[$i];



			// Find all referrers to this page

			$sql  = "SELECT referrer FROM wp_referrers WHERE";

			$sql .= ' url = "'.addslashes($row->url).'" AND search_engine = 0';

			$sql .= " ORDER BY referrer";

			$qryresult2 = $wpdb->get_results($sql);



			// print domain

			echo '	<tr class="row-domain" onclick="animatedcollapse.toggle(\'domain-'.($i+1).'\')">'."\n";

			echo '	<td class="rank column-rank">'.($start_item+$i+1).'</td>'."\n";

			echo '	<td class="domain column-domain"><span class="domain-name">'.$row->url.'</span> ('.count($qryresult2).')</td>'."\n";

			echo '	<td class="hits column-hits">'.$row->hits.'</td>'."\n";

			echo '	</tr>'."\n";



			// print collapsible row

			echo '	<tr>';

			echo '	<td class="domain column-domain collapse-holder" colspan=3>'."\n";

			echo '	<div id="domain-'.($i+1).'" class="collapse-div">'."\n";

			echo '	<table class="collapse-table" cellspacing="0">'."\n";

			

			// print referrers to this page

			for ($j=0; $j<count($qryresult2); $j++) {

				$row = $qryresult2[$j];

				echo '	<tr class="row-collapse">'."\n";

				echo '	<td class="collapse-cell domain column-domain"><a href="'.$row->referrer.'" target="_new">'.trim_url($row->referrer).'</a></td>'."\n";

				echo '	</tr>'."\n";

			}

			

			echo '	</table>'."\n";

			echo '	</div>'."\n";

			echo '	</td>'."\n";

			echo '	</tr>'."\n";

		}



		echo '</tbody>'."\n";

		echo '</table>'."\n";

		echo '</div>'."\n";

	}

	else {

		echo "No records yet";

	}

	

	echo '</div>'."\n";

		

	collapsible_div(count($qryresult));

}





function wp_referrers_by_page_from_se() {

	global $wpdb, $wp_referrers, $wp_referrers_keywords, $wp_referrers_search_engines;

	

	// get all the unique domains

	$qryresult = $wpdb->get_row("SELECT COUNT(DISTINCT url) AS total FROM $wp_referrers WHERE search_engine > 0");

	

	// set page related variables

	$total_items = $qryresult->total;

	$items_per_page = 20;

	$num_pages = ceil($total_items/$items_per_page);

	if ($_GET['p'] >= 1 AND $_GET['p'] <= $num_pages) $current_page = $_GET['p'];

		else $current_page = 1;

	$start_item = ($current_page-1)*$items_per_page;



	echo '<link rel="stylesheet" href="'.plugins_url('wp-referrers/wp-referrers.css').'" type="text/css" />'."\n";



	echo '<div class="wrap">'."\n";

	

	echo '<div id="icon-referrer-manager" class="icon32"><br /></div>'."\n";

	echo '<h2>Referrals from Search Engines by Page</h2>'."\n";

	

	if ($total_items > 0) {

	

		// get the unique pages

		$query = "SELECT url, COUNT(*) AS hits FROM $wp_referrers WHERE search_engine > 0 GROUP BY url ORDER BY hits DESC, url ASC LIMIT $start_item, $items_per_page";

		$qryresult = $wpdb->get_results($query);



		echo '<div class="tablenav">'."\n";

		

		// expand/collapse buttons

		$div_list = array();

		for ($i=0; $i<count($qryresult); $i++)

			array_push($div_list, "'domain-".($i+1)."'");

		echo '<ul class="subsubsub"><li><a href="javascript:animatedcollapse.show(['.join(',', $div_list).'])">Expand all</a> | </li><li><a href="javascript:animatedcollapse.hide(['.join(',', $div_list).'])">Collapse all</a></li></ul>'."\n";



		// print nav bar

		nav_bar($total_items, $items_per_page, $current_page, count($qryresult), admin_url('admin.php?page=wp_referrers_by_page'));



		echo '</div>'."\n";

		

		

		echo '<div id="wp_referrers">'."\n";

		echo '<table id="wp_referrers-table" class="widefat fixed" cellspacing="0">'."\n";

		echo '	<thead>'."\n";

		echo '	<tr class="thead">'."\n";

		echo '		<th scope="col" id="rank" class="manage-column column-rank" style="">Rank</th>'."\n";

		echo '		<th scope="col" id="domain" class="manage-column column-domain" style="">Page</th>'."\n";

		echo '		<th scope="col" id="hits" class="manage-column column-hits" style="">Hits</th>'."\n";

		echo '	</tr>'."\n";

		echo '	</thead>'."\n";

		

		echo '	<tfoot>'."\n";

		echo '	<tr class="thead">'."\n";

		echo '		<th scope="col" class="manage-column column-rank" style="">Rank</th>'."\n";

		echo '		<th scope="col" class="manage-column column-domain" style="">Page</th>'."\n";

		echo '		<th scope="col" class="manage-column column-hits" style="">Hits</th>'."\n";

		echo '	</tr>'."\n";

		echo '	</tfoot>'."\n";



		echo '<tbody id="">'."\n";



		for ($i=0; $i<count($qryresult); $i++) {

			$row = $qryresult[$i];



			// print domain

			echo '	<tr class="row-domain" onclick="animatedcollapse.toggle(\'domain-'.($i+1).'\')">'."\n";

			echo '	<td class="rank column-rank">'.($start_item+$i+1).'</td>'."\n";

			echo '	<td class="domain column-domain"><span class="domain-name">'.$row->url.'</span></td>'."\n";

			echo '	<td class="hits column-hits">'.$row->hits.'</td>'."\n";

			echo '	</tr>'."\n";



			// print collapsible row

			echo '	<tr>';

			echo '	<td class="domain column-domain collapse-holder" colspan=3>'."\n";

			

			echo '	<div id="domain-'.($i+1).'" class="collapse-div">'."\n";

			echo '	<table class="collapse-table" cellspacing="0">'."\n";

			echo '	<tr>'."\n";

			echo '	<td class="keywords-headword column-keywords-headword"><span class="keywords">Keywords:</span></td>'."\n";

			echo '	<td class="keywords column-keywords">';

			

			$query  = "SELECT DISTINCT $wp_referrers_keywords.keywords AS keywords FROM $wp_referrers, $wp_referrers_keywords";

			$query .= " WHERE $wp_referrers.keywords = $wp_referrers_keywords.id AND $wp_referrers.url = '".addslashes($row->url)."'";

			$query .= " ORDER BY keywords";

			$qryresult2 = $wpdb->get_results($query);



			if (count($qryresult2) > 0) {

				echo '<ul id="referrer-keywords-list">';

				for ($j=0; $j<count($qryresult2); $j++) {

					echo '<li class="referrer-keywords">'.$qryresult2[$j]->keywords.'</li>';

				}

				echo '</ul>';

			}

			else {

				echo "none (hits possibly from image searches)";

			}

			

			echo '</td>'."\n";

			echo '	</tr>'."\n";

			echo '	</table>'."\n";

			echo '	</div>'."\n";

			

			echo '	</td>'."\n";

			echo '	</tr>'."\n";

		}



		echo '</tbody>'."\n";

		echo '</table>'."\n";

		echo '</div>'."\n";

	}

	else {

		echo "No records yet";

	}

	

	echo '</div>'."\n";

		

	collapsible_div(count($qryresult));

}





function wp_referrers_by_search_engine() {

	global $wpdb, $wp_referrers, $wp_referrers_keywords, $wp_referrers_search_engines;

	

	$query  = "SELECT COUNT(DISTINCT wp_referrers_search_engines.name) AS total";

	$query .= " FROM wp_referrers, wp_referrers_search_engines";

	$query .= " WHERE wp_referrers.search_engine = wp_referrers_search_engines.id";

	$qryresult = $wpdb->get_row($query);

	

	// set page related variables

	$total_items = $qryresult->total;

	$items_per_page = 20;

	$num_pages = ceil($total_items/$items_per_page);

	if ($_GET['p'] >= 1 AND $_GET['p'] <= $num_pages)

		$current_page = $_GET['p'];

	else

		$current_page = 1;

	$start_item = ($current_page-1)*$items_per_page;



	echo '<link rel="stylesheet" href="'.plugins_url('wp-referrers/wp-referrers.css').'" type="text/css" />'."\n";

	

	echo '<div class="wrap">'."\n";

	

	echo '<div id="icon-referrer-manager" class="icon32"><br /></div>'."\n";

	echo '<h2>Referrals by Search Engine</h2>'."\n";



	if ($total_items > 0) {

		echo '<div class="tablenav">'."\n";



		// get all the search engines

		$query  = "SELECT $wp_referrers_search_engines.display_name AS display_name, $wp_referrers_search_engines.url AS url, COUNT(*) AS hits ";

		$query .= " FROM $wp_referrers, $wp_referrers_search_engines ";

		$query .= " WHERE $wp_referrers.search_engine = $wp_referrers_search_engines.id ";

		$query .= " GROUP BY $wp_referrers_search_engines.id ";

		$query .= " ORDER BY hits DESC, name ASC";

		$query .= "  LIMIT $start_item, $items_per_page";

		$qryresult = $wpdb->get_results($query);



		// print nav bar

		nav_bar($total_items, $items_per_page, $current_page, count($qryresult), admin_url('admin.php?page=wp_referrers_by_referrer'));



		echo '</div>'."\n";



		echo '<table class="widefat fixed" cellspacing="0">'."\n";

		echo '	<thead>'."\n";

		echo '	<tr class="thead">'."\n";

		echo '		<th scope="col" id="rank" class="manage-column column-rank" style=""></th>'."\n";

		echo '		<th scope="col" id="referrer" class="manage-column column-referrer" style="">Search Engine</th>'."\n";

		echo '		<th scope="col" id="time" class="manage-column column-hits" style="">Hits</th>'."\n";

		echo '	</tr>'."\n";

		echo '	</thead>'."\n";

		

		echo '	<tfoot>'."\n";

		echo '	<tr class="thead">'."\n";

		echo '		<th scope="col" class="manage-column column-rank" style=""></th>'."\n";

		echo '		<th scope="col" class="manage-column column-referrer" style="">Search Engine</th>'."\n";

		echo '		<th scope="col" class="manage-column column-hits" style="">Hits</th>'."\n";

		echo '	</tr>'."\n";

		echo '	</tfoot>'."\n";

				

		echo '<tbody id="">'."\n";

		for ($i=0; $i<count($qryresult); $i++) {

			$row = $qryresult[$i];

			echo '	<tr class="row-referrer">'."\n";

			echo '	<td class="rank column-rank">'.($start_item+$i+1).'</td>'."\n";

			echo '	<td class="referrer column-referrer"><a href="'.$row->url.'" target="_new">'.$row->display_name.'</a></td>'."\n";

			echo '	<td class="time column-hits">'.$row->hits.'</td>'."\n";

			echo '	</tr>'."\n";

		}

		echo '</tbody>'."\n";

		echo '</table>'."\n";

	}

	else {

		echo "No records yet";

	}

	

	echo '</div>'."\n";

}



function wp_referrers_by_keyword() {

	global $wpdb, $wp_referrers, $wp_referrers_keywords, $wp_referrers_search_engines;

	

	echo '<link rel="stylesheet" href="'.plugins_url('wp-referrers/wp-referrers.css').'" type="text/css" />'."\n";

	

	// get all the keywords

	$query = "SELECT COUNT(*) AS total FROM $wp_referrers_keywords";

	$qryresult = $wpdb->get_row($query);

	

	// set page related variables

	$total_items = $qryresult->total;

	$items_per_page = 20;

	$num_pages = ceil($total_items/$items_per_page);

	if ($_GET['p'] >= 1 AND $_GET['p'] <= $num_pages)

		$current_page = $_GET['p'];

	else

		$current_page = 1;

	$start_item = ($current_page-1)*$items_per_page;



	echo '<div class="wrap">'."\n";

	

	echo '<div id="icon-referrer-manager" class="icon32"><br /></div>'."\n";

	echo '<h2>Referrals by Keyword</h2>'."\n";

	

	if ($total_items > 0) {

		echo '<div class="tablenav">'."\n";

				

		$query = "SELECT keywords, hits FROM $wp_referrers_keywords ORDER BY hits DESC, keywords ASC LIMIT $start_item, $items_per_page";

		$qryresult = $wpdb->get_results($query);

		

		// print nav bar

		nav_bar($total_items, $items_per_page, $current_page, count($qryresult), admin_url('admin.php?page=wp_referrers_by_keyword'));

		echo '</div>'."\n";

		

		echo '<table class="widefat fixed" cellspacing="0">'."\n";

		echo '	<thead>'."\n";

		echo '	<tr class="thead">'."\n";

		echo '		<th scope="col" id="rank" class="manage-column column-rank" style=""></th>'."\n";

		echo '		<th scope="col" id="referrer" class="manage-column column-referrer" style="">Keywords</th>'."\n";

		echo '		<th scope="col" id="time" class="manage-column column-hits" style="">Hits</th>'."\n";

		echo '		<th scope="col" id="search" class="manage-column column-search" style="">Search</th>'."\n";

		echo '	</tr>'."\n";

		echo '	</thead>'."\n";

		

		echo '	<tfoot>'."\n";

		echo '	<tr class="thead">'."\n";

		echo '		<th scope="col" class="manage-column column-rank" style=""></th>'."\n";

		echo '		<th scope="col" class="manage-column column-referrer" style="">Keywords</th>'."\n";

		echo '		<th scope="col" class="manage-column column-hits" style="">Hits</th>'."\n";

		echo '		<th scope="col" class="manage-column column-search" style="">Search</th>'."\n";

		echo '	</tr>'."\n";

		echo '	</tfoot>'."\n";



		echo '<tbody id="">'."\n";

		for ($i=0; $i<count($qryresult); $i++) {

			$row = $qryresult[$i];

			echo '	<tr class="row-referrer">'."\n";

			echo '	<td class="rank column-rank">'.($start_item+$i+1).'</td>'."\n";

			echo '	<td class="referrer column-referrer">'.$row->keywords.'</a></td>'."\n";

			echo '	<td class="hits column-hits">'.$row->hits.'</td>'."\n";

			echo '	<td class="column-search"><a href="http://www.google.com/#hl=en&q='.urlencode($row->keywords).'">Google</a> | <a href="http://search.yahoo.com/search?p='.urlencode($row->keywords).'">Yahoo!</a> | <a href="http://www.bing.com/search?q='.urlencode($row->keywords).'">Bing</a></a></td>'."\n";

			echo '	</tr>'."\n";

		}

		echo '</tbody>'."\n";

		echo '</table>'."\n";

	}

	else {

		echo "No records yet";

	}

	

	echo '</div>'."\n";

}



function is_search_engine($referrer) {

	global $wpdb, $wp_referrers, $wp_referrers_keywords, $wp_referrers_search_engines;

	

	if (ereg("^http://([^/]+)/.+", $referrer, $vars))

		$domain = $vars[1];



	$search_engine = 0;

	$kwid = 0;

	

	$qryresult = $wpdb->get_results("SELECT id, display_name, name, var_name FROM $wp_referrers_search_engines");

	

	for ($i=0; $i<count($qryresult); $i++) {

		// is this from a search engine?

		if (ereg("^(.+\.)?".$qryresult[$i]->name."(\..+)?$", $domain, $vars)) {

			$search_engine = $qryresult[$i]->name;//id;

			$query_string = substr($referrer, strpos($referrer, '?')+1);

			parse_str($query_string, $query_array);

			$keywords = trim($query_array[$qryresult[$i]->var_name]);

			

			if (strlen($keywords) > 0) {

				// check whether the keywords already exist in the database

				$qryresult2 = $wpdb->get_row("SELECT id FROM $wp_referrers_keywords WHERE keywords = '".$keywords."'");



				if ($qryresult2->id > 0) {

					// Update an existing keywords record

					$sql  = "UPDATE $wp_referrers_keywords SET";

					$sql .= " hits = hits + 1,";

					$sql .= " last_time = NOW() WHERE";

					$sql .= " id = '".$qryresult2->id."'";

					$wpdb->query($sql);

					

					$kwid = $qryresult2->id;

				}

				else {

					// Create a new keywords record

					$sql  = "INSERT INTO $wp_referrers_keywords SET";

					$sql .= " keywords = '".$keywords."',";

					$sql .= " last_time = NOW(),";

					$sql .= " create_time = NOW(),";

					$sql .= " hits = 1";

					$wpdb->query($sql);



					$qryresult2 = $wpdb->get_row("SELECT id FROM $wp_referrers_keywords WHERE keywords = '".$keywords."'");

					$kwid = $qryresult2->id;

				}

			}

			

			// Stop once a search engine is found

			break;

		}

	}

		

	return array($search_engine, $keywords);//$kwid

}





function nav_bar($total_items, $items_per_page, $current_page, $items_on_current_page, $page_url) {

	$num_pages = ceil($total_items/$items_per_page);

	$start_item = ($current_page-1)*$items_per_page;

	

	// display the page numbers

	echo '<div class="tablenav-pages">'."\n";

	echo '<span class="displaying-num">Displaying '.($start_item+1).'&#8211;'.($start_item+$items_on_current_page).' of '.$total_items.'</span>'."\n";

	

	if ($current_page > 1)

		echo '<a class="prev page-numbers" href="'.$page_url.'&p='.($current_page-1).'">&laquo;</a>'."\n";

		

	if (1 < $current_page-4) {

		echo '<a class="page-numbers" href="'.$page_url.'&p=1">1</a>'."\n";

		if (1 < $current_page-5) echo " ... ";

	}

		

	for ($k=max(1, $current_page-4); $k<=min($num_pages, $current_page+4); $k++) {

		if ($k == $current_page)

			echo '<span class="page-numbers current">'.$k.'</span>'."\n";

		else

			echo '<a class="page-numbers" href="'.$page_url.'&p='.$k.'">'.$k.'</a>'."\n";

	}

	

	if ($num_pages > $current_page+4) {

		if ($num_pages > $current_page+5) echo " ... ";

		echo '<a class="page-numbers" href="'.$page_url.'&p='.$num_pages.'">'.$num_pages.'</a>'."\n";

	}

	

	if ($current_page < $num_pages)

		echo '<a class="next page-numbers" href="'.$page_url.'&p='.($current_page+1).'">&raquo;</a>'."\n";

	echo '</div>'."\n";

}





function trim_url($url, $maxlength=75) {

	if (ereg("^http://.+(/.+)$", $url, $vars))

		$rightmost = $vars[1];

	

	if (strlen($rightmost) > 15)

		$rightmost = substr($rightmost, strlen($rightmost)-15);

	

	$trimmed_url = $url;

	if (strlen($url) > $maxlength) {

		$trimmed_url = substr($url, 0, $maxlength - $rightmost - 5) . '...' . $rightmost;

	}

	

	return $trimmed_url;

}





function collapsible_div($items_on_current_page) {

	echo '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>'."\n";

	echo '<script type="text/javascript" src="'.plugins_url('wp-referrers/animatedcollapse.js').'">'."\n";

	echo '/***********************************************'."\n";

	echo '* Animated Collapsible DIV v2.4- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)'."\n";

	echo '* This notice MUST stay intact for legal use'."\n";

	echo '* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more'."\n";

	echo '***********************************************/'."\n";

	echo '</script>'."\n";

	echo '<script type="text/javascript">'."\n";



	for ($i=0; $i<$items_on_current_page; $i++) {

		echo 'animatedcollapse.addDiv("domain-'.($i+1).'", "fade=1,speed=1000")'."\n";

	}

	echo 'animatedcollapse.init();'."\n";

	echo '</script>'."\n";	

}



?>
