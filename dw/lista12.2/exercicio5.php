<!DOCTYPE html>
<html>
<head>
	<title>Exercício 5</title>
</head>
<body>

	<?php
		$t1 = 5.9;
		$t2 = 7.8;
		$t3 = 8.5;
		$media = (($t1 + $t2 + $t3)/3);

		echo "Média: ".$media."<br>";

		if ($media >= 6.0) {
			echo "Resultado final: aprovad@";
		} elseif ($media >= 3) {
			echo "Resultado final: recuperação";
		} else {
			echo "Resultado final: reprovad@";
		}
	?>

</body>
</html>