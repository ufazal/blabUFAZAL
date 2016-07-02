<?php  ?><div id="leftNavigation">

  <div id="InteractiveMedia" <?php if(is_page(35) || is_page(41) || is_page(57) ||is_page(60) ||is_page(63) ||is_page(68) ||is_page(71) ||is_page(74) || is_child_of(35) || is_child_of(41) || is_child_of(57) ||is_child_of(60) ||is_child_of(63) ||is_child_of(68) ||is_child_of(71) ||is_child_of(74))

{

// over

echo 'class="over"';

}

?> >

    <ul class="leftnav_links">

      <?php wp_list_pages('title_li=&include=35,41,57,60,63,68,71,74' ); ?>

    </ul>

  </div>

  <div id="TraditionalMedia" <?php if(is_page(80) || is_page(83) || is_page(87) || is_child_of(80) || is_child_of(83) || is_child_of(87))

{

// over

echo 'class="over"';

}

?>>

    <ul class="leftnav_links">

      <?php wp_list_pages('title_li=&include=80,83,87' ); ?>

    </ul>

  </div>

  <div id="ItDevelopment" <?php if(is_page(91) || is_page(94) || is_page(97) || is_page(101) || is_child_of(91) || is_child_of(94) || is_child_of(97) || is_child_of(101))

{

// over

echo 'class="over"';

}

?>>

    <ul class="leftnav_links">

      <?php wp_list_pages('title_li=&include=91,94,97,101' ); ?>

    </ul>

  </div>

</div>



<?php /*?><?php 

			// podcasting flash header

			wp_swfobject_echo("http://www.bluelinerny.com/wp-content/themes/bluelinerny_cms/global_assets/callouts/DF_00.swf", "240", "260");  ?><?php */?>
