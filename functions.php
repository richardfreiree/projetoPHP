<?php  	

function somaValor ($num1, $num2){
	return($num1+$num2);

}

$valor1 = 10; $valor = 20;
$resposta = somaValor(10,20);

echo("SA soma de num1 e num2 é $resposta <br/>");

$somando = somaValor(30,40)+somaValor(50,60);

echo ("<br/> $somando");
 ?>