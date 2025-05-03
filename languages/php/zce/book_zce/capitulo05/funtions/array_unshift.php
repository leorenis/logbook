<?php
// Adiciona um ou mais elementos no início de um array().
$cesta = ['frutas verdes', 'frutas de vez', 'frutas maduras'];
$total = array_unshift($cesta, "Laisinha", "outras frutas", "algumas bananas");
var_dump($cesta, $total);