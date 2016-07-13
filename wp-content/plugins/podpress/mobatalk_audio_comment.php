<?php
/*
License:
 ==============================================================================

    Copyright 2006  Dan Kuykendall  (email : dan@kuykendall.org)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-107  USA
*/

if(isset($_GET['mp3URL'])) {
	$theURL = $_GET['mp3URL'];
} elseif(isset($_GET['mp3url'])) {
	$theURL = $_GET['mp3url'];
} else {
	$theURL = 'Unknown';
}

if(isset($_GET['mp3Size'])) {
	$theSize = $_GET['mp3Size'];
} elseif(isset($_GET['mp3size'])) {
	$theSize = $_GET['mp3size'];
} else {
	$theSize = 'Unknown';
}

if(isset($_GET['mp3Duration'])) {
	$theDuration = $_GET['mp3Duration'];
} elseif(isset($_GET['mp3duration'])) {
	$theDuration = $_GET['mp3duration'];
} else {
	$theDuration = 'Unknown';
}

?>
<html>
	<head>
		<title>mychingo.com audio comment result</title>
		<script type="text/javascript">
<!--
function passOnTheURL() {
	window.parent.podPressAttachAudioComment(document.getElementById('mp3URL').innerHTML);
}
-->
		</script>
	</head>
	<body onload="javascript: passOnTheURL();">
		<div id="mp3URL" name="mp3URL" style="display:none"><?php echo $theURL; ?></div>
		<div id="mp3Size" name="mp3Size" style="display:none"><?php echo $theSize; ?></div>
		<div id="mp3Duration" name="mp3Duration" style="display:none"><?php echo $theDuration; ?></div>
	</body>
</html>