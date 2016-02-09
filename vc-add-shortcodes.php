<?php
/*
Plugin Name: Visual Composer Addon for adding custom shortcodes
Plugin URI: https://github.com/marutim/vc-add-shortcodes
Description: A custom add on plugin to add custom shortcodes to the visual composer plugin.
Version: 1.0
Author: Maruti Mohanty
Author URI: http://www.sourcexpress.com/about/
*/

// don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( 'You shouldnt be here' );
}

/**
 * Function when plugin is activated
 *
 * @param void
 *
 * @return void
 */
function vcas_plugin_active(){
	// checking if visual composer is active
	if ( ! is_plugin_active( 'js_composer/js_composer.php' ) ) {
		wp_die( 'Please activate Visual Composer, and try again' );
	}
}
register_activation_hook( __FILE__ , 'vcas_plugin_active' );

//Including file that manages all template
require_once plugin_dir_path( __FILE__ ) . 'vcas-admin.php';