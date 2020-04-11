<?php // GoodRX - Core Functionality



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}



// Get Drug By Name
function goodrxplugin_get_drug_by_name( $url ) {

	$options = get_option( 'goodrxplugin_options', goodrxplugin_options_default() );

	if ( isset( $options['api_url'] ) && ! empty( $options['api_url'] ) ) {

        $url = esc_url( $options['api_url'] );

        $args = [
            'headers' => array(
                'Content-Type' => 'application/json',
                'X-Api-Key' => 'apikey12345'
            )
        ];
        $request = wp_remote_get($url . '/drugs?drugname=zes&includestrength=false', $args);

        if( is_wp_error( $request ) ) {
            return false; // Bail early
        }

        $body = wp_remote_retrieve_body( $request );

        $data = json_decode( $body );

        if( ! empty( $data ) ) {

            $output = '<ul>';
            foreach( $data->products as $product ) {
                $output .= '<li>';
                $output .= '<a href="' . esc_url( $product->info->link ) . '">' . $product->info->title . '</a>';
                $output .= '</li>';
            }
            $output .= '</ul>';
        }
    }
    return $output;
}
add_filter( 'login_headerurl', 'goodrxplugin_get_drug_by_name' );