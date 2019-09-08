<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Marys Weird Page',
        'pretty_uri' => false,
        'site_url' => 'https://phpdemtest.herokuapp.com',
        'nav_menu' => [
            '' => 'Home',
            'about-me' => 'About Me',
            'lemon-pasta' =>  'Lemon Pasta'
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}
