<!-- Aula 65 - Criação da loja virtual -->
<?php include_once("header.php"); ?> <!-- Chama o cabeçalho -->
<section ng-controller="destaque-controller"> <!-- Aula 71 - ng-controller retirado da classe e passado para a section -->
    <div class="container" id="destaque-produtos-container"> <!-- Aula 69 - Incluindo angularjs -->
        <div id="destaque-produtos" class ="owl-carousel">
                <div class="item"  ng-repeat="produto in produtos"> <!-- Aula 69 - ng-repeat cria um loop para as diversas caracteristicas do produto -->
                    <div class="col-sm-6 col-imagem">
                        <img src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}" style="width:40%"> <!--Aula 69 - foto_principal e nome_prod_longo passam a ser atributo da classe .produto e assim sucessivamente -->
                    </div>
                    <div class="col-sm-6 col-descricao">
                        <h2>{{produto.nome_prod_longo}}</h2>
                        <div class="box-valor">
                            <div class="text-noboleto text-arial-cinza">no boleto</div>
                            <div class="text-por text-arial-cinza">por</div>
                            <div class="text-reais text-roxo">R$</div>
                            <div class="text-valor text-roxo">{{produto.preco}}</div>
                            <div class="text-valor-centavos text-roxo">,{{produto.centavos}}</div>
                            <div class="text-parcelas text-arial-cinza">ou em até {{produto.parcelas}}x de R$ {{produto.parcela}}</div>
                            <div class="text-total text-arial-cinza">total a prazo R$ {{produto.total}}</div>
                        </div>
                        <a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i>compre agora</a> <!--Retirado da div porque está posicionado num nivel diferente do resto dos textos -->
                    </div>
                </div>
                <div class="item" ng-repeat="produto in produtos"> <!-- Aula 69 - ng-repeat cria um loop para as diversas caracteristicas do produto -->
                    <div class="col-sm-6 col-imagem">
                        <img src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}" style="width:40%"> <!--Aula 69 - foto_principal e nome_prod_longo passam a ser atributo da classe .produto e assim sucessivamente -->
                    </div>
                    <div class="col-sm-6 col-descricao">
                        <h2>{{produto.nome_prod_longo}}</h2>
                        <div class="box-valor">
                            <div class="text-noboleto text-arial-cinza">no boleto</div>
                            <div class="text-por text-arial-cinza">por</div>
                            <div class="text-reais text-roxo">R$</div>
                            <div class="text-valor text-roxo">{{produto.preco}}</div>
                            <div class="text-valor-centavos text-roxo">,{{produto.centavos}}</div>
                            <div class="text-parcelas text-arial-cinza">ou em até {{produto.parcelas}}x de R$ {{produto.parcela}}</div>
                            <div class="text-total text-arial-cinza">total a prazo R$ {{produto.total}}</div>
                        </div>
                        <a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i>compre agora</a> <!--Retirado da div porque está posicionado num nivel diferente do resto dos textos -->
                    </div>
                </div>
            </div>
                        <button type="button" id="btn-destaque-prev"><i class="fa fa-angle-left"></i></button>
                        <button type="button" id="btn-destaque-next"><i class="fa fa-angle-right"></i></button>
        <!--<div id="destaque-produtos" class ="owl-carousel"></div> Esta div estava na linha 5 e fechava o conjunto de produtos. Desativada e passada a classe owlCarousel para a atual linha 5, junto com <div id="destaque-produtos" class ="owl-carousel">.-->
    </div>

    <div id="promocoes" class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="box-promocao box-1">
                    <p>Escolha por Desconto</p>
                </div>
            </div>
            <div class="col-md-10">
                <div class="row-fluid">
                    <div class="col-md-3">
                        <div class="box-promocao">
                            <div class="text-ate">até</div>
                            <div class="text-numero">40</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-promocao">
                            <div class="text-ate">até</div>
                            <div class="text-numero">60</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-promocao">
                            <div class="text-ate">até</div>
                            <div class="text-numero">80</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-promocao">
                            <div class="text-ate">até</div>
                            <div class="text-numero">85</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="mais-buscados" class="container">
        <div class="row text-center title-default-roxo"> <!-- Mudei para text-center -->
            <h2>Os mais buscados</h2>
            <hr> <!-- Cria linha horizontal -->
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="box-produto-info">
                      <a href="#"> <!-- A figura será clicável. Portanto, terá uma (tag a) em volta. -->
                          <img src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}" class = "produto-img" Style="width:75%"> <!-- Aula 71 - produto retirado e acrescentado elemento angularjs "img/produtos/CafeteiraDolceGusto.jpg" -->
                          <h3>{{produto.nome_prod_longo}}</h3>
                          <div class="estrelas" data-score="3"></div>
                          <div class="text-qtd-reviews text-arial-cinza">(300)</div>
                          <div class="text-valor text-roxo">R$ {{produto.total}}</div>
                          <div class="text-parcelado text-arial-cinza">{{produto.parcelas}}x de R$ {{produto.parcela}} sem juros</div>
                      </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-produto-info">
                      <a href="#"> <!-- A figura será clicável. Portanto, terá uma (tag a) em volta. -->
                          <img src="img/produtos/CafeteiraDolceGusto.jpg" alt="Cafeteiras" Style="width:75%">
                          <h3>Cafeteira Dolce Gusto Arno</h3>
                          <div class="estrelas" data-score="5"></div>
                          <div class="text-qtd-reviews text-arial-cinza">(300)</div>
                          <div class="text-valor text-roxo">R$ 209,90</div>
                          <div class="text-parcelado text-arial-cinza">10x de R$ 20,99 sem juros</div>
                      </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-produto-info">
                      <a href="#"> <!-- A figura será clicável. Portanto, terá uma (tag a) em volta. -->
                          <img src="img/produtos/CafeteiraDolceGusto.jpg" alt="Cafeteiras" Style="width:75%">
                          <h3>Cafeteira Dolce Gusto Arno</h3>
                          <div class="estrelas" data-score="2.5"></div>
                          <div class="text-qtd-reviews text-arial-cinza">(300)</div>
                          <div class="text-valor text-roxo">R$ 209,90</div>
                          <div class="text-parcelado text-arial-cinza">10x de R$ 20,99 sem juros</div>
                      </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-produto-info">
                      <a href="#"> <!-- A figura será clicável. Portanto, terá uma (tag a) em volta. -->
                          <img src="img/produtos/CafeteiraDolceGusto.jpg" alt="Cafeteiras" Style="width:75%">
                          <h3>Cafeteira Dolce Gusto Arno</h3>
                          <div class="estrelas" data-score="5"></div>
                          <div class="text-qtd-reviews text-arial-cinza">(300)</div>
                          <div class="text-valor text-roxo">R$ 209,90</div>
                          <div class="text-parcelado text-arial-cinza">10x de R$ 20,99 sem juros</div>
                      </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once("footer.php"); ?> <!-- Aula 64 - Chama o footer no footer.php -->

<script>
      angular.module("shop",[]).controller("destaque-controller", function($scope, $http) {
          $scope.produtos = [];
          var initCarousel = function() {

              $(function(){
                  var owlDestaque = $("#destaque-produtos");
                  owlDestaque.owlCarousel({
                  autoplay: true,
                  autoplayTimeout:2000,
                  items: 1,
                  singleItem: true,
                  });
                  $('#btn-destaque-prev').on("click", function(){
                  owlDestaque.trigger('prev.owl.carousel');
                  });
                  $('#btn-destaque-next').on("click", function(){
                  owlDestaque.trigger('next.owl.carousel');
                  });
              });
          };
              $http({
            	  method: 'GET',
            	  url: 'produtos',
            	}).then(function successCallback(response) {

            	    $scope.produtos = response.data;

            	    setTimeout(initCarousel, 1000);

            	  }, function errorCallback(response) {
            	    // called asynchronously if an error occurs
            	    // or server returns response with an error status.
  	            });

              $('.estrelas').each(function() { /* Para cada estrela avaliada, aplica este $(this).raty ({'parâmetros'}) conjunto de avaliações */
                  $(this).raty({
                      starHalf      : 'lib/raty/lib/images/star-half.png',                                // The name of the half star image.
                      starOff       : 'lib/raty/lib/images/star-off.png',                                 // Name of the star image off.
                      starOn        : 'lib/raty/lib/images/star-on.png',                                  // Name of the star image on.
                      score         :  parseFloat($(this).data("score")),                                 // recebe o raty de cada avaliação dinamicamente
                  });
              });
      });
</script>


<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>-->
<!--https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous"-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script> -->
