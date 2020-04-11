<?php // GoodRX - Settings Callbacks



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}



// callback: validate options
function myplugin_callback_validate_options( $input ) {

	// todo: add callback functionality..

	return $input;

}



// callback: api section
function myplugin_callback_section_api() {

	echo '<p>These settings enable you to customize the WP Login screen.</p>';

}



// callback: text field
function myplugin_callback_field_text( $args ) {

	// todo: add callback functionality..

	echo 'This will be a text field.';

}



