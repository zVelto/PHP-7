<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>
	<body>
		
		<?php  

            $registros = array(
                array('titulo' => 'Título 1', 'conteudo' => 'Conteúdo notícia 1'),
                array('titulo' => 'Título 2', 'conteudo' => 'Conteúdo notícia 2'),
                array('titulo' => 'Título 3', 'conteudo' => 'Conteúdo notícia 3'),
                array('titulo' => 'Título 4', 'conteudo' => 'Conteúdo notícia 4')
            );

            echo '<pre>';
            print_r($registros);
            echo "</pre>";

            echo '<br> <br>';

            
            $idx = 0;

            //count -> conta a quantidade de elementos de array
            echo 'O array possui: ' . count($registros) . ' registros';
            echo '<br>';

            /*
            while($idx < count($registros)) {

                echo '<h3>' . $registros[$idx]['titulo'] . '</h3';

                echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

                echo '<hr/>';

                $idx++;
            }
            */

            /*
            do {
                echo '<h3>' . $registros[$idx]['titulo'] . '</h3';

                echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

                echo '<hr/>';

                $idx++;

            } while($idx < count($registros));
            */

            for($idx = 0; $idx < count($registros); $idx++) {
                echo '<h3>' . $registros[$idx]['titulo'] . '</h3';

                echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

                echo '<hr/>';
            }

		?>

	</body>
</html>