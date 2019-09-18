<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once('vendor/AltoRouter.php');

$router = new AltoRouter();

$router->map( 'GET', '/', function() {
    require __DIR__ . '/views/index.php';
});
$router->map( 'GET', '/about', function() {
    require __DIR__ . '/views/about.php';
});
$router->map( 'GET', '/photo', function() {
    require __DIR__ . '/views/photo.php';
});
$router->map( 'GET', '/contact', function() {
    require __DIR__ . '/views/contact.php';
});

// match current request url
$match = $router->match();

// call closure or throw 404 status
if( is_array($match) && is_callable( $match['target'] ) ) {
    call_user_func_array( $match['target'], $match['params'] );
} else {
    // no route was matched
    header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}