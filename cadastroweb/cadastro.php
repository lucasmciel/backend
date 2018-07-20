<!DOCTYPE html>
<html>
<head>
	<title>Cadastro na Tabela</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}

		body{
			font-family: Verdana;
			background-color: #ddd;
			font-size: 100%;
		}


		h1{
			padding-left: 580px;
		}

		section{
			padding: 17px;
			padding-left: 500px;
			padding-top: 10px;
			box-sizing: border-box;
		}

		.campo{
			width: 350px;
			height: 25px;
			margin-top: 3px;
			margin-bottom: 3px;

		}

		.btn{
			width: 100px;
			height: 30px;
			cursor: pointer;
			font-family: Verdana;
			margin-left: 120px;
			margin-top: 3px;

		}

	</style>
</head>
<body>
	<div class="container">
		<nav class="cadastro">
	
			<h1>Cadastre-se</h1>
			<hr>
		</nav>
			<section>
				<form method="get" action="grava.php" class="formulario"> 
				Nome: <br>
				<input type="text" name="nome" class="campo" required autofocus><br>
				Telefone: <br>
				<input type="text" name="telefone" class="campo"><br>
				Email: <br>
				<input type="text" name="email" class="campo"><br>
				Id: <br>
				<input type="text" name="tipo_id" class="campo"><br>
				<input type="submit" name="enviar" value="Cadastrar" class="btn">
				</form>
			</section>	
	</div>
</body>
</html>