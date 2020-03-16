<?php
$marca = $_GET["Marca"];
$modelo = $_GET["Modelo"];
$cor = $_GET["Cor"];
$placa = $_GET["Placa"];
$cont = $_GET["Cont"];
include('conexao.php');
$sql = "UPDATE automovel SET marca = '$marca', modelo = '$modelo', cor = '$cor', placa = '$placa' WHERE id = '$cont'";
$resultado = mysqli_query($conexao, $sql);
?>