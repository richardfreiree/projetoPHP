<?php 

// calculadora
	echo("============================CALCULADORA===================================== <br/> 1-Soma <br/> 2-Subtração <br/> 3-Divisão </br> 4-Multiplicação");

	$escolha = 1;
	$num1 = 20;
	$num2 = 30;
	$resp = 0;
	function somaValor($a,$b){
		return($a + $b);

	};
		function subtracaoValor(){
		return($a - $b);

	};

	function divisaoValor(){
	return($a / $b);


	};

	function multiplicacaoValor(){
		return($a * $b);


	};

	if($escolha == 1) {
	$resp =	somaValor($num1, $num2);
	echo "<br/><br/>Os numeros digitados foram $num1 e $num2";
	echo "<br/>O calculo escolhido foi a Soma";
	echo "<br/>A resposta da soma é: $resp";
	}
	elseif ($escolha == 2) {
	subtracaoValor($num1, $num2);
	}
	elseif ($escolha == 3) {
		divisaoValor($num1, $num2);
	}
	elseif ($escolha == 4) {
		multiplicacaoValor($num1, $num2);
	};

 ?>	