<html >
	<head>
		<meta charset="utf-8">
	<script>
		function formtabela(cont){

			var descricao = document.getElementById('id 1,'+cont);
			descricao.outerHTML= "<td><input type=\"text\" class=\"form-control\" placeholder=\""+descricao.innerText +"\" name=\"altdescricao\" id=\"altdescricao"+cont+"\" autofocus required> </td>";
			var valor = document.getElementById('id 2,'+cont);
			valor.outerHTML = "<td><input type=\"text\" class=\"form-control\" placeholder=\""+valor.innerText+"\" name=\"altvalor\" id=\"altvalor"+cont+"\" autofocus required> </td>";
			
			document.getElementById('id '+cont).outerHTML = "<td><button id='id "+cont+ "'type=\"button\" onclick=\"teste("+cont+")\" class=\"btn btn-success\">Confirmar</button></td>" 
			document.getElementById('id a'+cont).outerHTML = "<td><button 'type=\"button\" onclick=\"mostratabela()\" class=\"btn btn-dark\">cancelar</button></td>" 
		}
		async function mostratabela(){
			let data = await fetch("mostra_inf.php");
			let texto = await data.text();
			document.getElementById("tabela").innerHTML =texto;	
		}
		function inserirteste(){
			var descricao=document.getElementById('adddescricao').value;		
			var valor=document.getElementById('addvalor').value;			
			if(descricao==""){
			      	  alert("preencha o campo descricao para adicionar!!");
				        document.getElementById('adddescricao').focus();
		return false;
		          	}
			if(valor==""){
			      	  alert("preencha o campo valor para adicionar!!");
				        document.getElementById('addvalor').focus();
				return false;
		          	}
		
					  adicionartabela();		  
		          	}
		function teste(cont){
			var descricao=document.getElementById('altdescricao'+cont).value;		
			var valor=document.getElementById('altvalor'+cont).value;			
		
			if(descricao==""){
			      	  alert("preencha o campo descricao para alterar!!");
				        document.getElementById('altdescricao').focus();
		return false;
		          	}
			if(valor==""){
			      	  alert("preencha o campo valor para alterar!!");
				        document.getElementById('altvalor').focus();
				return false;
		          	}
		
					  alteratabela(cont);		  
	     	}
		async function alteratabela(cont){
		
			var descricao=document.getElementById('altdescricao'+cont).value;
		
			var valor=document.getElementById('altvalor'+cont).value;
			alert(descricao+" e "+valor );

			let data = await fetch("altera_inf.php?descricao="+descricao+"&valor="+valor+"&Cont="+cont);
			mostratabela();
		}
		async function deletatabela(cont){
			let data = await fetch("remover_inf.php?Cont="+cont);
			let texto = await data.text();
			mostratabela();			
		}
		async function adicionartabela(){
			var descricao=document.getElementById('adddescricao').value;
			var valor=document.getElementById('addvalor').value;
			let data = await fetch("cadastra_inf.php?descricao="+descricao+"&valor="+valor);
			mostratabela();				
		}
		mostratabela();


	</script>

	</head>
<body>

	<br />
    	<br />
	<div id="tabela"></div>

</body>
</html>