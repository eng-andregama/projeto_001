<?php include_once ("header.php"); ?> <!--Aula 64 inclusão. formatação e chamada do header.php -->

<link rel="stylesheet" href="lib/plyr/dist/plyr.css">

<section> <!--Aula 35 - Criando a pagina para exibir os vídeos -->
    <div id="call-to-action">
        <div class="container">
            <div class="row text-center">
                <h2>Vídeos</h2>
                <hr>
            </div>
            <div class="row">
                <div class="player">
                    <video src="mp4/highlights.mp4" controls poster="img/Orlando_City_Foundation_2015.jpg">
                      <!-- Inserindo Captions - Aula 43 -->
                      <track kind="captions" label="Português (Brasil)" src="vtt/legendas.vtt" srclang="pt-br" default>
                    </video>

                </div>
          <!--  <input type="range" id="volume" min="0" max="1" step="0.01" value="1">  RETIRADO NA AULA 41 - PARECE QUE FOI DESCONTINUADA NA DOCUMENTAÇÃO (NÃO FUNCIONOU COM OS BOTÕES MOSTRADOS NA AULA)-->
                <button type="button" id="btn-play-pause" class="btn btn-success">PLAY</button>
           <!-- <audio src="mp3/audio.mp3" style="display: none"></audio> -->
            </div>
        </div>
    </div>
  <!--Refazer as aulas 36, 37 e 38 -->
  <div id="news" class="container" style="top:0"> <!--Aula 25 - Configurando a área de notícias. Com o container o conteúdo fica alinhado no meio da página. Sobrescrevemos o css com top = 10 -->
      <div class="row">
          <h2>Lastest News</h2>
          <hr> <!-- Cria linha horizontal -->
      </div>
          <div class="row thumbnails owl-carousel owl-theme"> <!--Aula 34 Plugins o-->
              <div class="item" data-video="highlights"> <!-- Trocamos a classe col-md-3 pela classe item-->
                  <div class="item-inner"> <!--Criamos a classe item-inner para fazer o carrossel e acrescentamos mais 4 itens as notícias -->
                      <img src="img/highlights.jpg" alt="Noticia">
                      <h3>Highlights</h3>
                  </div>
              </div>
              <div class="item" data-video="Orlando_City_Foundation_2015">
                  <div class="item-inner">
                      <img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
                      <h3>Orlando City Foundation 2015</h3>
                  </div>
              </div>
              <div class="item" data-video="highlights"> <!-- Trocamos a classe col-md-3 pela classe item-->
                  <div class="item-inner"> <!--Criamos a classe item-inner para fazer o carrossel e acrescentamos mais 4 itens as notícias -->
                      <img src="img/highlights.jpg" alt="Noticia">
                      <h3>Highlights</h3>
                  </div>
              </div>
              <div class="item" data-video="Orlando_City_Foundation_2015">
                  <div class="item-inner">
                      <img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
                      <h3>Orlando City Foundation 2015</h3>
                  </div>
              </div>
              <div class="item" data-video="highlights"> <!-- Trocamos a classe col-md-3 pela classe item-->
                  <div class="item-inner"> <!--Criamos a classe item-inner para fazer o carrossel e acrescentamos mais 4 itens as notícias -->
                      <img src="img/highlights.jpg" alt="Noticia">
                      <h3>Highlights</h3>
                  </div>
              </div>
              <div class="item" data-video="Orlando_City_Foundation_2015">
                  <div class="item-inner">
                      <img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
                      <h3>Orlando City Foundation 2015</h3>
                  </div>
              </div>
          </div>
  </div>
</section>

<?php include_once("footer.php");?> <!--Aula 64 - Formatação do arquivo de video.php com inclusões de chamadas -->

<script src="lib/plyr/dist/plyr.js"></script> <!-- Aula 40 plugin de video do jquery -->
<!-- Inserido na aula 40, 41 - Plugin plyr svg do jquery -->
<script>
      (function(d, p){
      var a = new XMLHttpRequest(),
          b = d.body;
      a.open("GET", p, true);
      a.send();
      a.onload = function(){
          var c = d.createElement("div");
          c.style.display = "none";
          c.innerHTML = a.responseText;
          b.insertBefore(c, b.childNodes[0]);
      }
    })(document, "lib/plyr/dist/plyr.svg");
</script>
<!-- Aula 32 e 33 -->
<script>
    $(function(){
        $(".thumbnails .item").on("click", function(){
            $("video").attr({
              "src": "mp4/"+$(this).data('video')+".mp4",
              "poster":"img/"+$(this).data('video')+".jpg",
            });
        });
        $("volume").on("mousemove",function(){
            $("video")[0].volume = parseFloat($(this).val());
        });
        $("#btn-play-pause").on("click",function(){

            var video = $("video")[0];
              if ($(this).hasClass("btn-success")){
                  $(this).text("STOP");
                  video.play();
              }  else {
                  $(this).text("PLAY");
                  video.pause();
              }
              $(this).toggleClass("btn-success btn-danger");
        });
        plyr.setup(); //Disparando player Plyr - Aula 40
    });
</script>








<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>-->
<!--https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous"-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script> -->
