<?php
/*
Plugin Name: CRG Mods User Fields
Plugin URI: http://customrayguns.com
Description: Part of CRG Mods. Removes some of the dumber user fields, and adds some good ones.
Version: 1.0
Author: Custom Ray Guns
Author URI: http://customrayguns.com
*/

remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );

function hitman007_contactmethods($contactmethods ) {
  // Remove AIM, Yahoo IM, Google Talk/Jabber
  unset($contactmethods['aim']);
  unset($contactmethods['website']);
  //unset($contactmethods['yim']);
  unset($contactmethods['jabber']);
  
  //$contactmethods['phone'] = 'Phone';
  return $contactmethods;
}
add_filter( 'user_contactmethods', 'hitman007_contactmethods');

if ( ! function_exists( 'cor_remove_personal_options' ) ) {
  /**
   * Removes the leftover 'Visual Editor', 'Keyboard Shortcuts' and 'Toolbar' options.
   */
  function cor_remove_personal_options( $subject ) {
    $subject = preg_replace( '#<h3>Personal Options</h3>.+?/table>#s', '', $subject, 1 );
    return $subject;
  }

  function cor_profile_subject_start() {
    ob_start( 'cor_remove_personal_options' );
  }

  function cor_profile_subject_end() {
    ob_end_flush();
  }
}
add_action( 'admin_head-user-edit.php', 'cor_profile_subject_start' );
add_action( 'admin_footer-user-edit.php', 'cor_profile_subject_end' );


?>
