<?php
require 'inc/configuration.php';

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
//Get route

$app->get("/produto-:id_prod", function($id_prod) {

    include_once("inc/configuration.php");

    $sql = new Sql();

    $produtos = $sql->select("SELECT * FROM tb_produtos WHERE id_prod = $id_prod;");
    $produto = $produtos[0];
    $preco = $produto['preco'];
    $centavos = explode(".", $preco); // Para o php encontrar os centavos, utiliza-se o ponto (.) como referência.
    $produto['preco'] = number_format($preco, 0,",",".");
    $produto['centavos'] = end($centavos);
    $produto['parcelas'] = 10;
    $produto['parcela'] = number_format($preco/$produto['parcelas'], 2, ",", ".");
    $produto['total'] = number_format($preco, 2, ",", ".");

    require_once("view/shop-produto.php");

});

//Get and post route - Carrinho de compras - Aula 73
$app->get('/cart', function () {

        include_once("inc/configuration.php");

        require_once("view/cart.php");

    }
);

//Get route procedure carrinho-dados - Aula 74

$app->get("/carrinho-dados", function() {

  include_once("inc/configuration.php");

  $sql = new Sql();

  $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");
  $carrinho = $result[0];
  $sql = new Sql();

  $carrinho['produtos'] = $sql->select("CALL sp_carrinhosprodutos_list(".$carrinho['id_car'].")");
  $carrinho ['total_car'] = number_format((float)$carrinho['total_car'], 2, ',', '.');
  $carrinho ['subtotal_car'] = number_format((float)$carrinho['subtotal_car'], 2, ',', '.');
  $carrinho ['frete_car'] = number_format((float)$carrinho['frete_car'], 2, ',', '.');

  echo json_encode($carrinho);

});
    //Chamando os produtos dinamicamente através da rota carrinhoAdd via GET e procedure do mysql
$app->get("/carrinhoAdd-:id_prod", function($id_prod) {

  include_once("inc/configuration.php");

  $sql = new Sql();

  $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

  $carrinho = $result[0];

  $sql = new Sql();

  $sql->query("CALL sp_carrinhosprodutos_add(".$carrinho['id_car'].",".$id_prod.")");

  header("location: cart");

  exit;

});
/*
$app->post("/carrinho", function() {

    include_once("inc/configuration.php");

    $request_body = json_decode(file_get_contents('php://input'), true);

    var_dump($request_body);
*/
$app->delete("/carrinhoRemoveAll-:id_prod", function($id_prod) {

    include_once("inc/configuration.php");

    $sql = new Sql();

    $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

    $carrinho = $result[0];

    $sql = new Sql();

    $sql->query("CALL sp_carrinhosprodutostodos_rem(".$carrinho['id_car'].",".$id_prod.")");

    echo json_encode(array(
      "success"=>true

    ));

});
//Route para atualizar (adicionar) itens do carrinho - Aula 76 - Atualizar quantidade

$app->post("/carrinho-produto", function(){

    include_once("inc/configuration.php");

    $data = json_decode(file_get_contents("php://input"), true);

    $sql = new Sql();

    $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

    $carrinho = $result[0];

    $sql = new Sql();

    $sql->query("CALL sp_carrinhosprodutos_add(".$carrinho['id_car'].",".$data['id_prod'].")");

    echo json_encode(array(
      "success"=>true

    ));
});

//Route para atualizar (remover) itens do carrinho - Aula 76 - Atualizar quantidade

$app->delete("/carrinho-produto", function(){

    include_once("inc/configuration.php");

    $data = json_decode(file_get_contents("php://input"), true);

    $sql = new Sql();

    $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

    $carrinho = $result[0];

    $sql = new Sql();

    $sql->query("CALL sp_carrinhosprodutos_rem(".$carrinho['id_car'].",".$data['id_prod'].")");

    echo json_encode(array(
      "success"=>true

    ));
});

$app->run();
