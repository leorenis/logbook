<?php
$carros = [
	'gol',
	'fiesta',
	'uno'
];

$rs = sort($carros); // Array $carros passado por referencia. Nesse caso, a variavel $rs não receberá um array e sim um booleano (1).
// Por padrão há uma constante como segundo parâmetro SORT_REGULAR. Por isso os exemplos são identicos.
print_r($carros);
echo nl2br("\n");

sort($carros, SORT_REGULAR);
print_r($carros);
echo nl2br("\n");
var_dump($rs);

// Exemplo 2 - Utilizando flag SORT_NUMERIC e SORT_STRING
echo nl2br("\n");
$numeros = ['29', '12', '14'];
sort($numeros, SORT_NUMERIC); // Força a comparação de elementos numericos
var_dump($numeros);

echo nl2br("\n");
sort($numeros, SORT_STRING); // Força a comparação de elementos como string
var_dump($numeros);

// Exemplo 3 - Utilizando SORT_LOCALE_STRING
$string = ["PHP", "abc", "Olá"];
echo nl2br("\n");
sort($string, SORT_LOCALE_STRING); // Força a comparação de elementos como string
var_dump($string);

// Exemplo 4 - Utilizando SORT_NATURAL
$alfabeto = ['b', 'z', 'm', 'c', ];
sort($alfabeto, SORT_NATURAL);
echo nl2br("\n");
var_dump($alfabeto);

// Exemplo 5 - Utilizando SORT_FLAG_CASE
$alfabeto = ['B', 'z', 'm', 'C', ];
sort($alfabeto, SORT_FLAG_CASE);
echo nl2br("\n");
var_dump($alfabeto);

// Exemplo 6 - Referencia
function sort_my_array($array)
{
	return sort($array);
}
$a1 = array(3, 2, 1);
var_dump(sort_my_array(&$a1)); // PHP Fatal Error: Call-time pass-by-reference