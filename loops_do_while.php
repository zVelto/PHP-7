<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>
	<body>
		
		<?php  

            $x = 1;

            do {
                echo "x = $x <br/>";

                $x++; //critério de parada

                //continue
                //break
            } while($x < 9);

            /*
            echo '<br/>';
            while($x < 9) {
                echo 'Entrou no while';
            }
            */

		?>

	</body>
</html>