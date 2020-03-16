<?php
echo "asdjsaiod";
$descricao = $_GET["descricao"];
$valor = $_GET["valor"];
$cont = $_GET["Cont"];
include('conexao.php');
$sql = "UPDATE infracao SET descricao = '$descricao', valor = '$valor' WHERE codigo = '$cont'";
$resultado = mysqli_query($conexao, $sql);
?>