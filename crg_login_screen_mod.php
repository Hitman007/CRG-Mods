<?php
/*
Plugin Name: CRG Mods Login Screen Mod
Plugin URI: http://customrayguns.com
Description: Part of CRG Mods, login screen changes
Version: 1.0
Author: Custom Ray Guns
Author URI: http://customrayguns.com
Text Domain: CRG_Mods
*/

function change_login_image() {
$pic_url = plugins_url( 'images/acme_disintegrater.gif', __FILE__ );
$login_logo_output = <<<llo
<style>
body.login #login h1 a {
background: url('$pic_url') 8px 0 no-repeat transparent;
height:308px;
width:500px;}
#login{width: 500px !important;}
</style>
llo;
echo $login_logo_output;
}
add_action("login_head", "change_login_image");