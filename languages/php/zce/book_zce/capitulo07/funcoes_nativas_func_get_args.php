<?php
// Retorna em um array quais argumentos foram passados para a função.
function somar(){
	$total = 0;
	foreach (func_get_args() as $parametro) {
		$total += $parametro;
	}
	return $total;
}

print somar(3, 7, 5, 2); // func_get_args gera um array enumerado [array(0=>3, 1=>7, 2=>5, 3=>2)]. Respeitando a ordem dos argumentos
print somar(3);