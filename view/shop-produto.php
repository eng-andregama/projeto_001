<!-- Aula 65 - Criação da loja virtual -->
<?php include_once("header.php"); ?> <!-- Chama o cabeçalho -->
<section> <!-- Aula 71 - ng-controller retirado da classe e passado para a section -->
    <div class="container" id="destaque-produtos-container"> <!-- Aula 69 - Incluindo angularjs -->

        <div id="destaque-produtos">

            <div class="col-sm-6 col-imagem">
                <img src="img/produtos/<?=$produto['foto_principal']?>" alt="<?=$produto['nome_prod_longo']?>" style="width:50%">
            </div>
            <div class="col-sm-6 col-descricao">
                <h2><?=$produto['nome_prod_longo']?></h2>
                <div class="box-valor">
                    <div class="text-noboleto text-arial-cinza">no boleto</div>
                    <div class="text-por text-arial-cinza">por</div>
                    <div class="text-reais text-roxo">R$</div>
                    <div class="text-valor text-roxo"><?=$produto['preco']?></div>
                    <div class="text-valor-centavos text-roxo">,<?=$produto['centavos']?></div>
                    <div class="text-parcelas text-arial-cinza">ou em até <?=$produto['parcelas']?>x de R$ <?=$produto['parcela']?></div>
                    <div class="text-total text-arial-cinza">total a prazo R$ <?=$produto['total']?></div>
                </div>
                <a href="carrinhoAdd-<?=$produto['id_prod']?>" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i>compre agora</a> <!--Chamando os produtos dinamicamente através da rota carrinhoAdd via GET e procedure do mysql-->
            </div>
        </div>
    </div>
</section>

<?php include_once("footer.php"); ?> <!-- Aula 64 - Chama o footer no footer.php -->
