<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php

				$pizza = $_POST["pizza"] ?? [];

				echo "<h3>O sabores escolhidos foram:</h3>";
				foreach($pizza as $pizza){//verificando a seleção dossabores
					echo "<p>".$pizza."</p>";
				}

			?>

            <a href="formulario.html" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>