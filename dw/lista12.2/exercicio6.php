<!DOCTYPE html>
<html>
<head>
	<title>Exercício 6</title>
</head>
<body>

	<?php
		$soma = 0;
		$impar = 0;
		$par = 0;
		$m10 = 0;
		for ($s = 1000; $s <= 1500; $s++) {
			$soma = $soma + 1;
			if ($s%2 != 0) {
				$impar = $impar + 1;
			}
			if ($s%2 == 0) {
				$par = $par + $s;
			}
			if ($s%10 == 0) {
				$m10 = $m10 + 1;
			}
		}

		echo "Há ".$soma." números entre 1000 e 1500, inclusive. <br> Há ".$impar." ímpares nesse intervalo. <br> A soma dos pares nesse intervalo é igual a ".$par.".<br> Existem ".$m10." múltiplos de 10 entre 1000 e 1500, inclusive.";
	?>
</body>
</html>