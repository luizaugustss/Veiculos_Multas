<?php

	include('conexao.php');
	session_start();
	$codigo = $_GET["Codigo"];

	$placa = $_SESSION['placa'];
	echo "id=".$id."---"."codigo=".$codigo;
	$sql = "INSERT INTO automovel_infracao(codigo,placa) VALUES";
	$sql = $sql."('$codigo','$placa')";
	$resultado = mysqli_query($conexao, $sql);


?>