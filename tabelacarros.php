<html >
	<head>
		<meta charset="utf-8">
	<script>
		function formtabela(cont){
			alert("porra!!!!!!");
			marca = document.getElementById('id 1,'+cont);
			alert(marca.innerText);
			marca.outerHTML= "<td><input type=\"text\" class=\"form-control\" placeholder=\""+marca.innerText +"\" name=\"altmarca\" id=\"altmarca"+cont+"\" autofocus required> </td>";
			var modelo = document.getElementById('id 2,'+cont);
			modelo.outerHTML = "<td><input type=\"text\" class=\"form-control\" placeholder=\""+modelo.innerText+"\" name=\"altmodelo\" id=\"altmodelo"+cont+"\" autofocus required> </td>";
			var cor = document.getElementById('id 3,'+cont);
			cor.outerHTML = "<td><input type=\"text\" class=\"form-control\" placeholder=\""+cor.innerText+"\" name=\"altcor\" id=\"altcor"+cont+"\" autofocus required ></td>";
			var placa = document.getElementById('id 4,'+cont);
			placa.outerHTML = "<td><input type=\"text\" class=\"form-control\" placeholder=\""+placa.innerText+"\" name=\"altplaca\" id=\"altplaca"+cont+"\" autofocus required></td>";	
			
			document.getElementById('id '+cont).outerHTML = "<td><button id='id "+cont+ "'type=\"button\" onclick=\"teste("+cont+")\" class=\"btn btn-success\">Confirmar</button></td>" 
			document.getElementById('id a'+cont).outerHTML = "<td><button 'type=\"button\" onclick=\"mostratabela()\" class=\"btn btn-dark\">cancelar</button></td>" 
		}
		async function mostratabela(){
			let data = await fetch("mostra.php");
			let texto = await data.text();
			document.getElementById("tabela").innerHTML =texto;	
		}
		function inserirteste(){
			var marca=document.getElementById('addmarca').value;		
			var modelo=document.getElementById('addmodelo').value;			
			var cor=document.getElementById('addcor').value;
			var placa=document.getElementById('addplaca').value;
			if(marca==""){
			      	  alert("preencha o campo marca para adicionar!!");
				        document.getElementById('addmarca').focus();
		return false;
		          	}
			if(modelo==""){
			      	  alert("preencha o campo modelo para adicionar!!");
				        document.getElementById('addmodelo').focus();
				return false;
		          	}
		
			if(cor==""){
			      	  alert("preencha o campo cor para adicionar!!");
				        document.getElementById('addcor').focus();
		return false;
		}
			if(placa==""){
			      	  alert("preencha o campo placa para adicionar!!");
				        document.getElementById('addplaca').focus();
		return false;
		          	}
					  adicionartabela();		  
		          	}
		function teste(cont){
			var marca=document.getElementById('altmarca'+cont).value;		
			var modelo=document.getElementById('altmodelo'+cont).value;			
			var cor=document.getElementById('altcor'+cont).value;
			var placa=document.getElementById('altplaca'+cont).value;
			if(marca==""){
			      	  alert("preencha o campo marca para alterar!!");
				        document.getElementById('altmarca').focus();
		return false;
		          	}
			if(modelo==""){
			      	  alert("preencha o campo modelo para alterar!!");
				        document.getElementById('altmodelo').focus();
				return false;
		          	}
		
			if(cor==""){
			      	  alert("preencha o campo cor para alterar!!");
				        document.getElementById('altcor').focus();
		return false;
		}
			if(placa==""){
			      	  alert("preencha o campo placa para alterar!!");
				        document.getElementById('altplaca').focus();
		return false;
		          	}
					  alteratabela(cont);		  
		          	}
		async function alteratabela(cont){
			
			var marca=document.getElementById('altmarca'+cont).value;
		
			var modelo=document.getElementById('altmodelo'+cont).value;
			
			var cor=document.getElementById('altcor'+cont).value;

			var placa=document.getElementById('altplaca'+cont).value;

			let data = await fetch("altera.php?Marca="+marca+"&Modelo="+modelo+"&Cor="+cor+"&Placa="+placa+"&Cont="+cont);
			mostratabela();
		}
		async function deletatabela(cont){
			let data = await fetch("remover.php?Cont="+cont);
			let texto = await data.text();
			mostratabela();			
		}
		async function adicionartabela(){
			var marca=document.getElementById('addmarca').value;
			var modelo=document.getElementById('addmodelo').value;
			var cor=document.getElementById('addcor').value;
			var placa=document.getElementById('addplaca').value;
			let data = await fetch("cadastra.php?Marca="+marca+"&Modelo="+modelo+"&Cor="+cor+"&Placa="+placa);
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