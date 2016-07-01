<?php

/**
 * @author madars.bitenieks
 * @copyright 2011
 */
 
// Shortcode blockquote
function blockquote( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'align' => ''
            
        ), $atts);
        
   return'<blockquote class="'. $atts[align] .'">' . do_shortcode($content) . '</blockquote>';
}
add_shortcode('blockquote', 'blockquote');

// Shortcode dropcaps
function dropcaps( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'style' => ''
            
        ), $atts);
        
   return'<div class="dropcaps '. $atts[style] .'">' . do_shortcode($content) . '</div>';
}
add_shortcode('dropcaps', 'dropcaps');

function button($atts, $content = null ){
    $atts = shortcode_atts(
        array(
            'id' => '',
            'size' => 'medium',
            'style_class' => '',
            'color' => 'black',
            'bgcolor' => '',
            'textcolor' => '',
            'align' => '',
            'full' => '',
            'icone' => '',
            'url' => ''
        ), $atts);
        
        if($atts[full] == 'true'){
		$full = 'full';
        }
        if($atts[size]){
		$button_size = $atts[size];
        }
        if($atts[textcolor]){
        $style_css = '<style type="text/css">.link, .link span h1 { color: '.$atts[textcolor].'!important;}</style>';
        }
        if($atts[color]){
		$button_color = $atts[color];
        }
        if($atts[bgcolor]){
		$bgcolor = 'style="background-color:' .$atts[bgcolor]. '!important;"';
        }
        if($atts[textcolor]){
		$textcolor = 'style="color:' .$atts[textcolor]. '!important;"';
        }
        if($atts[icone]){
		$icone = '<img src="' .$atts[icone]. '"/>';
        }
        if($atts[align]){
		$textalign = 'align_' .$atts[align];
        }
        return 
        ''.$style_css.'<a id="'. $atts[id] .'" class="link '. $button_size . ' '. $textalign . ' '. $button_color . ' '. $atts[style_class] . ' '. $full . ' " '. $bgcolor .' href="'. $atts[url] .'"><span '. $textcolor . '>'.$icone.''. $content .'</span></a>';
 }
 add_shortcode('button', 'button');
 
function twitter( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'title' => '',
            'rows' => '5',
            'user' => '',
        ), $atts);
        
   return '<div class="twitter_widget">
   
   <div class="menu_categories">
    <a href="http://twitter.com/'. $atts[user] .'" id="twitter-link" target="_blank"><h2>'. $atts[title] .'</h2></a>
    <ul id="twitter_update_list"></ul>
    
    
    <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
    <script type="text/javascript" src="http://twitter.com/statuses/user_timeline/'. $atts[user] .'.json?callback=twitterCallback2&count='. $atts[rows] .'"></script>
    <!-- END Twitter Widget -->
   </div>
   </div>';
}
add_shortcode('twitter', 'twitter');

function contactform( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'title' => 'Contact Form',
            'rows' => '10',
            'email' => '',
            'value' => 'Send Message'
        ), $atts);
        
   return 
   
    '<h2>'. $atts[title] .'</h2>
    <div class="widget_chortcode">
        <div id="contact_form_holder_2">
                <form action="'. get_bloginfo("template_url") .'/includes/send_email.php" method="post" id="contact_form">
                
                <div><label>Name:</label><input value="" type="text" name="name" id="name"></div>
                
                <div class="clear"></div>
                <div><label>E-mail:</label><input type="text2" name="email" id="email"></div>
                <input type="text" name="email_to" style="display: none;" value="'. $atts[email] .'" id="subject">
                <input type="text" name="subject" style="display: none;" value="Contact Form" id="subject">
                <div><textarea name="message" rows="'. $atts[rows] .'" id="message"></textarea></div>
                
                
                
                <input type="submit"  id="send_message" value="'. $atts[value] .'">
                <div class="clear"></div>
                <div id="mail_success" class="success"><img src="'. get_bloginfo("template_url").'/images/success.png"> Thank You!</div>
                <div id="mail_fail" class="error"><img src="'. get_bloginfo("template_url").'/images/error.png"> Sorry! Try later.</div>
                
                </form>  
            </div>
        </div>';
}
add_shortcode('contactform', 'contactform');

function flickr( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'title' => 'Flickr',
            'images' => '10',
            'display' => 'random',
            'size' => 's',
            'layout' => 'x',
            'source' => 'user',
            'id' => ''
        ), $atts);
        
   return 
   
    '<h2>'. $atts[title] .'</h2>
    <div class="widget_chortcode">
        <div id="flickr">
            <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count='. $atts[images] .'&amp;display='. $atts[display] .'&amp;size='. $atts[size] .'&amp;layout='. $atts[layout] .'&amp;source='. $atts[source] .'&amp;user='. $atts[id] .'"></script>
        </div>
        <div class="clear"></div>
        </div>';
}
add_shortcode('flickr', 'flickr');

function contact_info( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'title' => '',
            'phone' => '',
            'email' => '',
            'address' => '',
            'name' => ''
        ), $atts);
        
   return 
   
    '<h2>'. $atts[title] .'</h2> 
        <div class="contact_info_wrap"> 
        <p><span class="icon_text icon_pen gray">'. $atts[phone] .'</span></p> 
        <p><a href="mailto:'. $atts[email] .'" class="icon_text icon_mail gray">'. $atts[email] .'</a></p> 
        <p><span class="icon_text icon_home gray">'. $atts[address] .'</span></p>
        <p><span class="icon_text icon_person gray">'. $atts[name] .'</span></p> 
    </div> ';
}

add_shortcode('contact_info', 'contact_info');

function icon_text( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'type' => '',
            'color' => ''
            
        ), $atts);
        
   return'<span class="icon_text '. $atts[type] .' '. $atts[color] .'">' . do_shortcode($content) . '</span>';
}
add_shortcode('icon_text', 'icon_text');

function icon_link( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'type' => '',
            'url' => '',
            'color' => ''
            
        ), $atts);
        
   return'<a class="icon_text '. $atts[type] .' '. $atts[color] .'" href="'. $atts[url] .'">' . do_shortcode($content) . '</a>';
}
add_shortcode('icon_link', 'icon_link');

function list_icon( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'type' => '',
            'color' => ''
            
        ), $atts);
        
   return'<div class="list_icon '. $atts[type] .' '. $atts[color] .'">' . do_shortcode($content) . '</div>';
}
add_shortcode('list_icon', 'list_icon');

function frame_box( $atts, $content = null ) {
   return '<div class="frame_box">' . do_shortcode($content) . '</div>';
}
add_shortcode('frame_box', 'frame_box');

function toogle( $atts, $content = null ) {
    $atts = shortcode_atts(
        array(
            'title' => ''
            
        ), $atts);
   return '<div class="toogle_section"><div class="toogle_title inactive2"><h3><span class="inactive"></span>'. $atts[title] .'</h3>
        <div class="clear"></div>
        </div>
        <div class="toogle_options">' . do_shortcode($content) . '</div></div>';
}
add_shortcode('toogle', 'toogle');

function note_box( $atts, $content = null ) {
   return '<div class="note_box">' . do_shortcode($content) . '</div>';
}
add_shortcode('note_box', 'note_box');

function succes( $atts, $content = null ) {
   return '<div class="succes_box">' . do_shortcode($content) . '</div>';
}
add_shortcode('succes', 'succes');

function error( $atts, $content = null ) {
   return '<div class="error_box">' . do_shortcode($content) . '</div>';
}
add_shortcode('error', 'error');

function info( $atts, $content = null ) {
   return '<div class="info_box">' . do_shortcode($content) . '</div>';
}
add_shortcode('info', 'info');

function notice( $atts, $content = null ) {
   return '<div class="notice_box">' . do_shortcode($content) . '</div>';
}
add_shortcode('notice', 'notice');

function line_padding( $atts, $content = null ) {
   return '<div class="line_padding">' . do_shortcode($content) . '</div>';
}
add_shortcode('line_padding', 'line_padding');

// Shortcode Info Box Style

function infobox_error( $atts, $content = null ) {
   return '<div class="infobox_error">' . $content . '</div>';
}
add_shortcode('infobox_error', 'infobox_error');

function infobox_info( $atts, $content = null ) {
   return '<div class="infobox_info">' . $content . '</div>';
}
add_shortcode('infobox_info', 'infobox_info');

function infobox_alert( $atts, $content = null ) {
   return '<div class="infobox_alert">' . $content . '</div>';
}
add_shortcode('infobox_alert', 'infobox_alert');

function infobox_download( $atts, $content = null ) {
   return '<div class="infobox_download">' . $content . '</div>';
}
add_shortcode('infobox_download', 'infobox_download');

function infobox_success( $atts, $content = null ) {
   return '<div class="infobox_success">' . $content . '</div>';
}
add_shortcode('infobox_success', 'infobox_success');


// Shortcode Highlight Style

function highlight_yellow( $atts, $content = null ) {
   return '<span class="highlight_yellow">' . $content . '</span>';
}
add_shortcode('highlight_yellow', 'highlight_yellow');

function highlight_red( $atts, $content = null ) {
   return '<span class="highlight_red">' . $content . '</span>';
}
add_shortcode('highlight_red', 'highlight_red');

function highlight_green( $atts, $content = null ) {
   return '<span class="highlight_green">' . $content . '</span>';
}
add_shortcode('highlight_green', 'highlight_green');

function highlight_blue( $atts, $content = null ) {
   return '<span class="highlight_blue">' . $content . '</span>';
}
add_shortcode('highlight_blue', 'highlight_blue');

function highlight_black( $atts, $content = null ) {
   return '<span class="highlight_black">' . $content . '</span>';
}
add_shortcode('highlight_black', 'highlight_black');


// Shortcode Column Style

function one_fourth( $atts, $content = null ) {
   return '<div class="one_fourth">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_fourth', 'one_fourth');

function one_fourth_last( $atts, $content = null ) {
   return '<div class="one_fourth_last">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_fourth_last', 'one_fourth_last');

function one_fifth( $atts, $content = null ) {
    return '<div class="one_fifth">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_fifth', 'one_fifth');

function one_fifth_last( $atts, $content = null ) {
   return '<div class="one_fifth_last">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_fifth_last', 'one_fifth_last');

function one_third( $atts, $content = null ) {
   return '<div class="one_third">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_third', 'one_third');

function one_third_last( $atts, $content = null ) {
   return '<div class="one_third_last">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_third_last', 'one_third_last');

function one_half( $atts, $content = null ) {
    
   return '<div class="one_half">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_half', 'one_half');

function one_half_last( $atts, $content = null ) {
   return '<div class="one_half_last">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_half_last', 'one_half_last');

function two_third( $atts, $content = null ) {
   return '<div class="two_third">' . do_shortcode($content) . '</div>';
}
add_shortcode('two_third', 'two_third');

function two_third_last( $atts, $content = null ) {
   return '<div class="two_third_last">' . do_shortcode($content) . '</div>';
}
add_shortcode('two_third_last', 'two_third_last');

function three_fourth( $atts, $content = null ) {
   return '<div class="three_fourth">' . do_shortcode($content) . '</div>';
}
add_shortcode('three_fourth', 'three_fourth');

function three_fourth_last( $atts, $content = null ) {
   return '<div class="three_fourth_last">' . do_shortcode($content) . '</div>';
}
add_shortcode('three_fourth_last', 'three_fourth_last');

// Shortcode OTHER

function title( $atts, $content = null ) {
   return '<div class="title">' . do_shortcode($content) . '</div>';
}
add_shortcode('title', 'title');

function h2( $atts, $content = null ) {
   return '<h2 class="title_h2">' . do_shortcode($content) . '</h2>';
}
add_shortcode('h2', 'h2');

function top() {
return '<div class="back_to_top"><a href="#" id="back-to-top" >Top</a></div>'; }
add_shortcode('top', 'top');

function line() {
return '<div class="line_shortcut"></div>'; } 
add_shortcode('line', 'line');

function line_zero() {
return '<div class="line_zero"></div>'; } 
add_shortcode('line_zero', 'line_zero');

function clear() {
return '<div class="clear"></div>'; } add_shortcode('clear', 'clear');
add_shortcode('clear', 'clear');

function code( $atts, $content = null ) {
   return '<code class="codess">' . $content . '</code>';
}
add_shortcode('code', 'code');

?>