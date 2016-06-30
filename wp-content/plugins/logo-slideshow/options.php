<?php
$location = $options_page; // Form Action URI
?>

<div class="wrap">
<h2>Logo Slideshow</h2>
<p>Use these fields below to specify your Links and Images for the Logo Slideshow. Allways use direct Path to Images that is provided in the wordpress media upload box<br>
  like <b>http://www.fullyaliveleadership.com/wp-content/uploads/img1.gif</b><br />
  Best Image Height is: 70px </p>
<div style="margin-left:0px;">
  <form method="post" action="options.php">
    <?php wp_nonce_field('update-options'); ?>
    <fieldset name="general_options" class="options">
      1. Logo:<br />
      <div style="margin:0;padding:0;"> URL:
        <input name="logo-url1" id="logo-url1" size="35" value="<?php echo get_option('logo-url1'); ?>">
        </input>
        Picture:
        <input name="logo-img1" id="logo-img1" size="35" value="<?php echo get_option('logo-img1'); ?>">
        </input>
      </div>
      <br />
      2. Logo:<br />
      <div style="margin:0;padding:0;"> URL:
        <input name="logo-url2" id="logo-url2" size="35" value="<?php echo get_option('logo-url2'); ?>">
        </input>
        Picture:
        <input name="logo-img2" id="logo-img2" size="35" value="<?php echo get_option('logo-img2'); ?>">
        </input>
      </div>
      <br />
      3. Logo:<br />
      <div style="margin:0;padding:0;"> URL:
        <input name="logo-url3" id="logo-url3" size="35" value="<?php echo get_option('logo-url3'); ?>">
        </input>
        Picture:
        <input name="logo-img3" id="logo-img3" size="35" value="<?php echo get_option('logo-img3'); ?>">
        </input>
      </div>
      <br />
      4. Logo:<br />
      <div style="margin:0;padding:0;"> URL:
        <input name="logo-url4" id="logo-url4" size="35" value="<?php echo get_option('logo-url4'); ?>">
        </input>
        Picture:
        <input name="logo-img4" id="logo-img4" size="35" value="<?php echo get_option('logo-img4'); ?>">
        </input>
      </div>
      <br />
      5. Logo:<br />
      <div style="margin:0;padding:0;"> URL:
        <input name="logo-url5" id="logo-url5" size="35" value="<?php echo get_option('logo-url5'); ?>">
        </input>
        Picture:
        <input name="logo-img5" id="logo-img5" size="35" value="<?php echo get_option('logo-img5'); ?>">
        </input>
      </div>
      <br />
      6. Logo:<br />
      <div style="margin:0;padding:0;"> URL:
        <input name="logo-url6" id="logo-url6" size="35" value="<?php echo get_option('logo-url6'); ?>">
        </input>
        Picture:
        <input name="logo-img6" id="logo-img6" size="35" value="<?php echo get_option('logo-img6'); ?>">
        </input>
      </div>
      <br />
      7. Logo:<br />
      <div style="margin:0;padding:0;"> URL:
        <input name="logo-url7" id="logo-url7" size="35" value="<?php echo get_option('logo-url7'); ?>">
        </input>
        Picture:
        <input name="logo-img7" id="logo-img7" size="35" value="<?php echo get_option('logo-img7'); ?>">
        </input>
      </div>
      <br />
      8. Logo:<br />
      <div style="margin:0;padding:0;"> URL:
        <input name="logo-url8" id="logo-url8" size="35" value="<?php echo get_option('logo-url8'); ?>">
        </input>
        Picture:
        <input name="logo-img8" id="logo-img8" size="35" value="<?php echo get_option('logo-img8'); ?>">
        </input>
      </div>
      <br />
      9. Logo:<br />
      <div style="margin:0;padding:0;"> URL:
        <input name="logo-url9" id="logo-url9" size="35" value="<?php echo get_option('logo-url9'); ?>">
        </input>
        Picture:
        <input name="logo-img9" id="logo-img9" size="35" value="<?php echo get_option('logo-img9'); ?>">
        </input>
      </div>
      <br />
      10. Logo:<br />
      <div style="margin:0;padding:0;"> URL:
        <input name="logo-url10" id="logo-url10" size="35" value="<?php echo get_option('logo-url10'); ?>">
        </input>
        Picture:
        <input name="logo-img10" id="logo-img10" size="35" value="<?php echo get_option('logo-img10'); ?>">
        </input>
      </div>
      11. Logo:<br />
      <div style="margin:0;padding:0;"> URL:
        <input name="logo-url11" id="logo-url11" size="35" value="<?php echo get_option('logo-url11'); ?>">
        </input>
        Picture:
        <input name="logo-img11" id="logo-img11" size="35" value="<?php echo get_option('logo-img11'); ?>">
        </input>
      </div>
      <br />
      12. Logo:<br />
      <div style="margin:0;padding:0;"> URL:
        <input name="logo-url12" id="logo-url2" size="35" value="<?php echo get_option('logo-url12'); ?>">
        </input>
        Picture:
        <input name="logo-img12" id="logo-img12" size="35" value="<?php echo get_option('logo-img12'); ?>">
        </input>
      </div>
      <br />
      13. Logo:<br />
      <div style="margin:0;padding:0;"> URL:
        <input name="logo-url13" id="logo-url13" size="35" value="<?php echo get_option('logo-url13'); ?>">
        </input>
        Picture:
        <input name="logo-img13" id="logo-img13" size="35" value="<?php echo get_option('logo-img13'); ?>">
        </input>
      </div>
      <br />
      14. Logo:<br />
      <div style="margin:0;padding:0;"> URL:
        <input name="logo-url14" id="logo-url14" size="35" value="<?php echo get_option('logo-url14'); ?>">
        </input>
        Picture:
        <input name="logo-img14" id="logo-img14" size="35" value="<?php echo get_option('logo-img14'); ?>">
        </input>
      </div>
      <br />
      15. Logo:<br />
      <div style="margin:0;padding:0;"> URL:
        <input name="logo-url15" id="logo-url5" size="35" value="<?php echo get_option('logo-url15'); ?>">
        </input>
        Picture:
        <input name="logo-img15" id="logo-img15" size="35" value="<?php echo get_option('logo-img15'); ?>">
        </input>
      </div>
      <br />
      16. Logo:<br />
      <div style="margin:0;padding:0;"> URL:
        <input name="logo-url16" id="logo-url16" size="35" value="<?php echo get_option('logo-url16'); ?>">
        </input>
        Picture:
        <input name="logo-img16" id="logo-img16" size="35" value="<?php echo get_option('logo-img16'); ?>">
        </input>
      </div>
      <br />
      17. Logo:<br />
      <div style="margin:0;padding:0;"> URL:
        <input name="logo-url17" id="logo-url17" size="35" value="<?php echo get_option('logo-url17'); ?>">
        </input>
        Picture:
        <input name="logo-img17" id="logo-img17" size="35" value="<?php echo get_option('logo-img17'); ?>">
        </input>
      </div>
      <br />
      18. Logo:<br />
      <div style="margin:0;padding:0;"> URL:
        <input name="logo-url18" id="logo-url18" size="35" value="<?php echo get_option('logo-url18'); ?>">
        </input>
        Picture:
        <input name="logo-img18" id="logo-img18" size="35" value="<?php echo get_option('logo-img18'); ?>">
        </input>
      </div>
      <br />
      19. Logo:<br />
      <div style="margin:0;padding:0;"> URL:
        <input name="logo-url19" id="logo-url19" size="35" value="<?php echo get_option('logo-url19'); ?>">
        </input>
        Picture:
        <input name="logo-img19" id="logo-img19" size="35" value="<?php echo get_option('logo-img19'); ?>">
        </input>
      </div>
      <br />
      20. Logo:<br />
      <div style="margin:0;padding:0;"> URL:
        <input name="logo-url20" id="logo-url20" size="35" value="<?php echo get_option('logo-url20'); ?>">
        </input>
        Picture:
        <input name="logo-img20" id="logo-img20" size="35" value="<?php echo get_option('logo-img20'); ?>">
        </input>
      </div>
      <br />
      <input type="hidden" name="action" value="update" />
      <input type="hidden" name="page_options" value="logo-url1, logo-img1, logo-url2, logo-img2, logo-url3, logo-img3, logo-url4, logo-img4, logo-url5, logo-img5, logo-url6, logo-img6,logo-url7, logo-img7,logo-url8, logo-img8,logo-url9, logo-img9,logo-url10, logo-img10,logo-url11, logo-img11, logo-url12, logo-img12, logo-url13, logo-img13, logo-url14, logo-img14, logo-url15, logo-img15, logo-url16, logo-img16,logo-url17, logo-img17,logo-url18, logo-img18,logo-url19, logo-img19,logo-url20, logo-img20" />
    </fieldset>
    <p class="submit">
      <input type="submit" name="Submit" value="<?php _e('Update Options') ?>" />
    </p>
  </form>
</div>
