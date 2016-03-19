<?php

require_once __DIR__ . '/../vendor/autoload.php';


$router = new \Respect\Rest\Router();

$router->get('/', function (){
    return 'Hey there!';
});

$router->get('/*', function ($name) {
    return "Who are {$name}?";
});

$router->get('/random', 'Experience\Controller\RandomController');