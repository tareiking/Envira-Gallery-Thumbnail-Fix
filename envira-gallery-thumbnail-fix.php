<?php
/*
Plugin Name: Envira Gallery Thumbnail Fix
Version: 0.1
Description: Fixes a thumbnail display issue with CSS that happens when viewing galleries in the admin panel.
Author: Tarei King
Author URI: twitter.com/tareiking
Plugin URI: tareiking.com
Text Domain: envira-gallery-thumbnail-fix
*/

/* Todo:
 - check for envira gallery
 - deactivate and prompt user if not
 - actually change the thumbnail src requested
*/

/**
 * tk_envira_thumb_fix 
 * 
 * Loads the stylesheet with WordPress eneque that is only loaded when in the admin area
 * @return void
 **/

function tk_envira_thumb_fix() {
	wp_enqueue_style( 'tk_envira_style', plugin_dir_url(__FILE__) . '/styles.css' , null, '1.0', '' );
}

add_action( 'admin_init', 'tk_envira_thumb_fix' );