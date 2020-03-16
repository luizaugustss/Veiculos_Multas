<?php
 include('conexao.php'); 
 $sql = "SELECT * FROM infracao order by descricao";
 $resultado = mysqli_query($conexao,$sql);
 $tam = mysqli_num_rows($resultado);
 echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">";
 if(mysqli_num_rows($resultado)>0) {
    echo "</br></br></br><center><h1>Automóveis </h1></center>";
    echo "</br>";
    echo "</br>";
     echo"<center><table class=\"table\"style=\"width: 720px;
    border-style: solid;\">
     <thead class=\"thead-dark\">
       <tr>
         <th scope=\"col\">descricao</th>
         <th scope=\"col\">valor</th>
		 <th scope=\"col\"></th>
		 <th scope=\"col\"></th>
       </tr>
     </thead><tbody>"  ;
        echo "<tr id='adicionar'> <td><input type=\"text\" class=\"form-control\" placeholder=\"descricao\" name=\"adddescricao\" id=\"adddescricao\" autofocus required></td>";
		echo "<td><input type=\"text\" class=\"form-control\" placeholder=\"valor\" name=\"addvalor\" id=\"addvalor\" autofocus required></td>";
		echo "<td colspan=\"2\"><center><button type=\"button\" onclick=\"inserirteste()\" class=\"btn btn-success\">Adicionar</button></center></td> </tr>";   
 }
 $cont = 0;
while($exibe=mysqli_fetch_array($resultado)) {
		$cont= $exibe["codigo"];
        $id1 ="id 1,".$cont;
		$id2 ="id 2,".$cont;
		$idbutton = "id ".$cont;
		$idbutton2 = "id a".$cont;

         echo "<tr id=$cont><td id='$id1'>$exibe[descricao]</td>";
         echo "<td id='$id2'>$exibe[valor]</td>";
		 echo "<td ><button id='$idbutton' type=\"button\" onclick= \"formtabela('$cont')\" class=\"btn btn-dark\"> Alterar </button></td>";
		 echo "<td ><button id='$idbutton2' type=\"button\" onclick= \"deletatabela('$cont')\" class=\"btn btn-danger\"> Excluir </button></td></tr>";
	}
	if(mysqli_num_rows($resultado)>0) {
		
		echo "  </tbody></table></center></br>";
	}
     echo "<center><a <button  href=\"index.html\" class=\"btn btn-outline-secondary\" >menu</button></a></center><br />";

?>	