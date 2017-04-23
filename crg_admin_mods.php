<?php
/*
Plugin Name: CRG Mods Admin Changes
Plugin URI: http://customrayguns.com
Description: Part of CRG Mods, admin area changes
Version: 2.0
Author: Custom Ray Guns
Author URI: http://customrayguns.com
Text Domain: CRG_Mods
*/

//removes the wordpress logo in the top left:
function annointed_admin_bar_remove() {
        global $wp_admin_bar;

        /* Remove their stuff */
        $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);


//removes the contextual help:
add_filter( 'contextual_help', 'mytheme_remove_help_tabs', 999, 3 );
function mytheme_remove_help_tabs($old_help, $screen_id, $screen){
    $screen->remove_help_tabs();
    return $old_help;
}


//removes screen options
function remove_screen_options($display_boolean, $wp_screen_object){
  $blacklist = array('post.php', 'post-new.php', 'index.php', 'edit.php', 'profile.php');
  if (in_array($GLOBALS['pagenow'], $blacklist)) {
    $wp_screen_object->render_screen_layout();
    $wp_screen_object->render_per_page_options();
    return false;
  } else {
    return true;
  }
}
//add_filter('screen_options_show_screen', 'remove_screen_options', 10, 2);



//changes the bottom right footer
add_filter( 'admin_footer_text', 'my_footer_text' );
add_filter( 'update_footer', 'my_footer_version', 11 ); 
function my_footer_text() {
    return '';
}
function my_footer_version() {
    return 'This site is a <a href = "http://customrayguns.com" target = "_BLANK">Custom Ray Gun <img src = "' . plugin_dir_url( __FILE__ ) . 'images/ray_gun.png" /></a>.';
}




// Change title for login screen
add_filter('login_headertitle', create_function(false,"return 'URL Title';"));

// change url for login screen
add_filter('login_headerurl', create_function(false,"return home_url();"));
?>
