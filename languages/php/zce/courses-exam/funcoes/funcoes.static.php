<?php
/**
* static [variaveis estáticas] em funções ou métodos mantem o valor da variável por todas chamadas. Sendo que, quando definida [static $a;], possui valor NULL.
*/

$a = 2;
$b = 3;

function test(){
	global $b;
	static $a;

	$a++;
	$b += $a;

	global $a;
	$a += 2;
}
test();
test();
test();

echo "$a, $b";