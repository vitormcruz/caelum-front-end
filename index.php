<!DOCTYPE html>
<html>
	<head>
		<title>Mirror Fashion</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">

		<link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/mobile.css" media="(max-width: 939px)">
	</head>

	<body>

		<?php include("cabecalho.php"); ?>

		<div class="container destaque">
			<section class="busca">
				<h2>Busca</h2>
				<form id="form_busca" action="http://www.google.com.br/search">
					<input id="q" type="search" name="q">
					<input type="image"src="img/busca.png">
				</form>
			</section> <!-- Fim Busca -->

			<section class="menu-departamentos">
				<h2>Departamentos</h2>

				<nav>
					<ul>
						<li><a href="#">Blusas e Camisas</a>
							<ul>
								<li><a href="#">Manga curta</a></li>
								<li><a href="#">Manga comprida</a></li>
								<li><a href="#">Camisa social</a></li>
								<li><a href="#">Camisa casual</a></li>		
							</ul>
						</li>
						<li><a href="#">Calças</a></li>
						<li><a href="#">Saias</a></li>
						<li><a href="#">Vestidos</a></li>
						<li><a href="#">Sapatos</a></li>
						<li><a href="#">Bolsas e Carteiras</a></li>
						<li><a href="#">Acessórios</a></li>
					</ul>
				</nav>
			</section><!-- Fim menu-departamentos -->

			<img src="img/destaque-home.png" alt="Promoção: Big City Night">
		</div>

		<div class="container paineis">
			<section class="painel novidades">
				<h2>Novidades</h2>
				<ol>
				    <?php
				      $conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
				      $dados = mysqli_query($conexao, "SELECT * FROM produtos order by data desc LIMIT 0, 12");

				      while ($produto = mysqli_fetch_array($dados)):
				    ?>

				    <li>
				      <a href="produto.php?id=<?= $produto['id'] ?>">
				        <figure>
				          <img src="img/produtos/miniatura<?= $produto['id'] ?>.png" 
				               alt="<?= $produto['nome'] ?>">
				          <figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?></figcaption>
				        </figure>
				      </a>
				    </li>

				    <?php endwhile; ?>
				</ol>			
				<button type="button">Mostra mais</button>
			</section>

			<section class="painel mais-vendidos">
				<h2>Mais Vendidos</h2>
				<ol>
				    <?php
				      $conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
				      $dados = mysqli_query($conexao, "SELECT * FROM produtos order by vendas desc LIMIT 0, 12");

				      while ($produto = mysqli_fetch_array($dados)):
				    ?>

				    <li>
				      <a href="produto.php?id=<?= $produto['id'] ?>">
				        <figure>
				          <img src="img/produtos/miniatura<?= $produto['id'] ?>.png" 
				               alt="<?= $produto['nome'] ?>">
				          <figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?></figcaption>
				        </figure>
				      </a>
				    </li>

				    <?php endwhile; ?>
				</ol>
				<button type="button">Mostra mais</button>
			</section>
		</div>

		<?php include("rodape.php"); ?>

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/home.js"></script>
	</body>
</html>