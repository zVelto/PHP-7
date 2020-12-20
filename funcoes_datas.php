<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>
	<body>
		
		<?php  

			/*
			//recuperação da data atual / data corrente
			echo date('d/m/Y H:i');

			//
			echo '<br>';
			echo date_default_timezone_get();
			date_default_timezone_set('America/Sao_Paulo');

			echo '<br>';
			echo date('d/m/Y H:i');
			echo '<br>';
			echo date_default_timezone_get();
			*/

			$data_inicial = '2018-04-24';
			$data_final = '2018-05-15';

			//timestamp

			$time_inicial = strtotime($data_inicial);
			$time_final = strtotime($data_final);

			echo $data_inicial . ' - ' . $time_inicial;
			echo '<br>';
			echo $data_final . ' - ' . $time_final;

			$diferenca_times = $time_final - $time_inicial;

			echo '<br>';
			echo 'A diferença de segundos entre a data final e a data inicial é de: ' . $diferenca_times;

			$segundos_em_um_dia = 24 * 60 * 60;

			echo '<br>';
			echo "Um dia possui $segundos_em_um_dia segundos";

			$diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_em_um_dia;

			echo '<br>';
			echo "A diferença de dias entre a data final e a data inicial é de: $diferenca_de_dias_entre_as_datas dias";

		?>

	</body>
</html>