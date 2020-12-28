<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>
	<body>
		
		<?php  

            $sorteio = array();

            for($i = 0; $i < 6; $i++) {
                $num = rand(0, 60);

                while(in_array($num, $sorteio)){
                    $num = rand(1, 60);
                }

                $sorteio[$i] = $num;
            }

            echo '<pre>';
			print_r($sorteio);
			echo '</pre>';
            

		?>

	</body>
</html>/