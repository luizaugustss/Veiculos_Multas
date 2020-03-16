<?php
	$conexao = mysqli_connect("localhost","root","root","bdinfracoes") or die("Erro de conexão");
	mysqli_query($conexao,"set names 'utf8'");
	//  echo"Conectado";
?>