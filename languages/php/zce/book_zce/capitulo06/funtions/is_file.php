<?php
/**
* is_file — Informa se o arquivo é um arquivo comum (não é diretório).
* Retorna TRUE se o nome do arquivo existe e é um arquivo regular, FALSE caso contrário.
*/

var_dump(is_file('../arquivos/texto.txt')) . "\n"; // True
var_dump(is_file('../arquivos/')) . "\n"; // False