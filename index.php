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

    $data = $sql->select("

      SELECT
      tb_produtos.id_prod,
      tb_produtos.nome_prod_curto,
      tb_produtos.nome_prod_longo,
      tb_produtos.codigo_interno,
      tb_produtos.id_cat,
      tb_produtos.preco,
      tb_produtos.peso,
      tb_produtos.largura_centimetro,
      tb_produtos.altura_centimetro,
      tb_produtos.quantidade_estoque,
      tb_produtos.preco_promorcional,
      tb_produtos.foto_principal,
      tb_produtos.visivel,
      cast(avg(review) as dec(10,2)) as media,
      count(id_prod) as total_reviews
      FROM tb_produtos
      INNER JOIN tb_reviews USING(id_prod)
      GROUP BY
      tb_produtos.id_prod,
      tb_produtos.nome_prod_curto,
      tb_produtos.nome_prod_longo,
      tb_produtos.codigo_interno,
      tb_produtos.id_cat,
      tb_produtos.preco,
      tb_produtos.peso,
      tb_produtos.largura_centimetro,
      tb_produtos.altura_centimetro,
      tb_produtos.quantidade_estoque,
      tb_produtos.preco_promorcional,
      tb_produtos.foto_principal,
      tb_produtos.visivel
      LIMIT 4;"

     );

    foreach ($data as &$produto) {
      $preco = $produto['preco'];
      $centavos = explode(".", $preco); // Para o php encontrar os centavos, utiliza-se o ponto (.) como referência.
      $produto['preco'] = number_format($preco, 0,",",".");
      $produto['centavos'] = end($centavos);
      $produto['parcelas'] = 10;
      $produto['parcela'] = number_format($preco/$produto['parcelas'], 2, ",", ".");
      $produto['total'] = number_format($preco, 2, ",", ".");

    }

    echo json_encode($data);

});

$app->get('/produtos-mais-buscados', function() {

    include_once("inc/configuration.php");

    $sql = new Sql();

    $data = $sql->select("SELECT * FROM tb_produtos LIMIT 3;");

    foreach ($data as &$produto) {
      $preco = $produto['preco'];
      $centavos = explode(".", $preco); // Para o php encontrar os centavos, utiliza-se o ponto (.) como referência.
      $produto['preco'] = number_format($preco, 0,",",".");
      $produto['centavos'] = end($centavos);
      $produto['parcelas'] = 10;
      $produto['parcela'] = number_format($preco/$produto['parcelas'], 2, ",", ".");
      $produto['total'] = number_format($preco, 2, ",", ".");

    }

    echo json_encode($data);

});
$app->run();
