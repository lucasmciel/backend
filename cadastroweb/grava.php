<?php
	include("conexao.php");

	$gravanome = $_GET{"nome"};
	$gravatelefone= $_GET{"telefone"};
	$gravaemail= $_GET{"email"};
	$gravaid= $_GET{"tipo_id"};

	mysqli_query($conexao, "insert into pessoas (nome, telefone, email, tipo_id) values ('gravanome', 'gravatelefone', 'gravaemail', 'gravaid')");

	header("location: lista.php");

?>