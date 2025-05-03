<?php
/**
* fstat — Lê informações sobre um arquivo usando um ponteiro de arquivo aberto.
*/

// abre um arquivo
$filename = '../arquivos/texto.txt';
$fp = fopen($filename, "r");

// colhe as estatísticas
$fstat = fstat($fp);

// fecha o arquivo
fclose($fp);

print_r($fstat);