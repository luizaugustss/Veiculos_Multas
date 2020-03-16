<html >
	<head>
		<meta charset="utf-8">
	<script>


		async function mostratabela(cont){
			let data = await fetch("mostramulta.php?Codigo="+cont);
			let texto = await data.text();
			document.getElementById("tabela").innerHTML =texto;	
		}
		


	</script>

	</head>
<body>
<?php
echo"<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">";
	include('conexao.php');  
	$sql = "SELECT * FROM automovel";
	$resultado = mysqli_query($conexao, $sql);
	echo "</br>";
    echo "</br>";
 echo "<center><select name=box id=box onchange=\"mostratabela(this.value)\">"; 
 echo"<option value = 0> Selecione </option>";
    while($row = mysqli_fetch_array($resultado)){
    	$id=$row['id'];
	   echo"<option value = $id >". $row['placa']."</option>";
	  }

	    echo "</select></center>";
?>
	<br />
	<br />
		
	<div id="tabela"></div>

</body>
</html>