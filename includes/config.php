<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Simple PHP Website',
        'pretty_uri' => false,
        'site_url' => 'https://phpdemtest.herokuapp.com',
        'nav_menu' => [
            '' => 'Home',
            'about-us' => 'About Us', //key value pair
            'contact' =>  'contact',
            'roxanne' =>  'Roxanne'
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}
