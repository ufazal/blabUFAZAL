<?php

function vypsatGoogle($obj){
  global $profile;
  global $images;
  global $results;
  print_r($obj);
  if($obj->items){
    foreach($obj->items as $aktivita){
      echo "<div class='ozoGPstatus'>
			<div class='ozoGPAuthor'>
				<a href='" . $aktivita->actor->url . "' title='" . $aktivita->actor->displayName . "'>
					<img src='" . $aktivita->actor->image->url . "?sz=" . $profile . "' width='" . $profile . "' alt='" . $aktivita->actor->displayName . "'>
				</a>
			</div>
			<p style='margin-left: " . ($profile + 8) . "px;'>
				<strong><a href='" . $aktivita->url . "'>" . $aktivita->actor->displayName . "</a>:</strong> " . $aktivita->object->content;
      $album = 0;
      if($aktivita->object->attachments){
        foreach($aktivita->object->attachments as $attachments){
          if($attachments->objectType == 'photo-album'){
            echo "<br /><strong>" . $attachments->displayName . "</strong>";
            $urlAlba = $attachments->url;
            $album = 1;
            break;
          }
        }
      }
      if($album == 1){
        $pocetObrazku = 0;
        $pocet = (count($aktivita->object->attachments)) - 2;
        if($pocet < 1) $pocet = 1;
        $velikost = floor($images / $pocet);
        if($velikost < 50){
          $pocet = floor($images / 50);
          $velikost = floor($images / $pocet - 3);
        }
        foreach($aktivita->object->attachments as $attachments){
          if($attachments->objectType == 'photo' and $pocetObrazku == 0){
            echo "<br />
									<a href='" . $urlAlba . "'><img class='photo' src='" . $attachments->image->url . "' alt='' style='max-width: " . $images . "px;'></a>
									<div style='clear: both'></div>
									<div class='photos' style='margin-left:" . ($profile + 8) . "px;'>";
            $pocetObrazku++;
          }
          elseif($attachments->objectType == 'photo' and $pocetObrazku < $pocet){
            echo "<a href='" . $attachments->fullImage->url . "'>
										<img class='photo' src='" . $attachments->image->url . "' alt='' style='max-width: " . ($velikost) . "px;  max-height: 40px'>
										</a>";
            $pocetObrazku++;
          }
        }
        echo "</div><div style='clear: both'></div>";
      }
      else{
        if($aktivita->object->attachments){
          $pocetObrazku = 0;
          foreach($aktivita->object->attachments as $attachments){
            if($attachments->objectType == 'article') echo "<br /><a href='" . $attachments->url . "'>" . $attachments->displayName . "</a>";
            if($attachments->objectType == 'photo-album') $urlAlba = $attachments->url;
            else{
              if($attachments->image->url){
                if($attachments->objectType == 'photo' and $pocetObrazku == 0){
                  echo "<br />
								<a href='" . $attachments->fullImage->url . "'>
								<img class='left' src='" . $attachments->image->url . "' alt='' style='max-width: " . $images . "px'>
								<div style='clear: both'></div>";
                  $pocetObrazku++;
                }
                elseif($attachments->objectType == 'video') echo "<br /><a href='" . $attachments->url . "'><img class='left' src='" . $attachments->image->url . "' alt=''style='max-width: " . $images . "px'  ></a><div style='clear: both'></div>";
              }
            }
          }
        }
      }
      echo "<div class='hr' style='margin-left: " . ($profile + 8) . "px;'>
				<a href='" . $aktivita->url . "' class='left'>" . __('Comments', 'default') . ": " . $aktivita->object->replies->totalItems . "</a>";
      echo date(get_option('date_format'), strtotime($aktivita->published)) . " " . date(get_option('time_format'), strtotime($aktivita->published)) . "
				</div>
				</p>
				<div style='clear: both'></div>
				<br />";
      echo "</div>";
    }
  }
}

if($json = @file_get_contents("https://www.googleapis.com/plus/v1/activities/z13virexuwu4t1tpx04cjfna0tfiz54z5d0/comments?key=AIzaSyDdgq4fRV9Dv0J5Qlm1n3bb3quxhGEjkf8")){
  $obj = json_decode($json);
  vypsatGoogle($obj);
}
?>