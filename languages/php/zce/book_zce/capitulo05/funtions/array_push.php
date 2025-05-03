<?php
/**
 * Permite adicionar um elemento no final do array. Essa função aceita qualquer tipo de dado para ser adicionado ao array.  Essa função recebe um array como referência. Seu valor de retorno é o numero total de elementos após a edição.
*/
$eletronicos = [50 => "Fifty"];

$total = array_push($eletronicos, 'TV',"Laptop", "DVD");

var_dump($eletronicos, $total);

$total = array_push($eletronicos, new \StdClass(), ["0", '1', 5], 123, "321", 0);

var_dump($eletronicos);

sort($eletronicos);

print_r($eletronicos);
print "$total";
