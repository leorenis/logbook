<?php
// Retorna os argumentos passados pela função
function soma(){
	$a = func_get_arg(0);
	$b = func_get_arg(1);
	return $a + $b;
}

print soma(1, 6); 

print soma(7); // Passando apenas um argumento, sera lançado um WARNING. Porém o resultado ainda aparecera no final