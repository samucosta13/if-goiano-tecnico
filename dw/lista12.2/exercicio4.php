<!DOCTYPE html>
<html>
<head>
	<title>Exercício 4</title>
</head>
<body>

	<?php
		$a = 6;
		$b = 12;

		if ($a % 2 == 0) {
			$a = $a + 1;
		} else {
			$a = $a + 2;
		}

		$soma = 0;
		for ($a; $a < $b; $a = $a + 2) { 
			echo $a."<br>";
			$soma = $soma + $a;
		}

		echo "Soma: ".$soma;
	?>

</body>
</html>