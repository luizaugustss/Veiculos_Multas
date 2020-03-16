<?php
session_start();
$id = $_GET["Cont"];
$_SESSION['placa']=$id;
echo "placa=".$id;
?>