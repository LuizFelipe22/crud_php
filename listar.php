<!--  listar.php -->

<?php require_once 'ClassVeiculo.php'; ?>
<?php require_once 'ClassVeiculoDAO.php'; ?>

<html>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand fs-1 text-light" href="index.php">AutoCar</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
	</nav>
	<br><br>
	<center>

		<br>
		<h1>Veiculos cadastrados</h1><br><br>
		<table class="table-light table-bordered">
			<tr>
				<th>Placa </th>
				<th>Modelo </th>
				<th>Marca </th>
				<th>Ano </th>
				<th>Cor </th>
				<th>Excluir </th>
				<th>Alterar </th>
			</tr>
			<?php
			$ClassVeiculoDAO = new ClassVeiculoDAO();
			$array = $ClassVeiculoDAO->listar();
			foreach ($array as $array) {
				echo "<td>" . $array['placa'] . "</td>";
				echo "<td>" . $array['modelo'] . "</td>";
				echo "<td>" . $array['marca'] . "</td>";
				echo "<td>" . $array['ano'] . "</td>";
				echo "<td>" . $array['cor'] . "</td>";
				echo "<td> ";
			?>
				<center>
					<form action="excluir.php" method="GET">
						<input type=hidden name=placa value=<?php echo $array['placa']; ?>>
						<button class="btn btn-outline-danger">
							<img src='imagem/sinal_x.png' width="30px" height="30px">
						</button>
					</form>
				</center>
				<?php
				echo "</td> ";
				echo  "<td> ";
				?>
				<form action="alterar.php" method="GET">
					<input type=hidden name=placa value=<?php echo $array['placa']; ?>>
					<input type=hidden name=modelo value=<?php echo $array['modelo']; ?>>
					<input type=hidden name=marca value=<?php echo $array['marca']; ?>>
					<input type=hidden name=ano value=<?php echo $array['ano']; ?>>
					<input type=hidden name=cor value=<?php echo $array['cor']; ?>>
					<button class="btn btn-outline-success">
						<img src='imagem\alterar.png' width="30px" height="30px">
					</button>
				</form>
			<?php
				echo "</td> ";
				echo "</tr>";	//fechando linha	      
			}
			?>
		</table>
		<br><br>
		<button class="btn btn-outline-primary"><a class="nav-link" href="index.php">Adicionar mais veículos</a></button>
	</center>
</body>

</html>