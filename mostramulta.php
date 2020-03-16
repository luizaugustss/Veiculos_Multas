<?php
 include('conexao.php'); 
$id = $_GET['Codigo'];
 $sql = "SELECT * FROM automovel as a, automovel_infracao as b, infracao as c where a.id ='$id' and c.codigo = b.codigo and a.placa=b.placa order by c.descricao";
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
       </tr>
     </thead><tbody>"  ;
 }
 $c=0;
while($exibe=mysqli_fetch_array($resultado)) {
    $c=$c+$exibe['valor'];
         echo "<tr><td >$exibe[descricao]</td>";
         echo "<td>$exibe[valor]</td></tr>";
        }
	if(mysqli_num_rows($resultado)>0) {
        echo "<tr ><td colspan=\"2\">$c</td></tr>";	
		echo "  </tbody></table></center></br>";
	}
     echo "<center><a <button  href=\"index.html\" class=\"btn btn-outline-secondary\" >menu</button></a></center><br />";

?>	