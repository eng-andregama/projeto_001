<?php

// require 'inc/configuration.php';
require 'inc/Slim-2.x/Slim/Slim.php'; /*Alterado o caminho da classe para inc/Slim-2.x/... */

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// GET route index
$app->get(
    '/',
    function () {
        require_once ("view/index.php");
    }
);

// GET route videos
$app->get(
    '/videos',
    function () {
        require_once ("view/videos.php");
    }
);

// GET route shop
$app->get(
    '/shop',
    function () {
        require_once ("view/shop.php");
    }
);

// GET route produtos
$app->get('/produtos', function() {

    include_once("inc/configuration.php");

    $sql = new Sql();

    $data = $sql->select("SELECT * FROM tb_produtos where preco_promorcional > 0 order by preco_promorcional desc limit 3;");

    echo json_encode($data);

});

$app->run();
