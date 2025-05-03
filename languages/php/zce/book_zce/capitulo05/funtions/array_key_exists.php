<?php
// 	Checa se uma chave existe em um array, independente se essa chave tem valor ou não. retorna TRUE se a chave key existe no array. key pode ser qualquer valor possível para um índice de um array.

$computador = ['componente' => 'Componente'];

var_dump(array_key_exists('componente', $computador));

$pc = ['a'=> null];
var_dump(array_key_exists('a', $pc));