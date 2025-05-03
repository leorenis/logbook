<?php
// Calcula a diferença entre do array "A" para o array "B, C, D" e assim por diante. Ela retornará todos os elementos que estão no array "A", mas NAO estão nos outros.
$dogs = ['Pit bull', 'Doberman', 'Pastor Alemao', 'Pastor belga'];
$nascidos2209 = ['Pastor Alemao', "Shitsu", "Pit bull", "Pint"];
$nascidos3108 = ["Chauchau", "Doberman", "Dalmata"];

$filhoteraro = array_diff($dogs, $nascidos2209, $nascidos3108);

print_r($filhoteraro); // Pastor Belga será o UNICO nao encontrado no array $dogs


// Exemplo 2
$a = ['pedra', 'papel'];
$b = ['tesoura'];
print_r(array_diff($a, $b)); // pedra e papel nao constam em $b