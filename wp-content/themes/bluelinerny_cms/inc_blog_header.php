<?php  ?><div id="blognavhead_wrap">
  <div id ="blognavhead">
    <h1 class="blogtitle"><a href="http://www.bluelinerny.com/blog/">The 7 Pillars of Digital Marketing Blog</a></h1>
    <p class="desc">Best practices, training and innovations in Digital Strategy.</p>
    <ul class="nav clearfix">
      <?php

    // Get the ID of a given category

    $category_id = get_cat_ID( 'online-advertising' );



    // Get the URL of this category

    $category_link = get_category_link( $category_id );

?>
      <li><a href="<?php bloginfo('url'); ?>/blog/content-marketing" title="Content Marketing">Pillar 1<br />
        <span>Content Marketing</span></a></li>
      <li><a href="<?php bloginfo('url'); ?>/blog/website-design" title="UX & Website Design">Pillar 2<br />
      <span>UX &amp; Website Design</span></a></li>
      <li  class="longpillar"><a href="<?php bloginfo('url'); ?>/blog/search-engine-optimization" title="SEO / Search Engine Optimization">Pillar 3<br />
        <span>Search Engine Optimization</span></a></li>
      <li> <a href="<?php bloginfo('url'); ?>/blog/online-advertising" title="Digital Media">Pillar 4<br />
        <span>Digital Media</span></a></li>
      <li> <a href="<?php bloginfo('url'); ?>/blog/crm" title="crm">Pillar 5<br />
        <span>CRM</span></a></li>
      <li class="lastpillar"> <a href="<?php bloginfo('url'); ?>/blog/social-media-marketing" title="Social Media Marketing">Pillar 6<br />
        <span>Social Media Marketing</span></a></li>
      <li> <a href="<?php bloginfo('url'); ?>/blog/mobile-marketing" title="Website Analytics">Pillar 7<br />
        <span>Mobile Marketing</span></a></li>
    </ul>
  </div>
</div>
