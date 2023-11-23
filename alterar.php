<!-- alterar.php -->
<?php require_once 'ClassVeiculo.php'; ?>
<?php require_once 'ClassVeiculoDAO.php'; ?>
<?php

$placa  = $_GET['placa'];
$modelo = $_GET['modelo'];
$marca  = $_GET['marca'];
$ano    = $_GET['ano'];
$cor    = $_GET['cor'];

?>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
  <center>
    <form action="AlterarProcessa.php" method="GET">
      <h1>ALTERAR DADOS</h1>
      Placa:<br>
      <input type="text" name="placa" readonly="true" value=<?php echo $placa; ?> /><br>
      Modelo:<br>
      <input type="text" name="modelo" value=<?php echo $modelo; ?>><br>
      Marca:<br>
      <input type="text" name="marca" readonly="true" value=<?php echo $marca; ?> /><br>
      Ano:<br>
      <input type="text" name="ano" value=<?php echo $ano; ?>><br>
      Cor:<br>
      <input type="text" name="cor" value=<?php echo $cor; ?>>

      <br><br>

      <button type="submit" class="btn btn-primary">ALTERAR </button>
    </form>
  </center>
</body>