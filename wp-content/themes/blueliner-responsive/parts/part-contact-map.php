<?php
/**
 * Contact maps
 */
?>

<?php
// Start the loop.
while ( have_posts() ) : the_post(); ?>
<section id="contact-page">
            
    <div class="container">
        
        <div class="heading wow fadeInUp">
            <h3>Contact Us</h3>
            <span>Our philosophy and expertise are best represented by our work.</span>
            <div class="heading-border"></div>
        </div>
        
        <div class="row">
            <div class="col-md-9">
              <?php the_content(); ?>
            </div>
            <div class="col-md-3 text-right">
                <h4>Headquarters</h4>
                <address>
                    <strong>Blueliner, LLC</strong><br>
                    <?php
                    $contact_address = blr_get_option( 'contact_address' );  ?>
                    <?php echo $contact_address; ?>
                </address>
                <p>
                    <strong>Hours of Operation</strong><br>
                    24/7 We Don't Sleep<br>
                    But If You Get Our Voicemail,<br>
                    Leave a Message
                </p>
            </div>
        </div>
        
    </div>

    <div class="container-fluid">
        <div id="map-canvas"></div>
    </div>
    
</section>
<?php
endwhile; ?>