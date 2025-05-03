<?php
// Funciona como a sort com suas flags. Ordena seus elementos do MAIOR elemento para o MENOR.
$numeros = ['1', '2', '3', '4']; // Ordena do maior para o menor.
rsort($numeros);
print_r($numeros);

echo nl2br("\n");

$alfabeto = ['a', 'b', 'c', 'd']; // Ordena do maior para o menor.
rsort($alfabeto);
print_r($alfabeto);

echo nl2br("\n");

$frutas = ['uva', 'banana', 'caju', 'damasco']; // Ordena do maior para o menor.
rsort($frutas);
print_r($frutas);