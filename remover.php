<?php
    include('conexao.php'); 
    
    $id = $_GET["Cont"];
echo $id;
    $sql = "DELETE from automovel Where id = $id";
    $resultado = mysqli_query($conexao, $sql);
?>