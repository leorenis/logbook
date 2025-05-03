<?php
$var = true;
switch($var){
 case 2:
	echo "2";
 break;
 echo "Teste"; // Nao é mostrado
 case true:
	echo "1";
 break;
 case 1: 
	echo 'teste';
	break;
}


$var = 'minhaVar';
switch ($var) {
	case 0:
		echo "Case 0";
	case 'minhaVar':
	echo "Caso minhaVar";
	case 'nothing':
		echo "Caso nada";
}
$var = 2;
switch ($var) {
	case true:
		echo "1 case";
	case 2:
	echo "2 case";
	case '2':
		echo "'2' case";
}

// Teste de transformação de inteiro para string
$int = 048; // Vai dar erro
$var = (string) $int;
print $var;