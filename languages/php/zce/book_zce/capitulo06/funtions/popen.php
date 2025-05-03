<?php
/**
* popen — Abre um processo como ponteiro de arquivo.
* Retorna um ponteiro de arquivo idêntico ao retornado por fopen(), exceto que ele é unidirecional (somente pode ser usado para leitura ou gravação) e tem que ser fechado com pclose. Este ponteiro pode ser usado com fgets(), fgetss() e fwrite().
*/

/* Add redirection so we can get stderr. */
$handle = popen('/path/to/spooge 2>&1', 'r');
echo "'$handle'; " . gettype($handle) . "\n";
$read = fread($handle, 2096);
echo $read;
pclose($handle);