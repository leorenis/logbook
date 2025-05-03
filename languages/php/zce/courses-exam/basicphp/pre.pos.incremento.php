<?php
$a = 1;
var_dump($a ++); // Mostra 1 ainda, pois primeiro mostra a variavel, depois realiza operacao para incrementar mais um.

$b = 0;
var_dump(++$b);

$y = 1;
$z = 2;
for($i = 0; $i < 10; $i ++){
	print mostrarNumero($y++, $z++);
}

function mostrarNumero($y, $z){
	return "y: $y, z: $z \n";
}