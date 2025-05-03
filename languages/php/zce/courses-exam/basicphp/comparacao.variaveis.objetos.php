<?php
/**
* Variaveis Primitivas.
*
* Dois sinais de igual [==] o PHP compara apenas valores;
* Três sinais de igual [===] o PHP compara valor e tipo.
*/

$a = 1;
$b = '1';
// Dois sinais
if($a == $b){
	echo "Iguais \n";
}else{
	echo "Diferentes \n";
}

// Tres sinais
if($a === $b){
	echo "Iguais \n";
}else{
	echo "Diferentes \n";
}

/**
* Objetos.
*
* Dois sinais o PHP compara tipo e estado do Objeto;
* Três sinais o PHP compara o espaço em memoria.
* No PHP o clone só clona o objeto principal.
* Objetos sao sempre passados por referencia. Se $objD = $objA, o Objeto D será o Objeto A. Ambos terão o mesmo espaço em memoria.
*/
$objA = new stdClass();
$objB = new stdClass();

echo "\n Comparacao entre objA e objB: \n";

if($objA == $objB){
	echo "Objetos Iguais \n";
}else{
	echo "Objetos Diferentes \n";
}

// Tres sinais
if($objA === $objB){
	echo "Objetos Iguais \n";
}else{
	echo "Objetos Diferentes \n";
}

$objC = clone $objA;

echo "\n Comparacao usando clone entre objC e objA: \n";
if($objA == $objC){
	echo "Objetos Iguais \n";
}else{
	echo "Objetos Diferentes \n";
}

// Tres sinais
if($objA === $objC){
	echo "Objetos Iguais \n";
}else{
	echo "Objetos Diferentes \n";
}

// Passagem de objetos por referencia (atribuição).
$objD = $objA;
$objD->name = "Leo Renis";
var_dump($objA, $objD);
print_r(serialize($objD));
echo "\n";
print_r(serialize($objA));