<?php
// Arrays associativos e enumerativos
$elementos = [
    0 => 'PHP', // Nao será mostrado
    1 => 'DELPHI',
    0 => 'JAVA', // Será mostrado como primeiro elemento
    23 => 'ASP.NET', // Nao precisamos seguir uma ordem crescente :). Isso é legal
];

$elementos[] = "NODE.JS"; 

print_r($elementos);

// Teste 2 com booleanos em chaves

$elementos2 = [true => false, false => false, 5 => false, true => 2]; // O boleano como chave é convertido para inteiro.
var_dump(count($elementos2)); // Conta apenas as chaves diferentes. Nesse caso o resultado é três. O primeiro elemento não será considerado por ter a chave igual ao último.
print_r($elementos2);

// Teste 3 com chaves floats serão convertidas para inteiros
$floats = [
	4.3 => 5,	// chave sera int 4
	2.5 => 1,	// chave sera int 2
	"3" => 3,	// chave sera int 3
	0 => 6,		// Nao será considerado nem mostrado, pois o item abaixo é um inteiro INVALIDO e será transformado em [0].
	05 => 8,	// chave sera int 5
	"3.8" => 3.5 // Chave será STRING '3.8'
];
echo nl2br("\n \n");
var_dump($floats);

// Teste 4 com strings maiusculas nas chaves
$alfabeto = [
    'A' => "A",
    'a' => "a",
    'B' => "b",
    'b' => "B",
    'C', // Qual sera a chave?
];
echo nl2br("\n \n");
print_r($alfabeto);

// Teste 5... Como ficarão as chaves?
$array = array(
         "a",
    7 => "a1",
         "a2",
         "b",
    6 => "c",
         "d", // A Chave será 10, pois a MAIOR chave encontrada antes do atual elemento foi IGUAL a 7, seguida de dois elementos sem chave. 
);
echo nl2br("\n \n");
print_r($array);