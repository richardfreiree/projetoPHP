<?php 

// calculadora
	echo("============================CALCULADORA===================================== <br/> 1-Soma <br/> 2-Subtração <br/> 3-Divisão </br> 4-Multiplicação");

	$escolha = 2;
	$num1 = 40;
	$num2 = 10;
	$resp = 0;
	function somaValor($a,$b){
		return($a + $b);
	};
		function subtracaoValor($a, $b){
		return($a - $b);

	};

	function divisaoValor($a, $b){
	return($a / $b);


	};

	function multiplicacaoValor($a, $b){
		return($a * $b);


	};


	if($escolha == 1) {
	$resp =	somaValor($num1, $num2);
		$var = "soma";

	}
	elseif ($escolha == 2) {
	$resp = subtracaoValor($num1, $num2);
			$var = "subtração";

	}
	elseif ($escolha == 3) {
	$resp =	divisaoValor($num1, $num2);
			$var = "divisão";

	}
	elseif ($escolha == 4) {
	$resp =	multiplicacaoValor($num1, $num2);
			$var = "multiplicação";

	};

		function resultado($num1, $num2, $var, $resp){
	echo "<br/><br/>Os numeros digitados foram $num1 e $num2";
	echo "<br/>O calculo escolhido foi a $var";
	echo "<br/>A resposta da soma é: $resp";

	};
	resultado($num1, $num2, $var, $resp);


 ?>	