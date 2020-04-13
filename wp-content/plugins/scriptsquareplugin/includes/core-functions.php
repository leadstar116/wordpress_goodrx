<?php // ScriptSquare - Core Functionality



// disable direct file access
if (!defined('ABSPATH')) {

    exit;
}



// Get Drug By Name
function scriptsquareplugin_get_drug_by_name($content)
{
    global $post;
    // only edit specific post types
    $types = array('drug');

    if ($post && in_array($post->post_type, $types, true)) {
        $options = get_option('scriptsquareplugin_options', scriptsquareplugin_options_default());

        if (isset($options['api_url']) && !empty($options['api_url'])) {

            $url = esc_url($options['api_url']);

            $args = [
                'headers' => array(
                    'Content-Type' => 'application/json',
                    'X-Api-Key' => 'fIlGvd7DPhahCBPT9HjLz8KhfXdraHWD9bJ6y4W1'
                )
            ];
            $request = wp_remote_get($url . '/drugs?drugname=""&includestrength=false', $args);

            if (is_wp_error($request)) {
                return false; // Bail early
            }

            $body = wp_remote_retrieve_body($request);

            $data = json_decode($body);

            print_r($data);
            $content = $data->message;
        }
    }

    return $content;
}

// add the filter when main loop starts
add_action('loop_start', function (WP_Query $query) {
    if ($query->is_main_query()) {
        add_filter('the_content', 'scriptsquareplugin_get_drug_by_name', -10);
    }
});

// remove the filter when main loop ends
add_action('loop_end', function (WP_Query $query) {
    if (has_filter('the_content', 'scriptsquareplugin_get_drug_by_name')) {
        remove_filter('the_content', 'scriptsquareplugin_get_drug_by_name');
    }
});
