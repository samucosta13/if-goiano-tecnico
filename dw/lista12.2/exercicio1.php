<!DOCTYPE html>
<html>
<head>
	<title>Exercício 1</title>
</head>
<body>

	<?php
		$nome = "Sam";
		$quant = 8;
		$contador = 0;

		echo "<ul>";

		while ($contador <= 8){
			echo "<li>".$nome."</li>";
			$contador = ($contador + 1);
		}

		echo "</ul>";
	?>

</body>
</html>