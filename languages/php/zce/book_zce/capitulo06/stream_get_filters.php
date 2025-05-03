<?php
/*
 * Podemos usar a função stream_get_filters para descobrir quais filtros estão disponíveis no ambiente que estamos executando o PHP.
*/
$filtros = stream_get_filters();
print_r($filtros);