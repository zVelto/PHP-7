<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>
	<body>
		<?php

			$nome = "Welton";
			$cor = 'vermelho';
			$idade = 25;
			$atividade_preferida = 'jogar LOL';

			//operador .

			echo 'Olá ' . $nome .', vi que sua cor preferida é ' . $cor . ', que você tem ' . $idade . ' anos e que gosta de ' . $atividade_preferida . '!';

			//aspas duplas
			echo '<br />';

			echo "Olá $nome, vi que sua cor preferida é $cor, que você tem $idade anos e que gosta de $atividade_preferida!";

			echo '<br />';

			echo 'Olá $nome, vi que sua cor preferida é $cor, que você tem $idade anos e que gosta de $atividade_preferida!';

		?>
	</body>
</html>