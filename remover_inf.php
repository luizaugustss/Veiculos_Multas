<?php
    include('conexao.php'); 
    
    $id = $_GET["Cont"];
echo $id;
    $sql = "DELETE from infracao Where codigo = $id";
    $resultado = mysqli_query($conexao, $sql);
?>