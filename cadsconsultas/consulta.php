<?php
	include_once("conexao.php");

	$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

	$sql = "select * from usuarios where nome like '%$filtro%'";
	$consulta = mysqli_query($conexao, $sql);
	$registros = mysqli_num_rows($consulta);



?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistema de cadastro</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<nav>
			<ul class="menu">
				<a href="index.php"><li>Cadastro</li></a>
				<a href="consulta.php"><li>Consulta</li></a>
			</ul>
		</nav>
		<section>
			<h1>Consulta do database</h1>
			<hr><br>

			<form method="get" action="">
				Filtrar por Nome: <input type="text" name="filtro" class="campo" required autofocus>
				<input type="submit" value="Pesquisar" class="btn">
			</form>

			<?php

			echo "$registros Registros encontrados!<br>";

			while ($exibir = mysqli_fetch_array($consulta)) {
					$codigo = $exibir[0];
					$nome = $exibir[1];
					$email = $exibir[2];
					$telefone = $exibir[3];

					echo "<br>$codigo<br>";
					echo "$nome<br>";
					echo "$email<br>";
					echo "$telefone<br>";
			}

			mysqli_close($conexao);
			
			?>

		</section>

	</div>

</body>
</html>