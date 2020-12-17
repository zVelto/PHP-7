<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>
	<body>
		
		<?php
			$idade = 28;
			$peso = 90;

			if($idade >= 16 && $idade <= 69 && $peso >=50) {
				echo 'Atende aos requisistos';
			} else {
				echo 'Não atende aos requisitos';
			}
		?>

	</body>
</html>