<?php
$string = "Season Treinamentos";
$pattern = '/^S/'; // Verdadeiro se inicia com [S maiusculo].
var_dump(preg_match($pattern, $string)); // 0

// ^ Fora do colchete, ele procura por um S na primeira linha.
$pattern = '~[^S]~'; // Verdadeiro, se existe qualquer coisa diferente de [S maiusculo].
var_dump(preg_match($pattern, $string));