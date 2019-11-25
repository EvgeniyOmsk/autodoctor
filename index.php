<?php

//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);

require_once('vendor/AltoRouter.php');

$router = new AltoRouter();

require __DIR__ . '/views/__scriptsBack.php';

function main($action) {
    global $lang;
    global $l;

    require __DIR__ . '/views/'.$action.'.php';
}

$router->map( 'GET', '/', function() {
    main('index');
});
$router->map( 'GET', '/about', function() {
    main('about');
});
$router->map( 'GET', '/photo', function() {
    main('photo');
});
$router->map( 'GET', '/contact', function() {
    main('contact');
});

$router->map( 'GET', '/ru', function() {
    main('index');
});
$router->map( 'GET', '/ru/', function() {
    main('index');
});
$router->map( 'GET', '/ru/about', function() {
    main('about');
});
$router->map( 'GET', '/ru/photo', function() {
    main('photo');
});
$router->map( 'GET', '/ru/contact', function() {
    main('contact');
});

$router->map( 'GET', '/de', function() {
    main('index');
});
$router->map( 'GET', '/de/', function() {
    main('index');
});
$router->map( 'GET', '/de/about', function() {
    main('about');
});
$router->map( 'GET', '/de/photo', function() {
    main('photo');
});
$router->map( 'GET', '/de/contact', function() {
    main('contact');
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