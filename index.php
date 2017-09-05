<?php

// require 'inc/configuration.php';
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

$app->get('/produtos', function() {

    //require_once("/inc/configuration.php");

    $sql = new Sql();

    $data = $sql->select("SELECT * FROM tb_produtos where preco_promorcional > 0 order by preco_promorcional desc limit 3;");

    echo json_encode($data);

});

$app->run();
