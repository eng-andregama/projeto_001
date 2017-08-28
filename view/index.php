<!-- Header retirado - Aula 64 -->
<!-- Aula 24 - Adicionando o banner-->
<?php include_once("header.php"); ?> <!-- Chama o cabeçalho -->
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
  <?php include_once("footer.php"); ?> <!-- Aula 64 - Chama o footer no footer.php -->









<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>-->
<!--https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous"-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script> -->
