<?php 

// calculadora
	echo("============================CALCULADORA===================================== <br/> 1-Soma <br/> 2-Subtração <br/> 3-Divisão </br> 4-Multiplicação");

	$escolha = 3;
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
	echo "<br/><br/>Os numeros digitados foram $num1 e $num2";
	echo "<br/>O calculo escolhido foi a Soma";
	echo "<br/>A resposta da soma é: $resp";
	}
	elseif ($escolha == 2) {
	$resp = subtracaoValor($num1, $num2);
	echo "<br/><br/>Os numeros digitados foram $num1 e $num2";
	echo "<br/>O calculo escolhido foi a Subtração";
	echo "<br/>A resposta da subtração é: $resp";
	}
	elseif ($escolha == 3) {
	$resp =	divisaoValor($num1, $num2);
	echo "<br/><br/>Os numeros digitados foram $num1 e $num2";
	echo "<br/>O calculo escolhido foi a Divisão";
	echo "<br/>A resposta da divisão é: $resp";
	}
	elseif ($escolha == 4) {
	$resp =	multiplicacaoValor($num1, $num2);
	echo "<br/><br/>Os numeros digitados foram $num1 e $num2";
	echo "<br/>O calculo escolhido foi a Multiplição";
	echo "<br/>A resposta da multiplicação é: $resp";
	};

 ?>	