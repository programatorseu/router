<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [

    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'
];

function routing($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort()
{
    http_response_code(404);
    require "views/404.view.php";
    die();
}

routing($uri, $routes);
