<?php
// Retira o primeiro elemento de um array

$frutas = ["Fruta verde", "Maçã", "Jaca", "Uva"];

// Temos que retirar a fruta verde do array
array_shift($frutas);

print_r($frutas);