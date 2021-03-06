<?php

use Router\Router;

require '../vendor/autoload.php';

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER["SCRIPT_NAME"]) . DIRECTORY_SEPARATOR);
define("DB_NAME", "myapp");
define("DB_HOST", "localhost:3306");
define("DB_USER", "root");
define("DB_PASS", "Jean100498753.");

if (isset($_GET["url"]))
{
    $router = new Router($_GET["url"]);

    $router->get('/', 'App\Controllers\BlogController@welcome');
    $router->get('/posts', 'App\Controllers\BlogController@index');
    $router->get('/posts/:id', 'App\Controllers\BlogController@show');

    $router->run();
}

