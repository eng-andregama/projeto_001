<?php

require_once ("inc/configuration.php"); //Chama o arquivo de configuração php uma vez.
$sql = new Sql(); //Tira uma cópia do sql e coloca nesta variável.

$result = $sql -> query("SELECT * FROM tb_produtos;");

while ($row = mysqli_fetch_array($result)) { //Loop para mostrar os prodrutos cadastrados no banco de dados. Repetirá enquanto houver linhas. CTRL + U mostra o código fonte no browser
    var_dump($row);
}

exit;
?>


<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Aula 47 - Acrescentando viewport -->
      <title>Orlando City</title>
      <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="lib/OwlCarousel2/dist/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="lib/OwlCarousel2/dist/assets/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> <!--deve ser adicionado depois do bootstrap, para sobrescrever os ícones padrão. Exemplo de uso: Dentro do botão search, com a tag ,<i><i>-->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/style-mobile.css">
  </head>
  <body>
      <header class="open-menu open-search">
        <!--Aula 56 parte 1 - Inciando a criação do menu hot dog -->
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
          <div class="container container-logo"> <!--Aula 49 - Desenvolvimento smartphones - Centralizando logo -->
                <img src="img/orlando-logo.png" id="Logotipo" alt="Logotipo">
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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="videos.html">Videos</a></li>
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
<!-- Aula 24 - Adicionando o banner-->
    <section>
          <div id="banner">
              <h1>Orlando City<small>Orlando City Soccer Club</small></h1>
          </div>
          <div id="news" class="container"> <!--Aula 25 - Configurando a área de notícias. Com o container o conteúdo fica alinhado no meio da página. -->

              <div class="row text-center"> <!-- Mudei para text-center -->
                  <h2>Lastest News</h2>
                  <hr> <!-- Cria linha horizontal -->
              </div>
              <button type="button" id="btn-news-prev"><i class="fa fa-angle-left"></i></button>
              <button type="button" id="btn-news-next"><i class="fa fa-angle-right"></i></button>

              <!--<button type="button" name="btn-news-prev"><i class="fa fa-angle-left"></i></button>
              <button type="button" name="btn-news-next"><i class="fa fa-angle-right"></i></button> Retiradas via suporte HCODE - Aula 51-->

                  <div class="row thumbnails owl-carousel owl-carousel owl-theme"> <!--Aula 34 Plugins o-->
                      <div class="item"> <!-- Trocamos a classe col-md-3 pela classe item-->
                          <div class="item-inner"> <!--Criamos a classe item-inner para fazer o carrossel e acrescentamos mais 4 itens as notícias -->
                              <img src="img/noticia-thumb.jpg" alt="Noticia">
                              <h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
                              <time>December 21, 2015</time>
                          </div>
                      </div>
                      <div class="item">
                          <div class="item-inner">
                              <img src="img/noticia-thumb.jpg" alt="Noticia">
                              <h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
                              <time>December 21, 2015</time>
                          </div>
                      </div>
                      <div class="item">
                          <div class="item-inner">
                              <img src="img/noticia-thumb.jpg" alt="Noticia">
                              <h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
                              <time>December 21, 2015</time>
                          </div>
                      </div>
                      <div class="item">
                          <div class="item-inner">
                              <img src="img/noticia-thumb.jpg" alt="Noticia">
                              <h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
                              <time>December 21, 2015</time>
                          </div>
                      </div>
                      <div class="item">
                          <div class="item-inner">
                              <img src="img/noticia-thumb.jpg" alt="Noticia">
                              <h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
                              <time>December 21, 2015</time>
                          </div>
                      </div>
                      <div class="item">
                          <div class="item-inner">
                              <img src="img/noticia-thumb.jpg" alt="Noticia">
                              <h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
                              <time>December 21, 2015</time>
                          </div>
                      </div>
                      <div class="item">
                          <div class="item-inner">
                              <img src="img/noticia-thumb.jpg" alt="Noticia">
                              <h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
                              <time>December 21, 2015</time>
                          </div>
                      </div>
                      <div class="item">
                          <div class="item-inner">
                              <img src="img/noticia-thumb.jpg" alt="Noticia">
                              <h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
                              <time>December 21, 2015</time>
                          </div>
                      </div>
                  </div>
          </div>
          <!--Aula 26 - Adicionando estatisticas ao site -->
          <div id="estatisticas">
               <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <p>61348<small>Stadium Capacity</small></p>
                        </div>
                        <div class="col-md-4">
                            <p>2010<small>Founded</small></p>
                        </div>
                        <div class="col-md-4">
                            <p>7th<small>Eastern Conference</small></p>
                        </div>
                    </div>
                </div>
          </div>
          <!--Aula 27 - Chamada para ação (call to action) para o usuário se registrar e comprar no site -->
         <div id="call-to-action">
              <div class="container">
                  <div class="row text-center">
                      <h2>American Club Number One in Brazil</h2>
                      <hr>
                      <div class="row">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat necessitatibus, voluptatem sit voluptas illo odit. Quas ad adipisci deleniti quaerat accusantium necessitatibus commodi, rerum explicabo culpa quae, perspiciatis quos sed.</p>
                      </div>
                      <div class="text-center">
                          <div class="row row-max-400">
                                <div class="col-xs-6"> <!-- Para tela de celular -->
                                    <a href="#" class="btn btn-roxo">Shop</a>
                                </div>
                                <div class="col-xs-6"> <!-- Para tela de celular -->
                                    <a href="#" class="btn btn-amarelo">Register</a>
                                </div>
                          </div>
                      </div>
                  </div>
              </div>
         </div>
    </section>
    <!-- Aula 29 - Projetando o rodapé do site -->
    <footer>
        <div class="row row-cinza-claro">
            <div class="container">
                <div class="row"> <!--Aula 30 - Projetando o footer -->
                    <div class="col-md-2 text-center hidden-xs"> <!-- text-center permite centralizar automaticamente no bootstrap. Inserida a classe hidden-xs (aula 53) para esconder o escudo do time e outros atributos no projeto mobile -->
                        <img src="img/orlando-logo.png" class="Logotipo" alt="Logotipo"> <!-- Não pode repetir o id. Mudamos para class="logotipo". -->
                    </div>
                    <div class="col-md-10">
                        <div class="row row-cols"> <!-- Aula 31 - Projetando o footer (continuação) -->
                            <div class="col-md-4 col-popular-posts hidden-xs"><!-- Classe utilizada para estilizar o css. Inserida a classe hidden-xs (aula 53) para esconder o escudo do time e outros atributos no projeto mobile -->
                                <h4>Popular Posts</h4>
                                <ul class="list-unstyled"> <!--Retira a bolinha de marcação da lista não ordenada -->
                                    <li>
                                        <h5>Lorem ipsum dolor sit amet</h5>
                                        <time>January 01, 2016</time>
                                    </li>
                                    <li>
                                        <h5>Lorem ipsum dolor sit amet</h5>
                                        <time>January 01, 2016</time>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-links hidden-xs"> <!-- Inserida a classe hidden-xs (aula 53) para esconder o escudo do time e outros atributos no projeto mobile -->
                                <h4>Links</h4>
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Tickets</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>News</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Schedule</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-get-in-touch">
                                <h4 class="hidden-xs">Get in Touch</h4> <!-- Inserida a classe hidden-xs (aula 53) para esconder o escudo do time e outros atributos no projeto mobile -->
                                <address class="hidden-xs">
                                  <i class="fa fa-map-marker"></i><span> 618 E. South Street, Suite 510<br/>
                                  > Orlando, FL 32801</span>
                                </address>
                                <p class="hidden-xs"><a href="tel:1855ORLCITY"><i class="fa fa-phone"></i> 1.855.ORL.CITY</a></p> <!-- Inserida a classe hidden-xs (aula 53) para esconder o escudo do time e outros atributos no projeto mobile -->
                                <div class="row-fluid visible-up"> <!-- Aula 54 - Acrescentada para permitir a fluidez (justificar) a divisão utilizada com a classe col-xs-6, que divide a tela em duas colunas no bootstrap -->
                                    <div class="col-xs-6"> <!--Classe hidden-xs-up retirada na aula 55 (linha 225) segundo prof. por mau funcionamento. Substituída pela classe visible-xs -->
                                        <a href="#" class="btn btn-footer"><i class="fa fa-map-marker"></i>Location</a> <!-- Botões Mobile (Aula 54) e Acrescentada a classe hidden-sm-up para esconder os botões do small (sm) para cima. Os botões aparecem apenas no mobile-->
                                    </div>
                                    <div class="col-xs-6">
                                        <a href="#" class="btn btn-footer"><i class="fa fa-phone"></i>Call</a> <!-- Botões Mobile (Aula 54) e Acrescentada a classe hidden-sm-up para esconder os botões do small (sm) para cima. Os botões aparecem apenas no mobile-->
                                    </div>
                                </div>
                                <ul class="list-unstyled list-socials">
                                  <li>
                                      <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                  </li>
                                  <li>
                                      <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                  </li>
                                  <li>
                                      <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                                  </li>
                                  <li>
                                      <a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                                  </li>
                                  <li class="page-up"> <!--Aula 55 - Classe adicionada para  ativar o botão mobile (voltar ao topo). Visível apenas no mobile, com id="page-up". PROFESSOR RETIROU A CLASSE e colocou a classe page-up no style.css -->
                                      <a href="#" id="page-up"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cinza-escuro">
            <div class="container copyright-mobile"> <!-- Inserida a classe copyright-mobile (aula 53) para ajustar os textos de copyright no projeto mobile -->
                <p class="pull-left">Copyright &#169 Orlando City 2016. All rights reserved</p>
                <p class="pull-right">Created by Andre at Udemy</p>
            </div>
        </div>
    </footer>
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/OwlCarousel2/dist/owl.carousel.min.js"></script> <!--Aula 34 - Plugins -->
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src=js/efeitos.js></script> <!--Chama o arquivo com scripts de efeito -->
    <!-- Aula 32 e 33 -->
  </body>
</html>








<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>-->
<!--https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous"-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script> -->
