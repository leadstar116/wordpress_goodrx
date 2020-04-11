<?php // GoodRXPlugin - Register Settings

// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}


// register plugin settings
function goodrxplugin_register_settings() {

	/*

	register_setting(
		string   $option_group,
		string   $option_name,
		callable $sanitize_callback = ''
	);

	*/

	register_setting(
		'goodrxplugin_options',
		'goodrxplugin_options',
		'goodrxplugin_callback_validate_options'
	);

	/*

	add_settings_section(
		string   $id,
		string   $title,
		callable $callback,
		string   $page
	);

	*/

	add_settings_section(
		'goodrxplugin_section_api',
		'API Settings',
		'goodrxplugin_callback_section_api',
		'goodrxplugin'
	);

	/*

	add_settings_field(
    string   $id,
		string   $title,
		callable $callback,
		string   $page,
		string   $section = 'default',
		array    $args = []
	);

	*/

	add_settings_field(
		'api_url',
		'API URL',
		'goodrxplugin_callback_field_text',
		'goodrxplugin',
		'goodrxplugin_section_api',
		[ 'id' => 'api_url', 'label' => 'API Url' ]
	);

}
add_action( 'admin_init', 'goodrxplugin_register_settings' );
