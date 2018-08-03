<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Teste de bloqueio de dropdown com JQuery</title>
	</head>
	<body>
		<h1>Teste de bloqueio de dropdown com JQuery</h1>
		
		<input type="checkbox" name="check" id="check"> Clique aqui!!
		
		<select name="bairro" id="bairro">
			<option value="">-- Selecione uma opção --</option>
			<option value="01">Centro</option>
			<option value="02">Jardim Catarina</option>
			<option value="03">Porto Novo</option>
		</select>
		
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script>
			$(document).ready(function(){
				$("#check").click(function(){
					if($(this).prop("checked")){
						$("#bairro").attr("style", "pointer-events: none;");
					}else{
						$("#bairro").attr("style", "pointer-events: auto;");
					}
				});
			});
		</script>
	</body>
</html>