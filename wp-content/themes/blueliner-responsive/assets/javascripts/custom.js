jQuery(document).ready(function() {
                
    // Initiate WOW for animate.css
    new WOW().init();

    // Header menu Search button
    jQuery("#search-btn").click(function() {
        jQuery('.nav-search').fadeToggle(750);
        //jQuery(this).hide();
    });
    
    // Digit counter
    jQuery(".counter").countimator();
    
    // Footer Tabs animation
    jQuery("#btn-location").click(function() {
        jQuery( "#explore-location" ).addClass( "animated fadeIn" );
        jQuery( "#explore-location address" ).addClass( "animated slideInUp" );
        jQuery( "#explore-website" ).removeClass( "animated fadeIn" );
        jQuery( "#explore-website ul" ).removeClass( "animated slideInUp" );
    });
    jQuery("#btn-website").click(function() {
        jQuery( "#explore-website" ).addClass( "animated fadeIn" );
        jQuery( "#explore-website ul" ).addClass( "animated slideInUp" );
        jQuery( "#explore-location" ).removeClass( "animated fadeIn" );
        jQuery( "#explore-location address" ).removeClass( "animated slideInUp" );
    });
    
    // Portfolio page (Project) - Toggle menu
    var theToggle = document.getElementById('toggle');
    // hasClass
    function hasClass(elem, className) {
        return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
    }
    // addClass
    function addClass(elem, className) {
        if (!hasClass(elem, className)) {
            elem.className += ' ' + className;
        }
    }
    // removeClass
    function removeClass(elem, className) {
            var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
            if (hasClass(elem, className)) {
            while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
                newClass = newClass.replace(' ' + className + ' ', ' ');
            }
            elem.className = newClass.replace(/^\s+|\s+$/g, '');
        }
    }
    // toggleClass
    function toggleClass(elem, className) {
            var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
        if (hasClass(elem, className)) {
            while (newClass.indexOf(" " + className + " ") >= 0 ) {
                newClass = newClass.replace( " " + className + " " , " " );
            }
            elem.className = newClass.replace(/^\s+|\s+$/g, '');
        } else {
            elem.className += ' ' + className;
        }
    }
    theToggle.onclick = function() {
       toggleClass(this, 'on');
       return false;
    }
    
    // Portfolio page (Project) - Tooltip
    jQuery('[data-toggle="tooltip"]').tooltip();

});

jQuery(window).load(function() {
    
    //ISOTOPE  PLUGIN SCRIPT FOR FILTER FUCNTIONALITY
    var $container = jQuery('#portfolio-items').isotope({
        itemSelector : '.item',
        isFitWidth: true
    });
    jQuery(window).smartresize(function(){
        $container.isotope({
            columnWidth: '.col-xs-12 .col-sm-6 .col-md-3 .col-md-4'
        });
    });
    $container.isotope({ filter: '*' });
    // filter items on button click
    jQuery('#portfolio-filter').on( 'click', 'a', function() {
        var filterValue = jQuery(this).attr('data-filter');
        $container.isotope({ filter: filterValue });
    });    
    jQuery("#portfolio #portfolio-filter a").click(function() {
        jQuery(this).addClass('active').siblings().removeClass('active');
    });
    
    // Portfolio page - filters
    jQuery("#portfolio-main #portfolio-filter li").click(function() {
        jQuery(this).addClass('active').siblings().removeClass('active');
    });    
    jQuery("#portfolio-filter .dropdown").hover(            
    function() {
        jQuery('#portfolio-items').css('z-index','-10');              
    },
    function() {
        jQuery('#portfolio-items').css('z-index','0');               
    });
    
    // Instagram content form API
    var button = jQuery('<div>').append(jQuery('.sbi_follow_btn').clone()).remove().html();
    jQuery("p.ins-button").html(button);
    var instagram_button = jQuery(".sbi_follow_btn").html();
    document.getElementById("insta-button").innerHTML = instagram_button;
    
    var html = jQuery('<div>').append(jQuery('.sbi_photo_wrap').clone()).remove().html();
    //alert(html);
    //document.write(html);
    jQuery("p.ins-content").html(html);
    var img1 = jQuery(".sbi_photo_wrap:nth-child(1)").html();
    var img2 = jQuery(".sbi_photo_wrap:nth-child(8)").html();
    var img3 = jQuery(".sbi_photo_wrap:nth-child(3)").html();
    var img4 = jQuery(".sbi_photo_wrap:nth-child(4)").html();
    var img5 = jQuery(".sbi_photo_wrap:nth-child(5)").html();
    var img6 = jQuery(".sbi_photo_wrap:nth-child(6)").html();
    var img7 = jQuery(".sbi_photo_wrap:nth-child(7)").html();
    document.getElementById("img1").innerHTML = img1;
    document.getElementById("img2").innerHTML = img2;
    document.getElementById("img3").innerHTML = img3;
    document.getElementById("img4").innerHTML = img4;
    document.getElementById("img5").innerHTML = img5;
    document.getElementById("img6").innerHTML = img6;
    document.getElementById("img7").innerHTML = img7;
});
