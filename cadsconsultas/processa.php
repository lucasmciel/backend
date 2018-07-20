<?php
	
	include_once("conexao.php");

	$nome= $_POST['nome'];
	$email= $_POST['email'];
	$telefone= $_POST['telefone'];

	$sql = "insert into usuarios (nome, email, telefone) values ('$nome', '$email', '$telefone')";
	$salvar = mysqli_query($conexao, $sql);

	$linha = mysqli_affected_rows($conexao);


	mysqli_close($conexao);

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
			<h1>Confirmação de cadastro</h1>
			<hr><br><br>

			<?php
			if ($linha == 1) {
				echo "Cadastro efetuado!<br><br>";
				echo "Nome: $nome<br>
				Email: $email<br> Telefone: $telefone<br>";
			} else{
				echo "Já existe usuário com esse email!";
			}
			?>

		</section>

	</div>

</body>
</html>