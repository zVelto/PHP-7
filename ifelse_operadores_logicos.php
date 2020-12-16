<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>
	<body>
		<?php

			//operadores condicionais/comparação
			//==
			//===
			//!= ou <>
			//!==
			//<
			//>
			//<=
			//>=

			//operadores lógicos
			//E: && ou AND -> retorna verdadeiro se todos os resultados das expressões forem verdadeiros
			//OU: || ou OR -> retorna verdadeiro se pelo menos um dos resultados for verdadeiro
			//XOR: XOR -> retorna verdadeiro se uma das expressões seja verdadeira e a outra seja falsa
			//! -> inverte o resultado retornado pela expressão

			//() estabelecer precedência

			//(v e v) = v ou f = v
			if((22 == 22 && 3 == 3) || 5 != 5){
				echo 'Verdadeiro';
			} else {
				echo 'Falso';
			}

		?>
	</body>
</html>