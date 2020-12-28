<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>
	<body>
		
		<?php  

            $lista_coisas = array();
            
            $lista_coisas['frutas'] = [1 => 'Banana', 2 => 'Maçã', 3 => 'Morango', 4 => 'Uva'];
            $lista_coisas['pessoas'] = array(1 => 'João', 2 => 'José', 3 => 'Maria');

            echo '<pre>';
            print_r($lista_coisas);
            echo '</pre>';
            
            echo '<hr>';
            print_r($lista_coisas['frutas'][3]);
            echo '<br>';
            print_r($lista_coisas['pessoas'][2]);

		?>

	</body>
</html>