<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>
	<body>
		
		<?php

			//void (sem retorno)
			function exibirBoasVindas(){
				echo 'Bem-vindo ao curso de PHP!<br>';
			}

			exibirBoasVindas();

			//return (com retorno)
			function calcularAreaTerreno($largura, $comprimento){
				$area = $largura * $comprimento;
				return $area;
			}

			echo calcularAreaTerreno(25, 10);
			echo '<br>';
			echo calcularAreaTerreno(16, 17);
			echo '<br>';
			echo calcularAreaTerreno(32, 50);
			echo '<br>';
			echo calcularAreaTerreno(81, 74);

		?>


	</body>
</html>