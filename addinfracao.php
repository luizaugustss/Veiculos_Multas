<html >
	<head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script>
        mostratabela();
        async function mostratabela(){
           
			let data = await fetch("mostra_ai.php?");
			let texto = await data.text();
			document.getElementById("tabela").innerHTML = texto;	
		}
        mostratabela();
        async function modal(){
            var infracao = document.getElementById('infracao').value;
			let data = await fetch("cadastra_ai.php?Codigo="+infracao);
			let texto = await data.text();
        }
		   async function salvatest(cont){	   
	
		 let data = await fetch("salvaid.php?Cont="+cont);
			let texto = await data.text();
			   alert(texto);
		   }
        async function salvaid(cont){
			
            

        }
	</script>

</head>
<body>
<br />
    <br />
<div id="tabela"></div>
<div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Vincular multas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="addevent">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Cor</label>
                                <div class="col-sm-10">
                                    <select name="infracao" class="form-control" id="infracao">
                                        <?php
                                        include('conexao.php');
                                        $sql = "SELECT * FROM infracao order by descricao";
                                        $resultado = mysqli_query($conexao,$sql);                   
                                        $tam = mysqli_num_rows($resultado);
                                        // echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">";
                                        if(mysqli_num_rows($resultado)>0) {	
                                        echo "<option value=1 >Selecione</option>"; 
                                        }
                                        while($exibe=mysqli_fetch_array($resultado)) {
                                        $cont= $exibe["codigo"];
                              
                                        echo "<option value=\"$cont\" >$exibe[descricao]</option>";
                                        }
                                        ?>
                                        </select>
                                </div>
                            </div>
                                       
                                    <button onclick="modal()" name="CadEvent" id="CadEvent" value="CadEvent" class="btn btn-success">Cadastrar</button>                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>