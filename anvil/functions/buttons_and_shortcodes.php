<?php

//BUTTON SHORTCODE
//ADD BUTTON SHORTCODE TO TINYMCE EDITOR

function button( $atts, $content = 'Click Here' ) {  
    extract(shortcode_atts(array(  
        "url" => 'http://www.google.com'  
    ), $atts));
    return '<a href="'. $url . '" class="button">'.$content.'</a>';  
}  
add_shortcode("button", "button"); 

add_action('init', 'add_button');

function add_button() {  
   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') && get_user_option('rich_editing'))  
   {  
     add_filter('mce_external_plugins', 'add_plugin');  
     add_filter('mce_buttons', 'register_button');  
   }  
}

function register_button($buttons) {  
   array_push($buttons, "button");   
   return $buttons;  
}

function add_plugin($plugin_array) {  
   $plugin_array['button'] = get_bloginfo('template_url').'/js/customcodes.js';  
   return $plugin_array;  
} 