<?php 
	echo("============================CALCULO DE IMPOSTO DE RENDA===================================== ");

	$vb = 6300.00;
	$v = $vb * 14 / 100;
	$vd = $vb - $v;
	$vir = 0;
	$vl = 0;
	function daliqota($num, $d) {
		$vir = $num*$d / 100;
		$vl = $num - $vir;
	}

	if(	$vd < 24280.80) {
		$res = 0;
	} elseif ($vd < 2428.81 && $vd > 2826.65) {
		$res = daliqota($vd, 7.5);
	} elseif ($vd < 2826.66 && $vd > 3751.05) {
		$res = daliqota($vd, 15);
	} elseif ($vd < 3751.06 && $vd > 4664.68) {
		$res = daliqota($vd, 22.5);
	}	elseif ($vd > 4664.68) {
		$res = daliqota($vd, 27.5);
	}
 	function resultado($vb, $v, $resp, $vl) {
 		echo("<br/> Sálario Folha: R$$vb");
 		echo("<br/> Desconto INSS: R$v");
 		echo("<br/> Desconto IR: R$$resp");
 		echo("<br/> Salário Líquido: R$$vl");
 	}

 	echo(resultado($vb, $v, $vd,$res, $vl));
 ?>

