<?php

require '../vendor/autoload.php';

use Portfolio\Routing\Application;

$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

$app = new Application(dirname(__DIR__));

$app->router->get('/','home');
$app->router->get('/about', 'about');

$app->run();

// EOF