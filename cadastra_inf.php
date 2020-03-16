<?php

include('conexao.php');
	$descricao = $_GET["descricao"];
	$valor = $_GET["valor"];
	$cor = $_GET["Cor"];
	$placa = $_GET["Placa"];

	
	$sql = "INSERT INTO infracao(descricao, valor) VALUES";
	$sql = $sql."('$descricao', '$valor')";

	$resultado = mysqli_query($conexao, $sql);


?>