<?php
/**
* pathinfo — Retorna informações sobre um caminho de arquivo. 
* pathinfo() retorna um array associativo contendo inforamações sobre o caminho em path.
*/
$path_parts = pathinfo('../arquivos/texto.txt');
var_dump($path_parts);