<?php include_once("header.php");?>

<section  ng-controller="cart-controller">

	<div class="container">

		<div class="row text-center title-default-roxo" style="margin:40px auto;">
			<h2>carrinho de compras</h2>
			<hr>
		</div>

		<table id="cart-products" class="table table-bordered">
			<thead>
				<tr>
					<th colspan="2">Produto(s)</th>
					<th class="text-center">Quantidade</th>
					<th class="text-center">Entrega</th>
					<th class="text-center">Valor Unitário</th>
					<th class="text-center">Valor Total</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="produto in produtos">
					<td class="text-center"><img src="img/produtos/{{produto.foto_principal}}"></td>
					<td>{{produto.nome_prod_long}}</td>
					<td class="col-xs-2">
						<div class="input-group">
					      <span class="input-group-btn">
					        <button class="btn text-roxo" ng-click="removeQtd(produto)" type="button"><i class="fa fa-chevron-down"></i></button> <!--Aula 76 - Atualizando as quantidades de itens no carrinho -->
					      </span>
					      <input type="text" class="form-control" ng-model="produto.qtd_car"> <!--Alterado para produto.qtd_car na aula 75 -->
					      <span class="input-group-btn">
					        <button class="btn text-roxo" ng-click="addQtd(produto)" type="button"><i class="fa fa-chevron-up"></i></button> <!--Aula 76 - Atualizando as quantidades de itens no carrinho -->
					      </span>
					    </div>
					</td>
					<td class="text-center col-xs-2">
						<p>Entrega para o<br/>CEP: {{carrinho.cep}}</p>
						<strong class="text-roxo">{{carrinho.prazo}}</strong> <!--Alterado de produto.prazo para carrinho.prazo - aula 77 -->
					</td>
					<td class="text-center">R$ {{produto.preco}}</td>
					<td class="text-center">R$ {{produto.total}}</td>
					<td class="text-center"><button ng-click="removeAll(produto)" class="btn text-roxo" type="button"><i class="fa fa-close"></i></button></td> <!-- Aula 75 - Programando botão de exclusão de itens do carrinho -->
				</tr>
			</tbody>
		</table>

		<div id="calculo-de-frete" class="row">
				<div class="col-sm-8">
						<div class="box-outline-grey">
							<p style="margin:28px auto;">Simule o prazo de entrega e o frete para seu CEP abaixo:</p>
							<div class="input-group col-xs-4" style="margin:0 auto;">
						      <input type="text" class="form-control" ng-model="cep"> <!--ativando botão do calculo de frete com o angularjs -->
						      <span class="input-group-btn">
						      	<button class="btn btn-default" ng-click="calcularFrete(cep)" type="button">Calcular Frete</button>
						      </span>
						  </div>
					</div>
				</div>
				<div class="col-sm-4">
						<div class="box-cart-totais">
								<table class="table">
									<tr>
										<td>Subtotal ({{produtos.length}} item):</td>
										<td class="text-right">R$ {{carrinho.subtotal}}</td>
									</tr>
									<tr>
										<td>Frete:</td>
										<td class="text-right">R$ {{carrinho.frete}}</td>
									</tr>
									<tr style="border-top:#999 1px solid;">
										<td class="text-roxo text-bold">Total:</td>
										<td class="text-roxo text-bold text-right">R$ {{carrinho.total}}</td>
									</tr>
								</table>
						</div>
				</div>
		</div>
		<button type="button" class="btn btn-roxo pull-right" style="margin-top:10px">comprar</button>
	</div>
</section>

<?php include_once("footer.php");?>

<script>
angular.module("shop", []).controller("cart-controller", function($scope, $http){

	var carregarCarrinho = function(){

		$http({
			method:'GET',
			url:'carrinho-dados'
		}).then(function(response){

			console.log(response); /* Desativada na aula 74 - 10:28min */

			$scope.carrinho = {
				cep:response.data.cep_car,
				subtotal:response.data.subtotal_car,
				frete:response.data.frete_car,
				total:response.data.total_car,
				prazo:response.data.prazo_car+' dias úteis'

			};

				$scope.produtos = response.data.produtos;

				console.log(response.data);

		}, function(response){

			console.error(response);

		});

	};

	$scope.addQtd = function(_produto){

		$http({
			method:'POST',
			url:'carrinho-produto',
			data:JSON.stringify({
				id_prod:_produto.id_prod
			})
		}).then(function(response){
			//Carrega carrinho de compras
			carregarCarrinho();

			//console.log(response);

		}, function(){

		});

	};

	$scope.removeQtd = function(_produto){

		$http({
			method:'DELETE',
			url:'carrinho-produto',
			data:JSON.stringify({
				id_prod:_produto.id_prod
			})
		}).then(function(response){

			//Carrega carrinho de compras
			carregarCarrinho();
			//console.log(response);

		}, function(){

		});

	};
// Remove todos os itens do carrinho de compras
	$scope.removeAll = function (_produto){

		$http({
			method:'DELETE',
			url:'carrinhoRemoveAll-'+_produto.id_prod,
		}).then(function(response){

			//Carrega carrinho de compras
				carregarCarrinho();

			//console.log(response);

		}, function(){

		});

	};
//Criando o escopo para o calculo do frete - Aula 77
	$scope.calcularFrete = function(_cep){

		$http({
			method:'GET',
			url:'calcular-frete-'+_cep,
		}).then(function(response){

				//console.log(response.data);
				carregarCarrinho();

		}, function(){

		});

	};
//Carrega carrinho de compras
	carregarCarrinho();

});

</script>
