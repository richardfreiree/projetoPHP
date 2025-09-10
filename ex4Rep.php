<?php 

$num1 = 5;
$num2 = 6;
$num3 = 3;
$fi = 0;
$ft = false;
while ($ft != true) {
	if($num1 > $num2){
		$fi = $num2;
		$num2 = $num1;
		$num1 = $fi;

	}elseif ($num2 > $num3) {
		$fi = $num3;
		$num3 = $num2;
		$num2 = $fi;
	} else{
		$ft = true;
		echo "$num1 $num2 $num3";
	}

};

 ?>