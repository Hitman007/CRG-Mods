<?php
/*
Plugin Name: CRG Mods Remove Links
Plugin URI: http://customrayguns.com
Description: Part of CRG Mods, removes the "Links" from the admin sidebar
Version: 1.0
Author: Custom Ray Guns
Author URI: http://customrayguns.com
Text Domain: CRG_Mods
*/

add_action( 'admin_menu', 'removeLinksFromAdminMenu' );
 
function removeLinksFromAdminMenu() {
     remove_menu_page('link-manager.php');
}
?>
