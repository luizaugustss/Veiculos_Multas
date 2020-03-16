<?php
 include('conexao.php'); 
 $sql = "SELECT * FROM automovel order by marca";
 $resultado = mysqli_query($conexao,$sql);
 $tam = mysqli_num_rows($resultado);
 echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">";
 if(mysqli_num_rows($resultado)>0) {
    echo "</br></br></br><center><h1>Vincular Infracões </h1></center>";
    echo "</br>";
    echo "</br>";
     echo"<center><table class=\"table\"style=\"width: 720px;
    border-style: solid;\">
     <thead class=\"thead-dark\">
       <tr>
         <th scope=\"col\">Marca</th>
         <th scope=\"col\">Modelo</th>
         <th scope=\"col\">Cor</th>
		 <th scope=\"col\">Placa</th>
		 <th scope=\"col\"></th>
		 <th scope=\"col\"></th>
       </tr>
     </thead><tbody>"  ;
        }
 $cont = 0;
while($exibe=mysqli_fetch_array($resultado)) {
		$cont= $exibe["id"];
		$placa= $exibe["placa"];
      $id1 ="id 1,".$cont;
		$id2 ="id 2,".$cont;
		$id3 ="id 3,".$cont;
		$id4 ="id 4,".$cont; 
		$idbutton = "id ".$cont;

         echo "<tr id=$cont><td id='$id1'>$exibe[marca]</td>";
         echo "<td id='$id2'>$exibe[modelo]</td>";
         echo "<td id='$id3'>$exibe[cor]</td>";
		 echo "<td id='$id4'>$placa</td>";
		 echo "<td colspan=\"2\"><button id='$idbutton' type=\"button\" onclick= \"salvatest('$placa')\" class=\"btn btn-dark\" data-toggle=\"modal\" data-target=\"#cadastrar\"> Adicionar Infração </button></td></tr>";
	}
	if(mysqli_num_rows($resultado)>0) {
		
		echo "</tbody></table></center></br>";
    }
    
     echo "<center><a <button  href=\"index.html\" class=\"btn btn-outline-secondary\" >menu</button></a></center><br />";

?>	