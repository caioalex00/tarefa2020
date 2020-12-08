<!DOCTYPE html>
<html>
	<head>
		<title>Desafio 1</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	</head>
	<body>
		<div class="container"  style="margin-top: 20px;">
			<div class="alert alert-primary" role="alert">
				<strong>Instituição:</strong> IFTO - Campus Araguaína <br>
				<strong>Curso:</strong> Analise e Desenvolvimento de Sistemas <br>
				<strong>Aluno:</strong> Caio Alexandre de Sousa Ramos <br>
				<strong>Período:</strong> 2° <br>
			</div>
			
			<h1 style="text-align: center; padding-bottom: 10px;">Desafio 1</h1>
			<p style="font-size: 10px;">Solicitaram para que você construisse um programa simples de criptografia. Este programa deve possibilitar enviar mensagens codificadas sem que alguém consiga lê-las. O processo é muito simples. São feitas três passadas em todo o texto. Na primeira passada, somente caracteres que sejam letras minúsculas e maiúsculas devem ser deslocadas 3 posições para a direita, segundo a tabela ASCII: letra 'a' deve virar letra 'd', letra 'y' deve virar caractere '|' e assim sucessivamente. Na segunda passada, a linha deverá ser invertida. Na terceira e última passada, todo e qualquer caractere a partir da metade em diante (truncada) devem ser deslocados uma posição para a esquerda na tabela ASCII. Neste caso, 'b' vira 'a' e 'a' vira '`'. Por exemplo, se a entrada for “Texto #3”, o primeiro processamento sobre esta entrada deverá produzir “Wh{wr #3”. O resultado do segundo processamento inverte os caracteres e produz “3# rw{hW”. Por último, com o deslocamento dos caracteres da metade em diante, o resultado final deve ser “3# rvzgV”.</p>
			
			<div class="alert alert-success" role="alert">
				<form>
					<div class="form-row align-items-center">
					<div class="col-2">
					  <strong>Digite sua mensagem:</strong> 
					</div>
					<div class="col-8">
						<input type="text" class="form-control" id="inlineFormInputMensage" placeholder="Mensagem...">
					</div>
    
					<div class="col-2">
						<button type="button" onClick="showHint()" class="btn btn-success">Criptografar</button>
					</div>
					</div>
				</form>
			</div>
			
			<div class="alert alert-dark" role="alert">
				<strong>Mensagem Criptografada: </strong><br>
				<span id="txtHint"></span>
			</div>
			
		</div>
		
		<script src="jquery-3.5.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	
		<script>
			function showHint() {
				document.getElementById("txtHint").innerHTML = "";
				var str = document.getElementById("inlineFormInputMensage").value;
				var dados = "q=" + str;
				
				if (str.length == 0){
					
				}else{
					$.ajax({
					  type: 'POST',
					  url: 'solicitacao.php',
					  data: dados,
					  success: function(data) {
						$('#txtHint').append(data);
						//alert(data);
					  }
					});
				}
			}
		</script>
	
	</body>
</html>
