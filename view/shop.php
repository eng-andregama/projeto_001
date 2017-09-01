<!-- Aula 65 - Criação da loja virtual -->
<?php include_once("header.php"); ?> <!-- Chama o cabeçalho -->
<section>
    <div class="container">
        <div id="destaque-produtos-container">
            <div id="destaque-produtos" class ="owl-carousel">
                <div class="item">
                    <div class="col-sm-6 col-imagem">
                        <img src="img/produtos/moto-x.png" alt="Nome do Produto" style="width:40%">
                    </div>
                    <div class="col-sm-6 col-descricao">
                        <h2>Smartphone Motorola Moto X Play Dual Chip Desbloqueado Android 5.1</h2>
                        <div class="box-valor">
                            <div class="text-noboleto text-arial-cinza">no boleto</div>
                            <div class="text-por text-arial-cinza">por</div>
                            <div class="text-reais text-roxo">R$</div>
                            <div class="text-valor text-roxo">1.259</div>
                            <div class="text-valor-centavos text-roxo">,10</div>
                            <div class="text-parcelas text-arial-cinza">ou em até 8x de R$ 174,88</div>
                            <div class="text-total text-arial-cinza">total a prazo R$ 1.399,00</div>
                        </div>
                        <a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i>compre agora</a> <!--Retirado da div porque está posicionado num nivel diferente do resto dos textos -->
                    </div>
                </div>
                <div class="item">
                    <div class="col-sm-6 col-imagem">
                        <img src="img/produtos/iphone2.jpg" alt="Nome do Produto" style="width:40%">
                    </div>
                    <div class="col-sm-6 col-descricao">
                        <h2>Smartphone Apple IPhone Dual Chip Desbloqueado Sistema Operacional IOS</h2>
                        <div class="box-valor">
                            <div class="text-noboleto text-arial-cinza">no boleto</div>
                            <div class="text-por text-arial-cinza">por</div>
                            <div class="text-reais text-roxo">R$</div>
                            <div class="text-valor text-roxo">2.259</div>
                            <div class="text-valor-centavos text-roxo">,10</div>
                            <div class="text-parcelas text-arial-cinza">ou em até 10x de R$ 274,88</div>
                            <div class="text-total text-arial-cinza">total a prazo R$ 2.748,80</div>
                        </div>
                        <a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i>compre agora</a> <!--Retirado da div porque está posicionado num nivel diferente do resto dos textos -->
                    </div>
                </div>
                <div class="item">
                    <div class="col-sm-6 col-imagem">
                        <img src="img/produtos/SmartTVSamsung.jpg" alt="Nome do Produto" style="width:40%">
                    </div>
                    <div class="col-sm-6 col-descricao">
                        <h2>SmartTV Samsung UHD 4K</h2>
                        <div class="box-valor">
                            <div class="text-noboleto text-arial-cinza">no boleto</div>
                            <div class="text-por text-arial-cinza">por</div>
                            <div class="text-reais text-roxo">R$</div>
                            <div class="text-valor text-roxo">4.259</div>
                            <div class="text-valor-centavos text-roxo">,10</div>
                            <div class="text-parcelas text-arial-cinza">ou em até 10x de R$ 574,88</div>
                            <div class="text-total text-arial-cinza">total a prazo R$ 5.740,88</div>
                        </div>
                        <a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i>compre agora</a> <!--Retirado da div porque está posicionado num nivel diferente do resto dos textos -->
                    </div>
                </div>
                <div class="item">
                    <div class="col-sm-6 col-imagem">
                        <img src="img/produtos/moto-x.png" alt="Nome do Produto" style="width:40%">
                    </div>
                    <div class="col-sm-6 col-descricao">
                        <h2>Smartphone Motorola Moto X Play Dual Chip Desbloqueado Android 5.1</h2>
                        <div class="box-valor">
                            <div class="text-noboleto text-arial-cinza">no boleto</div>
                            <div class="text-por text-arial-cinza">por</div>
                            <div class="text-reais text-roxo">R$</div>
                            <div class="text-valor text-roxo">1.259</div>
                            <div class="text-valor-centavos text-roxo">,10</div>
                            <div class="text-parcelas text-arial-cinza">ou em até 8x de R$ 174,88</div>
                            <div class="text-total text-arial-cinza">total a prazo R$ 1.399,00</div>
                        </div>
                        <a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i>compre agora</a> <!--Retirado da div porque está posicionado num nivel diferente do resto dos textos -->
                    </div>
                </div>
            </div>
                        <button type="button" id="btn-destaque-prev"><i class="fa fa-angle-left"></i></button>
                        <button type="button" id="btn-destaque-next"><i class="fa fa-angle-right"></i></button>
        </div>
    </div>
</section>
<?php include_once("footer.php"); ?> <!-- Aula 64 - Chama o footer no footer.php -->

<script>
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
</script>
<!--    $(function(){

        $("#destaque-produtos").owlCarousel({
        autoPlay: 5000,
        items: 1,
        singleItem: true,

     });

      var owlDestaque = $("#destaque-produtos").data('owlCarousel');
      $('#btn-destaque-prev').on("click", function(){
      owlDestaque.prev();
      });
      $('#btn-destaque-next').on("click", function(){
      owlDestaque.next();
     });
   }); -->







<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>-->
<!--https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous"-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script> -->
