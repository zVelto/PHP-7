<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>
	<body>
		
		<?php  

            //false (true/false) - tipo variável boolean
            //null e empty - valores especiais

            $funcionário1 = null;
            $funcionário2 = '';
            $funcionário3 = false;

            //valores null
            if(is_null($funcionário1)) {
                echo 'Sim, a variável é null';
            } else {
                echo 'Não, a variável não é null';
            }

            echo '<br>';
            if(is_null($funcionário2)) {
                echo 'Sim, a variável é null';
            } else {
                echo 'Não, a variável não é null';
            }

            echo '<br>';
            if(is_null($funcionário3)) {
                echo 'Sim, a variável é null';
            } else {
                echo 'Não, a variável não é null';
            }

            echo '<hr>';

            //valores vazios
            if(empty($funcionário1)) {
                echo 'Sim, a variável está vazia';
            } else {
                echo 'Não, a variável não está vazia';
            }

            echo '<br>';
            if(empty($funcionário2)) {
                echo 'Sim, a variável está vazia';
            } else {
                echo 'Não, a variável não está vazia';
            }

            echo '<br>';
            if(empty($funcionário3)) {
                echo 'Sim, a variável está vazia';
            } else {
                echo 'Não, a variável não está vazia';
            }

		?>

	</body>
</html>