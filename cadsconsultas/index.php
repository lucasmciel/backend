<!DOCTYPE html>
<html>
<head>
	<title>Sistema de cadastro</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	
	<style type="text/css">
		.img{
			padding-left: 500px;
			
		}

	</style>

</head>
<body>
	<div class="container">
		<nav>
			<ul class="menu">
				<a href="index.php"><li><b>Cadastro</li></b></a>
				<a href="consulta.php"><li><b>Consulta</li></b></a>
			</ul>
		</nav>
		<section>
			<h1>Cadastro de Usuários</h1>
			<hr><br><br>

			<form method="post" action="processa.php">

				Nome:<br>
				<input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
				Email:<br>
				<input type="email" name="email" class="campo" maxlength="30" required><br>
				Telefone:<br>
				<input type="text" name="telefone" class="campo" maxlength="15" required ><br><br><br>

				<input type="submit" value="Cadastrar" class="btn">
				<input type="reset" value="Limpar" class="btn">

			</form>

			<img src="cadastro.png" class="img" >
		</section>

	</div>

</body>
</html>