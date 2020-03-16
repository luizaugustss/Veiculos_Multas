<?php

include('conexao.php');
	$marca = $_GET["Marca"];
	$modelo = $_GET["Modelo"];
	$cor = $_GET["Cor"];
	$placa = $_GET["Placa"];

	
	$sql = "INSERT INTO automovel(marca, modelo, cor, placa) VALUES";
	$sql = $sql."('$marca', '$modelo', '$cor', '$placa')";

	$resultado = mysqli_query($conexao, $sql);


?>