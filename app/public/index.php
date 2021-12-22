<?php

use app\core\Application;
use app\core\Router;

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Application();

$app->router->get('/', function () {
    return 'Hello World';
});

$app->router->get('/contact', function () {
    return 'Contact';
});

$app->router->get('/users', function () {
    return 'Users';
});

$app->run();