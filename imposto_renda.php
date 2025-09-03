<?php 
	echo("============================CALCULO DE IMPOSTO DE RENDA===================================== ");

	$vb = 6300.00;
	$v = $vb * 14 / 100;
	$vd = $vb - $v;
	$vir = 0;
	$vl = 0;
	$res = 0;
	$c = "B";
	$cd = 0;
	if(	$vd < 2428.80) {
		echo('0');;
	} elseif ($vd < 2428.81 && $vd > 2826.65) {
		$res = 7.5;
	} elseif ($vd < 2826.66 && $vd > 3751.05) {
		$res = 15;
	} elseif ($vd < 3751.06 && $vd > 4664.68) {
		$res = 22.5;
	}	elseif ($vd > 4664.68) {
		$res = 27.5;
	}

	switch ($c) {
		case 'A':
			$cd = 50;
			break;
		case 'B':
		$cd = 30;
		break;
		case 'C':
		$cd = 20;
		break;
	}
 	function resultado($vb, $v, $vir, $vd,$res, $vl, $cd, $c) {
 		$vir = $vd*$res/100;
 		$vl = $vd - $vir - $cd;
 		echo("<br/> Sálario Folha: R$$vb");
 		echo("<br/> Desconto INSS: R$$v");
 		echo("<br/> Desconto IR: R$$vir");
 		echo("<br/> O seu clube é o Clube $c e o desconto é de: R$$cd");
 		echo("<br/> Salário Líquido: R$$vl");

 	}


 	echo(resultado($vb, $v, $vir,$vd,$res, $vl, $cd, $c));
 ?>

