<?php
// Pelo wrapper php:// , podemos manipular a entrada e saída de diferentes formas que podem ser utilizadas tanto em aplicações desenvolvidas para a web (que são acessadas via navegador) quanto para aplicações que usam a linha de comando.

$put = fopen('php://input', 'r');
print fgets($put);