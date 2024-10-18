<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require '../vendor/autoload.php';

use Portfolio\Routing\Application;

$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

$app = new Application(dirname(__DIR__));

$app->router->get('/','home');
$app->router->get('/about', 'about');

$app->run();

// EOF