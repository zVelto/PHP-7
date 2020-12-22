<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>
	<body>
		
		<?php  

			/*
			//sequencias (numpericos)
			//$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacate');

			$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'];

			$lista_frutas[] = 'Abacaxi';

			
			echo '<pre>';
			var_dump($lista_frutas);
			echo '</pre>';
			echo '<hr>';
			echo '<pre>';
			print_r($lista_frutas);
			echo '</pre>';

			echo $lista_frutas[4];
			*/

			//associativos
			$lista_frutas = array(
				'a' => 'Banana', 
				'b' => 'Maçã', 
				false => 'Morango', 
				'z' => 'Uva', 
				'2' => 'Abacate');

			$lista_frutas['w'] = 'Abacaxi';

			echo '<pre>';
			var_dump($lista_frutas);
			echo '</pre>';
			echo '<hr>';

			
			echo $lista_frutas['w'];

		?>

	</body>
</html>