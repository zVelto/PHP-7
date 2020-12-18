<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>
	<body>
		
		<?php

			
			function calcularImposto($salario){
				$aliquota = 0;

				if($salario < 1903.98){
					return $aliquota;

				}else if ($salario < 2826.65){
					$aliquota = 0.075;
					return $aliquota * $salario;

				}else if ($salario < 3751.05){
					$aliquota = 0.15;
					return $aliquota * $salario;

				}else if ($salario < 4664.68){
					$aliquota = 0.225;
					return $aliquota * $salario;

				}else {
					$aliquota = 0.275;
					return $aliquota * $salario;

				}
			}


		?>

		<h3>O imposto é de:</h3>
		<p><?= calcularImposto(2150) ?></p>


	</body>
</html>