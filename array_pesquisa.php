<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>
	<body>
		
		<?php  

            //in_array() -> true ou false para a existencia do objeto pesquisado
            //array_search() -> retorna o indíce do valor pesquisado caso ele exista, se o valor não existir retorna null

            $lista_de_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

            /*
            echo '<pre>';
            print_r($lista_de_frutas);
            echo '</pre>';

            $existe = in_array('Maçã', $lista_de_frutas);
            //true -> texto impresso = 1
            //false -> texto impresso = vazio;
            $existe = array_search('Uva', $lista_de_frutas);

    
            if($existe != null) {
                echo "O valor pesquisado existe no array";
            }
            else {
                echo 'O valor pesquisado não existe no array';
            }
            */

            $lista_coisas = [
                'frutas' => $lista_de_frutas,
                'pessoas' => ['João', 'José', 'Maria']
            ];

            echo '<pre>';
            print_r($lista_coisas);
            echo '</pre>';

            echo in_array('Uva', $lista_coisas['frutas']);

		?>

	</body>
</html>