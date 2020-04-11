<?php // GoodRX - Settings Callbacks



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}



// callback: validate options
function goodrxplugin_callback_validate_options( $input ) {

	// todo: add callback functionality..

	return $input;

}



// callback: api section
function goodrxplugin_callback_section_api() {

	echo '<p>These settings enable you to customize the API options.</p>';

}



// callback: text field
function goodrxplugin_callback_field_text( $args ) {

	$options = get_option( 'goodrxplugin_options', goodrxplugin_options_default() );

	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';

	$value = isset( $options[$id] ) ? sanitize_text_field( $options[$id] ) : '';

	echo '<input id="goodrxplugin_options_'. $id .'" name="goodrxplugin_options['. $id .']" type="text" size="40" value="'. $value .'"><br />';
	echo '<label for="goodrxplugin_options_'. $id .'">'. $label .'</label>';

}



