<?php

use Mervy\Kurama\library\View;

ini_set('display_errors', 1);

require "../vendor/autoload.php";

$url = $_SERVER['REQUEST_URI'];

$routes =
    [
        '/' => 'home',
        '/services' => 'services',
        '/dashboard' => 'dashboard'
    ];

$datas = [];    

if (array_key_exists($url, $routes)) {
    //Se existe a rota na lista acima, inclui ela
    $datas = ['title' => $routes[$url]];
    View::render($routes[$url], $datas);
} else {
    View::render('notFound', $datas);
}
