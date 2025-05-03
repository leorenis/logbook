<?php
// Possui o comportamento idêntico à função rsort. Porém, aqui na função arsort mantemos a relação entre as chaves e valor dos elementos do array.
$frutas = ['uva', 'banana', 'caju', 'damasco']; // Ordena do maior para o menor.
arsort($frutas);
print_r($frutas);