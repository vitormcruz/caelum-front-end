<?php

  $conexao = mysqli_connect("localhost", "root", "", "WD43");
  $produtos =mysqli_fetch_array(mysqli_query($conexao, "select * from produtos where id=$_GET[id]"));

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Mirror Fashion</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
    <link rel="stylesheet" type="text/css" href="css/produto.css">
  </head>
  <body>
    <?php include("cabecalho.php"); ?>

    <div class="container">

      <div class="produto">

          <h1><?= $produtos["nome"] ?></h1>
   
          <p>por apenas <?= $produtos["preco"] ?></p>

          <form action="checkout.php" method="POST">
              <input type="hidden" name="id" value="<?= $produtos["id"] ?>">
              <input type="hidden" name="nome" value="<?= $produtos["nome"] ?>">
              <fieldset class="cores">
                  <legend>Escolha a cor:</legend>

                  <input type="radio" name="cor" value="verde" id="verde" checked>
                  <label for="verde">
                    <img src="img/produtos/foto<?= $produtos["id"] ?>-verde.png" alt="verde">
                  </label>
                  
                  <input type="radio" name="cor" value="rosa" id="rosa">
                  <label for="rosa">
                    <img src="img/produtos/foto<?= $produtos["id"] ?>-rosa.png" alt="rosa">
                  </label>
                  
                  <input type="radio" name="cor" value="azul" id="azul">
                  <label for="azul">
                    <img src="img/produtos/foto<?= $produtos["id"] ?>-azul.png" alt="azul">
                  </label>
                  
              </fieldset>

              <fieldset class="tamanhos">
                <legend>Escolha o tamanho</legend>

                <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
                <output name="valortamanho" for="tamanho">42</output> 
              </fieldset>

              <input type="submit" class="comprar" value="Comprar">
          </form>
        </div><!-- fim div produto -->

        <div class="detalhes">
            <h2>Detalhes do produto</h2>

            <p><?= $produtos["descricao"] ?></p>

            <table>
              <thead>
                <tr>
                  <th>Característica</th>
                  <th>Detalhe</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Modelo</td>
                  <td>Cardigã 7845</td>
                </tr>
                <tr>
                  <td>Material</td>
                  <td>Algodão e poliester</td>
                </tr>
                <tr>
                  <td>Cores</td>
                  <td>Azul, Rosa e Verde</td>
                </tr>
                <tr>
                  <td>Lavagem</td>
                  <td>Lavar a mão</td>
                </tr>
              </tbody>
            </table>
        </div>

    </div><!-- fim div container -->

    <?php include("rodape.php"); ?>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/produto.js"></script>
  </body>
</html>
