//var j = jQuery.noConflict();
$(document).ready(function() {
                
    // Initiate WOW for animate.css
    new WOW().init();

    // Header menu Search button
//    $("#search-btn").click(function() {
//        $('.nav-search').fadeToggle(100);
//    });
    
    $("#search-btn").click(function () {
        if ($(this).data('name') == 'show') {
            //$('.nav-search').css({"display": "block", "animation-name": "fadeInRight", "width" : "263px"});
            $('.nav-search').css({"display": "block", "animation-name": "fadeInRight", "width" : "263px"});
            $('.navbar-nav > li').css({"animation-name": "fadeInRight"});
            $(this).data('name', 'hide')
        } else {
            $('.nav-search').css({"display": "none", "animation-name": "fadeOutRight", "width" : "0px"});
            $(this).data('name', 'show')
        }
    });
    
    // Digit counter
    $(".counter").countimator();
    
//    $('ul.nav-tabs li img').hover(
//        function(){
//            $(this).css('opacity','0');
//            var a = $(this).attr('alt');
//            $(this).parent().append('<div class="title">' + a + '</div>');
//        },
//        function(){
//            $(this).css('opacity','1');
//            $(this).next().remove('.title');
//        }
//    );
    
    //ISOTOPE  PLUGIN SCRIPT FOR FILTER FUCNTIONALITY
    var $container = $('#portfolio-items').isotope({
        itemSelector : '.item',
        isFitWidth: true
    });
    $(window).smartresize(function(){
        $container.isotope({
            columnWidth: '.col-xs-12 .col-sm-6 .col-md-3 .col-md-4'
        });
    });
    $container.isotope({ filter: '*' });
    // filter items on button click
    $('#portfolio-filter').on( 'click', 'a', function() {
        var filterValue = $(this).attr('data-filter');
        $container.isotope({ filter: filterValue });
    });
    
    $("#portfolio #portfolio-filter a").click(function() {
        $(this).addClass('active').siblings().removeClass('active');
    });
    
    // Footer Tabs animation
    $("#btn-location").click(function() {
        $( "#explore-location" ).addClass( "animated fadeIn" );
        $( "#explore-location address" ).addClass( "animated slideInUp" );
        $( "#explore-website" ).removeClass( "animated fadeIn" );
        $( "#explore-website ul" ).removeClass( "animated slideInUp" );
    });
    $("#btn-website").click(function() {
        $( "#explore-website" ).addClass( "animated fadeIn" );
        $( "#explore-website ul" ).addClass( "animated slideInUp" );
        $( "#explore-location" ).removeClass( "animated fadeIn" );
        $( "#explore-location address" ).removeClass( "animated slideInUp" );
    });
    
    $(".item-hover").click(function(){
        var img = $(this).find("img"), // select images inside .container
            len = img.length, // check if they exist
            arr = [];
        if( len > 0 ){
            // images found, get id
            img.each(function(){
                arr.push( $(this).attr("id") ); 
            });
            alert(arr);
        } else {
            // images not found
        }
    });
    
    //var html = $('<div>').append($('.item-hover').clone()).remove().html();
    //alert(html);
    
//    $("#portfolio-filter").hover(            
//    function() {
//        $('#portfolio-main .item').css('z-index','-10');
//    },
//    function() {
//        $('#portfolio-main .item').css('z-index','0');
//    });
    
    $("#portfolio-main #portfolio-filter li").click(function() {
        $(this).addClass('active').siblings().removeClass('active');
    });
    
    $("#portfolio-filter .dropdown").hover(            
    function() {
        $('#portfolio-items').css('z-index','-10');
        //$('#portfolio-main #portfolio-filter ul li a.dropdown-toggle').css('background-color','#000000');
        //$('#portfolio-filter .dropdown-menu', this).stop( true, true ).fadeIn("fast");
        //$(this).toggleClass('open');
        //$('b', this).toggleClass("caret caret-up");                
    },
    function() {
        $('#portfolio-items').css('z-index','0');
        //$('#portfolio-main #portfolio-filter ul li a.dropdown-toggle').css('background-color','#ffffff');
        //$('#portfolio-filter .dropdown-menu', this).stop( true, true ).fadeOut("fast");
        //$(this).toggleClass('open');
        //$('b', this).toggleClass("caret caret-up");                
    });
    
    var clientId = '1594299136';
    $(".instagram").instagram({
    hash: '',
    show: 10,
    clientId: clientId
    });

});

//$(window).load(function() {
//   var html = $('<div>').append($('.item-hover').clone()).remove().html();
//    alert(html);
//});