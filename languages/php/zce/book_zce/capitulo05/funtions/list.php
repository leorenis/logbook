<?php
$invalido = ["leite"=>'leite', '1litro', 4.56]; // Inválido por que list() funciona somente com arrays numéricos e espera que esses índices comecem de 0 (zero).
$produto = ['leite', '1litro', 4.56];

// List
list($nome, $quantidade, $preco) = $produto;
var_dump($nome, $quantidade, $preco);


// Exemplo com array
$info = array('café', 'marrom', 'cafeína');
list($a[0], $a[1], $a[2]) = $info;
var_dump($a);


// List aninhado
list($k, list($l, $j)) = array(1, array(2, 3));
var_dump($k, $l, $j);

// List com arrays multidimensionais
$computadores = [
	['2GB', '80GB', 'duo core'],
	['6GB', '120GB', 'core i5'],
	['4GB', '500GB', 'core i7'],
	['4GB', '500GB', 'core i7'],
];
for ($i = 0; $i < count($computadores); $i++) {
	list($memoria, $hd, $processador) = $computadores[$i];
	print $memoria . "\t" .$hd . "\t" . $processador. "\n";
}