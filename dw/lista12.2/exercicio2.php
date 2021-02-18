<!DOCTYPE html>
<html>
<head>
	<title>Exercício 2</title>
</head>
<body>

	<?php
		$cliente = "Sam";
		$produto = "brigadeiro";
		$valor_unitario = 1.5;
		$quantidade = 70;
		$parcelas = 5;

		$compra = ($valor_unitario * $quantidade);

		echo "Venda realizada para ".$cliente."<br> 
		Produto adquirido: ".$produto." no valor de ".$valor_unitario." real cada. <br> 
		Quantidade comprada: ".$quantidade."<br> 
		Total da compra: ".$compra." reais dividido em ".$parcelas." parcelas. <br> 
		Simulação das parcelas: <br>";

		$parcela = ($compra/$parcelas);
		$n = 1;
		$pay = 0;
		while ($n <= $parcelas) {
			$pay = $pay + $parcela;
			echo "Parcela ".$n." de 4: ".$parcela." reais, totalizando ".$pay." reais pagos. <br>";
			$n = $n + 1;
		}
	?>

</body>
</html>