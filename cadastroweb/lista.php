<!DOCTYPE html>
<html>
<head>
	<title>Lista dos Dados</title>
</head>
<body>
	<h2>Lista</h2>
	<table width="100%" border="1" bordercolor="#EEE" cellspacing="0" cellpadding="10">
		<tr>
			<td><strong>NOME</strong></td>
			<td><strong>TELEFONE</strong></td>
			<td><strong>EMAIL</strong></td>
			<td><strong>ID</strong></td>
		</tr>
		<?php
			include("conexao.php");
			$seleciona = mysqli_query($conexao, "select * from pessoas");
			?>
	</table>
</body>
</html>