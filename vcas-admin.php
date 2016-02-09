<?php
/**
 * This file is used to hook all action.
 * Adds custom shortcode.
 */

// Including all shorcodes files
$dir = plugin_dir_path( __FILE__ ) . 'shortcodes/';
$files = scandir( $dir, 1 );
foreach ( $files as $file ) {
	if ( '.' !== $file && '..' !== $file ) {
		if ( is_file( plugin_dir_path( __FILE__ ) . 'shortcodes/' . $file ) ) {
			require_once plugin_dir_path( __FILE__ ) . 'shortcodes/' . $file;
		}
	}
}
