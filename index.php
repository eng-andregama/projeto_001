<?php

require 'inc/Slim-2.x/Slim/Slim.php'; /*Alterado o caminho da classe para inc/Slim-2.x/... */

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// GET route
$app->get(
    '/',
    function () {
        require_once ("view/index.php");
    }
);

// GET route
$app->get(
    '/videos',
    function () {
        require_once ("view/videos.php");
    }
);

// GET route
$app->get(
    '/shop',
    function () {
        require_once ("view/shop.php");
    }
);

$app->run();
