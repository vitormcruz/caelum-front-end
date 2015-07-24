<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Checkout Mirror Fashion</title>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	</head>
	<body>
		<div class="jumbotron">
			<div class="container">
				<h1>Ótima escolha</h1>

				<p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>
			</div><!-- fim container -->
		</div><!-- fim jumbotron -->

		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h2 class="panel-title">Sua compra</h2>
						</div> <!-- fim panel panel-default -->
						<div class="panel-body">
							<img src="img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png" 
						               alt="<?= $_POST["nome"] ?>" class=" img-thumbnail img-responsive">
							<dl>
								<dt>Produto</dt>
								<dd><?=  $_POST["nome"]  ?></dd>
								<dt>Cor</dt>
								<dd><?=  $_POST["cor"]  ?></dd>
								<dt>Tamanho</dt>
								<dd><?= $_POST["tamanho"]  ?></dd>
							</dl>
						</div> <!-- fim panel-body -->
					</div><!-- fim panel panel-default -->
				</div><!-- fim col -->

				<form class="col-sm-9">
					<div class="col-md-4">
						<fieldset>
							<legend>Dados Pessoais</legend>

							<div class="form-group">
								<label for="nome">Nome Completo</label>
								<input type="text" class="form-control" id="nome" name="nome" autofocus/>
							</div> <!-- fim form-group -->

							<div class="form-group">
								<label for="email">Email</label>
								<div class="input-group">
									<span class="input-group-addon">@</span>
									<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com"/>
								</div><!-- fim input-group -->
							</div> <!-- fim form-group -->

							<div class="form-group">
								<label for="cpf">CPF</label>
								<input type="cpf" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00"
									data-mask="999.999.999-99"/>
							</div> <!-- fim form-group -->

							<div class="form-group">
								<label>
									<input type="checkbox" value="Sim" name"spam" checked/>
									Quero receber spam da Mirror Fashion
								</label>
							</div> <!-- fim form-group -->
						</fieldset>
					</div> <!-- fim col-md-4 -->
					<div class="col-md-5">
						<fieldset>
							<legend>Cartão de Crédito</legend>
							<div class="form-group">
								<label for="numero-cartao">Número - CVV</label>
								<input type="text" class="form-control" id="numero-cartao" name="numero-cartao"
									data-mask="9999 9999 9999 - 999"/>
							</div> <!-- fim form-group -->

							<div class="form-group">
								<label for="bandeira-cartao">Bandeira</label>
								<select type="text" class="form-control" id="bandeira-cartao" name="bandeira-cartao">
									<option value="master">MasterCard</option>
									<option value="visa">VISA</option>
									<option value="amex">American Express</option>
								</select>
							</div><!-- fim form-group -->

							<div class="form-group">
								<label for="validade-cartao">Validade</label>
								<input type="month" class="form-control" id="validade-cartao" name="validade-cartao"/>
							</div> <!-- fim form-group -->
						</fieldset>
					</div> <!-- fim col-md-5 -->
					<button type="submit" class="btn btn-primary btn-lg pull-right">
						<span class="glyphicon glyphicon-thumbs-up"></span>
						Confirmar Pedido
					</button>
				</form>

			</div><!-- fim container -->
		</div><!-- fim row -->

    	<script type="text/javascript" src="js/jquery.js"></script>
    	<script type="text/javascript" src="js/inputmask-plugin.js"></script>
	</body>
</html>
