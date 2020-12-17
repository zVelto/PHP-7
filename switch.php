<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>
	<body>
		
		<?php

			$parametro = true;
			
			switch ($parametro) {
				case 1:
					echo 'Entrou no case 1';
					break;

				case 'abc':
					echo 'Entrou no case abc';
					break;

				case true:
					echo 'Entrou no case true';
					break;
				
				default:
					echo 'Não entrou em nenhum case';
					break;
			}

		?>

	</body>
</html>