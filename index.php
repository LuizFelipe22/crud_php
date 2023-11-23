<!-- index.php -->
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
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="listar.php">Listar carros</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<br><br>
	<center>
		<form action="ControleVeiculo.php" method="POST">
			<h1>Cadastro de Veículos</h1>

			Placa: <br>
			<input type=text name=placa maxlength="7" /> <br />
			Modelo:<br>
			<input type=text name=modelo maxlength="20" /> <br />
			Marca: <br>
			<input type=text name=marca maxlength="15" /> <br />
			Ano:<br>
			<input type=text name=ano maxlength="4" /> <br />
			Cor: <br>
			<input type=text name=cor maxlength="20" /> <br /> <br />
			<br>
			<button type="submit" class="btn btn-primary">Gravar</button>
		</form>
	</center>
</body>

</html>