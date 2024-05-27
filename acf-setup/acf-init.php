<?php


function my_acf_json_load_point($paths) {
    unset($paths[0]);
    $paths[] = plugin_dir_path(__FILE__) . '/acf-init';
    return $paths;
}
add_filter('acf/settings/load_json', 'my_acf_json_load_point');