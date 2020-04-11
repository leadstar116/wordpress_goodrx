<?php
/*
Plugin Name:  GoodRXPlugin
Description:  Custom plugin for GoodRX site.
Plugin URI:   https://profiles.wordpress.org/leadstar116/
Author:       Leadstar116
Version:      1.0
Text Domain:  goodrxplugin
Domain Path:  /languages
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
*/


// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

// if admin area
if ( is_admin() ) {

	// include dependencies
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-page.php';

}



