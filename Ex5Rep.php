<?php 

$cont = 0;
$idadeM = 0;
$idadeF = 0;
$altM = 0;
$altF = 0;
$sexo1 = "F";
$sexo2 = "M";
$somaAltF = 0;

function medAltF($somaAltF) {
	$media = $somaAltF / 25;
	echo "A média de altura das mulheres é de $media</br>";
}

while($cont <= 25){
$cont++;
$idadeM = 30;
$idadeF = 17;
$altM = 1.80;
$altF = 1.70;
$sexo1 = "F";
$sexo2 = "M";
$somaAltF = $somaAltF + $altF;

}
	if($altM > $altF) {
		echo "A maior altura é de $altM</br> e a menor altura é de $altF</br>";
	} else{
		echo "A maior altura é de $altF</br> e a menor altura é de $altM</br>";
	};

		if($idadeM > $idadeF) {
		echo "A maior idade masculina é de $idadeM</br> e a menor idade feminina é de $idadeF</br>";
	} else{
		echo "A maior altura é de $altF</br> e a menor altura é de $altM</br>";
	};


	echo(medAltF($somaAltF));
 ?>
