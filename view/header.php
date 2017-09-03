<!DOCTYPE html>
<html ng-app="shop">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Aula 47 - Acrescentando viewport -->
      <title>Orlando City</title>
      <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="lib/OwlCarousel2/dist/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="lib/OwlCarousel2/dist/assets/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> <!--deve ser adicionado depois do bootstrap, para sobrescrever os ícones padrão. Exemplo de uso: Dentro do botão search, com a tag ,<i><i>-->
      <link rel="stylesheet" href="lib/raty/lib/jquery.raty.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/style-mobile.css">
      <script src="lib/angularjs/angular.min.js"></script>
  </head>
  <body>
      <header>
        <!--Aula 56 parte 1 - *** class="open-search" *** Inciando a criação do menu hot dog -->
            <div id="menu-mobile-mask" class="visible-xs">

            </div>
            <div id="menu-mobile" class="visible-xs"> <!-- Vamos utilizar a classe criada no header para informar se o menu está aberto ou fechado. Para isto, vamos acrescentar as mudanças no style-mobile.css -->
                <ul class="list-unstyled"> <!-- Aula 57 - Criando itens do menu hot-dog. A classe list-unstyled retira as bolinhas de marcação da lista não ordenada -->
                    <li><a href="videos.html">Videos</a></li>
                    <li><a href="#">Tickets</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Schedule</a></li>
                </ul>
                <div class="bar-close"> <!--Aula 57 - Botão para fechar a barra de menu -->
                    <button type="button" class="btn btn-close"><i class="fa fa-close"></i></button>
                </div>
            </div>
          <div class="container"> <!--Aula 49 - ***container-logo*** Desenvolvimento smartphones - Centralizando logo -->
                <img id="Logotipo" src="img/orlando-logo.png" alt="Logotipo">
          </div>
          <div class="header-black">
                <div class="container">
                  <input type="search" id="input-search-mobile" class="visible-xs" placeholder="Search...">

                  <button id="btn-bars" type="button"><i class="fa fa-bars"></i></button>  <!--botão menu hot dog -->
                  <button id="btn-search" type="button"><i class="fa fa-search"></i></button> <!-- Lupa de pesquisa formato smartphones -->

                      <ul class="pull-right"> <!--Posiciona os elementos à direita-->
                          <li class="club-01"><a href="#"></a></li>
                          <li class="club-02"><a href="#"></a></li>
                          <li class="club-03"><a href="#"></a></li>
                          <li class="club-04"><a href="#"></a></li>
                          <li class="club-05"><a href="#"></a></li>
                          <li class="club-06"><a href="#"></a></li>
                          <li class="club-07"><a href="#"></a></li>
                          <li class="club-08"><a href="#"></a></li>
                          <li class="club-09"><a href="#"></a></li>
                          <li class="club-10"><a href="#"></a></li>
                          <li class="club-11"><a href="#"></a></li>
                          <li class="club-12"><a href="#"></a></li>
                          <li class="club-13"><a href="#"></a></li>
                          <li class="club-14"><a href="#"></a></li>
                          <li class="club-15"><a href="#"></a></li>
                          <li class="club-16"><a href="#"></a></li>
                          <li class="club-17"><a href="#"></a></li>
                          <li class="club-18"><a href="#"></a></li>
                          <li class="club-19"><a href="#"></a></li>
                          <li class="club-20"><a href="#"></a></li>
                          <li class="club-21"><a href="#"></a></li>
                          <li class="club-22"><a href="#"></a></li>
                      </ul>
                </div>
          </div>
          <div class="container">
              <div class="row">
                  <nav id="menu" class="pull-right">
                      <ul>
                          <li><a href="index.php">Home</a></li> <!-- Mudando as tags de index e videos.html para extensão .php -->
                          <li><a href="videos">Videos</a></li>
                          <li><a href="#">Tickets</a></li>
                          <li><a href="#">News</a></li>
                          <li><a href="#">Schedule</a></li>
                          <li class="search">
                              <div class="input-group">
                                  <input type="search" placeholder="Search" id="input-search"> <!--Adicionado o Id input-search para fazer o efeito na caixa de busca (Aula 33)-->
                                      <span class="input-group-btn">
                                          <button type="button"><i class="fa fa-search"></i></button> <!--classe fa fa-search para icone de pesquisa dentro da tag <i></i> -->
                                      </span>
                              </div><!-- /input-group -->
                          </li>
                      </ul>
                  </nav>
              </div>
          </div>

      </header>
