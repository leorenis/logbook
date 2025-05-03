<?php
// Funciona como a sort, porém com um DETALHE muito IMPORTANTE. Com a asort(), MANTEMOS a relação entre as chaves e valores no Array.

$numeros = ['1', '0', '3', '2']; // Ordena do maior para o menor.
asort($numeros);
print_r($numeros);

echo nl2br("\n");

$alfabeto = ['c', 'a', 'b', 'd']; // Ordena do maior para o menor.
asort($alfabeto);
print_r($alfabeto);

echo nl2br("\n");

$frutas = ['uva', 'banana', 'caju', 'damasco']; // Ordena do maior para o menor.
asort($frutas);
print_r($frutas);