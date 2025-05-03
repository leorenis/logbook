<?php
// Une um ou mais arrays a outro array. Essa função nos retorna um novo array com os elementos unidos. Diferentemente das funções de ordenação que vimos até agora, array_merge funciona passando os parâmetros por valor, e não por referência.
$animais = [];

$uniao = array_merge($animais, ['gato'], ['cachorro', 'periquito'], array(['papaguaio']));

print_r($uniao);

// Exemplo 1: Regra 1: Elementos com mesmo VALOR não são sobrescritos, são apenas adicionados no final do array.
$animais_r1 = array_merge($uniao, ['gato']);
print_r($animais_r1);

// Exemplo 2: Elementos com a mesma chave associativa (chaves do tipo string) são sobrescritos e o valor do último elemento é o que prevalecerá.
$aves = ['pato' => 'Patinho', 'galinha' => 'Galinha'];
$maisaves = array_merge($aves, ['codornda'=> 'Codorna', 'pato'=>"Pato Donalds"]);
print_r($maisaves);

// Exemplo 3: Chaves de arrays NUMÉRICOS serão reordenadas.

$carros = [0 => 'Honda Fit', '1' => "Honda Civic"]; // Lembra? Chaves de string com inteiro válido será convertido para uma chave INTEIRA.
$concessionaria = array_merge($carros, array(0 => "Toyota Corola", '1' => "Jeep Renegade")); // Apenas reordena.
var_dump($concessionaria);